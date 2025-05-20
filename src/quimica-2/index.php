<?php
include '../include/MenuUnidades.php';
include '../config.php';

// Ruta al archivo JSON específico de la asignatura
$menuAsignaturaPath = BASE_PATH . '/asignatura1/assets/data/menu_asignatura.json';

// Renderizar el menú
renderMenuUnidades($menuAsignaturaPath);
