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
  <h2>Maximato y política exterior 1928-1934</h2>

  <p>Un episodio más, relacionado con la política exterior fue en los gobiernos del Maximato,  rechazando el intervencionismo extranjero con relación al reconocimiento o cuestionamiento de la legitimidad de los gobiernos mexicanos. Al respecto durante el gobierno de Pascual Ortiz Rubio, el 27 de septiembre de 1930 se publicó la <b>Doctrina Estrada</b> (creada por Genaro Estrada, Secretario de Relaciones Exteriores), la cual <b>negaba a las naciones extranjeras el derecho a otorgar o retirar su reconocimiento a las demás naciones</b>, siendo ésta una de las aportaciones más valiosas de México al Derecho Internacional y la libre determinación.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-estrada.webp', 'Doctrina Estrada');
    ?>
  </div>

  <p>Esta doctrina refleja una propuesta de respeto a la independencia y autonomía de los Estados con los que México se relaciona, es decir, respeto a su idiosincrasia y a la forma en que se organizan internamente (Pereznieto Castro, La Doctrina Estrada, una nota para su relectura, 2018).</p>

  <p>Durante este periodo también, México ingresa a la <b>Sociedad de Naciones</b> después de una etapa de negación, por la tensión que existía con Estados Unidos y que después de 1927 con el apoyo del  embajador Dwight Morrow, México recibió invitaciones  en algunos eventos internacionales. Finalmente en 1931 con el apoyo de Alemania, Inglaterra, Francia, Italia, España y Japón, México fue aceptado en el organismo internacional.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-animapa.gif', 'Animación de los Estados miembros de la LN de Mapas y Lucy','https://commons.wikimedia.org/wiki/File:LN_member_states_animation.gif', 'wikimedia');
    ?>
  </div>

  <p>Respecto a las relaciones con la Unión Soviética, si bien durante el gobierno de Calles declaró que sus relaciones se basaban en el derecho internacional de no intervención, al mismo tiempo advirtió la no tolerancia a la propagación de ideas comunistas. Esta situación tensa culminó con la suspensión de relaciones con ese país el 22 de julio de 1922.</p>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
