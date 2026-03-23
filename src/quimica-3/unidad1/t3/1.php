<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
ob_start();
?>
<section>
  <h2>Elementos, compuestos y mezclas</h2>
  <h3>Reacción química</h3>
  <h4>Condiciones de reacción</h4>

  <p>En los cursos de Química I y II conociste los conceptos de elemento, compuesto y mezcla, que ahora vas a analizar desde el punto de vista de la industria química. El estudio de estos términos básicos de la química, requiere su explicación desde el punto de vista de la materia que nos rodea. ¡Vamos a conocerla!</p>

  <p>La materia está conformada por átomos que son las unidades básicas de la química. Un átomo consiste en un núcleo de protones y neutrones, rodeado por una nube de electrones. Los átomos del mismo tipo se agrupan para formar elementos, como el oxígeno o el hierro. Cuando dos o más tipos de átomos se combinan químicamente en proporciones fijas, forman compuestos, como el agua (H₂O) o el dióxido de carbono (CO₂). Por otro lado, una mezcla es una combinación de dos o más sustancias (elementos o compuestos) que no están químicamente unidas y pueden ser separadas por métodos físicos, como el aire o una ensalada.</p>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u1-tablas.webp', ' Los elementos constituyen una parte de la representación simbólica de la química.', 'https://unsplash.com/es/fotos/round-clear-glass-on-white-paper-jxqTaXF5WmY', 'Unsplash');
  ?>
  </div>
  
    <p>A continuación, visitarás el Portal Académico del CCH para amplificar los conocimientos sobre estos conceptos de átomo, molécula, elemento, compuesto y mezcla.</p>



    <p>Existe otro término vinculado directamente con los conceptos del párrafo anterior y es el de reacción química. Es un fenómeno químico en el cual una o más sustancias, llamadas reactivos, se transforman en nuevas sustancias denominadas productos. Este proceso implica la ruptura y formación de enlaces químicos, y puede ocurrir bajo ciertas condiciones de reacción específicas, como temperatura, presión o presencia de un catalizador. Un ejemplo común es la combustión del metano, donde el metano (reactivo) y el oxígeno (reactivo) se convierten en dióxido de carbono y agua (productos) bajo condiciones de alta temperatura.</p>

    <p>La <b>industria química</b> es fundamental para el desarrollo económico y social de México. Contribuye significativamente al PIB (Producto Interno Bruto) del país, genera empleos y abastece a diversos sectores como la agricultura, la medicina, la energía y la construcción. Además, impulsa la innovación tecnológica y la competitividad a nivel internacional, siendo un pilar clave en la estructura económica nacional.
