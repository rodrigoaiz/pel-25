<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Obtención de sales</h3>
    <p class="font-bold">Cálculo de número de oxidación</p>
    <p>Para <strong>identificar una reacción óxido-reducción</strong> se deben <strong>determinar los números o
            estados de oxidación</strong> de los elementos, de esta forma se identificará qué elemento se oxida
        y qué elemento se reduce, así como reconocer al agente reductor y al agente oxidante.</p>
    <p>Los números de oxidación de un átomo en un ion o en una molécula se definen como las cargas que tienen
        los átomos, convencionalmente las cargas de los iones se escriben número y signo, por ejemplo, el catión
        <span class="font-serif italic">Mg2+</span>, y los <strong>números de oxidación se escriben como signo y número</strong>, así el número de
            oxidación del ion <span class="font-serif italic">Mg2+</span> es <span class="font-serif italic">+2</span>.
    </p>
    <p><strong>¿Cómo calcular el número de oxidación de un compuesto?</strong> Para eso necesitas conocer las
        reglas para asignar números de oxidación:</p>
    <ol>
        <li><strong>Los elementos en estado</strong> puro tienen un <strong>número de oxidación igual a
                cero.</strong></li>
        <li>El <strong>número de oxidación del <span class="font-serif italic">H</span> es <span class="font-serif italic">+1</span></strong> cuando está como protón y <span class="font-serif italic">-1</span> cuando está como
            hidruro.</li>
        <li>El <strong><span class="font-serif italic">O</span> es <span class="font-serif italic">-2</span> cuando está como óxido</strong>, excepto en los peróxidos donde el número de oxidación es <span class="font-serif italic">-1</span>.</li>
        <li>El <strong>número de oxidación de un ion</strong> es <strong>igual</strong> a su
            <strong>carga</strong>.
        </li>
        <li>La <strong>suma algebraica</strong> de los números de oxidación <strong>de un compuesto neutro es
                igual a cero</strong>.</li>
    </ol>
    <p class="font-bold">Ejemplo 1:</p>
    <p>Determinar números de oxidación del <span class="font-serif italic"><strong>Al2O3</strong></span>.</p>
    <p>Como el <span class="font-serif italic">Al2O3</span> es un compuesto neutro, la suma algebraica de los estados de oxidación debe ser igual a
        cero. El oxígeno está como óxido por lo tanto su número de oxidación es <span class="font-serif italic">-2</span>, el número de oxidación del
        aluminio debe ser <span class="font-serif italic">+3</span> por su posición en la tabla periódica.</p>
    <p>Como la carga neta de los números de oxidación es <span class="font-serif italic">= 0</span>, la suma de los números de oxidación del átomo de
        <span class="font-serif italic">Al +</span> la suma de los números de oxidación del átomo de <span class="font-serif italic">O = 2(+3) + 3(-2)= +6-6=0</span>. Donde los números <span class="font-serif italic">2</span> y <span class="font-serif italic">3</span> corresponden a los subíndices del <span class="font-serif italic">Al</span> y <span class="font-serif italic">O</span> en la fórmula química.
    </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_num_oxidacion.webp', 'Números de oxidación del óxido de aluminio');
        ?>
    </div>
    <p class="font-bold">Ejemplo 2:</p>
    <p>Determinar números de oxidación del <span class="font-serif italic">SO42-</span>.</p>
    <p>Como el <span class="font-serif italic">SO42-</span> es un ion con carga total <span class="font-serif italic">-2</span>, la suma algebraica de los estados de oxidación debe ser igual a <span class="font-serif italic">-2</span>. El oxígeno está como óxido por lo tanto su número de oxidación es <span class="font-serif italic">-2</span>, el número de oxidación del azufre debe ser <span class="font-serif italic">+6</span>.</p>
    <p>Como la carga neta de los números de oxidación es <span class="font-serif italic">= -2</span>, la suma de los números de oxidación del átomo de <span class="font-serif italic">S +</span> la suma de los números de oxidación del átomo de <span class="font-serif italic">O = 1(+6) + 4(-2) = +6-8=-2</span>. Donde los números <span class="font-serif italic">1</span> y <span class="font-serif italic">4</span> corresponden a los subíndices del <span class="font-serif italic">S</span> y <span class="font-serif italic">O</span> en la fórmula química.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_num_oxidacion_anion.webp', 'Números de oxidación del anión sulfato');
        ?>
    </div>
    <p class="font-bold text-rose-600 mt-10">Números de oxidación en la tabla periódica</p>
    <p>En la tabla periódica podemos observar que cada elemento tiene diferentes números
        de oxidación, sin embargo, las familias 1A, 2A y 3A manejan un solo estado de
        oxidación respectivamente, +1, +2 y +3 (a excepción del Tl que emplea también
        +1).</p>
    <p>Los metales de transición tienen distintos números de oxidación.</p>
    <div class="w-lg-2 mx-auto">
        <?php
        renderImage('u1t5_tabla_periodica.webp', 'Imagen de Salvador85,', 'https://commons.wikimedia.org/wiki/File:Tabla_Peri%C3%B3dica_de_los_Elementos_9jun2016.png', 'Wikimedia Commons.');
        ?>
    </div>
    <p class="mt-16">Revisa la siguiente página para reforzar tus conocimientos:</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-green-900"><a class=" text-gray-50" href="https://es.khanacademy.org/science/ap-chemistry-beta/x2eef969c74e0d802:chemical-reactions/x2eef969c74e0d802:oxidation-reduction-redox-reactions/a/oxidation-reduction-redox-reactions" target="_blank">Reacciones óxido-reducción</a></p>
    </div>
    <p>Realiza los siguientes ejercicios sobre números de oxidación:</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-blue-800"><a class=" text-gray-50" href="http://objetos.unam.mx/quimica/estadosOxidacion/index.html" target="_blank">Números de oxidación</a></p>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>