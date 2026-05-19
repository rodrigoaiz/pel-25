<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tooltip.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico fuera de la Unión Soviética:  La historiografía británica</h2>

  <p>Sí bien en Inglaterra ya había influencia de los postulados marxistas en economía, fue hasta la segunda guerra mundial que el materialismo histórico tuvo una gran cantidad de seguidores en los círculos académicos. Los estudios de esta corriente trabajaron el análisis de la historia económica y social, así como los fenómenos revolucionarios y temas que buscaban explicar el cambio en las sociedades históricas, especialmente el origen y desarrollo del sistema capitalista. así se presentan los trabajos de Perry Anderson, Maurice Dobb, Eric Hobsbawm, Edward Palmer Thompson como la transición del feudalismo al capitalismo y el desarrollo de la revolución industrial (Aurel y Burke, <i>De entre siglos</i>…, p. 278).</p>

  <p>Historiadores miembros del Partido Comunista británico conformaron una tendencia historiográfica de impacto mundial, la que se expresó en los trabajos de Maurice Dobb, Cristopher Hill, Víctor Kiernan, Rodney Hilton, Eric Hobsbawm, Edward P. Thompson, Perry Anderson. Así como en escritores que compaginan con sus propuestas teóricas se encuentran Vere Gordon Childe y Raymond Williams. Los escritores marxistas expusieron sus propuestas historiográficas, así como los temas a debate en dos revistas la primera, <i>Past and Present</i>. (1952), impulsada por historiadores vinculados al Partido Comunista de la Gran Bretaña, bajo la dirección de Eric Hobsbawm y E. P. Thomson. En este medio presentaban trabajos de historia social entre ellos las condiciones de los grupos no estudiados y marginados ingleses, esto es las clases pobres a la que llamaron <b>La historia desde abajo</b> (Aurel y Burke, <i>De entre siglos </i>…, p. 278). Este concepto es el resultado de examinar el surgimiento de la clase obrera en inglaterra y demostrar que su formación fue producto de las condiciones no sólo económicas, sino sociales, políticas e ideológicas.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-past.webp','Historiadores británicos de tendencia marxista muestran que la metodología del materialismo histórico se puede aplicar a distintos temas, sin dogmatismos, mostrando la solidez de esta corriente. En la imagen está la portada del primer número de la revista Past and Present, la cual fue su espacio de expresión y desarrollo.', 'https://acervo.sead.ufes.br/materiais/historia/teoria-e-metodologia-da-historia/img/cap5/past-and-present-v-1-1952.jpg', 'acervo.sead.ufes');
  ?>
  </div>

  <p>El segundo órgano informativo fue la revista <i>New Left Review</i>, también fundada en Gran Bretaña en 1960 y se convirtió en uno de los órganos de vanguardia de la izquierda socialista y en un elemento de propaganda de las demandas de los trabajadores ingleses. La revista fue el medio para presentar las condiciones de los trabajadores, en ella se propició la discusión y el debate entre los seguidores del marxismo con los miembros de la escuela de Frankfurt en los <i>New Left Clubs</i>.</p>

  <p>En los años setenta se integraron a la propuesta inglesa un gran número de movimientos estudiantiles, feministas, en pro de los derechos civiles. Atrajeron el interés de los países que se liberaron en los procesos de descolonización con movimientos antiimperialistas, quienes valoran la historia de las excolonias británicas, presentando una alternativa para dar voz a las clases subalternas, estudiar los movimientos campesinos y obreros. (Pastor, Marxismo, p. 35-36)</p>

  <p>Bajo la influencia de la propuesta británica Raphael Samuel, impulsará el movimiento History Workshop, que sustenta la propuesta de una <b>historia “desde abajo”</b> que se desarrolla en un análisis de los trabajadores de minas o fábricas.</p>

  <p>La historiografía británica combate al liberalismo, sobre la base de las ideas de Marx: analiza la noción de lucha de clases, de manera que presentan una historia en la que trabajan el conflicto entre grupos sociales a lo largo de la historia y refuerzan la idea de revolución burguesa.</p>

  <p>La corriente británica crítica a la propuesta dogmática de hacer la historia impulsada por la URSS, rompiendo con la visión dominante en que la explicación histórica estaba fundamentada en la economía reconsiderando la influencia de los elementos superestructurales en el desarrollo de las sociedades históricas.</p>

  <p>En 1956 se llevó a una ruptura dentro del Partido Comunista Británicomotivada por la intervención soviética en Hungría. Algunos de los historiadores ingleses decidieron abandonar su militancia partidaria, pero no dejaron sus bases metodológicas. </p>

  <p>Junto a esta nueva perspectiva se consideró adecuado realizar la difusión de los textos de George Lukács y Antonio Gramsci. Como ejemplos están los trabajos de Christopher Hill sobre el contexto intelectual de la revolución inglesa del siglo XVII, así como la función de las masas en las revoluciones de George Rude (Aurel y Burke, <i>De entre siglos</i>…, p. 278-9).</p>

  <p>A inicios de los años setenta la revista Past and Present paso a subtitularse A Journal of Historical Studies; con ello los historiadores de la escuela británica marcan el acento a una historia en la que se tratan temas políticos, sobre religión, la tradición, el estado, así como las ideologías, temas considerados fuera de la ortodoxia marxista. Se buscó presentar una historia total, en el que no hay un elemento determinante o hegemónico en la explicación histórica. De manera que la economía, la población, la geografía, la política, las costumbres, la cultura son partes de los elementos de la explicación de los fenómenos históricos. Se reflexionó sobre el papel de las masas y del individuo en la historia (Aurel y Burke, <i>De entre siglos</i>…, p. 280-281).</p>

  <p>A inicios de los años ochenta del siglo XX se cuestiona con mayor fuerza los principios dogmáticos del marxismo, aspecto que se profundizó con el debilitamiento político de la Unión Soviética y su influencia en Europa, elemento que se acentuó con la política de la URSS en Europa del Este especialmente en Polonia, así como en Asía con la invasión a Afganistán.</p>

  <p>Destaquemos a dos de los escritores marxistas del siglo XX: Eric Hobsbawm y E.H. Carr</p>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>