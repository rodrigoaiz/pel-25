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
  <h2>Acciones colectivas de los estudiantes</h2>

  <h3>La Huelga UNAM 1999</h3>

  <p>En un contexto de debilidad política del partido en el poder PRI, que anunciaba la pérdida de poder y un contexto económico de impulso a las políticas neoliberales, donde el gobierno impulsaba reformas orientadas a favorecer el libre mercado favoreciendo a la clase empresarial y al mismo tiempo reducía el gasto público afectando a los sectores populares con desempleo, precarización laboral y recortes presupuestales que afectaban directamente a las universidades, surge la huelga en la UNAM en 1999.</p>

  <p>El origen del conflicto fueron las protestas por el aumento de las colegiaturas decretado por el Consejo Universitario, cuotas que durante mucho tiempo fueron de 0.20 pesos para la licenciatura y de 0.15 pesos para el bachillerato pasarían de acuerdo con el rector Francisco Barnés de Castro a un incremento de 1,360 pesos para el bachillerato y 2,040 para la licenciatura, estableciendo que los estudiantes con ingresos familiares inferiores a los cuatro salarios mínimos quedarían exentos del pago (Delgado de Cantú, 2007, pág. 570).</p>

  <div class="mx-auto max-w-lg">
        <?php
        renderImage('hm2-u4-huelga.webp', 'Huelga UNAM','https://upload.wikimedia.org/wikipedia/commons/7/78/HuelgaUNAM-volanteMarcha04Feb2000.jpg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original','wikimedia commons');
        ?>
  </div>

  <p>Y si bien en una etapa posterior después de los primeros brotes de rechazo a las cuotas, el Consejo Universitario aprobó incrementar a 20 salarios mínimos (689.00 pesos) la cuota para la licenciatura y a 15 salarios mínimos (516.00 pesos) el bachillerato, en lugar de 30 y 20 salarios mínimos respectivamente, como fue la propuesta original de Barnés de Castro. Esta situación no impidió el rechazo de los estudiantes, argumentando la ilegalidad de la aprobación. Asimismo, veían en esta medida un paso hacia la privatización de la educación pública, en un contexto social de profundas desigualdades sociales y educativas. Se dio paso entonces, a la conformación del Consejo General de Huelga (CGH) iniciando el paro en la UNAM.</p>

  <p>A continuación, revisa el siguiente vídeo:</p>

    <?php
      renderVideoIframe('9pY2dS9Tuc8', 'La Huelga UNAM 1999 - 2000. A 20 Años');
    ?>

  <p>En noviembre de 1999 renuncia el rector Barnés de Castro, quedando en su lugar Juan Ramón de la Fuente, quien dio paso a un periodo de negociaciones.  En los primeros días de enero del año 2000, las autoridades aceptaron las exigencias de los huelguistas, sin embargo, ante la intolerancia de los ultras, el conflicto persistió. Después de los resultados de un plebiscito donde los universitarios votaron para poner fin al paro, el 6 de febrero ingresó al recinto universitario la Policía Federal Preventiva, se recuperaron las instalaciones y aprendieron a paristas.</p>

  <h3>#Yo soy 132</h3>

  <p>El 11 de mayo de 2012 el entonces candidato presidencial, Enrique Peña Nieto, visitó la Universidad Iberoamericana como parte de un foro promovido por la propia institución que tenía como objetivo promover la participación política entre la comunidad universitaria en el contexto de un proceso electoral. Este acontecimiento -la visita de un candidato presidencial a una universidad privada- provocó entre los estudiantes una reacción inesperada que derivó en el abucheo al candidato presidencial al final del acto. Ampliamente documentado en la hemerografía está lo que pasó después: asesores del candidato denostaron e intentaron minimizar la reacción estudiantil provocando el enojo entre los alumnos. La forma en que los estudiantes respondieron el fin de semana siguiente se dio a través de la producción del famoso video “131 estudiantes de la Ibero responden” y su consecuente viralización una vez subido a Youtube, hecho que derivó en un apoyo estudiantil y social que culminó en la formulación del hashtag que dio nombre al movimiento: #YoSoy132 (Portillo, 2025).</p>


    <?php
      renderVideoIframe('N3ViLNnTnHA', '¿Cómo inició el movimiento Yo Soy 132?');
    ?>

  <p>En el análisis que hace la doctora Maricela Portillo, destaca la participación política de los jóvenes protagonistas del #yoSoy132 a la luz del momento fundante y en el repertorio de acciones colectivas. Al respecto señala que los integrantes de este movimiento tenían una postura política e interés en temas sociales, con recuerdos asociados a políticos como presidentes y gobernantes con el impacto que generaron los asesinatos políticos, las crisis económicas, las movilizaciones sociales, el descontento social por la masacre de Acteal, el Zapatismo y la represión en Atenco. De ahí que asumieron una postura crítica respecto al sistema político y sensibilidad social. Así su participación en el movimiento significó ejercer su ciudadanía.</p>

  <p>Este movimiento hizo visible su empoderamiento con el uso de las redes sociales o tecno comunicativas por la rápida visibilización que se dio en el espacio público con las marchas del 18 (con destino a Televisa Santa Fe) y 23 de mayo (la Estela de Luz), así como la entrevista que conceden a uno de los principales noticieros de Televisa dos semanas después. </p>

  <p>Después de mayo el conflicto se fragmentó por las diferencias ideológicas, y en una etapa posterior a las elecciones –donde el ganador fue Enrique Peña Nieto- se pasó a la represión, persecución, y consecuente criminalización de los jóvenes.</p>

  <?php ob_start(); ?>
    <p>Considerando la información que hasta el momento has trabajado te invito a participar en el Foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a14', "Foro: Movimientos emergentes", $ActividadContent);
    ?>



    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
