<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Se présenter formellement et informellement</h2>
    <h3>Presentarse de manera formal e informal</h3>
    <div class="flex justify-center gap-6">
        <div class="w-1/3 sm:full pt-6">
            <?php
            renderImage('fr1u1a1p3-img07.webp');
            ?>
        </div>
        <div class="w-2/3 sm:full">
            <p>En esta lección, aprenderás a conjugar los verbos regulares y el verbo être en presente, así como a hacer frases simples y preguntas de “oui”/”non” (si/no) y abiertas para poder preguntar y a responder a la pregunta “¿Cómo te llamas?” utilizando los verbos “s’appeler” y “être”.</p>
            <p>Ahora, para poder presentarnos y para poder preguntar el nombre de la persona con la que estemos interactuando, tenemos que conocer algunos detalles gramaticales respecto a cómo formular preguntas y hacer enunciados simples para poder responderlas. También vamos a tener que aprender cómo conjugar un par de verbos que nos van a servir para presentarnos.</p>
            <p>Observa las conjugaciones de estos verbos:</p>
        </div>
    </div>

    <p class="text-xl font-bold text-teal-600 mt-4">Los verbos "<span class="italic">s'appeler</span>" y "<span class="italic">être</span>"</p>
</section>
<div class="flex justify-center gap-6">
    <div class="w-1/3 md:2/3 bg-rose-500/30 text-rose-700 p-6 shadow-xl">
        <p class="font-bold text-xl mb-2">Être (ser o estar)</p>
        <ul class="list-none">
            <li>Je suis</li>
            <li>Tu es</li>
            <li>Il /Elle / On* est</li>
            <li>Nous sommes</li>
            <li>Vous** êtes</li>
            <li>Ils /Elles sont</li>
        </ul>
        <p class="text-sm font-bold mt-8">*El pronombre ON se puede traducir como nosotros (nous) o Ellos / Ellas (ils /elles), pero siempre se conjuga en tercera persona del singular él /ella (il /elle).</p>
        <p class="text-sm font-bold mt-4">** El Pronombre VOUS se traduce como ustedes o usted según el contexto.</p>
    </div>
    <div class="w-1/3 md:2/3 bg-indigo-500/30 text-indigo-800 p-6 shadow-xl">
        <p class="font-bold text-xl mb-2">S'appeler (llamarse)</p>
        <ul class="list-none">
            <li>Je m’appelle *</li>
            <li>Tu t’appelles</li>
            <li>Il /Elle /On s’appelle</li>
            <li>Nous nous appelons</li>
            <li>Vous vous appelez</li>
            <li>Ils /elles s’appellent</li>
        </ul>
        <p class="text-sm font-bold mt-8">En francés NO podemos eliminar el pronombre sujeto.</p>
        <p class="text-sm font-bold mt-4">En este verbo, tenemos dos pronombres. El segundo, que está en negritas, es la característica de los verbos pronominales, cuya acción recae en el sujeto. Observa: Je m’appelle Louise. / J’appelle Louise. La primera frase dice “Yo me llamo Louise”. La segunda, “Yo llamo a Louise”.</p>
        <p class="text-sm font-bold mt-4">*Observa lo que sucede con las personas Je, Tu, Il, Ils: cuando usamos el segundo pronombre, ponemos m seguido de apostrofe: m’. Con otros verbos pronominales no ocurre así, por ejemplo: Je me lève (Yo me levanto). Eso ocurre porque, en algunos casos, no pueden ir dos sonidos de vocal juntos. </p>
    </div>
