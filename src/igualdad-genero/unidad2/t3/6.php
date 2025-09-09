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
  <h2>Infografía: Feminicidio vs Homicidio</h2>

    <div class="md:grid grid-cols-2 gap-3 items-center">
        <div class="max-2xl mx-auto">
          <?php
          renderImage('u2t3-Iga9-img05.webp');
          ?>
        </div>
      <p>Es común escuchar las palabras "homicidio" y "feminicidio" y, aunque ambos términos se refieren a la privación de la vida de una persona, existen diferencias fundamentales que debemos comprender. Su distinción refleja las causas, los contextos y las motivaciones detrás de estos actos de violencia. En el apartado anterior, revisaste documentos que pueden ayudarte a reflexionar sobre las características que tiene el delito de feminicidio. Ahora, en esta actividad, podrás plasmar lo que has ido comprendiendo del tema para establecer una diferenciación clara entre ambos delitos y reconocer, de manera más asertiva, el fenómeno del feminicidio.</p>
    </div>

  <h3>Propósito</h3>
  <p>Sintetizar la comprensión del feminicidio como delito en un organizador gráfico digital.</p>

  <h3>Instrucciones</h3>

  <ol class="ol-number">
    <li>Con base en la lectura realizada en la actividad anterior (Protocolo Nacional para la actuación policial ante casos de violencia contra las mujeres y feminicidio y Código Penal Federal), elabora una infografía que defina y caracterice el delito de feminicidio.</li>
    <li>Asegúrate de que en tu trabajo se encuentren las circunstancias mencionadas en el Código Penal (primer documento compartido en la actividad anterior) que deben estar presentes en los casos de feminicidio.</li>
    <li>Coloca en este apartado tu infografía en formato PDF o JPG. Nombra el archivo de la siguiente manera: Nombre_Apellido_Infografía_Feminicidio</li>
    <li>Para elaborar tu infografía puedes utilizar las siguientes plataformas digitales gratuitas:
      <ul class="ul-disc">
        <li><a href="https://auth.genially.com/es/login" target="_blank">Genially</a></li>
        <li><a href="https://www.canva.com/es_mx/" target="_blank">Canva</a></li>
      </ul>
    </li>
    <li>Revisa la <a href="<?php echo PATH_DOCS . 'u2t9-Rubrica_InfografiaFeminicidiovsHomicidio_Act.9.5.pdf'; ?>" target="_blank">rúbrica</a> para que conozcas cuáles son los criterios con los que se evaluará tu infografía.</li>
  </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a4', "Infografía: Feminicidio vs Homicidio", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
