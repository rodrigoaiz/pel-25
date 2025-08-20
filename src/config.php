<?php
  define('CONFIG_LOADED', true);
  define('BASE_PATH', __DIR__);
  define('BASE_URL', '/dist');
  define('ASSET_URL', BASE_URL . '/assets/');
  define('PATH_ICONS', BASE_URL . '/assets/icons/');
  define('PATH_INCLUDE', BASE_PATH . '/include/');
  
  // Configuración dinámica basada en detección automática del dominio
  $currentHost = $_SERVER['HTTP_HOST'] ?? '';
  
  if (strpos($currentHost, 'asignaturas.cch.unam.mx') !== false) {
    // Entorno de desarrollo/staging
    define('PATH_ACTIVITIES', 'https://asignaturas.cch.unam.mx/');
    define('PATH_SITE', 'https://asignaturas.cch.unam.mx/');
  } else {
    // Entorno de producción (por defecto)
    define('PATH_ACTIVITIES', 'https://pel.cch.unam.mx/');
    define('PATH_SITE', 'https://pel.cch.unam.mx/');
  }
  
  define('PATH_IMAGES', '../../assets/img/');
  define('PATH_DOCS', '../../assets/docs/');
  
  // Función stub para desarrollo - evita errores del linter
  if (!function_exists('require_login')) {
    function require_login($courseid = null) {
      // Esta función solo existe para desarrollo local
      // En producción, Moodle proporcionará la función real
      return true;
    }
  }
?>
