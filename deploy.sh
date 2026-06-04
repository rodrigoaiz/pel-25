#!/bin/bash

# Script de despliegue optimizado para PEL-25
# Uso: ./deploy.sh [staging|production] [--auto-build] [--no-package] [--subject <slug>]

set -e

# Configuración
ENVIRONMENT=${1:-staging}
BUILD_DIR="dist"
DEPLOY_DIR="deploy-package"
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
PACKAGE_NAME="pel-25-${ENVIRONMENT}-${TIMESTAMP}"

# Opciones
AUTO_BUILD=false
NO_PACKAGE=false
TARGET_SUBJECT=""

# Funciones auxiliares
show_error() {
    echo -e "${RED}❌ $1${NC}"
    exit 1
}

copy_item_to_package() {
    local item="$1"
    local source_path="$BUILD_DIR/$item"
    local target_path="$DEPLOY_DIR/$item"

    if [ ! -e "$source_path" ]; then
        return
    fi

    if [ -d "$source_path" ]; then
        mkdir -p "$target_path"
        rsync -av \
            --exclude='*.map' \
            --exclude='*.tmp' \
            --exclude='*.cache' \
            --exclude='.DS_Store' \
            "$source_path/" "$target_path/"
    else
        mkdir -p "$(dirname "$target_path")"
        cp "$source_path" "$target_path"
    fi
}

rsync_partial_to_remote() {
    rsync -avz --delete \
        --omit-dir-times \
        --no-perms \
        --no-owner \
        --no-group \
        --progress \
        --exclude='*.map' \
        --exclude='*.tmp' \
        --exclude='*.cache' \
        --exclude='.DS_Store' \
        --include='*/' \
        --include='/assets/***' \
        --include='/include/***' \
        --include='/js/***' \
        --include='/config.php' \
        --include='/menu.json' \
        --include="/${TARGET_SUBJECT}/***" \
        --exclude='*' \
        "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
}

# Procesar argumentos
shift
while [ $# -gt 0 ]; do
    case "$1" in
        --auto-build)
            AUTO_BUILD=true
            ;;
        --no-package)
            NO_PACKAGE=true
            ;;
        --subject|--asignatura)
            shift
            if [ -z "$1" ]; then
                show_error "Debes indicar el slug de la asignatura despues de --subject"
            fi
            TARGET_SUBJECT="$1"
            ;;
        *)
            show_error "Opcion no reconocida: $1"
            ;;
    esac
    shift
done

# Colores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Iniciando despliegue para: ${ENVIRONMENT}${NC}"

# Cargar configuración desde deploy.config si existe
if [ -f "./deploy.config" ]; then
    echo -e "${YELLOW}📝 Cargando configuración desde deploy.config...${NC}"
    source ./deploy.config
    if [ "$ENVIRONMENT" = "production" ]; then
        load_deploy_config production
    elif [ "$ENVIRONMENT" = "staging" ]; then
        load_deploy_config staging
    fi
fi

# Función para mostrar progreso
show_progress() {
    echo -e "${YELLOW}⏳ $1${NC}"
}

show_success() {
    echo -e "${GREEN}✅ $1${NC}"
}

# Verificar que existe el directorio dist o hacer build si es necesario
if [ ! -d "$BUILD_DIR" ] || [ "$AUTO_BUILD" = true ]; then
    if [ ! -d "$BUILD_DIR" ]; then
        show_progress "Directorio dist no encontrado. Ejecutando build automáticamente..."
    else
        show_progress "Opción --auto-build detectada. Reconstruyendo..."
    fi
    
    show_progress "Ejecutando 'npm run build'..."
    npm run build
    
    if [ $? -ne 0 ]; then
        show_error "Error en el build. Verifica que no hay errores en tu código."
    fi
    
    show_success "Build completado exitosamente"
fi

DEPLOY_ITEMS=("assets" "include" "js" "config.php" "menu.json")

if [ -n "$TARGET_SUBJECT" ]; then
    if [ ! -d "$BUILD_DIR/$TARGET_SUBJECT" ]; then
        show_error "La asignatura '$TARGET_SUBJECT' no existe en $BUILD_DIR"
    fi

    DEPLOY_ITEMS+=("$TARGET_SUBJECT")
    echo -e "${BLUE}📚 Despliegue parcial activado para: ${TARGET_SUBJECT}${NC}"
else
    echo -e "${BLUE}📦 Despliegue completo del sitio${NC}"
fi

# Si solo queremos hacer rsync directo sin paquete
if [ "$NO_PACKAGE" = true ]; then
    echo -e "${BLUE}🚀 Modo directo activado - saltando creación de paquete${NC}"
    
    # Verificar credenciales
    if [ -z "$DEPLOY_HOST" ] || [ -z "$DEPLOY_USER" ] || [ -z "$DEPLOY_PATH" ]; then
        show_error "Para modo directo necesitas configurar: DEPLOY_HOST, DEPLOY_USER, DEPLOY_PATH"
    fi
    
    show_progress "Desplegando directamente via rsync..."

    if [ -n "$TARGET_SUBJECT" ]; then
        rsync_partial_to_remote
    else
        rsync -avz --delete \
            --omit-dir-times \
            --no-perms \
            --no-owner \
            --no-group \
            --progress \
            --exclude='*.map' \
            --exclude='*.tmp' \
            --exclude='*.cache' \
            --exclude='.DS_Store' \
            "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
    fi

    show_success "Despliegue directo completado!"
    exit 0
fi

# Crear directorio temporal para el paquete
show_progress "Creando paquete de despliegue..."
rm -rf "$DEPLOY_DIR"
mkdir -p "$DEPLOY_DIR"

# Copiar solo archivos esenciales (sin source maps ni archivos temporales)
show_progress "Copiando archivos necesarios..."

