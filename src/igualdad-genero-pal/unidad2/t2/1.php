<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identificación de las concepciones y prácticas sociales dañinas asociadas al amor romántico para cuestionar y proponer alternativas</h2>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('iga8-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 8!</h3>
  <p>Desde el marco del pensamiento crítico feminista, el problema del amor romántico es identificado como un tema relacionado con la violencia hacia las mujeres en las relaciones de pareja. Estas relaciones o vínculos como el noviazgo, el enamoramiento y las primeras experiencias amorosas, inician por lo general, en la pubertad y adolescencia. Mujeres y hombres son socializados de manera diferenciada desde la infancia, se les ha construido una sensibilidad donde abundan los mandatos y estereotipos de género. ¿Qué entienden las mujeres adolescentes por enamoramiento y amor?, ¿qué opinan del tema los hombres adolescentes?, ¿existe o no una equivalencia en las metas y fines de este tipo de vínculos?</p>
  <p>Los mitos asociados al amor romántico pueden generar expectativas muy altas, incluso imposibles, generando idealizaciones poco realistas sobre las personas. Aunado a esto, los medios de comunicación y empresas expertas en el manejo de emociones pueden incidir en la frustración y violencia en las relaciones de carácter sexoafectivo, al reforzar roles y estereotipos de género en el cine, la música y otros dispositivos.</p>
  <p><strong>Palabras clave:</strong> mandatos de género, mandatos de la masculinidad, mandatos de la feminidad, socialización en la masculinidad, socialización en la feminidad, relaciones sexoafectivas, enamoramiento, amor, amor romántico. </p>
  <p class="font-bold text-xl text-fuchsia-900">Propósitos</p>
  <p>Identificar la violencia de género en el caso de las concepciones y prácticas sociales dañinas asociadas al amor romántico. Cuestionar, problematizar y proponer alternativas a relaciones violentas.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>Reconocer diferentes concepciones acerca del enamoramiento y amor. Así como los tipos, formas y marcas de la violencia en el noviazgo. Analizar el problema del amor romántico.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>Proponer alternativas para cuestionar las formas de violencia en el noviazgo basadas en relaciones tóxicas y de amor romántico.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>Promover un cambio de actitud y proponer otras formas de vínculos amorosos.</p>
  <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>