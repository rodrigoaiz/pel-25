<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>LA GUERRA FRÍA.</h3>

  <p>La comprensión del mundo contemporáneo pasa por la guerra fría la cual se ubica desde al final de la segunda guerra mundial, en 1947, y se prolonga hasta 1991. Este periodo se caracteriza por un enfrentamiento indirecto de las dos potencias militares e ideológicas emanadas de la segunda guerra, las cuales desarrollaron arsenales nucleares: la Unión de Repúblicas Socialistas Soviéticas y los Estados Unidos, lo cual lleva a la formación de dos bloques, tanto geopolíticos como económicos y sociales que dividen el mundo. Para consolidar este sistema se crearon una serie de alianzas, pensemos en las militares, por ejemplo, tenemos a la Organización del Tratado del Atlántico Norte -la OTAN-, por el bloque Occidental o capitalista, autonombrado «mundo libre» y el Pacto de Varsovia, por el bloque soviético. De igual forma aparecen instituciones internacionales que se integran a ambos bloques: la Unión Europea, por el primer bloque y la COMECON, Consejo de Ayuda Mutua, por el segundo. Baste con estos ejemplos para visualizar esta división. Ningún país quedó fuera de esta división; aún los países que eran colonias y que se liberaron de las metrópolis hacia la segunda mitad del siglo XX quedaron en medio de esta pugna pues de una u otra forma resultaron alineados, por pertenencia o afinidad a alguno de ellos.</p>
  <p>Eventos, como la carrera aeroespacial se  enmarcan también como parte de la guerra fría pues los logros en este campo se consideraban un éxito del sistema político: el Sputnik, primer satélite artificial se presentó como un éxito del modelo soviético y la llegada del hombre a la luna, también se presentó como un éxito, en este caso, de los Estados Unidos.</p>
  <p>Además de conflictos políticos y militares donde ambas potencias se enfrentaron a partir de terceros países, como en el caso de la Guerra de Vietnam, el conflicto árabe israelí, la crisis de los misiles en Cuba, por sólo citar los más significativos, en el periodo se desarrolla una intensa vida cultural, la cual se refleja, por ejemplo, en la generación Beat, la aparición de una subcultura con base el desarrollo de un estilo musical, el Rock and Roll; la visibilización de la situación de las mujeres y de los jóvenes; la aparición de una serie de grupos militares o paramilitares, conocidos, en general como guerrilla, así como el avance tecnológico que involucraba la electrónica, la miniaturización y la aparición de la computación. Todos estos eventos, se encuentran en el entorno cultural, que, la difusión de los trabajos académicos, a través de libros y revistas tenía un impacto no sólo local, sino a nivel mundial, mismo que se aumentó a partir de la difusión de las investigaciones históricas académicas por medio de la televisión, el radio y, posteriormente, el Internet.</p>
  <p>La rapidez con la cual las noticias llegaban a todos los rincones del mundo también se expresó en obras de ficción, como películas o programas de televisión con temática de época. La difusión de la historia, un campo al cual no se había presentado la debida atención, se desarrolla en el periodo estudiado de manera proporcional. </p>
  <p>La guerra fría no se reflejó sólo en los elementos político y económicos, sino que influyó también en la percepción del mundo la cual se acentuó a partir del uso masivo de los medios de comunicación hacia la década de los cincuenta, especialmente la televisión y cine: la guerra fría llegó con la idea de películas y series sobre espionaje, ciencia ficción donde se mostraba la lucha ideológica entre los bloques y, en nuestro momento, a partir del espacio como Internet, se activa una forma parecida a la guerra fría, pero esta vez a partir de la manipulación de la información mediante las llamadas Fake News.</p>
   <div class="mx-auto max-w-md">
   <?php
  renderImage('th2-u3-muroberlin.webp','Muro de Berlín, El símbolo más famoso del Telón de Acero.', 'https://upload.wikimedia.org/wikipedia/commons/5/5d/Berlinermauer.jpg','Wikimedia Commons.');
  ?>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
