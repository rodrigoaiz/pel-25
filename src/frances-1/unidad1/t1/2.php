<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Se saluer et prendre congé</h2>
  <h3>Saludar y despedirse</h3>
  <p>En esta lección, aprenderás <span class="bg-cyan-500/30 text-cyan-600 p-1 font-bold">a usar a saludar y a despedirte</span> en contextos formales e informales.</p>
  <p>Antes de comenzar debes de saber que dentro del mundo francófono hay que tener siempre en cuenta la manera en la que vamos a dirigirnos a las personas, es decir, si les hablamos de "usted" o de "tú". Estas convenciones son importantes dentro de la cultura francófona y no las podemos pasar por alto.</p>
  <p>Así, vamos a hablar de "usted" (que en un contexto formal) a las personas que no conozcamos, a las personas mayores que nosotros y a las personas que tengan un grado jerárquico mayor que el nuestro (por ejemplo a nuestros profesores). Y vamos a hablar de "tú" a los niños, a nuestros familiares, a nuestros amigos cercanos, a nuestra pareja y a las personas que nos lo permitan después de haberles preguntado si los podemos "tutear" o que nos lo hayan pedido expresamente hacerlo.</p>
  <p>Entonces, siempre vamos a tener una manera "formal" de hablar y una manera "informal" de hacerlo. También existen expresiones que son adecuadas para cualquier tipo de situación; a estas formas les vamos a llamar "estándar" y se pueden usar tanto cuando hablas de "usted" como cuando hablas de "tú".</p>
  <p>Ahora, lo primero que vas a aprender es a saludar a las personas. Esta acción es de suma importancia para las personas de habla francesa. Debes de tener en cuenta que, siempre y en cualquier ocasión, lo primero que debemos hacer es saludar. Para los francófonos es tan importante abrir así cualquier conversación que, si no saludas antes de cualquier otra cosa, la persona no te va a responder.</p>
  <p>Obviamente, los saludos y despedidas deben de adecuarse a la situación comunicativa, es decir, al hecho de que hables de "usted" o de "tú" con tu interlocutor.</p>
</section>
<div class="flex justify-center gap-6">
  <div class="w-1/3 md:2/3 bg-cyan-500/30 text-cyan-800 p-6 shadow-xl">
    <p class="font-bold text-xl mb-2">Saludos</p>
    <p>Para saludar, tenemos dos maneras: la formal y/o estándar, y la manera informal.</p>
    <p class="font-bold mt-3">Manera formal y/o estándar:</p>
    <p>Para saludar en francés, al igual que en español, debes tener en cuenta la hora del día en la que te encuentras con las personas.</p>
    <p>Si es entre la hora a la que te levantas y las 17h30 y 18h, vamos a decir:</p>
    <p class="text-center"><span class="italic font-bold">Bonjour!</span> (¡Buenos días! ¡Buenas tardes!)</p>
    <p class="mt-3">Después de las 17h30 - 18h, vas a saludar diciendo:</p>
    <p class="text-center"><span class="italic font-bold">Bonsoir!</span> (¡Buenas tardes!, ¡Buenas noches!)</p>
    <p class="font-bold mt-3">Manera informal:</p>
    <p>Para saludar de manera informal, no es necesario tener en cuenta la hora y puedes decir:</p>
    <p class="text-center"><span class="italic font-bold">Salut!</span> (¡Hola!)</p>
    <p class="text-center"><span class="italic font-bold">Coucou!</span> (¡Hola!... Es más informal que "Salut!")</p>
    <p class="mt-3">Después del saludo, también es importante preguntar cómo están las personas.</p>
    <p class="mt-3">De <span class="font-bold">manera formal</span>, podemos preguntar:</p>
    <p class="text-center"><span class="italic font-bold">Comment allez-vous?</span> (¿Cómo está usted?)</p>
    <p class="text-center"><span class="italic font-bold">Comment vas-tu?</span> (¿Cómo estás tú?)</p>
    <p class="mt-3">De <span class="font-bold">manera informal</span>, podemos preguntar:</p>
    <p class="text-center"><span class="italic font-bold">ça va?</span> (¿Qué tal?)</p>
    <p class="mt-3">Las respuestas a estas preguntas pueden ser:</p>
    <p class="text-center"><span class="italic font-bold">Bien, merci.</span> (Bien, gracias)</p>
    <p class="text-center"><span class="italic font-bold">ça va, merci.</span> (Ahí vamos, gracias)</p>
  </div>
  <div class="w-1/3 md:2/3 bg-purple-500/30 text-purple-800 p-6 shadow-xl">
    <p class="font-bold text-xl mb-2">Despedidas</p>
    <p>Para despedirse, existen muchas maneras diferentes dependiendo de si sabemos o no si vamos a ver próximamente a la persona o de cuando la volvamos a ver.</p>
    <p class="font-bold mt-3">Manera formal y/o estándar:</p>
    <p>Para despedirnos sin tener en cuenta la hora, podemos simplemente decir:</p>
    <p class="text-center"><span class="italic font-bold">Au revoir!</span> (¡Hasta luego!)</p>
    <p class="mt-3">Para despedirnos en entre la hora en la que nos levantamos y las 17h30 - 18h, sin importar si vamos a ver a la persona próximamente o no es:</p>
    <p class="text-center"><span class="italic font-bold">Bonne journée!</span> (¡Buenos días! ¡Buenas tardes!)</p>
    <p class="mt-3">Si nos despedimos entre las 17h30 - 18h y la hora en la que vamos a acostarnos, vamos a decir:</p>
    <p class="text-center"><span class="italic font-bold">Bonne soirée!</span> (¡Buenas tardes! ¡Buenas noches!)</p>
    <p class="mt-3">Y justo antes de ir a dormir, vamos a decir:</p>
    <p class="text-center"><span class="italic font-bold">Bonne nuit!</span> (¡Buenas noches!)</p>
    <p class="font-bold mt-3">Manera informal:</p>
    <p>Para despedirnos de manera informal, podemos decir:</p>
    <p class="text-center"><span class="italic font-bold">Salut!</span> (¡Adiós!)</p>
    <p class="mt-3">Ahora, como decíamos anteriormente, también hay diferentes formas de despedirse si sabemos que vamos a ver a nuestro interlocutor próximamente o no y si sabemos exactamente cuándo lo vamos a volver a ver. Estos tipos de despedida se pueden usar en cualquier ocasión (estándar).</p>
    <p class="mt-3">Si no sé cuándo voy a volver a ver a mi interlocutor puedo decir:</p>
    <p class="text-center"><span class="italic font-bold">À bientôt!</span> (¡Hasta pronto!)</p>
    <p class="text-center"><span class="italic font-bold">À la prochaine!</span> (¡Hasta la próxima!)</p>
    <p class="mt-3">Sí sé que lo voy a volver a ver en un día específico de la semana, puedo usar la estructura:</p>
    <p class="text-center"><span class="italic font-bold">À +</span> día de la semana</p>
  </div>
