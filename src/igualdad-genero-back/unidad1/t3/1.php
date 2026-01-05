<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¡Te damos la bienvenida al aprendizaje 3!</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>
  <p>En este apartado exploraremos las relaciones de poder y buscaremos formas de fomentar la igualdad de género. También abordaremos conceptos clave como el machismo y el mansplaining; y analizaremos casos para desarrollar habilidades críticas y propositivas hacia la igualdad de género.</p>
  <h3>Propósito</h3>
  <p>Comprenderás 	las relaciones de poder al identificar la diversidad de campos de denominación desde la desigualdad de género para proponer soluciones igualitarias e inclusivas.</p>
  <h3>Contenidos</h3>
  <ul class="ul-disc">
    <li><strong>Declarativos</strong><br>
    Comprenderás conceptos clave relacionados con las relaciones de poder, el patriarcado y los micromachismos, identificando sus manifestaciones en la sociedad actual y su impacto en la desigualdad de género.
    </li>
    <li><strong>Procedimentales</strong><br>
    Desarrollarás habilidades para analizar casos problemáticos, identificar relaciones de poder y proponer soluciones, utilizando herramientas como la discusión en grupos y la elaboración de propuestas.
    </li>
    <li><strong>Actitudinales</strong><br>
    Promoverás la empatía, el espíritu crítico y el compromiso con la equidad de género, fomentando actitudes de respeto, igualdad y solidaridad hacia todas las personas, independientemente de su género. 
    </li>
  </ul>
  <p><strong>Tiempo:</strong> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>