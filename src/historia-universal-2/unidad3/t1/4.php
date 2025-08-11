<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Capitalismo y comunismo</h2>
    <p>En la URSS se desarrollaba un proyecto económico y político al que se ha dado el nombre de socialismo <b>realmente existente, para distinguirlo del socialismo teórico que proponía Marx . En ese país no existía la empresa privada y el Estado controlaba absolutamente todas las actividades económicas.</b> ¿Cómo es esto?</p>

    <p>En la sociedad en que vivimos, hay pequeños y grandes propietarios de negocios, almacenes, empresas. En la URSS nada de esto existía; toda la producción y distribución de bienes y servicios era controlada y administrada por el Estado soviético. En lo social, hubo grandes avances en la educación, la ciencia, las artes y la difusión de la cultura en general. La salud y la educación eran derechos de toda la población.</p>

   <p>Lamentablemente, en lo político las libertades fueron muy limitadas. Existía un sistema de partido único: el Partido Comunista de la Unión Soviética; los disidentes no eran bien vistos y fueron frecuentemente perseguidos (sobre todo durante el régimen de Stalin) y se restringió al máximo el contacto económico y cultural con el mundo capitalista occidental. Los aliados de la URSS, las denominadas democracias populares (en Polonia, Ucrania, Checoslovaquia, Rumania, Bulgaria, y con ciertos matices en Yugoslavia) seguían modelos similares. En suma: grandes avances pero a costa de muchas libertades individuales. Esto fue principalmente válido durante el régimen de Stalin.</p>

   <p>Antes de continuar revisemos rápidamente en el siguiente vídeo cuáles son los principios del comunismo, tal y como lo idearon Carlos Marx y Federico Engels.</p>

     <?php
      renderVideoIframe('rMmBBlAKTas', '¿Qué es el comunismo?');
    ?>
    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/rMmBBlAKTas?si=e9jfe6XEZH6y4wIK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>