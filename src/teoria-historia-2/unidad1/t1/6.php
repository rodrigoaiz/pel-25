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
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>El desarrollo de la Historia académica</h2>

<p> En todo este contexto se desarrollan nuevas formas de ver la Historia. De hecho, la historia como carrera profesional consistente en 
    formar historiadores académicos, se inicia en Francia hacia 1824 y uno de los primeros temas en estudiarse es explicar qué fue la 
    Revolución Francesa de 1789, sus alcances y logros, así como sus consecuencias políticas para su presente, escribiendo sobre ella 
    por todo el siglo XIX, en especial en su primera mitad. Algunos autores y sus obras en este periodo son Adolphe Thiers, Historia 
    de la Revolución Francesa, publicada en 1827; François-Auguste Mignet, Historia de la Revolución Francesa, 1824; Jules Michelet, 
    Historia de la Revolución Francesa, 1847-1853; Alexis de Tocqueville, El antiguo Régimen y la Revolución (1856), Karl Marx escribe 
    acerca de ella en La Ideología Alemana (1846) y en distintos textos, destacándose El 18 Brumario (1852). Todos ellos buscarán la 
    información recurriendo a archivos de forma sistemática para crear sus obras y, al mismo tiempo buscan una interpretación de los 
    hechos ocurridos, es decir consideran que la Historia tiene un sentido, sea el concepto de libertad, el papel del pueblo, o la lucha 
    de clases, lo que hace de la historia una disciplina que no sólo acumule información, sino que también la interprete.
</p>

<p>
    La visión de la historia como interpretación la desarrollaron de manera más específica los filósofos idealistas alemanes, a partir 
    de las reflexiones de Immanuel Kant. Sus discípulos, directos o indirectos, como Fichte, Herder, Shelling o Hegel, proponen una 
    visión de la Historia inteligible, es decir, que se pueda entender y buscan dar sentido a los actos sociales humanos, expresados 
    en las fuentes y que se presentan, en muchos casos inconexos, dispersos y sin sentido.
</p>

<p>
    Sus ideas impactarán sobre la forma académica de hacer historia, principalmente en los países de cultura y lengua alemana.
</p>

<p>    
    La búsqueda de sentido se expresa a través de los sentimientos de identidad nacional, como es el caso en
    <?php renderTooltip('Confederación Germánica','Es una confederación formada por 91 estados de cultura y lengua alemana que va de 1815 
    a 1867 y será uno de los antecedentes del Imperio Alemán fundado en 1871'); ?>,
    con la búsqueda de una identidad nacional, que se expresa, en autores como Wilhem y Jacob Grimm, los hermanos Grimm, quienes buscan 
    en las narraciones populares y la lengua el sentido de lo nacional; asimismo se expresan en la música de Richard Wagner y su 
    exaltación de un pasado mítico germano.
</p>

<p>
    Desde la historia académica encontramos que el desarrollo de la investigación histórica se orienta hacia la comprensión del pasado 
    como un elemento para conocer el surgimiento de la nación alemana. Así encontramos a Leopold von Ranke, en sus obras Historia de los 
    Papas y, especialmente, la Historia de los pueblos latinos y germánicos de 1494 a 1535, donde se muestra el papel de la búsqueda de 
    sentido en el pasado para comprender el presente.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-imprenta_XVI.webp', 'El desarrollo de la imprenta a partir del siglo XV permitió que se imprimieran historias, 
  crónicas y biografías, lo cual permitió la difusión de fuentes para la producción de historias con base documental. En la imagen vemos 
  una imprenta de inicios del siglo XVI, lo cual nos muestra el desarrollo de los técnicos, el autor que revisa el manuscrito y lectores, 
  los cuales componen el ciclo de desarrollo del libro.','https://es.wikipedia.org/wiki/Imprenta#/media/Archivo:Buchdruck-15-jahrhundert_1.jpg', 
  'Wikimedia Commons.'); ?>
</div>

<p>
    El papel de la ciencia, del método y la comprobación del saber se manifiesta con mayor rigor en la segunda mitad del siglo XIX.  
    Autores como Charles Darwin, Gregorio Mendel, en biología y teoría de la evolución; Louis Pasteur, en medicina; James Joules, 
    Pierre Curie y su esposa Madame Curie en física, sólo por citar unos casos, abonan en el aspecto ideológico a buscar la objetividad, 
    donde es indispensable probar con evidencia una afirmación. Esta premisa pasó a la historia y será a través de los historiadores 
    positivistas quienes sistematizan y promoverán el trabajo sistemático de consulta de archivos y fuentes, logrando ejemplos como la 
    obra de Fustel de Coulanges, La ciudad antigua, Charles Seignobos y Charles Langlois, Introducción a los estudios históricos. En 
    nuestro país tenemos representantes de esta corriente, como fue Justo Sierra con su Historia del pueblo mexicano.
</p>

<p>
    Con la visión cientificista, entramos al siglo XX, y después de la primera guerra mundial, cambiarán las premisas y formas de escribir 
    y entender la Historia.
</p>

<p>
    Este rápido recorrido que te presentamos te permitirá ubicar con mayor precisión las corrientes historiográficas y los autores que 
    verás dentro de esta primera unidad. Lee con atención las siguientes lecciones, anota tanto tus dudas como tus comentarios y sigue 
    con atención las actividades.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Codex_Mendoza_folio_1v.webp', 'El desarrollo de la historia académica forma a profesionales de la historia con título 
  universitario. Esto permitió dotarlos de herramientas teóricas y prácticas como la paleografía, que se emplea para leer textos antiguos.
En la imagen vemos la primera foja del Códice Mendocino, que nos habla de los tributos que recibía el pueblo mexica.
','https://upload.wikimedia.org/wikipedia/commons/d/dd/Codex_Mendoza_folio_1v.jpg', 
  'Wikimedia Commons.'); ?>
</div>

<h4>
    A continuación realizaremos un repaso de los acontecimientos y conceptos que influyeron en las diferentes propuestas para la 
    comprensión de la historia durante el siglo XIX.
</h4>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a2', "Ejercicio de repaso del contexto histórico", $ActividadContent);
  ?>

<h4> Recuerda que la lectura es fundamental para esta materia.  </h4>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>