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
  <h2>La literatura en México </h2>

  <p>Como puedes ver la sociedad mexicana vivió una serie de transformaciones en términos sociales, económicos, culturales y tecnológicos, los cuales serían plasmados en las diferentes formas de expresión cultural. Así, por ejemplo, en estos años la producción literaria en México experimentó cambios dinámicos y estuvo marcada por el diálogo entre lo tradicional y la innovación. Asimismo existieron factores sociales que influyeron en su desarrollo.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-ojerosa.webp', 'Ojerosa y pintada');
    ?>
  </div>

  <p>Así, durante <b>los cincuenta, la vitalidad del cuento, la novela y la poesía</b> se proyectaron con claridad hacia el futuro. Por una parte, aparecen algunas de las obras narrativas de mayor influencia: como la novela <i>Los días terrenales</i> (1949), de <b>José Revueltas</b>, que traerá como consecuencia la polémica literaria más importante de esos años; <i>Pedro Páramo</i> (1955), de <b>Juan Rulfo</b> (1918- 1986), con la que el realismo de las novelas de la Revolución muere quizá de forma definitiva; <i>La región más transparente</i> (1958), de <b>Carlos Fuentes</b> (1928), que va más allá de un ambicioso recorrido por todas las capas sociales, y <i>Ojerosa y pintada</i> (1959), de <b>Agustín Yáñez</b> novela que fue publicada casi a inicios de los sesenta, donde  Yáñez describe muy poco la urbe en sus dimensiones físicas.  El protagonista es un conductor de taxi, por lo tanto, la ciudad aparece a través de los diversos personajes que van abordando y descendiendo del auto, otorgando una percepción de la ciudad (Rosado, 2006).</p>

  <p>En la segunda mitad de los años cincuenta destacarán también Confabulario (1952), de Juan José Arreola (1918-2000), que no ignora el mundo real a pesar de su tono fantástico; El llano en llamas (1953), de Juan Rulfo, y Los días enmascarados (1954), de Carlos Fuentes.</p>

  <p>En la década de los <b>sesenta</b> se consolida de forma definitiva la "<b>literatura urbana</b>", con sus atmósferas y ambientes cosmopolitas, con la vitalidad y frustración de su juventud, con el empleo de las mal llamadas "malas palabras" como presencias inherentes de la visión urbana del mundo, pero también de la burla, la ironía y la anti solemnidad; fue la década en que aparecen de modo recurrente, explícito y sin tapujos el sexo y el erotismo, la homosexualidad, el feminismo, los "albures", las drogas y la cada vez mayor transgresión de los valores morales y sociales en boga (Rosado, 2006).</p>

    <?php ob_start(); ?>
    <p>Revisa a continuación el vídeo y contesta las preguntas integradas para identificar algunas características de la sociedad mexicana en el periodo que estamos trabajando:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a14', "Literatura 1940-1980", $ActividadContent);
    ?>

  <p>La literatura de estos años también fue influida por el contexto político y de represión policiaca contra los estudiantes del 68, pero también con la prisión o exilio de estudiantes, intelectuales y maestros. Por ejemplo, José Revueltas fue acusado
  injustamente como uno de los autores intelectuales del movimiento, y en consecuencia fue encarcelado, experiencia que se vio reflejada en El apando (1970). También destacan crónicas, novelas, ensayos, dramas y poemas sobre el movimiento y la masacre del 2 de octubre como La noche de Tlatelolco (1971), de <b>Elena Poniatowska</b> que abunda en testimonios, entrevistas y artículos (Rosado, 2006).</p>

  <p>Respecto a la poesía debemos destacar a Xavier Villaurrutia y José Goroztiza. A partir de los años 50,  algunos poetas abordaron temas sociales y políticos, destacando Efraín Huerta y Octavio Paz, quien publicó <a href="https://www.suneo.mx/literatura/subidas/Octavio%20Paz%20El%20Laberinto%20de%20la%20Soledad.pdf">El laberinto de la soledad (1950).</a></p>

  <p>Destacan también las historietas, entre ellas; La Familia Burrón. Por esas fechas apareció Chanoc, que después tuvo una gran importancia, al igual que Kalimán y  más tarde, El Payo. </p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-burrón.webp', 'La familia Burrón, de Gabriel Vargas');
    ?>
  </div>
  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
