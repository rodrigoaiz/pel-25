<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La categoría de perspectiva de género como herramienta para estudiar la desigualdad</h2>
  <h3>Introducción</h3>
  <p>En las últimas dos décadas el activismo feminista ha tenido gran presencia en la esfera pública a nivel internacional, nacional y local, no solo por el número y tamaño de las expresiones y manifestaciones protagonizadas por mujeres y colectivas feministas, sino también por la difusión que estas han recibido a través de medios de comunicación, como la televisión, la prensa escrita, y por supuesto, las redes sociodigitales.</p>
  <p>Este fenómeno ha permitido, entre otras cosas, difundir las consignas del feminismo y abrir la discusión sobre diversos temas relacionados con la igualdad de género, al mismo tiempo que se han propagado ideas trivializadas y falsas acerca de los propósitos y mecanismos de actuación del movimiento, así como estereotipos y prejuicios sobre "las feministas".</p>
  <p>En este contexto, abordar el tema del feminismo en el bachillerato resulta esencial para que las juventudes adquieran una visión crítica y sean capaces de identificar en qué consiste este movimiento, sus orígenes y desarrollo histórico, así como reconocer su pluralidad y el impacto que las luchas feministas han tenido en la vida de las mujeres y de la humanidad en general.</p>
  <p>Entre otras cuestiones, al revisar la historia del feminismo es posible comprender el vínculo entre este y la perspectiva de género, pues es a partir del ingreso del feminismo a la academia universitaria y a los institutos de investigación en el siglo XX, se conceptualiza el género y surge posteriormente la perspectiva de género como herramienta teórico-metodológica que permite analizar las desigualdades.</p>
  <p>En décadas recientes, dicha perspectiva se ha convertido en una herramienta fundamental para el desarrollo de políticas públicas y de programas de intervención que fomenten la igualdad de género en todos los ámbitos de la vida cotidiana (educación, salud, justicia, participación política, entre otros).</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>