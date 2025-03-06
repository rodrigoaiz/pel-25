import './css/styles.css';
import '@fontsource-variable/roboto-condensed';
import '@fontsource-variable/open-sans';
import '@justinribeiro/lite-youtube';
import 'flowbite';

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
