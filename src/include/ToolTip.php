<?php
/**
 * Componente ToolTip simple para definiciones
 * Uso: renderTooltip('palabra', 'Definición de la palabra')
 */

/**
 * Renderiza un tooltip sencillo usando solo CSS y clases de Tailwind
 * @param string $texto - La palabra que tendrá el tooltip
 * @param string $definicion - La definición que se mostrará
 * @param string $posicion - Posición del tooltip: 'top', 'bottom', 'left', 'right'
 */
function renderTooltip($texto, $definicion, $posicion = 'top')
{
  $posicion_clases = getTooltipPositionClasses($posicion);
  
  echo '<span class="group relative inline-block">';
  echo '<span class="text-secondary font-semibold underline decoration-dotted decoration-2 underline-offset-4 cursor-help hover:text-primary transition-colors duration-200">' . htmlspecialchars($texto) . '</span>';
  echo '<span class="' . $posicion_clases . ' absolute z-50 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">';
  echo '<span class="block w-72 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-lg whitespace-normal">';
  echo htmlspecialchars($definicion);
  echo '</span>';
  echo '</span>';
  echo '</span>';
}

/**
 * Obtiene las clases de Tailwind para posicionar el tooltip
 */
function getTooltipPositionClasses($posicion)
{
  switch ($posicion) {
    case 'top':
      return 'bottom-full left-1/2 transform -translate-x-1/2 mb-2';
    case 'bottom':
      return 'top-full left-1/2 transform -translate-x-1/2 mt-2';
    case 'left':
      return 'right-full top-1/2 transform -translate-y-1/2 mr-2';
    case 'right':
      return 'left-full top-1/2 transform -translate-y-1/2 ml-2';
    default:
      return 'bottom-full left-1/2 transform -translate-x-1/2 mb-2';
  }
}
?>
