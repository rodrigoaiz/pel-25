<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Ventajas y Desventajas en la Producción Industrial</h2>
  

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-industria.webp','Industria Química.','https://commons.wikimedia.org/wiki/File:Industrialisation.jpg','Wikimedia Commons')
    ?>
  </div>

  <p>Como has revisado, la producción industrial de productos estratégicos, como el amoniaco, tiene tanto ventajas como desventajas. En general algunas de las ventajas se centran en aspectos como:</p>

  <ul class="ul-disc">
    <li><b>Economía:</b> La producción industrial en masa puede reducir costos y aumentar la disponibilidad de productos esenciales para la agricultura y otras industrias.</li>
    <li><b>Innovación:</b> Promueve la innovación tecnológica y el desarrollo de procesos más eficientes y sostenibles.</li>
    <li><b>Generación de empleo:</b> La industria genera empleos directos e indirectos, contribuyendo al crecimiento económico y a la reducción de la pobreza.</li>
    <li><b>Desarrollo regional:</b> La instalación de industrias en determinadas regiones puede impulsar el desarrollo económico local y mejorar la infraestructura.</li>
  </ul>

  <p>Mientras que las desventajas se pueden afectan en áreas como:</p>

  <ul class="ul-disc">
    <li><b>Impacto Ambiental:</b> Los procesos industriales a menudo generan emisiones y residuos que pueden dañar el medio ambiente.</li>
    <li><b>Desigualdad:</b> La industrialización puede conducir a la desigualdad socioeconómica, beneficiando a ciertos grupos a expensas de otros.</li>
    <li><b>Pérdida de biodiversidad:</b> La destrucción de hábitats naturales y la contaminación ambiental contribuyen a la pérdida de biodiversidad y a la fragmentación de ecosistemas.</li>
    <li><b>Cambio climático:</b> Las emisiones de gases de efecto invernadero provenientes de los procesos industriales contribuyen al calentamiento global y al cambio climático.</li>
    <li><b>Agotamiento de recursos naturales:</b> La extracción de materias primas para los procesos industriales, como agua, minerales y combustibles fósiles, está agotando los recursos naturales del país.</li>
  </ul>

  <h3>Desafíos y Oportunidades</h3>

  <p>México enfrenta grandes desafíos para lograr un desarrollo industrial sostenible, como la falta de inversión en tecnologías limpias, la debilidad institucional y la resistencia al cambio en algunos sectores. Sin embargo, también existen grandes oportunidades para impulsar una transición hacia una economía más verde y equitativa.</p>

  <p>A lo largo de esta lección profundizaremos al respecto. Además, te recomendamos leer: </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-inegi.webp','','https://www.jornada.com.mx/noticia/2024/05/10/economia/produccion-industrial-repunto-en-marzo-al-crecer-0-6-inegi-4173','Producción industrial repuntó en marzo al crecer 0.6%: INEGI')
    ?>
    
    <?php
      renderImage('q3-u3-indumex.webp','','https://t21.com.mx/estos-son-los-sectores-claves-que-impulsan-la-produccion-industrial-en-mexico/','Sectores de la producción industrial que impulsan la economía en México')
    ?>
    
  </div>

  <?php ob_start(); ?>
  <p>Con base en lo revisado, te sugerimos que indagues más sobre las ventajas y desventajas en la producción industrial para que, a partir de ello, realices un ensayo que oriente la discusión desde el enfoque social, ambiental o económico.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a8', "Ventajas y desventajas en la producción industrial", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
