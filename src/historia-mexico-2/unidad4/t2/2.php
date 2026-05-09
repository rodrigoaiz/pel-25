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
  <h2>Gobiernos del PAN ¿gobiernos del cambio? y el regreso del PRI</h2>

  <h3>El gobierno de Vicente Fox Quesada (2000 - 2006)</h3>

  <p>En un ambiente festivo, el 1 de diciembre de 2000 Vicente Fox Quesada rindió protesta como presidente de la república. El país era testigo de un momento histórico con la alternancia política, con la promesa de construir un gobierno de tolerancia y respeto. Su mandato despertó muchas expectativas, sin embargo, en su gestión la democracia tuvo un claro retroceso.</p>

  <p>En lo que se refiere al conflicto en Chiapas con el Ejército Zapatista de Liberación Nacional (EZLN), Fox ofreció que iba a resolver el conflicto en 15 minutos. En este sentido, su primer acto de gobierno fue enviar al Congreso una iniciativa de ley sobre derechos y cultura indígenas elaborada por la Comisión de Concordia y Pacificación (Cocopa) e invitó al EZLN para iniciar un diálogo con el gobierno. La nueva propuesta fue cuestionada por los diputados de todos los partidos, incluido el PAN.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-submarcos.webp', 'Sub Marcos, de Orianomada','https://upload.wikimedia.org/wikipedia/commons/b/bd/Sub_Marcos.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
    ?>
  </div>

  <p>Por su parte, el Ejército Zapatista de Liberación Nacional emprendió una larga marcha hacia la Ciudad de México, sede del Poder Legislativo para convencer a diputados y senadores sobre la importancia del reconocimiento constitucional de los derechos y cultura indígena. El Senado aprobó la reforma constitucional en materia indígena, incorporando parte de los acuerdos de San Andrés Larráinzar y de la iniciativa de la Cocopa, pero excluyeron aspectos de importancia para los zapatistas, quienes pusieron en marcha una nueva forma de autogobierno.</p>

  <p>A fines del 2001 el gobierno enfrentó el conflicto y protestas contra la construcción de un nuevo aeropuerto en la zona de Texcoco. Para realizar este proyecto se decretó la expropiación de casi 5400 hectáreas de terrenos agrícolas en los municipios de San Salvador Atenco y Texcoco, pero el pago ofrecido por el gobierno federal de 7 pesos por metro cuadrado, molestó a los ejidatarios afectados quienes se movilizaron y conformaron un frente en defensa de sus tierras.</p>

  <p>Otro conflicto fue el magisterial en el estado de Oaxaca, en busca de mejora en sus condiciones laborales, ligadas también a la falta de infraestructura, servicios básicos y abandono histórico de comunidades indígenas y en contra del gobernador Ulises Ruiz Ortiz (PRI), considerado como autoritario y represor. En este contexto se crea la Asamblea Popular del Pueblo de Oaxaca (APPO). Se intentó deslegitimar el movimiento, acusándolo de violencia, infiltración de grupos radicales y afectación al turismo. La acción del gobierno federal tuvo lugar en <b>octubre de 2006</b>: el gobierno de Fox envió a la <b>Policía Federal Preventiva (PFP)</b> para recuperar el control de la ciudad de Oaxaca.</p>

  <?php ob_start(); ?>
    <p>En materia de política social destacan los siguientes programas, descritos en la siguiente imagen:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a9', "Gobierno de Vicente Fox Quesada", $ActividadContent);
    ?>

    <p>El gobierno de Fox también fue cuestionado por actos de corrupción, entre ellos el caso “Pemexgate”, cuando el IFE reveló que la empresa Petróleos Mexicanos había hecho transferencia de recursos al PRI para apoyar la campaña presidencial de Francisco Labastida, por la vía del sindicato petrolero. Con ello el PRI sobrepasó el límite de aportaciones y al final sólo se le castigó con una multa. Otro caso fue el grupo “amigos de Fox“, porque el PAN y su candidato recibieron recursos provenientes del extranjero para financiar la campaña de Fox. Igualmente, el partido fue sancionado económicamente.</p>

    <p>Además de continuar con las políticas neoliberales y al ser evidente la falta de un proyecto de nación que derivó en diversas problemáticas, se hacía evidente la falta de democracia en el país.  A esta situación agreguemos que en la gestión de Fox, la democracia tuvo un claro retroceso por pretender heredar la presidencia a su esposa e intentar sacar a Andrés Manuel López obrador de la carrera presidencial.</p>

    <h3>Felipe Calderón y la lucha contra el narcotráfico, un revés en la democracia (2006 - 2012)</h3>

    <p>Al llegar a la presidencia, Felipe Calderón tenía que hacer frente a una presión social y la falta de legitimidad.</p>

    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-calderon.webp', 'Presidente Felipe Calderón','https://upload.wikimedia.org/wikipedia/commons/f/fa/Presidente_Felipe_Calder%C3%B3n._Fotograf%C3%ADa_oficial.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
    ?>
  </div>

    <p>El sexenio de Felipe Calderón representó la segunda presidencia panista en nuestro país; sin embargo, probablemente este periodo será recordado como el más violento de los últimos años. Felipe Calderón llegó a la presidencia con serios cuestionamientos sobre la elección, ya que la diferencia entre Felipe Calderón y Andrés Manuel López Obrador fue de 0.56% lo que llevó al candidato de la Coalición por el Bien de Todos a no aceptar los resultados electorales, pues consideró que se había cometido un fraude, iniciando un movimiento de resistencia civil (Somuano Ventura, 2015).</p>

    <p>Aunado a lo anterior, Calderón tuvo que hacer frente a problemas con el narcotráfico y conflictos con Estados Unidos por la narcoviolencia en la frontera, por tanto decidió combatir el narcotráfico y promover reformas a las instituciones en materia de seguridad, entre ellos la creación de la Policía Federal para centralizar el combate al crimen. Esto provocó una escalada de violencia altísima y con un alto costo social por el aumento de homicidios y violaciones a los derechos humanos, como fue el caso de Ayotzinapa. Para el 2006 se considera que hubo una regresión en la democracia por los problemas sociales y por el regreso del PRI al poder, partido que dispersó su poder en liderazgos institucionales (gubernaturas y bancadas legislativas) y en grupos diversos que conservaron el poder después del 2000 y de quienes se hicieron cargo de las maquinarias electorales estatales (Somuano Ventura, 2015, pág. 7).</p>

  <?php ob_start(); ?>
    <p>Para conocer otros aspectos del gobierno de Felipe Calderón revisa los textos que se presentan a continuación en forma de artículos periodísticos. Al finalizar contesta la actividad propuesta:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a10', "Gobierno de Felipe Calderón Hinojosa", $ActividadContent);
    ?>

    <h3>El sexenio de Enrique Peña Nieto (2012-2018)</h3>

    <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-peña.webp', 'Presidente Enrique Peña Nieto','https://upload.wikimedia.org/wikipedia/commons/3/30/Presidente_Enrique_Pe%C3%B1a_Nieto._Fotograf%C3%ADa_oficial.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
        ?>
  </div>

  <p>Para finalizar con el periodo neoliberal, en el proceso electoral del 2012 regresa nuevamente un gobernante del PRI, Enrique Peña Nieto. Este caso es relevante porque al inicio de su mandato contó con la aprobación de 55%, para caer cuatro años más tarde a menos de la mitad (25% en noviembre de 2016, y 18% en agosto de 2018), logrando el peor nivel de aprobación para un presidente en los últimos 30 años (Consulta Mitofsky). Por lo tanto, es particularmente interesante explorar si estos niveles de aprobación y popularidad presidencial afectaron el apoyo más general al sistema político, es decir, la legitimidad (Bizberg, 2020).</p>

  <p>El regreso del PRI al poder no fue simple, ya que las condiciones políticas cambiaron con los gobiernos panistas: hubo una reducción del Estado autoritario, centralizado e intervencionista ante la creciente influencia de intereses particulares, evidenciándose la deficiencia del poder. Es así como algunos estudiosos consideran que el fortalecimiento del liderazgo político de la institución presidencial, fue un efecto paradójico del proceso de democratización. El origen del problema y el desmantelamiento de un Estado poderoso se atribuye a diferentes acontecimientos: para algunos empieza con los acontecimientos del movimiento estudiantil del 68; para otros en la reforma electoral, las crisis económicas y movilizaciones por fraude electoral, entre otros acontecimientos.</p>

  <p>Para comprender este proceso revisa el siguiente texto y al finalizar contesta el cuestionario.</p>

  <a href="https://www.redalyc.org/journal/599/59964364003/html/"><p>La presidencia acorralada de Enrique Peña Nieto</p></a>

  <?php ob_start(); ?>
    <p>Para conocer otros aspectos del gobierno de Felipe Calderón revisa los textos que se presentan a continuación en forma de artículos periodísticos. Al finalizar contesta la actividad propuesta:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a11', "Cuestionario", $ActividadContent);
    ?>


    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
