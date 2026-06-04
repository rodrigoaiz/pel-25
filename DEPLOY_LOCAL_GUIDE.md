# Guía de Despliegue Local - PEL-25

## 🚀 Configuración Inicial (Solo una vez)

### 1. Configurar tus datos de servidor

```bash
# Crear archivo de configuración
npm run setup:deploy

# Editar el archivo deploy.config con tus datos reales
nano deploy.config
```

### 2. Configurar en deploy.config

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

# Solo una asignatura
npm run deploy:quick:subject -- quimica-2
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
./deploy.sh [staging|production] [--auto-build] [--no-package] [--subject <slug>]

# Ejemplos:
./deploy.sh production                    # Solo crear paquete
./deploy.sh production --auto-build       # Build + paquete
./deploy.sh production --no-package       # Rsync directo
./deploy.sh staging --auto-build          # Build + staging
./deploy.sh production --no-package --subject quimica-2   # Solo esa asignatura
./deploy.sh production --auto-build --subject tlriid-2    # Rebuild + deploy parcial
```

Cuando usas `--subject` (o `--asignatura`), el script despliega solo la carpeta de esa asignatura y los recursos compartidos necesarios (`assets`, `include`, `js`, `config.php`, `menu.json`).

Con npm tambien puedes pasar el slug al final:

```bash
npm run deploy:subject -- quimica-2
npm run deploy:quick:subject -- quimica-2
npm run deploy:build:subject -- tlriid-2
```

## 🛠️ Comandos de Mantenimiento

```bash
npm run clean                 # Limpiar archivos temporales y paquetes
npm run clean:packages        # Limpiar solo paquetes .tar.gz antiguos (+7 días)
npm run list:packages         # Ver paquetes de despliegue disponibles
npm run serve                 # Probar build localmente
```

## 📦 Gestión de Paquetes de Despliegue

### ¿Qué son los archivos .tar.gz

Los archivos .tar.gz son **paquetes de respaldo** que se crean automáticamente con cada despliegue:

- Contienen una copia completa de tu carpeta `dist/`
- Te permiten hacer **rollback** rápido si algo sale mal
- Son útiles para **auditoría** y comparación entre versiones

### Gestión Automática

El script mantiene automáticamente solo los **últimos 5 paquetes** más recientes.

### Comandos de Gestión

```bash
# Ver qué paquetes tienes
npm run list:packages

# Limpiar paquetes antiguos (más de 7 días)
npm run clean:packages

# Limpiar todo (dist/ y todos los paquetes)
npm run clean
```

### Ejemplo de uso

```bash
$ npm run list:packages
-rw-r--r--  1 user  staff   144M ago 12 10:30 pel-25-production-2025-08-12_10-30-15.tar.gz
-rw-r--r--  1 user  staff   143M ago 11 15:22 pel-25-production-2025-08-11_15-22-08.tar.gz
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
