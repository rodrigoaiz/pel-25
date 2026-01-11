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
  <h2>La política en América Latina</h2>
  <p>La mayoría de los países latinoamericanos habían logrado la independencia en el siglo XIX, pero aún existían fuertes influencias y dependencias económicas de las potencias coloniales, especialmente de Estados Unidos y las naciones europeas. Estas potencias ejercían un control significativo sobre los recursos naturales y la economía de la región. La economía de enclave, centrada en la exportación de materias primas, generaba desigualdades sociales y económicas, ya que los beneficios se concentraban en manos de las élites locales y extranjeras. Las élites locales, formadas por la oligarquía y los terratenientes, controlaban el poder político en la mayoría de los países de América Latina. Estas elites protegían sus intereses económicos y políticos, manteniendo un sistema político excluyente y limitando la participación de las clases populares en el proceso político. Durante el periodo de entreguerras, se consolidaron dos formas de gobierno que prevalecerían en la región durante los siguientes años: el populismo y la dictadura.</p>
  <p>Observa el siguiente video para comenzar a definir algunos términos importantes.</p>
   <?php
  renderVideoIframe('5OLyce1bQBQ', '¿Qué es el populismo?');
  ?>
  <h3>Populismos</h3>
  <p>El populismo es un concepto político complejo que ha sido objeto de diversos debates e interpretaciones. En términos generales, el populismo se refiere a un estilo de liderazgo político que busca establecer una conexión directa y emocional con las masas, presentándose como el portavoz de los intereses y demandas del "pueblo" frente a una élite política o económica.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-populismo.webp','El populismo busca el apoyo de las masas a través de la idea de que el gobernante es el principal representante de sus intereses. Imagen de Pilarportela.', 'https://commons.wikimedia.org/wiki/File:Eviel_discurso.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Algunas de las principales características del populismo son las siguientes:</p>
  <?php
  $accordionItems1 = [
    [
      'title' => 'Liderazgo carismático',
      'content' => '<p>Los líderes populistas suelen ser carismáticos y ejercen un fuerte poder de atracción y persuasión sobre las masas. Utilizan un discurso simple y directo, apelando a las emociones y los sentimientos de la gente.</p>'
    ],
    [
      'title' => 'Polarización y confrontación',
      'content' => '<p>Los populistas tienden a dividir el panorama político en dos polos opuestos: "el pueblo" virtuoso y puro versus "la élite" corrupta y privilegiada. Fomentan la confrontación y la lucha entre estas fuerzas, generando una dinámica de "nosotros contra ellos".</p>'
    ],
    [
      'title' => 'Nacionalismo y antielitismo',
      'content' => '<p>Los líderes populistas suelen enfatizar el nacionalismo y la defensa de los intereses nacionales frente a influencias extranjeras o élites internas consideradas perjudiciales. Critican a las élites políticas y económicas, presentándose como defensores de los intereses de las clases populares.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>

  <p>Promesa de cambios radicales: Los populistas suelen ofrecer soluciones rápidas y radicales a los problemas y desafíos que enfrenta la sociedad. Prometen cambios profundos y transformadores en áreas como la economía, la justicia social o la participación política.</p>
  <p>Relación directa con las masas: El populismo se caracteriza por la búsqueda de una conexión directa entre el líder y las masas, evitando en ocasiones las instituciones establecidas. Se basa en la movilización y participación de los seguidores en torno a la figura del líder.</p>
  <p>Durante el periodo de 1917 a 1945, el populismo tuvo un papel destacado en la política de varios países de América Latina, especialmente en México, Argentina y Brasil.</p>

  <h4>México</h4>
  <p>En México, el populismo tuvo lugar principalmente durante el periodo conocido como el cardenismo, liderado por el presidente Lázaro Cárdenas (1934-1940).</p>
  <p>Una de las acciones más destacadas de Cárdenas fue la implementación de una reforma agraria que buscaba la redistribución de la tierra. A través de la expropiación de grandes haciendas y la creación de ejidos, se otorgaron tierras a los campesinos y se promovió la propiedad comunal de la tierra. En 1938, Cárdenas llevó a cabo la nacionalización de la industria petrolera en México. Mediante la expropiación de las compañías extranjeras, creó la empresa estatal Petróleos Mexicanos (Pemex), que se convirtió en un símbolo de soberanía y control de los recursos naturales del país. Cárdenas impulsó medidas para proteger y mejorar las condiciones laborales de los trabajadores. Se promulgó la Ley Federal del Trabajo, que garantizaba derechos laborales básicos, como jornadas de trabajo justas, salarios mínimos, prestaciones sociales y derecho a la organización sindical. Cárdenas impulsó la creación de la CTM, una central sindical que agrupaba a diversos sindicatos. Esta organización tenía un fuerte respaldo estatal y se convirtió en un actor clave en la relación entre el gobierno y los trabajadores. Durante su gobierno, Cárdenas priorizó la inversión en educación y salud. Se promovieron programas de alfabetización, se construyeron escuelas rurales y se estableció el Instituto Politécnico Nacional (IPN). Además, se impulsaron políticas de atención médica y se crearon hospitales y clínicas. Cárdenas prestó atención a la situación de los pueblos indígenas y promovió la preservación y el reconocimiento de sus tradiciones y derechos. Se implementaron programas para fortalecer la educación bilingüe y se impulsaron políticas de inclusión y participación indígena en la sociedad mexicana.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-cardenas.webp','Lázaro Cárdenas nacionaliza ferrocarriles 1937. Imagen de carmanpaco', 'https://commons.wikimedia.org/wiki/File:Lazaro_Cardenas_nacionaliza_ferrocarriles_1937.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>La presidencia de Lázaro Cárdenas se destacó por su enfoque en la justicia social, la reforma agraria y la defensa de la soberanía nacional. Sus políticas tuvieron un impacto duradero en la historia de México y sentaron las bases para transformaciones posteriores en el país.</p>
  <h3>Argentina</h3>
  <p>En Argentina, el peronismo se convirtió en el movimiento populista más destacado durante este periodo, liderado por Juan Domingo Perón. Perón fue presidente de Argentina en tres ocasiones (1946-1955, 1973-1974).</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-peronismo.webp','Juan Domingo y Eva Perón. Imagen de Hohum.', 'https://commons.wikimedia.org/wiki/File:Museo_del_Bicentenario_-_%22Retrato_de_Juan_Domingo_Per%C3%B3n_y_Eva_Duarte%22,_Numa_Ayrinhac.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Perón lideró el movimiento político conocido como peronismo o justicialismo, que se basaba en los principios de justicia social, independencia económica y soberanía política. El justicialismo buscaba establecer una tercera posición política, alejada del capitalismo y del comunismo, y promovía la participación del Estado en la economía y la defensa de los derechos laborales. Perón impulsó políticas laborales y sindicales que beneficiaron a los trabajadores. Se estableció el Estatuto del Peón, que garantizaba derechos y condiciones laborales para los trabajadores rurales, y se promovieron leyes de protección y sindicalización. Además, se creó la Confederación General del Trabajo (CGT), unificando a los sindicatos bajo un mismo paraguas y otorgándoles un fuerte respaldo estatal. Perón implementó políticas de bienestar social y justicia distributiva. Se llevaron a cabo programas de asistencia social, se promovió la construcción de viviendas para los sectores más necesitados y se creó el Ministerio de Salud Pública. También se implementaron políticas de inclusión y se otorgaron derechos políticos a las mujeres, incluyendo el sufragio femenino. Perón buscó promover la industrialización del país y reducir la dependencia de la economía argentina de las exportaciones de materias primas. Se aplicaron políticas de proteccionismo económico y se fomentó la creación de industrias nacionales, especialmente en sectores estratégicos como la siderurgia, el petróleo y la industria automotriz. Perón llevó a cabo la nacionalización de varias empresas y servicios públicos. Entre las principales nacionalizaciones se encuentran la Compañía de Transporte de Energía Eléctrica en Alta Tensión (actualmente, Transener), la Compañía Primitiva de Gas y la Compañía de Petróleo Fiscales (posteriormente, YPF).</p>
  <p>Perón se destacó por su liderazgo carismático y su capacidad para movilizar y generar apoyo popular. Utilizó un discurso directo y emotivo, conectando de manera cercana con las masas y promoviendo una imagen de líder paternalista y protector.</p>
  <h4>Brasil</h4>
  <p>En Brasil, el populismo se manifestó durante el periodo de la era Vargas, liderado por Getúlio Vargas. Vargas llegó al poder en 1930 y gobernó de manera autoritaria hasta 1945, y luego regresó al poder democráticamente en 1951. Durante su gobierno, implementó políticas nacionalistas, proteccionistas y de bienestar social, con un enfoque en los derechos laborales y la industrialización. Vargas se presentó como un líder cercano al pueblo y adoptó un discurso populista que le permitió mantenerse en el poder por largo tiempo.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-getulio.webp','Getulio Vargas. Imagen de Luiz do Mel.', 'https://commons.wikimedia.org/wiki/File:Get%C3%BAlio_Vargas_-_retrato_oficial_de_1930.JPG','Wikimedia Commons.');
  ?>
  </div>
  <p>En general, el populismo en América Latina durante este periodo se caracterizó por un enfoque en la justicia social, la defensa de los derechos de los trabajadores y una fuerte intervención estatal en la economía. Estos líderes populistas buscaban establecer una relación directa con las masas y promover políticas que apuntaban a mejorar la situación de los sectores populares. Sin embargo, también generaron controversias y tensiones, y su legado político y económico ha sido objeto de debate en la historia de cada país.</p>
  <h3>Dictaduras</h3>
  <p>Las dictaduras fueron benefactoras de los intereses norteamericanos y protegidas por este país. Se las denomina habitualmente, patriarcales o dinásticas y podemos encontrar entre ellas, las de los Somoza en Nicaragua, la de Trujillo en República Dominicana y la de Duvalier en Haití.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-anastasio.webp','Anastasio Somoza. Imagen de LLs.', 'https://commons.wikimedia.org/wiki/File:Anastasio_Somoza_Garcia.gif','Wikimedia Commons.');
  ?>
  </div>
  <p>Estos patriarcas basaron su poder en las relaciones clientelares en sociedades donde la mayoría de la población estaba empobrecida y había sido criada para obedecer. Lograron centralizar su fuerza represiva y coercitiva bajo su mando, a fin de dejar atrás las épocas de luchas entre caudillos regionales o facciones partidarias y sofocar posibles focos rebeldes a su autoritarismo. En algunos casos, fueron impuestas por la intervención norteamericana, a través de la selección de algún títere de sus guardias nacionales. Al mismo tiempo estuvieron apoyados por intereses foráneos del capitalismo financiero ligado a la explotación de materias primas, que acentuaron el carácter monoproductor de estos países latinoamericanos. Conjugaron así una relación de conveniencia entre las oligarquías internas y los socios externos, que ambos aprovecharon para enriquecerse sin tener en cuenta la mayoría de la población.</p>
  <p>Estos casos son prueba de la aplicación del "Corolario Roosevelt", que estableció protectorados con el pretexto de "poner orden".</p>
  <p>El gobierno de la familia Somoza en Nicaragua abarcó un periodo prolongado, desde 1937 hasta 1979. Anastasio Somoza García fue el primer miembro de la familia en llegar al poder, los Somoza gobernaron Nicaragua de manera autoritaria y ejercieron un control total sobre el Estado y la economía del país.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-protesta.webp','Protestas en Masaya, Nicaragua 2018. Imagen de Dimartz.', 'https://commons.wikimedia.org/wiki/File:Protestas_en_Masaya,_Nicaragua_2018.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Durante su presidencia, Somoza García fortaleció la Guardia Nacional, una fuerza militar que se convirtió en su principal instrumento de poder. La Guardia Nacional no solo ejercía funciones de seguridad, sino que también participaba en la represión de la oposición política y protegía los intereses económicos de la familia Somoza y sus aliados. Se convirtió en una institución clave para mantener el control y la estabilidad del régimen. Somoza García implementó políticas económicas que favorecieron a su familia y a los sectores empresariales aliados. Estas políticas incluían el acaparamiento de tierras, la concentración de la riqueza en pocas manos y la explotación de recursos naturales. Se enriqueció a costa de la población nicaragüense y se creó una desigualdad social y económica significativa en el país. Además, el régimen de Somoza García se caracterizó por la represión política y la violación sistemática de los derechos humanos. Se censuró a la prensa y se silenció a los opositores políticos, mientras que los críticos del gobierno eran perseguidos, encarcelados o incluso asesinados. Los métodos represivos incluían la tortura y el uso de escuadrones de la muerte para mantener el control sobre la población. La corrupción también fue una característica destacada del gobierno de Somoza García. La familia Somoza y sus allegados se beneficiaron enormemente del control del Estado y del acceso a recursos económicos, utilizando su posición para acumular una gran riqueza personal. A pesar de las protestas y la creciente oposición, Somoza García logró mantenerse en el poder hasta su asesinato en 1956. Su legado fue una Nicaragua marcada por la opresión, la desigualdad y la corrupción.</p>

    <?php ob_start(); ?>
  <p>Hagamos una pausa en este momento para resolver el siguiente reto que nos ayudará a afianzar nuestros aprendizajes hasta este momento.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a2', "Política en America Latina", $ActividadContent);
  ?>
  <div class="mx-auto max-w-md"><p>El gobierno de Rafael Leónidas Trujillo en la República Dominicana (1930-1961) fue uno de los más largos y represivos de la historia latinoamericana. Trujillo ejerció un control absoluto sobre el país, estableciendo una dictadura personalista que se caracterizó por la represión política, la violencia y la corrupción.</p>
  <?php
  renderImage('hu2-u2-trujillo.webp','Rafael Trujillo 1933. Imagen de Centpacrr.', 'https://commons.wikimedia.org/wiki/File:Rafael_Trujillo_1933.jpg','Wikimedia Commons.');
  ?>
  </div>

 <p>Trujillo llegó al poder en 1930 a través de un golpe de Estado y se mantuvo en el poder durante más de tres décadas, utilizando tanto la fuerza bruta como una eficiente maquinaria de propaganda para perpetuarse en el cargo. Durante su gobierno, consolidó su poder a través del control total del Estado, la represión de cualquier forma de oposición política y la manipulación de los procesos electorales.</p>
 <p>Una de las características más notorias del régimen de Trujillo fue la creación de un culto a la personalidad en torno a su figura. Se promovió una imagen de Trujillo como el "Padre de la Patria" y se exigía una lealtad incondicional hacia él. Las instituciones del Estado y los medios de comunicación fueron utilizados para glorificar y exaltar su figura, mientras se silenciaba y perseguía a los críticos y opositores.</p>
 <p>La represión política bajo el régimen de Trujillo fue brutal. Se llevaron a cabo detenciones arbitrarias, torturas y ejecuciones sumarias de aquellos considerados como enemigos del régimen. Se estableció una red de espionaje y vigilancia para controlar la sociedad y eliminar cualquier amenaza percibida contra el poder de Trujillo.</p>
 <p>Además de la represión política, el gobierno de Trujillo se caracterizó por la corrupción generalizada. Trujillo y su familia se enriquecieron a costa de los recursos del Estado y el control de la economía, acumulando una gran fortuna personal mientras gran parte de la población vivía en la pobreza.</p>
 <p>El gobierno de Trujillo también tuvo un impacto negativo en las relaciones exteriores de la República Dominicana. Su régimen mantuvo una política exterior basada en la neutralidad y el apoyo a gobiernos autoritarios en la región, lo que generó tensiones con otros países y le valió críticas internacionales.</p>
 <p>Finalmente, el régimen de Trujillo llegó a su fin en 1961, cuando fue asesinado en un atentado. Su muerte provocó una crisis política y el país se sumergió en un periodo de inestabilidad antes de la instauración de un gobierno democrático.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
