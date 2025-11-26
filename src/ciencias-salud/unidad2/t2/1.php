<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2> Identifica los aspectos básicos de la salud pública</h2>

  <p>La salud pública se encarga de la previsión, protección, promoción y mejora de la salud de las poblaciones, se ocupa de estudiar los factores que afectan la salud de las comunidades, regiones, países e incluso a nivel mundial. A diferencia de la atención médica personalizada que se centra en el individuo, la salud pública se ocupa de las poblaciones. Según la Organización Mundial de la Salud (OMS): <b><i>“La salud pública es un conjunto de actividades sociales y políticas destinadas a mejorar la salud, prolongar la vida y mejorar la calidad de vida de las poblaciones, mediante la promoción de la salud, la prevención de la enfermedad y otras formas de intervención sanitarias”.</i></b> Se caracteriza por ser  multidisciplinaria, ya que está relacionada con otras áreas del conocimiento, como son las ciencias sociales, las químico-biológicas, la estadística, la psicología, entre otras. Algunas de las instituciones que intervienen en aspectos de salud pública, pueden ser gubernamentales, organizaciones no gubernamentales o instituciones académicas interesadas en promover la salud a nivel poblacional.
</p>

<p>La Organización Panamericana de la Salud (OPS), se crea el 2 de diciembre de 1902, y es el organismo especializado de salud del Sistema Interamericano, encabezado por la Organización de Estados Americanos (OEA), y afiliada a la OMS desde 1949. Es la Organización Internacional Especializada en Salud Pública de las Américas, cuyos objetivos son: conseguir que cada persona tenga acceso a la atención de salud que requiera, que esta sea de calidad y esté al alcance de todos. Está conformada por 35 países dentro de los cuales se encuentra México, desde el 1 de marzo de 1929.</p>

