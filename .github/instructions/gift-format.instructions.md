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

## Retroalimentación en GIFT

Las preguntas pueden incluir retroalimentación (feedback) específica para cada opción:

### Formato de Retroalimentación

**IMPORTANTE**: El orden correcto es: **Opción** `#` **Retroalimentación**

```
~Opción incorrecta #Mensaje que explica por qué es incorrecta
=Respuesta correcta #Mensaje que confirma y explica por qué es correcta
```

### Retroalimentación en Preguntas de Verdadero/Falso

**IMPORTANTE**: En preguntas de Verdadero/Falso, `T` o `F` indica la respuesta correcta:
- La **primera línea** (`T#` o `F#`) es el feedback cuando el usuario **selecciona esa opción** (Verdadero o Falso)
- La **segunda línea** (solo `#`) es el feedback cuando el usuario **selecciona la opción contraria**

**Si la respuesta correcta es Verdadero**, usa `T`:

```
::titulo::Pregunta de verdadero o falso{
T#Retroalimentación cuando el usuario selecciona Verdadero (CORRECTO)
#Retroalimentación cuando el usuario selecciona Falso (INCORRECTO)
}
```

**Si la respuesta correcta es Falso**, usa `F`:

```
::titulo::Pregunta de verdadero o falso{
F#Retroalimentación cuando el usuario selecciona Falso (CORRECTO)
#Retroalimentación cuando el usuario selecciona Verdadero (INCORRECTO)
}
```

**Ejemplo real:**

Pregunta: "Generalmente, cuando alguien se encuentra con otra persona que no puede identificar como hombre o mujer siente incomodidad o hasta rechazo"
- Respuesta correcta: Verdadero

```
::ejemplo-p01::Generalmente, cuando alguien se encuentra con otra persona que no puede identificar como hombre o mujer siente incomodidad o hasta rechazo{
T#Correcto. Desafortunadamente cuando una persona no puede identificar a otra bajo un concepto de hombre o mujer, además de sentirse incómoda, rechaza lo que no conoce.
#Vuelve a intentar. Lo ideal sería que aceptáramos y respetáramos la forma de vida de las personas sin estereotiparles.
}
```

## Ejemplo Completo

```
::matematicas2-u1eval-p01::¿Cuál es el valor de x en la ecuación 2x + 5 \= 15?{
~3 #Incorrecto. Revisa la operación, debes restar 5 de ambos lados primero.
=5 #Correcto. 2x + 5 \= 15, entonces 2x \= 10, por lo tanto x \= 5.
~7 #Incorrecto. Verifica el procedimiento algebraico.
~10 #Incorrecto. Recuerda dividir entre 2 después de restar 5.
}

::matematicas2-u1eval-p02::¿Qué figura tiene 4 lados iguales?{
~Triángulo #Incorrecto. Un triángulo tiene 3 lados.
~Rectángulo #Incorrecto. Un rectángulo tiene 4 lados pero no todos son iguales.
=Cuadrado #Correcto. Un cuadrado tiene 4 lados de igual longitud.
~Pentágono #Incorrecto. Un pentágono tiene 5 lados.
}

::biologia-u1-p03::Los seres vivos están compuestos por células{
T#Correcto. La teoría celular establece que todos los seres vivos están formados por una o más células.
#Incorrecto. Revisa la teoría celular, todos los organismos vivos están compuestos por células.
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
6. **Agregar retroalimentación si está disponible**:
   - Formato: `Opción #Retroalimentación`
   - La retroalimentación va DESPUÉS del texto de la opción, precedida por `#`
   - Incluir retroalimentación tanto para respuestas correctas como incorrectas
7. Escapar caracteres especiales si es necesario

## Identificación Inteligente de Respuestas

Cuando no hay indicación explícita de la respuesta correcta:

- **Usa tu conocimiento**: Analiza la pregunta y las opciones desde la perspectiva académica
- **Contexto educativo**: Las preguntas son típicamente de nivel medio superior (preparatoria)
- **Materias comunes**: Matemáticas, Ciencias, Literatura, Historia, Idiomas, etc.
- **Verifica coherencia**: La respuesta correcta debe ser factualmente precisa
- **Si hay ambigüedad**: Pregunta al usuario o indica cuál identificaste como correcta para validación
