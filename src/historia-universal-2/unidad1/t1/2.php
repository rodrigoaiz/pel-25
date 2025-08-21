<?php
include '../../config.php'; // Ajustar esto según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>La Segunda Revolución Industrial</h2>
  
  <p>A finales del s. XIX, la parte occidental del planeta veneraba el progreso. Estaban convencidos de que estos avances se habían producido gracias a la llamada Segunda Revolución Industrial. La primera había traído los textiles, ferrocarriles, hierro y carbón. En la segunda, el acero, compuestos químicos, electricidad y petróleo que abrieron el camino rumbo a nuevas fronteras industriales.</p>
  
  <?php
  renderImage('qalama9.jpg', 'Imagen de Qlama9', 'https://commons.wikimedia.org/wiki/File:1890heyenbrock.jpg', 'Wikimedia Commons');
  ?>

  <p>Productos nuevos. El primer cambio industrial importante entre 1870 y 1914 fue la sustitución del hierro por el acero. Los nuevos métodos para forjar el acero resultaron muy útiles para la construcción de máquinas y motores más ligeros, pequeños y rápidos, así como ferrocarriles, barcos y armas. En 1860, Inglaterra, Francia, Alemania y Bélgica produjeron 125,000 toneladas de acero. Para 1913, la producción total fue de 32 millones de toneladas.</p>
  <p>La electricidad fue una nueva e importante forma de energía que resultó de gran valor. Podía convertirse fácilmente en otras formas de energía, como calor, luz y movimiento, y moverse con igual facilidad por el aire a través de alambres. En la década de 1870 se crearon los primeros generadores funcionales de corriente eléctrica y las plantas de vapor alimentadas por carbón dieron a las fábricas y hogares una fuente única de energía.</p>
  <p>La electricidad dio pie a varios inventos. La creación del foco por Thomas Edison en Estados Unidos y Joseph Swan en Inglaterra permitió beneficiar con luz eléctrica a los hogares y ciudades. Se inició una revolución en las comunicaciones en 1876 cuando Alexander Graham Bell inventó el teléfono y en 1901, Guillermo Marconi envió las primeras señales de radio a través del Atlántico.</p>
  
  <?php
  renderImage('durova.jpg', 'Imagen de Durova', 'https://commons.wikimedia.org/wiki/File:Light_bulb_Edison_2.jpg', 'Wikimedia Commons');
  ?>

  <p>Revisa el siguiente video para complementar los aprendizajes acerca de la segunda revolución industrial:</p>
  <?php
  // Segunda Revolución industrial
  renderVideoIframe('n25Otb5dTCc', 'Segunda Revolución industrial');
