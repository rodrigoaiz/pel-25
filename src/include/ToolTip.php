<?php
/**
 * Componente ToolTip para definiciones y ayuda contextual
 * Uso: renderTooltip('palabra', 'Definición de la palabra')
 */

function renderTooltip($texto, $definicion, $posicion = 'top', $clase_adicional = '')
{
  $tooltip_id = 'tooltip-' . uniqid();
  $posicion_clase = getTootipPositionClass($posicion);
  
  echo '<span class="tooltip-container relative inline-block ' . $clase_adicional . '" data-tooltip-target="' . $tooltip_id . '" data-tooltip-placement="' . $posicion . '">';
  echo '<span class="tooltip-trigger text-secondary font-semibold underline decoration-dotted decoration-2 underline-offset-4 cursor-help hover:text-primary transition-colors duration-200">' . htmlspecialchars($texto) . '</span>';
  echo '<div id="' . $tooltip_id . '" role="tooltip" class="tooltip-content absolute z-50 invisible opacity-0 ' . $posicion_clase . ' transition-all duration-300 ease-in-out">';
  echo '<div class="max-w-xs px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-lg">';
  echo htmlspecialchars($definicion);
  echo '<div class="tooltip-arrow" data-popper-arrow></div>';
  echo '</div>';
  echo '</div>';
  echo '</span>';
}

/**
 * Tooltip más avanzado con contenido HTML personalizado
 * Uso: renderTooltipHTML('palabra', '<strong>Definición</strong> con <em>HTML</em>')
 */
function renderTooltipHTML($texto, $contenido_html, $posicion = 'top', $clase_adicional = '')
{
  $tooltip_id = 'tooltip-' . uniqid();
  $posicion_clase = getTootipPositionClass($posicion);
  
  echo '<span class="tooltip-container relative inline-block ' . $clase_adicional . '" data-tooltip-target="' . $tooltip_id . '" data-tooltip-placement="' . $posicion . '">';
  echo '<span class="tooltip-trigger text-secondary font-semibold underline decoration-dotted decoration-2 underline-offset-4 cursor-help hover:text-primary transition-colors duration-200">' . htmlspecialchars($texto) . '</span>';
  echo '<div id="' . $tooltip_id . '" role="tooltip" class="tooltip-content absolute z-50 invisible opacity-0 ' . $posicion_clase . ' transition-all duration-300 ease-in-out">';
  echo '<div class="max-w-sm px-4 py-3 text-sm text-white bg-gray-900 rounded-lg shadow-lg">';
  echo $contenido_html; // No escapamos HTML aquí ya que es intencional
  echo '<div class="tooltip-arrow" data-popper-arrow></div>';
  echo '</div>';
  echo '</div>';
  echo '</span>';
}

/**
 * Tooltip simple solo con CSS (sin JavaScript)
 * Útil para casos donde no se puede usar JS
 */
function renderTooltipCSS($texto, $definicion, $posicion = 'top')
{
  $posicion_clase = getTootipPositionClass($posicion, true);
  
  echo '<span class="tooltip-css relative inline-block group">';
  echo '<span class="text-secondary font-semibold underline decoration-dotted decoration-2 underline-offset-4 cursor-help">' . htmlspecialchars($texto) . '</span>';
  echo '<span class="tooltip-css-content absolute z-50 invisible group-hover:visible opacity-0 group-hover:opacity-100 ' . $posicion_clase . ' transition-all duration-300 ease-in-out">';
  echo '<span class="block max-w-xs px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-lg whitespace-normal">';
  echo htmlspecialchars($definicion);
  echo '</span>';
  echo '</span>';
  echo '</span>';
}

/**
 * Obtiene las clases CSS para posicionar el tooltip
 */
function getTootipPositionClass($posicion, $css_only = false)
{
  $prefix = $css_only ? 'tooltip-css-' : '';
  
  switch ($posicion) {
    case 'top':
      return $prefix . 'bottom-full left-1/2 transform -translate-x-1/2 mb-2';
    case 'bottom':
      return $prefix . 'top-full left-1/2 transform -translate-x-1/2 mt-2';
    case 'left':
      return $prefix . 'right-full top-1/2 transform -translate-y-1/2 mr-2';
    case 'right':
      return $prefix . 'left-full top-1/2 transform -translate-y-1/2 ml-2';
    default:
      return $prefix . 'bottom-full left-1/2 transform -translate-x-1/2 mb-2';
  }
}

/**
 * Incluir los estilos CSS necesarios para los tooltips
 * Llamar una vez en el header o en la página
 */
function includeTooltipStyles()
{
  echo '<style>
/* Estilos para tooltips CSS-only */
.tooltip-css:hover .tooltip-css-content {
  visibility: visible;
  opacity: 1;
}

/* Flecha para tooltips CSS */
.tooltip-css .tooltip-css-content::after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border: 5px solid transparent;
}

/* Posición de flecha según ubicación del tooltip */
.tooltip-css .tooltip-css-bottom-full::after {
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  border-top-color: #1f2937;
}

.tooltip-css .tooltip-css-top-full::after {
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  border-bottom-color: #1f2937;
}

.tooltip-css .tooltip-css-right-full::after {
  left: 100%;
  top: 50%;
  transform: translateY(-50%);
  border-left-color: #1f2937;
}

.tooltip-css .tooltip-css-left-full::after {
  right: 100%;
  top: 50%;
  transform: translateY(-50%);
  border-right-color: #1f2937;
}

/* Mejores estilos hover para la palabra */
.tooltip-trigger:hover,
.tooltip-css:hover > span:first-child {
  color: var(--color-primary);
  text-decoration-color: var(--color-primary);
}

/* Responsivo para tooltips */
@media (max-width: 640px) {
  .tooltip-content > div,
  .tooltip-css-content > span {
    max-width: 16rem;
    font-size: 0.75rem;
  }
}
</style>';
}

/**
 * JavaScript para tooltips avanzados (opcional)
 * Mejora la funcionalidad con mejor posicionamiento
 */
function includeTooltipScript()
{
  echo '<script>
document.addEventListener("DOMContentLoaded", function() {
  // Inicializar tooltips básicos con hover
  const tooltipTriggers = document.querySelectorAll(".tooltip-trigger");
  
  tooltipTriggers.forEach(trigger => {
    const container = trigger.parentElement;
    const tooltipId = container.getAttribute("data-tooltip-target");
    const tooltip = document.getElementById(tooltipId);
    
    if (tooltip) {
      // Mostrar tooltip
      trigger.addEventListener("mouseenter", () => {
        tooltip.classList.remove("invisible", "opacity-0");
        tooltip.classList.add("visible", "opacity-100");
      });
      
      // Ocultar tooltip
      trigger.addEventListener("mouseleave", () => {
        tooltip.classList.remove("visible", "opacity-100");
        tooltip.classList.add("invisible", "opacity-0");
      });
      
      // Ocultar tooltip si se hace clic fuera
      document.addEventListener("click", (e) => {
        if (!container.contains(e.target)) {
          tooltip.classList.remove("visible", "opacity-100");
          tooltip.classList.add("invisible", "opacity-0");
        }
      });
    }
  });
});
</script>';
}
?>
