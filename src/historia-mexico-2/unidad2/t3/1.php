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
  <h2>México y la política exterior 1920-1928</h2>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-linea2.jpg', 'Mexico y la política exterior 1920-1928');
    ?>
  </div>

  <p>En las lecciones anteriores, vimos que la etapa posrevolucionaria fue un escenario interno complicado, donde hubo la necesidad de iniciar un proceso de pacificación del país tras las fases armadas de la Revolución; además, iniciar un proceso de reconstrucción de la economía y modernización del país en un contexto complejo de relaciones capitalistas.</p>

  <p>En este escenario, al  asumir la presidencia <b>Álvaro Obregón</b> en diciembre de 1920, no había obtenido el reconocimiento de Estados Unidos y las relaciones entre ambos países eran tensas debido a las exigencias de estadounidenses que pretendían la derogación de artículos constitucionales, los cuales lesionaban sus intereses económicos. Este aspecto incidió en la  política exterior de Obregón, quien  tuvo que afrontar: <b>la amenaza externa de la intervención</b>, el asunto pendiente de las reclamaciones por los agravios cometidos durante la revolución, <b>negociar la deuda externa y defender el Artículo 27 constitucional</b> ante los intereses imperialistas de las potencias, en especial de los norteamericanos que veían afectado su control sobre tierras y pozos petroleros, y buscar el reconocimiento internacional de su gobierno.</p>

  <p>A continuación, revisa el siguiente cuadro donde encontrarás datos relevantes de la política exterior de Álvaro Obregón y Plutarco Elías Calles:</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-comparacion.jpg', 'Comparación de la política exterior de Obregón y Calles');
    ?>
  </div>

  <p>En este escenario de política exterior, el país requería de financiamiento para la reconstrucción de su economía, la cual estaba comprometida con el pago de la deuda externa. Por tal motivo, Calles comisionó a su Secretario de Hacienda, el Ingeniero Pani para que renegociará la deuda externa con el Comité Internacional de Banqueros, lo que hizo de manera exitosa, ya que logró la cancelación del acuerdo De la Huerta-Lamont, sustituido con la firma del <b>acuerdo Pani-Lamont</b> firmado en Nueva York en octubre de 1925. La deuda externa que se reconocía era de 435 millones de dólares y sus pagos iniciaron en 1926.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
