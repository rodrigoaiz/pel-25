<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Nuevos sujetos: Perspectiva de Género: Joan Scott.</h2>
    <h3>HISTORIA DE GÉNERO</h3>
    <h4>Joan Scott </h4>
    <p>Historiadora estadounidense pionera en el campo de la historia de género.  Nacida en Brooklyn, New York; estudió historia en la Universidad de Brandelis y su doctorado lo realizó en la Universidad de Wisconsin. Tiene varios reconocimientos académicos, entre ellos, tres doctorados 
      <?php renderTooltip ('Honoris Causa', 'Esta expresión latina, cuyo significado por causa de honor, se refiere a un título universitario, especialmente un doctorado, que se otorga a personalidades destacadas por sus aportes en su campo de estudio; también se otorga como un reconocimiento a su trayectoria académica.','bottom');?> por las universidades de Harvard, Brown y Princeton; es autora de varios estudios, ensayos, artículos y escritos académicos, mediante los cuales analiza los siguientes problemas: el «visibilizar»las condiciones de la mujer a lo largo de la historia, distinguiendo, a través de una categoría para el análisis historiográfico, el género, los aspectos biológicos de la connotación social y cultural del papel de la mujer y como mediante la construcción de discursos historiográficos, se ha 
      <?php renderTooltip ('invisibilizado', 'Dentro de las ciencias sociales, la invisibilización como concepto se usa para identificar una serie de procesos culturales que tienden a ocultar a un determinado grupo social, sean, por ejemplo, las mujeres, miembros de los colectivos LGBT+, desde el poder, ocultando o minimizando su impacto social. ','bottom');?> su participación en  el desarrollo de la historia. </p>
    <p>De ahí que propone una metodología mediante la cual se revisen las fuentes y se analizan los discursos de la historia con el fin de revisar el papel de la mujer y cómo la construcción de la historia olvida u oculta a la mujer y su papel, destacando sólo las individualidades significativas dentro de un proceso político o social.</p>
    <p>Este ocultamiento de la mujer se da a partir del papel que socialmente se le atribuye y que se encuentra en costumbres, ideas sobre lo correcto e incorrecto y se expresa en el arte, la cultura, la ciencia y la educación. De ahí que su método implica:</p>
    <ul class="ul-disc">
      <li>Establecer categorías para conocer el papel que la mujer juega como sujeto histórico, siendo la más importante que desarrolla, la idea de género.</li>
      <li>Utilizar las herramientas del historiador, el análisis heurístico y hermenéutico de las fuentes, las cuales toman la perspectiva de género, lo cual implica analizar para visibilizar.</li>
      <li>Desarrolla una explicación en la cual la estructura social se muestran los elementos culturales y de orden social que impiden comprender y ubicar el papel de la mujer, sea, por ejemplo, la categoría del 
      <?php renderTooltip ('patriarcado', 'Dentro de los estudios de historia de género, así como de las teorías feministas, se define como «la manifestación e institucionalización del dominio masculino sobre las mujeres y niños/as de la familia y la ampliación de ese dominio sobre las mujeres en la sociedad en general», tal como lo define la historiadora norteamericana Gerda Lerner en su libro La creación del patriarcado, de 1986.','bottom');?> y cómo se proyecta en distintas sociedades.</li>
    </ul>

  <p>Su análisis busca comprender cómo los sistemas de poder influyen en la forma en que se han presentado, y se presentan, los eventos históricos, pues la historia no es simplemente la narración de lo que ha sucedido en el pasado, sino que está influenciada por las perspectivas y las interpretaciones de quienes la escriben pues éstas se hacen a partir desde relaciones de poder, de género, raza, clase y la sexualidad; todo ello influye en cómo se han narrado los eventos históricos.</p>
    <ul>
      <p>«En las décadas de los setenta y los ochenta, las teóricas del feminismo (entre las que me incluyo) se interesaron por el género como un medio para volver a reflexionar acerca de los factores que determinan las relaciones entre los sexos. En aquel momento había sido de gran importancia para nosotras separar la biología de la cultura, y justificar el cambio no como un aspecto de una dirección social radical sino como un aspecto de la historia. En aquellos días hicimos un importante trabajo teórico en torno al término género […] No se podían hacer conjeturas sobre el "significado comúnmente atribuido" al género. Así pues, este término nos invitaba a que lo analizaremos en vez de desecharlo. [Joan Scott, Género e Historia, p.14]</p>
      <p>«El género constituía un medio de investigación de las formas específicas que adquiría la organización social de la diferencia sexual; no las trataba como unas variantes del tema inmutable de la dominación patriarcal. Por el contrario, el género exigía una lectura atenta de las manifestaciones concretas de la organización social de la diferencia sexual, exigía que se prestara atención a los diferentes significados que podían tener las mismas palabras». [Joan Scott, Género e Historia, p 14-15]</p>
      <p>«las feministas se preguntaron cómo y en que condiciones se han definido los diferentes roles y funciones para cada sexo; cómo los auténticos significados de las categorías "hombre" y "mujer" variaron según las épocas y el lugar; cómo se crearon e impusieron las normas reguladoras de la conducta sexual; cómo las cuestiones de poder y de los derechos se imbricaron con las cuestiones de la masculinidad y la feminidad; cómo afectaron las estructuras simbólicas a las vidas y las prácticas de la gente común; cómo se forjaron las identidades sexuales desde el interior y contra las prescripciones sociales»</p>
      <p>«Para la historiadora feminista se trata de una atractiva perspectiva teórica que convierte los análisis críticos del pasado y del presente en una operación continua; se puede interpretar el mundo mientras se intenta cambiarlo. Esta perspectiva también insiste en la necesidad de examinar el género de forma concreta, en su contexto, y de considerarlo como un fenómeno histórico que se produce, reproduce y transforma en diferentes situaciones a lo largo del tiempo» (Joan Scott, Género e Historia p. 24-25)</p>
      <p>«Para la historiadora feminista se trata de una atractiva perspectiva teórica que convierte los análisis críticos del pasado y del presente en una operación continua; se puede interpretar el mundo mientras se intenta cambiarlo. Esta perspectiva también insiste en la necesidad de examinar el género de forma concreta, en su contexto, y de considerarlo como un fenómeno histórico que se produce, reproduce y transforma en diferentes situaciones a lo largo del tiempo.</p>
      <p>Sin embargo, para encontrar al género en la historia no basta con hacer una lectura típica, literal y temática de la disciplina; aquí se requiere otro tipo de exégesis. Además del posestructuralismo, el trabajo de los críticos literarios ha sido de gran ayuda para mí. Todos ellos señalan la importancia de la textualidad, de la forma en que se presentan y estructuran los argumentos, asi como de lo que se dice literalmente». (Joan Scott, Género e Historia, p. 26)</p>
    </ul>
  <p>Como vemos en los párrafos anteriores, nuestra autora considera que la historia de género debe centrarse en el análisis crítico de cómo se han construido las categorías de género y cómo han influido en la forma en que se han narrado los eventos históricos.
  <p>Veamos un último fragmento donde se expresa el papel de la historia como la historia de ellas, frente a la historia de ellos, como un esfuerzo por aportar una visión de género dentro de los estudios historiográficos.</p>
    <ul>
    <p>dar al mismo tiempo agenda femenina en el quehacer de la historia. Los hombres podían verse como un grupo más de actores históricos; y la disciplina debía tomar explícitamente en cuenta a las mujeres, tanto si sus experiencias fueron similares o diferentes a las de los hombres. * »</p>
    <p>«El término her-story (Ia "historia de ellas") hace un juego de palabras con el adjetivo posesivo femenino en ingles her, y el sustantivo story (relato o narración). La palabra her-story se opone a Ia history, o historia que, según esta lectura iconoclasta, estaría compuesta por el adjetivo posesivo masculino en inglés his, y el sustantivo historia».</p>
    <p>[El asterisco*, es una nota a pie de página del traductor en el texto] (Joan Scott, Género e Historia, p. 38)</p>
    </ul>
  <p>Es así, que, la autora busca la representación del género como una categoría que nos permita analizar y comprender cómo son las sociedades.</p>
  <p>La historia de género implica un cambio fundamental en la forma en que se entiende y se escribe la historia, y se centra en el análisis crítico de cómo se han construido las categorías de género y cómo han influido en la narración histórica.</p>
  <p>Al respecto, en nuestro país, la antropóloga Martha Lamas, quien tiene una brillante trayectoria académica y en favor de los derechos de la mujer, escribe: «A diferencia de las categorías clase social o etnia, que ha sido instrumentos anaalíticos desde hace mucho tiempo, la categoría de género es una herramienta de reciente creación y su uso no está generalizado» (Martha Lamas, género, la construcción cultural de la diferencia sexual, p. 9) </p> 
  <p>Esta corriente historiográfica nos ofrece, entonces no sólo un nuevo sujeto histórico, sino también una propuesta metodológica.</p>
  <div class="mx-auto max-w-md">
 <?php
  renderImage('th2-u3-joanscott.webp','Joan Scott', 'https://es.wikipedia.org/wiki/Archivo:Joan_scott1.jpg','Wikimedia Commons.');
  ?>
 </div>
 <div class="mx-auto max-w-md">
 <?php
  renderImage('th2-u3-martalamas.webp','Martha Lamas', 'https://es.wikipedia.org/wiki/Archivo:Marta_Lamas_%2837095111583%29_%28cropped%29.jpg','Wikimedia Commons.');
  ?>
 </div>
  <?php ob_start(); ?>
    <p>Para reafirmar lo visto en esta sección de esta lección 1, te pedimos que contestes el siguiente ejercicio con un repaso del tema de Perspectiva de Género.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a3', "Perspectiva de Género", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
