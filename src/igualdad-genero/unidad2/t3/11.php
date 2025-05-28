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

    <div class="md:grid grid-cols-2 gap-3 items-center">
      <div>
        <h3>Propósito</h3>
        <p>Elaboración de un manifiesto que permita visibilizar una postura en contra del feminicidio para mediante una manifestación artística.</p>
      </div>
      <div class="max-2xl mx-auto">
        <?php
        renderImage('u2t3-iga9-img09.webp');
        ?>
      </div>
    </div>

    <h3>Instrucciones</h3>

    <ol class="ol-number">
      <li>En equipos elaboren un Manifiesto en contra del feminicidio. </li>
      <li>Retomen las lecturas previas:
        <ul class="ul-disc">
          <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_FeminicidioMarcelaLagarde_Act.9.11.pdf'; ?>" target="_blank">¿A qué llamamos feminicidio?</a> de Marcela Lagarde.</li>
          <li>“Sus contrapúblicos. Otra narrativa para apropiar nuestros cuerpos” en <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_NarrarElCuerpoDeLasVíctimasDeFeminicidio_Act.9.11.pdf'; ?>" target="_blank">Narrar el cuerpo de las víctimas de feminicidio: el crimen de Francisco Robledo, sus públicos y contrapúblicos.</a></li>
          <li><a href="<?php echo PATH_DOCS . 'u2t9-Lectura_LeyIngrid_Act.9.10.pdf'; ?>" target="_blank">“Ley Ingrid, avalan cárcel a quien difunda o filtre imágenes de víctimas de feminicidios”</a>.</li>
        </ul>
      </li>
      <li>El manifiesto deberá contener:
        <ul class="ul-disc">
          <li>10 enunciados.</li>
          <li>Recuperar lo abordado en sesiones anteriores (definición de feminicidio, diferencia con un homicidio, elementos de la violencia estructural que lo invisibiliza, normaliza o encubre y, las distintas formas de intervención y manifestación en espacios públicos como forma de denuncia).</li>
          <li>Ser sintético.</li>
          <li>Ser creativo.</li>
          <p><strong>Nota:</strong> Un manifiesto es un documento o escrito donde se plasma una declaración pública de principios e intenciones, a menudo de naturaleza política o artística.</p>
        </ul>
      </li>
      <li>Una vez terminado se muestran durante la clase y se realizan comentarios en plenaria de cada uno de los Manifiestos.</li>
      <li> Una vez terminado, una persona del equipo subirá el archivo del Manifiesto en formato de imagen o pdf a esta asignación y al grupo de teams de la materia.</li>
      <li>Revisa la <a href="<?php echo PATH_DOCS . 'u2t9-Rubrica_ManifiestoEnContraDelFeminicidio_Act.9.11.pdf'; ?>" target="_blank">rúbrica</a> para que tengas claridad en lo que se va a evaluar.</li>
    </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a10', "Manifiesto en contra del feminicidio", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
