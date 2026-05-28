<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Antecedentes del caso Ingrid Escamilla</h2>

  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u2t3-iga9-img02.webp');
      ?>
    </div>
    <p>Comprender la violencia feminicida como la manifestación más brutal y final de un continuo de violencia de género es crucial para desentrañar las raíces profundas de este problema social. Al reconocerla no como un hecho aislado, sino como un eslabón final de una cadena de agresiones, invisibilizaciones y discriminaciones, se abre la puerta a cuestionar las estructuras patriarcales que la sustentan y a imaginar alternativas de prevención, justicia y reparación más efectivas y transformadoras. A continuación, conocerás el caso de Ingrid Escamilla, el cual nos confronta directamente con esta realidad, y realizarás una actividad que permita comprender las causas y proponer caminos hacia un futuro libre violencia para todas las mujeres.</p>
  </div>

  <p>La comprensión de la complejidad del feminicidio implica reconocer que no se trata de un acto aislado, sino del punto culminante de un <strong><em>continuum</em></strong> de violencia de género. En ocasiones, las víctimas suelen enfrentar diversas manifestaciones de violencia, que pueden ser física, psicológica, sexual, económica o patrimonial. Al analizar casos como el de Ingrid Escamilla, podremos identificar cómo estas distintas formas de violencia se entrelazan y contribuyen al delito de feminicidio.</p>
  <p><strong>Propósito</strong></p>
  <p>Conocer un caso de feminicidio para caracterizar la manifestación de la violencia de género presentes en la violencia feminicida.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>De manera individual, revisa los dos documentos en formato PDF que contienen notas periodísticas sobre los antecedentes y datos generales del feminicidio de Ingrid Escamilla. El objetivo es que conozcas el caso para reconocer al feminicidio como la expresión máxima de la violencia de género. </li>
  </ol>

  <div class="mt-5 flex flex-col gap-3">
    <a href="<?php echo PATH_DOCS . 'u2a9-todo-sobre-el-feminicio-de-ingrid.pdf'; ?>" target="_blank"
      class="flex items-center gap-4 rounded-xl border border-fuchsia-200 bg-fuchsia-50 px-5 py-4 shadow-sm transition hover:bg-fuchsia-100 hover:shadow-md">
      <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-fuchsia-700 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
        </svg>
      </span>
      <span class="text-sm text-gray-700">Redacción Mag. (2020, 21 de febrero) ¿Quién es Erick Francisco Robledo Todo sobre el feminicida de Ingrid Escamilla. <em>El Comercio</em>.</span>
    </a>
    <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_FeminicidioDeIngridEscamilla_Act.9.1.pdf'; ?>" target="_blank"
      class="flex items-center gap-4 rounded-xl border border-fuchsia-200 bg-fuchsia-50 px-5 py-4 shadow-sm transition hover:bg-fuchsia-100 hover:shadow-md">
      <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-fuchsia-700 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
        </svg>
      </span>
      <span class="text-sm text-gray-700">Olimpia y Simone. (2021, 9 de febrero). A un año del feminicidio de Ingrid Escamilla. <em>Voces feministas.mx.</em></span>
    </a>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>