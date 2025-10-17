<?php

function renderActividad($actividadKey, $ActividadTitulo = "Para Actividad más", $ActividadContent = "")
{
  // Obtener la ruta del archivo JSON basado en la URL actual
  $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $pathSegments = explode('/', trim($urlPath, '/'));
  $asignaturaName = $pathSegments[1]; // Ajustado para obtener el nombre de la asignatura correctamente
  $unidadName = $pathSegments[2]; // Obtener el nombre de la unidad

  // Construir la ruta del archivo JSON
  $jsonPath = BASE_PATH . '/' . $asignaturaName . '/assets/data/menu_asignatura.json';

  if (!file_exists($jsonPath)) {
    echo "El archivo JSON no existe en la ruta: " . $jsonPath;
    return;
  }

  $json = file_get_contents($jsonPath);
  if ($json === false) {
    echo "Error al leer el archivo JSON.";
    return;
  }

  $menu = json_decode($json, true);
  if ($menu === null) {
    echo "Error al decodificar el JSON: " . json_last_error_msg();
    return;
  }

  // Depuración: Verificar que la clave actividadKey existe en el JSON
  if (!isset($menu['actividades'][$actividadKey])) {
    echo "Actividad no encontrada en el JSON.";
    return;
  }

  $actividad = $menu['actividades'][$actividadKey];
  $moduleName = $actividad['moduleName']; // Recuperar moduleName del JSON
  $iconPath = PATH_ICONS . $moduleName . '.svg';

  // Mensajes de ayuda contextuales según el tipo de actividad
  $helpMessages = [
    'quiz' => [
      'title' => 'Cuestionario - Cómo usar',
      'content' => 'Contiene el cuestionario de esta actividad. Haz <strong>scroll interno hacia abajo o desliza</strong> para ver todas las preguntas. No olvides enviar tus respuestas.'
    ],
    'forum' => [
      'title' => 'Foro - Cómo participar en el foro',
      'content' => 'Usa el <strong>scroll interno hacia abajo o desliza</strong> para navegar por las publicaciones. Puedes leer, responder y crear nuevas discusiones dentro de esta ventana.'
    ],
    'assign' => [
      'title' => 'Tarea - Cómo entregar tu tarea',
      'content' => 'Esta área contiene tu tarea. Haz <strong>scroll interno hacia abajo o desliza</strong> para ver todas las instrucciones y el área de entrega. Después de enviar, verás la confirmación en la parte superior.'
    ],
    'lesson' => [
      'title' => 'Lección - Cómo navegar la lección',
      'content' => 'Navega por el contenido usando el <strong>scroll interno hacia abajo o desliza</strong>. Avanza por las páginas de la lección dentro de esta ventana.'
    ],
    'feedback' => [
      'title' => 'Cómo responder',
      'content' => 'Completa el cuestionario usando el <strong>scroll interno hacia abajo o desliza</strong> para ver todas las preguntas. Tu respuesta se guardará al finalizar.'
    ],
    'choice' => [
      'title' => 'Cómo participar',
      'content' => 'Selecciona tu opción y envía. Usa el <strong>scroll interno hacia abajo o desliza</strong> si es necesario para ver todas las opciones disponibles.'
    ],
    'default' => [
      'title' => 'Cómo usar esta actividad',
      'content' => 'Esta ventana contiene tu actividad interactiva. Puedes hacer <strong>scroll interno hacia abajo o desliza</strong> para ver todo el contenido. Cualquier mensaje de confirmación aparecerá en la parte superior.'
    ]
  ];

  // Seleccionar mensaje apropiado según el tipo de módulo
  $helpInfo = isset($helpMessages[$moduleName]) ? $helpMessages[$moduleName] : $helpMessages['default'];

  if ($actividad) {
?>
    <div data-popover id="popover-help-<?php echo htmlspecialchars($actividadKey); ?>" role="tooltip" class="absolute z-50 invisible inline-block w-[calc(100vw-2rem)] max-w-sm md:max-w-md text-sm text-gray-700 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xl opacity-0">
      <div class="px-3 md:px-4 py-2 md:py-3 bg-secondary/10 border-b border-gray-200 rounded-t-lg">
        <h3 class="font-semibold text-secondary text-sm md:text-base flex items-center gap-2">
          <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <?php echo htmlspecialchars($helpInfo['title']); ?>
        </h3>
      </div>
      <div class="px-3 md:px-4 py-2 md:py-3 space-y-2">
        <p class="text-gray-600 leading-relaxed text-sm"><?php echo $helpInfo['content']; ?></p>
        <div class="pt-2 mt-2 border-t border-gray-200">
          <p class="text-xs text-gray-500 flex items-start gap-2">
            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Tip: El contenido se encuentra dentro del área con borde gris. Haz scroll si no ves todo.</span>
          </p>
        </div>
      </div>
      <div data-popper-arrow></div>
    </div>
    <div class="actividad">
      <div class="flex justify-between items-center gap-x-3 pt-5 pb-3">
        <div class="flex items-center gap-x-3">
          <img class="w-10 max-h-5 my-0" src="<?php echo $iconPath; ?>" alt="Icono Actividad">
          <span><?php echo htmlspecialchars($ActividadTitulo); ?></span>
        </div>

        <!-- Botón de ayuda con popover -->
        <button
          data-popover-target="popover-help-<?php echo htmlspecialchars($actividadKey); ?>"
          data-popover-placement="bottom"
          data-popover-trigger="click"
          type="button"
          class="help-button-actividad text-gray-500 hover:text-secondary focus:outline-none focus:ring-2 focus:ring-secondary/30 rounded-full p-2 transition-colors"
          aria-label="Ayuda">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </button>

        <!-- Popover de ayuda -->

      </div>

      <?php echo $ActividadContent; ?>

    </div>
    
    <!-- Contenedor del iframe con background visual -->
    </section>
    <div class="seccion-actividad bg-darkgrey-own/95 py-5">
      <div class="actividad-wrapper max-w-5xl mx-auto">
        <div class="iframe-container-actividad relative">
          <!-- Overlay para profesores (oculto por defecto) -->
          <div id="teacher-overlay-<?php echo htmlspecialchars($actividadKey); ?>" 
               class="teacher-overlay absolute inset-0 bg-orange-own/85 backdrop-blur-sm rounded-lg z-50 hidden">
            <div class="flex flex-col items-center justify-center h-full p-6 text-center">
              <div class="bg-white rounded-lg shadow-2xl p-6 md:p-8 max-w-md">
                <div class="flex justify-center mb-4">
                  <svg class="w-16 h-16 text-orange-own" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Modo Profesor Detectado</h3>
                <p class="text-gray-700 mb-4">
                  Las evaluaciones y actividades deben gestionarse desde la <strong>plataforma Moodle</strong> directamente, no desde este visor de contenido educativo.
                </p>
                <p class="text-sm text-gray-600 mb-6">
                  Este espacio está diseñado para que los estudiantes realicen sus actividades. Para calificar, revisar entregas o gestionar actividades, por favor accede a Moodle.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                  <button onclick="closeTeacherOverlay('<?php echo htmlspecialchars($actividadKey); ?>')" 
                          class="px-6 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg font-medium transition-colors">
                    Ver de todos modos
                  </button>
                  <a href="<?php echo PATH_ACTIVITIES; ?>" 
                     target="_blank"
                     class="px-6 py-2 bg-secondary hover:bg-secondary/80 text-white rounded-lg font-medium transition-colors">
                    Ir a Moodle
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <iframe class="w-full actividadmoodle"
            id="iframe-<?php echo htmlspecialchars($actividadKey); ?>"
            src="<?php echo PATH_ACTIVITIES; ?>mod/<?php echo htmlspecialchars($moduleName); ?>/view.php?id=<?php echo $actividad['id']; ?>&amp;theme=photo"
            scrolling="auto"
            frameborder="0"
            title="<?php echo htmlspecialchars($ActividadTitulo); ?>"></iframe>
        </div>
      </div>
    </div>
    <section>
<?php
  } else {
    echo "Actividad no encontrada.";
  }
}
  ?>
