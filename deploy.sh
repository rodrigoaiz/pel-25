#!/bin/bash

# Script de despliegue optimizado para PEL-25
# Uso: ./deploy.sh [staging|production]

set -e

# Configuración
ENVIRONMENT=${1:-staging}
BUILD_DIR="dist"
DEPLOY_DIR="deploy-package"
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
PACKAGE_NAME="pel-25-${ENVIRONMENT}-${TIMESTAMP}"

# Colores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Iniciando despliegue para: ${ENVIRONMENT}${NC}"

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

# Verificar que existe el directorio dist
if [ ! -d "$BUILD_DIR" ]; then
    show_error "Directorio $BUILD_DIR no encontrado. Ejecuta 'npm run build' primero."
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
echo -e "${BLUE}🔧 Opciones de despliegue:${NC}"
echo "1. Subir manualmente: scp ${PACKAGE_NAME}.tar.gz usuario@servidor:/ruta/"
echo "2. Descomprimir en servidor: tar -xzf ${PACKAGE_NAME}.tar.gz"
echo "3. Usar rsync (recomendado): rsync -avz --delete ${BUILD_DIR}/ usuario@servidor:/ruta/"

# Si se proporcionan credenciales, hacer despliegue automático
if [ -n "$DEPLOY_HOST" ] && [ -n "$DEPLOY_USER" ] && [ -n "$DEPLOY_PATH" ]; then
    echo -e "${YELLOW}🔄 ¿Desplegar automáticamente? (y/N)${NC}"
    read -r response
    if [[ "$response" =~ ^[Yy]$ ]]; then
        show_progress "Desplegando via rsync..."
        rsync -avz --delete \
            --progress \
            --exclude='*.map' \
            "$BUILD_DIR/" "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH"
        show_success "Despliegue completado!"
    fi
fi

echo -e "${GREEN}🎉 Proceso completado!${NC}"
