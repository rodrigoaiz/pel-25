<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La contracultura en México y el movimiento estudiantil</h2>

  <p>Aunque en nuestro país surgieron diversos movimientos sociales con demandas laborales y en oposición a un régimen autoritario, es importante destacar que entre las décadas de 1960 y 1970 también se desarrolló en México un movimiento contracultural que influyó significativamente en el surgimiento de movimientos estudiantiles.</p>

  <p>Antes de conocer aspectos de la contracultura y del movimiento estudiantil de 1968, revisa el siguiente vídeo para que identifiques características de este movimiento:</p>

    <?php
      renderVideoIframe('', 'La Contracultura');
    ?>
  
  <p>Tras comprender el concepto de contracultura, es importante examinar detenidamente algunos movimientos vinculados a este fenómeno.</p>

  <p>Tras comprender el concepto de contracultura, es importante examinar detenidamente algunos movimientos vinculados a este fenómeno.</p>

  <h3>El rocanrol en México</h3>

  <p>De acuerdo con el autor José Agustín, en México, el rocanrol comenzó a difundirse desde sus inicios, aunque al principio fue visto como una moda pasajera proveniente de EE. UU. Sin embargo, fue hasta 1957 que surgió un verdadero movimiento juvenil con figuras como <b>Gloria Ríos, Erika Carlsson y Toño de la Villa con los Locos del Ritmo</b>, quienes comenzaron a componer su propio material.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-rocanrol.webp', 'El rocanrol en México');
    ?>
  </div>

  <p>Grupos destacados como Los <b>Locos del Ritmo, Teen Tops y Rebeldes del Rock</b> popularizaron el rock en español, adaptando canciones estadounidenses. El género se volvió especialmente popular entre estudiantes de secundaria y preparatoria, aunque los universitarios lo rechazaron por considerarlo una imposición cultural extranjera. Otros grupos exitosos fueron los <b>Black Jeans, Hooligans, Hermanos Carrión</b>, entre otros, que contribuyeron a la expansión del rocanrol en México.</p>

  <p>El éxito del rocanrol en México se debió en gran parte a su autenticidad y a que se cantaba en español, lo que facilitó su alcance entre los jóvenes. Sin embargo, tanto en EE. UU. como en México hubo una fuerte campaña en su contra desde <b>instituciones como la familia, la escuela, el gobierno y la Iglesia</b>, que lo veían como <b>unaamenaza moral</b>, asociándolo con vicios, delincuencia y comunismo. Esta reacción fue exagerada y represiva, impidiendo que el rocanrol se integrara de forma natural a la cultura popular.</p>

  <?php ob_start(); ?>
    <p>Para conocer más sobre este ritmo musical revisa lo siguiente:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a10', "Cuestionario", $ActividadContent);
    ?>

  <h3>Los “Jipitecas”</h3>

  <p>Tanto en México como en Estados Unidos, <b>los hippies (jipis) gringos establecieron numerosos contactos con jóvenes mexicanos</b>, con quienes compartían una profunda insatisfacción ante los modos de vida asfixiantes que bloqueaban la expresión libre y natural. Estos jóvenes mexicanos se dejaron el pelo largo, experimentaron con ácidos y otras drogas y emprendieron peregrinaciones a lugares como Huautla y Real de Catorce. Al regresar a las ciudades, compartían las plantas de poder con sus amigos.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-jipis.webp', 'los Jipitecas');
    ?>
  </div>

  <p>De acuerdo con el escritor José Agustín, destaca que <b>Enrique Marroquín</b>, sacerdote y antropólogo, autor de La contracultura como protesta, propuso que estos <b>jipis mexicanos fueran llamados “jipitecas”</b> para <b>resaltar su conexión con las raíces indígenas</b>. Reconocieron el conocimiento ancestral de los pueblos originarios sobre las plantas de poder y se identificaron con ellos cultural y espiritualmente. <b>Reivindicaron su herencia indígena y adoptaron su indumentaria</b>: huipiles, rebozos, faldones, huaraches, camisas y pantalones de manta, jorongos, sarapes, collares y brazaletes. Admiraron sus artesanías y las tomaron como punto de partida para desarrollar un estilo propio.</p>

  <p>Muchos <b>formaron comunas rurales</b> como forma de rechazo a la vida urbana y al deterioro ambiental, marcando así el inicio de la conciencia ecológica en México. <b>Vivían en contacto con la naturaleza, practicaban el vegetarianismo</b>, elaboraban artesanías, cultivaban su propia marihuana y promovían un estilo de vida libre, sin líderes formales y con una visión colectiva de la familia.</p>

  <p>Al igual que los seguidores del rocanrol, fueron reprimidos y muchos de ellos,  encarcelados en la cárcel de Lecumberri.</p>

  
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