<div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-ops.webp', 'Organización Panamericana de la Salud', 'https://www.paho.org/es/quienes-somos/planificacion-finanzas-rendicion-cuentas/estados-miembros-organizacion-panamericana', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

    <p>La Salud Pública como tal, surge a principios del siglo XX, sin embargo, a lo largo de la historia se conoce que ya en la antigüedad se tenían mecanismos para la protección de la salud de las poblaciones, por ejemplo, los egipcios hacían canales para el desagüe de las aguas residuales, construían depósitos para el agua de consumo humano y seguían reglas de higiene personal; los hebreos alrededor del año 1500 a.C. desarrollaron la <b>Ley Mosaica</b>, que es considerada como el primer código de higiene escrito; los griegos le dan más atención a la limpieza personal, al ejercicio y a la dietas, que al saneamiento del medio; los romanos crean los baños públicos para la higiene de la población y construyen acueductos. En la Edad Media se descuida tanto la higiene personal como el saneamiento público; aunado a los bajos niveles socioeconómicos surgen grandes epidemias como la lepra y la peste bubónica, entre otras; se establecieron las cuarentenas y los cordones sanitarios como medidas de salud pública.</p>

    <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-mosaica.webp', 'Decálogo. Las Tablas de la Ley Mosaica y el comienzo de cada uno de los Diez Mandamientos en hebreo. Vitral decimonónico de la Sinagoga y Museo Alsaciano de Estrasburgo, Francia.', 'https://upload.wikimedia.org/wikipedia/commons/1/15/Vitrail_de_synagogue-Mus%C3%A9e_alsacien_de_Strasbourg.jpg', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

          <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-dentista.webp', 'Un dentista extrayendo una muela. (Inglaterra 1360).', 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Medieval_dentistry.jpg', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

    <p>En el siglo XV, en la República de Venecia, se crea un tribunal para prevenir la llegada y propagación de epidemias del extranjero. Durante la revolución industrial surgen brotes de enfermedades como el cólera y la fiebre tifoidea, debido a las condiciones insalubres de las ciudades. A mediados del siglo XIX en Londres, John Snow sienta las bases de la epidemiología moderna como herramienta importante para la salud pública, y en 1848 surge la <b>Ley de Salud Pública</b>, considerada como la primera ley estructurada. En este siglo nuevamente se retoma la importancia de la higiene personal y el saneamiento público; además se promueve la idea de que las condiciones sociales y económicas son importantes para la salud. En el siglo XX se establecieron los primeros departamentos de salud, surgen las vacunas, hay avances en la prevención de enfermedades infecciosas y se llevaron a cabo campañas para promover la higiene y el saneamiento público; en 1948 surge la Organización Mundial de la Salud, iniciándose la cooperación internacional en materia de salud, despertando el interés en la erradicación de enfermedades, la promoción de la salud materno-infantil y la atención médica básica. En ese momento aparecen los movimientos de derechos civiles y derechos de los pacientes.</p>

    <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-inve.webp', 'Una investigación (1897), obra de Joaquín Sorolla. La pintura muestra el interior del laboratorio del neurólogo Luis Simarro.', 'https://upload.wikimedia.org/wikipedia/commons/2/29/Joaqu%C3%ADn_Sorolla_y_Bastida_-_Research_-_Google_Art_Project.jpg', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

         <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-placa.webp', 'Placa en Segovia España siglo XIX. Prohibición de defecar y orinar en la vía pública.', 'https://upload.wikimedia.org/wikipedia/commons/e/eb/Sep%C3%BAlveda_%28Segovia%29_l%C3%A1pida_higiene_p%C3%BAblica_%28RPS_01-05-2014%29.png', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

         <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-vacunate.webp', 'Por el derecho a la salud, vacunate. ', 'https://www.salud.cdmx.gob.mx/storage/app/media/2018-2024/JNSP/2019.11.04-JNSP.jpg', 'recuperado el 16 de diciembre de 2023'); ?>
         </div>

      <p>Para finales del siglo XX e inicios del XXI, se produce un aumento en las enfermedades crónicas, como el VIH y también la globalización de la salud, la equidad, los determinantes sociales de la salud y los enfoques holísticos. Con todo esto se hace evidente que los conocimientos médicos, los desarrollos tecnológicos y las necesidades de la sociedad han sido elementos importantes para el avance de la salud pública. </p>

      <h3>Aspectos básicos de la salud pública</h3>

      <ul>
        <li><b>Prevención de enfermedades:</b> Es el mecanismo mediante el cual, se promueven conductas de vida saludables y se identifican los factores de riesgo para prevenir enfermedades y lesiones en las poblaciones; también se realizan intervenciones preventivas, como pueden ser los programas de vacunación,  salud materno-infantil y nutrición, entre otros.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-parto.webp', 'La Enfermería desarrolla una modalidad innovadora para el proceso de parto. ', 'https://upload.wikimedia.org/wikipedia/commons/c/cc/Enfermer%C3%ADa_desarrolla_una_modalidad_innovadora_para_el_proceso_de_parto.jpg', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Promoción de la salud:</b> Es la encargada de promover estilos de vida saludables, campañas de educación sobre salud y entornos saludables, así como disminuir las desigualdades sociales, para que las poblaciones tengan una mejor salud y una buena calidad de vida.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-promo.webp', 'Promoviendo la salud en la población.', 'https://img.freepik.com/vector-gratis/ilustracion-conferencia-medica-plana_23-2148887153.jpg?w=996&t=st=1703704569~exp=1703705169~hmac=91a6940c7054b1a008d6713fdeb1a631e4abb597c601bb83c43dc5950250e7bf', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Vigilancia epidemiológica:</b> Realiza estudios para comprender las causas, frecuencia y distribución de las enfermedades que afectan a ciertas poblaciones, para identificar patrones de salud y poder tomar oportunamente medidas preventivas.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-vigilancia.webp', 'Vigilancia epidemiológica.', 'https://www.freepik.es/foto-gratis/equipo-especialistas-medicos-que-usan-equipos-proteccion-contra-covid_18374322.htm#query=epidemiologia&position=43&from_view=keyword&track=sph&uuid=186a6868-6b0e-43c3-9ea8-6ad702e869cb', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Intervenciones comunitarias:</b> Las instituciones de salud pública, junto con las comunidades locales, se ocupan de abordar problemas específicos de salud y promover cambios positivos a nivel comunitario.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-comunitarias.webp', 'Educando en salud a la comunidad.', 'https://www.freepik.es/vector-premium/ilustracion-concepto-salud-publica_25026385.htm#query=salud%20comunitaria&position=0&from_view=keyword&track=ais&uuid=b8e4c34b-3171-4589-82e5-dd25d1033fd0', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Control de enfermedades infecciosas:</b> Se encarga de la prevención, detección y control de enfermedades infecciosas a través de medidas como la vacunación, el control de portadores o transmisores, y dar una respuesta rápida a la aparición de alguna enfermedad.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-infecciosas.webp', 'Fumigador de dengue Tuxtla Gutiérrez, Chiapas, México.', 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Fumigador_de_dengue_Tuxtla.jpg', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Políticas de salud:</b> Se ocupan del desarrollo y la implementación de políticas que afectan la salud de la población, como regulaciones sobre la calidad del aire y el agua, la seguridad alimentaria, la publicidad de productos nocivos y otras cuestiones de interés público.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-politicas.webp', 'Es indispensable una verdadera universalidad de la salud.', 'https://www.gaceta.unam.mx/wp-content/uploads/2022/06/220630-aca3-des-f1-politicas-publicas-salud.jpg', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      <li><b>Investigación en salud pública:</b> La investigación científica es esencial para comprender mejor las causas de las enfermedades, evaluar la efectividad de las intervenciones y proporcionar una base sólida para la toma de decisiones en salud pública.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t2-salud.webp', 'Investigador de la  salud pública.', 'https://img.freepik.com/foto-gratis/biologo-experimentado-vestido-ppe-pipeta-solucion-azul-quimico-laboratorio-moderno-haciendo-investigacion-utilizando-dispensador-epidemia-mundial-covid-19_482257-8878.jpg?w=996&t=st=1703705026~exp=1703705626~hmac=7e8730220ad1722461fc21734fbad4b4c529ff2f5624eb752c64400d7c3e063b', 'recuperado el 27 de diciembre de 2023'); ?>
         </div>
      </li>

      </ul>

      <?php
        renderVideoIframe('HxEeXkBurew', 'La investigación en salud: ¿Cuándo necesita revisión ética?');
      ?>

  <?php ob_start(); ?>
  <p>Después de revisar el tema de: Aspectos básicos de la Salud Pública, participa en el foro con tus compañeros, iniciando una discusión a partir de las siguientes preguntas generadoras. Recuerda que debes ser respetuoso de las opiniones de los demás, aun cuando no estés de acuerdo con ellas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a1', "Foro de discusión", $ActividadContent);
  ?>

   
 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
