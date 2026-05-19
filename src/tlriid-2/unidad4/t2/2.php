<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Antes de trabajar en el análisis de los personajes de las novelas, te invitamos a leer el inicio de la novela <em>La muerte en Venecia</em> de Thomas Mann para que pongas en práctica el aprendizaje anterior. Léelo con atención y ve identificando en tu mente cuáles son las características físicas, cuáles las ideológicas y finalmente cuáles son las psicológicas, en este caso del personaje Gustavo Aschenbach.</p>

    <blockquote class="border-l-4 border-green-400 bg-green-50 pl-6 pr-4 py-4 my-4 text-gray-700 not-italic">
        <p class="font-bold text-green-700 mb-1">La muerte en Venecia</p>
        <p class="text-sm text-gray-500 mb-1">(fragmento)</p>
        <p class="text-sm text-gray-500 mb-3">Thomas Mann</p>
        <p>Von Aschenbach, nombre oficial de Gustavo Aschenbach a partir de la celebración de su cincuentenario, salió de su casa de la calle del Príncipe Regente, en Munich, para dar un largo paseo solitario, una tarde primaveral del año 19... La primavera no se había mostrado agradable. Sobreexcitado por el difícil y esforzado trabajo de la mañana, que le exigía extrema preocupación, penetración y escrúpulo de su voluntad, el escritor no había podido detener, después de la comida, la vibración interna del impulso creador, de aquel <em>motus animi continuus</em> en que consiste, según Cicerón, la raíz de la elocuencia. Tampoco había logrado conciliar el sueño reparador, que le iba siendo cada día más necesario, a medida que sus fuerzas se gastaban. Por eso, después del té, había salido, con la esperanza de que el aire y el movimiento lo restaurasen, dándole fuerzas para trabajar luego con fruto.</p>
        <p>Principiaba mayo, y, tras unas semanas de frío y humedad, había llegado un verano prematuro. El &laquo;Englischer Garten&raquo; tenía la claridad de un día de agosto, a pesar de que los árboles apenas estaban vestidos de hojas. Las cercanías de la ciudad se inundaban de paseantes y carruajes. En Anmeister, adonde había llegado por senderos cada vez más solitarios, se detuvo un instante para contemplar la animación popular de los merenderos, ante los cuales habían parado algunos coches. Desde allí, y cuando el sol comenzaba ya a ponerse, salió del parque atravesando los campos. Después, sintiéndose cansado, como el cielo amenazase tormenta del lado de Foehring, se quedó junto al Cementerio del Norte esperando el tranvía, que le llevaría de nuevo a la ciudad, en línea recta.</p>
    </blockquote>

    <h2>Tipos de Personajes</h2>

    <div class="flex justify-center mt-4 mb-6">
        <div class="w-2/3">
            <?php
            renderImage(
                'tlriid2-u4t2p2img1.webp',
                'Libro abierto en biblioteca [fotografía]. Freepik.',
                'https://www.freepik.es/foto-gratis/libro-biblioteca-libro-texto-abierto_3737798.htm',
                'Fuente: Freepik'
            );
            ?>
        </div>
    </div>

    <p>Según su importancia en la novela, los personajes se dividen en tres tipos: <strong>principales</strong>, <strong>secundarios</strong> e <strong>incidentales</strong>.</p>

    <h3>Personajes Principales</h3>
    <p>Puede haber más de uno y son aquellos cuya historia estamos leyendo y que participan más que el resto en su desarrollo. Dentro de los personajes principales encontramos al <strong>personaje protagonista</strong>, a quien podemos reconocer porque:</p>
    <ul class="ul-disc">
        <li>Sus acciones afectan a los demás, o las acciones de los otros lo afectan.</li>
        <li>Es el mejor caracterizado, es decir, al que se describe más física, ideológica y psicológicamente.</li>
        <li>Se trata del personaje que desarrolla la trama.</li>
    </ul>

    <h3>Personaje Secundario</h3>
    <p>Se diferencia del principal porque tiene menor importancia. Puede ser aquel personaje que aparece mucho, pero cuyas acciones no resultan relevantes; o bien, el personaje que no aparece tanto, pero cuya acción impactó fuertemente la historia que se nos cuenta.</p>

    <h3>Personaje Incidental</h3>
    <p>Se trata de los personajes que aparecen en la obra y nos sirven para la creación del mundo ficticio de ésta. Su participación no resulta trascendental para el desarrollo de la historia.</p>

    <div class="border-l-4 border-sky-500 bg-sky-50 rounded-r-lg px-6 py-5 my-6 text-gray-700">
        <p>En la novela que leíste <em>San Manuel Bueno, mártir</em>, <strong>Manuel</strong> es el personaje principal, así como el protagonista, dado que las acciones de la novela suceden gracias a él y repercuten en todos los demás personajes. Los <strong>personajes secundarios</strong> son Ángela, puesto que está presente en toda la narración, aunque sus acciones no sean las que determinan la historia; así mismo Lázaro y Basilio quienes aparecen menos, pero cuyas acciones sí repercuten en el desarrollo de la historia. El nuevo párroco del pueblo, es un ejemplo de <strong>personaje incidental</strong>.</p>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Antes de avanzar, trata de realizar el siguiente reto que te ayudará a reforzar lo aprendido hasta ahora.</li>
        <li>Arrastra los personajes al espacio que corresponda en el texto. </li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4t2a4', "Personajes", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>