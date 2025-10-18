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
   
    <p>Durante el período comprendido entre 1945 y la década de los ochenta, se produjeron numerosas expresiones culturales que reflejaron los cambios y las tensiones de la época. Cada región y país tuvo sus propias manifestaciones culturales y eventos históricos que contribuyeron a este vibrante y complejo panorama cultural pero aquí mencionaremos algunos de los más significativos. Los procesos estudiados anteriormente en la unidad impactaron profundamente en la producción plástica, literaria y musical, pero también provocaron algunos movimientos sociales y contraculturales de una gran riqueza e importancia para el presente.</p>

   <p>Después de la guerra, surgieron diferentes movimientos artísticos en todo el mundo. El Expresionismo Abstracto en los Estados Unidos, liderado por artistas como Jackson Pollock y Mark Rothko, exploró la expresión emocional y gestual en la pintura. En Europa, el arte informal y el arte concreto también ganaron popularidad.</p>

    <?php
       renderImage('hu2-u3-informal.webp', 'Arte informal de Cesare Catania. Imagen Az753art.', 'https://upload.wikimedia.org/wikipedia/commons/4/43/144_Trio_Jazz_-_artist_Cesare_Catania_-_informal_art_a_modern_sculpture.jpg', 'Wikimedia Commons.');
    ?>
    <p>El Expresionismo Abstracto enfatizaba la expresión personal y emocional del artista, alejándose de la representación figurativa. En lugar de tratar de representar el mundo físico de manera realista, los artistas abstractos se centraron en las emociones, los gestos y los elementos abstractos del arte. Utilizaban pinceladas enérgicas, técnicas de goteo y salpicaduras de pintura, yuxtaposición de colores vibrantes y formas no figurativas para crear obras de arte cargadas de energía y emoción. Este movimiento artístico tuvo un impacto significativo en la escena artística internacional y se convirtió en un símbolo del arte estadounidense de posguerra. Sus ideas y técnicas influyeron en generaciones posteriores de artistas, y su legado aún se percibe en la actualidad. Sin embargo, debemos hacer notar que el arte no era ajeno a la lucha ideológica que prevalencia durante la guerra fría y se han realizado ya muchos estudios acerca de cómo la ideología influyó en el arte, algo que ya vimos en el caso sovietico (unidad 2) con el realismo socialista o el constructivismo. En el caso de occidente y muy específicamente en el del expresionismo abstracto, sucedió algo similar pues se consideraba que debía existir una forma de arte que representara los ideales del mundo occidental capitalista. Para saber más acerca de esta parte de la historia del arte, te invitamos a revisar el siguiente video sobre la relación entre la Agencia Central de Inteligencia (C.I.A), de Estados Unidos y el impulso que recibió el expresionismo abstracto.</p>

         <?php
      renderVideoIframe('EsOKAoGzBfU', 'La CIA, el MOMA y ROCKEFELLER crearon a JACKSON POLLOCK');
      ?>

    <p>Si tienes inquietudes por profundizar más sobre este tema te invitamos revisar el libro de Frances Stonor Saunders “La CIA y la guerra fría cultural” del año 1999 y el cual puede ser consultado de forma gratuita en el siguiente espacio cultural libre.</p>

     <a href="<?php echo PATH_DOCS . 'u3_t6_La_CIA_y_la_guerra_fria_cultural.pdf'; ?>" target="_blank">La CIA y la guerra fría cultural</a>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
