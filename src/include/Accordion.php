<?php
function renderAccordion($items)
{
  echo '<div id="accordion-collapse" data-accordion="collapse">';
  foreach ($items as $index => $item) {
    $headingId = "accordion-collapse-heading-" . ($index + 1);
    $bodyId = "accordion-collapse-body-" . ($index + 1);
    $ariaExpanded = $index === 0 ? 'true' : 'false';
    $bodyClass = $index === 0 ? '' : 'hidden';
    echo '
        <h2 id="' . $headingId . '">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 ' . ($index === 0 ? 'rounded-t-xl' : '') . ' focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#' . $bodyId . '" aria-expanded="' . $ariaExpanded . '" aria-controls="' . $bodyId . '">
                <span>' . $item['title'] . '</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="' . $bodyId . '" class="' . $bodyClass . '" aria-labelledby="' . $headingId . '">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                ' . $item['content'] . '
            </div>
        </div>';
  }
  echo '</div>';
}
