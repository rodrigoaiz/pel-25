<?php

function renderActividadH5P($htmlFileName, $h5pTitulo = "Actividad H5P", $h5pContent = "", $hideIntroduction = false, $containerWidth = "w-full")
{
  // Obtener la ruta del archivo HTML basado en la URL actual
  $urlPathH5P = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $pathSegmentsH5P = explode('/', trim($urlPathH5P, '/'));
  $asignaturaNameH5P = $pathSegmentsH5P[1]; // Obtener el nombre de la asignatura
  
  // Construir la ruta del archivo HTML en assets/h5p/ (compatible con Windows y Unix)
  $htmlPathH5P = BASE_PATH . DIRECTORY_SEPARATOR . $asignaturaNameH5P . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'h5p' . DIRECTORY_SEPARATOR . $htmlFileName . '.html';
  
  // Icono fijo para H5P
  $iconPathH5P = PATH_ICONS . 'h5pactivity.svg';

  // Verificar si existe el archivo HTML
  if (file_exists($htmlPathH5P)) {
    // Crear la URL relativa para el iframe
    // En desarrollo, verificar si existe dist, sino usar src
    $distPath = str_replace('/src/', '/dist/', $htmlPathH5P);
    if (file_exists($distPath)) {
      $htmlUrlH5P = BASE_URL . '/' . $asignaturaNameH5P . '/assets/h5p/' . $htmlFileName . '.html';
    } else {
      // Fallback para desarrollo: usar src directamente
      $htmlUrlH5P = '/src/' . $asignaturaNameH5P . '/assets/h5p/' . $htmlFileName . '.html';
    }
  } else {
    echo "Archivo HTML no encontrado: " . $htmlPathH5P;
    return;
  }

?>
    <div class="actividad">
      <div class="flex justify-start items-center gap-x-3 pt-5 pb-3">
        <img class="w-10 max-h-5 my-0" src="<?php echo $iconPathH5P; ?>" alt="Icono H5P">
        <span><?php echo htmlspecialchars($h5pTitulo); ?></span>
      </div>
      <?php echo $h5pContent; ?>
    </div>
    
    <!-- Contenedor del iframe con background visual -->
    </section>
    <div class="seccion-actividad bg-darkgrey-own/95 py-5">
      <div class="actividad-wrapper max-w-5xl mx-auto">
        <div class="iframe-container-actividad relative">
          <iframe src="<?php echo $htmlUrlH5P; ?>" 
                  width="100%" 
                  class="w-full actividadh5p"
                  style="border: none; background: white; height: 600px;" 
                  allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
    <section>
    <?php if ($hideIntroduction): ?>
    <script>
      (function() {
        const scriptTag = document.currentScript;
        const container = scriptTag.previousElementSibling;
        const iframe = container ? container.querySelector('iframe') : null;
        
        if (!iframe) return;

        function injectCSS() {
          try {
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            if (!iframeDoc) return false;

            let styleElement = iframeDoc.getElementById('hide-h5p-intro-style');
            
            if (!styleElement) {
              styleElement = iframeDoc.createElement('style');
              styleElement.id = 'hide-h5p-intro-style';
              styleElement.textContent = `
                .h5p-question-introduction {
                  display: none !important;
                  visibility: hidden !important;
                  height: 0 !important;
                  overflow: hidden !important;
                  margin: 0 !important;
                  padding: 0 !important;
                  opacity: 0 !important;
                  position: absolute !important;
                  pointer-events: none !important;
                }
              `;
              iframeDoc.head.appendChild(styleElement);
            }
            return true;
          } catch(e) {
            return false;
          }
        }

        function hideIntroductions() {
          try {
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            if (!iframeDoc) return false;

            injectCSS();

            const introElements = iframeDoc.querySelectorAll('.h5p-question-introduction');
            introElements.forEach((el) => {
              el.style.setProperty('display', 'none', 'important');
              el.style.setProperty('visibility', 'hidden', 'important');
              el.style.setProperty('height', '0', 'important');
              el.style.setProperty('overflow', 'hidden', 'important');
              el.style.setProperty('opacity', '0', 'important');
            });

            return introElements.length > 0;
          } catch(e) {
            return false;
          }
        }

        setTimeout(() => hideIntroductions(), 100);

        iframe.addEventListener('load', function() {
          setTimeout(() => hideIntroductions(), 100);
          
          try {
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            if (iframeDoc) {
              const observer = new MutationObserver(() => hideIntroductions());
              observer.observe(iframeDoc.body, { childList: true, subtree: true });
            }
          } catch(e) {}
        });

        setTimeout(() => hideIntroductions(), 2000);
        setTimeout(() => hideIntroductions(), 5000);
      })();
    </script>
    <?php endif; ?>
<?php
}
?>
