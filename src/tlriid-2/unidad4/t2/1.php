<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Personajes</h2>

    <div class="flex justify-center mt-4 mb-6">
        <div class="w-2/3">
            <?php
            renderImage(
                'tlriid2-u4t2p1img1.webp',
                'Personas deprimidas con máscaras ocultando emociones [ilustración]. Freepik.',
                'https://www.freepik.es/vector-gratis/personas-deprimidas-mascarillas-ocultando-emociones_9649345.htm',
                'Fuente: Freepik'
            );
            ?>
        </div>
    </div>

    <p>Seguramente ya has escuchado el término <strong>personaje</strong> muchas veces, y tienes una idea de lo que significa. En la novela, los vamos a definir como los <strong>sujetos de las acciones de la historia</strong>. Es decir, son los que realizan, y a los que les suceden los acontecimientos.</p>

    <p>Los personajes son generalmente parecidos a los humanos, también pueden ser animales u objetos. Es importante destacar que sin importar lo que sean, los personajes literarios siempre van a representar <strong>valores humanos</strong>, con los cuales se busca que el lector se identifique.</p>

    <p>A los personajes se les conoce por lo que el narrador nos dice de ellos, por lo que los mismos personajes dicen de sí mismos y por lo que otros personajes dicen de ellos. No todas las características de los personajes nos son proporcionadas de manera directa a través de la narración. Hay características o atributos que como lectores deducimos que poseen, gracias a las acciones que realizan.</p>

    <p>De manera general, podemos analizar tres aspectos principales que constituyen a los personajes y los vuelven verosímiles en su mundo ficticio: <strong>características físicas</strong>, <strong>características ideológicas</strong> y <strong>características psicológicas</strong>.</p>

    <h3>Características Físicas</h3>
    <p>Son aquellas que, como su nombre lo indica, nos muestran <strong>cómo es físicamente el personaje</strong>. Si bien es cierto que la narración nos proporcionará sólo las características físicas que sirven para apoyar la verosimilitud de la historia del personaje, una novela por su longitud, nos dará gran detalle de este aspecto.</p>

    <h3>Características Ideológicas</h3>
    <p>Antes de analizar qué es la ideología de los personajes, debemos definir lo que se entiende por este término. Según el Diccionario de la Real Academia de la Lengua Española, se entiende por ideología el: <em>&ldquo;conjunto de ideas fundamentales que caracteriza el pensamiento de una persona, colectividad o época, de un movimiento cultural, religioso o político, etcétera.&rdquo;</em> Así pues, para que una novela sea verosímil, los personajes deberán tener una ideología (forma de pensar) <strong>congruente a la forma en la que han crecido, vivido y se han desarrollado</strong>.</p>

    <h3>Características Psicológicas</h3>
    <p>Algunos críticos hacen una diferencia entre las características psicológicas y las emotivas del personaje. Sin embargo, aquí hemos decidido juntarlas porque consideramos que la psicología, se dedica tanto al estudio de los procesos mentales como al de las emociones. Aquí entran todas las características que nos indican <strong>el porqué del carácter y emociones del personaje</strong>.</p>

    <p>A pesar de que en esta unidad estamos trabajando con la novela, hemos decidido incluir un cuento para que conozcas todo lo que el narrador nos dice del personaje. Te hemos señalado en <strong>negritas</strong> las palabras o frases que nos ayudan a conocerlos físicamente, te <u>subrayamos</u> las que nos sirven para conocer su ideología, y en <em>cursivas</em> las que nos permiten observar cuáles son sus características psicológicas.</p>

    <div class="flex flex-col md:flex-row gap-6 items-start my-6">
        <div class="md:w-1/4">
            <?php
            renderImage('tlriid2-u4t2p1img2.webp', 'Juan José Arreola [fotografía]. Wikimedia Commons.', 'https://commons.wikimedia.org/wiki/File:Juan_Jos%C3%A9_Arreola.jpg', 'Fuente: Wikimedia');
            ?>
        </div>
        <div class="md:w-3/4">
            <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-4 text-gray-700 not-italic">
                <p class="font-bold text-violet-700 mb-1">Una de dos"</p>
                <p class="text-sm text-gray-500 mb-3">Juan José Arreola</p>
                <p>Yo también he luchado con el ángel. <em>Desdichadamente para mí</em>, el ángel era un personaje <strong>fuerte, maduro y repulsivo</strong>, con bata de boxeador.</p>
                <p>Poco antes habíamos estado vomitando, cada uno por su lado, en el cuarto de baño. Porque <u>el banquete, más bien la juerga</u>, fue de lo peor. En casa me esperaba la familia: <u>un pasado remoto</u>.</p>
                <p>Inmediatamente después de su proposición, el hombre comenzó a estrangularme de modo decisivo. La lucha, más bien la defensa, se desarrolló para mí como <em>un rápido y múltiple análisis reflexivo. Calculé en un instante todas las posibilidades de pérdida y salvación, apostando a vida o sueño, dividiéndome entre ceder y morir, aplazando el resultado de aquella operación metafísica y muscular</em>.</p>
                <p>Me desaté por fin de la pesadilla como el ilusionista que deshace sus ligaduras de momia y sale del cofre blindado. Pero llevo todavía en el cuello <strong>las huellas mortales que me dejaron las manos de mi rival</strong>. Y en la conciencia, <em>la certidumbre de que sólo disfruto una tregua, el remordimiento de haber ganado un episodio banal en la batalla irremisiblemente perdida</em><sup>1</sup>.</p>
                <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Juan José, Arreola. <em>Una de dos</em>. p http://www.ciudadseva.com/textos/cuentos/esp/arreola/unadedos.htm</p>
            </blockquote>
        </div>
    </div>

    <p>Como puedes observar, conocemos físicamente al adversario del narrador a través de sus ojos, pues es él quien lo considera: <strong>fuerte, maduro y repulsivo</strong>. También podemos deducir que la corpulencia del narrador debe ser menor a la de su adversario pues nos señala: <em>&ldquo;llevo todavía en el cuello las huellas mortales que me dejaron las manos de mi rival.&rdquo;</em> Asimismo, el narrador nos menciona: &ldquo;ambos habíamos estado vomitando&rdquo;, con lo cual deducimos que, o bien estaban enfermos, o por lo menos su estado físico no era óptimo.</p>

    <p>Las características ideológicas de los personajes resultan menos evidentes. Esto sucede porque no se nos está proporcionando, de manera directa, el contexto en el que se desarrolla la historia. Después de la lectura deducimos que el narrador vive en una estructura social donde existe el concepto de familia, pues así lo menciona. También habla de un banquete, y luego se autocorrige, dándole el nombre de <u>&ldquo;juerga&rdquo;</u> a su experiencia. Es decir, su ideología mantiene una connotación negativa hacia los excesos de comida y bebida.</p>

    <p>Por último, las características psicológicas son las más evidentes y desarrolladas de todo el cuento. Lo que le sucede internamente al personaje, es el suceso en el que se centra esta narración, de ahí que sea la característica más detallada. Después de leer lo señalado en cursivas, podemos darnos cuenta que el narrador es un personaje <em>pesimista, angustiado, reflexivo y que se siente culpable</em>.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>