?>

  <p>Nuevos esquemas. La producción internacional se incrementó a un ritmo acelerado por el gran aumento en los bienes manufacturados. Por varios motivos, los europeos podían darse el lujo de comprar más productos de consumo. Los salarios de los trabajadores aumentaron desde 1870. Además, los precios de los bienes manufacturados eran más bajos porque se habían reducido los costos de los transportes.</p>
  <p>En las ciudades, las primeras tiendas departamentales vendían un nuevo surtido de artículos de consumo gracias al desarrollo de las industrias del acero y la electricidad. Relojes, bicicletas, focos y máquinas de escribir se vendían en grandes cantidades.</p>
  <p>No todas las naciones se beneficiaron de esta segunda Revolución Industrial. En 1900, Europa estaba dividida en dos zonas económicas: Inglaterra, Bélgica, Francia, Holanda, Alemania, la parte occidental del Imperio austrohúngaro y el norte de Italia formaban la zona industrializada avanzada. Estas naciones tenían una calidad de vida superior y buenos sistemas de transporte.</p>
  <p>Mientras, otra parte de Europa era todavía agrícola: la zona poco industrializada del sur y el este, que era el sur de Italia, la mayor parte de Austría-Hungría, España, Portugal, los reinos balcánicos y Rusia. Estos países daban alimentos y materias primas a los países industrializados.</p>
  
  <?php
  renderImage('abel-gil.jpg', 'Imagen de Abel Gil, EAOM', 'https://elordenmundial.com/mapas-y-graficos/revolucion-industrial-europa/', 'Wikimedia Commons');
  ?>

  <p>La teoría marxista. En 1848 se publicó el <em>Manifiesto del Partido Comunista</em>, obra de dos alemanes, Carlos Marx y Federico Engels, horrorizados por las condiciones de las fábricas, de las cuales culpan al sistema capitalista industrial. Su solución fue crear un nuevo sistema social. Con el tiempo, una variante del socialismo marxista se llamó comunismo.</p>
  <p>Marx pensaba que toda la historia mundial era “una historia de lucha de clases”, según Marx, opresores y oprimidos han vivido en constante oposición durante la historia.</p>
  <p>Un grupo de personas, los opresores, son los dueños de los medios de producción (tierra, materias primas, dinero, etc.) y por eso han tenido el poder de controlar el gobierno y la sociedad. De hecho, para ellos, el mismo gobierno es un instrumento de la clase dirigente. El otro grupo, que dependía de los propietarios y los medios de producción, son los oprimidos.</p>
  <p>Con el tiempo, los dirigentes de los trabajadores fundaron partidos socialistas basados en las ideas de Marx. El más importante fue el Partido Socialdemócrata Alemán (PSD) que apareció en 1875, estaba encabezado por dirigentes marxistas y lograron ser parte del Parlamento alemán buscando promulgar leyes que mejoraran las condiciones de la clase trabajadora. Para 1912 ya era el partido político más grande de Alemania.</p>
  <p>Revisa el siguiente video para complementar las ideas que estamos revisando:</p>

  <?php
   // Imperialismo capitalista
  renderVideoIframe('kfJAxbofRoI', 'Imperialismo capitalista');
  ?>

  <p>La sociedad de masas y el nuevo entorno urbano. A finales del s. XIX la Segunda Revolución Industrial trajo consigo una sociedad de masas en la que fueron básicas las preocupaciones por la clase trabajadora, las ciudades se poblaban cada vez más, para 1850, el 40% de la población inglesa vivía en ciudades, 15 en Francia, 10 en Prusia que era el mayor Estado alemán y 5% en Rusia.</p>
  <p>Las ciudades crecieron desde la mitad del siglo XIX porque las condiciones de vida mejoraron tanto, que ahí la gente sobreviviría más, por ejemplo, tenían agua potable cada tanto de manzanas construidas, bastante más cerca que viviendo en otros sitios y para entonces ya se sabía que las condiciones de vida antihigiénicas habían sido la principal causa de epidemias en el pasado como la del cólera de 1830. Con el tiempo las nuevas normas de construcción exigieron que las edificaciones tuvieran sistemas internos de agua corriente y drenaje.</p>
  <p>Un factor esencial de la salud pública en las modernas ciudades europeas fue la capacidad de llevar agua limpia y expulsar las aguas negras. La necesidad de agua potable se cubría mediante un sistema de presas y embalses que almacenaban el agua, y de acueductos y túneles que la llevaban del campo a la ciudad y a las viviendas particulares.</p>
  <p>Cómo se estructuró la sociedad de masas. A pesar de que para 1871 la calidad de vida en la mayoría de la población había mejorado, la pobreza seguía siendo parte de la mayoría de la sociedad occidental y entre los ricos y los muchos muy pobres, hubo una clase media.</p>
  <p>En la parte más alta de la sociedad europea se encontraba una élite acomodada, sólo constituyeron el cinco por ciento de la población pero llegó a controlar el 40% de la riqueza. Esta nueva clase se dio a partir de uniones entre prósperos industriales, banqueros y comerciantes que asumieron puestos directivos en el gobierno y el ejército con miembros de la antigua aristocracia, formando una nueva élite, las hijas de los magnates obtuvieron títulos nobiliarios y los herederos de la aristocracia encontraron nuevas fuentes de efectivo.</p>
  <p>Las clases medias estaban integradas por varios grupos, el grupo medio, sólido y cómodo constituían los abogados, médicos, servidores públicos, gerentes de empresas, ingenieros, arquitectos contadores y químicos, luego venía la clase media baja con los tenderos, comerciantes y campesinos prósperos. Ellos proporcionaban bienes y servicios a las clases superiores, y hubo también el sector de una clase en medio de éstas dos, eran los agentes viajeros, tenedores de libros, operadoras telefónicas, vendedores departamentales y secretarias. Aunque no ganaban mucho, abrazaban los ideales de las clases medias.</p>
  <p>Las clases trabajadoras. Debajo de las clases medias estaban las clases trabajadoras, que eran casi el 80% de la población de Europa. Muchos de sus integrantes eran campesinos, trabajadores agrícolas y aparceros en el entorno rural y artesanos, trabajadores semicalificados, jornaleros y trabajadores domésticos en el entorno urbano.</p>

  <?php
  renderImage('john-paros.jpg', ' John Vandenberg e Imagen de Paros.', 'https://commons.wikimedia.org/wiki/File:Ford_Motor_Company_assembly_line.jpg', 'Wikimedia Commons');
  ?>

  <h4>Cuestionario diagnóstico unidad 1</h4>
  <?php ob_start(); ?>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarse, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico de la Unidad 1", $ActividadContent);
  ?>

  <p>La educación. La educación universal fue el producto de la sociedad de masas a fines del s. XIX, fue principalmente para la clase rica y media acaudalada, sin embargo, para 1914, Estados Unidos instituyó las primeras primarias oficiales, con obligatoriedad para todos los niños y niñas de 6 a 12 años. La razón principal de este interés en la educación pública fue la industrialización, en la Primera Revolución Industrial la mano de obra utilizada podía ser no capacitada y sin experiencia pero en la Segunda se requerían ya trabajadores capacitados, así que la educación primaria daba la posibilidad a los niños y niñas de encontrar trabajo fuera de sus lugares de origen, en los campos de la docencia y la enfermería o como empleados del ferrocarril o correos.</p>
  
  <?php
  renderImage('bubamara1.jpg', 'Foto de Bubamara', 'https://commons.wikimedia.org/wiki/File:Elementary_school_class_on_American_Indian_culture.png', 'Wikimedia Commons');
  ?>

  <h3>El esparcimiento</h3>
  <p>La Segunda Revolución Industrial permitió a las personas entregarse a nuevas formas de esparcimiento. El tiempo libre comenzó a considerarse como una forma de vida de la gente para poder disfrutar después del trabajo, surgieron salas de cine, salones de baile, parques de diversiones y espectáculos masivos de deportes.</p>
