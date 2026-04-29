<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TarjetasImagen.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Revolución Mexicana y el arte</h2>

  <p>Entre 1910 y 1920, la sociedad y la cultura en México estuvieron profundamente marcadas por la <b>Revolución Mexicana</b>. Este conflicto no sólo transformó la estructura política del país, también tuvo un <b>gran impacto en la conciencia colectiva</b> de un pueblo y <b>proporcionó a intelectuales</b> el material de <b>reflexión, inspiración y actitud crítica</b> visualizando aspectos de una sociedad revolucionaria con sentimientos, emociones y personajes, no visibles en la historia oficial.</p>
  <p>Para conocer algunos elementos que el arte configuró en el periodo de lucha armada y en la etapa posrevolucionaria, revisa el siguiente vídeo interactivo:</p>

  <?php ob_start(); ?>
   <p>Pon atención a las ideas que te transmite el video. Al terminar, lee las siguientes preguntas y elige la respuesta que consideres correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u1act7', "La Revolución Mexicana y el Arte", $ActividadContent);
  ?>

  <p>De acuerdo con el historiador Miguel García Audelo, la Revolución proporcionó diversos <b>elementos que el arte configuró</b> a lo largo de varias décadas. En primer lugar, sirvió para <b>transmitir las ideas fundamentales</b> que dieron forma a este gran proyecto histórico en relación con el arte. En segundo lugar, se convirtió en el <b>principal repositorio de los valores</b> enarbolados durante la lucha armada, como las aspiraciones agraristas de Zapata. Finalmente, el arte revolucionario fue clave en la <b>construcción de la identidad nacional</b>, representada en figuras como las catrinas y las adelitas, así como en elementos icónicos como los sombreros anchos, los bailables, los murales y el cine, entre otros.</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-novela.webp');
      ?>
  </div>

  <p>Como pudiste ver en el vídeo, de la <b>novela de la Revolución Mexicana</b> destacan los nombres de Mariano Azuela con “<b>Los de Abajo</b>” y Martín Luis Guzmán con “<b>El Águila y la serpiente</b>”. Otras obras poco conocidas y comentadas de este período revolucionario, son del periodista reaccionario y contrarrevolucionario Alfonso López Ituarte: El Atila del sur (1913) y Satanás (1914).</p>

  <p>Para conocer algunos aspectos de tan importantes representantes de la novela de la Revolución Mexicana, revisa con detenimiento la siguiente información:</p>

  <?php
  $planesRevolucion = [
    [
      'titulo' => 'Mariano Azuela González',
      'etiqueta' => '(1872-1952)',
      'imagen' => 'hm2-u1-t4-abajo.jpg',
      'descripcion' => 'Fue un médico y escritor mexicano, reconocido como el primer novelista de la Revolución Mexicana.
      Durante la Revolución Mexicana, apoyó el movimiento revolucionario y trabajó como médico en las filas de Francisco Villa. Su experiencia en la guerra influyó profundamente en su obra literaria.
      En 1915, publicó "Los de abajo", su novela más famosa, que retrata la crudeza y el desengaño de la lucha revolucionaria, donde el personaje central es Demetrio Macias, como general de un grupo revolucionario en 1913. A dicho personaje se le van uniendo paulatinamente individuos con el fin de combatir en la revolución no necesariamente por el ideal revolucionario, sino más bien porque ignoraba el sentido de la Revolución.',
    ],
    [
      'titulo' => 'Martín Luis Guzmán Franco',
      'etiqueta' => ' (1887-1976)',
      'imagen' => 'hm2-u1-t4-serpiente.jpg',
      'descripcion' => 'Es considerado uno de los más grandes novelistas de la fase armada de la Revolución. Una de sus obras más importantes es "El Águila y la serpiente" narración de los andares de Guzmán, que a lo largo del libro nos da un panorama general de las principales facciones del movimiento revolucionario
      En cuanto a las obras más representativas de Martín Luis Guzmán encontramos las siguientes:',
      'puntos' => [
        'La querella de México (1915)',
        'A orillas del Hudson (1920)',
        'La sombra del Caudillo (1929)',
        'Mina el mozo, héroe de Navarra (1932)'
      ],
    ],
  ];
  ?>
  <?php renderTarjetasImagen($planesRevolucion); ?>
  <p>A continuación, escucha con detenimiento el primer capítulo de la novela Los de Abajo:</p>
  <div class="max-w-md mx-auto">
    <?php
    renderVideoIframe('8FkoGMen-V0', 'AUDIOLIBRO LOS DE ABAJO MARIANO AZUELAS PARTE 1 CAPÍTULO 1');
    ?>
  </div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
