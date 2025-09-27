<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Clasificación de los minerales</h2>
  <h3>Nomenclatura</h3>
  <h4>Óxidos y sales</h4>
  <h4>Clasificación</h4>

  <p>Los minerales pueden ser clasificados conforme a su composición química, por ejemplo, tenemos los óxidos que pueden ser metálicos y no metálicos o las sales que pueden ser binarias u oxisales, otra clasificación les brinda el nombre de sales ácidas o básicas. Dentro de las sales binarias tenemos a los haluros, de los cuales existen numerosos ejemplos de minerales. En las oxisales tenemos grupos como carbonatos, nitratos, sulfatos, entre otros. </p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-fluorita.webp','fluorita','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
      renderImage('q3-u2-calcita.webp','calcita','https://pixabay.com/es/photos/mineral-minerales-piedras-238651', 'Pixabay');
      renderImage('q3-u2-amatista.webp','Cuarzo Amatista','https://pixabay.com/es/photos/amatista-mineral-violeta-239131', 'Pixabay');
  ?>
  </div>

<p>A continuación, puedes revisar una página Web con información sobre la Clasificación de Strunz en los minerales, que es un sistema de clasificación mineralógica desarrollado por el geólogo alemán Karl Hugo Strunz. Esta clasificación organiza los minerales según su composición química y su estructura cristalina. Se divide en diez clases principales basadas en la composición química: elementos nativos, sulfuros y sulfosales, halogenuros, óxidos e hidróxidos, nitratos y carbonatos, boratos, sulfatos, fosfatos, silicatos y minerales orgánicos. Cada clase se subdivide en familias, grupos y subgrupos según su estructura cristalina y otras propiedades. Esta clasificación es ampliamente utilizada por mineralogistas y geólogos para identificar y estudiar minerales; sin embargo, para este curso de Química III, solo se considerarán los óxidos y algunas sales.
</p>

<div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-marinos.webp','Minerales marinos.','https://pixabay.com/es/photos/oro-lingotes-tesoro-bullion-513062/', 'Pixabay');
      renderImage('q3-u2-tono.webp', 'Minerales en diferentes tonalidades.', 'https://pixabay.com/es/photos/cobre-thrash-metal-chatarra-1504098/', 'Pixabay');
  ?>

</div>

<p>Revisa la información sobre la Clasificación de Strunz, dando clic en el enlace.</p>

<div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-strunz.webp','', 'https://sptab.com/es/clasificacion-strunz-minerales/', 'Clasificación de Strunz.');
  ?>

</div>

  <h3>Nomenclatura</h3>

<p>Existen tres sistemas de nomenclatura para darle nombre a las sustancias inorgánicas, entre ellos tenemos al sistema tradicional, al dictado por la Unión Internacional de Química Pura y Aplicada (IUPAC) y al Sistema Stock.
La nomenclatura clásica para óxidos y sales considera el uso de cationes y aniones, donde se nombre al catión con la terminación -ico, -oso u otras que correspondan con el estado de oxidación que se está trabajando, por ejemplo usan prefijos y sufijos como hipo-oso o per-ico. Un ejemplo de este sistema son los nombres de óxido férrico, óxido ferroso, óxido cúprico, óxido sulfuroso, entre otros.
</p>

<p>La nomenclatura IUPAC, también denominada estequiométrica, da nombre a los compuestos utilizando prefijos que indican el número de átomos del elemento químico, por ejemplo, para el caso de CO2, el nombre será dióxido de carbono, porque con el prefijo alude a dos átomos de oxígeno, finalizando con el nombre del no metal. Cuando este también cuenta con algunos subíndices superiores al uno, se usan los mismos prefijos de cantidad, por ejemplo para la sustancia Fe2O3, el nombre es trióxido de dihierro.</p>

<p>La Nomenclatura de Stock, desarrollada por el químico alemán Alfred Stock en 1919, es un sistema utilizado para nombrar compuestos químicos, particularmente sales y óxidos, indicando el estado de oxidación del elemento metálico. En este sistema, el nombre del metal es seguido por un número romano entre paréntesis que indica su valencia. 
Por ejemplo, en el óxido de hierro(III) Fe2O3, el hierro tiene un estado de oxidación de +3. Este sistema simplifica y estandariza la nomenclatura, facilitando la comunicación científica.
</p>

<p>A continuación, consulta el video donde conocerás y aprenderás sobre la Nomenclatura de Stock, lo que te será de utilidad para realizar tus ejercicios.</p>

<?php
  renderVideoIframe('n0wvf867gVE', 'Nomenclatura de Stock.');
  ?>

  <p>A manera de resumen, enlistamos los pasos para darle nombre a la sustancias a partir de la nomenclatura de Stock:</p>

   <?php
  $accordionItems1 = [
    [
      'title' => 'Identificar el catión y el anión',
      'content' => 'Determina cuáles son los iones positivos (cationes) y los iones negativos (aniones) presentes en el compuesto.'
    ],
    [
      'title' => 'Óxidos metálicos y no metálicos',
      'content' => 'Para el caso de óxidos metálicos, el catión siempre será el metal y el anión el oxígeno, pero para óxidos no metálicos el catión será el no metal y el anión sigue siendo el mismo oxígeno.'
    ],
    [
      'title' => 'Sales binarias y oxisales',
      'content' => 'Para las primeras sales el catión será el metal y el anión el no metal. Para el segundo caso el catión sigue siendo el metal y el anión será el ión compuesto, por ejemplo carbonato, nitrato, sulfato.
'
    ],
    [
      'title' => 'Fórmula química',
      'content' => 'Ser cuidadoso de cómo se anotan los números de oxidación de aniones y cationes, sobre todo en oxisales donde es posible usar paréntesis.
'
    ],

    [
      'title' => 'Nombre',
      'content' => 'Para óxidos metálicos y no metálicos, la primera palabra que se escribe es óxido, seguido del nombre del metal o no metal  <b>y entre paréntesis y con número romano</b>, el estado de oxidación del átomo con el que se esté trabajando. Lo mismo sucederá con sales binarias, solo que se menciona primero el nombre del no metal más el sufijo -uro y luego el nombre del metal, indicando su estado de oxidación en número romano.'
    ],
     [
      'title' => 'Revisar y practicar',
      'content' => 'Practica con varios ejemplos para familiarizarte con el proceso y asegúrate de revisar siempre los nombres y las fórmulas químicas para evitar errores.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>

  <p>Ahora pondrás en práctica los sistemas de nomenclatura en la actividad Nomenclatura de Minerales.</p>

  <?php ob_start(); ?>
  <p>A continuación, se les invita a realizar la siguiente actividad, con la finalidad de integrar los conocimientos sobre nomenclatura aprendidos en esta lección. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t2a2', "Nomenclatura de Minerales", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
