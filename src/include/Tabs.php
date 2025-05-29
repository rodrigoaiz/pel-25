<?php
function TabsComponent(array $props = []) {
    $uniq = uniqid('tabs_');
    $activeTab = $props['active'] ?? $props['tabs'][0]['id'];

    // Estilos responsivos
    $defaultClasses = [
        'container' => 'mb-8',
        'tablist' => 'flex overflow-x-auto md:overflow-visible md:flex-wrap justify-start md:justify-center border-b border-gray-200 list-none p-0 scrollbar-hide whitespace-nowrap my-0',
        'tabWrapper' => 'flex-grow-0 flex-shrink-0 px-1 mb-0',
        'tab' => 'w-full px-4 md:px-6 py-3 font-medium text-sm rounded-t-lg transition-all duration-300 ease-in-out text-center relative',
        'activeTab' => 'text-blue-600 border-b-2 border-blue-500 bg-white hover:bg-blue-50 font-semibold',
        'inactiveTab' => 'text-gray-500 hover:text-blue-600 hover:bg-gray-100',
        'panelContainer' => 'bg-white p-4 md:p-6 rounded-b-lg shadow-sm border border-t-0 border-gray-200',
        'panel' => 'transition-all duration-300 ease-out',
        'hiddenPanel' => 'hidden opacity-0',
        'mobileMenuButton' => 'md:hidden mb-2 w-full flex items-center justify-between p-3 bg-gray-100 rounded-lg font-medium', // Botón para móviles
        'mobileMenuIcon' => 'transform transition-transform duration-200' // Icono para móviles
    ];

    // Fusionar clases personalizadas
    $classes = array_merge($defaultClasses, [
        'container' => $defaultClasses['container'].' '.($props['containerClass'] ?? ''),
        'tab' => $defaultClasses['tab'].' '.($props['tabClass'] ?? ''),
        'panel' => $defaultClasses['panel'].' '.($props['panelClass'] ?? '')
    ]);

    // Generar HTML de los tabs
    $tabsHtml = array_map(function($tab) use ($uniq, $activeTab, $classes) {
        $isActive = $activeTab === $tab['id'];
        return sprintf(
            '<li class="%s" role="presentation">
                <button
                    id="%s_tab_%s"
                    class="%s %s focus:outline-none focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50"
                    data-tab-target="%s_panel_%s"
                    type="button"
                    role="tab"
                    aria-controls="%s_panel_%s"
                    aria-selected="%s"
                    onclick="switchTab(event, \'%s_panel_%s\')">
                    %s
                    %s
                </button>
            </li>',
            $classes['tabWrapper'],
            $uniq,
            $tab['id'],
            $classes['tab'],
            $isActive ? $classes['activeTab'] : $classes['inactiveTab'],
            $uniq,
            $tab['id'],
            $uniq,
            $tab['id'],
            $isActive ? 'true' : 'false',
            $uniq,
            $tab['id'],
            htmlspecialchars($tab['label']),
            $isActive ? '<span class="absolute left-0 right-0 -bottom-px h-0.5 bg-blue-500"></span>' : ''
        );
    }, $props['tabs']);

    // Generar HTML de los paneles
    $panelsHtml = array_map(function($tab) use ($uniq, $activeTab, $classes) {
        $isActive = $activeTab === $tab['id'];
        return sprintf(
            '<div
                id="%s_panel_%s"
                class="%s %s"
                role="tabpanel"
                aria-labelledby="%s_tab_%s">
                %s
            </div>',
            $uniq,
            $tab['id'],
            $classes['panel'],
            $isActive ? '' : $classes['hiddenPanel'],
            $uniq,
            $tab['id'],
            $tab['content']
        );
    }, $props['tabs']);

    // JavaScript mejorado para responsive
    static $jsIncluded = false;
    $js = '';
    if (!$jsIncluded) {
        $js = <<<JS
        <script>
            function switchTab(e, panelId) {
                e.preventDefault();

                // Obtener contenedores
                const tablist = e.target.closest('[role="tablist"]');
                const panelContainer = tablist.nextElementSibling;

                // Actualizar todos los tabs
                tablist.querySelectorAll('[role="tab"]').forEach(tab => {
                    tab.setAttribute('aria-selected', 'false');
                    tab.classList.remove(
                        'text-blue-600', 'border-b-2', 'border-blue-500',
                        'bg-blue-50', 'font-semibold'
                    );
                    tab.classList.add(
                        'text-gray-500', 'hover:text-blue-600', 'hover:bg-gray-100'
                    );

                    // Remover indicador visual
                    const indicator = tab.querySelector('span');
                    if (indicator) indicator.remove();
                });

                // Marcar tab actual como activo
                e.target.setAttribute('aria-selected', 'true');
                e.target.classList.add(
                    'text-blue-600', 'border-b-2', 'border-blue-500',
                    'bg-blue-50', 'font-semibold'
                );
                e.target.classList.remove(
                    'text-gray-500', 'hover:text-blue-600', 'hover:bg-gray-100'
                );

                // Agregar indicador visual
                if (!e.target.querySelector('span')) {
                    e.target.insertAdjacentHTML('beforeend',
                        '<span class="absolute left-0 right-0 -bottom-px h-0.5 bg-blue-500"></span>');
                }

                // Actualizar paneles
                panelContainer.querySelectorAll('[role="tabpanel"]').forEach(panel => {
                    panel.classList.add('hidden', 'opacity-0');
                });

                const activePanel = document.getElementById(panelId);
                activePanel.classList.remove('hidden', 'opacity-0');

                // Scroll suave al tab en móviles
                if (window.innerWidth < 768) {
                    e.target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                }
            }

            // Opcional: Alternativa de acordeón para móviles
            function initMobileTabs() {
                if (window.innerWidth < 768) {
                    document.querySelectorAll('.mobile-tabs-button').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const panelId = this.getAttribute('data-tab-target');
                            switchTab({preventDefault: () => {}, target: this}, panelId);
                        });
                    });
                }
            }

            // Inicializar al cargar y al redimensionar
            document.addEventListener('DOMContentLoaded', initMobileTabs);
            window.addEventListener('resize', initMobileTabs);
        </script>
        JS;
        $jsIncluded = true;
    }

    // Versión alternativa para móviles (opcional)
    $mobileAlternative = '';
    if ($props['mobileAccordion'] ?? false) {
        $mobileTabs = array_map(function($tab) use ($uniq, $activeTab, $classes) {
            $isActive = $activeTab === $tab['id'];
            return sprintf(
                '<div class="md:hidden mb-2">
                    <button
                        id="%s_mobile_tab_%s"
                        class="%s %s"
                        data-tab-target="%s_panel_%s"
                        onclick="switchTab(event, \'%s_panel_%s\')">
                        %s
                        <svg class="%s %s" width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>',
                $uniq,
                $tab['id'],
                $classes['mobileMenuButton'],
                $isActive ? 'bg-blue-50 text-blue-600' : 'bg-gray-100 text-gray-700',
                $uniq,
                $tab['id'],
                $uniq,
                $tab['id'],
                htmlspecialchars($tab['label']),
                $classes['mobileMenuIcon'],
                $isActive ? 'rotate-180' : ''
            );
        }, $props['tabs']);

        $mobileAlternative = implode('', $mobileTabs);
    }

    return sprintf(
        '<div class="%s">
            %s
            <ul class="%s" role="tablist">%s</ul>
            <div class="%s">%s</div>
        </div>%s',
        $classes['container'],
        $mobileAlternative,
        $classes['tablist'],
        implode('', $tabsHtml),
        $classes['panelContainer'],
        implode('', $panelsHtml),
        $js
    );
}
