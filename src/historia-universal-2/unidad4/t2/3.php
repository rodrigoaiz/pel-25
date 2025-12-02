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

  <h2>Movimientos sociales y proyectos políticos contrarios al neoliberalismo</h2>

  <p>
    Dado que las reformas estructurales han ido aparejadas con el proceso de globalización, no es de extrañar que surjan, hacia fines de la década de los 90, movimientos 
    de protesta en contra de la globalización misma. El movimiento del EZLN en México (1994) se manifestó en contra de la entrada en vigor del Tratado de Libre Comercio 
    para América del Norte (TLCAN), emblema de las reformas implementadas para abrir las fronteras al capital (afectando gravemente a las industrias locales de países 
    no industrializados). Asimismo, en el marco de una reunión Cumbre de la Organización Mundial de Comercio (OMC) en 1999, se manifestaron en Seattle diversas organizaciones 
    del movimiento social a quienes se dio el mote despectivo de globalifóbicos. Una protesta similar se llevó a cabo en Cancún, México, en 2003, también en el contexto de 
    una reunión de líderes de la OMC pues, a decir de una de las participantes, esta “solo causa pobreza”.
</p>

    <div class="mx-auto max-w-lg">
  <?php
       renderImage('hu2-u4-capitalism_banner.webp', '“El capitalismo no está funcionando” La frase en la manta que porta la multitud es ilustrada por una larga fila de solicitantes 
       de empleo. Foto de Fences and windows.','https://commons.wikimedia.org/wiki/File:G20_capitalism_banner.jpg', 'Wikimedia Commons.');
    ?>
      </div>

    <p>
        El Ejército Zapatista de Liberación Nacional emerge, justamente, en 1994, en contra de la puesta en marcha del Tratado de Libre Comercio para América del Norte (TLCAN) 
        que implicó reformas importantes al artículo 27 constitucional. El EZLN se ha constituido desde entonces en un referente de los movimientos también llamados antisistémicos.
    </p>
    <p>
       Según Wallerstein las raíces más profundas de los movimientos antisistémicos se remontan hasta 1968. Pero el mismo autor identifica un nuevo punto de partida en 1999:
    </p>

    <b>
        Después de que Estados Unidos logró crear el Tratado de Libre Comercio de América del Norte y Europa avanzó en su unión económica, los países del norte (potencias industriales) 
        decidieron que era tiempo de instrumentar su programa mediante la OMC. El momento escogido fue la reunión de Seattle en 1999. El Norte había esperado mucho. Los estragos del 
        Consenso de Washington -desempleo creciente, degradación ecológica, destrucción de la autonomía alimentaria- condujeron a un movimiento de protesta inesperadamente fuerte que 
        pudo reunir a muchos grupos, de los anarquistas, pasando por los ambientalistas, a los sindicalistas. Y sus protestas combinadas lograron desactivar la fuerza de la reunión de la OMC.  
        <a> (Wallerstein Op. Cit)</a>
    </b>

    <p>
       A partir de las protestas de Seattle, y contando con referentes como el EZLN en México, el Movimiento de los Sin Tierra en Brasil o el Movimiento Piquetero argentino, estos 
       movimientos antisistémicos han logrado posicionarse en la esfera pública en contra de las ideologías del vacío social y el individualismo generalizado (Wieviorka 2003:9) 
       Suponemos que su heterogeneidad, tanto en medios , propósitos y orígenes, representa ya un contraste con el aplanamiento que el neoliberalismo ha pretendido imponer sobre 
       la economía y sobre las conciencias.
    </p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>