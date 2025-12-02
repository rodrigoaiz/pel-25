<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Para ir más lejos – Reglas de pronunciación</h3>
    <div class="bg-indigo-500/20 px-4 shadow-xl pb-6">
        <p class="font-bold text-xl pt-10 text-indigo-800">FINAL DE PALABRA</p>
        <p>En francés, todas las palabras llevan el acento tónico en la última sílaba, es decir, sin importar donde estén escritos los acentos, todas las palabras en francés son agudas.</p>
        <p>Entre las reglas de pronunciación que debes de aprender para poder leer las palabras en francés es que, si la palabra termina por consonante, la consonante final no se pronuncia; solo existen 5 consonantes que si van a sonar: la f, la l, la k, la c y la q. La r final se pronuncia si antes hay alguna vocal diferente que e si acento.</p>
        <p>La s final hace que la letra anterior le lea como si fuera una letra final de palabra.</p>
        <p>Ejemplos:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">très (muy) se pronuncia [tre]</li>
            <li class="leading-none text-indigo-800">Mot (palabra) se pronuncia [mo]</li>
            <li class="leading-none text-indigo-800">Marcher (acminar) se pronuncia [marché] (porque antes de la r final hay una e sin acento)</li>
        </ul>
        <p>pero:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">sportif (deportista) se pronuncia [sportif]</li>
            <li class="leading-none text-indigo-800">avec (con) se pronuncia [avec]</li>
            <li class="leading-none text-indigo-800">venir (venir) se pronuncia [venir] (porque antes de la r final hay una vocal diferente a e sin acento)</li>
            <li class="leading-none text-indigo-800">égal (igual) se pronuncia [egal]</li>
        </ul>
        <p>Las vocales a, i, o, u que están al final de una palabra, siempre se pronuncian. La e final se pronuncia únicamente si lleva acento escrito. La e final que no lleva acento, nunca se pronuncia.</p>
        <p>Ejemplos:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">yoga (yoga) se pronuncia [yoga]</li>
            <li class="leading-none text-indigo-800">parti (partido) se pronuncia [parti]</li>
            <li class="leading-none text-indigo-800">zéro (cero) se pronuncia [zero]</li>
            <li class="leading-none text-indigo-800">revenu (salario) se pronuncia [reveny]</li>
        </ul>
        <p class="font-bold text-xl text-indigo-800">CONSONANTES</p>
        <p>Casi todas las consonantes en francés tienen el mismo sonido que en español y cuando tienes dos consonantes iguales seguidas, se pronuncian como si solo fueran una sola. Aunque casi todas las consonantes suenan igual en los dos idiomas, tienes que tener cuidado en la pronunciación de algunas de ellas:</p>
        <p>La b y la v suenan diferente. La b se hace pegando los labios y dejando escapar el aire de golpe (casi como si hicieras el sonido de una p) y la v se pronuncia poniendo el labio inferior entre los dientes, como si te lo quisieras morder, y dejando salir el aire como si soplaras (es como si hicieras una f).</p>
        <p>La j del francés y la combinación de ge, gi y gy suenan como nuestra y.</p>
        <p class="font-bold">La h nunca se pronuncia.</p>
        <p>La s es un poco especial, porque si se encuentra al principio de la palabra o si hay dos s entre dos vocales, entonces suena como la s del español, pero si entre dos vocales solo hay una s, entonces suena como z (como si hicieras el sonido que hace un mosquito).</p>
        <p>En francés tienes una letra que no existe en español, que es la ç (ce cedilla). La ç se usa solo antes de a, de o, o de u y toma el sonido de la s del español.</p>
        <p>Ejemplos:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">ça (eso) se pronuncia [sa]</li>
            <li class="leading-none text-indigo-800">leçon (lección) se pronuncia [lesõ]</li>
            <li class="leading-none text-indigo-800">reçu (recibido) se pronuncia [resu]</li>
        </ul>
        <p>Si tienes una ch la vas a pronunciar [sh], si tienes una gn la vas a pronunciar como la ñ del español y si tienes una ph, la vas a pronunciar como f.</p>

        <p class="font-bold text-xl text-indigo-800">VOCALES</p>
        <p>La a, la i y la o, tienen el mismo sonido en español y en francés.</p>
        <p>La e sin acento, no se pronuncia, la é (con acentó agudo) se pronuncia como la e sin acento del español (abriendo bien la boca a la vertical) y la è (con acento grave) se pronuncia como la e con acento del español.</p>
        <p>La vocal u tiene un sonido que no existe en el español, para hacerlo tienes que poner los labios como si quisieras decir u, pero en vez de decir u, dices i.</p>
        <p>Existen también lo que se llaman vocales nasales. Las vocales nasales son la combinación de una vocal seguida de una m o de una n (o una doble m o una doble n) y una consonante. También son nasales las vocales seguidas de n, al final de una palabra. El sonido nasal se hace abriendo un gran espacio dentro de la boca, como si tuvieras una papa caliente y diciendo la vocal. La m o la n no suenan.</p>
        <p>Las combinaciones y sonidos de las vocales nasales son:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">an, am / en, em / un, um <span class="text-3xl font-bold">→</span> ã (como si el doctor te estuviera revisando la garganta con un abatelenguas y te pidiera decir *an".)</li>
            <li class="leading-none text-indigo-800">in, im / ain, aim /ein, eim <span class="text-3xl font-bold">→</span> Ḗ (como si estuvieras mordiento una pluma y tuvieras que decir “an”.)</li>
            <li class="leading-none text-indigo-800">on, om <span class="text-3xl font-bold">→</span>õ (como si el doctor te estuviera revisando la garganta con el abatelenguas y te pidiera decir “on”.)</li>
        </ul>
        <p>Los diptongos y triptongos tienen los siguentes sonidos:</p>
        <ul class="list-none">
            <li class="leading-none text-indigo-800">ou, aou <span class="text-3xl font-bold">→</span>u del español</li>
                    <li class="leading-none text-indigo-800">ai <span class="text-3xl font-bold">→</span> como la é con acento del español</li>
                    <li class="leading-none text-indigo-800">eu, oeu, oe <span class="text-3xl font-bold">→</span> es otro sonido que no existe en español y que para pronunciarlo tienes que poner la boca como si quisieras decir o, pero en vez de deci o, vas a decir e.</li>
                    <li class="leading-none text-indigo-800">au, eau <span class="text-3xl font-bold">→</span> o del español</li>
                    <li class="leading-none text-indigo-800">oi <span class="text-3xl font-bold">→</span> como si dijeras ua.</li>
                </ul>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>