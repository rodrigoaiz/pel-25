<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tooltip.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico fuera de la Unión Soviética</h2>

  <p>Muchos de los trabajos realizados por los historiadores marxistas se desarrollaron fuera de la URSS y de su influencia debido a la imposición de líneas ideológicas que desde el Régimen de Stalin se extendieron hacia los académicos de otros países.</p>

  <p>La metodología del materialismo histórico se empleó en trabajos académicos, no vinculados a los partidos comunistas en diferentes países, tal es el caso del noruego Halvdan Koht. <i>Historia de las revueltas campesinas en Noruega</i>. Así como los trabajos del historiador holandés Jan Romen en <i>Las tierras bajas junto al mar, una historia general del pueblo holandés</i>.</p>

  <p>Los trabajos sobre historia económica se desarrollaron fuera de la URSS como el del historiador ruso Evgeny Kosminky quién estudió el campesinado inglés. Otro autor por destacar es el historiador polaco Witold Kula quien escribió <i>La teoría económica del sistema feudal</i>, en esta obra teoría hace una aplicación de la teoría económica de Marx, pero reconoce que es importante considerar que Marx hace observaciones adecuadas para el siglo XIX, por lo que tiene errores en su aplicación para el siglo XX y en participar para Polonia (Aurel y Burke, <i>De entre siglos</i>…, p. 277).</p>

  <p>En España es Josep Fontana quien hace uso del método materialista como medio de interpretación histórica, así como elemento para la lucha en contra del totalitarismo franquista.</p>

  <p>De forma individual se desarrollan escritos históricos en diferentes países, entre los que es importante destacar el trabajo de los escritores británicos, quienes dejaron un trabajo que impactó por mayor tiempo.</p>

  <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a8', "Repaso del tema Una visión sobre el materialismo histórico", $ActividadContent);
  ?>


  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>