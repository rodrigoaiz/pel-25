<?php

function renderActividad($actividadKey, $ActividadTitulo = "Para Actividad más", $ActividadContent = "")
{
  // ===== CONTROL DE OVERLAY DE PROFESOR =====
  // Cambiar a false para desactivar la detección de profesores
  $ENABLE_TEACHER_DETECTION = true;
  // ===========================================
  
  // Detectar si el usuario es profesor
  global $USER, $COURSE, $DB, $CFG;
  $isTeacher = false;
  
  // Intentar cargar el contexto de Moodle si no está cargado
  if (!function_exists('has_capability') || !isset($COURSE)) {
    // Intentar cargar config de Moodle desde diferentes rutas posibles
    $moodleConfigPaths = [
      dirname(__FILE__) . '/../../config.php',  // Desde include/ hacia root
      dirname(__DIR__) . '/config.php',
    ];
    
    foreach ($moodleConfigPaths as $ruta) {
      if (file_exists($ruta) && !function_exists('has_capability')) {
        require_once($ruta);
        
        // Intentar require_login si existe
        if (function_exists('require_login')) {
          try {
            require_login();
          } catch (Exception $e) {
            // Silenciar errores de autenticación
          }
        }
        break;
      }
    }
  }
  
  // Si Moodle se cargó pero falta context_course, intentar cargarlo
  if (function_exists('has_capability') && !class_exists('context_course')) {
    // Intentar cargar la clase context manualmente
    if (isset($CFG->dirroot)) {
      $context_files = [
        $CFG->dirroot . '/lib/accesslib.php',
        $CFG->dirroot . '/lib/classes/context.php',
        $CFG->dirroot . '/lib/classes/context/course.php',
      ];
      
      foreach ($context_files as $file) {
        if (file_exists($file)) {
          require_once($file);
        }
      }
    }
  }
  
  // NOTA: La detección de profesor se movió después de cargar $actividad
  // para poder obtener el Course ID correcto desde la actividad de Moodle
  $isTeacher = false;


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
  
  // ==== DETECCIÓN DE PROFESOR (usando Course ID de la actividad) ====
  $realCourseId = null;
  if ($ENABLE_TEACHER_DETECTION && isset($actividad['id']) && isset($DB) && isset($USER->id)) {
    try {
      global $DB;
      // Obtener el Course ID desde el módulo de la actividad
      $cmid = $actividad['id']; // Este es el course module ID
      $cm = $DB->get_record('course_modules', ['id' => $cmid]);
      
      if ($cm && isset($cm->course)) {
        $realCourseId = $cm->course;
        
        // Ahora obtener roles en el curso CORRECTO
        if (function_exists('get_user_roles') && class_exists('context_course')) {
          try {
            $context = context_course::instance($realCourseId);
            $roles = get_user_roles($context, $USER->id);
            
            foreach ($roles as $role) {
              $roleShortname = strtolower($role->shortname);
              
              // Lista de roles que SÍ deben ver el overlay
              $teacherRoles = ['teacher', 'asesor', 'editingteacher'];
              
              // Lista de roles excluidos
              $excludedRoles = ['student', 'manager'];
              
              // Verificar que NO esté excluido
              $isExcluded = false;
              foreach ($excludedRoles as $excluded) {
                if ($roleShortname === $excluded) {
                  $isExcluded = true;
                  break;
                }
              }
              
              // Si no está excluido, verificar si es profesor
              if (!$isExcluded) {
                foreach ($teacherRoles as $teacherRole) {
                  if (strpos($roleShortname, $teacherRole) !== false) {
                    $isTeacher = true;
                    break 2;
                  }
                }
              }
            }
          } catch (Exception $e) {
            $isTeacher = false;
          }
        }
      }
    } catch (Exception $e) {
      $isTeacher = false;
    }
  }
  
  // ==== DEBUG (después de detección) ====
  if ($ENABLE_DEBUG) {
    echo "<script>";
    echo "console.log('🔍🔍🔍 TEACHER DETECTION DEBUG 🔍🔍🔍');";
    echo "console.log('Detection Enabled:', " . json_encode($ENABLE_TEACHER_DETECTION) . ");";
    echo "console.log('Is Teacher:', " . json_encode($isTeacher) . ");";
    echo "console.log('User ID:', " . json_encode(isset($USER->id) ? $USER->id : 'N/A') . ");";
    echo "console.log('Username:', " . json_encode(isset($USER->username) ? $USER->username : 'N/A') . ");";
    echo "console.log('Activity CM ID:', " . json_encode($actividad['id']) . ");";
    echo "console.log('Real Course ID:', " . json_encode($realCourseId) . ");";
    echo "console.log('Global COURSE ID (wrong):', " . json_encode(isset($COURSE->id) ? $COURSE->id : 'N/A') . ");";
    
    // Obtener roles para debug
    if ($realCourseId && isset($DB)) {
      try {
        global $DB;
        $sql = "SELECT r.id, r.name, r.shortname
                FROM {role_assignments} ra
                JOIN {role} r ON ra.roleid = r.id
                JOIN {context} c ON ra.contextid = c.id
                WHERE ra.userid = :userid 
                AND c.instanceid = :courseid 
                AND c.contextlevel = 50";
        $debugRoles = $DB->get_records_sql($sql, ['userid' => $USER->id, 'courseid' => $realCourseId]);
        echo "console.log('User Roles in REAL course:', " . json_encode(array_values(array_map(function($r) { 
          return ['name' => $r->name, 'shortname' => $r->shortname, 'id' => $r->id]; 
        }, $debugRoles))) . ");";
      } catch (Exception $e) {
        echo "console.error('Debug error:', " . json_encode($e->getMessage()) . ");";
      }
    }
    
    echo "console.log('🔍🔍🔍 END DEBUG 🔍🔍🔍');";
    echo "</script>";
  }
  // ==================================================================

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
    <?php if ($ENABLE_DEBUG): ?>
    <!-- DEBUG VISUAL INDICATOR -->
    <div style="position: fixed; top: 10px; right: 10px; background: #ff6b35; color: white; padding: 8px 12px; border-radius: 8px; z-index: 9999; font-family: monospace; font-size: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
      🔍 DEBUG: <?php echo $isTeacher ? '✅ TEACHER' : '❌ NOT TEACHER'; ?> | User: <?php echo isset($USER->username) ? $USER->username : 'N/A'; ?>
    </div>
    <?php endif; ?>
    
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
          <!-- Overlay para profesores (mostrado automáticamente si es profesor) -->
          <?php if ($isTeacher): ?>
          <div id="teacher-overlay-<?php echo htmlspecialchars($actividadKey); ?>" 
               class="teacher-overlay absolute inset-0 bg-orange-own/85 backdrop-blur-sm rounded-lg z-30"
               data-actividad-key="<?php echo htmlspecialchars($actividadKey); ?>">
            <div class="flex flex-col items-center justify-center h-full p-6 text-center">
              <div class="bg-white rounded-lg shadow-2xl p-6 md:p-8 max-w-md">
                <div class="flex justify-center mb-4">
                  <svg class="w-16 h-16 text-orange-own" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">⚠️ Acceso como Profesor</h3>
                <p class="text-gray-700 mb-4">
                  <strong>No intente calificar ni gestionar actividades desde aquí.</strong> Este visor de contenido es exclusivo para estudiantes.
                </p>
                <p class="text-sm text-gray-600 mb-6">
                  Para revisar entregas, calificar o administrar actividades, debe acceder directamente a la <strong>plataforma Moodle</strong> mediante su interfaz de gestión.
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
          <?php endif; ?>
          
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
