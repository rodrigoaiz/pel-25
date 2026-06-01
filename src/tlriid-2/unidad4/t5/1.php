<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Valoración estética y universalidad de la obra</h2>
  <p>Esta parte de la unidad está diseñada para que después de haber analizado los elementos que componen la historia de la novela, al tiempo que trabajaste algunos de los elementos del discurso, puedas realizar juicios más fundamentados acerca del trabajo analizado y por consiguiente valorar tanto el trabajo desde un punto de vista estético, como la universalidad de la obra.</p>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t4img1.webp',
      );
    ?>
  </div>
  <p>A continuación vamos a proponerte una serie de ejercicios que te permitan observar cómo es que la obra ha sido integrada para que puedas valorar su universalidad y la aprecies como un producto estético.</p>
  <p>Previo a este ejercicio, deberás leer <em>Carta al padre</em> de Franz Kafka. Ésta es una carta que el autor escribió a su padre, aunque nunca se atrevió a dársela. En ella se observa claramente el tipo de relación que mantenía con su padre y se vislumbra la que tenía con el resto de su familia. Deberás leerla con atención, ya que trabajarás con ella para relacionarla en distintos niveles con su trabajo de ficción <em>Metamorfosis</em>. </p>
  <p>El texto completo de la Carta al padre, lo puedes encontrar en la siguiente liga:</p>
  <div class="flex justify-center my-4">
      <a href="https://web.seducoahuila.gob.mx/biblioweb/upload/Carta%20al%20padre,%20de%20Franz%20Kafka.pdf" target="_blank" rel="noopener noreferrer"
          class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v2a2 2 0 002 2h14a2 2 0 002-2v-2M16 6l-4-4-4 4" />
          </svg>
          Descargar PDF
      </a>
  </div>
  <h4>Relación de las situaciones de los personajes con las humanas reales</h4>
  <p>Si bien es cierto que <wm>Metamorfosis</wm> es un trabajo de ficción y <em>Carta al padre</em> no lo es, ambos textos reflejan las preocupaciones de su autor Franz Kafka. A continuación vamos a pedirte que mentalmente o en tu cuaderno enumeres las diez similitudes y las diez diferencias más notables que encuentres en ambos trabajos. Te recomendamos basarte en los elementos de la historia o del discurso.</p>
  <div class="max-w-lg mx-auto">
    <?php
      renderImage(
      'tlriid2-u4t4img2.webp',
      );
    ?>
  </div>
  <p>Una vez realizado lo anterior habrás notado que estos textos no son iguales, pero mantienen muchas similitudes entre sí. Esto sucede porque el autor utiliza elementos de la realidad de su vida para transformarlos en ficción.</p>
  
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
