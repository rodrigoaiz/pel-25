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
    <h3>Ácidos y bases de Arrhenius</h3>
    <p>Arrhenius llegó a la conclusión de que las propiedades características de las disoluciones acuosas de los
        ácidos y bases se debían a la disociación de las moléculas en iones.</p>
    <p>Así, Arrhenius propuso clasificar ciertos compuestos como ácidos o bases de acuerdo con el tipo de iones
        que se forman cuando el compuesto se añade al agua. </p>
    <ul class="ul-disc ml-10">
        <li>Ácido es una sustancia que en disolución acuosa se disocia produciendo iones hidrógeno, <span class="text-purple-900 font-serif italic">H<sup>+</sup></span>.
        </li>
        <li>Base es una sustancia que en disolución acuosa se disocia produciendo iones hidróxido, <span class="text-purple-900 font-serif italic">OH<sup>-</sup></span>.
        </li>
    </ul>
    <h3>Ácido de Arrhenius</h3>
    <p>Los cítricos como los limones contienen ácido cítrico, el cual es un ácido muy común.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t4_sliced_lime.webp', 'Propiedades de las sustancias con enlace iónico');
        ?>
    </div>
    <p>Un ácido de Arrhenius es cualquier especie que aumenta la concentración de iones <span class="font-serif italic">H<sup>+</sup></span>.</p>
    <p>Por ejemplo, si consideramos la reacción de disociación para el ácido clorhídrico, <span class="font-serif italic">HCl</span> en agua:</p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl"><span class="text-red-700">H</span><sub>ac</sub> → <span class="text-red-700">H<sup>+</sup></span><sub>ac</sub> + Cl<sup>-</sup><sub>ac</sub></span></p>
    <p>Si hacemos una disolución acuosa de ácido clorhídrico, el HCl se disocia en iones H+ y Cl−. Entonces,
        debido a que esto resulta en un aumento en la concentración de iones H+ en disolución, es por lo que el
        ácido clorhídrico se considera un ácido de Arrhenius.</p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl"><span class="text-red-700">H<sup>+</sup></span>yCl<sup>-</sup><span class="text-red-700">H<sup>+</sup></span></span>
    </p>
    <p>* Recuerda que el subíndice (ac) se refiere a acuoso, lo cual indica que el compuesto se encuentra en
        disolución.</p>
    <h3>Base de Arrhenius</h3>
    <p>Una base de Arrhenius se define como cualquier especie que aumenta la concentración de iones hidróxido, <span class="font-serif italic">OH<sup>-</sup></span>, en disolución acuosa.</p>
    <p>Un ejemplo de una base de Arrhenius es el hidróxido de sodio, <span class="font-serif italic">NaOH</span>, compuesto que es altamente soluble en
        agua. </p>
    <p>Si consideramos la reacción de disociación para el hidróxido de sodio:</p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl">Na<span class="text-blue-700">OH</span><sub>(ac)</sub> → Na<sup>+</sup><sub>(ac)</sub> + <span class="text-blue-700">OH<sup>−</sup></span><sub>(ac)</sub></span></p>
    <p>Puedes ver que cuando ponemos <span class="font-serif italic">NAOH</span> en agua, este se disocia completamente formando iones <span class="font-serif italic">OH−</span> y <span class="font-serif italic">Na+</span>, lo cual aumenta la concentración de iones hidróxido. Así, el hidróxido de sodio es una base de Arrhenius.</p>
    <p class="text-center my-2"><span class="font-serif italic text-2xl"><span class="text-blue-700">OH<sup>+</sup></span>Na<sup>+</sup></span></p>
    <p>Revisa el siguiente video y amplía tus conocimientos acerca de los ácidos y bases de Arrhenius.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('oeFcEjmIXgs', 'Definición de Arrhenius para ácidos y bases');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>