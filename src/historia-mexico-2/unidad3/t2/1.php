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
  <h2>El sistema político mexicano: presidencialismo, partido hegemónico y corporativismo.</h2>

  <H3>Presidencialismo</H3>

  <p>En la lección anterior, revisamos las principales características del Estado Benefactor, donde éste asume la responsabilidad del bienestar general de su población. De igual manera analizamos el Milagro Mexicano: la modernización e industrialización que los gobiernos intentaron promover en nuestro país.</p>

  <p>Ahora debes comprender los <b>principales aspectos del sistema político mexicano entre 1940-1982</b>, caracterizado por relaciones de poder político que surgen en la etapa posrevolucionaria y que obligan a esquematizar un conjunto de situaciones, hechos y elementos que conformaron la vida y sistema político mexicano, analizando las bases jurídicas que lo sustentaron. Al mismo tiempo es importante comprender las relaciones entre presidencialismo, partido hegemónico y corporativismo, que  permitieron a una élite política mantenerse en el poder hasta el año 2000.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-constitucion.webp', 'Constitución');
    ?>
  </div>

  <p>Con relación al <b>presidencialismo</b>, su <b>fortalecimiento</b> fue una <b>necesidad de la etapa posrevolucionaria</b>, en la que predominaba la inestabilidad política y los levantamientos de caudillos que buscaban el poder, además del conflicto entre la Iglesia y el Estado, así como el intervencionismo extranjero que pugnaba por la no aplicación del artículo 27°. De igual manera, el malestar de la clase obrera y la situación precaria de los campesinos.</p>

  <p>En este contexto, el fortalecimiento del <b>presidencialismo</b> fue necesario para <b>terminar con las pugnas políticas internas</b> y consolidar la formación de un régimen presidencialista – no autoritario y represivo como en su momento lo representó Porfirio Díaz. Había que sentar las bases jurídicas, <b>apoyándose en la Constitución de 1917</b>, para la instauración de <b>un Estado fuerte</b> con un gobierno dotado de las facultades necesarias para ese propósito.</p>

  <?php ob_start(); ?>
  <p>Para conocer las bases jurídicas que fortalecieron el presidencialismo, revisa lo siguiente:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u3a5', "Bases jurídicas del presidencialismo", $ActividadContent);
  ?>

      <p>De esta manera el presidente obtenía poderes extraordinarios frente a los poderes legislativo y judicial.</p>

  <h3>Partido hegemónico</h3>

  <p>Si bien la Constitución es la base jurídica que favoreció el <b>gobierno presidencial</b>, éste se fue <b>fortaleciendo</b> en años posteriores con dos acontecimientos decisivos que colocaron al presidente como centro del sistema político mexicano: el primero, <b>la creación de un partido del Estado PNR (Partido Nacional Revolucionario)</b> que se transforma en 1938 y 1946, y en segundo lugar <b>el corporativismo</b> con el objetivo de controlar organizaciones, aspecto que se desarrollaría más adelante.</p>

  <p>Con relación a la creación del <b>partido hegemónico</b> y dominante del sistema político mexicano, te invito a revisar sus cambios para comprender sus tareas fundamentales, entre ellas: alcanzar la <b>centralización política</b>, convertirse en gestor de demandas de las masas organizadas, ser <b>árbitro de los conflictos sociales</b>, y <b>disciplinar a los revolucionarios</b>.</p>

  <?php ob_start(); ?>
  <p>Para conocer las bases del partido hegemónico, revisa lo siguiente:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u3a6', "Partido Hegemónico", $ActividadContent);
  ?>

  <p>De esta manera surgió el PRI como un administrador de corporaciones más que de masas. Sus funciones consistían en atender las disputas o dificultades que se dieran entre ellas y al mismo tiempo coordinar sus movimientos, sobre todo en momentos de elecciones. Importante, mantener a las masas unidas en su aislamiento, bajo la égida del Estado (Cordova, 1989, pág. 204).</p>

  <h3>Corporativismo</h3>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-corporativismo.webp', 'Corporativismo');
    ?>
  </div>

   <p>Si bien en el proceso de fortalecimiento del <b>presidencialismo</b> fue importante la creación de un partido hegemónico, el PRI como institución y mecanismo político fundamental hizo posible la alta concentración del poder, habría que considerar también su <b>papel corporativo</b>, a través de la <b>alianza política entre sectores campesinos, obreros y populares</b>,  lo que le dio una característica peculiar al corporativismo en México. Así se establecieron alianzas con los campesinos a través de la Confederación Nacional Campesina (CNC); con el sector obrero, organizando a los obreros en torno a la agrupación de los sindicatos existentes, entre ellos la CGOCM dirigida por Vicente Lombardo Toledano y Fidel Velázquez; la CSUM, brazo sindical del Partido Comunista Mexicano; la CROM y la CGT entre otros sindicatos independientes. Surge como una entidad a favor de la lucha frontal en la búsqueda de mejoras en las condiciones económicas y seguridad social de los trabajadores;  incluso hubo una expansión e intervención del Estado en la economía con dos grandes confederaciones la Concanaco y Concamin (Meyer, 2000). </p>

   <?php ob_start(); ?>
  <p>Para reflexionar sobre las relaciones de poder, ve con detenimiento la película “La ley de Herodes”. Al finalizar participa en el Foro de discusión:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a7', "Foro: Sistema político mexicano", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
