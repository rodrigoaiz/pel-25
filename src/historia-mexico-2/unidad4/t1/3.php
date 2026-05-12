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
  <h2>El Neoliberalismo en México: De Miguel de la Madrid a Enrique Peña Nieto</h2>

  <p>El expresidente Miguel de la Madrid Hurtado (1982-1988) diseñó políticas neoliberales que llevaron al país a transitar del Estado benefactor al <b>Estado neoliberal</b>. Los presidentes posteriores dieron continuidad a dichas políticas: Carlos Salinas de Gortari (1988-1994); Ernesto Zedillo Ponce de León (1994-2000); Vicente Fox Quesada (2000-2006); Felipe Calderón Hinojosa (2006-2012); y Enrique Peña Nieto (2012-2018).</p>

  <p>El Plan Nacional de Desarrollo 1983-1988 de Miguel de la Madrid cambió el modelo económico seguido hasta ese momento, el de sustitución de importaciones. Para iniciar ese cambio ingresó al país al GATT (siglas en inglés del Acuerdo General sobre Aranceles y Comercio), adelgazó al Estado, lo cual significó privatizar a las empresas públicas, y disminuir el gasto público. Así mismo, propuso una reconversión industrial para abandonar el modelo de sustitución de importaciones.</p>

  <p>La incorporación de México al GATT significó el abandono de las políticas proteccionistas y el avance hacia el neoliberalismo, modelo adoptado por las economías capitalistas que retomaban las ideas del liberalismo del siglo XX, y las adaptan a las nuevas condiciones del mercado internacional en el marco de la globalización.</p>

  <p>Los siguientes presidentes Carlos Salinas de Gortari (1988-1994); Ernesto Zedillo Ponce de León (1994-2000); Vicente Fox Quesada (2000-2006); Felipe Calderón Hinojosa (2006-2012); y Enrique Peña Nieto (2012-2018) dieron continuidad a la aplicación de políticas neoliberales. El sexenio de mayor importancia, debido al alcance de dichas políticas es el de Salinas de Gortari.</p>

  <?php ob_start(); ?>
    <p>Para profundizar en el conocimiento del mismo te invitó a realizar la siguiente actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a3', "Historia del Neoliberalismo en México - Carlos Salinas de Gortari", $ActividadContent);
    ?>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-zedillo.webp', 'Ernesto Zedillo Ponce de León','https://upload.wikimedia.org/wikipedia/commons/0/09/Ernesto_Zedillo_Ponce_de_Leon_Official_Photo_1999.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','Wikimedia Commons');
    ?>
  </div>

    <p>La crisis económica durante el Gobierno de Zedillo estuvo estrechamente relacionada con las políticas y decisiones del gobierno de Carlos Salinas de Gortari, quien postergó la devaluación de la moneda con la existencia de <b>reservas internacionales artificiales y un tipo de cambio sobrevaluado, sostenido mediante el endeudamiento externo y la emisión de tesobonos</b>, lo que generó una fuerte vulnerabilidad financiera.</p>

    <p>En este contexto con Ernesto Zedillo Ponce de León al llegar a la presidencia, se produjo el “<b>error de diciembre</b>”
      cuando Jaime José Serra Puche, Secretario de Hacienda, decidió cambiar la resolución del Director del Banco de México, Miguel Mancera Aguayo (quien proponía la libre flotación) y estableció una ligera ampliación de la banda de flotación (del 15%); sin embargo, se hizo del conocimiento de los empresarios miembros del Comité de Seguimiento del Pacto, la difícil situación de las reservas internacionales. Filtrada la información, hubo compras masivas y especulativas de dólares. La devaluación no fue provocada por la fuga de capitales sino <b>por la presión del mercado y la pérdida de reservas que forzaron la devaluación</b>. Entre el 20 y el 21 de diciembre las reservas se redujeron en casi 5 mil millones de dólares, lo que forzó a decretar la libre flotación para contener la crisis.</p>

      <?php ob_start(); ?>
          <p>Para conocer el impacto algunos aspectos de la crisis financiera, revisa lo siguiente:</p>
      <?php
        $ActividadContent = ob_get_clean();
        renderActividadH5P('u4a4', "Neoliberalismo con Ernesto Zedillo Ponce de León", $ActividadContent);
      ?>

    <p>A pesar del impacto de la crisis económica <b>Ernesto Zedillo</b> continuó con los compromisos neoliberales: <b>privatizó las comunicaciones vía satélite, permitió la inversión privada en la producción de gas natural y petroquímica, vendió el sistema ferroviario nacional y concesionó al sector privado la administración de los principales puertos y aeropuertos</b> del país adicionalmente en 1997.</p>

    <p>Con relación al ámbito laboral, promulgó la ley de los Sistemas de Ahorro para el Retiro para que administradoras financieras privadas, las <b>Afores</b>, manejaran las pensiones de millones de trabajadores. Esto aumentó la edad de jubilación y generó incertidumbre sobre el futuro de quienes menos ganan. </p>

    <p>Asimismo, continuó también con la apertura comercial con Estados Unidos y Canadá a través del Tratado de Libre Comercio de América del Norte. La aplicación de políticas neoliberales continuó con Vicente Fox Quesada (2000-2006); Felipe Calderón Hinojosa (2006-2012); y Enrique Peña Nieto (2012-2018).</p>

    <?php ob_start(); ?>
          <p>A continuación, realiza la actividad que se solicita:</p>
      <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u4a5', "Gobiernos Neoliberales 2000-2018", $ActividadContent);
      ?>
    <p>México vivió seis sexenios de continuidad neoliberal desde Miguel de la Madrid hasta Enrique Peña Nieto. En un periodo de 30 años, para atender a la no intervención del Estado en la economía, se privatizaron las empresas públicas, ferrocarriles, carreteras, bancos, la electricidad, las pensiones; se impulsó la reforma energética y laboral y se reformó la Constitución al servicio del capital extranjero. Todo tuvo un impacto negativo en la sociedad: desempleo, incremento del índice de pobreza, crecimiento de la migración, alza de precios, estancamiento del salario mínimo, entre muchos otros efectos que generaron malestar social, surgiendo movimientos sociales emergentes en contra del neoliberalismo. Este aspecto lo analizaremos en la próxima lección.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
