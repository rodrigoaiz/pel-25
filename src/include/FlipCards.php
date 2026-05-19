<?php
/**
 * FlipCards Component
 * 
 * Renders interactive flip cards with front and back content.
 * Cards flip on click/tap to reveal the answer or additional information.
 * 
 * @param array $config Configuration array with the following structure:
 *   - title (string): Title displayed above the cards
 *   - instructions (string): Instructions text for users
 *   - showCardNumbers (bool): Whether to show "Tarjeta 1, 2, 3" in header. Default: false
 *   - cards (array): Array of card objects, each containing:
 *     - title (string): Card title (e.g., "Cocodrilo", "Mal matrimonio")
 *     - front (string): Content for the front of the card (without title)
 *     - back (string): Content for the back of the card
 *     - color (string): Tailwind color class (e.g., 'emerald', 'cyan', 'purple', 'blue', 'pink', 'amber')
 * 
 * @example
 * renderFlipCards([
 *   'title' => 'Ejercicio de Narración',
 *   'instructions' => 'Lee el fragmento y da clic para ver el tipo de narrador.',
 *   'showCardNumbers' => false,
 *   'cards' => [
 *     [
 *       'title' => 'Cocodrilo',
 *       'front' => '<p>Un cocodrilo provocó el terror...</p>',
 *       'back' => 'Tercera persona',
 *       'color' => 'emerald'
 *     ]
 *   ]
 * ]);
 */

