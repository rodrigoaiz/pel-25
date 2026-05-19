<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El surgimiento del Ejército Zapatista de Liberación Nacional (EZLN)</h2>

  <p>Para abordar este apartado es necesario definir ¿qué es un <b>movimiento social</b>? Existe una variedad de enfoques y autores que han trabajado el concepto. Lo definen en función de los cambios en las <b>formas de organización y acción social</b>, y de los objetivos que los movimientos sociales persiguen. Con base en el contexto que estamos estudiando se retoma la definición de <b>Alberto Melucci</b>, que ve en un movimiento social una forma <b>de acción colectiva organizada</b>, para defender o <b>construir una identidad colectiva, expresar demandas sociales</b> y cuestionar el orden establecido.</p>

  <p>A partir de esta definición podemos decir que un movimiento social emergente se refiere a una acción colectiva que busca generar cambios en la sociedad. Tal fue el caso del surgimiento en enero de <b>1994 del Ejército Zapatista de Liberación Nacional (EZLN)</b>, movimiento social que surgió en Chiapas e integró en su mayoría a indígenas mayas, encabezado por el subcomandante Marcos, quien tomó por las armas San Cristóbal de las Casas, la población de Altamirano, Las Margaritas, Ocosingo y Chanal, como una respuesta al establecimiento de políticas neoliberales.</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-EZLN.webp', 'Bandera del EZLN','https://upload.wikimedia.org/wikipedia/commons/b/b4/Ej%C3%A9rcito_Zapatista_de_Liberaci%C3%B3n_Nacional%2C_Flag.svg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
        ?>
  </div>

  <p>El origen del movimiento recupera la lucha de Emiliano Zapata, la necesidad de la solución al problema agrario, que va más allá de una lucha regional, sino que es una lucha nacional por las demandas de solucionar los problemas de todos los mexicanos.</p>

  <p>El movimiento visibilizó a los pueblos indígenas, históricamente excluidos por el Estado mexicano a favor de la expansión del mercado y el capital, por lo cual se levantan con el rostro tapado de negro para exigir tierra y libertad, asumiéndose, así como los sin rostro, los invisibilizados (Losada Zambrano, 2017, pág. 4).</p>

  <p>El zapatismo, por tanto, no solo es una lucha por tierra y libertad, sino también un proyecto político que busca recuperar elementos de las tradiciones indígenas para construir una democracia basada en la autonomía, la justicia y la autogestión de los territorios y recursos.</p>

  <p>Así, al inicio del conflicto se da a conocer la Primera Declaración de la Selva Lacandona, documento dirigido al pueblo mexicano pero que también constituía una declaración de guerra contra el gobierno de Salinas de Gortari.</p>

  <p>Revisa a continuación el texto de esta <a href="https://enlacezapatista.ezln.org.mx/1994/01/01/primera-declaracion-de-la-selva-lacandona/">Primera Declaración de la Selva Lacandona</a></p>

  <p>La publicación del comunicado y el estallido del conflicto militar en Chiapas surgió en el momento en que el gobierno Salinista vivía la euforia de la marcha del Tratado de Libre Comercio con Estados Unidos y Canadá. En respuesta el gobierno federal transita de una represión militar en su inicio, a una negociación política, donde el EZLN pedía el reconocimiento como fuerza beligerante, el cese al fuego de ambas partes, el retiro de tropas federales y la formación de una comisión de intermediación. Por su parte el gobierno nombró a Manuel Camacho Solís Comisionado para la Paz y Reconciliación en Chiapas (Cocopa), dando comienzo a una larga etapa de encuentros y negociaciones con el grupo armado.</p>

  <?php ob_start(); ?>
    <p>Para conocer más sobre el tema revisa las siguientes tarjetas:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u4a13', "El EZLN", $ActividadContent);
    ?>

    <p>Actualmente el EZLN sigue activo en Chiapas, donde las comunidades indígenas zapatistas han creado sus propias formas de autogobierno, aspecto que distingue a los pueblos indígenas que se rigen bajo un sistema de usos y costumbres. El movimiento del EZLN continúa siendo un símbolo de lucha por la justicia y en contra de la exclusión.</p>


    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
