<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Miradas teóricas de la igualdad</h2>

    <p>Un teórico llamado <strong>Amartya Sen</strong>, ha abordado la igualdad problematizando la siguiente pregunta: <em>¿Igualdad de qué?</em> Probablemente de derechos, oportunidades, economía, emociones y de género.</p>
    <p>Amartya Sen, recomienda pensar en las circunstancias que nos permiten ser diferentes, no sólo por las características externas (rasgos físicos o poseer capital económico), sino por las características formativas, habilidades, debilidades, ideología, entre otras que nos identifican como personas con una identidad y trayectoria interesante.</p>

    <h3>Todxs somos diferentes</h3>
    <?php
    // Pre-inicializar el tooltip aquí (fuera de <p>) para evitar que el <div> de inicialización
    // rompa el flujo del párrafo siguiente.
    global $_tooltipInitialized;
    if (!$_tooltipInitialized) {
        $_tooltipInitialized = true;
        echo '<div id="global-tooltip" role="tooltip" style="position:fixed;z-index:9999;display:none;max-width:18rem;padding:0.4rem 0.65rem;font-size:0.8rem;font-weight:500;color:#fff;background:#1f2937;border-radius:0.5rem;box-shadow:0 4px 12px rgba(0,0,0,.35);pointer-events:none;line-height:1.4;transition:opacity .15s ease;opacity:0;"></div>';
        ob_start(); ?>
        <script>
        (function () {
          var tip = document.getElementById('global-tooltip');
          var MARGIN = 8, hideTimer = null;
          function position(trigger) {
            var rect = trigger.getBoundingClientRect(), tipW = tip.offsetWidth, tipH = tip.offsetHeight;
            var top = rect.top - tipH - MARGIN; if (top < MARGIN) top = rect.bottom + MARGIN;
            var left = rect.left + rect.width / 2 - tipW / 2;
            left = Math.max(MARGIN, Math.min(left, window.innerWidth - tipW - MARGIN));
            tip.style.top = top + 'px'; tip.style.left = left + 'px';
          }
          function show(trigger) {
            if (hideTimer) { clearTimeout(hideTimer); hideTimer = null; }
            var text = trigger.getAttribute('data-tooltip'); if (!text) return;
            tip.textContent = text; tip.style.opacity = '0'; tip.style.display = 'block';
            requestAnimationFrame(function () { position(trigger); tip.style.opacity = '1'; });
          }
          function hide() {
            tip.style.opacity = '0';
            hideTimer = setTimeout(function () { tip.style.display = 'none'; hideTimer = null; }, 150);
          }
          document.addEventListener('mouseover', function (e) {
            var t = e.target.closest ? e.target.closest('[data-tooltip]') : null; if (!t) return;
            var from = e.relatedTarget; if (from && t.contains(from)) return; show(t);
          });
          document.addEventListener('mouseout', function (e) {
            var t = e.target.closest ? e.target.closest('[data-tooltip]') : null; if (!t) return;
            var to = e.relatedTarget; if (to && t.contains(to)) return; hide();
          });
          document.addEventListener('focusin', function (e) { if (e.target.hasAttribute && e.target.hasAttribute('data-tooltip')) show(e.target); });
          document.addEventListener('focusout', function (e) { if (e.target.hasAttribute && e.target.hasAttribute('data-tooltip')) hide(); });
        })();
        </script>
        <?php echo ob_get_clean();
    }
    ?>
    <p>La cultura de la igualdad se concentra en respetar nuestras diversidades y apoyar a quienes requieran acceder a oportunidades que no han podido gozar para mejorar su futuro, es decir lograr <?php renderTooltip('equidad', 'Ayudar a una persona que no ha accedido a oportunidades a incorporarse a las que requiera para mejorar su vida.'); ?>.</p>

    <div class="w-xl mx-auto">
        <?php
        renderImage(
            'iga5-img3.webp',
            'Ser diferente no impide la convivencia',
            'https://commons.wikimedia.org/wiki/File:The_image_represents_activities_with_students_with_disabilities_associated_to_the_Adapted_Physical_Education_field.jpg',
            'Matiashenríquezvalenzuela (2021). Wikimedia Commons'
        );
        ?>
    </div>

    <p>Actualmente, en los países de Occidente y Latinoamérica se busca eliminar prácticas y leyes discriminatorias que hayan propiciado que las personas enfrenten: racismo, intolerancia, homofobia, transfobia, injusticia y violencia, con la intención de mejorar la vida de las personas y crear buenas relaciones entre ellas.</p>
    <p>Después de la Segunda Guerra Mundial, en Alemania establecieron la cultura de paz como una estrategia para solucionar conflictos, porque: <em>"La educación para la paz, consiste en fortalecer al individuo para que pueda razonar y decidir con toda libertad"</em>, es decir, desarrolla criterios que le permitan defender las diferencias y divergencias sin violencia, pensando en destacar la tolerancia y el entendimiento de la experiencia ajena para lograr un acuerdo o el entendimiento mutuo.</p>
    <p>Si bien la cultura de la igualdad rechaza la desigualdad, también busca incentivar el diálogo entre las personas para apoyar el desarrollo humano y avanzar hacia la sustentabilidad, como otro principio de la igualdad que desea lograr la equidad y justicia social entre las personas, como dos desafíos mundiales urgentes de atender en la <strong>Agenda 2030 de las Naciones Unidas</strong>.</p>

    <p><strong>Aportaciones de la cultura de la igualdad:</strong></p>
    <ul class="ul-disc">
        <li>Promueve el desarrollo social, educativo y económico.</li>
        <li>Permite la participación ciudadana.</li>
        <li>Busca la educación inclusiva.</li>
        <li>Desmonta estereotipos tradicionales.</li>
        <li>Apoya a grupos vulnerables promoviendo la equidad (ayudar a tener a quien no tiene algo).</li>
        <li>Valora la diversidad.</li>
        <li>Implementa medidas de conciliación.</li>
        <li>Fomenta el respeto.</li>
    </ul>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
