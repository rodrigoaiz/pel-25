<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Participación del narrador</h2>
    <p>También se debe reconocer que el narrador no sólo se limita a contar la o las historias, sino que a veces participa en ellas como testigo o protagonista, como se advierte en los siguientes casos:</p>
</section>

<div class="my-8 flex flex-col gap-6 max-w-3xl mx-auto">

    <!-- Narrador testigo -->
    <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-amber-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador testigo</p>
        </div>
        <div class="px-6 py-5">
            <p class="text-gray-700 mb-4">Suele ser un personaje secundario y sólo cuenta lo poco que sabe, lo que otros le dijeron o lo que intuye por conjetura. Ejemplo:</p>
            <blockquote class="font-serif text-gray-800 border-l-4 border-amber-300 pl-4 py-1 bg-white/60 rounded-r">
                "De <strong>la tía</strong> <em>Angélica</em> <strong>nos</strong> llegaron noticias mínimas. Muy joven dejó la casa familiar para vivir sola. Instaló un departamento en la ciudad de México. Cuentan que luego recorrió mundo; pero sucedía un fenómeno extraño cuando alguien la mencionaba en una tertulia o en cualquier otra circunstancia motivo de reunión: los mayores se volvían evasivos como si se alborotaran sus recuerdos [...]"<sup>1</sup>
                <p class="text-right text-sm text-gray-500 m-2 italic">Beatriz Espejo</p>
            </blockquote>
            <p class="text-left text-xs text-gray-500 mt-1"><sup>1</sup>Beatriz Espejo, <em>Cuentos reunidos</em>, p. 56.</p>
        </div>
    </div>

    <!-- Narrador protagonista -->
    <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-rose-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador protagonista (o héroe)</p>
        </div>
        <div class="px-6 py-5">
            <p class="text-gray-700 mb-4">Es el personaje principal que cuenta su propia historia; como en este ejemplo:</p>
            <blockquote class="font-serif text-gray-800 border-l-4 border-rose-300 pl-4 py-1 bg-white/60 rounded-r">
                <p class="text-center font-bold text-gray-700 mb-3">Año nuevo<sup>2</sup></p>
                <p class="mb-3"><strong>Estaba sola.</strong> Al pasar, en una estación del metro de París <strong>vi</strong> que daban las doce de la noche. Era muy desgraciada; por otras causas. Las lágrimas comenzaron a correr, silenciosas.</p>
                <p><strong>Me miraba.</strong> Era un negro. <strong>Íbamos</strong> los dos colgados, frente a frente. <strong>Me</strong> miraba con ternura, <strong>queriéndome</strong> consolar. Extraños, sin palabras. La mirada es lo más profundo que hay. Sostuvo sus ojos fijos en los <strong>míos</strong> hasta que las lágrimas se secaron. En la siguiente estación bajó.</p>
                <p class="text-right text-sm text-gray-500 m-2 italic">Inés Arredondo</p>
            </blockquote>
            <p class="text-left text-xs text-gray-500 mt-1"><sup>2</sup>Inés Arredondo, <em>Obras completas</em>, p. 135.</p>
        </div>
    </div>
</div>

<section>
    <p>Asimismo, hay relatos en que pueden aparecer tanto el narrador <strong>testigo</strong> como el <strong>protagonista</strong>. Así se observa en este ejemplo:</p>
</section>
<div class="my-8 flex flex-col gap-6 max-w-3xl mx-auto">

    <!-- La promesa: narrador testigo + protagonista -->
    <div class="border-l-4 border-teal-500 bg-teal-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-teal-500 px-5 py-2">
            <p class="font-bold text-white tracking-wide">Narrador testigo + protagonista</p>
        </div>
        <div class="px-6 py-5">
            <blockquote class="font-serif text-gray-800 border-l-4 border-teal-300 pl-4 py-1 bg-white/60 rounded-r">
                <p class="text-center font-bold text-gray-700 mb-3">La promesa<sup>3</sup></p>
                <p class="mb-3">En Pringles, el doctor Isidro Lozano <strong>me</strong> refirió la historia. Lo hizo con tal economía que <strong>comprendí</strong> que ya lo había hecho, como era de prever, muchas veces; agregar o variar un pormenor sería un pecado literario.</p>
                <p>"El hecho ocurrió aquí, hacia mil novecientos veintitantos. <strong>Yo</strong> había regresado de Buenos Aires con mi diploma. Una noche <strong>me</strong> mandaron buscar del hospital. <strong>Me levanté</strong> de mal humor, <strong>me vestí</strong> y <strong>atravesé</strong> la plaza desierta. En la sala de guardia, el doctor Eudoro Rivera <strong>me</strong> dijo que a uno de los malevos del comité, Clemente Garay, lo habían traído con una puñalada en el vientre. Lo <strong>examinamos</strong>; ahora <strong>me he endurecido</strong>, pero entonces me sacudió ver a un hombre con los intestinos afuera. Estaba con los ojos cerrados y la respiración era trabajosa.</p>
                <p>El doctor Rivera <strong>me</strong> dijo:</p>
                <p class="pl-4">–Ya no hay nada que hacer, mi joven colega. Vamos a dejar que se muera esta porquería.</p>
                <p>Le contesté que <strong>me había</strong> costeado<sup>5</sup> hasta ahí a las dos de la mañana pasadas y que haría lo posible para salvarlo. Rivera se encogió de hombros; <strong>lavé</strong> los intestinos, los <strong>puse</strong> en su lugar y <strong>cosí</strong> la herida. No oí una sola queja.</p>
                <p>Al otro día <strong>volví</strong>. El hombre no había muerto; me miró, me estrechó la mano y me dijo:</p>
                <p class="pl-4">–Para usted, gracias, y mi cabo de plata para Rivera.</p>
                <p>Cuando a Garay lo dieron de alta, Rivera ya se había ido a Buenos Aires.</p>
                <p>Desde esa fecha, todos los años recibí un corderito el día de mi santo, hacia el cuarenta el regalo cesó."</p>
                <p class="text-right text-sm text-gray-500 m-2 italic">Jorge Luis Borges</p>
            </blockquote>
            <p class="text-left text-xs text-gray-500 mt-1"><sup>3</sup>Jorge Luis Borges, <em>Obras completas</em>, t. 2, p. 504.</p>
            <p class="text-left text-xs text-gray-500 mt-1"><sup>4</sup><strong>Costeado</strong> costado el esfuerzo de permanecer hasta...</p>
        </div>
    </div>
</div>

<section>
    <p>En el relato anterior hay un <strong>narrador testigo</strong>, que es quien escribe la historia, y un <strong>narrador protagonista</strong> que es quien la vive, en este caso es el doctor Isidro Lozano.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>