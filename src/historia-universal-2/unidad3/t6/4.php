<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    
    <p>Un movimiento literario, musical y filosófico fue el conocido como Beat en Estados Unidos. Surgió en la década de 1950 con figuras como Jack Kerouac y Allen Ginsberg. Los beats se opusieron a la conformidad social y buscaron una vida más libre y auténtica.</p>

    <?php
       renderImage('hu2-u3-beat.webp', 'La generación Beat (Lucien Carr, Jack Kerouac, Allen Ginsberg and William S. Burroughs). Foto de Cdemaubris.', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Beat_Ceneration_1.jpg', 'Wikimedia Commons.');
    ?>

    <p>Durante este período, la música popular experimentó una gran evolución. Surgieron géneros como el rock and roll, el rhythm and blues, el jazz y el punk. Artistas emblemáticos como Elvis Presley, The Beatles, Bob Dylan, Jimi Hendrix, The Rolling Stones y David Bowie dejaron su huella en la historia musical.</p>

   <p>Durante la década de 1960, surgieron movimientos contraculturales que desafiaron las normas establecidas, buscando alternativas y formas de vida diferentes.</p>

   <p>La contracultura se oponía a las estructuras de poder establecidas y a las instituciones tradicionales. Abogaba por la autonomía personal y la toma de decisiones individuales. Se promovía la idea de la libertad de expresión y la valoración de la individualidad. La contracultura fomentaba la creatividad, la experimentación artística y la libre expresión de opiniones y creencias. La contracultura exploró el uso de drogas psicodélicas, como el LSD, como una forma de expandir la conciencia y cuestionar la realidad establecida. También se produjo un interés renovado en la espiritualidad oriental y las prácticas alternativas de meditación y yoga.</p>

   <p>La contracultura criticaba el consumismo desenfrenado y la cultura materialista de la sociedad de la posguerra. Se buscaba un estilo de vida más simple y sostenible, basado en la satisfacción personal y no en la acumulación de bienes materiales. Recordemos que en la unidad anterior hablamos del surgimiento de la “sociedad de masas”.</p>

   <p>Te invitamos a ver el siguiente video:</p>

     <?php
      renderVideoIframe('O-rpM9mFsvQ', 'Generación beat y exponentes principales.');
    ?>
    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>