<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Los aliados de la violencia feminicida</h2>

  <div class="md:grid grid-cols-2 gap-3 items-center">

  <p>El texto que leerán a continuación explora cómo ciertas acciones, o más bien, omisiones, por parte de quienes deberían protegernos, así como la forma en que algunos medios de comunicación abordan los feminicidios, pueden convertirse en aliados inesperados de esta violencia. Es crucial que, como jóvenes informados y conscientes, analicen críticamente estas dinámicas para entender mejor cómo podemos construir un futuro donde la seguridad y la justicia para todas las mujeres sean una realidad. Este ensayo les invita a reflexionar sobre la responsabilidad colectiva que tenemos para erradicar la violencia de género en todas sus formas.</p>
    <div class="max-2xl mx-auto">
    <?php
    renderImage('u2t3-iga9-img06.webp');
    ?>
    </div>
  </div>

  <p>En plenaria:</p>

  <ol class="ol-number">
    <li>Lean atentamente el apartado: “Los aliados de la violencia feminicida: funcionarios públicos incompetentes y prensa amarillista” (págs. 32-35) en <a href="<?php echo PATH_DOCS . 'u2t9-Lectura_NarrarElCuerpoDeLasVictimasDeFeminicidio_Act.9.7.pdf'; ?>" target="_blank"><em>Narrar el cuerpo de las víctimas de feminicidio: el crimen de Francisco Robledo, sus públicos y contrapúblicos</em></a>.</li>
    <li>Una vez leído, contesten las siguientes preguntas:
      <ul>
        <li>Explica brevemente un obstáculo que enfrentan quienes denuncian por violencia de género.</li>
        <li>¿Por qué filtrar las fotos de Ingrid atentó contra su dignidad?</li>
      </ul>
    </li>
  </ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
