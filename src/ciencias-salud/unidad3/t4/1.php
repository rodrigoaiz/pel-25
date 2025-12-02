<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Breve historia del concepto de salud integral</h2>

  <p>El concepto de salud integral se remonta a tiempos muy  antiguos, ya que culturas como la China, India, Griega y Romana, consideraban la suma o equilibrio entre diversos elementos para lograrla, tales como: el cuerpo, la mente, el espíritu y el entorno, entre otros. En China hace 4000 años se practicaba la medicina tradicional, la cual incluye la teoría del Yin Yang (dos fuerzas opuestas que forman un todo), los cinco elementos (fuego, agua, madera, metal, tierra), acupuntura (estímulo de partes específicas del cuerpo, principalmente con la inserción de agujas muy finas), la moxibustión (terapia con calor en la que se queman hojas de plantas para estimular áreas afectadas), fitoterapia (uso de plantas medicinales), el Tui Na (masajes como medio terapéutico), el Qi gong (sistema de posturas y movimientos corporales coordinados de respiración y meditación), el Tai Chi (posturas y movimientos suaves).</p>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-acupuntura.webp', 'Mapa de puntos de aplicación de acupuntura. Dinastía Ming.', 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Acupuncture_chart_300px.jpg', 'wikimedia.');
              ?>
          </div>



  <p>En la India usaban la medicina ayurveda desde hace 5000 años, la cual se centra en los tres Doshas: Vata, Pitta y Kapha que están constituidos por diferentes combinaciones del éter, aire, fuego, agua y tierra (los cinco elementos de la naturaleza), además de la fitoterapia, la dieta, y la desintoxicación, lo cual conduce al equilibrio entre el cuerpo, la mente y el espíritu.</p>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-ayurveda.webp', 'Diagrama de los tres humores en ayurveda y los cinco grandes elementos  que los constituyen.', 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Humores_en_ayurveda.svg', 'wikimedia.');
              ?>
          </div>

  <p>La medicina griega de la antigüedad en sus inicios se basaba en la religión y la magia. Posteriormente Hipócrates entre los años 460 y 370 a C. estableció la teoría de los humores humanos (sangre-aire, flema-agua, bilis amarilla-fuego y bilis negra-tierra), los cuales corresponden a los cuatro elementos de la naturaleza y deben estar en equilibrio para conservar la salud. El concepto de salud era integral ya que consideraban importante la dieta, la nutrición, el ejercicio físico, la higiene personal, el saneamiento público, la salud mental y el cuidado espiritual, por lo tanto el enfoque de la salud era holístico, ya que consideraba a el cuerpo, la mente y el espíritu, o sea el bienestar físico, emocional y espiritual.</p>

  <div class="flex items-center justify-center max-w-7xl mx-auto gap-10">
  <div class="mx-auto max-w-xs">
              <?php
                renderImage('u3-t4-higea.webp', ' Higea diosa de la curación, la limpieza y la sanidad. La palabra “higiene” proviene de su nombre.', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Hygieia.png', 'wikimedia.');
              ?>
          </div>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-vasija.webp', 'Vasija griega del 480-470 a. C. representando una escena quirúrgica.', 'https://es.wikipedia.org/wiki/Historia_de_la_cirug%C3%ADa#/media/Archivo:Medicine_aryballos_Louvre_CA1989-2183.jpg', 'wikimedia.');
              ?>
          </div>
  </div>

  <p>En Europa durante la Edad Media, la influencia de la iglesia controló el avance del conocimiento médico, mientras que en los países que profesaban la religión del Islam continuó el desarrollo de la medicina, en la que combinaban el cuerpo y la mente. En el siglo XVI, durante el Renacimiento se despertó el interés por el conocimiento científico, con los estudios de anatomía, progresos en la farmacología, investigaciones en cirugía, entre otros. También se inicia la construcción de hospitales y se implementan medidas de salud pública como las cuarentenas para controlar epidemias, se mejoran las condiciones sanitarias y la infraestructura de salud pública.</p>

  <div class="flex items-center justify-center max-w-7xl mx-auto gap-10">
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-elixir.webp', 'El médico del Renacimiento crea un elixir para curar enfermedades.', 'https://www.freepik.es/fotos-premium/antiguo-boticario-experimenta-quimica-hace-nueva-medicina-su-laboratorio-medico-renacimiento-crea-elixir-curativo-curar-enfermedades_200860884.htm', 'freepik.');
              ?>
          </div>

          <div class="mx-auto max-w-sm">
              <?php
                renderImage('u3-t4-leonardo.webp', 'Estudio anatómico del brazo por Leonardo da Vinci (1510).', 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Leonardo_da_Vinci_-_RCIN_919000%2C_Verso_The_bones_and_muscles_of_the_arm_c.1510-11.jpg', 'wikimedia.');
              ?>
          </div>
  </div>

          <p>Durante el siglo XVIII, hubo progresos importantes en el conocimiento médico, la práctica clínica y la salud pública. También continuó el avance en estudios de anatomía y fisiología, se desarrolla la patología, se utilizan los opiáceos para controlar el dolor, inician las campañas de vacunación contra la viruela y las mejoras en la higiene pública sentaron las bases de la medicina preventiva moderna, y así mismo se resaltó la importancia de la prevención de enfermedades.</p>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-jenner.webp', 'Edward Jenner, el “padre de la inmunología moderna”, realizó las primeras inoculaciones, específicamente para prevenir la viruela.', 'https://upload.wikimedia.org/wikipedia/commons/d/d6/Edward_Jenner%2C_vaccinating_his_young_child%2C_held_by_Mrs_Jenn_Wellcome_L0011550.jpg', 'wikimedia.');
              ?>
          </div>

          <p>En el siglo XIX se inicia la epidemiología moderna, se mejoran los tratamientos para enfermedades mentales, comenzó el uso de anestésicos como el éter y el cloroformo lo que permitió realizar cirugías con mayor duración y complejidad. Se introdujeron técnicas antisépticas que disminuyeron el porcentaje de infecciones y continuó el mejoramiento de las condiciones sanitarias en las ciudades.</p>

           <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-kit.webp', 'Kit quirúrgico médico militar de principios del siglo XIX.', 'https://www.freepik.es/fotos-premium/kit-quirurgico-medico-militar-principios-siglo-xix-herramienta-trabajo-cirujano-campo-medio-operando-pinzas-pinzas-cirugia-campo-vista-superior-fondo-textura-gris_17030493.htm', 'freepik.');
              ?>
          </div>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-maletin.webp', 'Maletín médico-quirúrgico del siglo XIX', 'https://upload.wikimedia.org/wikipedia/commons/4/46/Instruments-medecine-19e-p1030519.jpg', 'wikimedia.');
              ?>
          </div>

          <p>Fueron múltiples las aportaciones a la salud que se dieron durante el siglo XX, una de ellas es la fundación de la <b>Organización Mundial de la Salud (OMS)</b>, encargada de las gestiones políticas de prevención, promoción e intervención a nivel mundial de la salud, definiendo ésta como: “Un estado de completo bienestar físico, mental, social y no solo la ausencia de afecciones o enfermedades”. Otros grandes avances durante este siglo fueron el descubrimiento y desarrollo de los antibióticos, los análisis clínicos, las imágenes médicas (que permiten observar al organismo sin métodos invasivos), como las tomografías computarizadas, la resonancia magnética, el ultrasonido, además de los rayos X que son tecnologías que han permitido hacer mejores diagnósticos basados en evidencias. </p>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-radiografia.webp', 'Radiografía del tórax de un ser humano. Mediante el empleo de los rayos X pueden visualizarse estructuras como huesos, corazón o pulmones.', 'https://upload.wikimedia.org/wikipedia/commons/0/01/Pneumonia_x_ray.jpg', 'wikimedia.');
              ?>
          </div>

          <p>Las cirugías laparoscópicas (mediante pequeños cortes el médico puede observar, manipular, cortar y coser tejidos), los trasplantes de órganos (corazón, pulmón, riñón, etc.), campañas de vacunación masivas, mejoras en la infraestructura del saneamiento y suministro de agua potable redujeron la incidencia de enfermedades. Contra el tratamiento del cáncer se desarrolló la quimioterapia y radioterapia; también se han creado fármacos para una gran cantidad de enfermedades (antipsicóticos, antihipertensivos, antidepresivos, contra la diabetes, etc.). </p>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-resonancia.webp', 'Equipo de resonancia magnética.', 'https://www.freepik.es/foto-gratis/medico-esta-preparando-al-paciente-tomografia-computarizada_25053901.htm#fromView=keyword&page=1&position=1&uuid=88519ebe-8eab-4a5e-b1c7-d502b53d5dae&query=Resonancia+magnetica', 'freepik.');
              ?>
          </div>

          <p>Durante el siglo XXI, continuaron los avances tecnológicos y científicos alcanzados en el siglo anterior: haciendo uso de la tecnología se puede dar atención médica a distancia a través de videoconferencias. También se utilizan dispositivos portátiles, tales como relojes inteligentes que monitorean los signos vitales, medidores de glucosa, la inteligencia artificial aplicada en el diagnóstico y tratamiento de enfermedades entre otros. Otro avance es la medicina personalizada, que permite tratamientos específicos en los que se incluye la genética, el estilo de vida y el entorno de cada paciente, así mismo la terapia génica y la farmacogenómica a través de la información genética del paciente, permiten mejorar la eficiencia y reducir los efectos secundarios.</p>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-robot.webp', 'Robot de cirugía Da Vinci.', 'https://upload.wikimedia.org/wikipedia/commons/0/0d/Laproscopic_Surgery_Robot.jpg', 'wikimedia.');
              ?>
          </div>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t4-telemedicina.webp', 'Telemedicina- El doctor dando una teleconsulta médica', 'https://upload.wikimedia.org/wikipedia/commons/0/0d/Laproscopic_Surgery_Robot.jpg', 'wikimedia.');
              ?>
          </div>

          <p>Otra particularidad de la salud en el siglo XXI es su enfoque holístico, en el que se toman en cuenta la salud emocional, mental, social, espiritual y no solo la física, buscando la salud integral de la población.</p> 

  <?php ob_start(); ?>
  <p>Da clik en la pestaña que corresponda a cada etapa y aparecerá la información. Este ejercicio te servirá para reforzar los conocimientos adquiridos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a1', "Línea del tiempo.", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
