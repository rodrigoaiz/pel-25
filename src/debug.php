<?php
// Cargar config de Moodle
require_once(__DIR__ . '/../config.php');
require_login();

global $USER, $COURSE, $DB, $CFG;

// Obtener ID de actividad desde URL (?cmid=123)
$cmid = optional_param('cmid', 0, PARAM_INT);

if (!$cmid) {
  echo "<h1>Debug Moodle Info</h1>";
  echo "<p>Agrega ?cmid=XXX a la URL (ejemplo: ?cmid=123)</p>";
  die();
}

// Obtener info de la actividad
$cm = $DB->get_record('course_modules', ['id' => $cmid]);
if (!$cm) {
  die("Actividad no encontrada");
}

// Obtener el tipo de módulo (h5pactivity, assign, forum, etc.)
$module = $DB->get_record('modules', ['id' => $cm->module]);
$moduleName = $module ? $module->name : 'Desconocido';

// Obtener el nombre de la actividad específica
$moduleInstance = null;
$activityName = '';
if ($module) {
  // Consultar la tabla específica del módulo (ej: mdl_h5pactivity, mdl_assign, etc.)
  $moduleInstance = $DB->get_record($module->name, ['id' => $cm->instance]);
  if ($moduleInstance && isset($moduleInstance->name)) {
    $activityName = $moduleInstance->name;
  }
}

$course = $DB->get_record('course', ['id' => $cm->course]);
$context = context_course::instance($cm->course);
$roles = get_user_roles($context, $USER->id);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Moodle Debug Info</title>
  <style>
    body {
      font-family: Arial;
      padding: 20px;
      background: #f5f5f5;
    }

    .card {
      background: white;
      padding: 20px;
      margin: 10px 0;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      border-bottom: 2px solid #007bff;
      padding-bottom: 10px;
    }

    .info-grid {
      display: grid;
      grid-template-columns: 200px 1fr;
      gap: 10px;
    }

    .label {
      font-weight: bold;
      color: #666;
    }

    .value {
      color: #333;
    }
  </style>
</head>

