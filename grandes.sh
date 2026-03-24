#!/bin/bash

# Script: Mostrar los 10 archivos más grandes, excluyendo carpetas comunes de desarrollo
# Uso: ./grandes.sh [extensión]
# Ejemplo: ./grandes.sh jpg  o  ./grandes.sh -jpg

# Procesar parámetro de extensión
EXTENSION=""
if [ ! -z "$1" ]; then
    # Remover el guion si existe
    EXTENSION="${1#-}"
    echo "Los 10 archivos .$EXTENSION más grandes (excluyendo .git, node_modules y dist):"
else
    echo "Los 10 archivos más grandes (excluyendo .git, node_modules y dist):"
fi
echo "------------------------------------------------------------------"

# Construir comando find
FIND_CMD="find . -type f"
FIND_CMD="$FIND_CMD -not -path './.git/*'"
FIND_CMD="$FIND_CMD -not -path './node_modules/*'"
FIND_CMD="$FIND_CMD -not -path './dist/*'"

# Agregar filtro de extensión si se especificó
if [ ! -z "$EXTENSION" ]; then
    FIND_CMD="$FIND_CMD -name '*.$EXTENSION'"
fi

# Ejecutar búsqueda
eval "$FIND_CMD -exec du -h {} + 2>/dev/null" | sort -hr | head -10

echo "------------------------------------------------------------------"
echo "Listado completado."
