<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

  <p>
        México se adhirió plenamente al Consenso de Washington desde finales de la década de los 80. Las mejores expresiones de ello, en ese momento, fueron la acelerada 
        privatización de empresas públicas y la firma del Tratado de Libre Comercio que entró en vigor el 1 de enero de 1994. Es muy importante recordar esta fecha, para 
        comprender procesos que se desencadenan a raíz de la implementación de las reformas estructurales neoliberales.
     </p>

    <div class="mx-auto max-w-lg">
  <?php
       renderImage('hu2-u4-robert_lighthizer.webp', 'La adhesión al Tratado de Libre Comercio para América del Norte, fue uno de los pilares fundamentales del neoliberalismo en México. Imagen de A1Cafel.', 
       'https://commons.wikimedia.org/wiki/File:Robert_Lighthizer_joins_the_NAFTA_Round_3_renegotiation.jpg', 'Wikimedia Commons.');
    ?>
      </div>

    <p>
       El neoliberalismo ha facilitado la globalización económica, al abrir paso al tránsito de mercancías y capitales desde y hacia todos los rincones del mundo. 
       En el interior de cada nación, aunque se habla de algunos avances (por ejemplo, en el combate a la inflación) las políticas neoliberales han causado estragos 
       en el largo plazo. La apertura comercial, la desregulación, la “sana existencia” del desempleo, el deterioro ambiental, entre otros. La soberanía de las naciones 
       fue desplazada por la del mercado en prácticamente todos los ámbitos. El proyecto de generar bienestar desde el Estado para toda la población ha sido sustituido 
       por un plan para promover las soluciones individuales, pues la sociedad como un conjunto de relaciones y aspiraciones colectivas no existe para el neoliberalismo.
    </p>

    <p> Observa cuidadosamente la siguiente imagen</p>

        <div class="mx-auto max-w-3xl">
    <?php
    renderImage(
      'hu2-u4-Portada-Especial-Emprendimiento-Alternativas-768x511.webp' //La imagen llevaba a otra imagen, mejor agegue directamente la imagen destino
    );
    ?>
      </div>

    <p>
        La imagen muestra, por una parte, las necesidades propias de la vida material y la forma en que el neoliberalismo pregona que deben satisfacerse: sin el apoyo 
        del Estado, sólo con el esfuerzo individual, sin importar la desigualdad de origen.
    </p>
    
     <?php ob_start(); ?>
  <p>Repasemos algunos conceptos clave de esta sección en el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t2a1', "México ante el Neoliberalismo", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
