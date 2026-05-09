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
  <h2>Reconstrucción económica 1920-1928.</h2>

  <p>En la lección anterior se destacaron aspectos sobre la reconstrucción del Estado Mexicano a través de un proceso de institucionalización, pero también enfrentando conflictos no sólo con levantamientos militares en oposición al gobierno. También estuvo presente la oposición de la Iglesia a perder sus privilegios en el fortalecimiento del Estado, originando una guerra cristera.</p>

  <p>En esta lección toca hacer una revisión de la <b>reconstrucción económica</b> en la etapa posrevolucionaria, destacando su relación con el contexto económico capitalista. Esto significó en primer lugar, un reto para los <b>gobernantes sonorenses</b> -militares que participaron en la Revolución mexicana y que  fueron presidentes de México originarios de Sonora, entre ellos Álvaro Obregón, Plutarco Elías Calles y Adolfo de la Huerta- ya que persistía el bandolerismo e inestabilidad social por la pugna entre caudillos. Se requería entonces de un proceso de pacificación donde la desmilitarización se convertiría en una necesidad para los gobiernos.</p>

  <p>Por otro lado, se buscaba el <b>reconocimiento internacional</b> para fortalecer el gobierno en turno, aun cuando existía <b>oposición de países extranjeros a la aplicación del artículo 27° constitucional</b>, que establecía los derechos del Estado sobre las propiedades de la Nación, de las cuales gran parte estaban en posesión de extranjeros.</p>

  <p>De igual manera, <b>una prioridad fue estabilizar la economía e impulsar la industrialización</b> como mecanismo para lograr el crecimiento y modernización del país. A la par, establecer nuevas formas de reparto agrario y promover la reconstrucción de la economía.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-obregon-calles.webp', 'Alvaro Obregón y Plutarco Elías Calles');
    ?>
  </div>

  <p>Para ello, los gobiernos de <b>Álvaro Obregón, Plutarco Elías Calles y el periodo del Maximato</b>  (Emilio Portes Gil, Pascual Ortíz Rubio y Abelardo L. Rodríguez) crearon de forma paulatina instrumentos institucionales para <b>restablecer e intervenir en la economía.</b></p>

  <p>Para conocer la política económica que emprendieron Obregón y Calles, revisa la siguiente presentación prezi:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-prezi.webp', 'Presentación Prezi','https://prezi.com/view/fATkR9YmS6xFdonxw2x4/','prezi');
    ?>
  </div>

  <p>Los <b>gobiernos sonorenses</b> comprendieron que no se podía ser estable sin crecimiento económico, por tal motivo, iniciaron un proceso de pacificación y reducción del ejército y a la par intentaron <b>incrementar los ingresos federales y promover un crecimiento económico</b> donde las obras materiales se convirtieron en una necesidad. Así en 1925 se crea la Comisión Nacional de Caminos. Las primeras carreteras tenían como objetivo comunicar la capital con los principales puertos y regiones industriales; las carreteras México-Puebla y México-Veracruz fueron un ejemplo de la extensión paulatina de caminos.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-carreteras.webp', 'Carreteras de México');
    ?>
  </div>

  <p>Otro terreno que recibió atención fue el eléctrico. Calles intentó reglamentar a la industria en manos extranjeras para bajar las tarifas y establecer un control federal, pero fue hasta 1937 cuando se crea la Comisión Federal de Electricidad.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
