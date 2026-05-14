<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Fichas Mixta, de comentario, bibliográfica y textual</h2>

    <div class="flex justify-center mt-6">
        <div class="w-2/3">
            <?php
            renderImage('tlriid2-u3t2p4img1.webp');
            ?>
        </div>
    </div>

    <!-- Ficha Mixta -->
    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden mb-8 mt-6">
        <div class="bg-sky-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Ficha mixta</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Tiene como principal fin exponer el criterio del investigador con relación a los datos que va obteniendo conforme los selecciona. Por medio de estos dos tipos de fichas se adelantan los juicios que sustentan la tesis personal o que, por el contrario, llevan a la demostración de que ésta estaba equivocada en ciertos aspectos. Sirve también para dar coherencia a una cita textual que depende de un párrafo anterior muy grande.</p>
            <p class="mt-4 font-semibold">Hay cuatro formas de hacer una ficha mixta:</p>
            <ul class="ul-disc mt-2">
                <li>Se copia textualmente una parte y se añade un breve comentario personal.</li>
                <li>Se copia textualmente una parte y se incluye un resumen del resto del texto, o viceversa.</li>
                <li>Se mezclan partes de resumen, partes textuales y partes de comentario personal, procurando respetar la idea expuesta por el autor.</li>
                <li>Se hace un resumen y se añade un comentario.</li>
            </ul>

            <!-- Ejemplo de ficha mixta -->
            <p class="mt-6 font-semibold text-sky-700">Ejemplo:</p>
            <div class="mt-3 border border-sky-200 rounded-lg overflow-hidden font-mono text-sm">
                <div class="bg-white px-5 py-4 text-gray-800 space-y-2">
                    <p><span class="font-bold">Autor:</span> Kate Santich</p>
                    <p><span class="font-bold">Artículo:</span> Somos más felices.</p>
                    <p class="italic">&ldquo;Nuestra vida depende de cómo la veamos&rdquo;</p>
                    <div class="border-t border-sky-200 pt-3 mt-3">
                        <p class="font-bold mb-1">Comentario:</p>
                        <p class="font-sans not-italic leading-relaxed">Las personas muchas veces nos quejamos de que no somos felices, andamos tristes, preocupados, estresados por cosas que no lo requieren, pensamos mucho en cosas que nos dañan o nos impiden estar en paz con nosotros mismos y alcanzar la felicidad. Ya que si en realidad queremos estar alegres y felices es como dice la autora, la vida depende de cómo la veamos [...]. La mentalidad tiene un factor determinante para ser felices. Incluso hay casos de personas que con su optimismo han logrado superar obstáculos, y con ello lograr su felicidad y compartirla con los demás. Hay tantas cosas en nuestra vida por las cuales debemos estar felices tan solo el hecho de existir y tener vida, salud y nuestros seres queridos y sobre todo tener a Dios en nuestras vidas, podemos encontrar más fácil la felicidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ficha de Comentario -->
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden mb-8">
        <div class="bg-violet-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Ficha de comentario</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Se reúnen los datos o ideas que le han surgido al investigador. Si esta ficha proviene del contenido de alguna obra determinada, llevará los mismos encabezados; en tanto antes de colocar la misma referencia, se deberán escribir las expresiones <em>proviene de</em>, o <em>véase</em>. Si la ficha es elaborada para asentar alguna conclusión o juicio del investigador, sin que tenga como referencia alguna ficha de otro tipo, entonces en el lugar de la referencia se escribirá la palabra: <strong>propio</strong>.</p>

            <!-- Ejemplo de ficha de comentario -->
            <p class="mt-6 font-semibold text-violet-700">Ejemplo:</p>
            <div class="mt-3 border border-violet-200 rounded-lg overflow-hidden font-mono text-sm">
                <div class="bg-violet-50 px-5 py-2 border-b border-violet-200">
                    <p class="font-bold text-gray-700">El consumo de la televisión en los jóvenes</p>
                </div>
                <div class="bg-white px-5 py-4 text-gray-800 space-y-3">
                    <p class="font-sans not-italic leading-relaxed">La importancia que tiene el consumo cultural en la televisión para los jóvenes mexicanos ocupa un lugar muy amplio dentro de su vida cotidiana, fundamentalmente en aquéllos que viven en las grandes ciudades, ya que en ellas, tiende a aumentar el tiempo que dedican al consumo de programas televisivos dirigidos a ellos, en tanto permanecen dentro de su hogar.</p>
                    <p class="border-t border-violet-200 pt-3 text-gray-500 italic">Jóvenes: una evaluación de conocimiento,<br>Instituto Mexicano de la Juventud, p.&nbsp;452.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ficha Bibliográfica -->
    <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden mb-8">
        <div class="bg-emerald-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Ficha bibliográfica</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Estas fichas no solamente se utilizan para referirse a los datos de identificación de un libro, además se emplean para recolectar datos de otro tipo de fuentes como películas, programas de televisión y radiofónicos, entre otros. Este tipo de ficha se utiliza regularmente en investigaciones especializadas, que exigen mucha precisión.</p>
            <p class="mt-4 font-semibold">Elementos que debe incluir:</p>
            <ol class="ol-number mt-2">
                <li>Nombre completo del autor; si existen más de dos autores, después del segundo se escribirá la locución latina: <em>et al.</em></li>
                <li>Título escrito en cursivas.</li>
                <li>Número de edición, a partir de la segunda. Si es primera edición no se debe anotar.</li>
                <li>Nombre de la casa editorial que la publicó.</li>
                <li>Ciudad de edición.</li>
                <li>Año de la edición escrito entre paréntesis y seguido de un punto.</li>
            </ol>

            <!-- Ejemplo de ficha bibliográfica -->
            <p class="mt-6 font-semibold text-emerald-700">Ejemplo:</p>
            <div class="mt-3 border border-emerald-200 rounded-lg overflow-hidden font-mono text-sm">
                <div class="bg-white px-5 py-4 text-gray-800">
                    <p>Ayala, Leopoldo. <em>Taller de lectura y Redacción</em>, 5ª ed., Porrúa, México, 1979.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ficha de Cita Textual -->
    <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-amber-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Ficha de cita textual</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>La ficha para citas transcribe íntegramente el texto tomado de una fuente, por lo que esta información debe ir <strong>entre comillas</strong>. La estructura de estas fichas se puede adaptar a las necesidades particulares; lo más importante es recoger correctamente el texto de la cita y la fuente de la que procede, de modo que, en el momento de redactar un trabajo, se disponga de la información necesaria para citar correctamente.</p>

            <p class="mt-4 font-semibold">Estructura:</p>
            <div class="mt-3 border border-amber-200 rounded-lg overflow-hidden font-mono text-sm bg-amber-50 px-5 py-4 text-gray-700 space-y-2">
                <p><span class="font-bold font-sans">Subtema o Asunto</span> <span class="font-sans text-gray-500">(¿A qué se refiere la cita? ¿Para qué tema de nuestro trabajo la vamos a utilizar?)</span></p>
                <p>&laquo;Contenido textual&hellip;&raquo; <span class="font-sans text-gray-500">(entre comillas)</span></p>
                <p><span class="font-sans text-gray-500">Autor. Título del libro, año, página(s) — o referencia bibliográfica completa.</span></p>
                <p><span class="font-sans text-gray-500">(Opcionalmente: comentario personal sobre la cita.)</span></p>
            </div>

            <!-- Ejemplo de ficha textual -->
            <p class="mt-6 font-semibold text-amber-700">Ejemplo:</p>
            <div class="mt-3 border border-amber-200 rounded-lg overflow-hidden font-mono text-sm">
                <div class="bg-amber-50 px-5 py-2 border-b border-amber-200">
                    <p class="font-bold text-gray-700">Influencia de Shopenhauer en la obra de Thomas Mann</p>
                </div>
                <div class="bg-white px-5 py-4 text-gray-800 space-y-3">
                    <blockquote class="border-l-4 border-amber-300 pl-4 text-gray-700 font-sans not-italic leading-relaxed">
                        &laquo;&ldquo;Quien se interesa por la vida &mdash;dije yo en <em>La montaña mágica</em>&mdash; se interesa sobre todo por la muerte.&rdquo; Ahí está la huella de Schopenhauer, una huella profundamente grabada, fija para todo el resto de la vida. Pero también habría sido schopenhaueriano el que yo hubiera añadido: &ldquo;Quien se interesa por la muerte busca en ella la vida&rdquo;. Y lo he dicho, aun cuando no con tanta brevedad.&raquo;
                    </blockquote>
                    <p class="border-t border-amber-200 pt-3 text-gray-500 italic font-sans">Mann, Thomas (1938) <em>Schopenhauer. Nietzsche. Freud.</em> Madrid: Alianza Editorial, 2000, pág.&nbsp;56.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>