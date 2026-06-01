<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Mundo ficticio</h2>

    <div class="flex justify-center mt-4 mb-6">
        <div class="w-2/3">
            <?php
            renderImage(
                'tlriid2-u4t3p1img1.webp'
            );
            ?>
        </div>
    </div>

    <p>Al comenzar esta unidad planteamos que una novela crea un mundo ficticio donde se desarrolla la historia. Pues bien, la creación de ese mundo no se limita a la invención de conflictos y de personajes. La historia pasa en un <strong>tiempo</strong> y <strong>espacio</strong> determinados. Éstos son dos elementos que no debes perder de vista cuando realices el análisis de una novela, ya que por un lado sirven para dar verosimilitud a la obra leída y por el otro resultan fundamentales para comprender la intención estética del autor.</p>

    <h3>Espacio</h3>
    <p>Dentro de la historia, se entiende como <strong>espacio</strong> al lugar físico donde ocurren los acontecimientos que se narran. Tiene gran importancia en el texto literario, dado que impacta a los personajes, y en consecuencia, al desarrollo de la historia. Por lo general, el espacio de una novela tiene también un <strong>valor simbólico</strong>. Puede representar pobreza, encarcelamiento, anhelos, etcétera.</p>

    <h3>Tiempo</h3>
    <p>Cuando se habla del <strong>tiempo</strong> de la historia, nos referimos a su dimensión cronológica. Es decir, al tiempo de los acontecimientos narrados. Éste se mide en unidades también cronológicas: minutos, horas, días, meses, años.</p>

    <h3>Relaciones Espacio-Temporales</h3>
    <p>Como buenos lectores de novelas, no debemos perder de vista las relaciones que la historia nos va planteando entre el tiempo, el espacio, y el transcurrir de los acontecimientos. Esta triangulación nos servirá para enriquecer nuestra lectura y comprender más profundamente la historia.</p>

    <h3>Análisis del espacio y el tiempo en <em>San Manuel Bueno, mártir</em></h3>
    <p>En esta sección te invitamos a que realices, junto con nosotros, el análisis del tiempo y el espacio utilizado en <em>San Manuel Bueno, mártir</em> de Miguel de Unamuno. Al concluirlo pretendemos que logres, no sólo distinguir cómo su uso apoya la verosimilitud del mundo ficticio, sino que proporciona elementos para lograr una interpretación más profunda del texto literario.</p>

    <h4>El espacio</h4>
    <p>Lo primero que debemos hacer, es localizar dónde sucede la narración:</p>

    <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-3 my-4 text-gray-700 not-italic text-sm">
        &ldquo;&hellip;volvía a mi Valverde de Lucerna. Ya toda ella era Don Manuel; Don Manuel con el lago y con la Montaña.&rdquo;
    </blockquote>

    <p>Ángela nos sitúa en el lugar donde sucederán los acontecimientos: <strong>Valverde de Lucerna</strong>. Aún más, nos proporciona información acerca de este lugar: cuenta con un lago y una montaña.</p>
    <p>También sabemos que Valverde de Lucerna es una aldea, puesto que Ángela nos dice:</p>

    <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-3 my-4 text-gray-700 not-italic text-sm">
        &ldquo;&hellip;En el colegio conocí a niñas de la ciudad e intimé con algunas de ellas. Pero seguía atenta a las cosas y a las gentes de nuestra aldea, de la que recibía frecuentes noticias y tal vez alguna visita.&rdquo;
    </blockquote>

    <p>Así pues, la historia se desarrolla en una aldea llamada Valverde de Lucerna, donde existe un lago y una montaña. La importancia de estos dos elementos como parte del paisaje de la aldea es evidente, dado que Ángela constantemente los menciona en su confesión. La repetición nos invita a preguntarnos el porqué de su importancia. Analicemos qué es lo que sucede en el lago y la montaña de Valverde de Lucerna.</p>

    <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-3 my-4 text-gray-700 not-italic text-sm">
        En la noche de San Juan, la más breve del año, solían y suelen acudir a nuestro lago todas las pobres mujerucas, y no pocos hombrecillos, que se creen poseídos, endemoniados, y que parece no son sino histéricos y a las veces epilépticos, y Don Manuel emprendió la tarea de hacer él del lago, de piscina probática, y tratar de aliviarles y si era posible de curarles.[&hellip;] consiguió curaciones sorprendentes.
    </blockquote>

    <p>Como puedes observar, éste no es un lago cualquiera. El lago cobra mayor importancia por ser el sitio donde suceden los milagros, o por lo menos, donde se cree que el padre Manuel logra hacer curaciones que los feligreses catalogan como milagrosas.</p>

    <p>Cuando Ángela tiene que ir de visita a la ciudad nos cuenta:</p>

    <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-3 my-4 text-gray-700 not-italic text-sm">
        Fui unos días invitada por una compañera del colegio a la ciudad tuve que volverme, pues en la ciudad me ahogaba, me faltaba algo, sentía sed de la vista de las aguas del lago, hambre de la vista de las peñas de la montaña; sentía, sobre todo, la falta de mi Don Manuel, y como si su ausencia me llamara&hellip;
    </blockquote>

    <p>En esta cita podemos observar más claramente que el lago y la montaña son elementos que están intrínsecamente relacionados con Don Manuel. Podemos concluir, pues, que el espacio tiene dos funciones dentro de la historia. En el lado más literal, se encuentra la Aldea de Valverde de Lucerna, siendo un pequeño pueblo, alejado de la ciudad, donde la gente tiene creencias más arraigadas y hasta cierto punto una inocencia frente a la vida.</p>

    <p>Por lo que sucede en Valverde de Lucerna, el espacio es al mismo tiempo un lugar espiritual. Es el espacio que don Manuel utiliza para aliviar a los demás, al tiempo que trata de salvar su alma. El lago y la montaña unen dos planos: a la naturaleza, por representar el origen de la vida, y el mundo espiritual de don Manuel y en cierta medida el de los habitantes de Valverde de Lucerna.</p>

    <h4>El tiempo</h4>
    <p>Después de haber analizado la importancia del espacio, debemos tomar nota del tiempo de la narración. Ángela escribe esta confesión siendo ya mayor de cincuenta años y nos cuenta que Don Manuel llegó a su pueblo cuando ella era todavía una niña, antes de irse a estudiar a la ciudad. Así pues, podemos concluir que la historia principal sucede hace poco más de cuarenta años.</p>

    <p>Este largo periodo se encuentra resumido en unas cuartillas, puesto que sería imposible relatar cada acontecimiento sucedido en tiempo real. Lo que leemos son los acontecimientos más importantes que ocurrieron en este periodo de tiempo.</p>

    <p>Para lograr un análisis exitoso del uso del tiempo lo primero que se debe observar son los cambios que se generaron en los personajes durante su transcurso. La historia principal puede dividirse en estos tres momentos:</p>

    <div class="overflow-x-auto my-6 border border-gray-300 rounded-lg">
        <table class="w-full border-collapse text-sm text-gray-700">
            <thead>
                <tr>
                    <th class="bg-slate-700 text-white font-bold text-center px-4 py-3 border-r border-slate-500 w-1/3">1er. momento</th>
                    <th class="bg-slate-700 text-white font-bold text-center px-4 py-3 border-r border-slate-500 w-1/3">2do. momento</th>
                    <th class="bg-slate-700 text-white font-bold text-center px-4 py-3 w-1/3">3er. momento</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-top">
                    <td class="px-4 py-4 border-r border-gray-200 space-y-3">
                        <p>Ángela es una niña y admira como a un padre a don Manuel.</p>
                        <p>Don Manuel llega al pueblo y comienza a ser visto por éste como un santo gracias a las acciones que realiza.</p>
                        <p>Lázaro vive en América y considera que la iglesia provoca la enajenación.</p>
                    </td>
                    <td class="px-4 py-4 border-r border-gray-200 space-y-3">
                        <p>Ángela dedica su juventud a ayudar a don Manuel a hacer el bien en Valverde de Lucerna. Se siente de alguna manera como su madre y sólo piensa en hacer menos ardua su tarea.</p>
                        <p>Don Manuel se empeña en lograr su &ldquo;salvación&rdquo; a través de la salvación del pueblo.</p>
                        <p>Lázaro regresa a su pueblo y, para salvar a su hermana del error que piensa ésta comete, decide hablar con don Manuel.</p>
                    </td>
                    <td class="px-4 py-4 space-y-3">
                        <p>Después de su decepción, Ángela comienza a comprender al padre Manuel y su admiración hacia él crece.</p>
                        <p>Don Manuel se ve obligado a confesar tanto a Lázaro como a Ángela su falta de Fe. Sigue trabajando en ayudar a los demás hasta que muere.</p>
                        <p>Lázaro reconoce el valor y la bondad de don Manuel y decide ayudarlo a cumplir con el cometido que se ha propuesto.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p>Como podrás observar, desde que Don Manuel llega al pueblo y hasta que muere, busca lo mismo. Es decir, se trata de un personaje cuyo objetivo es tan grande que no cambia ni con el paso del tiempo. Lázaro sufre varios cambios. El más evidente es el cambio de residencia, ya que regresa de América hasta su natal Valverde de Lucerna. El cambio más importante que sufre este personaje es el ideológico. Con más madurez es capaz de percatarse del vacío que sus ideas progresistas le dejaban y se empapa del mundo espiritual que representa don Manuel.</p>

    <p>A lo largo de la novela, Ángela es el personaje que sufre más transformaciones. En un inicio era una niña que admiraba y se divertía con el nuevo párroco. Después se transforma en una joven que asume un rol casi maternal hacia don Manuel. Este rol cambia cuando él se confiesa ante ella.</p>

    <p>El espacio y el tiempo en una narración son de suma importancia y tienen un valor trascendental en la creación del mundo ficticio.</p>

    <p>Cada texto literario maneja estos elementos de forma distinta. En ocasiones, la transformación del espacio evidencia la sufrida por los personajes. También puede pasar lo contrario, es decir, que lo estático del espacio represente el interior inamovible de los personajes.</p>

    <p>Lo mismo sucede con el tiempo. A veces, a través del transcurso de los años, los personajes sufren cambios importantes debido a su madurez. En otras, el paso del tiempo puede no afectarles, lo cual nos indicará su escasa adaptabilidad a las nuevas circunstancias.</p>

    <p>Como lector de novelas te invitamos a no pasar por alto los espacios, ni el tiempo en donde se desarrollan las historias. Sé curioso y busca su significado. Haciéndolo, descubrirás el mundo fascinante de la literatura y la verás con nuevos ojos.</p>

    <p class="font-semibold mt-6">Recuerda que puedes leer la novela completa descargándola desde el sitio web del CCH.</p>
    <p class="font-semibold">Recurso gratuito: PDF Miguel de Unamuno &ldquo;San Manuel Bueno, mártir&rdquo;</p>
    <div class="flex justify-center my-4">
        <a href="https://www.cch.unam.mx/sites/default/files/SanManuelBuenoMartir.pdf" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v2a2 2 0 002 2h14a2 2 0 002-2v-2M16 6l-4-4-4 4" />
            </svg>
            Descargar PDF
        </a>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
