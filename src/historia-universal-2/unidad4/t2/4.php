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
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

  <h2>Proyectos de gobierno alternativos al neoliberalismo</h2>

    <p>
       Hacia fines del siglo XX, varios gobiernos latinoamericanos han manifestado, en el discurso y en la práctica, un cuestionamiento hacia “el automatismo de mercado 
       y la subordinación acrítica a la lógica de la acumulación global” y han intentado “con suerte y características diversas, restablecer el poder estatal para definir 
       algunos rumbos centrales de su política económica y social” (Thwaites 2010:20). Figuras emblemáticas de esta oposición han sido Hugo Chávez y Evo Morales. 
       Más recientemente, Andrés Manuel López Obrador en México, con un proyecto que pretende recuperar algunas líneas del Estado de Bienestar aunque conviviendo con 
       algunos rasgos del neoliberalismo, como lo es la disciplina presupuestal.
    </p>

      <b>
        Puede señalarse como primer hito de cambio la asunción, en 1999, de Hugo Chávez como presidente de Venezuela, lo que abre un ciclo de gobiernos post- neoliberales 
        en la región: Brasil (2003), Argentina (2003), Uruguay (2004), Bolivia (2006), Ecuador (2007), Nicaragua (2007), Paraguay (2008) y El Salvador (2009). Varios de 
        estos gobiernos son la expresión de la emergencia de movimientos y partidos que se propusieron explícitamente disputar el poder del Estado. 
        <a>(Thwaites, 2010)</a>
      </b>

      <p>
        No obstante, a pesar de las medidas que a nivel interior cada uno de estos gobiernos ha tratado de poner en práctica, han enfrentado diversas dificultades.
      </p>

      <p>
        Observa las siguientes imágenes. En todos los casos, se trata de gobernantes latinoamericanos que han ejercido el poder en sus respectivos países en uno o varios periodos presidenciales.
        </p>

      <h3>El surgimiento del BRICS</h3>

      <p>
        En este contexto es que han surgido los BRICS, el cual es un acrónimo que se refiere a un grupo de cinco importantes países en desarrollo que han formado una 
        asociación para promover la cooperación y la influencia conjunta en asuntos globales. Los miembros de BRICS son Brasil, Rusia, India, China y Sudáfrica. 
        El término "BRICS" fue acuñado por el economista Jim O'Neill en un informe de 2001. Inicialmente, el acrónimo "BRIC" representaba solo a Brasil, Rusia, India 
        y China. Estos cuatro países se identificaron como economías emergentes con un rápido crecimiento y un potencial significativo en la escena global.
      </p>

      <p>
        El grupo BRIC se formalizó en 2006 cuando los líderes de estos cuatro países se reunieron en una cumbre del G-8 en San Petersburgo, Rusia. A partir de entonces, 
        comenzaron a sostener reuniones anuales y a discutir temas de interés común en política, economía y desarrollo. En 2010, Sudáfrica se unió al grupo, y el 
        acrónimo cambió a "BRICS". La inclusión de Sudáfrica amplió la representación geográfica y económica del grupo en el continente africano
      </p>

      <p>
        El BRICS busca fomentar la cooperación en cuestiones económicas, políticas y de seguridad, y aboga por una mayor reforma de las instituciones financieras 
        internacionales, como el Fondo Monetario Internacional (FMI) y el Banco Mundial, para reflejar mejor la realidad económica y política actual. También ha 
        trabajado en temas como la gobernanza global, el comercio y la inversión. A lo largo de los años, el BRICS ha ganado influencia en la política global y en 
        la economía mundial, y sus cumbres anuales son foros importantes para el diálogo y la cooperación entre estos países. Aunque no es una alianza militar formal, 
        el BRICS sigue siendo una plataforma para la colaboración en cuestiones de seguridad y defensa en un sentido más amplio.
      </p>

      <p>
        Si quieres ampliar más tu conocimiento de los BRICS y su importancia en el mundo actual te recomendamos ver el siguiente video de la agencia 
        alemana de noticias Deutsche Welle
      </p>

      <?php renderVideoIframe('_Jnb6k7Tjw7k', 'BRICS: el contrapeso emergente en un mundo multipolar'); ?>

      <?php ob_start(); ?>
  <p>Realiza el siguiente reto para consolidar algunos conceptos importantes</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t2a2', "Otro mundo es posible", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Ahora, realiza la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t2a3', "Globalifobia", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>