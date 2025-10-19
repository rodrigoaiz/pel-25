<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La necesidad de un contexto para entender este periodo</h2>

  <p>Antes de que revisemos las corrientes historiográficas, es necesario que conozcas el contexto en el cual se desarrollan, de esto trata esta primera pantalla: revisemos las propuestas de la teoría de la historia a partir del último tercio del siglo XX y las dos primeras décadas del siglo XXI.</p>

  <p>Es necesario conocer el entorno pues, a partir de la segunda mitad del siglo XX, los trabajos elaborados dentro de la Historia como disciplina científica, exploran nuevos sujetos y nuevos temas: la infancia, las mujeres; los «pueblos sin historia»; la interpretación de las imágenes, la visión de los pueblos sometidos por potencias imperialistas, entre otros temas. Al tocar nuevos temas, se exploran nuevas metodologías: la revisión de teorías como el materialismo histórico, que deriva en nuevas formas metodológicas como el Sistema-la historia de las mentalidades Mundo o los Estudios Subalternos. </p>

  <p>Algunas de las temáticas y métodos de la Escuela de los Annales, desarrollada a partir de los años veinte y treinta del siglo XX tiene influencia en los temas de la historia cultural: los lectores y los libros, la imprenta o una revisión de la historia del arte, con lo cual autores como Roger Chartier y Peter Burke tienen una base para desarrollar su visión de la historia.</p>
  <p>Aparece también la visión de nuevos sujetos históricos, como los pueblos sin historia y entender, también que la exploración de la historia al investigar a las personas «sin importancia» es decir las personas comunes, como tú o como yo, explorar sus motivaciones y, a partir de ellas, entender cómo se conecta el entorno nacional o global con la vida cotidiana y explorar, bajo esta perspectiva a las personas o comunidades «pequeñas»; comprender los procesos «macro», es decir nacionales o mundiales a partir de su impacto en comunidades locales, la microhistoria propone entonces una visión desde lo local hasta lo nacional o global.</p>
  <p>La aparición de nuevos sujetos de reflexión e investigación histórica propician la aparición de investigaciones de género. Se busca la comprensión del papel de la mujer no desde la perspectiva del poder político, que se identifica con un poder patriarcal sino que se busca conceptualizar a partir de nuevos conceptos, como género, patriarcado y explicar los mecanismos donde se ocultó o minimizó el papel de la mujer en los procesos históricos.</p>
  <p>Asimismo se exploran los límites y alcances del discurso de la historia, de su narrativa y de los procesos de validación del discurso histórico. Se proponen nuevas narrativas, frente a lo que un autor, Francis Fukuyama, planteó como el «fin de la historia» que define como el triunfo de la democracia liberal como modelo político, pues el modelo del socialismo real, fracasó al final de la guerra fría.</p>
  <p>Todo esto, que resumimos será el contexto historiográfico que estudiarás en esta unidad.y para su cabal comprensión necesitamos comprender el entorno político, cultural y social que rodea este periodo historiográfico, pues, además de la investigación histórica para especialistas, se plantea la difusión y enseñanza de la historia mediante su presentación y aplicación en los medios masivos de comunicación, como lo será en este momento, la televisión y actualmente los medios digitales y las TIC para difundir, enseñar y comprender a la historia como algo más que una recopilación de datos:. Ahora la historia académica no se ocupa sólo de la investigación, de formular métodos y teorías, sino también se enfoca a la divulgación, pero ¿cuál es el contexto donde surgen estas formas de comprender la historia?</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
