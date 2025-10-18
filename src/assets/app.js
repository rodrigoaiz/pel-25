import '@fontsource-variable/roboto-condensed';
import '@fontsource-variable/open-sans';
import './css/styles.css';
import '@justinribeiro/lite-youtube';
import 'flowbite';
import FontFaceObserver from 'fontfaceobserver';
// Cargar las fuentes de forma asíncrona
const robotoCondensed = new FontFaceObserver('Roboto Condensed Variable');
const openSans = new FontFaceObserver('Open Sans Variable');

Promise.all([robotoCondensed.load(), openSans.load()])
  .then(() => {
    document.documentElement.classList.add('fonts-loaded');
  })
  .catch(() => {
    console.warn('Las fuentes no se cargaron correctamente.');
  });


console.log('App cargada');
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('#header__pantalla');
    const breadcrumb = document.querySelector('#breadcrumb');
    const tituloTemas = document.querySelector('#titulo-temas');
    const mainSection = document.querySelector('#main-section');
    if (nav && breadcrumb && tituloTemas && mainSection) {
        const navOffsetTop = nav.offsetTop;
        window.addEventListener('scroll', function() {
            if (window.scrollY >= navOffsetTop) {
                nav.classList.add('fixed-nav');
                breadcrumb.classList.add('fixed-nav', 'breadcrumb-fixed');
                tituloTemas.classList.add('hidden');
                mainSection.classList.add('pt-[7rem]', 'lg:pt-[8rem]');;
            } else {
                nav.classList.remove('fixed-nav');
                breadcrumb.classList.remove('fixed-nav', 'breadcrumb-fixed');
                tituloTemas.classList.remove('hidden');
                mainSection.classList.remove('pt-[7rem]', 'lg:pt-[8rem]');;
            }
        });
    }
});

// Función para cerrar overlay de profesor
window.closeTeacherOverlay = function(actividadKey) {
    const overlay = document.getElementById('teacher-overlay-' + actividadKey);
    if (overlay) {
        overlay.classList.add('hidden');
        // Guardar en localStorage que el profesor decidió ver de todos modos
        localStorage.setItem('teacher-overlay-dismissed-' + actividadKey, 'true');
    }
};

// Verificar localStorage al cargar para ocultar overlays ya descartados
document.addEventListener('DOMContentLoaded', function() {
    // Verificar overlays de profesor que ya fueron cerrados
    const teacherOverlays = document.querySelectorAll('[id^="teacher-overlay-"]');
    teacherOverlays.forEach(function(overlay) {
        const actividadKey = overlay.getAttribute('data-actividad-key');
        if (actividadKey && localStorage.getItem('teacher-overlay-dismissed-' + actividadKey) === 'true') {
            overlay.classList.add('hidden');
        }
    });
});

// Configuración de iframes de actividad Moodle
// Los iframes usan altura fija con scroll interno (definido en CSS)
// No se requiere ajuste dinámico de altura
document.addEventListener('DOMContentLoaded', function() {
    var iframes = document.querySelectorAll(".actividadmoodle");

    iframes.forEach(function(iframe) {
        // Simplemente asegurarse de que el iframe esté cargado
        iframe.onload = function() {
            // El CSS maneja toda la presentación (altura fija + scroll)
            // No se requiere JavaScript para ajustar altura
        };
    });
});

// Ajustar la altura de los iframes con la clase "actividadh5p"
document.addEventListener('DOMContentLoaded', function() {
    var h5pIframes = document.querySelectorAll(".actividadh5p");

    h5pIframes.forEach(function(iframe) {
        // Función para ajustar la altura del iframe
        function adjustIframeHeight() {
            try {
                var body = iframe.contentWindow.document.body;
                var html = iframe.contentWindow.document.documentElement;
                
                // Ajustar estilos del contenido H5P
                body.style.margin = "0";
                body.style.padding = "0";
                body.style.border = "none";
                body.style.overflow = "hidden";
                
                // Calcular la altura real del contenido
                var height = Math.max(
                    body.scrollHeight,
                    body.offsetHeight,
                    html.clientHeight,
                    html.scrollHeight,
                    html.offsetHeight
                );
                
                // Solo ajustar si hay una altura válida
                if (height > 0) {
                    iframe.style.height = height + 'px';
                    iframe.style.minHeight = '0';
                }
                iframe.style.width = "100%";
            } catch (e) {
                // Si hay problemas de CORS, usar altura mínima que se adapte
                iframe.style.height = "400px";
                iframe.style.minHeight = "400px";
                console.warn('No se pudo acceder al contenido del iframe H5P debido a CORS');
            }
        }

        // Ajustar cuando el iframe se carga
        iframe.onload = adjustIframeHeight;
        
        // También intentar ajustar inmediatamente por si ya está cargado
        if (iframe.contentWindow && iframe.contentWindow.document.readyState === 'complete') {
            adjustIframeHeight();
        }

        // Reajustar periódicamente por si el contenido H5P cambia de tamaño
        setInterval(function() {
            adjustIframeHeight();
        }, 1000);
    });
});

document.addEventListener("keydown", function(event) {
  if (event.key === "ArrowLeft") {
    var paginaAnterior = document.getElementById("paginaAnterior");
    if (paginaAnterior) {
      window.location.href = paginaAnterior.href;
    }
  } else if (event.key === "ArrowRight") {
    var paginaSiguiente = document.getElementById("paginaSiguiente");
    if (paginaSiguiente) {
      window.location.href = paginaSiguiente.href;
    }
  }
});
