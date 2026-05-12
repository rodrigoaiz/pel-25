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
  <h2>Reflexiones sobre la democracia en el gobierno de la 4T</h2>

  <p>Con las reformas constitucionales y legales que se implementaron en 1996, se buscó transitar hacia la democracia dejando a un lado un régimen de partido hegemónico que nos gobernó más de 70 años. Se dio paso a un sistema de partidos competitivos o entre las tres fuerzas políticas que tenían mayor presencia: el PRI, el PAN y el PRD.</p>

  <p>Sin embargo, como apunta Eduardo López Cafaggi, citado por Morales (2022) «la institucionalización del sistema de partidos creó también una oligarquía política en la que un pequeño grupo de camarillas concentraban poder y recursos financieros» (p. 78). Esa concentración de poder económico y político tuvo lugar en el sexenio de Salinas de Gortari, quien puso en marcha una ambiciosa transformación de la economía. Gracias al proceso de privatización de empresas públicas, los sectores importantes de la economía se concentraron en pocas compañías.</p>

  <p>La creación en 2011 de un nuevo partido, Movimiento de Regeneración Nacional (MORENA), que se vio como un movimiento alternativo a esas fuerzas políticas y el triunfo de Andrés Manuel López Obrador a la presidencia de la República (2018-2024), parecen ser signos que contribuyen hacia esa transición democrática. Entre las transformaciones que el gobierno ha llevado a cabo destacan los ejercicios de consulta ciudadana y la revocación de mandato.</p>

  <p>La consulta ciudadana busca involucrar a la ciudadanía en la toma de decisiones sobre temas de interés público, por ejemplo, la consulta sobre el Nuevo Aeropuerto de la Ciudad de México y la consulta sobre enjuiciar a presidentes. La Revocación de mandato es un mecanismo a través del cual la ciudadanía puede evaluar el desempeño de sus gobernantes antes de que termine su mandato, para determinar si deben continuar o no.</p>

  <p>Sin embargo, bajo una mirada crítica existen importantes planteamientos que es preciso tener presentes, uno de ellos es el de Ramón Centeno de quien se retoman las siguientes ideas: más allá de esa aura de legitimidad que los ciudadanos le otorgaron a AMLO éste se convirtió en dueño y dios del partido dominante en las cámaras de diputados y de senadores, además de la mayoría de los congresos locales. Ni Fox, ni Calderón, ni Peña Nieto tuvieron tanto poder dentro del aparato estatal como el que obtuvo López Obrador. </p>

  <p>La juventud de Morena facilitó y acentuó la dependencia que el nuevo partido tiene de AMLO, su fundador y líder máximo e indiscutido. Cuando éste, por ejemplo, obtuvo el cargo de presidente de Morena, fue por aclamación, en votación unánime a mano alzada, y no en una votación secreta.</p>

  <p>La bicéfala condición de AMLO como jefe del Estado y del partido dominante repite (y, no olvidemos, proviene de) las viejas tradiciones del PRI. En este sentido, México fue un sistema presidencialista antes de la democratización y lo sigue siendo después de ella. Pero López Obrador, a diferencia de los demás presidentes de la era democrática, tuvo en sus manos un enorme control del Estado.</p>

  <p>El significativo debilitamiento de la tríada de partidos que dominaron la política nacional desde los noventa (PRI, PAN y PRD) y el concomitante ascenso de Morena, colocan a México en la antesala de una nueva ecuación política. Una donde, por un lado, Morena es el principal guardián del neoliberalismo y donde la oposición a éste vive una “crisis de dirección” (en virtud del desplazamiento de AMLO como líder de la oposición a guardián del statu quo).</p>

  <p>Otro trabajo que analiza la política mexicana actual es el de Morales (2022). El triunfo de un proyecto populista como el encabezado por AMLO está lejos de ser simplemente una manipulación demagógica de las emociones de los ciudadanos. Dentro de su análisis destaca un punto importante a reflexionar: la concepción de democracia del gobierno actual y su práctica misma. Nos invita a ser prudentes sobrepasando la dicotomía entre autoritarismo y democracia que los opositores a López Obrador crearon y a mantener un prudente escepticismo frente al enfoque de AMLO y sus simpatizantes, que etiquetan a sus oponentes como conservadores que tratan de interrumpir una marcha inexorable hacia el progreso y el bienestar popular.</p>

  <p>Para Morales (2022) la forma más prudente de entender el momento actual del país es como una disputa entre dos versiones de la democracia: una que enfatiza sus componentes populares, subrayando el papel de la participación electoral, la regla de la mayoría y la soberanía popular, por ejemplo, las elecciones legislativas de 2021. Y otra que prioriza sus elementos constitucionales, centrada en el expertise técnico y la independencia, por ejemplo, en la creación de los Organismos Constitucionales Autónomos (OCA), los cuales:</p>

  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>llevan a cabo funciones esenciales del Estado respecto de áreas especializadas que requieren un ejercicio autónomo e independiente respecto de los tres poderes tradicionales del Estado: Ejecutivo, Legislativo y Judicial…  Constituyen una figura clave en el sistema jurídico político ya que esa estructura les otorga la autonomía institucional (técnica y de gestión) necesaria para cumplir sus funciones sin injerencias y para revisar el actuar de los 3 poderes” (Laboratorio Electoral, 2025).</p>
  </blockquote>

  <p>Algunos de ellos se muestran en el siguiente collage.</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-collage.webp', 'Instituciones');
        ?>
  </div> 

  <?php ob_start(); ?>
    <p>Para construir un punto de vista propio acerca de estas reflexiones te invitamos a realizar la siguiente actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a12', "La práctica de la democracia en el gobierno de AMLO", $ActividadContent);
    ?>


    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
