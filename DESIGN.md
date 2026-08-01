---
name: PEL-25
description: Plataforma educativa móvil para los programas de estudio en línea del CCH-UNAM.
colors:
  primary: "rgb(248, 117, 83)"
  secondary: "rgb(49, 148, 148)"
  tertiary: "rgb(255, 197, 0)"
  ink: "rgb(8, 20, 36)"
  charcoal: "rgb(32, 32, 32)"
  paper: "rgb(242, 250, 239)"
  warm-paper: "rgb(254, 249, 225)"
  link: "rgb(13, 110, 253)"
  sky: "rgb(12, 170, 241)"
  purple: "rgb(118, 84, 161)"
typography:
  display:
    fontFamily: "Roboto Condensed Variable, sans-serif"
    fontSize: "clamp(2.14rem, 2.69vw + 1.6rem, 3.75rem)"
  headline:
    fontFamily: "Roboto Condensed Variable, sans-serif"
    fontSize: "1.6rem"
  body:
    fontFamily: "Open Sans Variable, sans-serif"
    fontSize: "clamp(0.88rem, 0.52vw + 0.77rem, 1.19rem)"
    lineHeight: "clamp(1.3rem, 0.52vw + 1.57rem, 2.38rem)"
  label:
    fontFamily: "Open Sans Variable, sans-serif"
    fontSize: "0.875rem"
rounded:
  card: "0.75rem"
  control: "0.5rem"
  accordion: "0.375rem"
spacing:
  content-inline: "0.75rem"
  section-mobile: "0.5rem"
  section-desktop: "2.5rem"
components:
  navigation-unit:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.paper}"
    typography: "{typography.label}"
    padding: "0.25rem 0.5rem"
  activity-frame:
    backgroundColor: "rgb(248, 250, 252)"
    rounded: "{rounded.card}"
    padding: "0.5rem"
  accordion-trigger:
    textColor: "{colors.secondary}"
    rounded: "{rounded.accordion}"
    padding: "0.75rem"
---

# Design System: PEL-25

## Overview

**Creative North Star: "Guía académica vibrante, con la calidez de un cuaderno de aprendizaje"**

PEL-25 presenta el estudio como un recorrido claro y activo: colores institucionales de alto reconocimiento separan navegación, contenido y actividades sin alejarse de la lectura académica. La interfaz está pensada para avanzar por unidades y temas desde el teléfono, por lo que prioriza rótulos directos, estados visibles y bloques de contenido contenidos.

La energía proviene del naranja, turquesa y amarillo usados como señales funcionales, mientras la tipografía condensada y el papel claro aportan orden y cercanía. El resultado debe sentirse didáctico y accesible, no corporativo ni decorativo.

**Key Characteristics:**

- Navegación por curso y unidad con estados activos inequívocos.
- Lectura centrada, con una medida cómoda de aproximadamente 75 caracteres.
- Acentos cromáticos claros para orientar, no para competir con el contenido.
- Contenedores suaves y protegidos para recursos interactivos.

## Colors

La paleta combina señales cálidas y frías para orientar el aprendizaje, con tinta azul profunda y fondos muy claros que sostienen la lectura.

### Primary

- **Coral de avance:** se usa para acciones, unidades y numeración que impulsa el recorrido.

### Secondary

- **Turquesa académico:** identifica subtítulos, actividades y elementos de orientación dentro del contenido.

### Tertiary

- **Amarillo de énfasis:** aparece como un acento puntual en progresiones y señalización; nunca debe sustituir al texto de alto contraste.

### Neutral

- **Tinta nocturna:** sostiene encabezados y párrafos principales para asegurar legibilidad.
- **Carbón de estructura:** forma barras oscuras, pies de página y franjas de recursos.
- **Papel claro:** se reserva para texto inverso y superficies limpias.
- **Papel cálido:** funciona como fondo suave de apoyo cuando el contenido requiere descanso visual.

### Named Rules

**The Color-as-Wayfinding Rule.** El coral, turquesa y amarillo codifican ubicación, avance o énfasis; no se aplican como decoración aleatoria.

## Typography

**Display Font:** Roboto Condensed Variable (con sans-serif como respaldo)

**Body Font:** Open Sans Variable (con sans-serif como respaldo)

**Character:** Los títulos son compactos, directos y fáciles de escanear. El cuerpo abierto y legible mantiene el ritmo de lectura para explicaciones largas y móviles pequeños.

### Hierarchy

- **Display** (clamp(2.14rem, 2.69vw + 1.6rem, 3.75rem)): reservado para piezas de contenido que requieren jerarquía excepcional.
- **Headline** (1.6rem): encabezados de contenido en tinta nocturna.
- **Title** (1.5rem): subtítulos y agrupaciones en turquesa académico.
- **Body** (clamp(0.88rem, 0.52vw + 0.77rem, 1.19rem), line-height clamp(1.3rem, 0.52vw + 1.57rem, 2.38rem)): explicación y material de estudio, con una medida máxima aproximada de 75ch.
- **Label** (0.875rem, mayúsculas y peso fuerte cuando corresponde): unidades, controles y navegación compacta.

