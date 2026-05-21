<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¡Te damos la bienvenida a los aprendizajes 3 y 4!</h2>
  <div class="max-md mx-auto">
    <?php
    renderImage('iga3-img02.webp');
    ?>
  </div>
  <p>En este bloque de aprendizajes analizarás las relaciones de poder y los campos de dominación desde la desigualdad de género, al mismo tiempo que identificarás y cuestionarás los presupuestos de la masculinidad tradicional. La intención es que entiendas y reflexiones cómo se producen y reproducen las desigualdades de género en la vida cotidiana a través de las relaciones de poder. A través de los conceptos clave de campos de dominación y capital reflexionarás cómo es que las mujeres enfrentan obstáculos para desarrollarse plenamente en ámbitos públicos como el académico y el profesional.</p>
  <p>Asimismo, explorarás la masculinidad tradicional, sus pilares y mandatos con el propósito de reconocer sus efectos en las relaciones sociales y en la construcción de identidades. Te invitamos a cuestionar esta masculinidad tradicional con base en las herramientas teórico-metodológicas como la caja de la masculinidad, los machismos cotidianos y la triada de la violencia con la intención de abrir la posibilidad de pensar formas más justas, equitativas y alternativas de ser hombre, para contribuir a tener vidas libres de violencia.</p>
  <p>Las actividades y materiales que encontrarás en esta sección están pensados para que puedas trabajar con ellos de forma autogestiva, es decir, a tu ritmo y sin ayuda de un docente.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
  <p><strong>Aprendizaje 3</strong>. Comprenderás las relaciones de poder al identificar la diversidad de campos de denominación desde la desigualdad de género para proponer soluciones igualitarias e inclusivas.</p>
  <p><strong>Aprendizaje 4</strong>. Lograrás identificar y cuestionar algunos de los presupuestos de la masculinidad tradicional.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p><strong>Declarativos</strong>
  <ul class="ul-disc">
    <li>Poder</li>
    <li>Relaciones de poder</li>
    <li>Campos de denominación</li>
    <li>Capital</li>
    <li>Desigualdad de género</li>
    <li>Masculinidad tradicional o hegemónica</li>
    <li>Machismos cotidianos</li>
    <li>Caja de la masculinidad</li>
    <li>Triada de la violencia</li>
  </ul>
  </p>
  <p><strong>Procedimentales</strong><br>
    Desarrollarás habilidades para identificar relaciones de poder y detectar los elementos de las masculinidades que obstaculizan, impiden o favorecen el desarrollo de las mujeres, otros hombres, infancias, diversidades y disidencias sexo-genéricas. Con esa información, analizarás casos problemáticos para argumentar y cuestionar las masculinidades tradicional o hegemónica y los campos de dominación que generan la desigualdad para proponer soluciones que favorezcan ambientes de igualdad, respeto, tolerancia y convivencia.
  </p>
  <p><strong>Actitudinales</strong><br>
    Promoverás la responsabilidad, la empatía, el espíritu crítico para demostrar respeto por la diversidad de ideas y compromiso con los derechos humanos, la equidad de género, la igualdad y la solidaridad hacia todas las personas, independientemente de su género.
  </p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>