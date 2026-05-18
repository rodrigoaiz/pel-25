<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Como habrás observado, la caracterización de los personajes no es siempre la misma. Cada narración cuenta de los personajes lo necesario para que resulte verosímil, al tiempo que sea coherente con la historia.</p>

    <p>Las caracterizaciones de los personajes siempre van en función de lo que se pretende lograr con el relato, por ende no existe una regla de todo lo que se nos debe contar a los lectores.</p>

    <p>Para concluir este aprendizaje, te invitamos a que reflexiones acerca de por qué las características físicas del narrador de <em>Memoria de mis Putas tristes</em> tenían tanta importancia, siendo que en el caso de <em>Metamorfosis</em> las psicológicas sobresalen y en <em>San Manuel Bueno, mártir</em> tienen más impacto las ideológicas.</p>

    <h2>Conflictos y valores de los personajes</h2>

    <p>Uno de los elementos que vuelve atractiva la lectura de novelas, es la problemática que se da entre los personajes y los conflictos que se originan por sus diferencias. Como lectores de novelas, deseamos enterarnos de cómo es que los personajes resuelven los conflictos a los que se enfrentan.</p>

    <p>Los personajes no resuelven sus conflictos de la misma forma en que nosotros lo haríamos. Ellos se conducen respondiendo a su carácter, su ideología y la situación en la que viven. Posiblemente si nosotros estuviéramos en la situación de Gregorio Samsa en <em>La metamorfosis</em>, al percatarnos de nuestra transformación pediríamos, y quizá exigiríamos, visitar a un doctor. Sin embargo, por la personalidad de Gregorio, él no lo hace. Su preocupación principal se centra en estar físicamente imposibilitado para continuar siendo el soporte económico de su familia. Es decir, son sus <strong>valores</strong> los que lo llevan a actuar de la manera en que lo hace, frente a sus conflictos.</p>

    <div class="flex justify-center mt-4 mb-6">
        <div class="w-1/3">
            <?php
            renderImage(
                'tlriid2-u4t2p3img1.webp',
                'La metamorfosis de Franz Kafka [portada]. Wikimedia Commons.',
                'https://commons.wikimedia.org/wiki/File:La_metamorfosis_de_Franz_Kafka.jpg',
                'Fuente: Wikimedia'
            );
            ?>
        </div>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Entra en el foro y elabora una opinión acerca de Gregorio Samsa.</li>
        <li>Esperamos que en tu redacción se vea reflejado todo lo que has analizado del personaje, es decir, su aspecto físico, ideológico, psicológico, el cómo resuelve los conflictos a los que se enfrenta, y lo más importante, por qué crees que lo hace de tal modo.</li>
        <li>Responde al menos a un comentario de tus compañeros de foro argumentando si estás de acuerdo o no con lo que dice.</li>
        <li>Consulta la <a href="<?php echo PATH_DOCS . 'u4t2a5-rubrica-foro-gregorio-samsa.pdf'; ?>" target="_blank">rúbrica</a> con el que se evaluará tu participación. </li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4t2a5', "Foro: Gregorio Samsa", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>