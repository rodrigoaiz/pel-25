<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

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
        <p class="mt-3">Las respuestas a estas preguntas pueden ser:</p>
    </div>
</div>
<div class="flex justify-center gap-6">
    <div class="w-1/3 md:2/3 bg-emerald-500/30 text-emerald-800 p-6 shadow-xl">
        <p class="font-bold text-xl mb-2">Jours de la semaine</p>
        <p class="mt-3">Relaciona cada día de la semana con su nombre en francés.</p>
        <p><span class="font-bold">*Lundi*</span> lunes</p>
        <p><span class="font-bold">*Mardi*</span> martes</p>
        <p><span class="font-bold">*Mercredi*</span> miércoles</p>
        <p><span class="font-bold">*Jeudi*</span> jueves</p>
        <p><span class="font-bold">*Vendredi*</span> viernes</p>
        <p><span class="font-bold">*Samedi*</span> sábado</p>
        <p><span class="font-bold">*Dimanche*</span> Domingo</p>
    </div>
</div>
<section>


    <?php
    renderVideoIframe('JmlS2Zf8-is', 'Este es el primer video de la asignatura');
    ?>




    <?php ob_start(); ?>
    <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a1', "Cuestionario diagnóstico de la asignatura", $ActividadContent);
    ?>
    <p>🎯 Aquí dentro abrimos un section para que centre el contenido.</p>
    <div class="max-w-2xl mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t2-pcarbono.pdf'; ?>" target="_blank">Sobre el carbono...</a></p>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>