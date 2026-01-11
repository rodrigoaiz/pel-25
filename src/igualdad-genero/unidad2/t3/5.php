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
  <h2>Protocolos de atención a casos de feminicidios</h2>
  <p>Un aspecto importante para la procuración de justicia en casos de feminicidio en nuestro país, se relaciona con la forma en que las autoridades deben actuar ante estos delitos. Para entender mejor este proceso, revisaremos documentos fundamentales. Primero, un fragmento del Código Penal Federal donde se define y se establecen las sanciones para el delito de feminicidio. Después, exploraremos el <em>Protocolo Nacional para la actuación policial ante casos de violencia contra las mujeres y feminicidio</em>, el cual brinda las directrices que deben seguir las y los policías de investigación para garantizar una atención con perspectiva de género desde el primer momento.</p>
  <p>Estos documentos son la base con la que las autoridades, como policías de investigación, jueces y magistrados, deben trabajar para atender los casos de feminicidio en México, siempre teniendo en cuenta la perspectiva de género. Te invitamos a realizar la siguiente actividad que te ayudará a comprender la complejidad de este problema y la importancia de una actuación adecuada por parte de las instituciones.</p>

  <h3>Propósito</h3>

  <p>Establecer un primer acercamiento a la distinción entre el delito de homicidio y feminicidio</p>

  <h3>Instrucciones</h3>

  <ol class="ol-number">
    <li>A continuación, te compartimos fragmentos dos documentos: un fragmento del <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_CodigoPena lArticulos302y325_Act.9.4.pdf'; ?>" target="_blank">Código Penal Federal</a> y <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_ProtocoloNacionalParaLaActuacionPolicial_Act.9.4.pdf'; ?>" target="_blank">el Protocolo Nacional para la actualización policial ante casos de violencia.</a> Con ambos documentos, las autoridades (policías de investigación, jueces, magistrados) atienden, con perspectiva de género, los casos de feminicidio en México.</li>
    <li>Realiza la lectura de estos textos y recupera de ellos (subraya o toma notas en tu cuaderno) las ideas que consideres esenciales de los mismos, teniendo como guía las siguientes preguntas:</li>
    <ul class="ul-disc">
      <li>¿Cuáles son algunos de los instrumentos normativos nacionales e internacionales en los que se sustentan dichos documentos?</li>
      <li>¿Qué objetivo tiene su utilización y aplicación en los casos de feminicidio en México?</li>
      <li>En el caso del Protocolo ¿cuáles son algunas de las acciones que los policías realizan para garantizar la atención a las víctimas con perspectiva de género y en salvaguarda de sus derechos humanos?</li>
    </ul>
  </ol>

  <p><strong>Nota:</strong> Recuerda que la información que recuperes te servirá para actividades posteriores. </p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
