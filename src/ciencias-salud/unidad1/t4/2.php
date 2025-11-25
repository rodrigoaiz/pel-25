<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Distingue los paradigmas unicausal, multicausal e histórico-social, que explican el proceso salud - enfermedad</h2>

  <h3>Paradigma unicausal.</h3>

  <p>Este modelo fue propuesto por Robert Koch y Louis Pasteur, en la segunda mitad del siglo XIX y explica que el proceso salud-enfermedad tiene una sola causa específica, que es la responsable de una enfermedad o afección. Algunas características de este paradigma son: </p>

  <ul>
    <li><b>Especificidad de la causa.</b> Se refiere a identificar la causa única de la enfermedad, que puede ser un agente patógeno específico o un factor de riesgo, por ejemplo la presencia del <b><i>Plasmodium vivax</i></b> siempre causará los mismos efectos y síntomas, por lo tanto provocará la misma enfermedad.</li>
    <li><b>Causas necesarias y suficientes.</b> Es necesaria e imprescindible la presencia del patógeno que es la causa para que se produzca la enfermedad, y es suficiente que esté presente el patógeno para que se presente la enfermedad. Por ejemplo, la presencia de <b><i>Plasmodium vivax</i></b> es necesaria y suficiente para que se presente la malaria.</li>
    <li><b>Eliminación de la causa. </b>Como parte de este proceso se tratará de la eliminación o control de la causa única, para prevenir o tratar la enfermedad. Por ejemplo la erradicación del <b><i>Plasmodium vivax</i></b>, para eliminar la malaria.</li>
  </ul>

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t4-causa.webp'); ?>
  </div>

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t4-vivax.webp', 'Plasmodium vivax, es un protozoario que se transmite por la picadura de la hembra del mosquito Anopheles sp, algunos de los síntomas que causa son: fiebre, escalofríos. sudoración, malestar general, entre otros.', 'https://commons.wikimedia.org/wiki/File:Plasmodium_vivax_01.png', 'recuperada el 9 de noviembre de 2023'); ?>
  </div>


  <p>Aunque este enfoque ha sido ampliamente superado por un enfoque más complejo en la medicina moderna, es importante entender sus características y limitaciones.</p>

  <p>La salud humana está determinada por una serie de condicionantes que abarcan varios aspectos, como son: los biológicos, psicológicos, sociales y culturales, los cuales interactúan entre sí e influyen no solo en la salud del individuo, sino en toda la población.</p>

  <h3>Paradigma multicausal.</h3>

  <p>El paradigma multicausal en el proceso salud-enfermedad, se basa en la idea de que existen múltiples factores que inciden en la aparición de un problema de salud. Por lo tanto son el resultado de varios factores que interactúan entre sí y determinan el estado de salud de una persona. Estos factores pueden pertenecer al medio ambiente, al huésped y al agente. Algunas características de este paradigma son: </p>

  <ul>
    <li><b>Multifactorialidad.</b> La salud y la enfermedad son el resultado de la acción de múltiples factores; estos pueden ser biológicos, psicológicos, sociales, culturales, ambientales, etc. y pueden actuar de manera compleja.</li>
    <li><b>Interacción de factores.</b> Las múltiples causas que provocan una enfermedad, están vinculadas e interactúan entre sí. Por ejemplo, las enfermedades cardiovasculares como la enfermedad coronaria y la hipertensión son influenciadas por múltiples factores como la genética, los hábitos alimenticios, la actividad física, el estrés, el tabaquismo, etc. para aumentar o disminuir el riesgo de estas enfermedades en una persona.</li>
    <li><b>Cadena de causalidad.</b> Se refiere a cómo múltiples factores interactúan y se relacionan entre sí, para influir en la salud y la enfermedad de un individuo. Por ejemplo la obesidad, algunas de las causas de esta pueden ser los factores genéticos ya que algunas personas pueden tener una predisposición a ganar peso. También influyen, la alimentación, el estrés, la salud mental, el entorno social y económico, los cambios hormonales, entre otros. Sin embargo, es importante recordar que no todos los individuos con factores de riesgo desarrollarán la enfermedad, ya que la causalidad es probabilística en lugar de determinista.</li>
    <li><b>Modificabilidad de la cadena.</b> Se refiere a  que es posible intervenir en la cadena de causalidad, para modificar o prevenir el resultado de salud no deseado; esto se logra, a través de la modificación de factores de riesgo, la promoción de comportamientos saludables o la detección temprana y el tratamiento de la enfermedad.</li>
  </ul>

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t4-multi.webp'); ?>
  </div>

  <p>El paradigma multicausal, nos permite reconocer la complejidad y la interacción de múltiples factores en la determinación de la salud y la enfermedad. El enfoque se centra en comprender y modificar esta cadena de eventos para prevenir enfermedades y promover la salud.</p>

  <h3>Paradigma histórico-social</h3>

  <p>Se caracteriza por considerar a la salud y la enfermedad como el resultado de factores históricos, sociales, económicos y culturales. Este enfoque indica cómo los contextos históricos y sociales influyen en la salud de las personas y las poblaciones, alguna de las características de este paradigma son las siguientes:</p>

  <ul>
    <li><b>Determinantes sociales de la salud:</b> Se refiere a que los factores sociales económicos y culturales desempeñan un papel fundamental en la salud de las personas. Incluyen el nivel de ingresos, la educación, el empleo, la vivienda, el acceso a servicios de atención médica, la cultura  y las condiciones de vida.</li>

    <li><b>Enfoque en las desigualdades de salud:</b> Se centra en identificar y abordar las disparidades en la salud entre diferentes grupos de población, relacionadas con las diferencias en el estatus socioeconómico y el acceso a recursos.</li>

    <li><b>Contexto histórico:</b> Es fundamental para comprender el proceso de la salud y la enfermedad, ya que analiza cómo los eventos históricos, las políticas gubernamentales y los cambios socioeconómicos a lo largo del tiempo han influido en la salud de las poblaciones.</li>

    <li><b>Enfoque en la determinación social de la salud:</b> La salud y la enfermedad son determinadas por una compleja interacción de factores sociales y económicos.</li>

    <li><b>Enfoque en la prevención y la promoción de la salud:</b> En este punto son necesarias las políticas públicas adecuadas, que permitan intervenir en los determinantes sociales de la salud, para prevenir enfermedades y promover la salud.</li>

    <li><b>Enfoque en la justicia social:</b> El objetivo es alcanzar una justicia social y equidad en la salud, que busca que todas las personas tengan igualdad de oportunidades para alcanzar una salud óptima.</li>

    <li><b>Interdisciplinariedad:</b> Requiere la colaboración de la medicina, la sociología, la economía, la antropología y la salud pública, para comprender y abordar los determinantes sociales de la salud.</li>

    <li><b>Participación comunitaria:</b> La comunidad participa en la identificación de problemas de salud, la formulación de políticas y la implementación de intervenciones de salud.</li>
  </ul>

  <div class="mx-auto max-w-lg">
    <?php renderImage('u1-t4-paradigma.webp'); ?>
  </div>


  <p>Es importante destacar que estos factores interactúan entre sí de formas complejas para influir en la salud social de un individuo. Por lo tanto, mejorar la salud social requiere abordar estos factores a nivel individual y colectivo.</p>

  <p>La medicina moderna, ha adoptado un enfoque más holístico y factorial para comprender el proceso de salud-enfermedad, lo que permite una comprensión más completa y precisa de las condiciones de salud, que es útil para la prevención, el diagnóstico y  el tratamiento de enfermedades. Generalmente es utilizado un modelo biopsicosocial para comprender las condiciones de salud, que considera los aspectos biológicos, psicológicos y sociales que influyen en la salud y la enfermedad.</p>

  <?php ob_start(); ?>
  <p>Con esta actividad reconocerás qué tanto has aprendido sobre los paradigmas unicausal, multicausal e histórico-social.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a2', "Juega Jeopardy", $ActividadContent);
  ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
