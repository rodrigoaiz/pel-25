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
  <h2>La pobreza en México</h2>

  <p>Como has visto en las lecciones anteriores, en los años 80 <b>México adoptó el modelo económico neoliberal caracterizado por la reducción del Estado en la economía, la apertura comercial, la privatización de empresas públicas y la liberalización del mercado</b>. Estas reformas buscaban modernizar la economía mexicana y atraer la inversión extranjera, y si bien algunos sectores se beneficiaron del crecimiento económico, amplias capas de la población quedaron excluidas como consecuencia de la disminución del gasto social, la precarización del empleo y la concentración de la riqueza. Estos factores contribuyeron a que la pobreza y desigualdad persistieran, especialmente en comunidades rurales e indígenas donde enfrentaron el despojo de sus tierras y recursos naturales. Esto dio pie al surgimiento de movimientos sociales por la lucha de sus derechos y la preservación de sus costumbres, su autonomía en procesos de elección de gobierno y también para preservar su identidad cultural.</p>

  <p>Ante este panorama, los <b>gobiernos pusieron en práctica acciones para atender diversas problemáticas, como las condiciones de pobreza</b> y atención a grupos vulnerables con programas como:</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-combate.jpg', 'Combate a la pobreza en México');
        ?>
  </div>

  <p>Los análisis sobre el <b>desempeño de estas estrategias</b> apuntan a que la articulación funcionó mejor en el discurso, o en el papel (Yaschine Arroyo, 2023) ya que <b>se trató de programas desarticulados y dispersos</b>. Entre los más emblemáticos destaca el Programa de Apoyos al Campo (PROCAMPO). Todos a excepción del Seguro Popular, fueron programas de transferencia monetaria con impactos positivos en educación, salud, alimentación y combate a la pobreza.</p>

  <p>Con el cambio de gobierno en el 2018 y <b>la llegada al poder del partido Morena</b> se pretendía <b>avanzar hacia un Estado de Bienestar universal en el que se garantizaran los derechos económicos y sociales</b> para la población, dando prioridad a los grupos históricamente discriminados. Así, en los primeros cien días del gobierno de López Obrador, desaparecieron o se reajustaron 18 programas sociales. Por otra parte se crearon 14 programas con los que el presidente deseaba eliminar la intermediación y garantizar que cada beneficiario recibiera el apoyo sin condiciones,  fortaleciendo el mercado interno. De hecho, una de las primeras medidas de este gobierno fue cambiar lo que se conocía como <b>política social</b> por <b>política de bienestar</b>, que aglutinó la educación, la salud, la seguridad social y la erradicación de la pobreza (Bolívar Meza, 2024, pág. 101). Entre los programas que destacan de este periodo está la Pensión para Adultos Mayores; Pensión para Personas con Discapacidad; Apoyo para el Bienestar de las Niñas y Niños Hijos de Madres Trabajadoras; Beca Universal de Educación Media Superior Benito Juárez; Jóvenes Construyendo el Futuro; Sembrando Vida, por mencionar algunos.</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-pobreza.webp', 'Pobreza en México');
        ?>
  </div>

  <p>El gobierno de <b>Andrés Manuel López Obrador</b> definió a la <b>economía moral</b>, como el modelo posneoliberal para México, con el que se pretendía establecer un Estado de bienestar igualitario y fraterno, que garantizara que los pobres encontrarán protección ante incertidumbres económicas y desigualdades sociales. Tuvo como objetivo proteger a todas las personas a lo largo de su vida, garantizando su derecho a la alimentación, al trabajo, la salud, la educación y la cultura, la vivienda y la seguridad social. Revisa a continuación el siguiente shorts, sobre los niveles de pobreza en nuestro país.</p>

    <?php
      renderVideoIframe('6Zf670JihSI', '5.4 millones salen de la pobreza en México entre 2016 y 2022');
    ?>

    <p>Ante el panorama descrito, es necesario que el gobierno actual impulse una política social integral que garantice el ejercicio universal de derechos, priorizando a los más vulnerables para lograr un crecimiento económico sustentable, una política fiscal redistributiva, empleos dignos y equidad social no sólo a través de transferencias monetarias, sino que promuevan un cambio de fondo para integrar a la sociedad al desarrollo del país.</p>

    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
