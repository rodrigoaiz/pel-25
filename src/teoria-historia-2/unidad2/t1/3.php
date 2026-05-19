<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El Historicismo, surgimiento, autores e idea de la historia</h2>
  <h3>El historicismo: surgimiento y autores principales</h3>
  <p>Como respuesta al positivismo que en su afán de utilizar métodos para asegurar el conocimiento de la verdad de los acontecimientos históricos, así como la comprobación de leyes de la sociedad, nace el historicismo, en oposición a las propuestas de Augusto Comte y sus exponentes. Los seguidores del historicismo tampoco encontraron respuesta a la forma de hacer historia del materialismo histórico o marxismo, por lo que presentaron una propuesta diferente.</p>

  <p>El historicismo surgió desde mediados del siglo XIX y se desarrolló en la primera mitad del siglo XX. Se difundió en Alemania, y de ahí por toda Europa y América Latina, donde tuvo gran aceptación de parte de los filósofos e historiadores académicos. Escritores como Leopold von Ranke, Wilhelm Dilthey, Friedrich Meinecke, Benedetto Croce, Robin George Collingwood, José Ortega y Gasset, Eugenio Ímaz, Juan Ruora-Parella, José Gaos, son algunos de los autores pertenecientes a esta corriente histórica. </p>

  <p>En nuestro país, la influencia del historicismo se impulsó en la Casa de España en México, que es el antecedente de El Colegio de México, y en los trabajos de académicos de la UNAM a través de Edmundo O´Gorman, Francisco de la Maza, Jorge Alberto Manrique, Justino Fernández, Leopoldo Zea, Eduardo Blanquel Franco y Álvaro Matute entre otros.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-comte.webp',' Augusto Comte es uno de los representantes del positivismo, escuela quien tendrá importantes críticas por parte de los exponentes de las corrientes del Historicismo, así como del Materialismo Histórico.
', 'https://es.wikipedia.org/wiki/Auguste_Comte#/media/Archivo:Auguste_Comte.jpg', 'Wikipedia');
  ?>
  </div>

  <p>El historicismo surgió por el gran impacto que tuvo la revolución francesa y el sentido de cambio que llevó a recuperar las raíces históricas de las naciones europeas, así como su búsqueda por conocer sus raíces, y, dentro de ellas, buscar una explicación más allá de las consideraciones políticas y económicas, sino también de las aspiraciones e integración de nuevas naciones, desconfiando siempre del patriotismo extremo, para lo cual, los autores buscan la explicación de las ideas de un momento histórico, lo cual contrarresta el nacionalismo como elemento de propaganda. Veamos la opinión de Jacob Burckhardt:</p>
  <blockquote class="border-l-4 border-gray-300 pl-4 italic text-gray-600">
    <p>«Las intenciones gustan también, muy especialmente, disfrazarse de patriotismo, y esto constituye el rival más importante con que tropieza el verdadero conocimiento, cuando se limita a la historia del propio país […]Hay, naturalmente, cosas que hacen que la historia patria tenga para todos ventajas eternas, y el ocuparse de ella constituye un verdadero deber.  Sin embargo, esta historia requiere como correctivo otro gran estudio, aunque sólo sea por lo entretejida que está con nuestros deseos y nuestros temores, pues tratándose de ella tiende uno constantemente a pasar del campo del conocimiento al campo de las intenciones. </p>
    <p>La mayor comprensibilidad de esta clase de historia obedece en parte a una ilusión óptica, principalmente a nuestra predisposición mucho más insistente, la cual puede ir combinada con una gran ceguera […] No pocas veces el patriotismo de que creemos dar muestras en estos casos no es más que una actitud de soberbia con respecto a otros pueblos, algo que, por tanto, se halla fuera de la senda de la verdad y con frecuencia más aún, a saber, una simple especie de partidismo dentro de nuestra órbita patriótica e incluso un afán de causar daño a los demás...Esto no es historia, sino publilidad»</p>
  </blockquote>
    <footer class="mt-2 text-sm text-gray-500">(Burckhardt, Reflexiones..., p. 53-54.)</footer>

    <h3>Etapas del historicismo</h3>


  <p>El historicismo pasa por dos etapas: la primera marcada por el surgimiento de la historia como una disciplina científica autónoma, con su propia metodología expresada en los trabajos de Leopold von Ranke. La segunda fase se presenta en el siglo XX en que se reformulan los fundamentos del conocimiento histórico con los aportes de Wilhem Dilthey (Villalobos, p. 13).
A continuación, damos un panorama de las principales características de esta propuesta en cuanto su concepción de la historia, la obra histórica, el trabajo del historiador, el uso, así como de elementos como la verdad histórica.
</p>

<?php ob_start(); ?>
  <p>También vamos a recordar a los principales autores del Historicismo, para ello realiza la siguiente actividad para reforzar tus conocimientos:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u2a2', "Autores del Historicismo", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>