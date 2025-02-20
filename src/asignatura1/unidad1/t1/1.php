<?php
include '../../../config.php';
include PATH_INCLUDE . 'header1.php';
include PATH_INCLUDE . 'MenuUnidades.php';

// Ruta al archivo JSON específico de la asignatura
$menuAsignaturaPath = BASE_PATH . '/asignatura1/assets/data/menu_asignatura.json';

// Renderizar el menú
renderMenuUnidades($menuAsignaturaPath);