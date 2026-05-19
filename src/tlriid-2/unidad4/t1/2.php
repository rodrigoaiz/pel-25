<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>La Novela</h2>

    <p>La novela es el género narrativo más popular en la actualidad. Es una obra literaria en que se narra una acción fingida en todo o en parte, y cuyo fin es causar placer estético a los lectores por medio de la descripción o pintura de sucesos o lances interesantes, de caracteres, de pasiones y de costumbres.</p>

    <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-4 my-4 text-gray-700 not-italic">
        Helena Beristáin define a la novela como &ldquo;un relato extenso, narrado generalmente en prosa, que da cuenta de una cadena de acciones cuya naturaleza en buena medida es la de la ficción y cuya intención dominante consiste en producir una experiencia artística estética.&rdquo;<sup>1</sup>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Helena Beristáin. <em>Diccionario de retórica y poética,</em> p. 363.</p>
    </blockquote>

    <p>Para entender lo que es una novela, es importante que tengas claro qué es la ficción. Se entiende por <strong>ficción</strong> a la creación imaginada de un mundo alterno que se plasma en una obra. Se puede decir que la ficción difiere de la realidad porque la primera es inventada, es el producto artístico de un autor, y la segunda, refleja lo que ocurre en el mundo que nos rodea.</p>

    <p>Así pues, una novela crea un mundo ficticio, donde hay personajes que realizan acciones en un tiempo y lugar determinados. Este mundo ficticio puede llegar hasta donde la imaginación del autor lo decida; así pues, el espectro para su creación va desde las novelas realistas, hasta aquellas que pertenecen a la ciencia ficción o al mundo fantástico; sin embargo, todas ellas pertenecen a la ficción.</p>

    <p>Sin importar hasta qué punto la creación de este mundo ficticio pudiera ser fantástica, para que logre ser un producto artístico y estético es importante que la novela sea <strong>verosímil</strong>, es decir, independientemente de los hechos que se estén narrando, se debe buscar que éstos puedan ser aceptados por el lector como parte de la realidad de la narración.</p>

    <h3>Elementos de la Novela</h3>
    <p>Toda novela ha de contener los siguientes elementos:</p>
    <ul class="ul-disc">
        <li><strong>Historia</strong>, que es la sucesión de los hechos. No tiene límites y puede referirse a sucesos reales o ficticios.</li>
        <li><strong>Descripción del ambiente</strong>, ya que gracias a él nos situamos en la misma atmósfera del personaje y podemos comprender mejor los motivos de su actuar.</li>
        <li><strong>Personajes</strong>, que se mueven en un ambiente y llevan a cabo los hechos.</li>
        <li><strong>Punto de vista del autor</strong>, es lo que proporciona el tono especial a la novela.</li>
    </ul>

    <p class="font-bold">Historia</p>
    <p>En una novela la historia recibe también el nombre de <strong>diégesis</strong>. Es el encadenamiento temporal y causal de los hechos realizados por los personajes, que se identifica con el desarrollo de una anécdota.</p>

    <p class="font-bold">Secuencias</p>
    <p>Se entiende como <strong>secuencia</strong> a una unidad intermedia identificable en un discurso narrativo, que posee una coherencia interna pero no autónoma, sino integrada en un conjunto superior, siendo éste, la historia de la novela en sí.</p>

    <p>En la novela (al igual que en el cuento) existen cinco secuencias principales: <strong>Situación Inicial, Perturbación, Transformación, Resolución</strong> y <strong>Situación Final</strong>. La diferencia entre estos géneros narrativos radica en que, por la brevedad del cuento, estas secuencias suceden una sola vez, mientras que por la extensión de la novela, ésta puede contar con varias perturbaciones, transformaciones y resoluciones.</p>

    <p>Cada una de las secuencias cumple tres funciones:</p>
    <ul class="ul-disc">
        <li>Función de apertura de una posibilidad o un deseo.</li>
        <li>Función de Realización: conducta a observar por el personaje, obstáculos a superar, medios a utilizar, ayuda a recibir, etcétera.</li>
        <li>Función de cierre: éxito final o fracaso.</li>
    </ul>
    <p>Repasemos algunos elementos importantes de la novela.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Escribe en los espacios en blanco las palabras correctas.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4t1a2', "La novela", $ActividadContent);
    ?>
    <p>Como ejemplo en la novela <a href="https://scispace.com/pdf/memoria-de-mis-putas-tristes-2xw1csop1t.pdf" target="_blank" rel="noopener noreferrer"><em>Memorias de mis putas tristes</em></a> es muy sencillo reconocer las secuencias y las partes que la integran.</p>

    <div class="overflow-x-auto my-6 border border-gray-300 rounded-lg">
        <table class="w-full border-collapse text-sm text-gray-700">
            <tbody>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Situación<br>Inicial
                    </td>
                    <td class="px-5 py-4 space-y-2">
                        <p class="font-semibold text-gray-800">Narrador cumple 90 años</p>
                        <p><strong>Apertura:</strong> desea regalarse una mujer virgen para celebrar su cumpleaños.</p>
                        <p><strong>Realización:</strong> le llama a Rosa Cabarcas y ésta queda en conseguírsela. Después de trabajar, llega al prostíbulo y Rosa lo lleva al cuarto donde se encuentra la niña dormida, producto de un sedante que le dio para calmarle el miedo.</p>
                        <p><strong>Cierre:</strong> después de intentar despertarla, decide quedarse dormido al lado de la muchacha.</p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300 bg-amber-50">
                    <td colspan="2" class="px-5 py-4 text-gray-700 italic">
                        <p>Como puedes observar, la primera secuencia (situación inicial) empieza con un deseo (apertura), seguida de todos los pasos que lleva a cabo para lograr el cumplimiento de ese deseo (realización) y, este intento, termina en un fracaso, dado que el deseo no se realiza (cierre).</p>
                        <p class="mt-2">La perturbación en esta historia se da a partir de que el personaje se enamora &mdash;por primera vez en su vida&mdash; de Delgadina.</p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Perturbación
                    </td>
                    <td class="px-5 py-4 space-y-2">
                        <p class="font-semibold text-gray-800">Narrador se enamora de Delgadina</p>
                        <p><strong>Apertura:</strong> narrador desea volver a ver a Delgadina, pero no tiene noticias suyas.</p>
                        <p><strong>Realización:</strong> busca desesperadamente a Delgadina hasta en su trabajo como costurera.</p>
                        <p><strong>Cierre:</strong> narrador vuelve a encontrar a Delgadina.</p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Transformación
                    </td>
                    <td class="px-5 py-4 space-y-2">
                        <p class="font-semibold text-gray-800">Narrador ya no dedica su tiempo libre al disfrute de la música, sino a Delgadina.</p>
                        <p><strong>Apertura:</strong> quiere pasar todo su tiempo con Delgadina.</p>
                        <p><strong>Realización:</strong> la visita cada noche.</p>
                        <p><strong>Cierre:</strong> se da un escándalo en la casa de citas por el asesinato de J. B., quien es el banquero del buen vestir.</p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Resolución
                    </td>
                    <td class="px-5 py-4 space-y-2">
                        <p class="font-semibold text-gray-800">Narrador se entera que Delgadina ya no es virgen.</p>
                        <p><strong>Apertura:</strong> narrador desea vengarse porque está atormentado por los celos al enterarse que Rosa vendió la virginidad de Delgadina.</p>
                        <p><strong>Realización:</strong> narrador hace un desorden en la casa de citas.</p>
                        <p><strong>Cierre:</strong> narrador decide no volver a ver a Delgadina.</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Situación<br>Final
                    </td>
                    <td class="px-5 py-4 space-y-2">
                        <p class="font-semibold text-gray-800">Narrador reconoce su necesidad por Delgadina</p>
                        <p><strong>Apertura:</strong> narrador siente un enorme deseo de volver a ver a Delgadina.</p>
                        <p><strong>Realización:</strong> narrador busca a Delgadina.</p>
                        <p><strong>Cierre:</strong> a su edad el narrador está más vivo que nunca porque está enamorado.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>