</p>

    <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u1-torre.webp');
      renderImage('q3-u1-corte.webp', 'La industria tiene fuertes aportaciones a la economía mexicana. ', 'https://pixabay.com/es/photos/industry-power-generation-fuel-4855767/', 'Pixabay');
  ?>
  </div>

  <p>Casi cualquier producto elaborado en la industria mexicana requiere de sustancias químicas en su proceso de fabricación. Esto abarca desde alimentos hasta productos electrónicos y textiles, donde el conocimiento de los conceptos de elemento, compuesto y mezcla es esencial. Ahora bien, cada artículo elaborado pasa por una cadena productiva y en ella suceden diferentes reacciones químicas que son esenciales para transformar materias primas en productos terminados. Estas reacciones se llevan a cabo bajo condiciones específicas y controladas, como temperatura, presión y concentración, para garantizar una producción óptima y segura. Este control es vital para maximizar la eficiencia y la calidad de los productos, así como para minimizar el impacto ambiental y garantizar la seguridad en los procesos industriales.</p>

  <p>A continuación, realizarás una presentación con diapositivas sobre un producto de la industria y en la que se apliques lo aprendido en esta unidad.</p>
  <?php ob_start(); ?>
  <p>Esta actividad está diseñada para que, con ayuda de tu creatividad, apliques tus conocimientos de química de una manera práctica y visual, al integrar diversas herramientas digitales que enriquecerán la presentación final.</p>
  <p>Sigue atentamente las instrucciones:</p>
  <ul>
    <li><strong>Selecciona</strong> un producto procesado en la industria y crea una presentación visualmente atractiva que incluya:</li>
    <ul>
      <li>Materia prima utilizada.</li>
      <li>Proceso de producción.</li>
      <li>Intervención de la industria química.</li>
      <li>Impacto ecológico, económico y social.</li>
    </ul>
    <li><strong>Elabora</strong> una presentación de diapositivas con la siguiente estructura:</li>
    <div class="table-responsive first-col-emphasis bordered mx-auto max-w-2xl my-10">
      <table>
        <thead>
          <tr>
            <th>Diapositiva</th>
            <th>Contenido</th>
            <th>Algunas sugerencias</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Título y descripción general</td>
            <td>Agrega tus datos y el nombre del producto seleccionado.</td>
            <td>Incluye una oración o lema creativo que resuma la esencia del producto o su proceso.</td>
          </tr>
          <tr>
            <td>Materia prima</td>
            <td>Descripción de la materia prima utilizada.</td>
            <td>Incluye imágenes o dibujos propios de la materia prima, junto con una breve historia o curiosidad sobre su origen.</td>
          </tr>
          <tr>
            <td>Proceso de producción</td>
            <td>Explicación del proceso de producción del producto.</td>
            <td>Utiliza un esquema o diseño gráfico para ilustrar cada paso del proceso y que guíen al espectador a través de la cadena productiva.</td>
          </tr>
          <tr>
            <td>Intervención de la industria química</td>
            <td>Descripción de cómo la industria química interviene en el procesamiento.</td>
            <td>Utiliza animaciones sencillas o esquemas para representar las reacciones químicas que muestren cómo se transforman las sustancias.</td>
          </tr>
          <tr>
            <td>Ecuación química y condiciones de reacción</td>
            <td>Presentación de una ecuación química relevante al proceso, con una explicación de las condiciones de reacción (temperatura, presión, catalizadores, entre otros).</td>
            <td>Utiliza animaciones o esquemas resaltando visualmente los cambios en la reacción.</td>
          </tr>
          <tr>
            <td>6, 7 y 8. Impacto económico, social y ambiental</td>
            <td>Descripción del impacto del producto en el medio ambiente, la economía y la sociedad</td>
            <td>Apóyate en un diagrama tipo mapa mental para mostrar los diferentes impactos. Agrega imágenes y datos concretos que muestren los impactos.</td>
          </tr>
          <tr>
            <td>9. Conclusiones y reflexión</td>
            <td>Resumen de los puntos clave y una breve reflexión del impacto del producto en la economía mexicana</td>
            <td>Utiliza palabras clave, oraciones breves y/o imágenes que sinteticen visualmente los aprendizajes adquiridos.</td>
          </tr>
          <tr>
            <td>10. Fuentes de consulta</td>
            <td>Agrega las fuentes de consulta.</td>
            <td>Coloca las referencias en formato APA.</td> 
          </tr>   
        </tbody>
      </table>
    </div>
    <li><strong>Utiliza</strong> herramientas como Canva o Slides de Google para realizar tu presentación. Cuida el uso de colores, tipo de letra e imágenes que permitan una visualización adecuada y una claridad en la explicación de conceptos químicos e impactos.</li>
    <li><strong>Revisa</strong> la <a href="<?php echo PATH_DOCS . 'u1-t3-p1-rubrica.docx'; ?>" target="_blank">rúbrica</a> para verificar que tu presentación cuenta con los elementos indispensables.</li>
    <li><strong>Envía</strong> el enlace con tu presentación para que sea evaluada.</li>
  </ul>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a3', "Producto de la industria", $ActividadContent);
  ?>   
  
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
