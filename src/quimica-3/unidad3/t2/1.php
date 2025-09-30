<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reacción química</h2>

  <?= TabsComponent([
    'tabs' => [
      [
        'id' => 'ReaccionQuimica',
        'label' => 'Reacción Química',
        'content' =>
        '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <a href="https://portalacademico.cch.unam.mx/alumno/quimica1 "><img class="mx-auto" src="../../assets/img/q3-u3-reaccion.webp" /></a>
                </div>
                    <div class="col-span-2 text-sm leading-6">
                        
                        <p>A los cambios químicos, es decir, los procesos en los que unas sustancias se transforman en otras diferentes, también se les conoce como reacciones químicas.</p>

                        <p>Para que algunas sustancias se transformen en otra u otras, sus átomos deben separarse, unirse o reorganizarse, y para ello es necesario que se formen o se rompan enlaces químicos, que son las fuerzas que mantienen unidos a los átomos.</p>
                        
                        <p>Dos átomos se separan cuando se aplica sobre ellos una fuerza mayor a la que los mantiene unidos. Un átomo se une o enlaza con otro si al hacerlo se libera energía y por lo tanto los dos átomos unidos son más estables que cada uno por separado.</p>

                        <p>En consecuencia, durante las reacciones químicas los átomos o moléculas participantes pierden (liberan) o ganan (absorben) energía.</p>
                    </div>
                </div>'
      ]
    ],
  ]) ?>

    <h2>Rapidez de reacción</h2>

  <p>La rapidez de reacción se describe como la variación o cambio de la concentración de los reactivos o productos por unidad del tiempo en una reacción química. Dicho de otra forma, es la rapidez con que se consumen los reactivos y se forman los productos durante una reacción química.</p>

  <p>Lo anterior se describe en la siguiente gráfica general.</p>

   <?php
  renderImage('q3-u3-grafica.webp', 'Velocidad de una reacción Concentración vs Tiempo de reacción.');
  ?>

  <p>Se debe especificar que antes se conocía este concepto como “velocidad de reacción”, pero actualmente se maneja el término “rapidez de reacción”. Así,  se evita la connotación vectorial de la palabra "velocidad" que implica una dirección. La rapidez de reacción es una magnitud escalar que mide cómo cambia la concentración de los reactivos o productos en un determinado intervalo de tiempo, enfocándose solo en la magnitud del cambio y no en la dirección, lo que la hace más adecuada para describir los procesos químicos.</p>

  <h2>Teoría de Colisiones</h2>

  <p>La teoría de colisiones es un modelo que explica cómo ocurren las reacciones químicas y por qué la rapidez de reacción varía bajo diferentes condiciones. Propuesta por Max Trautz y William Lewis en la década de 1910, esta teoría establece que para que las moléculas reaccionen, deben colisionar con suficiente energía y una orientación adecuada.</p>

  <p>Para entender este concepto a nivel nanoscópico observa el siguiente video. </p>

  <?php
  renderVideoIframe('7tGRa0Uo5mY', 'Teoría de Colisiones: Si las moléculas fueran personas…');
  ?>

   <?php ob_start(); ?>
  <p>Elabora la actividad Reacciones químicas y la rapidez de reacción para reafirmar tus conocimientos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a1', "Reacciones químicas y la rapidez de reacción", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
