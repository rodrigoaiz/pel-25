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


// Ajustar la altura de los iframes con la clase "actividadmoodle"
document.addEventListener('DOMContentLoaded', function() {
    var iframes = document.querySelectorAll(".actividadmoodle");

    iframes.forEach(function(iframe) {
        iframe.onload = function() {
            var body = iframe.contentWindow.document.body;
            body.style.margin = "0";
            body.style.padding = "0";
            body.style.border = "none";
            body.style.width = "100%"; // Forzar el ancho del contenido del iframe
            iframe.style.height = body.scrollHeight + 'px';
            iframe.style.width = "100%"; // Forzar el ancho del iframe

            // Suprimir el margin-right del contenedor específico
            var container = iframe.contentWindow.document.querySelector('#page.drawers.show-drawer-right');
            if (container) {
                container.style.marginRight = "0";
            }
        };

        // Ajustar el tamaño del iframe cada 500 milisegundos
        setInterval(function() {
            var body = iframe.contentWindow.document.body;
            iframe.style.height = body.scrollHeight + 'px';
            iframe.style.width = "100%"; // Forzar el ancho del iframe

            // Suprimir el margin-right del contenedor específico
            var container = iframe.contentWindow.document.querySelector('#page.drawers.show-drawer-right');
            if (container) {
                container.style.marginRight = "0";
            }
        }, 500);
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
