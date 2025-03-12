<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Generaciones de computadoras</h3>
  <p>Las computadoras han evolucionado a través de los años, teniendo antecedentes de estás desde el año 4000 a.C en donde se tenían máquinas diseñadas para la aritmética como el ábaco, así como las primeras reglas de cálculo. En 1962 Blaise Pascal crea la Pascalina que realizaba operaciones aritméticas mecánicamente.</p>
  <div class="text-center max-w-2xl mx-auto">
    <img class="mx-auto" src="<?php echo PATH_IMAGES . 'u2_t1_generaciones.gif' ?>" alt="">
  </div>
  <p>En 1971 Gottfried Leibniz, mejora la máquina de Pascal, iniciando las primeras calculadoras mecánicas que se acercan de alguna manera a las computadoras. Mientras que, en 1802 Joseph Marie Jacquard inventó las tarjetas perforadas que automatiza los telares y reduce la mano de obra. En 1822 Charles Babbage crea una máquina de cálculo diferencial, Babbage es considerado el padre de la computadora ya que en 1834 inventó la máquina analítica.</p>
  <div class="my-2 text-center text-xl">
    <p>Consulta el siguiente recurso "<a href="https://view.genially.com/64def938bcd477001abfac6b/interactive-content-breakout-evolucion" target="_blank">Generaciones de computadoras</a>"</p>
  </div>
  <h3>Modelo de John Von Neumann</h3>
  <p>La mayoría de las computadoras actuales de manera interna conservan la arquitectura propuesta por John Von Neumann, quien participó en el diseño de la EDVAC. El modelo circula como un borrador en 1945 bajo el nombre de computadoras de propósito general, con la capacidad de almacenar programas. Ahora, revisa la siguiente imagen que te permitirá identificar los elementos y tareas que realiza cada una de las partes que lo componen dentro de una computadora.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u1_t1_maquina.webp', 'Esquema de Von Neumann. Imagen de Ángel L. González.', 'https://escholarium.educarex.es/coursePlayer/clases2.php?editar=0&idcurso=169057&idclase=6144321&modo=0', ' Escholarium.') ?>
  </div>
  <div class="my-2 text-center text-xl">
    <p>Consulta el siguiente recurso "<a href="https://view.genial.ly/64dfc9a173be4600186fac24/interactive-image-imagen-interactiva" target="_blank">Modelo de Neumann</a>"</p>
  </div>
  <h3>Tendencia</h3>
  <p>La tecnología se ha convertido en una tendencia que marca un cambio significativo en cualquier área de estudio, principalmente en la educación, donde docentes y alumnos son los consumidores de estas. A partir de la generación de las computadoras se presentan las principales tendencias las cuales aparecen a finales de la cuarta generación e inicios de la quinta generación.</p>
  <div class="my-2 text-center text-xl">
    <p>Consulta el siguiente recurso "<a href="https://view.genial.ly/64dfd76873be4600186fc6c2/interactive-content-infografia-lista-deportes" target="_blank">Tendencias tecnológicas</a>"</p>
  </div>
  <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de autoevaluación para que conozcas tu desempeño en el aprendizaje “explica la evolución del hardware y software de la computadora” ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a3', "Tendencias tecnológicas", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