</div>
<section>
    <p class="text-xl font-bold text-teal-600 mt-4">Para ir más lejos - Conjugación de verbos regulares</p>
    <p>Para conjugar en presente todos los verbos que al infinitivo terminan por -er (excepto “aller” → ir) debes de tomar el verbo en infinitivo y quitarle la terminación -er, y después vas a tener que agregar una de las siguientes terminaciones, según sea el sujeto de tu frase:</p>
    <ul class="list-none">
        <li>je (yo) <span class="text-3xl font-bold text-violet-800">→</span> -e</li>
        <li>tu (tú) <span class="text-3xl font-bold text-violet-800">→</span> -es</li>
        <li>il (él), elle (ella), on (se) <span class="text-3xl font-bold text-violet-800">→</span> -e</li>
        <li>nous (nosotros) <span class="text-3xl font-bold text-violet-800">→</span> -ons</li>
        <li>vous (usted, ustedes) <span class="text-3xl font-bold text-violet-800">→</span> -ez</li>
        <li>ils (ellos). elles (ellas) <span class="text-3xl font-bold text-violet-800">→</span> -ent </li>
    </ul>
    <p>Por ejemplo, si tienes el verbo “chanter” (“cantar”), vas a tomar “chanter” y le vas a quitar las dos últimas letras (“er”) y te va a quedar “chant-”. A ese “chant-” vas a agregar las terminaciones arriba mencionadas y te va a quedar :</p>
    <ul class="list-none">
        <li>je chante (yo canto)</li>
        <li>tu chantes (tú cantas)</li>
        <li>il chante (él canta)</li>
        <li>elle chante (ella canta)</li>
        <li>on chante (se canta)</li>
        <li>nous chantons (nosotros cantamos)</li>
        <li>vous chantez (usted canta / ustedes cantan)</li>
        <li>ils chantent (ellos cantan)</li>
        <li>elles chantent (ellas cantan)</li>
    </ul>
    <p class="mt-6">Este procedimiento va a servir para conjugar cualquier verbo regular, aunque debes de tener cuidado porque hay algunos verbos regulares que van a tener pequeñas variaciones ortográficas.</p>
    <div class="border-y-2 border-dashed border-gray-500 bg-teal-300/20 p-2 text-center"><span class="font-bold">Atención:</span>
        Cuando pronuncias los verbos conjugados para <span class="text-teal-600 font-bold">ils</span> y para elles, la terminación <span class="text-teal-600 font-bold">-ent</span>, nunca se pronuncia.</div>
    <p class="text-xl font-bold text-teal-600 mt-10">La frase afirmativa</p>
    <p>Para poder hacer frases simples en francés, siempre debes respetar la estructura siguiente: Sujeto + verbo + complemento.</p>
    <p>Observa estas frases:</p>
    <ol class="list-decimal">
        <li>Je suis Matthieu.</li>
        <li>Je m’appelle Farid.</li>
    </ol>
    <p>Para presentarnos, podemos utilizar los verbos être o s’appeler: Yo soy... / Yo me llamo...</p>
    <?php ob_start(); ?>
    <p>Observa las frases y escribe la conjugación correcta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a6', "Je m'appelle", $ActividadContent);
    ?>
    <p class="text-xl font-bold text-teal-600 mt-10">Para ir más lejos – La frase negativa</p>
    <p>La frase negativa en francés es un poco diferente a la frase negativa en español. Para hacer una negación en francés siempre vas a tener que utilizar dos elementos de negación que juntos se traducirían por nuestro “no”. Estas dos palabras, en su forma más simples, son “ne... pas” y siempre van a ir rodeando al verbo conjugado (o a los pronombres que acompañen al verbo y al verbo conjugado).</p>
    <ul class="list-none text-center">
        <li>Por ejemplo, si tienes la frase afirmativa <span class="text-3xl font-bold">→</span> <span class="font-bold">Je suis Anna</span>.</li>
        <li>La frase negativa de esa afirmación es <span class="text-3xl font-bold">→</span> <span class="font-bold text-rose-700">Je ne suis pas Anna</span>.</li>
        <li>Si tienes <span class="text-3xl font-bold">→</span> <span class="font-bold">Je m’appelle André</span>.</li>
        <li>La frase negativa es <span class="text-3xl font-bold">→</span> <span class="font-bold text-rose-700">Je ne m’appelle pas André</span>.</li>
    </ul>
    <p class="text-xl font-bold text-teal-600 mt-10">La frase interrogativa</p>
    <p>Para formular una pregunta de "oui"/"non" (si/no) estándar que puedas usar en cualquier situación, lo único que debes hacer es comenzar la pregunta por la expresión “Est-ce que....” y luego hacer una frase del tipo Sujeto + Verbo + Complemento:</p>
    <p>Observa estas frases:</p>
    <ul class="list-none">
        <li><span class="font-bold">Est-ce que tu t’appelles Marie? Oui, je m’appelle Marie. / Non, je m’appelle Coralie.</span></li>
        <li><span class="font-bold">Est-ce que vous vous appelez Marie? Oui, je m’appelle Marie. /Non, je m’appelle Coralie.</span></li>
    </ul>
    <p>Cuando necesitas hacer una pregunta abierta, cuya respuesta sea otra cosa más que "si" o "no", debes de empezar tu pregunta por una palabra interrogativa como por ejemplo “qui” (quién) o “comment” (cómo) seguida de una frase del tipo Sujeto + Verbo + Complemento o también puede ser del tipo Verbo + Sujeto + Complemento.</p>
    <ul class="list-none">
        <li class="leading-none">Qui es-tu ? Je suis Marie.</li>
        <li class="leading-none">Comment tu t'appelles? Je m’appelle Marie.</li>
        <li class="mt-6">Comment vous appelez-vous? Je m'appelle Marie.</li>
        <li class="leading-none">Qui êtes-vous ? Je suis Marie.</li>
    </ul>
    <p>Observa las preguntas que incluyen el pronombre VOUS; éste se traduce como usted, lo que implica que estamos haciendo una pregunta formal. ¿A quién le hacemos preguntas formales? A los profesores, al médico, al director de una escuela, a los adultos que te atienden en una tienda, etc. </p>
    <div class="border-y-2 border-dashed border-gray-300 bg-teal-300/10 p-2 text-center">
        + Recuerda que VOUS también significa “ustedes”. La respuesta a la pregunta Qui êtes-vous ? podría ser Nous sommes Noémi et Sophie. </div>
    <?php ob_start(); ?>
    <p>¿Pregunta formal o informal? Completa con el pronombre que corresponde. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a6', "Apprenons à différencier les questions formelles et informelles", $ActividadContent);
    ?>
    <p class="text-xl font-bold text-teal-600 mt-10">Para ir más lejos – Palabras interrogativas</p>
    <div class="flex justify-center mt-4">
        <div class="w-2/3 md:full bg-sky-500/30 px-6 shadow-lg">
            <p class="text-sky-800 text-lg mb-2">Otras palabras interrogativas son:</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Que</span> (qué)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Qui</span> (quién)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Comment</span> (cómo)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Quand</span> (cuándo)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Où</span> (dónde/a dónde)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">D'où</span> (de dónde)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Pour qui</span> (para quién/por quién)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Pourquoi</span> (por qué/para qué)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Combien</span> de (cuánto)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Quel</span> (cuál en masculino singular)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Quels</span> (cuáles en masculino plural)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Quelle</span> (cuál en femenino singular)</p>
            <p class="text-sky-800 leading-none"><span class="font-bold">Quelles</span> (cuáles en femenino plural)</p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>