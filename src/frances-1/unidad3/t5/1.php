<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Présenter un membre de la famille</h2>
    <h3>Producción escrita/oral: presentar a un miembro de mi familia</h3>
    <p>Con lo visto anteriormente, ya tienes las herramientas para poder presentar a un miembro de tu familia, tanto de forma escrita como de forma oral.</p>
    <p>Sin embargo, antes de que te aventures a escribir un pequeño párrafo sobre algún miembro de tu familia, vamos a hacer una pequeña comprensión de lectura:</p>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte suivant et coche Vrai si l’affirmation est vraie ou Faux si l’affirmation est fausse / Lee el texto y selecciona: Verdadero o Falso, según corresponda.</li>
    </ol>
    <div class="bg-pink-600 p-4 my-4 shadow-lg">
        <p class="font-semibold text-white mb-2">Bonjour!</p>
        <p class="text-white text-md">Je m'appelle Marie. Je suis française. J'ai 33 ans et je travaille comme traductrice pour une organisation internationale. J'habite avec mon compagnon. Il s'appelle Samuel. Il a 35 ans et il est avocat. Nous n'avons pas d'enfants, mais nous avons un chien, un cocker spaniel de 3 ans. Il s'appelle Sparky et il aime jouer à la balle et Samuel adore jouer avec Sparky.</p>
        <p class="text-white text-md">Moi, j'ai un frère et une soeur. Mon frère, Gabriel, est plus âgé que moi: Il a 35 ans. Il travaille comme comptable dans une entreprise d'informatique et il adore passer du temps avec sa famille. Il est marié et il a une fille unique. Sa femme s'appelle Corine. Elle est très sympa et très belle. Elle est professeure d'histoire-géographie dans un lycée. Leur fille a 6 ans. Elle s'appelle Sandrine. Elle fait l'école élémentaire. Elle aime aller à l'école car elle aime jouer avec ses petits camarades.</p>
        <p class="text-white text-md">Ma soeur n'est pas mariée et elle n'as pas d'enfants, Elle s'appelle Anne. Elle a 27 ans et elle est vétérinaire. Elle habite chez mes parents. Mes parents sont retraités. Mon père s'appelle André et il a 76 ans. Il aime écouter de la musique classique et manger les gâteaux qui fait ma mère. Ma mère s'appelle Lucille est a 75 ans. Elle adore faire de la pâtisserie pour mon père et regarder des vieux films à la télé.</p>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t5a10', "Compréhension de lecture", $ActividadContent);
    ?>
    <p class="mt-10">Después de haber leído el texto anterior y visto el siguiente video, participa en la actividad de Foro.</p>

    <div class="max-w-xl mx-auto bg-pink-200/80 p-4">
        <?php
        renderVideoIframe('xc4SV62Gs2E', 'Leçon n°5 de français pour débutant: présenter sa famille – communication 5');
        ?>
    </div>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Enregistre une courte vidéo pour présenter toute ta famille / Graba un pequeño video para presentar a toda tu familia.</li>
        <li>Télécharge ta vidéo sur YouTube en choisissant l'option «Masqué» dans les paramètres de confidentialité. Ainsi, seules les personnes disposant du lien pourront la visionner / Sube tu video a YouTube eligiendo la opción "Oculto" en privacidad. Así solo quien tenga el enlace podrá verlo.</li>
        <li>Rédige un petit paragraphe pour présenter un membre de ta famille / Escribe un pequeño párrafo para presentar a un miembro de tu familia.</li>
        <li>Accède au forum et partage ta vidéo et ton paragraphe avec tes camarades de classe. N'oublie pas de lire et de commenter au moins deux publications de tes camarades / Entra al foro y comparte tu video y tu párrafo con tus compañeros de clase. No olvides leer y comentar al menos dos publicaciones de tus compañeros.</li>
        <li>Utilise la liste de vérification (ci-dessous) / Utiliza la lista de cotejo (abajo).</li>
    </ol>
    <div class="w-full mt-4 border-y-2 border-dashed border-purple-300 bg-purple-300/10 relative">
        <div class="text-center text-purple-800 py-2 cursor-pointer" onclick="openModal()">
            ℹ️ Cómo subir un video a YouTube y configurarlo como "Oculto" (Privé / Masqué en francés)
        </div>
    </div>

    <div class="flex justify-center">
        <div class="w-2/3">
            <table class="table-auto w-full">
                <thead class="bg-amber-300/50">
                    <tr>
                        <th colspan="3" class="p-2 border align-middle bg-amber-600 text-amber-50 font-bold text-center">Lista de cotejo</th>
                    </tr>
                    <tr>
                        <th class="p-2 border align-middle text-amber-700 font-bold">Criterio</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😄</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😢</th>
                    </tr>
                </thead>
                <tbody class="bg-amber-300/30">
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">1. Se presenta al familiar de forma clara y concisa, incluyendo su nombre completo.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">2. Se indica la nacionalidad del familiar de forma correcta.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">3. Se indica la edad del familiar de forma correcta.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">4. Se indica el lugar de residencia del familiar de forma clara y precisa, incluyendo ciudad y país.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">5. Se describen los gustos y aficiones del familiar de forma clara y concisa, incluyendo al menos dos ejemplos.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">6. Se indica la profesión del familiar de forma clara y precisa.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">7. Se indica la fecha de nacimiento del familiar de forma completa y precisa (día, mes, año).</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">8. El párrafo tiene una extensión mínima de 35 palabras.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">9. El párrafo está escrito con una gramática y ortografía correctas.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">10. Se utiliza un vocabulario adecuado y variado.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="youtube-modal" class="fixed inset-0 z-50 hidden opacity-0 transition-all duration-300">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50" onclick="closeModal()"></div>

        <!-- Modal Content -->
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="relative bg-white rounded-lg shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto transform scale-95 transition-transform duration-300">
                <!-- Header -->
                <div class="flex justify-between items-center p-6 border-b border-gray-200">
                    <div class="text-xl font-bold text-purple-800 flex items-center">
                        📹 Cómo subir un video a YouTube y ponerlo como "Oculto"
                    </div>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 text-2xl font-bold">
                        ×
                    </button>
                </div>

                <!-- Body -->
                <div class="p-6">
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <ol class="list-decimal list-inside space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="mr-2">1.</span>
                                <span>Ve a <strong class="text-purple-700">YouTube</strong> e inicia sesión con tu cuenta de Google.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">2.</span>
                                <span>Haz clic en el ícono de la <strong class="text-purple-700">cámara con un "+"</strong> (arriba a la derecha).</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">3.</span>
                                <span>Selecciona <strong class="text-purple-700">"Subir video"</strong> y elige tu archivo.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">4.</span>
                                <span>Mientras se carga, en <strong class="text-purple-700">"Privacidad"</strong>, selecciona la opción: <strong class="text-red-600">"Oculto"</strong> (no público ni privado).</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">5.</span>
                                <span>Completa el título y descripción si lo deseas, luego haz clic en <strong class="text-purple-700">"Publicar"</strong>.</span>
                            </li>
                            <li class="flex items-startfont-semibold">
                                <span class="mr-2">6.</span>
                                <span>¡Listo! Solo quienes tengan el enlace podrán ver el video.</span>
                            </li>
                        </ol>

                        <div class="mt-6 p-4 bg-blue-50 rounded-lg border-l-4 border-blue-400">
                            <div class="flex items-center">
                                <span class="text-2xl mr-3">🔗</span>
                                <div>
                                    <p class="font-semibold text-blue-800">Paso final:</p>
                                    <p class="text-blue-700">Comparte el enlace directo con tu profesor o en el foro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="flex justify-end p-6 border-t border-gray-200">
                    <button onclick="closeModal()" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg transition-colors duration-200">
                        Entendido
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            const modal = document.getElementById('youtube-modal');
            const content = modal.querySelector('.transform');

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevenir scroll del body

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                content.classList.remove('scale-95');
                content.classList.add('scale-100');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('youtube-modal');
            const content = modal.querySelector('.transform');

            modal.classList.add('opacity-0');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');
            document.body.style.overflow = ''; // Restaurar scroll del body

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Cerrar modal con tecla Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>
    <?php ob_start(); ?>
    <p>Participa en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t5a11', "Forum | Je présente ma famille", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>