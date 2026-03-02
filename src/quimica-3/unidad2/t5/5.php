<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Consecuencias de la industria minero-metalúrgica.</h2>

  <p>Por otro lado, la industria minero-metalúrgica es un sector que tiene consecuencias negativas a la sociedad, debido a que la minería ha provocado accidentes en los mineros por las condiciones laborales que muchas veces tienen poca seguridad personal y ocasiona daños a su salud.  </p>

  <p>Otros problemas derivados de esta industria es el impacto ambiental que repercute en los recursos naturales, por ejemplo, derrames de sustancias dañinas, afectando flora, fauna, agua, suelo y aire. La minería es una actividad minera, la cual consume grandes cantidades de agua y es una fuente principal de contaminación de aguas subterráneas y superficiales, porque libera sales de los minerales (nitratos, sulfatos, fosfatos y óxidos), aceites, explosivos y metales pesados (As, Cr, Pb y Hg). Estos contaminantes se absorben en las plantas, otros se van a los ríos, en general se puede decir que no hay ninguna mina que no contamine.</p>

  <p>El aire se contamina debido al uso de explosivos al emitir partículas al viento y provocar la lluvia ácida por los gases de efecto invernadero como el CO2, SO2 y CH4, así como gases tóxicos empleados en los procesos de lixiviación. Esta contaminación de agua, aire y suelo en la erosión y deforestación disminuye la posibilidad de cultivar y afecta a la agricultura y ganadería. </p>

  <p>Además, las minas producen distintos tipos de ruidos y vibraciones afectando la salud de los seres vivos y de las personas de comunidades cercanas a las zonas mineras y la biodiversidad de los distintos ecosistemas porque afecta extensiones largas de bosques y selvas que son deforestadas.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-consecuencias.webp','La industria minero-metalúrgica ocasiona daños a los recursos naturales y a los seres vivos')
  ?>
  </div>

  <p>Para conocer más acerca de los daños y consecuencias de la industria minero-metalúrgica puedes consultar las siguientes páginas, donde podrás conocer problemas específicos causados por la industria minera considerando aspectos ambientales, económicos y sociales, como la legislación de la actividad de la minería, la expansión de la minería sobre zonas arqueológicas, explotación ilegal de metales preciosos, la violencia generada por grupos criminales y el impacto ambiental de metales como el litio. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-yacimiento.webp','','https://www.ocmal.org/la-mineria-y-consecuencias-en-mexico/#:~:text=La%20Industria%20Minera%20y%20Metal%C3%BArgica,%2D20%25%20de%20combustibles%20f%C3%B3siles','La minería y consecuencias en México')
  ?>
  </div>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-mineriam.webp','','https://www.gob.mx/cms/uploads/attachment/file/708117/Mineria-en-Mexico-2022.pdf','Minería en México. Panorama ambiental político y social')
  ?>
  </div>

  <p>Elabora la actividad Infografía de beneficios y consecuencias de la industria minero-metalúrgica.</p>
  <?php ob_start(); ?>
  <p>La actividad para complementar y valorar los aspectos positivos y negativos de la industria minera-metalúrgica será realizar una infografía en alguna aplicación digital sobre los beneficios y consecuencias donde investigues y desarrolles una problemática o un beneficio de este sector industrial.</p>
  <p>El contenido de la infografía debe tener:</p>
  <ul>
    <li>Título de la infografía</li>
    <li>Indicar si se trata de una consecuencia o un beneficio. Si se aborda una problemática ambiental de algún recurso natural el título debe vincular este recurso. Si se aborda un beneficio social o económico, de igual forma el título se debe vincular.</li>
    <li>Desarrollar el tema indicando datos recientes con base a fuentes verídicas de páginas gubernamentales o educativas.</li>
    <li>Emplear imágenes ilustrativas al tema.</li>
    <li>Indicar referencias en formato APA.</li>
  </ul>
  <p>El documento debe contener:</p>
  <ul>
    <li>Datos personales.</li>
    <li>Redacción clara y sin faltas de ortografía.</li>
    <li>Subtítulo en negritas y textos justificados.</li>
    <li>El documento debe ser enviado en PDF.</li>
    <li>Guarda tu documento con Apellidos_Nombre.</li>
  </ul>
  <p>Cuando tengas tu infografía sube aquí tu documento.</p>
  <p>Consulta la <a href="<?php echo PATH_DOCS . 'u2-t5-p5-guia.docx'; ?>" target="_blank">guía de evaluación</a>.</p>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a3', "Infografía de beneficios y consecuencias de la industria minero-metalúrgica.", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
