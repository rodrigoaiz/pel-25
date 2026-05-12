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
  <h2>El Estado benefactor y el proyecto modernizador en México.</h2>

  <p>Como viste en la unidad anterior, posterior a la lucha revolucionaria, se inició un proceso <b>de reconstrucción del Estado mexicano</b> a partir de 1920 con un <b>proceso de institucionalización</b>, para terminar con las confrontaciones militares y establecer vínculos cercanos con la sociedad. En este contexto se creó el partido oficial Partido Nacional Revolucionario <b>PNR</b> que después se transformó en <b>Partido de la Revolución Mexicana</b> (1938). Se crearon instituciones bancarias como el Banco de México y el Banco de Crédito Agrícola y la Nacional Financiera en 1933, así como instituciones educativas: <b>Secretaría de Educación Pública e Instituto Politécnico Nacional</b>. Asimismo, en el Cardenismo se sentaron las bases para el crecimiento económico e impulso industrial con la nacionalización de ferrocarriles y petróleo, favoreciendo el <b>intervencionismo del Estado en materia económica</b> e impulsando la <b>industria vía sustitución de importaciones</b>. Estos aspectos favorecieron el desarrollo de un Estado de bienestar también conocido como Estado Benefactor.</p>

  <div class="mx-auto max-w-lg">
    <?php
    renderImage('hm2-u3-presidencialismo.webp', 'Presidencialismo');
    ?>
  </div>

  <p>Es así como entre 1940 y 1982 se desarrolla en nuestro país el <b>Estado de Bienestar</b>, un modelo político-económico donde el <b>Estado asume la responsabilidad del bienestar general de su población</b>, destinando parte del gasto público a partidas tales como: <b>sanidad, educación, vivienda, pensiones</b>, el seguro de desempleo y otros programas sociales, para atender a la población más vulnerable y pobre del país.</p>

 
  <?php ob_start(); ?>
  <p>Para profundizar en el conocimiento del Estado Benefactor te invito a revisar las siguientes tarjetas:</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u3a2', "Estado Benefactor", $ActividadContent);
  ?>

      <p>El Estado benefactor en México fue beneficiado por el contexto de la <b>Segunda Guerra Mundial</b>, pues la <b>política del Buen Vecino </b> inaugurada por Franklin D. Roosevelt en 1933 significó un trato muy especial para México, ya que en <b>1941</b> el gobierno estadounidense <b>suspendió el apoyo a las exageradas reclamaciones de las compañías petroleras expropiadas</b>, se convino la cooperación de Estados Unidos en la rehabilitación de ferrocarriles mexicanos, <b>la deuda externa pasó de 509.5 a 240.4 millones de dólares</b>, además del impacto económico ya que al cerrarse los mercados europeos, <b>México quedó como proveedor privilegiado de materias primas</b> estratégicas para Estados Unidos y este país como exportador único de productos manufacturados. Las exportaciones mexicanas al vecino del norte promediaron 87.8% y las importaciones 86.4% durante el periodo 1941-1945 (Medina Peña, 2003).
      </p>

      
        <?php
        renderImage('hm2-u3-infoSGM.jpg', 'México en la Segunda Guerra Mundial');
        ?>

      <p>Como te pudiste dar cuenta, nuestro país tuvo una <b>participación militar</b> en la <b>Segunda Guerra Mundial</b>. Al mismo tiempo hay un <b>impacto económico</b> que constituye un factor en el despegue económico con el impulso a la actividad industrial vía sustitución de importaciones, dando paso a una etapa conocida como <b>Milagro Mexicano</b>.
      </p>

      <p>A continuación, te invito a ver con detenimiento el siguiente vídeo: </p>

      <?php
        renderVideoIframe('lI2YMFeRWsg', 'La industrializacion y el milagro mexicano');
      ?>

      <p>Como se menciona en el vídeo, <b>el Milagro Económico</b> estuvo caracterizado por <b>medidas proteccionistas del Estado y la Inversión de Capital Extranjero</b>, importante en el impulso al desarrollo industrial de bienes y servicios en el país. Este periodo se puede dividir en fases:</p>

      <?php
        renderImage('hm2-u3-milagro.jpg', 'México en la Segunda Guerra Mundial');
        ?>
      


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
