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
  <h2>El muralismo e identidad</h2>

  <p>El muralismo en México fue un movimiento artístico iniciado a principios del siglo XX, donde artistas como <b>Diego Rivera, David Alfaro Siqueiros y José Clemente Orozco</b>, realizaron grandes obras murales. En un primer momento, en la década de 1920, los murales pintados por estos artistas fueron obras ordenadas por José Vasconcelos y terminadas al finalizar su gestión en la Secretaría de Educación Pública en 1924. Estas obras  reflejaban su propio marco ideológico y estético (Mandel, 2007).  Característico de este periodo es el mural “La creación” de Diego Rivera de 1922, y “Maternidad”, fresco de 1923 pintado por José Clemente Orozco, en la Escuela Nacional Preparatoria.  A partir de este momento,  los edificios públicos serían un espacio para llevar un mensaje que permitiera legitimar al gobierno posrevolucionario, alfabetizar a la población y coadyuvar en una unificación nacional.</p>

  <p>A continuación, te invito a revisar los murales mencionados:</p>

      <div class="mx-auto max-w-lg">
        <?php
          renderImage('hm2-u2-creacion.webp', 'La creación, 1922','https://www.sanildefonso.org.mx/mural_anfiteatro.php?iframe=true&width=810&height=100%25', 'san Ildefonso');
        ?>
      </div>

      <div class="mx-auto max-w-lg">
        <?php
          renderImage('hm2-u2-maternidad.webp', 'Maternidad, 1923-1924','https://www.sanildefonso.org.mx/mural_maternidad.php?iframe=true&width=810&height=100%25', 'san Ildefonso');
        ?>
      </div>

  <p>Un cambio en el muralismo fue cuando en los artistas empezaron a destacar aspectos del <b>pasado histórico</b> y con ello <b>la reconstrucción de una identidad</b>, cubriendo temas como el pasado indígena, la Conquista, la Colonia, la Independencia y la liberación de la nación, las reformas sociales, la dictadura porfirista, la explotación, la etapa revolucionaria, así como temas relacionados con la educación,  la ciencia, la lucha social obrera y campesina, convirtiéndose en una expresión cultural, política e ideológica, de tal manera que, a través de estas obras se favoreció la <b>construcción de una memoria colectiva</b>.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-muraldiego.webp', 'Mural deDiego Rivera','https://upload.wikimedia.org/wikipedia/commons/0/05/MURAL_DIEGO_RIVERA.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original&uselang=es', 'wikimedia');
    ?>
  </div>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-muraldiego2.webp', 'Mural de Diego Rivera','https://upload.wikimedia.org/wikipedia/commons/c/c3/Mural_Diego_Rivera.JPG', 'wikimedia');
    ?>
  </div>

  <p>En este contexto debemos destacar también a mexicanas, a quienes la historia las había invisibilizado debido a una serie de cuestiones de género. Al respecto podemos mencionar a la muralista <b>Rina Lazo</b>, quien fue asistente de Diego Rivera y  sometía su obra al ojo crítico del muralista. Importante fue también <b>Aurora Reyes</b> quien realizó el mural titulado “Atentado a los maestros rurales”, cuya temática hace referencia a los conflictos entre profesores y opositores a la reforma del artículo 3° Constitucional. Hay que destacar también las obras de <b>Frida Kahlo</b>, que encabezó a un grupo de artistas denominado los “Friditos”.</p>

  <p>Para conocer más de las obras de Frida Kahlo, te invitamos a revisar el siguiente vídeo:</p>

  <?php
    renderVideoIframe('pBu2ZmkH1sw', 'Frida Kahlo, más allá del sufrimiento');
  ?>

  <?php ob_start(); ?>
        <p>En este periodo, además de las artes visuales debemos destacar la literatura, la música y el cine, que jugaron un papel crucial en la reconfiguración identitaria del México posrevolucionario. Para conocer algunos aspectos de la temática te invitamos a revisar las siguientes tarjetas:</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a13', "Literatura, la música y el cine", $ActividadContent);
      ?>
      
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
