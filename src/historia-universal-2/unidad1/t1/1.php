<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenidas y bienvenidos a la asignatura de Igualdad de Género</h2>
    <p>A finales del s. XIX, la parte occidental del planeta veneraba el progreso. Estaban convencidos de que éstos avances se habían producido gracias a la llamada Segunda Revolución Industrial. La primera había traído los textiles, ferrocarriles, hierro y carbón. En la segunda, el acero, compuestos químicos, electricidad y petróleo que abrieron el camino rumbo a nuevas fronteras industriales.</p>
    <?php
      renderVideoIframe('JmlS2Zf8-is', 'Este es el primer video de la asignatura');
    ?>
    <p>Para saber tus propios conocimientos previos acerca de este tema, por favor responde es siguiente cuestionario. </p>
    <?php
       renderImage('hu2-u1-heyenbrock.webp', 'Imagen de la fábrica de Heidenbrock en 1900', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons.');
    ?>
    <p>El propósito de este cuestionario es evaluar tus conocimientos previos sobre los temas y aprendizajes que adquirirás en la asignatura de Igualdad de Género. Los resultados permitirán a tu docente identificar y atender las necesidades específicas de tu grupo, además de contribuir al seguimiento que el Colegio realiza sobre la asignatura. Para procurar la precisión de los resultados, es importante que completes el examen sin asistencia externa y sin consultar fuentes digitales o impresas. El examen consta de 40 preguntas y su duración estimada es de 25 minutos.</p>
    <p>Motivaciones económicas: Una de las principales razones detrás del colonialismo en el siglo XIX fue la búsqueda de recursos naturales y mercados para las potencias europeas. La Revolución Industrial había generado una creciente demanda de materias primas, como minerales, caucho, y petróleo, así como nuevos lugares para vender productos manufacturados. Las colonias eran vistas como fuentes de riqueza y oportunidades comerciales.</p>
    <ul class="ul-disc">
      <li>Competencia entre las potencias europeas: Durante el siglo XIX, las naciones europeas estaban en una carrera por adquirir colonias en África, Asia y otras partes del mundo. Esta competencia, conocida como la "carrera colonial", se debió en parte a la búsqueda de prestigio y poder, ya que tener un vasto imperio colonial se consideraba un signo de grandeza nacional.</li>
      <li>Avances tecnológicos y militares: Los avances en tecnología, como la navegación, la medicina y las armas de fuego, hicieron que la expansión colonial fuera más factible. Las potencias europeas tenían una ventaja tecnológica sobre las poblaciones indígenas en muchas de las áreas que colonizaron, lo que les permitió establecer su control con relativa facilidad.</li>
      <li>Ideología imperialista y supremacía cultural: Muchos europeos sostenían la creencia en la superioridad de su cultura y creían que tenían la responsabilidad de llevar el "progreso" a las sociedades consideradas menos avanzadas. Esta ideología imperialista justificó la expansión colonial y la imposición de normas europeas en las colonias.</li>
      <li>Factores políticos y estratégicos: El control de rutas comerciales y de posiciones estratégicas en el mapa mundial también fue un motivo importante para la expansión colonial. Los imperios coloniales permitieron a las potencias europeas establecer bases militares y asegurar sus intereses políticos en diferentes regiones del mundo.</li>
    </ul>
    <ol class="ol-number">
      <li>Guerra de movimientos. De Julio a Diciembre de 1914. En esta etapa, los alemanes se movilizaron conforme al Plan Schlieffen (Guerra Relámpago, enfocada a la derrota de Francia en el frente Occidental para combatir posteriormente a Rusia). Asimismo, los dos sistemas de alianzas sostienen negociaciones con los países neutrales, para atraerlos a sus respectivos bandos. En esta fase, los alemanes violaron la neutralidad de Bélgica para ingresar a territorio francés, pero su avance fue detenido a partir de la Batalla del Marne (septiembre de 1914) y se replegaron hacia el Norte, estableciendo un frente estático. El Plan Schlieffen para lograr una victoria rápida de la Triple Alianza había fracasado.</li>
      <li>Guerra de Posiciones (trincheras) y estancamiento político, de enero de 1915 hasta fines de 1916. Los combates en el Frente Occidental se eternizaron en las trincheras; cualquier intento por ganar terreno al adversario tenía un alto costo en vidas humanas. Ejemplo de ello son los combates de Verdún y del Somme. Los alemanes optaron por llevar la batalla al mar, encaminando una guerra submarina; hundieron un barco británico -el Lusitania- que transportaba casi un centenar de ciudadanos norteamericanos en mayo de 1915. Posteriormente, el buque Sussex en marzo de 1916. Esta guerra submarina afectaba los intereses de Estados Unidos, pues ellos suministraban bienes e insumos de guerra a Inglaterra y Francia. La batalla submarina pretendía cortar esa línea de abastecimiento.</li>
      <li>En el Frente Oriental, Rusia combatía simultáneamente (sin mucho éxito) a Austrohungría y Alemania. Este estancamiento, y la duración de la guerra, empieza a provocar cada vez más sufrimiento e inconformidad en la población rusa en general; el descontento por la forma en que es conducida la guerra iba en aumento, y ello tendría sus propias consecuencias (como verás más adelante).</li>
    </ol>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Masculinidad hegemónica',
            'content' => '<p>En el Frente Oriental, Rusia combatía simultáneamente (sin mucho éxito) a Austrohungría y Alemania. Este estancamiento, y la duración de la guerra, empieza a provocar cada vez más sufrimiento e inconformidad en la población rusa en general; el descontento por la forma en que es conducida la guerra iba en aumento, y ello tendría sus propias consecuencias (como verás más adelante).</p><p>Contenido 1</p>'
        ],
        [
            'title' => 'Masculinidad tradicional',
            'content' => 'asd2'
        ],
        [
            'title' => 'Masculinidad dominante',
            'content' => 'asd3'
        ],
        [
            'title' => 'Masculinidades alternativas',
            'content' => 'asd4'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <?php ob_start(); ?>
    <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a1', "Cuestionario diagnóstico de la asignatura", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
