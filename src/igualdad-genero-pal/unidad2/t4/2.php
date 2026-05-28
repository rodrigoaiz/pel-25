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
    <h2>Foro Construyendo Comunidad: Propuestas para un Entorno Respetuoso</h2>
    <p>La convivencia escolar es un pilar fundamental para el desarrollo integral de nuestra comunidad en el CCH. Un entorno donde prevalece el <strong>respeto</strong>, la <strong>empatía</strong> y la <strong>colaboración</strong> no solo facilita el aprendizaje, sino que también nos prepara para ser ciudadanos responsables y comprometidos. En el siguiente foro, te invitamos a reflexionar sobre cómo, día a día, construimos juntos una sana convivencia y qué acciones e instancias en nuestra escuela contribuyen a fortalecerla.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga10-img02.webp');
        ?>
    </div>

    <p class="font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las acciones que promueven la sana convivencia del entorno escolar.</p>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Antes de comenzar a escribir, dedica 30 minutos a una lectura rápida y enfocada de los siguientes materiales. No leas todo en detalle; toma notas de los conceptos clave que usarás después:
            <ul class="ul-disc ml-10">
                <li>Texto sugerido: <a href="<?php echo PATH_DOCS . 'u2t10-lectura_NoTodosLosHombresComoHagoParaSerUnVatoEnDeconstruccion.pdf'; ?>" target="_blank">"No todos los hombres..." (nuevas masculinidades)</a></li>
                <li>Texto: <a href="<?php echo PATH_DOCS . 'u2t10-lectura_SororidadQueEsEso.pdf'; ?>" target="_blank">"Sororidad ¿qué es eso?"</a></li>
                <li><a href="<?php echo PATH_DOCS . 'u2t10-lectura_CartillaLGBTIQmas.pdf'; ?>" target="_blank">Cartilla LGBTIQ+</a></li>
                <li>Código de Ética y Equidad de Género para Estudiantes del CCH (2025)</li>
            </ul>
        </li>
        <li>Realiza una aportación inicial en el foro <strong>Construyendo Comunidad: Propuestas para un Entorno Respetuoso</strong>, responde <strong>SOLO 2</strong> de las siguientes 4 preguntas (elige las que más te sirvan para tu propuesta final):
            <ul class="ul-disc ml-10">
                <li><strong>Pregunta 1:</strong> Escribe una acción concreta que realiza tu plantel para fomentar el respeto a la inclusión. Describe una acción que propones al plantel para la atención de los casos de violencia, discriminación y exclusión.</li>
                <li><strong>Pregunta 2:</strong> En las clases o interacción con mis compañeros, he observado conductas masculinizadas donde algunos compañeros (hombres) tienden a dominar. Enlista estas conductas masculinizadas; asimismo, para cada conducta que identifiques, plantea una alternativa concreta basada en los principios de las nuevas masculinidades.</li>
                <li><strong>Pregunta 3:</strong> Describe una acción donde se visibilice la sororidad en el Colegio y enlista acciones para poder fomentarla en las comunidades del Plantel.</li>
                <li><strong>Pregunta 4:</strong> Identifica y enlista las buenas prácticas que ya se aplican. Además, menciona sugerencias de prácticas que se deben mejorar en la comunidad.</li>
            </ul>
        </li>
        <li>Lee las respuestas de al menos un o una compañer@. Selecciona <strong>UNA</strong> de sus publicaciones y coméntala aportando:
            <ul class="ul-disc ml-10">
                <li>Un ejemplo adicional que enriquezca su idea, o</li>
                <li>Un punto de vista complementario, o</li>
                <li>Una pregunta para profundizar el diálogo.</li>
            </ul>
        </li>
        <li>Una vez concluida tu actividad, completa esta tabla de manera <strong>HONESTA</strong>. Es tu guía para evaluar tu propio desempeño. <strong>DEBES incluirla al final de tu archivo PDF.</strong>
            <div class="overflow-x-auto my-4">
                <table class="w-full border-collapse border border-gray-400 text-sm">
                    <thead>
                        <tr class="bg-fuchsia-900 text-white">
                            <th class="border border-gray-400 p-2 text-left">CRITERIO</th>
                            <th class="border border-gray-400 p-2 text-center">PUNTUACIÓN (1–5)</th>
                            <th class="border border-gray-400 p-2 text-left">EVIDENCIA O JUSTIFICACIÓN BREVE (1 línea)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2">1. Claridad y Concreción</td>
                            <td class="border border-gray-400 p-2 text-center">Selecciona: 1–5</td>
                            <td class="border border-gray-400 p-2">¿En qué parte de tu participación se ve esto?</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2">2. Profundidad en el Análisis</td>
                            <td class="border border-gray-400 p-2 text-center">Selecciona: 1–5</td>
                            <td class="border border-gray-400 p-2">¿Cómo vinculaste conceptos con tu contexto?</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold">PUNTUACIÓN TOTAL</td>
                            <td class="border border-gray-400 p-2 text-center font-bold">/10</td>
                            <td class="border border-gray-400 p-2">Suma tus dos puntuaciones</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2 font-bold">COMENTARIO FINAL</td>
                            <td class="border border-gray-400 p-2" colspan="2">¿Qué aprendiste en esta parte? (1 línea)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
        <li>Compila en un solo archivo PDF:
            <ul class="ul-disc ml-10">
                <li>Tus respuestas del foro (las 2 preguntas).</li>
                <li>Tu retroalimentación a un o una compañer@.</li>
                <li>Tu tabla de autoevaluación completa. 
            Nombra el archivo: <strong>Nombre_Apellido_ForoAutoevaluado.pdf</strong> y sube tu documento a la tarea designada en la plataforma.</li>
            </ul>
        </li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a1', "Foro: Construyendo Comunidad", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a2', "Sube aquí tu archivo PDF", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
