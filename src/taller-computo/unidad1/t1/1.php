<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathSegments = explode('/', trim($urlPath, '/'));
$asignaturaName = $pathSegments[1];
$menuAsignaturaPath = BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';
ob_start();
?>
<h2>Bienvenida a la materia de Taller de Cómputo</h2>
<h3>Presentación</h3>
<p>En Taller de Cómputo desarrollarás el conocimiento y habilidades en una cultura informática básica, la cual apoya algunas de las actividades que realizamos en otras asignaturas.</p>
<ul class="ul-disc">
  <li>Esta <strong>Unidad 1 “Uso y búsqueda de información en Internet”</strong> te proporciona información como algunos de los conceptos de Red, identificando ciertos servicios de Internet que utilizas, así mismo administrarás tu navegador como el cambio de un motor de búsqueda como el de la BIDIUNAM o de tu preferencia, para realizar búsquedas de información, apoyándote de métodos y estrategias, evaluando la información y los sitios que visitas, respetando la propiedad intelectual al utilizar una herramienta de citas y referencias bibliográficas.</li>
  <li>En la <strong>Unidad 2 “Hardware y software”</strong> realizamos investigaciones que te permitirán describir la evolución del hardware y software, identificando las características de los diferentes tipos de computadoras, la representación y cuantificación de la información, así como la función de los elementos que integran el hardware, los diferentes tipos de software y los elementos del ambiente de trabajo del sistema operativo, así como la administración de carpetas y archivos, por otro lado explicaras las características de propiedad, distribución y libertad, que conlleva el uso del software, y como esto de alguna forma daña tu equipo de cómputo, así mismo identificarás el deterioro de tu salud y la del medio ambiente por el uso del hardware.</li>
  <li>La <strong>Unidad 3 “Aplicaciones matemáticas con una hoja electrónica de cálculo”</strong> identificarás los elementos básicos del ambiente de trabajo de la hoja de cálculo, así como los diferentes tipos y formatos que tienen los datos, mediante la solución de problemas matemáticos al utilizar funciones matemáticas, trigonométricas, estadísticas, lógicas y de texto, empleando referencias relativas, absolutas y series matemáticas, para el análisis de los gráficos de funciones lineales y cuadráticas.</li>
  <li>Por último, en la <strong>unidad 4 “Multimedia”</strong> conocerás las características de los diferentes formatos que tienen los archivos que sirven para reproducir algún tipo de medio; sea visual, auditivo u ambos, realizando ediciones de imagen, audio y video, utilizando un guión que te permitirá organizar las actividades al producir medios multimedia y puedas difundir, publicar y/o compartir con tus compañeros, sin contratiempos.</li>
</ul>
<h3>Criterios generales de evaluación y acreditación</h3>
<p>Es importante distinguir la forma de acreditación y los diversos aspectos que hay que evaluar, además de los momentos de evaluación a lo largo de la materia, ya que, al ser una modalidad en línea, eres tú el responsable de organizar tus tiempos de aprendizaje de entrega de actividades, permitiéndote el cumplir con las actividades que se te solicitan y subirlas en tiempo y forma en la fecha que se te indica, la plataforma tiene el cierre de algunas actividades que ya no alcanzarás a realizar.</p>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
