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

// ⚙️ FEATURE FLAG: Detección de profesor
// Cambiar a true para activar la detección de profesores y mostrar overlay
const ENABLE_TEACHER_DETECTION = false;

// Función para cerrar overlay de profesor
window.closeTeacherOverlay = function(actividadKey) {
    const overlay = document.getElementById('teacher-overlay-' + actividadKey);
    if (overlay) {
        overlay.classList.add('hidden');
        // Guardar en localStorage que el profesor decidió ver de todos modos
        localStorage.setItem('teacher-overlay-dismissed-' + actividadKey, 'true');
    }
};

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
            
            // Detectar si el usuario es profesor (solo si está activado)
            if (ENABLE_TEACHER_DETECTION) {
                checkIfTeacher(iframe);
            }
        };
    });
});

// Función para detectar si el usuario es profesor en Moodle
function checkIfTeacher(iframe) {
    try {
        // Extraer el ID de actividad del src del iframe
        const iframeId = iframe.getAttribute('id');
        if (!iframeId) return;
        
        const actividadKey = iframeId.replace('iframe-', '');
        const overlayId = 'teacher-overlay-' + actividadKey;
        
        // Verificar si ya fue descartado en esta sesión
        if (localStorage.getItem('teacher-overlay-dismissed-' + actividadKey) === 'true') {
            return;
        }
        
        // Esperar un momento para que Moodle cargue
        setTimeout(function() {
            try {
                // Intentar acceder al contenido del iframe
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                
                // Buscar indicadores de que es profesor en el DOM de Moodle
                // Moodle típicamente muestra diferentes elementos para profesores
                const teacherIndicators = [
                    '.editing', // Modo edición
                    '[data-key="editmode"]', // Botón de edición
                    '.userenrolment', // Gestión de usuarios
                    '[data-action="grades"]', // Acceso a calificaciones
                    '.teacherdashboard', // Dashboard de profesor
                    '#page-mod-quiz-edit', // Edición de quiz
                    '.tabledividerpolicy', // Permisos de profesor
                    'a[href*="grade/report"]', // Enlaces a reportes
                    'a[href*="/course/modedit.php"]' // Editar actividad
                ];
                
                let isTeacher = false;
                for (let selector of teacherIndicators) {
                    if (iframeDoc.querySelector(selector)) {
                        isTeacher = true;
                        break;
                    }
                }
                
                // También verificar en el body si tiene clases específicas de profesor
                const bodyClasses = iframeDoc.body.className;
                if (bodyClasses.includes('editing') || 
                    bodyClasses.includes('course-format') ||
                    iframeDoc.querySelector('[role="teacher"]') ||
                    iframeDoc.querySelector('.path-mod-quiz .mod_quiz_edit_button')) {
                    isTeacher = true;
                }
                
                // Mostrar overlay si es profesor
                if (isTeacher) {
                    const overlay = document.getElementById(overlayId);
                    if (overlay) {
                        overlay.classList.remove('hidden');
                    }
                }
            } catch (e) {
                // CORS bloqueó el acceso - no podemos verificar
                // En este caso, no mostramos el overlay para no molestar a estudiantes
                console.log('No se pudo verificar rol de usuario (CORS)');
            }
        }, 1500); // Esperar 1.5 segundos para que Moodle cargue
        
    } catch (e) {
        console.log('Error al verificar rol de profesor:', e);
    }
}

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
