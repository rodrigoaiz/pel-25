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
  <h2>Feminicidio</h2>

    <div class="md:grid grid-cols-3 gap-3 items-center">
      <div class="col-span-2">
      <p>El feminicidio, la pérdida irreparable de una vida por el simple hecho de ser mujer, es un concepto que nos confronta con la forma más extrema de violencia de género. Pero, ¿a qué nos referimos exactamente cuando hablamos de feminicidio? Va más allá de un homicidio, implica un espiral de violencia y discriminación arraigada en estructuras sociales patriarcales que perpetúan la desigualdad y el control sobre los cuerpos y las vidas de las mujeres.</p>
      p>Es importante para la procuración de justicia en nuestro país, la manera en que las autoridades actúan ante casos de feminicidio. Para entender mejor este proceso, revisarás el <strong>Artículo 325</strong> del <em>Código Penal Federal</em> que define y establece las sanciones para el delito de feminicidio.</p> 
      </div>
      <div class="col-span-1">
      <?php
      renderImage('u2t3-iga9-img07.webp');
      ?>
      </div>
    </div>
    
      <p>Te invitamos a realizar la siguiente actividad para reflexionar más sobre esta situación, en donde convergen muchos aspectos (sociales, culturales, legales, etc) del fenómeno.</p>

  <p><strong>Propósito</strong></p>

  <p>Reflexionar sobre el concepto de feminicidio, mediante textos especializados, para relacionarlo con la violencia estructural que produce este fenómeno e identificar aquellos elementos que así lo tipifican.</p>

  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee con atención el texto <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_AQueLlamamosFeminicidio_Act.9.8.pdf'; ?>" target="_blank">“¿A qué llamamos feminicidio?”</a> de Marcela Lagarde y la selección del <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_CodigoPenalArticulos302y325_Act.9.4.pdf'; ?>" target="_blank">Código Penal Federal</a>.</li>
    <li>Contesta el siguiente cuestionario con la información obtenida de ambos textos.</li>
   </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a1', "¿A qué llamamos feminicidio?", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
