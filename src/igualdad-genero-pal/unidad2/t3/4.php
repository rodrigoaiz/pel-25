<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Manifiesto en contra del feminicidio</h2>

    <div class="md:grid grid-cols-3 gap-3 items-center">
      <div class="col-span-2">
        <p>Un manifiesto es una declaración pública escrita sobre la postura, principios e intenciones de una persona, grupo, partido político o gobierno. En este caso específico, se referirá a una o un estudiante del Colegio de Ciencias y Humanidades. Tiene como características una declaración de principios, llamando a la acción, estructura e intención.</p>
        <p><strong>Propósito</strong></p>
        <p>Elaboración de un manifiesto que permita visibilizar una postura en contra del feminicidio mediante una manifestación artística.</p>
      </div>
      <div class="col-span-1">
        <?php
        renderImage('u2t3-iga9-img09.webp');
        ?>
      </div>
    </div>

    <p><strong>Instrucciones</strong></p>

    <ol class="ol-number">
      <li>De manera individual lee <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_LeyIngrid_Act.9.10.pdf'; ?>" target="_blank">“Ley Ingrid, avalan cárcel a quien difunda o filtre imágenes de víctimas de feminicidios”</a>.</li>
      <li>Retoma las lecturas previas:
        <ul class="ul-disc">
          <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_AQueLlamamosFeminicidio_Act.9.8.pdf'; ?>" target="_blank">“¿A qué llamamos feminicidio?”</a> de Marcela Lagarde </li>
          <li>La selección del <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_CodigoPenalArticulos302y325_Act.9.4.pdf'; ?>" target="_blank">Código Penal Federal</a>.</li>
        </ul>
      </li>
      <li>labora un Manifiesto en contra del feminicidio.</li>
      <li>El manifiesto deberá contener:
        <ul class="ul-disc">
          <li>10 enunciados.</li>
          <li>Recuperar lo abordado en sesiones anteriores (definición de feminicidio, diferencia con un homicidio, elementos de la violencia estructural que lo invisibiliza, normaliza o encubre y, las distintas formas de intervención y manifestación en espacios públicos como forma de denuncia).</li>
          <li>Ser sintético.</li>
          <li>Ser creativo.</li>
          <li>Título.</li>
          <li>Autoría.</li>
          <p><strong>Nota:</strong> Un manifiesto es un documento o escrito donde se plasma una declaración pública de principios e intenciones, a menudo de naturaleza política o artística.</p>
        </ul>
      </li>
      <li>Revisa la <a href="<?php echo PATH_DOCS . 'u2t9-Rubrica_ManifiestoEnContraDelFeminicidio_Act.9.11.pdf'; ?>" target="_blank">rúbrica</a> para que tengas claridad en lo que se va a evaluar.</li>
    </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t8a2', "Manifiesto en contra del feminicidio", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
