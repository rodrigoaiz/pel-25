<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identificación y cuestionamiento de los presupuestos de la masculinidad tradicional</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga4-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 4!</h3>
  <p>El contenido y las actividades que realizarás te ayudarán a reconocer y cuestionar estereotipos y roles de la masculinidad tradicional. A medida que avances por las actividades, te darás cuenta de que algunos de estos estereotipos y roles impiden el desarrollo de otros hombres y mujeres con lo que se promueve la violencia de género.</p>
  <p>Pero, gracias a la diversidad, podemos apreciar cambios en los roles y estereotipos masculinos que contribuyen a crear ambientes de igualdad, respeto, tolerancia y convivencia. Por ello, al finalizar este aprendizaje te invitamos a reflexionar sobre los aspectos negativos y positivos de las representaciones culturales masculinas.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>Al finalizar este aprendizaje lograrás identificar y cuestionar algunos de los presupuestos de la masculinidad tradicional.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>- Estereotipos y roles de género de los hombres.</p>
  <p>- Masculinidad hegemónica, tradicional, masculinidades alternativas y caja de la masculinidad.</p>
  <p>- Triada de la violencia</p>
  <p>- Derechos humanos de los hombres y ambientes de igualdad, respeto, tolerancia y convivencia.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>- Diferenciar estereotipos y roles masculinos.</p>
  <p>- Ejemplificar pilares o mandatos de la masculinidad tradicional.</p>
  <p>- Detectar los elementos de las masculinidades que obstaculizan, impiden o favorecen el -desarrollo de las mujeres, otros hombres, infancias, diversidades y disidencias sexo-genéricas.</p>
  <p>- Argumentar y cuestionar las masculinidades que impiden la creación de ambientes de igualdad, respeto, tolerancia y convivencia.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>- Responsabilidad en el aprendizaje.</p>
  <p>- Disposición para compartir.</p>
  <p>- Respeto a la diversidad de ideas y a los derechos humanos.</p>
  <p>- Escucha activa.</p>
  <p>- Participación en la formación de pares.</p>
  <p>- Disposición para el trabajo colaborativo.</p>
  <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>