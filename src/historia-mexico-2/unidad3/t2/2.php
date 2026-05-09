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

  <h2>El autoritarismo y represión de los gobiernos mexicanos</h2>

  <p>Como pudiste ver, las <b>relaciones de poder</b> existentes entre un presidencialismo fortalecido con la base jurídica constitucional y un partido hegemónico y dominante, se aunaron al desarrollo de una política corporativista, integrando a los sectores de la sociedad para <b>legitimar el gobierno</b> y al mismo tiempo <b>impulsar el desarrollo económico del país</b>. Lo anterior fue una prioridad presidencial que dejó relegado el apoyo de las masas, apoyándose también en la represión como una forma de control, obstaculizando la consolidación de una verdadera democracia.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-linea4082.png', 'gobiernos de 1940 a 1982');
    ?>
  </div>

    <?php ob_start(); ?>
    <p>Para conocer más sobre el presidencialismo autoritario y la política corporativista desarrollada entre 1940 a 1970, te invito a revisar las siguientes tarjetas:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a8', "GOBIERNOS 1940-1970", $ActividadContent);
    ?>

  <p>Así vemos que durante los sexenios que van de 1940 a 1970, hubo diversas <b>manifestaciones contra los gobiernos mexicanos</b>, quienes privilegiaron el desarrollo industrial, beneficiando al sector empresarial con el impulso a diversas ramas de la economía, y donde el  Estado tuvo un papel relevante en la organización económica. En este contexto, los gobiernos no toleraron indisciplinas y desórdenes en la sociedad y se apoyaron de la violencia en contra de quienes consideraban enemigos del gobierno.</p>

  <p>Posteriormente, durante los mandatos de los presidentes Luis Echeverría (1970-1976) y José López Portillo (1976-1982), se intentó el control de los grupos inconformes por medio de una política de apertura democrática, con la creación de instituciones educativas tales como el <b>Colegio de Ciencias y Humanidades</b> en 1971 y la <b>Universidad Autónoma Metropolitana</b> en 1974. También se crearon mecanismos de apoyo a la clase trabajadora con la creación del Instituto del Fondo Nacional de la Vivienda para los Trabajadores, <b>Infonavit</b> en 1972, así como reformas electorales e  intentos por resolver la crisis económica.</p>

  <p>Para conocer más sobre el tema, revisa con detenimiento la siguiente imagen:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-comparacion.jpg', 'Echeverría vs López Portillo');
    ?>
  </div>

  <p>La combinación de ese gran poder presidencial que otorgaba la <b>Constitución</b>, llevó de manera inevitable a que el presidente mexicano desarrollara la propensión a ejercer un poder francamente inconstitucional cuando así lo considerara apropiado. Esto fue posible, entre otras cosas, por el control absoluto del sistema electoral, las condiciones de inequidad de las campañas electorales (hasta 1994, el partido de Estado contó con el apoyo total de la autoridad electoral y con los recursos públicos necesarios para sacar adelante a sus candidatos) y, finalmente, la organización de fraudes electorales en gran escala, como ocurrió en las elecciones presidenciales de 1929, 1940, 1952 y 1988 (Meyer, 2000).</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-soldados.webp', 'Soldados mexicanos en las calles. 30 de julio de 1968.','https://commons.wikimedia.org/wiki/File:L%27ex%C3%A8rcit_al_carrer_30_de_juliol.jpg','wikimedia commons');
    ?>
  </div>

  <p>De igual manera debemos considerar la violencia y acciones ilegales como por ejemplo la eliminación de opositores, la eliminación de los movimientos sociales y de opositores como el asesinato del líder agrario Rubén Jaramillo y las masacres estudiantiles de 1968 y 1971. Esta violencia se ejerció a lo largo de varios años, como fue la guerra sucia contra las guerrillas rurales del estado de Guerrero, que abordaremos en la próxima lección.</p>

  <?php ob_start(); ?>
    <p>Para evaluar tus conocimientos de la lección te invito a contestar la siguiente actividad:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3a9', "Cuestionario", $ActividadContent);
    ?>


  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
