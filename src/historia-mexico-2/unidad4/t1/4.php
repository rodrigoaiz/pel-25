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
  <h2>¿El fin del Estado neoliberal?</h2>

  <p>En el 2018 nuestro país vivió un proceso electoral sin precedentes: después de dos intentos Andrés Manuel López Obrador triunfó en estas elecciones. En sus campañas lanzó ataques hacia los empresarios, denunció públicamente la corrupción, inició caravanas por la democracia, criticó las políticas neoliberales y el capitalismo. Sus frases célebres: “No puede haber gobierno rico con pueblo pobre”, “Por el bien de todos, primero los pobres”, y los recursos destinados a los apoyos sociales pueden dar cuenta que abandonó las políticas neoliberales, pero ¿realmente esto es así? Si es así, a qué sistema económico transita nuestro país, ¿el gobierno actual es realmente un partido de izquierda? </p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u4-amlo.webp', 'Andrés Manuel López Obrador en el zócalo');
    ?>
  </div>

  <p>Los datos sobre la disminución de la pobreza resultan atractivos. El Banco Mundial (BM) reveló que entre 2018 y 
9.5 millones de mexicanos salieron de la pobreza, cifra que no tiene precedente para un periodo de seis años. En el mismo sentido, el Consejo Nacional de Evaluación de la Política de Desarrollo Social (Coneval) “reporta que en 2018 vivían en México 52.4 millones de personas en pobreza, que representaban 41.9 % de la población. Según el mismo organismo, en 2022, último dato disponible, la cifra bajó a 46.8 millones de personas, 36.3 % de la población. Esta variación implica una reducción de 5.6 millones en el periodo de referencia” (Becerra, 2024).</p>

  <p>Las acciones que López Obrador emprendió durante su gobierno nos muestran una visión positiva de su administración. Los programas sociales que se crearon, benefician a la gente de manera directa sin organizaciones intermediarias, como lo hicieron los gobiernos anteriores: el apoyo económico a grupos vulnerables, Jóvenes construyendo el futuro. El incremento al salario mínimo; el reconocimiento a los derechos de los pueblos indígenas; los planes de justicia y desarrollo social de los pueblos originarios en los estados de la República.</p>

  <p>Las políticas económicas que ejecutó en su primer año de gobierno para atraer la inversión y lograr que México tenga un desarrollo son: el rescate de PEMEX; la construcción del Tren Maya y la integración de un corredor interoceánico en el Istmo de Tehuantepec para impulsar el desarrollo de la región sur-sureste del país potenciando la industria turística; la inversión en el aeropuerto Felipe Ángeles; y el fortalecimiento de la Comisión Federal de Electricidad. </p>

  <?php ob_start(); ?>
    <p>Del mismo modo, esta información nos invita a analizar, reflexionar, comparar, y cuestionar esa visión positiva. Para ello te invito a poner en práctica tu pensamiento crítico para participar en el Foro:</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a6', "Foro: ¿Fin del neoliberalismo o continuidad del mismo?", $ActividadContent);
    ?>


    <p>Con el estudio de este tema aprendimos a diferenciar los conceptos de <b>globalización</b> y <b>neoliberalismo</b>. Nuestro país transita hacia un Estado neoliberal en el contexto de la globalización como una condición para renegociar la deuda que se adquirió con los organismos internacionales. Pese a los planteamientos positivos de los presidentes desde Salinas de Gortari hasta Peña Nieto para atender las necesidades de la población, el impacto económico para los productores, pequeñas y medianas empresas y para la clase trabajadora ha sido devastador; sólo se puso en marcha para satisfacer los intereses de la oligarquía económica y política.</p>

    <p>El triunfo de Andrés Manuel López Obrador en las elecciones de 2018 con un 53% de los votos representa un momento importante en la historia de nuestro país. Al asumir una postura de izquierda frente al capitalismo, obtuvo una identificación con los sectores más pobres, intelectuales de izquierda y trabajadores de la clase media. Sin embargo, habría que analizar si con su llegada se acabaron 36 años de neoliberalismo en nuestro país o se dio continuidad a las políticas neoliberales.</p>


    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