<body>
  <h1>🔍 Moodle Debug Information</h1>

  <!-- Usuario actual -->
  <div class="card">
    <h2>👤 Usuario Actual</h2>
    <div class="info-grid">
      <div class="label">ID:</div>
      <div class="value"><?php echo $USER->id; ?></div>

      <div class="label">Nombre:</div>
      <div class="value"><?php echo $USER->firstname . ' ' . $USER->lastname; ?></div>

      <div class="label">Email:</div>
      <div class="value"><?php echo $USER->email; ?></div>

      <div class="label">Username:</div>
      <div class="value"><?php echo $USER->username; ?></div>

      <div class="label">Idioma:</div>
      <div class="value"><?php echo $USER->lang; ?></div>
    </div>
  </div>

  <!-- Roles del usuario -->
  <div class="card">
    <h2>🎭 Roles en este Curso</h2>
    <?php foreach ($roles as $role): ?>
      <div class="info-grid">
        <div class="label">Rol:</div>
        <div class="value"><?php echo $role->shortname; ?> (<?php echo $role->name; ?>)</div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Info del curso -->
  <div class="card">
    <h2>📚 Curso</h2>
    <div class="info-grid">
      <div class="label">ID:</div>
      <div class="value"><?php echo $course->id; ?></div>

      <div class="label">Nombre completo:</div>
      <div class="value"><?php echo $course->fullname; ?></div>

      <div class="label">Nombre corto:</div>
      <div class="value"><?php echo $course->shortname; ?></div>

      <div class="label">Visible:</div>
      <div class="value"><?php echo $course->visible ? '✅ Sí' : '❌ No'; ?></div>

      <div class="label">Fecha inicio:</div>
      <div class="value"><?php echo date('Y-m-d H:i', $course->startdate); ?></div>
    </div>
  </div>

  <!-- Info de la actividad -->
  <div class="card">
    <h2>🎯 Actividad (Course Module)</h2>
    <div class="info-grid">
      <div class="label">CMID:</div>
      <div class="value"><?php echo $cm->id; ?></div>

      <div class="label">Nombre de la actividad:</div>
      <div class="value"><strong><?php echo $activityName ? $activityName : 'N/A'; ?></strong></div>

      <div class="label">Tipo de módulo:</div>
      <div class="value"><strong><?php echo $moduleName; ?></strong> 
        <?php 
        $moduleEmojis = [
          'h5pactivity' => '🎮',
          'assign' => '📝',
          'forum' => '💬',
          'quiz' => '❓',
          'resource' => '📄',
          'url' => '🔗',
          'page' => '📄',
          'book' => '📚',
          'folder' => '📁',
          'label' => '🏷️',
          'chat' => '💭',
          'choice' => '✅',
          'glossary' => '📖',
          'wiki' => '📝',
          'workshop' => '🛠️',
          'lesson' => '📘',
          'scorm' => '📦',
          'survey' => '📊',
          'feedback' => '📋'
        ];
        echo isset($moduleEmojis[$moduleName]) ? $moduleEmojis[$moduleName] : '📌';
        ?>
      </div>

      <div class="label">Course ID:</div>
      <div class="value"><?php echo $cm->course; ?></div>

      <div class="label">Module ID:</div>
      <div class="value"><?php echo $cm->module; ?></div>

      <div class="label">Instance ID:</div>
      <div class="value"><?php echo $cm->instance; ?></div>

      <div class="label">Visible:</div>
      <div class="value"><?php echo $cm->visible ? '✅ Sí' : '❌ No'; ?></div>
      
      <?php if ($moduleInstance): ?>
      <div class="label">Datos completos:</div>
      <div class="value">
        <details>
          <summary style="cursor: pointer; color: #007bff;">Ver datos del módulo →</summary>
          <pre style="background: #f8f9fa; padding: 10px; border-radius: 4px; overflow-x: auto; margin-top: 10px;"><?php print_r($moduleInstance); ?></pre>
        </details>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Capacidades -->
  <div class="card">
    <h2>🔐 Capacidades del Usuario</h2>
    <div class="info-grid">
      <div class="label">Puede enviar tareas:</div>
      <div class="value"><?php echo has_capability('mod/assign:submit', $context) ? '✅ Sí' : '❌ No'; ?></div>

      <div class="label">Puede calificar:</div>
      <div class="value"><?php echo has_capability('mod/assign:grade', $context) ? '✅ Sí' : '❌ No'; ?></div>

      <div class="label">Puede editar curso:</div>
      <div class="value"><?php echo has_capability('moodle/course:update', $context) ? '✅ Sí' : '❌ No'; ?></div>

      <div class="label">Es administrador:</div>
      <div class="value"><?php echo is_siteadmin() ? '✅ Sí' : '❌ No'; ?></div>
    </div>
  </div>

  <!-- Usuarios inscritos -->
  <div class="card">
    <h2>👥 Usuarios Inscritos en el Curso</h2>
    <?php
    $enrolled = get_enrolled_users($context, '', 0, 'u.id, u.firstname, u.lastname, u.email', null, 0, 10);
    echo "<p>Mostrando primeros 10 usuarios:</p>";
    ?>
    <table style="width: 100%; border-collapse: collapse;">
      <tr style="background: #f0f0f0;">
        <th style="padding: 8px; text-align: left;">ID</th>
        <th style="padding: 8px; text-align: left;">Nombre</th>
        <th style="padding: 8px; text-align: left;">Email</th>
      </tr>
      <?php foreach ($enrolled as $user): ?>
        <tr>
          <td style="padding: 8px; border-top: 1px solid #ddd;"><?php echo $user->id; ?></td>
          <td style="padding: 8px; border-top: 1px solid #ddd;"><?php echo $user->firstname . ' ' . $user->lastname; ?></td>
          <td style="padding: 8px; border-top: 1px solid #ddd;"><?php echo $user->email; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>
