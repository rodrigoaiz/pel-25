<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
   <h2>La crisis del petróleo del 1973</h2>


    <p>La crisis del petróleo de 1973, a menudo denominada la "Crisis del petróleo árabe", fue un evento crucial en la historia económica y geopolítica del siglo XX. Tuvo sus raíces en una serie de factores que culminaron en un embargo petrolero y un aumento significativo en los precios del petróleo, con graves repercusiones económicas en todo el mundo.</p>

    <p>En octubre de 1973, Egipto y Siria lanzaron un ataque sorpresa contra Israel, conocido como la Guerra del Yom Kippur. Esta guerra generó una respuesta de apoyo de Estados Unidos a Israel y provocó una escalada en las tensiones en Oriente Medio.En solidaridad con los países árabes que combatían en la Guerra del Yom Kippur, la Organización de Países Exportadores de Petróleo (OPEP), liderada por países como Arabia Saudita y Kuwait, decidió reducir la producción de petróleo y establecer un embargo petrolero contra naciones que apoyaran a Israel, incluido Estados Unidos. Como resultado del embargo y la reducción de la producción, los precios del petróleo aumentaron drásticamente. El precio del petróleo se cuadruplicó en un corto período de tiempo.</p>

    <?php
       renderImage('hu2-u3-mediooriente.webp', 'Los países del medio oriente contienen las reservas más grandes de petróleo del mundo. Foto de Fæ.', 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Title-_Aramco_%288555059514%29.jpg', 'Wikimedia Commons.');
    ?>
    <p>Los altos precios del petróleo llevaron a un aumento de la inflación en muchos países, ya que los costos de energía y transporte se dispararon. Esto, a su vez, contribuyó a una desaceleración económica y recesiones en muchas naciones, lo que se conoció como la "estanflación", esto también llevó a un aumento en el desempleo y la inestabilidad económica, lo que resaltó la vulnerabilidad de las naciones industrializadas a la interrupción en el suministro de petróleo y la importancia de la estabilidad en la región. Esto último condujo a una mayor concienciación sobre la necesidad de diversificar las fuentes de energía y reducir la dependencia del petróleo, lo que impulsó la exploración y el desarrollo de fuentes de energía alternativas y políticas energéticas más sostenibles en muchos países, aunque sin terminar de consolidarse hasta la fecha debido a los grandes intereses creados alrededor de la industria del petróleo.</p>

    <?php ob_start(); ?>
    <p>Antes de continuar revisemos algunos de los aprendizajes obtenidos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t5a1', "Crisis del petróleo", $ActividadContent);
    ?>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
