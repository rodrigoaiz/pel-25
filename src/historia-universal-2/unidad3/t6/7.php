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
    
    <?php
       renderImage('hu2-u3-fabrica.webp', 'Trabajadores durante el mayo de 68. Foto de FastilyClone.', 'https://commons.wikimedia.org/wiki/File:French_workers_with_placard_during_occupation_of_their_factory_1968.jpg', 'Wikimedia Commons.');
    ?>

    <p>Mayo del 68 (Francia): Fue un movimiento de protesta estudiantil y obrero que tuvo lugar en Francia en mayo de 1968. Los manifestantes demandaban cambios políticos, sociales y culturales, desafiando las estructuras establecidas y cuestionando la autoridad mediante huelgas y manifestaciones masivas.</p>

    <p>El Mayo Francés tuvo sus raíces en una combinación de factores socioeconómicos, políticos y culturales. Los estudiantes universitarios, en particular, se vieron afectados por las estrictas normas y restricciones de la sociedad francesa de la época. Las protestas también se relacionaron con la insatisfacción generalizada con el gobierno autoritario del presidente Charles de Gaulle, la creciente brecha entre las generaciones y las tensiones internacionales, como la Guerra de Vietnam. Las protestas comenzaron en la Universidad de Nanterre en París en marzo de 1968, cuando un grupo de estudiantes ocupó un edificio administrativo en protesta contra las condiciones de vida en el campus y las restricciones impuestas por la universidad. Estas protestas se extendieron rápidamente a otras universidades en París y en todo el país.</p>

     <?php
       renderImage('hu2-u3-sorbona.webp', 'Estudiantes toman la universidad de la Sorbona. Foto de Mr.Nostalgic.', 'https://es.wikipedia.org/wiki/Mayo_de_1968_en_Francia#/media/Archivo:Frankrijk._Sorbonne_bezet_door_studenten,_Bestanddeelnr_921-3968.jpg', 'Wikimedia Commons.');
    ?>

    <p>Las protestas estudiantiles rápidamente se convirtieron en un movimiento más amplio que involucró a trabajadores, sindicatos y ciudadanos comunes. Las manifestaciones masivas y las huelgas generales paralizaron gran parte de Francia. Se estima que hasta 10 millones de trabajadores se unieron a las huelgas, afectando a sectores clave de la economía, como el transporte y la industria.</p>

    <p>El Mayo Francés estuvo marcado por una amplia gama de demandas y consignas. Los manifestantes pedían una mayor libertad de expresión, el fin de la represión policial, la democratización de las instituciones educativas y laborales, mejoras en las condiciones de trabajo y un cambio fundamental en la estructura social y política de Francia. El gobierno francés respondió con dureza a las protestas, utilizando la policía y el ejército para reprimir a los manifestantes. Aunque las protestas disminuyeron en junio de 1968, el Mayo Francés dejó un legado duradero en la sociedad francesa y en todo el mundo. Sus repercusiones se sintieron en áreas como la política, la educación, la cultura y la vida social, y se considera un hito importante en la historia del activismo estudiantil y el movimiento de protesta.</p>

    <p>También en 1968, en México, los estudiantes protestaron demandando democracia, libertades políticas y el fin de la represión gubernamental. Sobre este tema abundaremos en el curso de Historia de México.</p>

     <?php ob_start(); ?>
    <p>Felicidades has concluido la unidad, es hora de realizar la evaluación final.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t6a3', "Cuestionario final Unidad 3", $ActividadContent);
    ?>
   
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
