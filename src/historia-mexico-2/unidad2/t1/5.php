<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El Maximato</h2>

  <p>El Maximato (1928–1934) es considerado por el historiador Lorenzo Meyer como un periodo de crisis del Estado mexicano debido a varias razones que tienen que ver con la legitimidad, la institucionalización del poder y la dependencia del país hacia un solo hombre: <b>Plutarco Elías Calles, el "Jefe Máximo de la Revolución"</b>.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-maximato.webp', 'Maximato');
    ?>
  </div>

  <p>Al respecto el autor señala que hay falta de legitimidad democrática ya que  los presidentes del Maximato (Portes Gil, Ortiz Rubio y Rodríguez) no tenían autonomía real. Todos estaban subordinados a Calles, quien no tenía ningún cargo oficial, pero controlaba al aparato estatal desde el Partido Nacional Revolucionario (PNR). Esto minaba la legitimidad del régimen, ya que el presidente formal no era el que tomaba las decisiones.</p>

        <?php ob_start(); ?>
        <p>A continuación, revisa la siguiente información:</p>
        <?php
        $ActividadContent = ob_get_clean();
         renderActividad('u2a6', "Gobierno de Emilio Portes Gil", $ActividadContent);
        ?>

  <p>Al terminar el gobierno interino, en las elecciones extraordinarias de 1929 Pascual Ortiz Rubio asumió la presidencia el 5 de febrero de 1930. Su gestión estuvo marcada por la influencia de Calles y diversos desafíos políticos y sociales, de los cuales destacan los siguientes:</p>

  <p>Aspectos destacados de su gobierno incluyen:</p>

  <ul>
    <li><b>Doctrina Estrada.</b> Sostiene que México no debe juzgar, ni para bien ni para mal, los gobiernos ni los cambios en el gobierno de otras naciones.</li>
    <li><b>Política exterior.</b> Persistieron problemas en relación con el pago de la deuda externa, de la misma manera continúa el conflicto petrolero, se da la ruptura con la Unión Soviética y México ingresa a la Sociedad de Naciones.</li>
    <li><b>Legislación laboral.</b> Se promulgó la Ley Federal del Trabajo que defendía el poder adquisitivo de los salarios, la formación de sindicatos y el derecho a huelga.</li>
    <li><b>Infraestructura y modernización.</b> Se llevaron a cabo importantes proyectos de construcción de carreteras, ferrocarriles y puertos, mejorando significativamente la conectividad y el transporte en el país.</li>
  </ul>

  <p>Renunció a la presidencia el 2 de septiembre de 1932, alegando que algunas personas no le permitían ejercer sus facultades constitucionales como Primer Mandatario </p>

  <p>Finalmente, tras la renuncia de Ortiz Rubio, <b>Abelardo L. Rodríguez fue designado presidente sustituto</b>, ocupando el cargo del 4 de septiembre de 1932 al 30 de noviembre de 1934. Durante su gobierno <b>impulsó importantes reformas económicas</b>, entre ellas el <b>establecimiento del salario mínimo</b> y la creación de <b>Nacional Financiera (NAFINSA)</b> en 1934, con el propósito de fomentar el desarrollo económico.</p>

  <p>También fueron relevantes las obras de <b>infraestructura</b>, ya que durante su gestión se <b>trazaron carreteras</b> como México–Nuevo Laredo, Puebla–Tehuacán y Morelia–Guanajuato, además de la <b>inauguración del Palacio de Bellas Artes.</b></p>

  <p>Finalmente durante este gobierno se decreta el Plan Sexenal, el cual establece lo siguiente:</p>

  <div class="flex items-start gap-6">
    <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u2-sexenal.webp', 'Plan Sexenal');
    ?>
  </div>

  <ol>
    <li>Considera al Estado como rector de la economía.</li>
    <li>Elevar el nivel cultural y económico del pueblo.</li>
    <li>Luchar contra los privilegios.</li>
    <li>Apoyar el reparto de tierras.</li>
    <li>Fomentar la organización de obreros, campesinos y sectores populares.</li>
    <li>Industrializar el campo.</li>
    <li>Impulsar la educación laica.</li>
    <li>Explotar las riquezas naturales.</li>
    <li>Atender la salud.</li>
    <li>Nacionalizar los bienes del suelo.</li>
    </ol>
  </div>

  <p>De esta manera, te diste cuenta de que la institucionalización del Estado mexicano fue un proceso complejo, por un lado, la creación de un partido oficial para aglutinar las fuerzas revolucionarias y al interior reglas necesarias para evitar más actos violentos ante una competencia política. Por otro lado, el proceso de institucionalización enfrentó dos grandes problemas, la Guerra Cristera con una confrontación militar del clero contra el Estado y el Maximato que evidenció la necesidad de institucionalizar la sucesión presidencial y evitar con ello crisis políticas.</p>


  

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
