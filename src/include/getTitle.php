<?php
function getTitle($menuData, $currentUrl)
{
  foreach ($menuData['menu'] as $modulo) {
    if (isset($modulo['url']) && $modulo['url'] === $currentUrl) {
      return $modulo['nombre'];
    }
  }
  return 'Título por defecto';
}
