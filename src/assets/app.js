import './css/styles.css';
import '@fontsource-variable/roboto-condensed';
import '@fontsource-variable/open-sans';

console.log('App cargada');
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('#header__pantalla');
    const breadcrumb = document.querySelector('#breadcrumb');
    const tituloTemas = document.querySelector('#titulo-temas');
    if (nav && breadcrumb && tituloTemas) {
        const navOffsetTop = nav.offsetTop;
        window.addEventListener('scroll', function() {
            if (window.scrollY >= navOffsetTop) {
                nav.classList.add('fixed-nav');
                breadcrumb.classList.add('fixed-nav', 'breadcrumb-fixed');
                tituloTemas.classList.add('hidden');
            } else {
                nav.classList.remove('fixed-nav');
                breadcrumb.classList.remove('fixed-nav', 'breadcrumb-fixed');
                tituloTemas.classList.remove('hidden');
            }
        });
    }
});
