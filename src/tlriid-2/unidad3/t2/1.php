<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura y operaciones de escritura</h2>

    <p>Realiza la lectura del siguiente texto, mientras lo haces, encuentra las respuestas a las preguntas que se encuentran en la columna de la derecha, anótalas en tu cuaderno para elaborar la actividad que se menciona al final del texto.</p>

    <div class="flex justify-center mt-6">
        <div class="w-2/3">
            <?php
            renderImage('tlriid2-u3t2p1img1.webp', 'Calentamiento grupal', 'https://www.gaceta.unam.mx/aun-es-posible-frenar-el-calentamiento-global/', '(octubre, 2025)');
            ?>
        </div>
    </div>
    <div class="my-8">
        <h3 class="text-center text-xl font-bold mb-1">El calentamiento mexicano... y global <sup>1</sup></h3>
        <p class="text-center text-gray-600 mb-2">Antonio Gershenson</p>

        <div class="border border-gray-300 rounded-lg overflow-hidden">

            <div class="grid grid-cols-3 bg-slate-700 text-white">
                <div class="col-span-2 px-5 py-3 font-bold border-r border-slate-500">Texto</div>
                <div class="px-5 py-3 font-bold">Preguntas</div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>En textos anteriores reportamos que disminuía el hielo en el Popocatépetl y el Iztaccíhuatl. La temperatura había subido, en menos de dos décadas, uno o dos grados centígrados. Parece muy poquito, pero con esas moles de hielo los resultados no lo son. El agua adicional que ahora se genera al derretirse más hielo se va a las partes bajas de la zona, aumentando el riesgo de inundación. En otras partes, en cambio, hay escasez de agua. Y en general cambia el clima. En la ciudad de México la temperatura promedio subió, en siete años, cuatro grados centígrados. Y llueve mucho más. Incluso los agrietamientos aumentan con este calentamiento.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700 mb-2">1. ¿Qué ha provocado el aumento de la temperatura en las dos últimas décadas?</p>
                    <p class="text-gray-500 text-sm italic mb-4">R. La disminución del hielo en el Popocatépetl y el Iztaccíhuatl</p>
                    <p class="font-semibold text-sky-700">2. ¿Cuáles son las consecuencias del derretimiento del hielo para la Ciudad de México?</p>
                </div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>Por algo se habla del calentamiento global. No es sólo México, aunque es importante notar que aquí también nos pega. No en balde se hizo hace poco la Consulta Verde, proponiendo medidas al respecto. Pero también a escala mundial ocurre este fenómeno. Frecuentemente se publican noticias procedentes de varios países con informes de un clima fuera de lo común.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">3. ¿En dónde ocurren cambios climáticos?</p>
                </div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>También vimos publicado que el banco de hielo en el hemisferio norte cayó a los niveles más bajos que se han medido, a pesar de que todavía queda un mes de &ldquo;calor&rdquo; suficiente para que se siga derritiendo. También se señala que en años recientes las principales reducciones en el volumen de hielo se concentraban en el Atlántico Norte, el Mar de Bering (frente a Alaska) o el Mar de Beaufort, frente a Canadá. No es casual que esto suceda cerca de América del Norte, donde se producen las mayores emisiones de bióxido de carbono y otros gases con efecto similar (efecto de invernadero). Ahora el efecto ya es generalizado en el océano Ártico y las partes congeladas de sus alrededores.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">4. ¿Por qué América del Norte es una de las zonas con mayor deshielo?</p>
                </div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>Hace pocos meses se publicaron en Estados Unidos datos preocupantes. Durante los últimos 30 años, el hielo del océano Ártico ha llegado a adelgazarse hasta en 40 por ciento. Si siguen los niveles de contaminación, para dentro de 100 años el diámetro del bloque de hielo que está sobre el Ártico se habrá reducido a una tercera parte. Todo esto va generando, por ejemplo, más y mayores huracanes. Y el deshielo causa aumentos en el nivel del mar. Esto irá implicando el retroceso de la tierra firme. Muchos puertos pueden quedar sumergidos en el mar, entre otras cosas.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">5. ¿A largo plazo, cuáles podrían ser algunos efectos de los deshielos?</p>
                </div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>Una parte importante del mundo ya ha tomado medidas para frenar el uso de combustibles que generan gases que contribuyen al calentamiento global. En Europa está en curso todo un cambio en la forma de vida. Por ejemplo, el gran desarrollo de los trenes rápidos (300 kilómetros por hora, aunque hay ya prototipos mucho más rápidos) no sólo desaloja a muchos automóviles y otros transportes terrestres, sino que reduce mucho el uso del avión en recorridos no muy largos. Además, hay mínimos, por ejemplo en Alemania, para las empresas de servicio público de energía eléctrica, de generación con el viento u otros recursos renovables. Y está el Tratado de Kyoto, que establece metas de reducción en la emisión de esos gases.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">6. ¿Cuáles han sido algunas de las medidas mundiales para frenar el calentamiento global?</p>
                </div>
            </div>

            <div class="grid grid-cols-3 border-b border-gray-300">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>Incluso en Estados Unidos, país que no ha suscrito el tratado en cuestión, las dos cámaras legislativas han aprobado leyes con un mínimo de electricidad a ser generada con el viento, el sol u otros recursos renovables. En el caso de la Cámara de Representantes, equivalentes a los que aquí son diputados, para 2020 deberá generarse como mínimo 15 por ciento de la electricidad con fuentes renovables. A pesar de que existen precedentes que muestran que esto es viable, ha habido una gran oposición de las compañías petroleras y gaseras, y el gobierno federal ha amenazado con vetar la ley. Con todo, no sólo votaron a favor de la iniciativa los demócratas, sino 26 republicanos. En Estados Unidos hay otra motivación para reducir el consumo del petróleo, que ha llegado incluso a una parte de la derecha: reducir la dependencia en relación con las importaciones de crudo del Medio Oriente, área inestable que tiene incluso guerras largas como la de Irak, pero también cortas como la del sur de Líbano, e intermitentes como en Palestina.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">7. ¿Qué medidas plantea Estados Unidos para hacer frente al calentamiento global, a pesar de no firmar el Tratado de Kyoto?</p>
                </div>
            </div>

            <div class="grid grid-cols-3">
                <div class="col-span-2 px-5 py-4 border-r border-gray-300 text-gray-700">
                    <p>En México la manía privatizadora de la derecha gobernante impide la planeación de largo plazo, lo cual limita seriamente las posibilidades de un pleno aprovechamiento de los abundantes recursos naturales renovables que tenemos en diferentes lugares del país.</p>
                </div>
                <div class="px-5 py-4 bg-sky-50">
                    <p class="font-semibold text-sky-700">8. ¿Cuál es el problema al que nos enfrentamos en México?</p>
                </div>
            </div>

        </div>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Antonio Gershenson, “El calentamiento mexicano... y global”, en <em>La jornada</em>, México, D.F., 12 de agosto de 2007.
            http://www.jornada.unam.mx/2007/08/12/index.php?section=opinion&article=019a2pol</p>

    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>