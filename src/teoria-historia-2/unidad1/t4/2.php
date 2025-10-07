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

<h2> Los autores: Karl Marx y Friedrich Engels  </h2>

<h3> Karl  Marx </h3>

<p>
 Nace en el seno de una familia judía alemana acomodada en Tréveris, en 1818. Realiza sus estudios originalmente en derecho, pero 
 después opta por la filosofía; pasa a la universidad de Berlín, donde entra en contacto con la filosofía de Hegel; participa en un 
 grupo de pensadores radicales, asociados al liberalismo, socialismo y unidos por la filosofía hegeliana, conocido como los jóvenes 
 hegelianos. Posteriormente su pensamiento se radicaliza y se orienta a «poner a Hegel sobre sus pies», tal como lo menciona en su 
 filosofía del derecho, y lo que significa es que la concepción del mundo de Marx parte de la materia como fundamento de toda realidad, 
 a la inversa del pensamiento hegeliano que considera que previo a la materia existe una idea que se enajena en materia.<br>Dentro de 
 sus obras destacan: <i>Manuscritos económico filosóficos de 1844, La Ideología alemana, Manifiesto del Partido Comunista, los Grundrisse, 
 elementos fundamentales de la economía política; la contribución a la crítica de la economía política</i>, dentro de la cual nos interesa 
 especialmente su prólogo; <i>el 18 brumario, la lucha de clases en Francia y el Capital</i>, por sólo citar algunos en los que se ocupa de 
 la cuestión de la historia. Muere en 1883.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Karl_Marx.webp', 'Karl Marx es más conocido como político, pero también fue un historiador ',
  'https://commons.wikimedia.org/wiki/Category:Karl_Marx','Wikimedia Commons.');?>
</div>

<h3> Friedrich Engels </h3>

<p>
  Sociólogo, historiador y filósofo de origen prusiano. Su familia tiene una fábrica textil en Manchester, Inglaterra, y ahí conoce la 
  situación de la clase obrera inglesa y escribe al respecto. Junto con Marx escribe <i>La Ideología Alemana, el Manifiesto del Partido 
  Comunista, la sagrada familia</i>, es también editor de la obra principal de Marx, <i>El Capital</i>. Participa en la organización 
  del movimiento obrero y preside la Primera y Segunda Internacional.<br>Su legado de estos autores es la formación del pensamiento 
  socialista moderno, el cual se separa del socialismo utópico de la primera mitad del siglo XIX y antagoniza con el anarquismo de la 
  segunda mitad de dicho siglo. Asimismo, su influencia es mayor en autores como Vladimir Ilich Lenin, León Trotsky, Josif Stalin, 
  Walter Benjamin, Theodor Adorno; Eric Hobsbawn, E.P. Thompson, Perry Anderson, entre otros, que se ocupan de escribir o teorizar 
  sobre la historia, siguiendo esta metodología. Cabe señalar que éstos autores se ubican en el siglo XX.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Friedrich_Engels.webp', 'Friedrich Engels, junto con Karl Marx, desarrollan las bases de la interpretación marxista de la historia.',
  'https://es.wikipedia.org/wiki/Archivo:Friedrich_Engels_%281891%29_%28colored%29.jpg','Wikimedia Commons.');?>
</div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
