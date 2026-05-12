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
  <h2>La violencia en México</h2>

  <p>Todos los días, las y los mexicanos vivimos rodeados de situaciones que generan <b>miedo, inseguridad, tristeza</b> pues a través de los medios de comunicación como la televisión, la prensa y las redes sociales, vemos imágenes de <b>asesinatos, secuestros, personas desaparecidas, violencia familiar, narcotráfico, trata de personas</b>, etc.</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-violencia.webp', 'Violencia en México');
        ?>
  </div>

  <p>Así, en nuestro día a día no podemos hacer omisión de la violencia en todas partes y en todas sus manifestaciones, pero entonces ¿cómo resolver el problema de violencia? Para poder encontrar una solución es necesario <b>reflexionar sobre su origen</b>; al respecto estudiosos de la materia señalan que, si bien no es posible establecer un origen único o hacer generalizaciones, si <b>podemos identificar algunas situaciones particulares</b>, por ejemplo, el hecho de que la violencia <b>tiene sus manifestaciones en el desempleo y en la precariedad laboral</b>, así como en la ausencia de derechos sociales, considerados como protecciones gestionadas por el Estado (Vite Pérez, 2015).</p>

  <p>La anterior situación va estrechamente relacionada con el desorden provocado por una economía capitalista que <b>creció en la etapa neoliberal</b>, acompañada del <b>debilitamiento de las protecciones sociales gestionadas desde el Estado</b>, lo cual provoca la inestabilidad social por la <b>multiplicación de las actividades criminales</b>.</p>

  <?php ob_start(); ?>
    <p>A continuación, revisa las siguientes tarjetas para reflexionar más sobre el tema:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a16', "Fuentes de Violencia en México", $ActividadContent);
    ?>

  <h2>El resurgimiento del movimiento feminista</h2>

  <p>En este contexto de violencia en nuestro país y al mismo tiempo en un contexto de lucha por los derechos humanos, se inserta el reinicio del movimiento feminista que en años recientes responde al aumento generalizado de violencia en nuestro país y de manera particular la violencia contra las mujeres. Han surgido manifestaciones no sólo para exigir justicia ante la impunidad en el tratamiento de delitos de género; también para enfatizar la ineficacia de la justicia ante una normalización de estos hechos en la sociedad.</p>

  <p>Muy diversos son los factores que pueden identificarse como desencadenantes del movimiento actual, entre los cuales hay al menos tres de distinta índole, que se observan como centrales para entender los alcances y las formas de manifestación que éste ha adquirido:</p>

  <ol class="ol-alpha">
    <li> El aumento generalizado de la violencia en nuestro país, y en particular la violencia contra las mujeres, </li>
    <li> La impunidad en el tratamiento de los delitos de género, la ineficacia de la justicia y la “normalización” de esta situación, </li>
    <li> La expansión de una animadversión cada vez mayor de amplios grupos de hombres contra las mujeres, de un fuerte resentimiento e incluso de un odio manifiesto ante la creciente autonomización y empoderamiento de éstas, que se ha traducido en una suerte de “ánimo vengativo”.</li>
  </ol>

  <?php ob_start(); ?>
    <p>Algunos datos sobre la violencia de género los puedes revisar en las siguientes tarjetas:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a17', "Violencia de Género", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <p>Para reflexionar los datos revisados, participa en el Foro</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a18', "Foro: sobre la violencia de género", $ActividadContent);
    ?>

    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
