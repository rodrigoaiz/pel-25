<?php
function renderAccordion($items, $prefix = '')
{
  echo '<div id="' . $prefix . 'accordion-collapse" data-accordion="collapse">';
  $lastIndex = count($items) - 1;
  foreach ($items as $index => $item) {
    $headingId = $prefix . "accordion-collapse-heading-" . ($index + 1);
    $bodyId = $prefix . "accordion-collapse-body-" . ($index + 1);
    $ariaExpanded = $index === 0 ? 'true' : 'false';
    $bodyClass = $index === 0 ? '' : 'hidden';
    $roundedClass = $index === 0 ? 'rounded-t-md' : ($index === $lastIndex ? 'rounded-b-md' : '');
    $borderClass = $index === $lastIndex ? 'border-b' : 'border-b-0';
    echo '
        <span id="' . $headingId . '">
            <button type="button" class="flex items-center justify-between w-full p-3 text-secondary border border-slate-400 ' . $roundedClass . ' hover:bg-slate-200 cursor-pointer" data-accordion-target="#' . $bodyId . '" aria-expanded="' . $ariaExpanded . '" aria-controls="' . $bodyId . '">
                <span class="uppercase font-titulos text-xl font-medium">' . $item['title'] . '</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </span>
        <div id="' . $bodyId . '" class="' . $bodyClass . ' ' . $borderClass . '" aria-labelledby="' . $headingId . '">
            <div class="p-5 border border-gray-200">
                ' . $item['content'] . '
            </div>
        </div>';
  }
  echo '</div>';
}