if [ -n "$TARGET_SUBJECT" ]; then
    for item in "${DEPLOY_ITEMS[@]}"; do
        copy_item_to_package "$item"
    done
else
    rsync -av \
        --exclude='*.map' \
        --exclude='*.tmp' \
        --exclude='*.cache' \
        --exclude='.DS_Store' \
        "$BUILD_DIR/" "$DEPLOY_DIR/"
fi

# Comprimir el paquete
show_progress "Comprimiendo paquete..."
cd "$DEPLOY_DIR"
tar -czf "../${PACKAGE_NAME}.tar.gz" .
cd ..

# Mostrar estadísticas
ORIGINAL_SIZE=$(du -sh "$BUILD_DIR" | cut -f1)
PACKAGE_SIZE=$(du -sh "${PACKAGE_NAME}.tar.gz" | cut -f1)
FILE_COUNT=$(find "$DEPLOY_DIR" -type f | wc -l | tr -d ' ')

show_success "Paquete creado: ${PACKAGE_NAME}.tar.gz"
echo -e "${BLUE}📊 Estadísticas:${NC}"
echo -e "  • Tamaño original: $ORIGINAL_SIZE"
echo -e "  • Tamaño del paquete: $PACKAGE_SIZE"
echo -e "  • Archivos incluidos: $FILE_COUNT"

# Limpiar directorio temporal
rm -rf "$DEPLOY_DIR"

# Opciones de despliegue
echo -e "${BLUE}🔧 Opciones de despliegue disponibles:${NC}"
echo -e "  ${YELLOW}1.${NC} Subir paquete manualmente:"
echo -e "     ${BLUE}scp ${PACKAGE_NAME}.tar.gz usuario@servidor:/ruta/${NC}"
echo -e "     ${BLUE}tar -xzf ${PACKAGE_NAME}.tar.gz${NC}"
echo ""
echo -e "  ${YELLOW}2.${NC} Usar rsync (recomendado para actualizaciones):"
echo -e "     ${BLUE}rsync -avz --delete ${BUILD_DIR}/ usuario@servidor:/ruta/${NC}"
echo ""
echo -e "  ${YELLOW}3.${NC} Configurar variables de entorno para despliegue automático:"
echo -e "     ${BLUE}export DEPLOY_HOST=tu-servidor.com${NC}"
echo -e "     ${BLUE}export DEPLOY_USER=tu-usuario${NC}"
echo -e "     ${BLUE}export DEPLOY_PATH=/ruta/completa/${NC}"

# Si se proporcionan credenciales, ofrecer despliegue automático
if [ -n "$DEPLOY_HOST" ] && [ -n "$DEPLOY_USER" ] && [ -n "$DEPLOY_PATH" ]; then
    echo ""
    echo -e "${GREEN}✅ Variables de despliegue configuradas${NC}"
    echo -e "   Servidor: ${DEPLOY_HOST}"
    echo -e "   Usuario: ${DEPLOY_USER}"
    echo -e "   Ruta: ${DEPLOY_PATH}"
    echo ""
    if [ -n "$TARGET_SUBJECT" ]; then
        echo -e "${YELLOW}📚 Se desplegara solo la asignatura ${TARGET_SUBJECT} y recursos compartidos.${NC}"
    fi

    echo -e "${YELLOW}🔄 ¿Desplegar automáticamente ahora? (y/N)${NC}"
    read -r response
    if [[ "$response" =~ ^[Yy]$ ]]; then
        show_progress "Desplegando via rsync..."

        if [ -n "$TARGET_SUBJECT" ]; then
            rsync_partial_to_remote
        else
            rsync -avz --delete \
                --omit-dir-times \
                --no-perms \
                --no-owner \
                --no-group \
                --progress \
                --exclude='*.map' \
                --exclude='*.tmp' \
                --exclude='*.cache' \
                --exclude='.DS_Store' \
                "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
        fi
        
        if [ $? -eq 0 ]; then
            show_success "¡Despliegue completado exitosamente!"
            
            # Verificar si el sitio responde
            if command -v curl > /dev/null; then
                show_progress "Verificando que el sitio esté funcionando..."
                if curl -s -f "http://${DEPLOY_HOST}" > /dev/null 2>&1; then
                    show_success "✅ Sitio web respondiendo correctamente"
                else
                    echo -e "${YELLOW}⚠️  No se pudo verificar el sitio automáticamente${NC}"
                fi
            fi
        else
            show_error "Error en el despliegue. Revisa las credenciales y conexión."
        fi
    fi
else
    echo ""
    echo -e "${YELLOW}💡 Para habilitar despliegue automático, configura:${NC}"
    echo -e "   ${BLUE}export DEPLOY_HOST=tu-servidor.com${NC}"
    echo -e "   ${BLUE}export DEPLOY_USER=tu-usuario${NC}"  
    echo -e "   ${BLUE}export DEPLOY_PATH=/ruta/completa/${NC}"
    echo -e "   ${BLUE}# Luego ejecuta: ./deploy.sh ${ENVIRONMENT}${NC}"
fi

echo -e "${GREEN}🎉 Proceso completado!${NC}"

# Limpiar paquetes antiguos (mantener solo los últimos 5)
show_progress "Limpiando paquetes antiguos..."
TAR_FILES=$(ls -t pel-25-*.tar.gz 2>/dev/null | wc -l)
if [ "$TAR_FILES" -gt 5 ]; then
    ls -t pel-25-*.tar.gz | tail -n +6 | xargs rm -f
    REMOVED=$((TAR_FILES - 5))
    echo -e "${YELLOW}🧹 Eliminados $REMOVED paquetes antiguos (manteniendo los últimos 5)${NC}"
fi
