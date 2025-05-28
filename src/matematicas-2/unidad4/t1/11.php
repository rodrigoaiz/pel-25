<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<p>Revisa el siguiente video, donde se explica la validez de la construcción de una bisectriz.</p>
<div class="lg:grid">
      <a href="https://youtu.be/ADBdaA0marw?si=cGrxa9MbNXPTwnBK" target="_blank">
                <?php
                renderImage('u4t1_banner_video_validez.webp', '', '', '');
                ?>
      </a>
</div>

<p>Para que quede un poco más claro lo anterior, observa cómo pueden rotarse los triángulos.</p>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-2 items-end">
        <div class="max-w-xl mx-auto">                            
            <?php
            renderImage('validez_construccioon_bisectriz_2.webp', 'Validez de la construcción de una bisectriz 2', '', '');
            ?>
        </div>
        <div class="max-w-xl mx-auto">
                        <?php
            renderImage('validez_construccioon_bisectriz_3.webp', 'Validez de la construcción de una bisectriz 3', '', '');
            ?>
        </div>
</div>

<p>Considerando este giro y lo dicho anteriormente, podemos decir lo siguiente:</p>
            <p>\(\triangle BDF \cong \triangle BEF\) porque</p>
            <p>\( BD \cong BE\), por construcción (se trazaron con ayuda del mismo círculo).</p>
            <p>\( DF \cong FE\) por construcción (se trazaron con ayuda de círculos con el mismo radio).</p>
            <p>\( BF \cong BF\), por ser el mismo segmento.</p>
            <p>Por tanto, los tres lados son iguales y se cumple el postulado de congruencia LLL.</p>
            <p>Ahora responde: ¿Cómo sirve esto para verificar que la recta roja efectivamente es la bisectriz?</p>
            <p>Como ya sabemos que la bisectriz divide a un ángulo en dos partes iguales, implica que </p>
            <p>\(\measuredangle DBF \cong \measuredangle EBF\) lo cual puede observarse con ayuda de la congruencia de
                triángulos, ya que, si los dos triángulos son iguales, entonces sus ángulos correspondientes también lo
                son:</p>

        <div class="max-w-2xl mx-auto">                            
            <?php
            renderImage('validez_construccioon_bisectriz_4.webp', 'Validez de la construcción de una bisectriz 4', '', '');
            ?>
        </div>

<!-- <div class="md:grid grid-cols-2 gap-3 mt-8">
      <div>
      <p>Considerando este giro y lo dicho anteriormente, podemos decir lo siguiente:</p>
            <p>\(\triangle BDF \cong \triangle BEF\) porque</p>
            <p>\( BD \cong BE\), por construcción (se trazaron con ayuda del mismo círculo).</p>
            <p>\( DF \cong FE\) por construcción (se trazaron con ayuda de círculos con el mismo radio).</p>
            <p>\( BF \cong BF\), por ser el mismo segmento.</p>
            <p>Por tanto, los tres lados son iguales y se cumple el postulado de congruencia LLL.</p>
            <p>Ahora responde: ¿Cómo sirve esto para verificar que la recta roja efectivamente es la bisectriz?</p>
            <p>Como ya sabemos que la bisectriz divide a un ángulo en dos partes iguales, implica que </p>
            <p>\(\measuredangle DBF \cong \measuredangle EBF\) lo cual puede observarse con ayuda de la congruencia de
                triángulos, ya que, si los dos triángulos son iguales, entonces sus ángulos correspondientes también lo
                son:</p>
      </div>
      <div>
        <a href="https://uapas2.bunam.unam.mx/matematicas/variacion_lineal/" target="_blank">
            <?php
            renderImage('u2t1_banner_variacion_lineal.webp', '', '', '');
            ?>
        </a>
      </div>
</div> -->

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>