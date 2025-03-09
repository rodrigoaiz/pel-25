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
    <p class="text-sm"><strong>Nota</strong>: Descripción de correo electrónico, tomada de Norton, P. (2004). <em>Introducción a la computación</em> (6ª ed.). China: McGraw-Hill Education.</p>
  </div>
  <ul class="ul-disc">
    <li>
      <h4>Énfasis en el autor utiliza la cita narrativa</h4>
      <div class="px-5 py-4">Formato<p>Autor (Año), “Contenido”, (p. Número de página).</p>
        <div class="m-2 p-2 border border-red-500">Norton (2004) define que “El correo electrónico es un servicio para intercambiar mensajes a través de una red de computadoras” (p. 77).</div>
      </div>
    </li>
    <li>
      <h4>Énfasis en el año</h4>
      <div class="px-5 py-4">Formato<p>Año, Autor, “Contenido”, (p. Número de página).</p>
        <div class="m-5 p-5 border border-red-500">En 2004 Norton define “El correo electrónico es un servicio para intercambiar mensajes a través de una red de computadoras” (p. 77).</div>
      </div>
    </li>
    <li>
      <h4>Énfasis en el contenido utiliza la cita entre paréntesis</h4>
      <div class="px-5 py-4">Formato<p>“Contenido”, (Autor, Año, p. Número de página).</p>
        <div class="m-5 p-5 border border-red-500">“El correo electrónico es un servicio para intercambiar mensajes a través de una red de computadoras” (Norton, 2004, p. 77).</div>
      </div>
    </li>
  </ul>
  <?php ob_start(); ?>
  <p class="font-black">A lo largo de las siguientes pantallas desarrollarás la práctica de citas y referencias bibliográficas.</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t4_practica_citas_referencias_bibliograficas.docx' ?>" target="_blank">documento</a> para realizar cada uno de los ejercicios.</li>
    <li>Abre el documento.</li>
    <li>Elabora el Ejercicio 1. Cita corta redactando la cita correspondiente a cada énfasis a partir de la referencia bibliográfica.</li>
    <li>Mantén abierta la práctica para realizar el resto de los ejercicios.</li>
    <li>Una vez que concluyas todos los ejercicios guarda el documento siguiendo el formato Apellidos_Nombre_U1Ap7. Ejemplo: SanchezLopez_JoseLuis_U1Ap7.</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t4_rubrica_practica_citas_referencias_bibliograficas.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a19', "Práctica: Citas y Referencias bibliográficas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
