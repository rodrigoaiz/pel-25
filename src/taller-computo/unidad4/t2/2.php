<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Edición de sonido</h3>
    <p>En esta sección, nos enfocaremos en comprender los conceptos clave relacionados con el <span class="text-pink-600 font-bold">software de edición de sonido</span>, recomendamos a los estudiantes seleccionar el contenido específico para leer cada uno de los conceptos, lo que les permitirá explorar sus definiciones, características, ejemplos y, en particular, las funciones relacionadas con el <span class="text-pink-600 font-bold italic">software Audacity</span>.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'El software de edición de audio',
            'content' => 'Permite la grabación, edición y mezcla de múltiples pistas de audio de forma independiente, esto es esencial para la producción musical y la postproducción de audio, en nuestro caso lo veremos para el desarrollo de <u>materiales de audio educativos</u>, en la cual, puedas explicar algún tema académico de otras materias.'
        ],
        [
            'title' => 'Ejemplos de Software de Edición de Sonido Populares para la Educación',
            'content' => '<p class="italic">GarageBand </p>Es una aplicación de software
                                                        de creación musical desarrollada por Apple Inc. que se puede
                                                        utilizar en entornos educativos, está diseñada para ayudar a
                                                        estudiantes y profesores a crear, grabar y producir materiales
                                                        audiovisuales de manera sencilla y accesible,
                                                        <em>GarageBand</em> es conocido por su interfaz intuitiva y sus
                                                        herramientas que permiten a estudiantes a crear podcast sin
                                                        necesidad de ser expertos en el campo.
                                                        <p class="italic">Adobe Audition </p>Es un software de pago,
                                                        diseñado para profesionales de audio, productores y editores de
                                                        sonido en el ámbito educativo, proporciona herramientas
                                                        avanzadas para la grabación, edición, mezcla y restauración de
                                                        audio en contextos educativos, Adobe <em>Audition</em> se
                                                        utiliza ampliamente en la industria del sonido y en programas
                                                        académicos de producción de podcast y contenido multimedia en el
                                                        ámbito educativo.
                                                        <p class="italic">Audacity </p> Es una aplicación de software
                                                        libre ampliamente utilizada en el ámbito educativo, se destaca
                                                        por su interfaz intuitiva y sus herramientas que hacen que la
                                                        creación, grabación y producción de podcast y otros proyectos de
                                                        sonido sean accesibles para estudiantes y profesores en el
                                                        ámbito educativo. Esta aplicación es compatible con plataformas
                                                        como Windows, macOS y Linux.
                                                        <p class="italic">Podcast:</p>Es un contenido digital de audio
                                                        que los estudiantes pueden acceder en línea, ofrece beneficios
                                                        como la flexibilidad de acceso, diversidad de contenido,
                                                        autonomía del estudiante, refuerzo del aprendizaje, desarrollo
                                                        de habilidades auditivas, fomento de habilidades de expresión
                                                        oral, participación activa y actualización constante sobre temas
                                                        académicos y de interés, los podcasts en educación son una
                                                        herramienta versátil que enriquece el proceso de enseñanza y
                                                        aprendizaje.'
        ],
        [
            'title' => 'Audacity',
            'content' => '<p><em>Para este apartado, retomaremos el programa
                                                                de edición de sonido de Audacity, por ser un programa
                                                                gratuito, de código libre y con facilidades de grabación
                                                                de sonido.</em></p>
                                                        <p>Como se mencionó anteriormente, es un software de edición de
                                                                audio gratuito y de código abierto (esto significa que
                                                                su código fuente es gratuito y puede ser modificado por
                                                                la comunidad de usuarios y desarrolladores), además,
                                                                permite grabar, editar y mejorar sonidos y pistas de
                                                                audio, es una herramienta versátil para trabajar con
                                                                archivos de audio en computadoras.</p>'
        ],
        [
            'title' => 'Características Técnicas',
            'content' => '<ul class="disc">
                                                                <li>Interfaz de usuario sencilla y fácil de entender,
                                                                        ideal para principiantes.</li>
                                                                <li>Permite grabar audio desde micrófonos y audífonos
                                                                        con conectores de micrófono y audio.</li>
                                                                <li>Ofrece funciones de edición, como cortar, copiar,
                                                                        pegar y ajustar el volumen.</li>
                                                                <li>Soporta una variedad de formatos de archivo de
                                                                        audio, como MP3, WAV y Ogg, entre muchos más.
                                                                </li>
                                                                <li>Proporciona efectos de sonido preestablecidos y
                                                                        permite la creación de efectos personalizados.
                                                                </li>
                                                                <li>Ofrece herramientas para eliminar ruidos no deseados
                                                                        de las grabaciones.</li>
                                                                <li>Permite la exportación de proyectos de audio
                                                                        terminados en diferentes formatos.</li>
                                                        </ul>'
        ],
        [
            'title' => 'Ventajas',
            'content' => '<ul class="disc">
                                                                <li>Gratuito y de código abierto.</li>
                                                                <li>Interfaz intuitiva y fácil de usar, ideal para
                                                                        principiantes en edición de audio.</li>
                                                                <li>Amplia compatibilidad con formatos de archivo de
                                                                        audio comunes.</li>
                                                                <li>Ofrece una variedad de efectos y herramientas de
                                                                        edición para mejorar el audio.</li>
                                                                <li>Soporte activo de la comunidad y tutoriales en línea
                                                                        disponibles.</li>
                                                        </ul>'
        ],
        [
            'title' => 'Desventajas',
            'content' => '<ul class="disc">
                                                                <li>La interfaz puede parecer menos sofisticada en
                                                                        comparación con software de pago.</li>
                                                                <li>Algunas características pueden ser menos intuitivas
                                                                        para usuarios completamente nuevos en la edición
                                                                        de audio.</li>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="font-bold">Ambiente de trabajo del programa <em>Audacity</em></p>
    <?php ob_start(); ?>
    <p>Veamos los siguientes elementos que componen el programa de <em>Audacity</em></p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a7', "Ambiente de trabajo de Audacity", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>