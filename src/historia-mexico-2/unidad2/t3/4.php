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
  <h2>Expropiación petrolera y defensa de la soberanía.</h2>

  <p>En 1935 operaban en México más de 20 <b>compañías petroleras</b> y con excepción de Petromex, todas <b>eran de capital extranjero</b>. Las más importantes eran la Compañía Mexicana de Petróleo El Águila, la Huasteca Petroleum Company,"' la Sinclair, la Standard Oil de California, la Sábalo Transportation Company, el grupo Imperio y la Mexican Gulf (nota).</p>

  <p>En estas compañías se mantenía una <b>actitud hostil hacia los obreros</b>. Las condiciones laborales iban en detrimento de los obreros petroleros; por tal motivo los trabajadores fundaron en 1936, <b> el Sindicato de Trabajadores Petroleros de la República Mexicana (STPRM)</b>, exigiendo a las compañías petroleras un contrato colectivo y <b>aumento salarial</b>. Como las negociaciones no prosperaron, se declaró la huelga en todas las empresas petroleras en 1937.</p>

  <p>En este contexto el Presidente Cárdenas decidió expropiar el petróleo el 18 de marzo de 1938, dando lugar a la creación de <b>PEMEX</b>. Sin embargo, ¿cuál sería la presión estadounidense contra el gobierno mexicano ante estos eventos? ¿Cuáles fueron los acuerdos y soluciones?</p>

    <div class="mx-auto max-w-lg">
      <?php
          renderImage('hm2-u2-creapemex.webp', 'creación de PEMEX','https://www.eleconomista.com.mx/opinion/Memorias-para-una-conmemoracion-octogenaria-La-expropiacion-petrolera-20220317-0134.html', 'eleconomista');
      ?>
  </div>

  <?php ob_start(); ?>
        <p>Para profundizar sobre el tema, a continuación revisa el siguiente vídeo y contesta las preguntas.</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividadH5P('u2a11', "Expropiación petrolera, la confrontación y la indemnización", $ActividadContent);
      ?>

      <p>La <b>no intervención</b> fue la política que caracterizó al gobierno cardenista, así como el actuar de sus delegados ante diversos escenarios internacionales. Sin embargo, como pudiste leer en la actividad que realizaste, su actuar fue distinto en la Guerra Civil Española, condenando también a las potencias de Francia e Inglaterra ante su neutralidad, misma que favoreció a los países fascistas y al franquismo.</p>

      <p>Durante el régimen Cardenista se pusieron en marcha los principales planteamientos del <b>Plan Sexenal</b>, con un presidencialismo fortalecido con instituciones, atendiendo los principios más populares del movimiento revolucionario que buscó equilibrar la desigualdad con su papel de árbitro y guía de la sociedad, impulsando también la intervención del estado en la economía y defendiendo la nacionalización de recursos como vía necesaria para impulsar el desarrollo del país. Sin embargo, sus ideales no estuvieron al margen de las presiones internacionales, que amenazaron al país con una intervención militar, además de las presiones económicas y políticas que estuvieron presentes desde el gobierno de Álvaro Obregón. Con firmeza, Cárdenas defendió la soberanía nacional</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
