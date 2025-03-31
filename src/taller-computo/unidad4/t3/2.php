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
    <h3>Software de Edición de Video</h3>
    <p>En esta sección, nos enfocaremos en comprender los conceptos clave relacionados con el <span class="text-pink-600 font-bold">software de edición de video</span>, le recomendamos a los estudiantes seleccionar el contenido específico para leer cada uno de los conceptos, lo que le permitirá explorar sus definiciones, características, ejemplos y, en particular, las funciones relacionadas con el <em>software Icecream Video Editor</em>.</p>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Software de Edición de Video',
            'content' => '<p>Son programas de aplicación que permiten la manipulación, modificación y creación de contenido de video digital, estas herramientas son fundamentales para la producción de videos, ya que brindan la capacidad de cortar, unir, añadir efectos visuales y de sonido, así como ajustar la calidad y el formato de los videos.</p>
            <p>Los softwares de edición de video son ampliamente utilizados en la industria del cine o de entretenimiento, pero en nuestro caso se utilizará para la producción de contenidos educativos.</p>'
        ],
        [
            'title' => 'Principales Características de un Software de Edición de Video',
            'content' => '<ul class="ul-disc">
                                <li>Efectos Visuales y Transiciones.</li>
                                <li>Edición de Audio.</li>
                                <li>Títulos y Texto.</li>
                                <li>Importación de videos e imágenes.</li>
                                <li>Compatibilidad con Múltiples Formatos.</li>
                                <li>Interfaz de Usuario Amigable.</li>
                                <li>Exportar el video.</li>
                            </ul>'
        ],
        [
            'title' => 'Ejemplos de Software de Edición de Video Populares para la Educación',
            'content' => '<ul class="ul-disc">
                                <li><em>Adobe Premiere Pro (Windows y MAC)</em>: Es una de las herramientas de edición
                                    de video más utilizadas en la industria, ofrece una amplia gama de funciones
                                    avanzadas y es ampliamente utilizado en la educación para la creación de contenido
                                    educativo de alta calidad, es un software propietario de costo.</li>
                                <li><em>Final Cut Pro (MAC)</em>: Es un software de pago y que utiliza herramientas de
                                    edición de video exclusiva para Mac y es ampliamente apreciada por su potencia y
                                    facilidad de uso, es popular en entornos educativos que utilizan dispositivos Mac.
                                </li>
                                <li><em>Icecream Video Editor (Windows y MAC)</em>: Es un software de edición de video
                                    accesible y amigable que es adecuado para principiantes y usuarios intermedios,
                                    ofrece características esenciales para la edición de video y es una opción accesible
                                    para la educación, pero tiene acceso limitado si no se compra la licencia premium.
                                </li>
                            </ul>'
        ],
        [
            'title' => 'Icecream Video Editor para el Desarrollo de Videos Educativos',
            'content' => '<p><em>Definición</em>: Es un software de edición de video que permite a los
                            usuarios editar videos de manera sencilla, es adecuado para crear contenido académico,
                            tutoriales y presentaciones visuales.</p>
                            <p><em>Características Técnicas:</em></p>
                            <ul class="ul-disc">
                                <li>Permite cortar, dividir, unir y rotar videos.</li>
                                <li>Ofrece herramientas para ajustar la velocidad y el brillo de los videos.</li>
                                <li>Proporciona efectos visuales y transiciones básicas.</li>
                                <li>Permite agregar música de fondo y ajustar el audio.</li>
                                <li>Admite múltiples formatos de video y resoluciones.</li>
                                <li>Interfaz de usuario intuitiva y fácil de usar.</li>
                            </ul>
                            <p><em>Ventajas:</em></p>
                            <ul class="ul-disc">
                                <li>Accesible para principiantes.</li>
                                <li>Es un software propietario, pero se puede conseguir en forma gratuita y limitada.
                                </li>
                                <li>Funciones básicas de edición de video para proyectos académicos.</li>
                                <li>Disponible para Windows y MAC.</li>
                                <li>Interfaz de usuario amigable.</li>
                            </ul>
                            <p><em>Desventajas:</em></p>
                            <ul class="ul-disc">
                                <li>No es tan rico en características como algunas alternativas más avanzadas.</li>
                                <li>Para la forma gratuita, es limitado en términos de efectos y animaciones avanzadas.
                                </li>
                                <li>No es la mejor opción para proyectos de edición de video de alta complejidad.</li>
                            </ul>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class="font-bold">Ambiente de trabajo del programa <strong><em>Icecream Video Editor</em></strong></p>
    <?php ob_start(); ?>
    <p>Veamos los siguientes elementos que componen el programa de <em>Icecream Video Editor</em>.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a14', "Ambiente de trabajo de Icecream", $ActividadContent);
    ?>
    <h3 class="mt-[5rem]">Guión de Video Educativo: Conceptos y Lineamientos…</h3>
    <p><span class="text-pink-600 font-bold">Un guión de video</span> es un <span class="text-pink-600 font-bold">documento escrito</span> que sirve como un plan
        detallado <span class="text-pink-600 font-bold">para la creación de un video</span>, este guión incluye descripciones de las
        escenas, diálogos, acciones, transiciones y cualquier otra información necesaria para guiar la
        producción de un video. </p>
    <p>En el <span class="text-pink-600 font-bold">contexto educativo</span>, un guión de video se <span class="text-pink-600 font-bold">utiliza para planificar y
            organizar</span> la producción de material educativo en formato de video, como tutoriales,
        lecciones en línea, demostraciones, documentales educativos y más.</p>
    <h4>A continuación, se presentan algunos lineamientos esenciales para la creación de un guión de video en el
        ámbito educativo:</h4>
    <ol class="ol-number">
        <li><span class="text-pink-600 font-bold">Objetivos de Aprendizaje</span>: Define claramente los aprendizajes que deseas lograr con
            el video. ¿Qué conceptos o habilidades quieres que los usuarios adquieran después de verlo? </li>
        <li><span class="text-pink-600 font-bold">Para qué nivel de usuario va dirigido el video</span>: Considera quiénes serán los
            espectadores, asegurarse de adaptar el lenguaje y el contenido al nivel de comprensión de la
            audiencia.</li>
        <li><span class="text-pink-600 font-bold">Estructura y Contenido</span>: Organiza el guión en una estructura lógica que facilite la
            comprensión, esto puede incluir una introducción, desarrollo y conclusión. </li>
        <li><span class="text-pink-600 font-bold">Diálogos y Narración</span>: Escribe los diálogos que se usarán en el video, asegurarse de
            que los diálogos sean claros, concisos y relevantes para los objetivos de aprendizaje.</li>
        <li><span class="text-pink-600 font-bold">Recursos Visuales</span>: Indica los recursos visuales necesarios, como gráficos,
            imágenes, videos adicionales, o cualquier otro elemento visual que apoye el contenido educativo.
        </li>
        <li><span class="text-pink-600 font-bold">Recursos de Audio</span>: Especifica si se usarán efectos de sonido, música de fondo o
            cualquier otro recurso de audio en el video, asegurarse de que los recursos de audio sean apropiados
            y no distraigan del contenido principal.</li>
        <li><span class="text-pink-600 font-bold">Duración</span>: Define la duración prevista del video. </li>
        <li><span class="text-pink-600 font-bold">Revisión y retroalimentación</span>: Una vez que se haya creado el guión, someterlo a
            revisión por parte de compañeros de tu clase, la retroalimentación puede ayudar a mejorar la calidad
            del contenido.</li>
    </ol>
    <p><span class="text-pink-600 font-bold">Un guión de video</span> bien elaborado es fundamental para la producción de contenido
        educativo efectivo, ayuda a garantizar que el video sea claro, coherente y cumpla con los objetivos de
        aprendizaje previstos, y también facilita el proceso de producción y postproducción del video.</p>
    <div class="lg:grid grid-cols-2 gap-3">
        <p>Ahora, descarga y revisa un <a href="<?php echo PATH_DOCS . 'u4_t3_ejemplo_guion_video.pdf'; ?>" target="_blank">Ejemplo de guion educativo</a>, esto
            te permitirá revisar una muestra concreta de un guión educativo a modo de referencia.</p>
        <p>A continuación, descarga y revisa otro <a href="<?php echo PATH_DOCS . 'u4_t3_formato_guion_video.pdf'; ?>" target="_blank">Ejemplo formato de guion educativo</a>, que puedes utilizar como referencia para ver un caso práctico de un guión.</p>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>