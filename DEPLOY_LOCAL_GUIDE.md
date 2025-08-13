# Guía de Despliegue Local - PEL-25

## 🚀 Configuración Inicial (Solo una vez)

### 1. Configurar tus datos de servidor
```bash
# Crear archivo de configuración
npm run setup:deploy

# Editar el archivo deploy.config con tus datos reales
nano deploy.config
```

### 2. Configurar en deploy.config:
```bash
export DEPLOY_HOST_PROD="tu-servidor.com"
export DEPLOY_USER_PROD="tu-usuario"
export DEPLOY_PATH_PROD="/home/tu-usuario/public_html/"
```

## 📋 Comandos de Despliegue Diarios

### Despliegue Paso a Paso (Recomendado)
```bash
# 1. Hacer build
npm run build

# 2. Cargar configuración
source deploy.config
load_deploy_config production

# 3. Desplegar
./deploy.sh production
```

### Despliegue Rápido (Todo en uno)
```bash
# Build + Despliegue automático
npm run deploy:build

# Solo para staging
npm run deploy:build:staging
```

### Despliegue Super Rápido (Sin paquete)
```bash
# Para actualizaciones menores - va directo al servidor
npm run deploy:quick

# Para staging
npm run deploy:quick:staging
```

## 🎯 Diferentes Escenarios de Uso

### Escenario 1: Primera vez desplegando
```bash
npm run setup:deploy          # Configurar
npm run deploy:build          # Desplegar completo
```

### Escenario 2: Actualización normal
```bash
npm run deploy:build          # Build + despliegue
```

### Escenario 3: Cambio menor (solo PHP o imágenes)
```bash
npm run deploy:quick          # Rsync directo
```

### Escenario 4: Probar en staging primero
```bash
npm run deploy:build:staging  # Probar en staging
npm run deploy:build          # Luego a producción
```

## 🔧 Opciones del Script deploy.sh

```bash
# Sintaxis completa:
./deploy.sh [staging|production] [--auto-build] [--no-package]

# Ejemplos:
./deploy.sh production                    # Solo crear paquete
./deploy.sh production --auto-build       # Build + paquete
./deploy.sh production --no-package       # Rsync directo
./deploy.sh staging --auto-build          # Build + staging
```

## 🛠️ Comandos de Mantenimiento

```bash
npm run clean                 # Limpiar archivos temporales
npm run serve                 # Probar build localmente
npm run analyze              # Analizar bundle (requiere instalación)
```

## ✅ Verificar que todo funciona

### 1. Verificar configuración:
```bash
source deploy.config
verify_config
```

### 2. Hacer despliegue de prueba a staging:
```bash
load_deploy_config staging
./deploy.sh staging --auto-build
```

### 3. Si todo está bien, desplegar a producción:
```bash
load_deploy_config production  
./deploy.sh production --auto-build
```

## 🚨 Solución de Problemas

### Error: "Permission denied"
```bash
# Verificar permisos SSH
ssh tu-usuario@tu-servidor.com

# Verificar que el script sea ejecutable
chmod +x deploy.sh
```

### Error: "Directory not found"
```bash
# Crear el directorio en el servidor
ssh tu-usuario@tu-servidor.com "mkdir -p /ruta/completa/"
```

### Error en build
```bash
# Limpiar y reconstruir
npm run clean
npm install
npm run build
```

## 📊 Flujo de Trabajo Recomendado

1. **Desarrollo local** → `npm run dev`
2. **Testing local** → `npm run serve`
3. **Despliegue a staging** → `npm run deploy:build:staging`
4. **Verificar staging** → Revisar en navegador
5. **Despliegue a producción** → `npm run deploy:build`
6. **Verificar producción** → Revisar sitio final

## 💡 Consejos Pro

- Usa `deploy:quick` para cambios solo de contenido
- Usa `deploy:build` para cambios de código/estilos  
- Siempre prueba en staging primero
- Mantén backups antes de despliegues importantes
