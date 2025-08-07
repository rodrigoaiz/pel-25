<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenidos al ejemplo, este es el título 1</h2>
  <h3>Y un subtitulo si es necesario</h3>
  <p>A finales del s. XIX, la parte occidental del planeta veneraba el progreso. Estaban convencidos de que éstos avances se habían producido gracias a la llamada Segunda Revolución Industrial. La primera había traído los textiles, ferrocarriles, hierro y carbón. En la segunda, el acero, compuestos químicos, electricidad y petróleo que abrieron el camino rumbo a nuevas fronteras industriales.</p>
  <?php
  renderVideoIframe('JmlS2Zf8-is', 'Este es el primer video de la asignatura');
  ?>
  <p>A continuación vemos como incorporar una imagen, dense cuenta los props que requiere, primero el nombre de la imagen, el pie de imagen, si tiene una liga de la referencia y por ultimo el texto de esa liga.</p>
  <?php
  renderImage('hu2-u1-heyenbrock.webp', 'Imagen de la fábrica de Heidenbrock en 1900', 'https://commons.wikimedia.org/wiki/File:Herman_Heijenbrock_-_The_casting_of_iron_in_blocks.jpg', 'Wikimedia Commons.');
  ?>
  <p>O con un decorado padre, pero queda mucho más pequeña:</p>
  <?php
  renderImagePleca('hu2-u1-heyenbrock.webp', 'Imagen de Mathematic World.', 'https://commons.wikimedia.org/wiki/File:Mathematic_World.jpg', 'Pixabay', 'justify-center');
  ?>
  <p>También se podría poner una imagen sin componente, de la siguiente forma:</p>
  <img class="mx-auto" src="<?php echo PATH_IMAGES . 'hu2-u1-heyenbrock.webp'; ?>">
  <h4>Tenemos estos dos tipos de listas, primero una lista con viñetas:</h4>
  <p>Por cierto, el de arriba es otro subitutlo, llegamos hasta el h4</p>
  <ul class="ul-disc">
    <li>Competencia entre las potencias europeas: Durante el siglo XIX, las naciones europeas estaban en una carrera por adquirir colonias en África, Asia y otras partes del mundo. Esta competencia, conocida como la "carrera colonial", se debió en parte a la búsqueda de prestigio y poder, ya que tener un vasto imperio colonial se consideraba un signo de grandeza nacional.</li>
    <li>Avances tecnológicos y militares: Los avances en tecnología, como la navegación, la medicina y las armas de fuego, hicieron que la expansión colonial fuera más factible. Las potencias europeas tenían una ventaja tecnológica sobre las poblaciones indígenas en muchas de las áreas que colonizaron, lo que les permitió establecer su control con relativa facilidad.</li>
    <li>Ideología imperialista y supremacía cultural: Muchos europeos sostenían la creencia en la superioridad de su cultura y creían que tenían la responsabilidad de llevar el "progreso" a las sociedades consideradas menos avanzadas. Esta ideología imperialista justificó la expansión colonial y la imposición de normas europeas en las colonias.</li>
    <li>Factores políticos y estratégicos: El control de rutas comerciales y de posiciones estratégicas en el mapa mundial también fue un motivo importante para la expansión colonial. Los imperios coloniales permitieron a las potencias europeas establecer bases militares y asegurar sus intereses políticos en diferentes regiones del mundo.</li>
  </ul>
  <h4>Y ahora una lista numerada:</h4>
  <ol class="ol-number">
    <li>Guerra de movimientos. De Julio a Diciembre de 1914. En esta etapa, los alemanes se movilizaron conforme al Plan Schlieffen (Guerra Relámpago, enfocada a la derrota de Francia en el frente Occidental para combatir posteriormente a Rusia). Asimismo, los dos sistemas de alianzas sostienen negociaciones con los países neutrales, para atraerlos a sus respectivos bandos. En esta fase, los alemanes violaron la neutralidad de Bélgica para ingresar a territorio francés, pero su avance fue detenido a partir de la Batalla del Marne (septiembre de 1914) y se replegaron hacia el Norte, estableciendo un frente estático. El Plan Schlieffen para lograr una victoria rápida de la Triple Alianza había fracasado.</li>
    <li>Guerra de Posiciones (trincheras) y estancamiento político, de enero de 1915 hasta fines de 1916. Los combates en el Frente Occidental se eternizaron en las trincheras; cualquier intento por ganar terreno al adversario tenía un alto costo en vidas humanas. Ejemplo de ello son los combates de Verdún y del Somme. Los alemanes optaron por llevar la batalla al mar, encaminando una guerra submarina; hundieron un barco británico -el Lusitania- que transportaba casi un centenar de ciudadanos norteamericanos en mayo de 1915. Posteriormente, el buque Sussex en marzo de 1916. Esta guerra submarina afectaba los intereses de Estados Unidos, pues ellos suministraban bienes e insumos de guerra a Inglaterra y Francia. La batalla submarina pretendía cortar esa línea de abastecimiento.</li>
    <li>En el Frente Oriental, Rusia combatía simultáneamente (sin mucho éxito) a Austrohungría y Alemania. Este estancamiento, y la duración de la guerra, empieza a provocar cada vez más sufrimiento e inconformidad en la población rusa en general; el descontento por la forma en que es conducida la guerra iba en aumento, y ello tendría sus propias consecuencias (como verás más adelante).</li>
  </ol>
  <p>El texto corrido se ponen en etiquetas p no lo olviden.</p>
  <h4>Y ahora un acordeón, que es una sección que se puede expandir y contraer:</h4>
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
  <h4>Y ahora las actividades, primero se abren con el php ob_start();</h4>
  <p>Inmediatamente después de abrir esa etiqueta, va el texto de las instrucciones, ahí puede haber listas, imagenes, etc... por lo regular es puro texto.</p>
  <p>Después se abre otra etiqueta php, recuerdes casi todo copiar, pegar y cambiar los parametros, en este caso, hay que cambiar el id de la actividad y el título.</p>
  <p>Recuerden es normal que no vean la actividad por que no están en el server, sino en su entorno de desarrollo.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico de la asignatura", $ActividadContent);
  ?>
  <p class="text-center">Para incluir PDF o documentos, deben hacerlo de esta forma: <a href="<?php echo PATH_DOCS . 'u4_t3_ejemplo_guion_video_educativo.pdf'; ?>" target="_blank">Ejemplo de guion educativo</a> y deben colocarlos en la carpeta de assets/docs correspondiente.</p>

  <h4>Ahora el componente de tabs</h4>
  <?= TabsComponent([
    'tabs' => [
      [
        'id' => 'despatarre',
        'label' => 'Manspreading',
        'content' =>
        '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/hu2-u1-heyenbrock.webp" />
                </div>
                    <div class="col-span-2 text-sm leading-6">
                        <p class="font-bold text-emerald-800 text-lg text-center leading-6">Machodespatarre o Manspreading</p>
                        <p>El machodespatarre o male spreading ocurre cuando un hombre sentado con las piernas bien abiertas, ocupa un espacio excesivo, especialmente en áreas públicas. Esto invade el espacio circundante, causando incomodidad y forzando a las mujeres a tomar una postura cerrada, como cruzar las piernas o sentarse de lado. Al expandir sus piernas, el hombre demuestra que tiene dominio sobre el espacio de las mujeres.</p>
                        <p>En oposición al manspreading está el shebagging que ocurre cuando las mujeres que invaden espacios contiguos con sus pertenencias, evitando que alguien se siente a su lado. En ocasiones, el shebagging es una estrategia para evitar el hostigamiento y acoso de los hombres en lugares públicos porque permite a las mujeres seleccionar quien se sienta a su lado, en caso de tener que ceder el asiento.</p>
                        <p class="font-bold">Sin embargo, el manspreading y el shebagging son actos contrarios a la civilidad y respeto hacia el espacio de otras personas.</p>
                    </div>
                </div>'
      ],
      [
        'id' => 'manipulacion',
        'label' => 'Gaslighting',
        'content' =>
        '<p class="font-bold text-emerald-800 text-lg text-center leading-6">Machomanipulación o gaslighting</p>
                <p>La machomanipulación o gaslighting es una forma de violencia emocional en la cual un hombre le hace creer a una mujer que su percepción, sus recuerdos, o su propio juicio están equivocados.</p>
                <div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                    <img class="mx-auto" src="../../assets/img/hu2-u1-heyenbrock.webp" /></div>
                    <div class="col-span-2 text-sm leading-6">
                        <p>Algunas de las intenciones de la machomanipulación son hacer que la mujer:</p>
                        <p class="ml-20 leading-6">a) dude de sí misma;</p>
                        <p class="ml-20 leading-6">b) se sienta culpable, sin que el hombre asuma su responsabilidad;</p>
                        <p class="ml-20 leading-6">c) crea que todo está en su imaginación, porque ella es muy sensible;</p>
                        <p class="ml-20 leading-6">d) crea que él le está diciendo qué hacer o pensar, por su propio bien;</p>
                        <p class="ml-20 leading-6">e) las palabras de la mujer se usen en su contra;</p>
                        <p class="ml-20 leading-6">f) piense que está equivocada, aunque no sea cierto;</p>
                        <p class="ml-20 leading-6">g) piense que sus opiniones no cuentan o están equivocadas.</p>
                        <p class="font-bold">El hombre utiliza la machomanipulación para convencer a la mujer de que, lo que ella cree, no es verdad a pesar de las evidencias.</p>
                    </div>
                </div>'
      ],
    ],
  ]) ?>
  <h4>El para saber más, se parece un poco al de actividades</h4>
  <p>Pero <strong>es importante que quede fuera de la etiqueta section</strong></p>
</section>
<?php ob_start(); ?>
<section>
  <p>Aquí dentro abrimos un sections para que centre el contenido.</p>
  <div class="max-w-2xl mx-auto m-10">
    <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'u2t2-pcarbono.pdf'; ?>" target="_blank">Sobre el carbono...</a></p>
  </div>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para saber más");
?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
