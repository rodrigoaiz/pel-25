<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2> El evento que detona la reflexión sobre la historia</h2>

<h3> El contexto histórico </h3>

<p> Para comprender las interpretaciones de la Historia en el siglo XIX, necesitamos entender el contexto en el cual se desarrollaron, 
    pues éste nos permitirá conocer cómo surgen estas interpretaciones, su importancia y trascendencia al estudiar la historia como 
    una materia teórica, con un sentido y un fin y no sólo como una acumulación de información.
</p>

<p> Así entonces, te proponemos una visión general sobre el cómo surgen las interpretaciones dentro del siglo XIX, pues a lo largo del 
    mismo, los pensadores, filósofos, políticos, historiadores, entre otros especialistas, compararon su momento histórico con la 
    Revolución Francesa para entenderlo: John Stuart Mill, Karl Marx, Edmund Burke, Leopold von Ranke o Jules Michelet.
    </p>

<h3> El evento que detona la reflexión sobre la Historia </h3>

<p> El punto de origen de la reflexión sobre la Historia para el siglo XIX lo encontramos en la Revolución Francesa. Este proceso 
    representó un cambio radical respecto a la forma de entender tanto el poder como la legitimidad de un gobernante. Demostró también 
    la fuerza del pueblo, una fuerza que se había considerado hasta ese momento pasiva frente al poder y expresó, en un país con un 
    régimen monárquico que se remonta hasta la Edad Media, que puede existir otra forma de gobierno: el gobierno republicano. 
    La revolución significó dividir la historia de Francia entre el Antiguo Régimen, que representa el pasado y el régimen 
    revolucionario, identificado con el presente.El proceso revolucionario va más allá de su fecha de inicio, 1789, pues los eventos 
    que se desarrollan tendrán repercusiones no sólo en Francia, sino en toda Europa y desarrollará consecuencias tanto en lo político 
    como en lo económico y, especialmente, en las visiones del hasta por lo menos 1815, con el fin del imperio napoleónico. Las 
    consecuencias de lo ocurrido en este periodo se reflejarán no sólo en las formas políticas de entender la sociedad, sino también 
    en la forma de interpretarlas y aplicarlas. Así en el periodo que va de 1820 a 1870 uno de los principales elementos para la 
    explicación de la historia será precisamente cómo y por qué ocurrió la revolución; quiénes fueron sus participantes y, sobre todo, 
    qué ideas de ella se podían retomar.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-historia_del_Consulado_y_del_Imperio.webp', 'La Revolución Francesa fue el suceso histórico más importante para 
  los estudiosos de la historia del siglo XIX. A partir de ella elaboran sus explicaciones historiadores desde  1828,  
  En la imagen vemos un grabado del libro de Adolphe Thiers, historiador francés, el cual muestra  a los soldados revolucionarios 
  como actitud heróica.', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons.');
  ?>
</div>

<p> Al buscar las causas y consecuencias de la revolución se pasó de la búsqueda de información a su interpretación. Esta labor se inició 
    de manera temprana, tal como lo vemos con los escritos de Edmond Burke, autor que desde 1790 escribe en contra de la revolución. 
    Buscar una explicación más allá de los datos, un sentido del proceso histórico es propio de la Ilustración; cabe recordar que 
    Voltaire escribió su libro Filosofía de la Historia en 1765. 
</p>

<p> Tanto el evento, como su explicación conformarán el desarrollo de la historiografía del siglo XIX. </p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
