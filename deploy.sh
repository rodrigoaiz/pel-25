#!/bin/bash

# Script de despliegue optimizado para PEL-25
# Uso: ./deploy.sh [staging|production] [--auto-build] [--no-package]

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

# Procesar argumentos
for arg in "$@"
do
    case $arg in
        --auto-build)
            AUTO_BUILD=true
            shift
            ;;
        --no-package)
            NO_PACKAGE=true
            shift
            ;;
    esac
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

show_error() {
    echo -e "${RED}❌ $1${NC}"
    exit 1
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

# Si solo queremos hacer rsync directo sin paquete
if [ "$NO_PACKAGE" = true ]; then
    echo -e "${BLUE}🚀 Modo directo activado - saltando creación de paquete${NC}"
    
    # Verificar credenciales
    if [ -z "$DEPLOY_HOST" ] || [ -z "$DEPLOY_USER" ] || [ -z "$DEPLOY_PATH" ]; then
        show_error "Para modo directo necesitas configurar: DEPLOY_HOST, DEPLOY_USER, DEPLOY_PATH"
    fi
    
    show_progress "Desplegando directamente via rsync..."
    rsync -avz --delete \
        --progress \
        --exclude='*.map' \
        --exclude='*.tmp' \
        --exclude='*.cache' \
        --exclude='.DS_Store' \
        "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
    show_success "Despliegue directo completado!"
    exit 0
fi

# Crear directorio temporal para el paquete
show_progress "Creando paquete de despliegue..."
rm -rf "$DEPLOY_DIR"
mkdir -p "$DEPLOY_DIR"

# Copiar solo archivos esenciales (sin source maps ni archivos temporales)
show_progress "Copiando archivos necesarios..."
rsync -av \
    --exclude='*.map' \
    --exclude='*.tmp' \
    --exclude='*.cache' \
    --exclude='.DS_Store' \
    "$BUILD_DIR/" "$DEPLOY_DIR/"

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
    echo -e "${YELLOW}🔄 ¿Desplegar automáticamente ahora? (y/N)${NC}"
    read -r response
    if [[ "$response" =~ ^[Yy]$ ]]; then
        show_progress "Desplegando via rsync..."
        rsync -avz --delete \
            --progress \
            --exclude='*.map' \
            --exclude='*.tmp' \
            --exclude='*.cache' \
            --exclude='.DS_Store' \
            "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
        
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
