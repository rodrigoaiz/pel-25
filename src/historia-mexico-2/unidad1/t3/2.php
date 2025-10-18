<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Constitución de 1917</h2>

  <p>Aunque en un principio solo se pretendía reformar algunos aspectos de la Constitución de 1857, esta resultaba anacrónica ante los cambios que vivía el país. Por ello, se realizaron numerosas modificaciones, hasta el punto de considerarse una nueva Constitución, la cual fue promulgada el 5 de febrero de 1917.</p>

  <p>Entre los <b>artículos, reformados completamente</b> por el Congreso se encuentra el <b>27°y 123°</b>, el primer artículo, puede ser dividido en dos partes principales: por un lado, está el reordenamiento legal de la tenencia de la tierra por la resucitación de la vieja institución del ejido, así como por la creación de la pequeña propiedad a través del fraccionamiento de las haciendas. Por otro lado, confiere rango constitucional a los derechos de propiedad inalienables y directos de la nación sobre la riqueza del subsuelo; el derecho de explotación sólo puede ser transferido por el Estado a particulares en forma de concesiones (Tobler Hans, 1994, pág. 359).  El segundo reglamenta el campo de las relaciones laborales, atendiendo de esta manera las demandas sociales presentes en la lucha revolucionaria.</p>

  <p>A continuación, revisa las infografías que refieren a cada artículo antes señalado:</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-27.png', 'artículo 27 de la Constitución de 1917');
      ?>
  </div>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-123.png', 'artículo 123 de la Constitución de 1917');
      ?>
  </div>

  <?php ob_start(); ?>
  <p>Entre los artículos anticlericales que recuperan lo plasmado en la Constitución de 1857, se encuentra el artículo 130. Para conocer algunos de sus planteamientos revisa lo siguiente:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a10', "Artículo 130 de la Constitución de 1917", $ActividadContent);
  ?>

  <p>En la Constitución Política de los Estados Unidos Mexicanos, la soberanía es un principio fundamental porque garantiza y delimita la soberanía de México en diferentes aspectos, entre ellos: que sea un país independiente, democrático y gobernado por sus ciudadanos. Además, protege su territorio, su sistema de gobierno y sus leyes, de influencias externas y abusos internos.</p>

  <p>Entre los artículos podemos destacar los siguientes:</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-varios.jpg');
      ?>
  </div>

  <p>Finalmente debemos mencionar que un artículo que trasciende por su planteamiento social es el <b>Artículo 3</b>, en el que se establece “<b>La enseñanza es libre; pero será laica</b> la que se dé en los establecimientos oficiales de educación, lo mismo que la enseñanza primaria, elemental y superior que se imparta en los establecimientos particulares. Ninguna corporación religiosa, ni ministro de algún culto, podrán establecer o dirigir escuelas de instrucción primaria. Las escuelas primarias particulares sólo podrán establecerse sujetándose a la vigilancia oficial. En los establecimientos oficiales se impartirá gratuitamente la enseñanza primaria”</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-3.jpg');
      ?>
  </div>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
