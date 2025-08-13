#!/bin/bash

# Script: Mostrar los 10 archivos más grandes, excluyendo carpetas comunes de desarrollo

echo "Los 10 archivos más grandes (excluyendo .git, node_modules y dist):"
echo "------------------------------------------------------------------"

# Busca archivos, excluyendo carpetas no deseadas
find . -type f \
       -not -path "./.git/*" \
       -not -path "./node_modules/*" \
       -not -path "./dist/*" \
       -exec du -h {} + 2>/dev/null | sort -hr | head -10

echo "------------------------------------------------------------------"
echo "Listado completado."
