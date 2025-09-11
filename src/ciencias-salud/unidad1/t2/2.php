<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La salud y la enfermedad</h2>
  <h3>Antecedentes: Breve historia del proceso de salud-enfermedad.</h3>
  <p>El hombre se enfrentó desde tiempos muy remotos, a la necesidad de entender el porqué de la salud y la enfermedad, siendo las primeras explicaciones de tipo mágico-religioso (sobrenatural) sobre el problema, en esta época se tenía la idea de que las enfermedades se producían por espíritus malignos, y las prácticas de curación eran místicas y rituales religiosos (hacían el papel de médicos); para entender esta historia se ha dividido en las siguientes etapas.</p>

  <!-- Línea del Tiempo -->
  <div class="timeline-container">
    <!-- Edad Antigua -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="timeline-marker">
        <div class="timeline-dot"></div>
      </div>
      <div class="timeline-content timeline-left">
        <div class="timeline-text">
          <h4>Edad Antigua (4000 a.C. - 476 d.C.)</h4>
          <p>Se inicia alrededor del año 4000 aC, y llega hasta el año 476 dC. En esta época las explicaciones que se daban con relación al proceso salud-enfermedad, eran de tipo místico-religioso; con el uso de la observación, se fueron desarrollando los conocimientos de anatomía, fisiología, disecciones humanas, etc., en el transcurso de esta etapa, fueron apareciendo las aportaciones de las diferentes culturas como la egipcia, china, babilónica, griega y romana, entre otras. Entre los personajes más destacados de esta época podemos encontrar a: Hamurabi de Mesopotamia, Hipócrates de Cos de Grecia y Claudio Galeno romano.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-galeno.webp'; ?>" alt="Instrumentos médicos antiguos" class="timeline-img">
            <div class="timeline-caption">
              <p>Pintura mural del Siglo XII, que representa a Galeno e Hipócrates (derecha). Italia.</p>
              <p class="overflow-hidden text-ellipsis">Las dos figuras médicas más importantes de la antigüedad clásica, en un fresco perteneciente a una capilla benedictina de Anagni, Lacio, al sur de Roma. Siglo XII. https://es.wikipedia.org/wiki/Historia_de_la_medicina#/media/Archivo:Galenoghippokrates.jpg recuperado el 2 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-papiro.webp'; ?>" alt="Medicina antigua" class="timeline-img">
            <div class="timeline-caption">
              <p class="overflow-hidden text-ellipsis">Tratamiento de la migraña recogido en un papiro egipcio, a base de un emplasto de hierbas y un cocodrilo de arcilla. https://upload.wikimedia.org/wikipedia/commons/2/28/Papyrus_Migraine_Therapy.png recuperado el 2 de noviembre de 2023.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edad Media -->
    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
      <div class="timeline-marker">
        <div class="timeline-dot"></div>
      </div>
      <div class="timeline-content timeline-right">
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-canon-libro-medico.webp'; ?>" alt="El Canon, libro médico de Avicena (Ibn Sina)." class="timeline-img">
            <div class="timeline-caption">
              <p>El <strong>Canon</strong>, libro médico de Avicena (Ibn Sina).</p>
              <p class="text-xs">https://www.researchgate.net/figure/Figura-2-El-canon-libro-medico-de-Avicena-Ibn-Sina_fig1_365868926 recuperado el 2 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-cordoba-spain.webp'; ?>" alt="Estatua de Maimónides en Córdoba, España" class="timeline-img">
            <div class="timeline-caption">
              <p>Estatua de Maimónides filósofo, teólogo y médico judío, en su ciudad natal Córdoba España.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Cordoba, Spain_(11174916253).jpg recuperado el 2 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-anatomical-illustration.webp'; ?>" alt="Ilustración anatómica del siglo XIII" class="timeline-img">
            <div class="timeline-caption">
              <p>Ilustración anatómica de la circulación sanguínea del siglo XII.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:13th_century_anatomical_illustration_-_sharp.jpg recuperado el 2 de noviembre de 2023</p>
            </div>
          </div>
        </div>
        <div class="timeline-text">
          <h4>Edad Media (s. V - s. XV)</h4>
          <p>Esta etapa comprende del siglo V al XV. En la primera parte de esta, las ideas sobre la salud-enfermedad estuvieron basadas en textos romanos y griegos conservados en monasterios. Continuaba el pensamiento místico-religioso, en el que la cura la proporcionaba la iglesia y Dios. Conforme fue avanzando esta época, en los siglos XI y XII se fundaron las primeras universidades que fueron centros de aprendizaje y desempeñaron un papel fundamental en la preservación y transmisión de los conocimientos, lo que convirtió a la medicina en un cuerpo formal de conocimientos teóricos, y se sentaron las bases de importantes descubrimientos. Algunos de los personajes más importantes de la época fueron, Avicena de Persia, Hildegard von Bingen monja benedictina alemana, Maimónides filósofo, teólogo y médico judío. </p>
        </div>
      </div>
    </div>

    <!-- Edad Moderna -->
    <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
      <div class="timeline-marker">
        <div class="timeline-dot"></div>
      </div>
      <div class="timeline-content timeline-left">
        <div class="timeline-text">
          <h4>Edad Moderna (finales del s. XV - s. XVIII)</h4>
          <p>Esta época inicia a finales del siglo XV y dura hasta el siglo XVIII, comienzan a abandonarse las creencias religiosas con respecto al proceso de salud-enfermedad y empiezan a buscarse explicaciones en el campo de la realidad concreta. Se retoman los conocimientos legados por Hipócrates y Avicena, se desarrolla el microscopio con el cual se pudieron observar los microorganismos causantes de muchas enfermedades y surge la microbiología. Se fortalece el pensamiento médico científico, organizándose alrededor de la enfermedad y la clínica. Dentro de los representantes de la época encontramos a Andrés Vesalio de Bélgica, William Harvey, inglés, Leonardo Da Vinci, italiano.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-vesalius.webp'; ?>" alt="Andrés Vesalio" class="timeline-img">
            <div class="timeline-caption">
              <p>Andrés Vesalio, su principal obra fue "De Humani Corporis Fabrica", sobre la estructura del cuerpo humano.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Vesalius_Fabrica_portrait.jpg recuperado el 3 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-da-vinci.webp'; ?>" alt="Estudio de embrión por Leonardo Da Vinci" class="timeline-img">
            <div class="timeline-caption">
              <p>Dibujo realizado por Leonardo Da Vinci, sobre el estudio del embrión humano hecho entre 1510-1513.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Da_Vinci_Studies_of_Embryos_Luc_Viatour.jpg recuperado el 3 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-william-harvey.webp'; ?>" alt="William Harvey" class="timeline-img">
            <div class="timeline-caption">
              <p>William Harvey, médico inglés que describió por primera vez la circulación y las propiedades de la sangre al ser distribuida por todo el cuerpo, a través del bombeo del corazón.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:William_Harvey_2.jpg recuperado el 3 de noviembre de 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edad Contemporánea -->
    <div class="timeline-item" data-aos="fade-up" data-aos-delay="600">
      <div class="timeline-marker">
        <div class="timeline-dot"></div>
      </div>
      <div class="timeline-content timeline-right">
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-edward-jenner.webp'; ?>" alt="Edward Jenner" class="timeline-img">
            <div class="timeline-caption">
              <p>Edward Jenner, descubridor de la vacuna contra la viruela. En 1980 la OMS declaró a esta enfermedad como erradicada.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Edward_Jenner.jpg recuperado el 5 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-louis-pasteur.webp'; ?>" alt="Louis Pasteur en su laboratorio" class="timeline-img">
            <div class="timeline-caption">
              <p>Louis Pasteur en su laboratorio, el siglo XIX revoluciona la medicina: la asepsia, la medicina preventiva y el diagnóstico.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Tableau_Louis_Pasteur.jpg recuperado el 5 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-flag-who.webp'; ?>" alt="Bandera de la OMS" class="timeline-img">
            <div class="timeline-caption">
              <p>En 1948 se fundó la OMS bajo el amparo de la Organización de Naciones Unidas ONU, primer organismo médico internacional especializado en gestionar políticas de prevención, promoción e intervención en salud a nivel mundial.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Flag_of_WHO.svg recuperado el 5 de noviembre de 2023</p>
            </div>
          </div>
        </div>
        <div class="timeline-text">
          <h4>Edad Contemporánea (finales del s. XVIII - mediados del s. XX)</h4>
          <p>Inicia a finales del siglo XVIII y concluye a mediados del siglo XX. La concepción de la salud-enfermedad ha tenido cambios significativos durante esta época; la medicina adopta el modelo biomédico, que consiste en la identificación y tratamiento de las causas fisiológicas de las enfermedades. Louis Pasteur y Robert Koch, propusieron la Teoría germinal de las enfermedades, que proponía que la causa directa de muchas enfermedades infecciosas eran los microorganismos. Este periodo marca el surgimiento de la medicina moderna, con el desarrollo de los antibióticos, la anestesia y cirugías, la tecnología médica, los analgésicos, las vacunas y el avance de los sistemas de salud pública. En 1948 se crea la Organización Mundial de la Salud (OMS). Algunos de los científicos más importantes de la época son: Louis Pasteur, bioquímico francés, Alexander Fleming médico británico, Eduard Jenner, médico británico.</p>
        </div>
      </div>
    </div>

    <!-- Época Actual -->
    <div class="timeline-item" data-aos="fade-up" data-aos-delay="800">
      <div class="timeline-marker">
        <div class="timeline-dot timeline-dot-current"></div>
      </div>
      <div class="timeline-content timeline-left">
        <div class="timeline-text">
          <h4>Época Actual (mediados del s. XX - presente)</h4>
          <p>Inicia a mediados del siglo XX hasta la actualidad. En 1977 se crea el Modelo Biopsicosocial, que reconoce la importancia de los factores biológicos, psicológicos y sociales en el proceso de salud y enfermedad. Los enfoques preventivos, la salud mental y la medicina personalizada son temas centrales. La atención se ha desplazado hacia la calidad de vida y el bienestar. Algunos de los eventos más importantes del siglo XXI, son la medicina genómica, la terapia génica, la tecnología digital aplicada a la salud, la inteligencia artificial para el diagnóstico médico, y se ha acelerado la investigación en el desarrollo de vacunas y tratamientos en respuesta a las pandemias.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-gene-therapy.webp'; ?>" alt="Terapia Génica" class="timeline-img">
            <div class="timeline-caption">
              <p>Terapia Génica</p>
              <p class="text-xs">https://upload.wikimedia.org/wikipedia/commons/3/3d/Gene_therapy.jpg recuperado el 6 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-smallpox-vaccine.webp'; ?>" alt="Investigación y desarrollo de vacunas" class="timeline-img">
            <div class="timeline-caption">
              <p>Investigación y desarrollo de vacunas.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Smallpox_vaccine.jpg recuperado el 6 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-telecare-conference.webp'; ?>" alt="Telemedicina" class="timeline-img">
            <div class="timeline-caption">
              <p>Telemedicina, es la prestación de servicios médicos a distancia.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:%E8%95%AD%E4%B8%AD%E6%AD%A3%E9%99%A2%E9%95%B7%E9%80%B2%E8%A1%8CTelecare_conference.jpg recuperado el 6 de noviembre de 2023</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-laproscopic-surgery-robot.webp'; ?>" alt="Cirugía robótica" class="timeline-img">
            <div class="timeline-caption">
              <p>Una máquina de cirugía robótica laparoscópica, del sistema quirúrgico Da Vinci.</p>
              <p class="text-xs">https://commons.wikimedia.org/wiki/File:Laproscopic_Surgery_Robot.jpg recuperado el 6 de noviembre de 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
