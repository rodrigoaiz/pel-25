<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'TarjetasImagen.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El proceso de la Revolución Mexicana</h2>

  <p>En la lección anterior, revisamos brevemente los problemas que pusieron en crisis al régimen porfirista e inferiste las causas que dieron origen a la Revolución Mexicana destacando lo siguiente:</p>

  
<div class="mx-auto max-w-md">
  <?php
  renderImage('hm2-u1-causas.webp');
  ?>
</div>

  

  <table class="table">
    <thead>
      <tr>
        <th class="text-center">CAUSAS SOCIOPOLÍTICAS</th>
        <th class="text-center">CAUSAS SOCIOECONÓMICAS</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <ul>
              <li>Prolongada permanencia de Díaz en el poder.</li>
              <li>Rivalidad entre algunos integrantes de la élite porfirista.</li>
              <li>Incumplimiento de Díaz a la promesa de no volver a postularse para la presidencia.</li>
              <li>Fraude cometido en las elecciones presidenciales de 1910.</li>
              <li>Falta de oportunidades de ascenso político para los miembros de las clases medias.</li>
              <li>Virtual anulación de la libertad y la democracia.</li>
              <li>Influencia de los principios magonistas, difundidos en el partido liberal mexicano.</li>
              <li>Persecución y represión de movimientos políticos de oposición</li>
            </ul>
          </td>
          <td>
            <ul>
              <li>Inconformidad de la clase media empresarial con la oligarquía financiera representada por los científicos.</li>
              <li>Efectos económicos de la tienda de raya.</li>
              <li>Inconformidad de la clase media y obrera industrial por el abuso de poder.</li>
              <li>Descontento del sector obrero mexicano, campesinos e indígenas.</li>
              <li>Condiciones infrahumanas de trabajo en haciendas, minas y fábricas.</li>
              <li>Marcado desequilibrio social generado por el crecimiento hacia afuera o capitalismo dependiente.</li>

            </ul>
          </td>
        </tr>
      
    </tbody>
  </table>

  <p>Una vez que identificaste las causas de la Revolución Mexicana debes saber que durante esta etapa estuvieron en pugna diferentes facciones y caudillos, cada uno con sus ideas de lucha y planteamientos diversos, lo que provoca que no exista una revolución unificada, sino varias posturas en la lucha. Al respecto diversos autores plantean el origen de la revolución mexicana, que bien pudo ser democrática burguesa, popular, antimperialista, campesina y si esta fue derrotada, victoriosa, interrumpida o permanente.</p>
  <p>Para que adquieras una postura al respecto, necesitas conocer en primer lugar, los planteamientos de los Planes de la Revolución Mexicana, para ello revisa las siguientes tarjetas:</p>
  <?php
  $planesRevolucion = [
    [
      'titulo' => 'Plan de San Luis',
      'etiqueta' => '5 de octubre de 1910',
      'subtitulo' => 'Francisco I. Madero',
      'imagen' => 'hm2-u1-t2-madero.jpg',
      'pie' => 'Francisco I. Madero, imagen de autor desconocido',
      'link' => 'https://upload.wikimedia.org/wikipedia/commons/3/36/Presidente_Francisco_I._Madero.jpg',
      'fuente' => 'Wikimedia Commons.',
      'descripcion' => 'Manifiesto en el que Madero llamó al levantamiento en armas contra la dictadura de Porfirio Díaz.',
      'puntos' => [
        'Desconocimiento del gobierno de Porfirio Díaz.',
        'Se declara Ley Suprema de la República el principio de no reelección.',
        'Madero asume el carácter de Presidente Provisional de los Estados Unidos Mexicanos.',
        'Se estableció el 20 de noviembre de 1910 como fecha para el levantamiento revolucionario.',
      ],
    ],
    [
      'titulo' => 'Plan de Ayala',
      'etiqueta' => '28 de noviembre de 1911',
      'subtitulo' => 'Emiliano Zapata',
      'imagen' => 'hm2-u1-t2-zapata.jpg',
      'pie' => 'Emiliano Zapata, imagen en Wikimedia Commons',
      'link' => '#',
      'fuente' => '',
      'descripcion' => 'Manifiesto zapatista centrado en el incumplimiento de las promesas revolucionarias y en la restitución de tierras.',
      'puntos' => [
        'Desconocimiento del gobierno de Francisco I. Madero.',
        'Reconocimiento de Pascual Orozco como Jefe de la Revolución Libertadora.',
        'Restitución de terrenos, montes y aguas usurpados por hacendados, científicos o caciques.',
        'Nacionalización de bienes de quienes se opusieran al plan para indemnizaciones de guerra y pensiones.',
      ],
    ],
    [
      'titulo' => 'Pacto de la Empacadora',
      'etiqueta' => '1912',
      'subtitulo' => 'Pascual Orozco',
      'imagen' => 'hm2-u1-t2-pascual.jpg',
      'pie' => 'Pascual Orozco, imagen de dominio público en Wikimedia Commons',
      'link' => '#',
      'fuente' => '',
      'descripcion' => 'Documento orozquista que desconoció al gobierno maderista y planteó medidas políticas, laborales y agrarias.',
      'puntos' => [
        'Anulación de las elecciones de Presidente y Vicepresidente, desconociendo a Francisco I. Madero y José María Pino Suárez.',
        'Reconocimiento del Legislativo y Judicial como únicos poderes legalmente constituidos.',
        'Derogación del servicio militar obligatorio y organización de la guardia nacional en los estados.',
        'Supresión de tiendas de raya, pago de jornales en efectivo y reducción de la jornada laboral a 10 horas como máximo.',
        'Reivindicación de terrenos arrebatados y repartición de tierras baldías y nacionalizadas.',
      ],
    ],
    [
      'titulo' => 'Plan de Guadalupe',
      'etiqueta' => '26 de marzo de 1913',
      'subtitulo' => 'Venustiano Carranza',
      'imagen' => 'hm2-u1-t2-carranza.jpg',
      'pie' => 'Venustiano Carranza y la Constitución de 1917',
      'link' => '#',
      'fuente' => '',
      'descripcion' => 'Plan constitucionalista que desconoció a Victoriano Huerta y organizó la lucha contra su gobierno.',
      'puntos' => [
        'Desconocimiento de Victoriano Huerta como Presidente de la República.',
        'Desconocimiento de los Poderes Legislativo y Judicial de la Federación.',
        'Nombramiento de Venustiano Carranza como Primer Jefe del Ejército Constitucionalista.',
        'Carranza asumiría provisionalmente el Poder Ejecutivo y convocaría a elecciones.',
      ],
    ],
    [
      'titulo' => 'Ley Agraria Villista',
      'etiqueta' => 'Mayo de 1915',
      'subtitulo' => 'Francisco Villa',
      'imagen' => 'hm2-u1-t2-villa.jpg',
      'pie' => 'Francisco Villa, de autor desconocido en Wikimedia Commons',
      'link' => '#',
      'fuente' => '',
      'descripcion' => 'Promulgada por el Gobierno Convencionalista de la División del Norte para atender la concentración de tierras y las condiciones de los jornaleros.',
      'puntos' => [
        'Declaración de utilidad pública para expropiar terrenos destinados a la fundación de poblados.',
        'Los gobiernos estatales expedirían leyes reglamentarias de expropiación y cubrirían indemnizaciones.',
        'Los estados dictarían las leyes para fraccionamientos y adjudicaciones conforme a las necesidades locales.',
      ],
    ],
  ];
  ?>
  <?php renderTarjetasImagen($planesRevolucion); ?>

  <p>En el proceso de la Revolución Mexicana se identifican diversos intereses e ideales de lucha. Al inicio, se observa un conflicto entre facciones burguesas lideradas por Porfirio Díaz y Francisco I. Madero quien en el Plan de San Luis, expresa sus aspiraciones políticas al establecer no solo el principio de no reelección, sino también, su intención de asumir la presidencia provisional y convocar a elecciones. Sin embargo, no cumple plenamente estos planteamientos, ya que deja la presidencia provisional en manos del porfirista Francisco León de la Barra. Esto genera descontento dentro de sus propias filas, pues Madero se niega a realizar un cambio profundo en la administración, el gobierno y el ejército, impidiendo así recompensar a los hombres que apoyaron la revolución por sus méritos revolucionarios.</p>
  
  <p class="text-xl font-bold text-verdizul text-center">Dada esta situación, resultó inevitable que se suscitaron numerosos conflictos. Para conocerlos revisa con atención la <a href="https://prezi.com/view/tKRy7DGAA6c44W0abwQF/" target="_blank">línea de tiempo</a></p>

  <p>Te pudiste dar cuenta que en la Revolución Mexicana estuvieron presentes diversos intereses y que, si en algún momento se unificó el movimiento contra los dictadores, también hubo diferencias entre los principales caudillos. De ahí que diversos historiadores trabajan sobre  líneas de análisis de esta etapa histórica y den a conocer sus estudios sobre una revolución campesina, una revolución popular, una revolución burguesa, una revolución democrática entre otras. Si bien no es posible conocer todas las líneas de análisis, si te puedes acercar al conocimiento de algunos materiales que muestran diversos puntos de vista.</p>

  <p>A continuación, revisa con atención los materiales sugeridos y realiza la actividad Reflexionando la Revolución:</p>
  <?php ob_start(); ?>
  <p>Adolfo Gilly, en su obra La revolución interrumpida, plantea que la Revolución Mexicana (1910-1920) no fue un proceso homogéneo, sino que tuvo diferentes fases y características según las clases sociales involucradas. En este sentido menciona que bien puede ser considerada: democrática, burguesa, campesina, popular o antiimperialista. Al respecto debes realizar un análisis y reflexión individual sobre alguna de las posturas sobre el acontecimiento mencionado.</p>
  <p>Para ello realiza lo siguiente:</p>
  <ol class="ol-list">
    <li>Considera la información que has leído y trabajado para asumir una postura sobre el tipo de revolución mexicana con el objeto de realizar el análisis y reflexión.</li>
    <li>Revisa uno de los materiales sugeridos –con el que más coincidas– y realiza un análisis de la postura elegida, contestando el cuadro de información.</li>
    <li>Al finalizar realiza un escrito reflexivo de una cuartilla de extensión, sobre la postura que elegiste analizar.</li>
    <li>Considera para el análisis la siguiente rúbrica para la evaluación para elaborar la actividad.</li>
    <li>Al finalizar la actividad envía el archivo considerando las siguientes indicaciones:</li>
    <ol>
      <li>Envía la tarea en un archivo PDF, en la fecha indicada.</li>
      <li>El archivo debe tener tu nombre completo empezando por el apellido y el número de tarea: ejemplo LópezAndradeSofía_Tarea1</li>
      <li>Para enviar el archivo da clic en TAREA, posteriormente en Añadir envío, sube tu tarea en el recuadro que se indica y al finalizar da clic en Guardar Cambios.</li>
    </ol>

  </ol>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a3', "Reflexionando la Revolución", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
