---
description: "Use when converting questions to GIFT format, working with .gift files, creating multiple choice quizzes, or formatting assessment questions for Moodle."
applyTo: "**/*.gift"
---

# Formato GIFT para Evaluaciones

## Estructura de Preguntas de Opción Múltiple

Todas las preguntas de opción múltiple deben seguir este formato:

```
::titulo-unico::Texto de la pregunta{
~Opción incorrecta 1
~Opción incorrecta 2
=Respuesta correcta
~Opción incorrecta 3
}
```

## Reglas para Títulos

- **Patrón**: `{curso}-{unidad}-{tipo}-p{número}` 
- **Ejemplo**: `tlriid2-u1diag-p01`, `tlriid2-u1diag-p02`, etc.
- Los títulos deben ser únicos y secuenciales
- Usar guiones (`-`) como separadores
- Números de pregunta siempre con dos dígitos: `p01`, `p02`, ..., `p10`, `p11`

## Reglas para Opciones

- `=` indica la respuesta correcta (una sola por pregunta)
- `~` indica respuestas incorrectas
- Cada opción en una línea nueva
- Sin enumeración (a, b, c, d) en las opciones
- Eliminar espacios innecesarios al inicio y final

## Caracteres Especiales

- **Dos puntos (`:`)**: Escapar con `\:` cuando aparece en el texto de la pregunta
- Ejemplo: `Selecciona el enunciado que contiene un adverbio de tiempo\:`

## Formato de Salida

- Una línea en blanco entre preguntas
- Sin numeración manual (1., 2., etc.)
- Sin incisos (a), b), c), d)) en las opciones

## Ejemplo Completo

```
::matematicas2-u1eval-p01::¿Cuál es el valor de x en la ecuación 2x + 5 \= 15?{
~3
=5
~7
~10
}

::matematicas2-u1eval-p02::¿Qué figura tiene 4 lados iguales?{
~Triángulo
~Rectángulo
=Cuadrado
~Pentágono
}
```

## Conversión desde Formato Tradicional

Cuando recibas preguntas en formato tradicional (con numeración 1., 2., etc. y opciones a), b), c), d)):

1. Generar título único siguiendo el patrón establecido
2. Mantener el texto de la pregunta exacto
3. Eliminar la enumeración y los incisos
4. **Identificar la respuesta correcta**:
   - Si está marcada explícitamente (con asterisco, negrita, o indicación), usar esa
   - Si NO está marcada, usar tu conocimiento académico para determinar cuál es la correcta
   - Analizar el contexto educativo (nivel preparatoria/bachillerato)
   - En caso de duda, preguntar al usuario antes de asignar
5. Marcar la respuesta correcta con `=` y las demás con `~`
6. Escapar caracteres especiales si es necesario

## Identificación Inteligente de Respuestas

Cuando no hay indicación explícita de la respuesta correcta:

- **Usa tu conocimiento**: Analiza la pregunta y las opciones desde la perspectiva académica
- **Contexto educativo**: Las preguntas son típicamente de nivel medio superior (preparatoria)
- **Materias comunes**: Matemáticas, Ciencias, Literatura, Historia, Idiomas, etc.
- **Verifica coherencia**: La respuesta correcta debe ser factualmente precisa
- **Si hay ambigüedad**: Pregunta al usuario o indica cuál identificaste como correcta para validación
