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
  <h2>La sociedad mexicana</h2>

  <p>A partir de 1940, se dio un crecimiento económico en el país, caracterizado por el proteccionismo estatal en beneficio de los inversionistas sobre todo extranjeros, quienes salieron ampliamente beneficiados de los créditos y las exenciones fiscales. A la par, se buscaba el desarrollo industrial urbano del país y la integración de la nación a la modernidad.  Sin embargo, en este periodo también fueron evidentes las contradicciones campo-ciudad y desigualdades sociales, factores que incidieron en el surgimiento de diversos movimientos sociales.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-palacio.webp', 'PALACIO DEL DDF ENERO 02 1937, imagen de Gobierno de la CDMX','https://commons.wikimedia.org/wiki/File:006057-001_PALACIO_DEL_DDF_ENERO_02_1937_(34147348565).jpg','wikimedia commons');
    ?>
  </div>

  <p>Todo este contexto influyó en la vida cotidiana de <b>la sociedad mexicana</b>, que experimentó una serie de cambios, entre ellos; <b>el incremento poblacional</b>, el papel cada vez más relevante de <b>las mujeres en la política y la economía</b>, un importante proceso de <b>urbanización</b> y el incremento de <b>migración</b> de zonas rurales a las urbanas, entre otros.</p>

    <?php ob_start(); ?>
    <p>Revisa a continuación el vídeo y contesta las preguntas integradas para identificar algunas características de la sociedad mexicana en el periodo que estamos trabajando:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a13', "La sociedad en los 60s", $ActividadContent);
    ?>

  <p>Con la <b>idea progresista</b> que asumieron los gobiernos del periodo que estamos estudiando, se enfatiza la necesidad de constituir un <b>país moderno</b>, en el que la sociedad tuviera acceso a los bienes materiales y de servicios –electrodomésticos, productos para la higiene, belleza, viviendas, alimentos procesados, transportes rápidos, etcétera- creados por el avance científico y tecnológico en el contexto internacional. En correspondencia con esta visión, se generaron <b>anuncios publicitarios</b> que gestaron la constitución de una <b>sociedad de consumo</b>, propensa a adquirir productos que les ofrecían la satisfacción de cierto tipo de necesidades, deseos e incluso denotar estatus o distinción que se vinculó con herramientas y estrategias publicitarias.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-orange.webp', 'Imagen de Estrategias didácticas basadas en el  Uso de las imágenes INFOCAB-SB40230');
    ?>
  </div>

  <p>De esta manera, <b>la publicidad</b> que inducía a la compra del producto ofertado, contribuyó al desarrollo del proceso productivo y al <b>incremento de las actividades comerciales</b>. A su vez, la difusión, compra y uso de gran cantidad de productos novedosos y modernos incidió en la <b>dinámica de la vida cotidiana</b>, que entre otros aspectos mostraba la convivencia y la felicidad familiar basada en una posición jerárquica del hombre, una mujer representada en su papel de ama de casa, dedicada al hogar, las tareas domésticas o el cuidado de los hijos. Ahora revisa con detenimiento los siguientes anuncios comerciales.</p>

  <?php
      renderVideoIframe('WTX__lEppmQ', 'Comerciales en la TV mexicana años 60s IV');
    ?>

    <p>Durante este periodo se introdujo el uso de <b>las tarjetas, la televisión, el supermercado</b> y destacan lugares propios de una clase media como La Colonia del Valle, la Roma y la Zona Rosa. Se favoreció también la <b>urbanización de la ciudad de México</b> con la construcción de ejes viales, la construcción de viviendas multifamiliares como la del conjunto Miguel Alemán; se promocionaba Ciudad Satélite como uno de los desarrollos más importantes se esa época, imitando de cierta manera los desarrollos estadounidenses y prometiendo alta calidad de vida. Se empezó a construir en 1953 Ciudad Universitaria, entre otros cambios que favorecen la idea de progreso.</p>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-migracion.webp', 'Migración de zonas rurales a urbanas');
    ?>
  </div>

  <p>Y si bien los gobiernos trataban de mostrar un proceso de industrialización, urbanización, modernidad y aparente progreso económico, la mayor parte de la sociedad padecía de los estragos económicos que obligaba a la <b>migración hacia las ciudades</b> pero también hacia <b>Estados Unidos</b>, favorecida por el contexto de la Segunda Guerra Mundial y el <b>Programa Bracero</b>, que era un acuerdo bilateral entre Estados Unidos y México que permitió a trabajadores mexicanos provenientes de áreas rurales trabajar en ese país legalmente. Sin embargo, es un hecho que durante el mismo periodo la migración indocumentada por la frontera vio el tránsito de numerosos hombres, mujeres y niños. De aquí que palabras como “alambrista”, “mojado” y “wetback” designarán también a quienes cruzaron el lindero divisorio por algún punto de la diversa geografía fronteriza (Córdoba Ramírez, s.f.)</p>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
