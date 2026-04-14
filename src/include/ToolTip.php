<?php
/**
 * Componente ToolTip para definiciones.
 * Usa position:fixed calculado con JS para evitar ser cortado por overflow:hidden en ancestros.
 * Uso: renderTooltip('palabra', 'Definición de la palabra')
 */

// Variable global de PHP para imprimir el script/elemento flotante solo una vez por página
$_tooltipInitialized = false;

function renderTooltip($texto, $definicion, $posicion = 'top')
{
  global $_tooltipInitialized;

  // La primera vez que se llame, inyectar el div flotante y el script
  if (!$_tooltipInitialized) {
    $_tooltipInitialized = true;
    echo <<<'HTML'
<div id="global-tooltip"
     role="tooltip"
     style="position:fixed;z-index:9999;display:none;max-width:18rem;padding:0.4rem 0.65rem;font-size:0.8rem;font-weight:500;color:#fff;background:#1f2937;border-radius:0.5rem;box-shadow:0 4px 12px rgba(0,0,0,.35);pointer-events:none;line-height:1.4;transition:opacity .15s ease;opacity:0;"></div>
<script>
(function () {
  var tip       = document.getElementById('global-tooltip');
  var MARGIN    = 8;
  var hideTimer = null;

  function position(trigger) {
    var rect = trigger.getBoundingClientRect();
    var tipW = tip.offsetWidth;
    var tipH = tip.offsetHeight;

    var top  = rect.top - tipH - MARGIN;
    if (top < MARGIN) top = rect.bottom + MARGIN;

    var left = rect.left + rect.width / 2 - tipW / 2;
    left = Math.max(MARGIN, Math.min(left, window.innerWidth - tipW - MARGIN));

    tip.style.top  = top  + 'px';
    tip.style.left = left + 'px';
  }

  function show(trigger) {
    if (hideTimer) { clearTimeout(hideTimer); hideTimer = null; }

    var text = trigger.getAttribute('data-tooltip');
    if (!text) return;

    tip.textContent   = text;
    tip.style.opacity = '0';
    tip.style.display = 'block';

    // Esperar un frame para que el navegador calcule dimensiones reales
    requestAnimationFrame(function () {
      position(trigger);
      tip.style.opacity = '1';
    });
  }

  function hide() {
    tip.style.opacity = '0';
    hideTimer = setTimeout(function () {
      tip.style.display = 'none';
      hideTimer = null;
    }, 150);
  }

  // mouseover/mouseout simulando mouseenter/mouseleave via relatedTarget
  document.addEventListener('mouseover', function (e) {
    var t = e.target.closest ? e.target.closest('[data-tooltip]') : null;
    if (!t) return;
    // Ignorar si el mouse venía de dentro del mismo elemento (movimiento interno)
    var from = e.relatedTarget;
    if (from && t.contains(from)) return;
    show(t);
  });

  document.addEventListener('mouseout', function (e) {
    var t = e.target.closest ? e.target.closest('[data-tooltip]') : null;
    if (!t) return;
    // Ignorar si el mouse va a otro nodo dentro del mismo elemento
    var to = e.relatedTarget;
    if (to && t.contains(to)) return;
    hide();
  });

  document.addEventListener('focusin', function (e) {
    if (e.target.hasAttribute && e.target.hasAttribute('data-tooltip')) show(e.target);
  });
  document.addEventListener('focusout', function (e) {
    if (e.target.hasAttribute && e.target.hasAttribute('data-tooltip')) hide();
  });
})();
</script>
HTML;
  }

  // Renderizar la palabra con el atributo de datos; sin posicionamiento relativo propio
  echo '<span'
    . ' tabindex="0"'
    . ' data-tooltip="' . htmlspecialchars($definicion, ENT_QUOTES, 'UTF-8') . '"'
    . ' class="text-secondary font-semibold underline decoration-dotted decoration-2 underline-offset-4 cursor-help hover:text-primary transition-colors duration-200 focus:outline-none focus:ring-1 focus:ring-secondary rounded"'
    . '>' . htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') . '</span>';
}

/**
 * Mantenida por compatibilidad; ya no se usa internamente.
 */
function getTooltipPositionClasses($posicion)
{
  return '';
}
?>
