<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura: El calentamiento global: ecologistas vs. corporativos</h2>

    <p>Ahora lee el siguiente texto:</p>

    <div class="my-6 border border-gray-300 rounded-lg overflow-hidden shadow-sm">
        <div class="bg-slate-700 px-6 py-4 text-white">
            <h3 class="text-lg font-bold">El calentamiento global: ecologistas vs. corporativos</h3>
            <p class="text-slate-300 text-sm mt-1">Polémica en torno de una amenaza</p>
            <p class="text-slate-400 text-sm">Luis Felipe Gómez y Jorge Félix</p>
        </div>
        <div class="px-6 py-5 text-gray-700 space-y-4">
            <p>El surgimiento de propuestas, ideas o prácticas nuevas trae consigo, casi siempre, el surgimiento de dos corrientes de opinión: una a favor y otra en contra. La ciencia no ha sido la excepción. A lo largo de su historia, podemos ubicar diversas luchas ideológicas de ese tipo: la astronomía ptolomeica contra el esquema copernicano, en tiempos de Galileo; generación espontánea contra microbiología, en tiempos de Pasteur, o la teoría ondulatoria de la luz contra la corpuscular, que comenzó en la era de Newton y siguió siendo polémica hasta principios del presente siglo.</p>

            <p>Generalmente, una idea prevalece sobre la otra. Ahora sabemos que el Sol no gira alrededor de la Tierra, sino al revés, y que no es la basura la que genera espontáneamente las larvas que frecuentemente la acompañan, sino que provienen de huevecillos microscópicos. En ocasiones, las posturas dicotómicas logran un honroso empate, como en el caso de la luz: a veces se comporta como un grupo de corpúsculos, a veces como una onda.</p>

            <p>En la actualidad, los <em>issues</em> científicos siguen provocando posturas opuestas. Tal es el caso del calentamiento global: ¿tenemos la culpa los seres humanos o es un cambio natural? La respuesta a esa pregunta, sobra decirlo, es muy importante. Para distinguir las dos posturas según la forma como responden, las llamaremos, más o menos arbitrariamente, <strong>ecologistas</strong> y <strong>corporativos</strong>.</p>

            <p>Algunos científicos &mdash;los <strong>ecologistas</strong>&mdash; están convencidos de que sí somos responsables por el calentamiento global del planeta, y de que la única forma de pararlo o amortiguarlo es dejar de lado todas las formas de energía originadas en la combustión fósil, que son las fuentes más importantes de emisión de dióxido de carbono (uno de los contribuyentes del calentamiento global) por fuentes de energía más ecológicas tales como la luz solar, el viento o el movimiento del agua. Además, dicen, tenemos que volvernos más eficientes y desperdiciar menos energía. Si resultase que no somos responsables del incremento de temperatura en el globo, ¿qué perdemos con dejar de contaminar y eficientar nuestro consumo de energía? ¡Nada!</p>

            <p>Sin embargo, hay científicos que defienden otra postura: los <strong>corporativos</strong>. Según ellos, los mecanismos climáticos y de regulación de la temperatura de nuestro planeta están, actualmente, fuera del alcance de la ciencia. Por lo tanto, no podemos asegurar que la emisión de dióxido de carbono, de azufre y otros gases y contaminantes sea la causa del calentamiento global. Entonces, ¿para qué sacrificarnos inútilmente eficientando nuestro consumo de energía y gastando enormes cantidades de dinero en cambiar nuestra fuentes energéticas? ¡Mejor sigamos como estamos! Al menos hasta que se sepa algo de seguro.</p>

            <p>La postura corporativa está anclada en la filosofía positivista, que domina la escena científica desde hace años. Según ella, no sabemos nada de seguro hasta que no podamos establecer relaciones causa-efecto claras y comprobables experimentalmente. La adopción del positivismo en el método científico nos ha regalado una ciencia poderosa y bien fundamentada, eso no se discute. Pero, por otro lado, abusar de ella puede provocarnos algunas cegueras.</p>

            <p>En este caso particular, ésa es una posibilidad muy clara, ya que probablemente la respuesta se encuentre en la teoría del caos, en la cual las relaciones causa-efecto son mucho más sutiles que las planteadas por el método científico tradicional.</p>

            <p>El Niño, que existe desde hace siglos, se ha vuelto particularmente violento desde 1982-83, los huracanes también, las sequías regionales más crudas, etc. Casualmente, eso sucede al mismo tiempo que nuestras emisiones de dióxido de carbono se han incrementado a 360 partículas por millón (contra 270 ppm en 1700) y las de dióxido de azufre son tres veces mayores hoy que en 1930. ¿Son estos fenómenos &mdash;entre otros&mdash; las causas del calentamiento global? &ldquo;No podemos asegurar nada &mdash;dice el corporativo&mdash;, nuestra comprensión del clima no da para tanto.&rdquo; Es decir, no podemos establecer ninguna relación causa-efecto clara e incuestionable.</p>

            <p>Para los ecologistas es más una cuestión de sentido común. Aunque realmente no podamos establecer el origen humano del calentamiento global como un hecho positivo, parece bastante probable que de todos modos sea verdad, así que deberíamos tomar las precauciones pertinentes.</p>

            <p>En algo están de acuerdo las dos posturas: las medidas actuales &mdash;como la reducción de 10 por ciento de emisiones de dióxido de carbono, acordada en el Protocolo de Kyoto, y los recientes acuerdos de Buenos Aires&mdash; resultarán tan útiles para resolver el problema como una cuchara para partir un filete y son, en el mejor de los casos, primeros pasos muy tímidos.</p>

            <p>Además de la polémica científica, el tema está sumergido hasta el cuello en intereses políticos y económicos creados. Pero lo peor de todo es que, si bien la naturaleza ondulatoria o corpuscular de la luz no fue jamás una amenaza para nadie, los cambios climáticos regionales, provocados por el calentamiento global, sí lo son para todos.</p>

            <p>Sólo esperamos que el &ldquo;deslindamiento de responsabilidades&rdquo; en la cuestión del clima se resuelva antes de que sea tarde.</p>
        </div>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
