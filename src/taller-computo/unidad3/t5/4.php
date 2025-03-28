<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Función cuadrática y la ecuación de la parábola </h3>
  <p>Es una función polinómica de segundo grado, su gráfica es la parábola, la función cuadrática que puede ser descrita por una ecuación de la forma \(f ( x ) = A x 2 + B x + C\) , donde \(A ≠ 0\) .</p>
  <p>A, B y C son los coeficientes de la función cuadrática; x representa a la variable independiente y \(f ( x )\) representa el valor obtenido al reemplazar a x por algún valor en el lado derecho de la igualdad, es decir, \(f ( x )\) es el rango o la imagen de \(x\). \(f ( x )\) puede reemplazarse por la letra y que representa a la variable dependiente de la función. Así la expresión de \(f ( x )\) , también se puede escribir como \(y = A x^{2} + B x + C\)</p>
  <h4>Orientación o concavidad de la parábola (Coeficiente A)</h4>
  <p>Una parábola es cóncava si sus ramas o brazos se orientan hacia arriba y hablamos de parábola convexa si sus ramas o brazos se orientan hacia abajo.</p>
  <p>La orientación está definida por el valor (el signo) que tenga el término cuadrático \(( A x 2 )\). Si \(A > 0\) (positivo) la parábola es cóncava hacia arriba (concavidad positiva) porque brazos o ramas apuntan hacia arriba. En caso contrario si \(A \lt 0\) (negativo) la parábola es cóncava hacia abajo (concavidad negativa) porque brazos o ramas apuntan hacia abajo. Además, cuanto mayor sea \(| A |\) (el valor absoluto de \( A \)), más cerrada es la parábola.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u3_t5_figura3.webp', 'Concavidad de la parábola.') ?>
  </div>
  <p>Nota: Presentación de las aperturas de la parábola, concavidad positiva la parábola abre hacia abajo y concavidad negativa la parábola abre hacia arriba.</p>
  <h4>Ordenada al origen de la parábola (Coeficiente C)</h4>
  <p>Es el punto donde la curva corta al eje Y cuando \(x = 0\).</p>
  <p>$$Y = A x^{2} + B x + C$$</p>
  <p>$$Y = A ( 0 )^{2} + B ( 0 ) + C$$</p>
  <p>$$Y = C$$</p>
  <div class="max-w-lg mx-auto">
    <?php renderImage('u3_t5_figura4.webp', 'Ordenada al origen de la parábola.') ?>
  </div>
  <p>Nota: Ilustración del punto donde la parábola corta al eje de las ordenadas.</p>
  <h4>Vértice de la parábola</h4>
  <p>El vértice de la parábola es el punto más bajo de la misma (si la parábola tiene forma de U) o el punto más alto (si la parábola tiene forma de \(⋂\)), este punto divide a la parábola en dos partes. </p>
  <p>La primera coordenada del vértice de la parábola f \(( x ) = A x^{2} + B x + c\) es</p>
  <p>$$x _{v} = − \frac{B}{2A}$$</p>
  <p>La segunda coordenada del vértice de la parábola es</p>
  <p class="overflow-y-scroll">$$f (x_{v}) = f \left( − \frac{B}{2A} \right) + A \left( − \frac{B}{2A} \right)^{2} + B \left( − \frac{B}{2A} \right) + C$$</p>
  <p>Por tanto, el vértice es el punto</p>
  <p>$$ \left( x^{′}_{v} f \left( x_{v} \right) \right)$$</p>
  <div class="max-w-lg mx-auto">
    <?php renderImage('u3_t5_figura5.webp', 'Vértice de la parábola.') ?>
  </div>
  <p>Nota: Ubicación del vértice de la parábola en la gráfica, cuando su concavidad es positiva es el punto más bajo. Existe un segundo caso, cuando su concavidad es negativa es el punto más alto.</p>
  <h4>Dominio de la parábola</h4>
  <p>El dominio de cualquier función cuadrática es el conjunto de valores que podrá adquirir X, la variable independiente, y son todos los reales \(ℝ\) expresado como intervalo es desde menos infinito hasta infinito \(\left(-\infty ,\infty \right)\).</p>
  <h4>Rango o imagen de la parábola</h4>
  <p>Es el conjunto de valores que podrá adquirir Y, la variable dependiente, el rango de la función cuadrática depende de la posición de su vértice y la orientación o concavidad de la parábola, es decir, de la dirección de la apertura de la parábola.</p>
  <div class="max-w-lg mx-auto">
    <?php renderImage('u3_t5_figura6.webp', 'Dominio y rango de una función cuadrática.') ?>
  </div>
  <p>Nota: Representación gráfica del conjunto de valores del dominio y del rango o imagen de la función cuadrática.</p>
  <h4>Puntos de corte de la parábola en el eje de X (las abscisas)</h4>
  <p>Los puntos de intersección de la parábola con el eje de las X (abscisas) indican las raíces o soluciones de la ecuación cuadrática, para calcular las raíces de cualquier función cuadrática calculamos \(f ( x ) = 0\) , esto significa que las raíces de una función cuadrática son aquellos valores de x para los cuales la función o ecuación cuadrática es igual a 0; es decir, los valores de x tales que \(f ( x ) = 0\) o \(y = 0\).</p>
  <p>Partiendo de</p>
  <p>$$y = A x^{2} + Bx + C$$</p>
  <p>cómo \(y = 0\), entonces tenemos</p>
  <p>$$A x^{2} + B x + C = 0$$</p>
  <p>para resolverla usamos la fórmula de la solución general de la ecuación cuadrática.</p>
  <p>$$x_{1,2} = \frac{− B ± \sqrt{B^{2} − 4 A C}}{2 A}$$</p>
  <p>Esto puede dar tres casos:</p>
  <ol class="ol-number">
    <li>Corta al eje X en dos puntos distintos, si \(B^{2} − 4 A C \gt 0\)</li>
    <li>Corta al eje X en un solo punto (es tangente al eje x), si \(B^{2} − 4 A C = 0\).</li>
    <li>No corta al eje \(X\), si \(B^{2} − 4 A C \lt 0\).</li>
  </ol>
  <div class="max-w-3xl mx-auto">
    <?php renderImage('u3_t5_figura7.webp', 'Puntos de corte de la parábola al eje X.') ?>
  </div>
  <p>Nota: Ilustración de los diferentes casos de los puntos de corte de la parábola al eje X de acuerdo con los resultados de la solución general de la ecuación cuadrática.</p>
  <p>Mira el siguiente video.</p>
  <?php renderVideoIframe('XxH-tKW2ctw', 'GRAFICAR Y ANALIZAR UNA FUNCIÓN CUADRÁTICA | FUNCIÓN CUADRÁTICA', 'max-w-xl mx-auto my-5') ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el <a href="<?php echo PATH_DOCS . 'u3_t5_descargable_practica_grafico_dispersion.docx'; ?>" target="_blank">documento de la práctica</a>. ee con atención y contesta las preguntas de las actividades:</li>
    <ul>
      <li>“Reconocimiento de los coeficientes de la cuadrática, la concavidad de la parábola y si cruza el eje x”</li>
      <li>“Elaboración de la gráfica de la parábola”</li>
    </ul>
    <li>Mantén abierta la práctica para realizar el resto de los ejercicios. <strong>Es momento de que subas tu archivo</strong>.</li>
    <li>Una vez que termines todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap5. Ejemplo: SanchezLopez_JoseLuis_U3Ap5.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t5_lista_cotejo_practica_grafico_dispersion_analisis_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a10', "Práctica: Gráfico de dispersión y análisis de gráficos", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>La gráfica de dispersión es muy útil en la escuela porque él podemos aplicarla en muchas de tus materias, para representar la relación entre dos variables que participan en el desarrollo de un fenómeno físico, químico, biológico, entre otros, así como de aspectos matemáticos, administrativos, estadísticos, económicos, etc.</p>
  <p>Estas permiten interpolar para conocer que sucedió durante el proceso en algún punto intermedio no tabulado, o extrapolar para estimar o predecir algún comportamiento fuera de los límites de los datos.</p>
  <p>El diagrama de dispersión es una herramienta de control y apoyo a la toma de decisiones para verificar la existencia de una correlación o relación entre variables de carácter cuantitativo. El objetivo de esta herramienta es analizar la posible relación causa-efecto entre dos variables y comprobar las hipótesis.</p>
  <p>Esta representación de datos cuando se emplea en la industria o las empresas permite analizar y mejorar los procesos internos como si se intenta dar argumentos sólidos para la toma de decisiones, las gráficas de dispersión son la oportunidad perfecta para visualizar las relaciones importantes que nos rodean cada día.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para terminar");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
