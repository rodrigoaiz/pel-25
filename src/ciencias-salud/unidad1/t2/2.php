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
          <h4>Edad Antigua (3000 a.C. - 476 d.C.)</h4>
          <p>Se inicia alrededor del año 4000 aC, y llega hasta el año 476 dC. En esta época las explicaciones que se daban con relación al proceso salud-enfermedad, eran de tipo místico-religioso; con el uso de la observación, se fueron desarrollando los conocimientos de anatomía, fisiología, disecciones humanas, etc., en el transcurso de esta etapa, fueron apareciendo las aportaciones de las diferentes culturas como la egipcia, china, babilónica, griega y romana, entre otras. Entre los personajes más destacados de esta época podemos encontrar a: Hamurabi de Mesopotamia, Hipócrates de Cos de Grecia y Claudio Galeno romano.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-galeno.webp'; ?>" alt="Instrumentos médicos antiguos" class="timeline-img">
            <div class="timeline-caption">
              <p>Pintura mural del Siglo xii, que representa a Galeno e Hipócrates (derecha). Italia.</p>
              <p>Las dos figuras médicas más importantes de la antigüedad clásica, en un fresco perteneciente a una capilla benedictina de Anagni, Lacio, al sur de Roma. Siglo xii.</p>
            </div>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-papiro.webp'; ?>" alt="Medicina antigua" class="timeline-img">
            <p class="timeline-caption">Representación de prácticas médicas en civilizaciones antiguas</p>
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
            <img src="<?php echo PATH_IMAGES . 'u1-medico-con-medico-con-gafas.webp'; ?>" alt="Médico medieval" class="timeline-img">
            <p class="timeline-caption">Médicos medievales con sus instrumentos básicos</p>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'hu2-u1-heyenbrock.webp'; ?>" alt="Medicina medieval" class="timeline-img">
            <p class="timeline-caption">Prácticas médicas durante la Edad Media</p>
          </div>
        </div>
        <div class="timeline-text">
          <h4>Edad Media (476 - 1453)</h4>
          <p>Período dominado por explicaciones religiosas de la enfermedad. Se establecieron los primeros hospitales en monasterios. La medicina árabe preservó y expandió el conocimiento médico griego, desarrollando nuevos tratamientos y técnicas quirúrgicas.</p>
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
          <h4>Edad Moderna (1453 - 1789)</h4>
          <p>Renacimiento de la investigación médica. Se desarrolló la anatomía moderna con Andreas Vesalius. William Harvey describió la circulación sanguínea. Se inventó el microscopio, revolucionando el entendimiento de las enfermedades y microorganismos.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-diagrama-factores.png'; ?>" alt="Avances médicos modernos" class="timeline-img">
            <p class="timeline-caption">Desarrollo de teorías médicas y factores de la salud</p>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-tubos.webp'; ?>" alt="Instrumentos modernos" class="timeline-img">
            <p class="timeline-caption">Evolución de los instrumentos médicos en la era moderna</p>
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
            <img src="<?php echo PATH_IMAGES . 'u1-george-liberman.webp'; ?>" alt="Medicina del siglo XIX" class="timeline-img">
            <p class="timeline-caption">Desarrollo de la medicina científica moderna</p>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-medico-con-medico-con-gafas.webp'; ?>" alt="Médicos contemporáneos" class="timeline-img">
            <p class="timeline-caption">Profesionalización de la medicina en el siglo XIX-XX</p>
          </div>
        </div>
        <div class="timeline-text">
          <h4>Edad Contemporánea (1789 - 1945)</h4>
          <p>Era de grandes descubrimientos: la teoría microbiana de Louis Pasteur, el desarrollo de vacunas, anestesia y antisépticos. Se estableció la medicina basada en evidencia científica y comenzó la especialización médica.</p>
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
          <h4>Época Actual (1945 - presente)</h4>
          <p>Medicina moderna con tecnología avanzada: resonancia magnética, tomografías, medicina molecular y genética. Desarrollo de antibióticos, trasplantes de órganos, telemedicina y medicina personalizada basada en el genoma humano.</p>
        </div>
        <div class="timeline-images">
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-tubos.webp'; ?>" alt="Tecnología médica actual" class="timeline-img">
            <p class="timeline-caption">Tecnología médica de vanguardia del siglo XXI</p>
          </div>
          <div class="timeline-image-item">
            <img src="<?php echo PATH_IMAGES . 'u1-diagrama-factores.png'; ?>" alt="Medicina moderna" class="timeline-img">
            <p class="timeline-caption">Enfoque multifactorial de la salud moderna</p>
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