</div>
<section>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('jours-semaine', "Jours de la semaine", $ActividadContent);
  ?>
  <p>Aquí tienes el video de una canción infantil para aprender los días de la semana:</p>
  <?php
  renderVideoIframe('s1uq_SXK9zw', 'Les jours de la semaine chanson enfant Francais, anglais Arabe');
  ?>
  <div class="flex justify-center gap-6 mt-6">
    <div class="w-2/3 md:2/3 bg-orange-500/30 p-6 shadow-lg">
      <p class="text-orange-600">Por ejemplo, puedes decir:</p>
      <p class="text-orange-600 text-center"><span class="italic font-bold">À lundi!</span> (¡Hasta el lunes!)</p>
      <p class="text-orange-600">Para hacer más formal el saludo, puedes agregar las palabras:</p>
      <p class="text-orange-600 text-center"><span class="italic font-bold">Monsieur</span> (señor), <span class="italic font-bold">Madame</span> (señora) o <span class="italic font-bold">Mademoiselle</span> (señorita) o sus plurales: <span class="italic font-bold">Messieurs</span>, <span class="italic font-bold">Mesdames</span> o <span class="italic font-bold">Mesdamoiselles</span>, por ejemplo: <span class="italic font-bold">Bonjour, Monsieur!, Au revoir, Mesdamoiselles!</span></p>
    </div>
  </div>
  <p>Ve estos dos videos para que practiques la pronunciación y el vocabulario para saludar y despedirse de manera informal (tu) y formal (vous):</p>
</section>
<div class="flex justify-center gap-6">
  <div class="w-1/3 md:2/3 bg-cyan-500/30 text-cyan-800 p-6 shadow-xl">
    <?php
    renderVideoIframe('9nMjB5CuYvk', 'Leçon n°3 de français pour débutant : saluer et prendre congé avec tu – communication 3');
    ?>
  </div>
  <div class="w-1/3 md:2/3 bg-purple-500/30 text-purple-800 p-6 shadow-xl">
    <?php
    renderVideoIframe('DkADPcv-trY', 'Leçon n°4 de français pour débutant : saluer et prendre congé avec vous – communication 4');
    ?>
  </div>
</div>
<section>
  <p>Una vez que has repasado lo que se menciona en los videos, vamos a practicar con las siguientes actividades:</p>
  <?php ob_start(); ?>
  <p>¿Con cuáles personas hablas de tú (tu) y con cuales de usted (vous)? Desliza la forma correcta (tu / vous) sobre cada imagen.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('vous-tu-vous', "Vous, tu, vous, tu, tu, vous", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Arrastra las palabras para completar los diálogos con las formas correctas para saludar y para despedirte.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('bonsoir-salut-bonjour', "Saluer et se dire au revoir", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Ve el video y responde a las preguntas.</p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('TnrN0DbHXSA', 'Se saluer Un jour à luni avec');
      ?>
    </div>
  </div>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('se-saluer', "Se saluer Un jour à l'uni avec Emma", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  ola
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('paragraphs', "Se saluer Un jour à l'uni avec (deuxième partie)", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>Con las personas a las que te dirijas de "usted", puedes saludarlas y despedirte de mano.</p>
  <p>Con las personas con las que hablas de "tú", puedes saludarlas y despedirte de beso. Normalmente, en una buena parte de Francia, en Canadá, en Bélgica, en Luxemburgo, en Andorra, en Mónaco, en África y en el Caribe, las personas se saludan y se despiden con dos besos. En Suiza, se saludan y se despiden con tres besos y hay lugares en Francia donde se saludan y se despiden con cuatro o hasta cinco besos. Los besos son normales entre dos mujeres, entre una mujer y un hombre y entre dos hombres, cuando éstos son buenos amigos o cuando son familiares.</p>
  <p>Cuando saludes a alguien de beso, debes comenzar siempre por tu lado izquierdo.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Sabes qué...");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
