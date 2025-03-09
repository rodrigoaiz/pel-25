<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Herramienta de citas y referencias bibliográficas del procesador de texto</h3>
  <h4>CITA BIBLIOGRÁFICA</h4>
  <p>Es la redacción de una idea que se extrae de un documento de manera textual o parafraseada que sirve de fundamento a nuestro trabajo. La cita se coloca en el texto y es complementada con los elementos que identifican al documento de la cual se extrajo (la referencia bibliográfica). (Dirección General de Bibliotecas, 2016)</p>
  <h3>Tipos de citas bibliográficas</h3>
  <ul class="ul-disc">
    <li>
      <h4>Textual</h4>
      <ul>
        <li>Corta</li>
        <li>Larga</li>
      </ul>
    </li>
    <li>
      <h4>No textual</h4>
      <ul>
        <li>Específica</li>
        <li>General</li>
      </ul>
    </li>
  </ul>
  <h4>CITA TEXTUAL</h4>
  <p>También llamada directa, en ella se transcriben las palabras de algún autor o de un documento propio previamente publicado, en su elaboración se puede enfatizar o resaltar el contenido, el autor o el año de publicación, dependiendo de esto, será el orden en que se redacten los elementos en la cita.</p>
  <p>Revisa cada tipo de cita para aprender a elaborarla y después realiza el ejercicio correspondiente en la práctica Citas y Referencias bibliográficas.</p>
  <h4>CITA TEXTUAL CORTA</h4>
  <p>Es un texto transcrito de menos de 40 palabras, va entrecomillado, junto a los datos del autor, año y número de la página de donde se extrajo. Se puede presentar en cualquiera de los siguientes tres énfasis.</p>
  <div class="mx-auto max-w-2xl">
    <?php renderImage("u1_t4_definicioon_correo_electronico.webp", "Definición de correo electrónico."); ?>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
