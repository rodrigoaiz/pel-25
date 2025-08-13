# PEL-25 - Programas de Estudio en Línea CCH-UNAM

> Plataforma educativa digital del Colegio de Ciencias y Humanidades de la Universidad Nacional Autónoma de México.

## 📚 Descripción

PEL-25 es una plataforma educativa web desarrollada para el Portal Académico del CCH-UNAM, que integra contenidos educativos digitales de múltiples asignaturas del bachillerato. La aplicación está construida con PHP, JavaScript y utiliza Webpack para el empaquetado de assets, con Tailwind CSS para el diseño de la interfaz.

## 🎯 Asignaturas Incluidas

- **Cultura de Paz** - 5 unidades temáticas
- **Francés I** - 4 unidades de aprendizaje
- **Historia Universal II** - 4 unidades históricas
- **Igualdad de Género** - 2 unidades con enfoque en derechos humanos
- **Matemáticas II** - 4 unidades de contenido matemático
- **Química II** - 2 unidades de ciencias químicas
- **Taller de Cómputo** - 4 unidades de habilidades digitales

## 🏗️ Arquitectura del Proyecto

```text
pel-25/
├── src/
│   ├── assets/           # Recursos estáticos (CSS, JS, imágenes, iconos)
│   ├── include/          # Componentes PHP reutilizables
│   ├── [asignatura]/     # Contenidos por materia organizados por unidades
│   ├── config.php        # Configuración global del sistema
│   └── menu.json         # Estructura de navegación y enlaces
├── dist/                 # Archivos compilados (generado por Webpack)
├── package.json          # Dependencias y scripts del proyecto
├── webpack.config.js     # Configuración de empaquetado
└── tailwind.config.mjs   # Configuración de Tailwind CSS
```

## 🛠️ Tecnologías Utilizadas

### Frontend

- **Tailwind CSS 4.0** - Framework de utilidades CSS
- **Bootstrap Icons** - Librería de iconografías
- **Flowbite** - Componentes UI basados en Tailwind
- **Lite YouTube** - Reproductor optimizado de videos
- **Font Face Observer** - Carga optimizada de fuentes

### Backend

- **PHP** - Lenguaje de servidor para lógica de negocio
- **JSON** - Estructura de datos para navegación y configuración

### Build Tools

- **Webpack 5** - Empaquetador de módulos
- **PostCSS** - Procesador de CSS
- **MiniCssExtractPlugin** - Extracción de CSS
- **CopyPlugin** - Gestión de archivos estáticos

## 🚀 Instalación y Desarrollo

### Prerrequisitos

```bash
# Verificar versiones
node --version  # v16+
npm --version   # v8+
php --version   # v7.4+
```

### Configuración Inicial

```bash
# Clonar el repositorio
git clone [URL-del-repositorio]
cd pel-25

# Instalar dependencias
npm install

# Configurar servidor local con observador de cambios
npm run dev
```

### Scripts Disponibles

```bash
# Desarrollo con servidor PHP y observador de Webpack
npm run dev

# Compilación para producción
npm run build

# Ejecutar tests (pendiente de configuración)
npm test
```

## ⚙️ Configuración

### Variables de Entorno

La configuración principal se encuentra en `src/config.php`:

```php
define('PATH_ACTIVITIES', 'https://pel.cch.unam.mx/');
define('PATH_SITE', 'https://pel.cch.unam.mx/');
```

### Navegación y Menú

El archivo `src/menu.json` controla:

- Enlaces de navegación principal
- Redes sociales institucionales
- Footer legal y créditos
- Integración con Moodle

## 🎨 Componentes Reutilizables

La carpeta `include/` contiene componentes PHP modulares:

- **MenuUnidades.php** - Navegación entre unidades
- **TemplatePages.php** - Plantillas de página
- **Videos.php** - Integración de contenido multimedia
- **Accordion.php** - Elementos colapsables
- **Tabs.php** - Navegación por pestañas
- **ModalIndex.php** - Ventanas modales
- **ActividadH5P.php** - Actividades interactivas H5P

## 📱 Características

- **Responsive Design** - Adaptable a dispositivos móviles
- **Modular Architecture** - Componentes reutilizables
- **Progressive Enhancement** - Mejora progresiva de funcionalidades
- **SEO Optimized** - Estructura optimizada para motores de búsqueda
- **Accessibility** - Cumplimiento de estándares de accesibilidad
- **Integration Ready** - Compatible con plataformas educativas (Moodle)

## 🤝 Desarrollo y Contribución

### Estructura de Desarrollo

1. Los contenidos educativos se organizan por asignatura
2. Cada asignatura contiene unidades numeradas (unidad1, unidad2, etc.)
3. Las actividades se estructuran por temas (t1, t2, t3, etc.)
4. Los assets se organizan en carpetas específicas por tipo

### Estándares de Código

- PHP siguiendo estándares PSR
- JavaScript ES6+
- CSS con metodología de utilidades (Tailwind)
- Nomenclatura descriptiva en español para contenidos educativos

## 📄 Licencia y Créditos

### Institución

Escuela Nacional Colegio de Ciencias y Humanidades | UNAM

Hecho en México | © Todos los derechos reservados.

Esta página electrónica puede ser reproducida, sin objeto comercial, siempre y cuando su contenido no se mutile o altere, se cite la fuente completa y la dirección Web de conformidad con el artículo 148 de la Ley Federal del Derecho de Autor.

### Proyecto PAPIIT

Este sitio web es resultado del proyecto PAPIIT IV300420 *"Alianza B@UNAM, CCH & ENP ante la pandemia: un estudio de impacto en docentes y estudiantes"*.

## 🔗 Enlaces Importantes

- [Portal Académico CCH](https://pel.cch.unam.mx/)
- [Colegio de Ciencias y Humanidades](https://www.cch.unam.mx/)
- [UNAM](https://www.unam.mx/)

## 📞 Contacto y Soporte

Para soporte técnico o consultas sobre el contenido educativo, contactar a través de los canales oficiales del Portal Académico CCH-UNAM.

---

**Versión:** 1.0.0 | **Año:** 2025 | **Institución:** CCH-UNAM
