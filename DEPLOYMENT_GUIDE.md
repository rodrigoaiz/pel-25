# Configuración Recomendada para GitHub Actions

## Fase 1: Solo Build Automático (ACTUAL)
✅ Cada push a main:
- Hace build automáticamente
- Genera paquete optimizado
- Lo sube como artifact para descarga

❌ NO despliega automáticamente al servidor

## Fase 2: Despliegue Semi-Automático (RECOMENDADO)
- Configurar secrets en GitHub
- Habilitar workflow_dispatch (botón manual)
- Probar despliegues manuales desde GitHub

## Fase 3: Despliegue Total Automático
- Habilitar despliegue automático
- Solo después de probar bien la Fase 2

## Cómo probar cada fase:

### Fase 1 (Actual):
1. Push a main
2. Ve a GitHub Actions
3. Descarga el artifact generado
4. Sube manualmente a tu servidor

### Fase 2 (Siguiente):
1. Configura secrets en GitHub
2. Ve a GitHub Actions → Deploy to Production
3. Click "Run workflow" (botón manual)
4. Revisa que se despliegue correctamente

### Fase 3 (Futuro):
1. Cambia `if: false` a `if: true`
2. Cada push despliega automáticamente