function renderFlipCards($config)
{
  $title = $config['title'] ?? '';
  $instructions = $config['instructions'] ?? '';
  $cards = $config['cards'] ?? [];
  $showCardNumbers = $config['showCardNumbers'] ?? false;

  // Generate unique ID for this card group to avoid conflicts
  $uniqueId = 'flip-cards-' . uniqid();

  // Color mapping for consistency
  $colorMap = [
    'emerald' => [
      'border' => 'border-emerald-500',
      'bg' => 'bg-emerald-500',
      'bgLight' => 'bg-emerald-50',
      'text' => 'text-emerald-700',
      'ring' => 'focus-visible:ring-emerald-500'
    ],
    'cyan' => [
      'border' => 'border-cyan-500',
      'bg' => 'bg-cyan-500',
      'bgLight' => 'bg-cyan-50',
      'text' => 'text-cyan-700',
      'ring' => 'focus-visible:ring-cyan-500'
    ],
    'purple' => [
      'border' => 'border-purple-500',
      'bg' => 'bg-purple-500',
      'bgLight' => 'bg-purple-50',
      'text' => 'text-purple-700',
      'ring' => 'focus-visible:ring-purple-500'
    ],
    'blue' => [
      'border' => 'border-blue-500',
      'bg' => 'bg-blue-500',
      'bgLight' => 'bg-blue-50',
      'text' => 'text-blue-700',
      'ring' => 'focus-visible:ring-blue-500'
    ],
    'pink' => [
      'border' => 'border-pink-500',
      'bg' => 'bg-pink-500',
      'bgLight' => 'bg-pink-50',
      'text' => 'text-pink-700',
      'ring' => 'focus-visible:ring-pink-500'
    ],
    'amber' => [
      'border' => 'border-amber-500',
      'bg' => 'bg-amber-500',
      'bgLight' => 'bg-amber-50',
      'text' => 'text-amber-700',
      'ring' => 'focus-visible:ring-amber-500'
    ],
    'rose' => [
      'border' => 'border-rose-500',
      'bg' => 'bg-rose-500',
      'bgLight' => 'bg-rose-50',
      'text' => 'text-rose-700',
      'ring' => 'focus-visible:ring-rose-500'
    ]
  ];
?>

  <style>
    /* Flip card 3D animations */
    .flip-card-container {
      perspective: 1000px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      min-height: 300px;
      transition: transform 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
      transform-style: preserve-3d;
    }

    .flip-card-container.flipped .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-face {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
    }

    .flip-card-back {
      transform: rotateY(180deg);
    }

    /* Smooth hover effect - sutil elevación sin zoom */
    .flip-card-container:not(.flipped):hover .flip-card-face > div {
      box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      transition: box-shadow 0.3s ease;
    }

    /* Click indicator */
    .flip-indicator {
      animation: pulse-subtle 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse-subtle {
      0%, 100% {
        opacity: 1;
      }
      50% {
        opacity: 0.7;
      }
    }
  </style>

  <div class="my-8">
    <?php if ($title): ?>
      <h3 class="text-2xl font-bold text-darkestblue-own mb-3"><?= htmlspecialchars($title) ?></h3>
    <?php endif; ?>

    <?php if ($instructions): ?>
      <p class="mb-6 text-slate-700 max-w-4xl"><?= htmlspecialchars($instructions) ?></p>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <?php foreach ($cards as $index => $card): ?>
        <?php
        $cardId = $uniqueId . '-' . $index;
        $color = $card['color'] ?? 'emerald';
        $colors = $colorMap[$color] ?? $colorMap['emerald'];
        $cardTitle = $card['title'] ?? '';
        $front = $card['front'] ?? '';
        $back = $card['back'] ?? '';
        $tooltipId = $cardId . '-tooltip';
        ?>

        <!-- Tooltip popover -->
        <div data-popover id="<?= $tooltipId ?>" role="tooltip" class="absolute z-50 invisible inline-block w-64 text-sm text-gray-700 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xl opacity-0">
          <div class="px-3 py-2">
            <p class="text-gray-600 leading-relaxed text-xs"><strong>Tip:</strong> Da clic en cada tarjeta para voltearla y descubrir la respuesta. Puedes voltear las tarjetas cuantas veces necesites.</p>
          </div>
          <div data-popper-arrow></div>
        </div>

        <div class="flip-card-container cursor-pointer group" 
             id="<?= $cardId ?>" 
             onclick="if(event.target.closest('.help-button-card')) return; this.classList.toggle('flipped')"
             onkeydown="if(event.key === 'Enter' || event.key === ' ') { event.preventDefault(); this.classList.toggle('flipped'); }"
             tabindex="0"
             role="button"
             aria-label="<?= $cardTitle ? htmlspecialchars($cardTitle) : 'Tarjeta ' . ($index + 1) ?>. Da clic para voltear y ver la respuesta"
             aria-pressed="false">
          
          <div class="flip-card-inner">
            <!-- Front of card -->
            <div class="flip-card-face flip-card-front">
              <div class="h-full flex flex-col <?= $colors['border'] ?> border-2 rounded-xl shadow-lg overflow-hidden bg-white transition-shadow group-hover:shadow-xl">
                <div class="<?= $colors['bg'] ?> px-3 py-2.5 flex items-center justify-between gap-2">
                  <?php if ($showCardNumbers): ?>
                    <span class="text-white font-semibold text-xs tracking-wide flex-shrink-0">Tarjeta <?= $index + 1 ?></span>
                  <?php endif; ?>
                  <?php if ($cardTitle): ?>
                    <span class="text-white font-bold text-sm tracking-wide flex-1 <?= $showCardNumbers ? 'text-left' : 'text-center' ?>"><?= htmlspecialchars($cardTitle) ?></span>
                  <?php endif; ?>
                  <button
                    type="button"
                    data-popover-target="<?= $tooltipId ?>"
                    data-popover-placement="bottom"
                    data-popover-trigger="hover"
                    class="help-button-card text-white/90 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/30 rounded-full p-1 transition-colors flex-shrink-0"
                    onclick="event.stopPropagation()"
                    aria-label="Ayuda">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                  </button>
                </div>
                <div class="flex-1 p-5 flex items-center justify-center <?= $colors['bgLight'] ?>">
                  <div class="text-center prose prose-sm max-w-none">
                    <?= $front ?>
                  </div>
                </div>
                <div class="px-3 py-2.5 bg-slate-50 border-t border-slate-200">
                  <p class="text-xs text-slate-600 text-center font-medium flex items-center justify-center gap-1 my-0">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                    </svg>
                    <span>Clic para ver respuesta</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Back of card -->
            <div class="flip-card-face flip-card-back">
              <div class="h-full flex flex-col <?= $colors['border'] ?> border-2 rounded-xl shadow-lg overflow-hidden bg-white">
                <div class="<?= $colors['bg'] ?> px-4 py-3 flex items-center justify-between">
                  <span class="text-white font-semibold text-sm tracking-wide">Respuesta</span>
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div class="flex-1 flex items-center justify-center p-6 bg-white">
                  <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full <?= $colors['bgLight'] ?> mb-4">
                      <svg class="w-8 h-8 <?= $colors['text'] ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                    </div>
                    <div class="<?= $colors['text'] ?> font-bold text-xl mb-1">
                      <?= $back ?>
                    </div>
                  </div>
                </div>
                <div class="px-3 py-2.5 bg-slate-50 border-t border-slate-200">
                  <p class="text-xs text-slate-600 text-center font-medium flex items-center justify-center gap-1 my-0">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span>Clic para regresar</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

  <script>
    // Initialize Flowbite popovers for flip cards
    if (typeof Popover !== 'undefined') {
      document.querySelectorAll('[data-popover-target]').forEach(trigger => {
        const targetId = trigger.getAttribute('data-popover-target');
        const targetEl = document.getElementById(targetId);
        
        if (targetEl) {
          new Popover(targetEl, trigger, {
            placement: trigger.getAttribute('data-popover-placement') || 'bottom',
            triggerType: trigger.getAttribute('data-popover-trigger') || 'hover',
            offset: 8
          });
        }
      });
    }

    // Add keyboard accessibility and screen reader support
    document.querySelectorAll('.flip-card-container').forEach(card => {
      card.addEventListener('click', function(e) {
        // Don't flip if clicking the help button
        if (e.target.closest('.help-button-card')) {
          return;
        }
        
        const isFlipped = this.classList.contains('flipped');
        this.setAttribute('aria-pressed', isFlipped ? 'true' : 'false');
      });
    });
  </script>

<?php
}
?>
