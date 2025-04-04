<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Función lineal y ecuación de la recta</h3>
  <p>Lee con atención los siguientes conceptos y observa cuidadosamente las figuras.</p>
  <p> Se llama función lineal a aquella función que tiene la forma \(f ( x ) = a x + b\), donde \(a\) y \(b\) son números reales fijos. La constante a (también usa m) se denomina pendiente y la constante b es la ordenada al origen. </p>
  <p>La función lineal \(f ( x ) = m x + b\) está asociada a la ecuación lineal \(y = m x + b\) (ecuación de la recta), donde la variable \(x\) se denomina variable independiente y variable dependiente. La pendiente ( \(m\) ) de una recta es la inclinación de la recta respecto al eje de abscisas (eje X). Dependiendo del valor de la pendiente:</p>
  <p>La pendiente ( \(m\) ) de una recta es la inclinación de la recta respecto al eje de abscisas (eje X). Dependiendo del valor de la pendiente:</p>
  <div class="max-w-md mx-auto">
    <?php renderImage('u3_t5_figura_1.webp', 'La pendiente de una recta.') ?>
  </div>
  <p>Nota: Si \(m \gt 0\) la recta es creciente hacia la derecha, si \(m \lt 0\) la recta es decreciente hacia la derecha y si \( m=0 \) , la recta es constante y la gráfica es paralela al eje X.</p>
  <p>La ordenada al origen (b) es el punto donde la recta corta al eje Y, esto es cuando \( x=0 )\ , sustituyendo en la ecuación de la recta.</p>
  <p>$$Y = m x + b$$</p>
  <p>$$Y = m ( 0 ) + b$$</p>
  <p>$$Y = b$$</p>
  <p>Al representar una función \( y = f ( x ) \) en un sistema de coordenadas cartesiano, sobre el eje de las abscisas se ubica la variable independiente \(x\), mientras que sobre el eje de las ordenadas se ubica la variable dependiente \(y\).</p>
  <div class="max-w-56 mx-auto">
    <?php renderImage('u3_t5_figura_2.webp', 'Función lineal.') ?>
  </div>
  <p>Nota: Representación de la línea recta a partir de dos puntos P1 = (e,g) y P2 = (f,h). La ordenada al origen es b.</p>
  <h4>Dominio de la recta.</h4>
  <p>Es el conjunto formado por todos los valores que toma la variable independiente \(x\) lo denominamos dominio de la función y lo denotamos Dom f. En la figura 1 podemos determinar que </p>
  <p>$$\text{Dom}f=\left[ e,f \right]$$</p>
  <h4>Rango o Imagen de la recta.</h4>
  <p> Es el conjunto formado por todos los valores que toma la variable dependiente y tales que \(y = f ( x )\) para algún \(x ∈ A ∈ A\), lo denominamos imagen de la función y lo denotamos Im f. En la figura 1 podemos determinar que \(I m f = [ g , h ]\) </p>
  <h4>Punto de cruce de la recta en el eje de X (las abscisas).</h4>
  <p>Se determina despejando x de la ecuación de la recta, cuando \(y = 0\) , es decir</p>
  <p>$$y = m x + b$$</p>
  <p>Sustituyendo \(y = 0\) en la ecuación</p>
  <p>$$0 = m x + b$$</p>
  <p>Despejamos \(x\) , restamos \(b\) en ambos miembros</p>
  <p>$$− b = m x + b – b$$</p>
  <p>$$− b = m x$$</p>
  <p>Dividimos ambos miembros entre la pendiente \(( m )\)</p>
  <p>$$\frac{− b}{m}=\frac{mx}{m}$$</p>
  <p>$$X=\frac{− b}{m}=x$$</p>
  <h4>Ejemplo del análisis de la función lineal</h4>
  <?php renderVideoIframe('TZjT0JmVJ_Q', 'FUNCIÓN LINEAL Análisis Completo: Dominio, rango, cero raíz , intervalo de positividad y negatividad', 'max-w-xl mx-auto my-5') ?>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la siguiente actividad, sube tu archivo hasta que hayas terminado todos los pasos.</p>
  <ol class="ol-number">
    <li>Descarga el <a href="<?php echo PATH_DOCS . 'u3_t5_descargable_practica_grafico_dispersion.docx'; ?>" target="_blank">documento de la práctica</a>. Lee con atención y contesta las preguntas de cada actividad. Mantén abierta la práctica para realizar el resto de los ejercicios. Conforme avances recuerda guardar tu progreso.</li>
    <li>No olvides guardar tu avance.</li>
    <li>Una vez que termines todas las actividades, guarda el documento siguiendo el formato: Apellidos_Nombre_U3Ap5. Ejemplo: SanchezLopez_JoseLuis_U3Ap5.</li>
    <li>Consulta los <a href="<?php echo PATH_DOCS . 'u3_t5_lista_cotejo_practica_grafico_dispersion_analisis_graficos.pdf'; ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</li>
  </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a10', "Práctica: Gráfico de dispersión y análisis de gráficos", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