<h3>Orígenes del colonialismo</h3>
<?php
  renderImage('Zz1y.jpg', 'Foto de BuZz1y', 'https://commons.wikimedia.org/wiki/File:IMGCDB82_-_Caricatura_sobre_conferencia_de_Berl%C3%ADn,_1885.jpg', 'Wikimedia Commons');
  ?>



  <p>El colonialismo del siglo XIX tuvo sus raíces en una serie de factores económicos, políticos y sociales que se desarrollaron durante ese período. Aquí están algunos de los principales orígenes:</p>
  <ul class="ul-disc">
    <li><strong>Motivaciones económicas:</strong> Una de las principales razones detrás del colonialismo en el siglo XIX fue la búsqueda de recursos naturales y mercados para las potencias europeas. La Revolución Industrial había generado una creciente demanda de materias primas, como minerales, caucho, y petróleo, así como nuevos lugares para vender productos manufacturados. Las colonias eran vistas como fuentes de riqueza y oportunidades comerciales.</li>
    <li><strong>Competencia entre las potencias europeas:</strong> Durante el siglo XIX, las naciones europeas estaban en una carrera por adquirir colonias en África, Asia y otras partes del mundo. Esta competencia, conocida como la "carrera colonial", se debió en parte a la búsqueda de prestigio y poder, ya que tener un vasto imperio colonial se consideraba un signo de grandeza nacional.</li>
    <li><strong>Avances tecnológicos y militares:</strong> Los avances en tecnología, como la navegación, la medicina y las armas de fuego, hicieron que la expansión colonial fuera más factible. Las potencias europeas tenían una ventaja tecnológica sobre las poblaciones indígenas en muchas de las áreas que colonizaron, lo que les permitió establecer su control con relativa facilidad.</li>
    <li><strong>Ideología imperialista y supremacía cultural:</strong> Muchos europeos sostenían la creencia en la superioridad de su cultura y creían que tenían la responsabilidad de llevar el "progreso" a las sociedades consideradas menos avanzadas. Esta ideología imperialista justificó la expansión colonial y la imposición de normas europeas en las colonias.</li>
    <li><strong>Factores políticos y estratégicos:</strong> El control de rutas comerciales y de posiciones estratégicas en el mapa mundial también fue un motivo importante para la expansión colonial. Los imperios coloniales permitieron a las potencias europeas establecer bases militares y asegurar sus intereses políticos en diferentes regiones del mundo.</li>
  </ul>
  <p>En resumen, el colonialismo del siglo XIX se originó a partir de una combinación de intereses económicos, competencia entre las potencias europeas, avances tecnológicos, ideologías imperialistas y consideraciones políticas y estratégicas. Estos factores llevaron a una expansión sin precedentes de los imperios coloniales europeos y tuvieron un profundo impacto en las sociedades colonizadas y en la historia mundial.</p>

  <?php
   // El capitalismo y sus manifestaciones
  renderVideoIframe('vFIC77-hThY', 'El capitalismo y sus manifestaciones'); 
  ?>


  <h3>Las ciudades</h3>
  <p>Reafirmemos algunos conocimientos con el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Cuál fue un factor clave en el crecimiento de las ciudades durante la Segunda Revolución Industrial?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a2', "Ir a la actividad", $ActividadContent);
  ?>


</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

  
