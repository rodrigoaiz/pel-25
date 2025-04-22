<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Propiedades de las sales</h3>
    <p>Los compuestos inorgánicos, en particular las sales inorgánicas, presentan propiedades físico-químicas muy importantes e interesantes ya que determinan las características de estos compuestos.</p>
    <p>Las sales se caracterizan por poseer altos puntos de fusión y de ebullición, esto se debe a las intensas fuerzas que mantienen unidos a los iones que forman el cristal de sal el cristal iónico, lo que le confiere una gran estabilidad térmica, por lo que para destruir su estructura se requiere suministrar una cantidad importante de energía.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t2_sal_comun.webp', 'Imagen de Bru-nO', 'https://pixabay.com/es/photos/sal-salero-la-sal-de-mesa-sal-com%c3%ban-3285024/', 'Pixabay');
        ?>
    </div>
    <p>Otras propiedades que podemos mencionar son su estado físico, solubilidad, formación de cristales y conductividad eléctrica.</p>




    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
        <use href="#material-symbols-light--right-click" />
    </svg>


    <symbol id="material-symbols-light--right-click" viewBox="0 0 24 24">
        <path fill="#013773" d="m12.589 16.962l.336-1.062q1.33-.325 2.203-1.4T16 12q0-1.65-1.175-2.825T12 8q-1.425 0-2.49.863q-1.066.862-1.39 2.212l-1.081.317q.24-1.88 1.638-3.136T12 7q2.077 0 3.539 1.462T17 12q0 1.925-1.265 3.323q-1.266 1.398-3.146 1.639m-8.345 3.826l-1.032-1.032l4.813-4.794l-2.794-.923L12 12l-2.039 6.77l-.922-2.795z" />
    </symbol>



    <p>
        Today I spent most of the day researching ways to ...
        <span class="inline-flex items-baseline">
            <img src="../../../assets/icons/right-click.svg" class="mx-1 size-5 self-center" />
            <span>Kramer</span>
        </span>
        keeps telling me there is no way to make it work, that ...
    </p>






    <?php ob_start(); ?>
    <p>Da click en el botón que te llevará a un cuestionario donde podrás poner a prueba tus conocimientos sobre nomenclatura inorgánica. ¡Éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a11', "Nomenclatura inorgánica", $ActividadContent);
    ?>
    <?php
    $accordionItems1 = [
        [
            'title' => 'Estado físico',
            'content' => '<p>Los compuestos inorgánicos se presentan en formas físicas denominadas estados de
                                        agregación de la materia y estos son: <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/cubos-de-hielo-hielo-congelado-fr%C3%ADo-3506781/"
                                            target="_blank"><span class="inline-flex items-baseline">
            <img src="../../../assets/icons/right-click.svg" class="mx-1 size-5 self-center" />
            <span>sólido</span>
        </span></a>, <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/gota-de-agua-ca%C3%ADda-impacto-578897/"
                                            target="_blank"><img src="<?php echo PATH_ICONS; ?>right-click.svg" alt=""> líquido</a>, <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/resumen-humo-de-fondo-remolino-69124/"
                                            target="_blank"><img src="<?php echo PATH_ICONS; ?>right-click.svg" alt=""> gaseoso</a> y <a
                                            class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                            href="https://pixabay.com/es/photos/plasma-electricidad-rojo-azul-933193/"
                                            target="_blank"><img src="<?php echo PATH_ICONS; ?>right-click.svg" alt=""> plasma</a>. </p>
                                    <p>En el caso de <strong>las sales</strong>, se caracterizan por presentarse en
                                        estado sólido, forman redes cristalinas debido a que las sales son
                                        <strong>compuestos iónicos</strong> que se forman cuando un catión (ión con
                                        carga positiva) reemplaza a uno o más iones hidrógeno de un ácido, o bien cuando
                                        un anión (ión con carga negativa) sustituye a uno de los iones hidróxido de una
                                        base, por lo que las sales presentan en general un enlace de carácter iónico.
                                    </p>'
        ],
        [
            'title' => 'Estructura del suelo',
            'content' => '<p>La <a class="text-secondary transition duration-0 whitespace-normal break-words hover:text-graydark hover:duration-150"
                                    href="http://www.fao.org/fishery/static/FAO_Training/FAO_Training/General/x6706s/x6706s07.htm"
                                    target="_blank"><i class="ri-cloud-line inline"></i> estructura</a> puede ser:</p>
                            <p>Las partículas finas del suelo se unen formando agregados por la acción de la materia
                                orgánica, entre cada agregado hay poros que permiten el movimiento de aire y agua. La
                                unión de estos agregados da origen a la forma que tiene la estructura y que repercute
                                igual que la estructura en sus propiedades.</p>
                            <ul class="list-disc ml-10">
                                <li>Sin estructura</li>
                                <li>Granular</li>
                                <li>Laminar: agregados planos</li>
                                <li>Poliédrica: poliedros más o menos regulares</li>
                            </ul>'
        ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>