### Named Rules

**The Read-Then-Act Rule.** El texto de aprendizaje mantiene la prioridad; la tipografía de navegación debe ayudar a ubicar y avanzar, no dominar la página.

## Layout

El contenido principal se centra en un ancho máximo de 5xl, con 0.75rem de margen interior en móvil y el borde exterior liberado en pantallas xl. Las secciones emplean separación corta en móvil y una respiración mayor en escritorio. La navegación se reorganiza de una cuadrícula compacta de unidades a una distribución de dos columnas desde el breakpoint medio; las pestañas conservan desplazamiento horizontal en móvil para no comprimir las etiquetas.

Las actividades rompen de forma intencional el bloque editorial: una franja oscura de ancho completo contiene el recurso y mantiene su propio borde, relleno y altura responsiva.

## Elevation & Depth

La interfaz es plana por defecto y usa profundidad sólo para delimitar recursos interactivos, imágenes en línea del tiempo y paneles de pestañas. Los marcos de actividades combinan una superficie gris muy clara, borde interior discontinuo y sombras azul-gris sutiles; en hover ganan elevación, sin transformar la página en un sistema de tarjetas flotantes.

### Shadow Vocabulary

- **Marco de actividad:** `0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)` para separar el iframe de su franja oscura.
- **Marco de actividad en hover:** `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)` para confirmar interacción.

### Named Rules

**The Resource-Frame Rule.** La elevación sirve para proteger y distinguir experiencias incrustadas, especialmente H5P, no para decorar texto o navegación rutinaria.

## Shapes

La forma base es suavemente redondeada: 0.375rem en bordes de acordeón, 0.5rem en controles internos y 0.75rem en marcos de actividad. Los indicadores de listas son circulares y sólidos. Los bordes grises discretos organizan información secundaria; las líneas discontinuas se reservan para el límite interno de recursos embebidos.

## Components

### Buttons

- **Shape:** controles compactos, con esquinas suaves (0.5rem cuando es un botón independiente).
- **Primary:** en modales, usa coral de avance, texto claro y relleno `0.625rem 1.25rem`.
- **Hover / Focus:** el color se intensifica en hover; los controles de ayuda y pestañas muestran un anillo de enfoque azul o turquesa visible.

### Cards / Containers

- **Corner Style:** marco de actividad suavemente redondeado (0.75rem), con iframe interno a 0.5rem.
- **Background:** degradado claro de gris azulado con un recurso blanco en el interior.
- **Shadow Strategy:** sombra baja en reposo y elevación contenida en hover.
- **Border:** línea interior discontinua tenue y borde gris azulado en el recurso embebido.
- **Internal Padding:** 0.5rem en móvil; 1rem desde 769px.

### Navigation

- **Unidades:** botones coral en mayúsculas y negritas; la unidad activa cambia a turquesa y las no publicadas se desactivan en gris.
- **Temas y páginas:** listas lineales con bordes sutiles, subrayado en enlaces y un indicador gráfico para el elemento activo.
- **Moodle:** una franja coral compacta ofrece el regreso a cursos y el contexto de sesión.
- **Mobile treatment:** la navegación preserva objetivos táctiles visibles, trunca títulos largos y permite desplazamiento horizontal cuando las pestañas no caben.

### Accordions

- **Style:** disparadores de ancho completo con borde gris, título turquesa en Roboto Condensed y una flecha de estado.
- **State:** hover gris claro; el primer elemento puede iniciar abierto; el cuerpo se separa con borde y relleno generoso.

### Tabs

- **Style:** barra inferior gris clara y pestaña activa con texto y subrayado azul.
- **State:** activa sobre blanco o azul muy claro; inactiva en gris con hover azul; foco con anillo azul de 2px.

## Do's and Don'ts

### Do:

- **Do** conservar la lectura centrada y el texto de estudio dentro de una medida cercana a 75ch.
- **Do** usar coral y turquesa como señales de navegación, avance y jerarquía.
- **Do** conservar una presentación protegida y responsiva para H5P, exámenes y otros recursos embebidos.
- **Do** diseñar primero para el ancho móvil y escalar las agrupaciones de navegación desde ahí.

### Don't:

- **Don't** llenar superficies de lectura con tarjetas elevadas o sombras decorativas.
- **Don't** usar el amarillo como color principal de texto sobre fondo claro.
- **Don't** ocultar el estado actual de unidad, tema, página o pestaña.
- **Don't** comprimir las etiquetas de pestañas hasta volverlas ilegibles en móvil; permite desplazamiento cuando sea necesario.
