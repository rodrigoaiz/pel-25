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
  <h2>Reformas electorales y legitimidad cuestionada: Salinas y Zedillo</h2>

  <p>El cambio de un Estado <b>benefactor</b> a un Estado <b>neoliberal</b> implicó reformar al Estado; esta decisión que el expresidente en turno tomó a comienzos de los años ochenta, representó un cambio político sin precedentes en el país. Veamos los cambios que afectaron las <b>estructuras políticas, económicas y sociales</b> de los sexenios anteriores.</p>

  <p>Pero antes de comenzar debemos entender algunos conceptos fundamentales, así que revisa a continuación el siguiente vídeo:</p>

  <?php
  renderVideoIframe('', 'Principales conceptos');
  ?>

  <p>El expresidente Carlos Salinas de Gortari destacó que su nueva política económica no sólo iba a beneficiar a las clases poseedoras del capital sino también a los que menos tienen. Cuando asumió el poder, el país se encontraba en una inestabilidad financiera, inflación y desempleo producto de la prolongada crisis que había mermado seriamente las condiciones de vida de la población, lo cual provocó el descontento social hacia las políticas tendientes a reemplazar el agotado modelo de crecimiento, el de Sustitución de importaciones.</p>

  <p>Además, los resultados de las elecciones pusieron en cuestionamiento su triunfo en las urnas; ante la sospecha de fraude y los cuestionamientos de los partidos de izquierda emprendió una <b>Reforma del Estado</b> para obtener <b>legitimidad</b> – los cuestionamientos por un fraude electoral del cual resultó electo–, la misma contempló los siguientes acuerdos: a) Aplicación de la vida democrática; b) Recuperación económica y estabilidad; c) Mejoramiento productivo del bienestar popular. </p>

  <p>La manera en la que el expresidente Carlos Salinas de Gortari llegó al poder, creó una división entre los viejos y los nuevos priistas; los primeros se apegaban a la tradición; los segundos se propusieron renovar al partido para adecuarlo a la tendencia democrática que Salinas quiso difundir. Pretendieron desligar al partido del gobierno y evitar la práctica del dedazo en las elecciones para llevar a cabo prácticas democráticas. Por ello, llevó a cabo la reforma electoral, que pretendía lograr un equilibrio entre los partidos políticos; sin embargo, en la práctica, en la designación del candidato priista al poder ejecutivo en 1993, se siguió empleando la vieja práctica del dedazo y el fraude electoral. </p>

  <p>Sin embargo, con la idea de iniciar la conformación de una vida democrática que retomarían los posteriores gobiernos se crearon las siguientes <b>instituciones</b>:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-tribunal-IFE.webp', 'Instituciones creadas durante el gobierno de Carlos Salinas de Gortari');
    ?>
  </div>

  <p>Durante el periodo que estamos estudiando, las instituciones y organismos electorales como el IFE y posteriormente INE, mantienen su autonomía en el intento de avanzar hacia la imparcialidad electoral, lo que sentó las bases para la alternancia en el poder en los años 2000 y 2018. En pro de la ciudadanía se establecen cambios, por ejemplo, en el año 2014 se estableció la paridad de género obligatoria en candidaturas, así como la fiscalización en tiempo real de los gastos de campaña.  En tiempos recientes se han promovido reformas para la reducción de presupuesto del INE, dentro de un contexto de austeridad propuesta por el gobierno de Andrés Manuel López Obrador. También una Reforma Constitucional Electoral en el año 2022 para la Elección por voto popular de consejeros del INE y magistrados del Tribunal Electoral del Poder Judicial de la Federación (TEPJF).</p>

  <?php ob_start(); ?>
    <p>Para conocer otros acontecimientos relevantes en el ámbito político durante el gobierno de Salinas de Gortari, revisa las siguientes tarjetas:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a7', "Gobierno de Carlos Salinas de Gortari", $ActividadContent);
    ?>

    <h3>Hacia una democracia: Ernesto Zedillo Ponce de León</h3>

    <p>En el proceso electoral de 1994 se estrenaron las nuevas reglas e instituciones de vigilancia y supervisión en los procesos electorales; el Código Federal de Instituciones y Procedimientos Electorales (Cofipe), aprobado por el Congreso en 1990, con el Instituto Federal Electoral (IFE) y el Tribunal Federal Electoral (TFE). Y si bien las elecciones transcurrieron sin contratiempos a pesar del clima de inseguridad  y temor por los acontecimientos del sexenio anterior, el triunfo electoral de Ernesto Zedillo Ponce de León, no generaba confianza en el futuro inmediato para los mexicanos, pues  persistieron los cuestionamientos por prácticas tradicionales de la “maquinaria oficial”, como el uso de recursos públicos a favor del candidato oficial, el empleo intensivo y parcial de los medios de comunicación y las prácticas clientelares de compra de votos, entre otras irregularidades, en los comicios presidenciales de 1994 (Valentín, 2012).</p>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-voto.webp', 'Primeras elecciones presidenciales con el IFE');
    ?>
  </div>

    <p>Ante este contexto que cuestionaba la legitimidad de su gobierno, el presidente realizó intentos de unidad política, integrando en su gabinete a algunas personas no priístas. Por ejemplo, la Procuraduría General de la República quedó en manos del panista Antonio Lozano Gracia y después continuó con reformas para asegurar la transparencia de comicios y la total imparcialidad del IFE, firmando el documento compromisos para el Acuerdo de Política Nacional, aprobado en 1996, el cual  fortalecía  al IFE al excluir totalmente al Ejecutivo.</p>

    <p>Promueve también una reforma para evitar conflictos postelectorales. Así el noviembre de 1996 el Tribunal Federal Electoral se incorporó al Poder Judicial de la Federación, dando origen al <b>Tribunal Electoral del Poder Judicial de la Federación (TEPJF)</b> con el objetivo de fortalecer el sistema de medios de impugnación, la calificación de la elección presidencial y declaratoria de presidente electo, también para dirimir controversias federales y locales.</p>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-tribunal.webp', 'Tribunal Electoral del Poder Judicial de la Federación (TEPJF)');
    ?>
  </div>

  <p>Algunos analistas consideran que los cambios en materia político electoral de 1996 contribuyeron a transitar hacia la democracia: se le dio autonomía a los órganos electorales; al Tribunal Federal Electoral se le dieron atribuciones para dirimir controversias federales y locales; aumentó de manera sustantiva el financiamiento público de los partidos políticos; se estableció la elección directa del entonces jefe de gobierno del distrito Federal, y se ampliaron las facultades de la Asamblea Legislativa del entonces Distrito Federal.</p>

  <p>De ese modo, las elecciones intermedias de 1997 se realizaron sin la intervención del gobierno en los órganos electorales. Con ello el PRI perdió la mayoría absoluta en la Cámara de Diputados y la mayoría calificada en el Senado de la República, algunas gubernaturas y la jefatura de gobierno de la Ciudad de México. Y Para el año 2000 llegaría a la silla presidencial Vicente Fox Quesada en un ambiente de gran fiesta para muchos mexicanos,
 ya que se daba el fin del dominio priísta con un cambio de partido en el Poder Ejecutivo Federal.
</p>

  <p>A la par de las Reformas que promovió Ernesto Zedillo, surgieron en el país movimientos contra un Estado que, favoreciendo una economía neoliberal, no resolvió los conflictos y malestar social.</p>

  <?php ob_start(); ?>
    <p>Para conocer más sobre estos problemas, revisa lo siguiente:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a8', "Gobierno de Ernesto Zedillo Ponce de León", $ActividadContent);
    ?>


    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
