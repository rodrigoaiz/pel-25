<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
            <h3>Recíproco del Teorema de Thales</h3>
            <p>Para finalizar con este tema, recuerda que anteriormente se comentó lo siguiente: Un teorema está
                compuesto básicamente de dos partes: una hipótesis y una tesis. Que, simplificando, puede escribirse
                como: “Si pasa este hecho (hipótesis), entonces se cumple esto (tesis)”. Y que en el recíproco de un
                teorema se “invierte” la hipótesis y la tesis.</p>
            <p>Para el teorema de Thales tenemos entonces que, si hay rectas paralelas que cortan una transversal,
                entonces tendremos segmentos proporcionales comprendidos entre las paralelas.</p>
            <p>Entonces responde: ¿cómo redactarías el recíproco del Teorema de Thales?</p>
            <p>Nuevamente retomando el teorema, tomamos la tesis: existen segmentos proporcionales. Y redactamos como
                hipótesis: Si al tener varias rectas que cortan a otras dos transversales, los segmentos comprendidos
                entre las intersecciones son proporciones…</p>
            <p>Tomamos ahora la hipótesis del teorema original: rectas paralelas que cortan una transversal. Y
                redactamos como tesis: …entonces las rectas que cortan a las transversales son rectas paralelas.</p>
            <p>Así que el recíproco del teorema de Thales puede escribirse como: Si al tener varias rectas que cortan a
                otras dos transversales, los segmentos comprendidos entre las intersecciones son proporciones entonces
                las rectas que cortan a las transversales son rectas paralelas. </p>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>