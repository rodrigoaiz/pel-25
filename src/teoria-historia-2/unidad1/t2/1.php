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

<h4> Unidad 1. Interpretaciones de la historia en el siglo XIX </h4>

<h2> Romanticismo y liberalismo </h2>

<h3> La búsqueda de la identidad nacional </h3>

<p>
  Las primeras formas de interpretar la historia que revisaremos al iniciar este curso son el Liberalismo y el Romanticismo. 
  Dentro de la historiografía surgen casi en paralelo y su influencia perdurará durante todo el siglo XIX, donde el problema de 
  las nacionalidades se vincule con las independencias políticas de las naciones tanto hispanoamericanas como de las contenidas en los 
  imperios turco otomano y, posteriormente, hacia la segunda mitad del siglo, de imperio austro húngaro.
</p>

<p>
  Las ideas de independencia se vinculan con las teorías políticas emanadas de la revolución francesa, en particular del concepto de 
  libertad, el cual se retomará por los autores románticos en el ámbito cultural y de ahí pasará al político, el cual se vinculará con 
  la formación de un sentimiento nacionalista, el cual se expresa en la lengua alemana como <b> Volksgeist </b>, es decir el espíritu 
  del pueblo.
</p>

<p>
  Este sentimiento nacionalista se asocia directamente con la formación de las naciones modernas, las cuales buscan en su historia y 
  tradiciones los orígenes de su identidad nacional. En este sentido es en el romanticismo como expresión literaria y artística donde 
  se plasma por primera vez la idea de buscar en la historia, entendida como el pasado, los orígenes de una nación y, expresan un 
  sentimiento nacionalista; aparecen obras como Ivanhoe de Walter Scott, o El jorobado de Nuestra Señora de París de Víctor Hugo. 
  En ellas se busca un momento previo al que viven, el siglo XIX en su primer tercio, marcado por guerras, por una Europa dividida y 
  por el surgimiento del movimiento obrero, una Europa que se divide entre una política conservadora, expresada en la
  <?php renderTooltip('Santa Alianza','Alianza militar entre Rusia, Austria y Prusia, fundada en 1815. Su propósito era conservar el 
  poder monárquico, interviniendo en los países donde se presentará un brote revolucionario.'); ?>,o liberal. En este contexto surge 
  la visión de la historia nacionalista.
</p>

<p>
  El romanticismo es una reacción frente al racionalismo extremo de la Ilustración, el cual condujo a la formación de las ideas 
  revolucionarias francesas. En esta reacción, se propone una desconfianza frente a la razón, es decir frente a la intelectualización y 
  racionalización rígida, se propone que existe otro método para conocer y comprender el mundo que nos rodea: la expresión de los 
  sentimientos.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-El_sueño_de_la_razón_produce_monstruos.webp', 'La desconfianza frente a la racionalidad extrema se presenta aún 
  antes del romanticismo, en la obra del pintor Francisco de Goya «el sueño de la razón produce monstruos» expresa gráficamente esta idea.
Esta obra pertenece a su serie de grabados  los Caprichos. (1797-1798)', 'https://commons.wikimedia.org/wiki/File:Francisco_Jos%C3%A9_de_Goya_y_Lucientes_-_The_sleep_of_reason_produces_monsters_(No._43),_from_Los_Caprichos_-_Google_Art_Project.jpg', 
'Wikimedia Commons.');
?>
</div>

<p>
  Al buscar los escritores y artistas románticos la esencia de su patria, voltean los ojos al pasado, en principio medieval, donde buscan 
  las virtudes y orígenes de los sentimientos nacionales. Durante el siglo XIX, la educación abarcaba elementos de la cultura clásica, 
  como el aprendizaje del latín, y del griego, así como el conocimiento de la historia antigua; de hecho, los jóvenes tanto de Inglaterra 
  como de Alemania efectuaban el llamado Grand Tour, un viaje principalmente hacia Italia en el cual entraban en contacto con la cultura 
  clásica, antes de iniciar sus estudios universitarios. En este contexto, no sólo leen, los textos clásicos, sino que también, durante 
  el viaje desarrollan vivencias que se expresarán en obras literarias; más que crónicas de viajes son experiencias personales mediadas 
  por la emoción.
</p>

<p>
  La búsqueda de la identidad nacional tiene también sus bases en los sucesos políticos de la época: la expansión del imperio napoleónico 
  y la imposición del modelo derivado de la Revolución Francesa lleva a cuestionarse sobre su identidad como naciones; lo mismo ocurrirá 
  con el reparto del mundo que se plantea en el Congreso de Viena. En ambos casos aparece la identidad nacional como la primera forma del 
  nacionalismo incipiente.
</p>

<p>
  El romanticismo no desconoce la importancia de la razón, pero afirma también el papel de los sentimientos en los actos humanos y el 
  sentimiento que destaca es el amor, y dentro de las variedades de éste, el principal es el amor a la patria. Jules Michelet, el autor 
  al cual leeremos, al hablar del amor, nos muestra que en este sentimiento hay una veta de orgullo nacional:
</p>

<p class="citation"><b>
    «sin embargo debe elegir a una francesa el hombre que necesita un alma que responda a la suya con destellos de razón tanto como de 
    amor […] Poco debe importar casarse en Francia con una fea, porque sólo lo es con frecuencia cuando no tiene amor» p. 66-67. 
    [Michelet, Jules. (1861). El amor. Barcelona: Librería del Plus Ultra.
</b>
</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
