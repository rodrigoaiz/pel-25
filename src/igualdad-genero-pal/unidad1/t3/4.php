<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Orígenes de la desigualdad de género</h2>
  <div class="w-1/2 mx-auto">
    <?php
    renderImage('iga3-img01d.webp');
    ?>
  </div>
  <p>El origen de la propiedad privada influyó en la distribución desigual del poder entre hombres y mujeres, dando origen al patriarcado. Este sistema social y cultural donde los hombres ejercen el poder dominante consolidó roles y estereotipos de género y abrió brechas de desigualdad dando a los hombres derechos, recursos y oportunidades que les fueron negadas a las mujeres. </p>
  <p>La primera actividad con la que iniciarás los aprendizajes 3 y 4 tiene la finalidad de explorar tus conocimientos previos sobre las relaciones de poder y las masculinidades.</p>
  <p><strong>Propósito</strong></p>
  <p>Reflexionar sobre los orígenes de la disparidad de condiciones sociales asociadas al género.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee la siguiente síntesis de los documentos “¿Qué es el patriarcado?” y “Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él)”. Si quieres profundizar tu lectura, puedes consultar los textos completos que se encuentran en las referencias. </li>
    <li><strong>Toma nota en tu cuaderno de trabajo</strong> de la asignatura.</li>
    <li>Con base en la lectura, resuelve el ejercicio de relación de columnas cuantas veces sea necesario, para que tengas un dominio de los conceptos.</li>
  </ol>

  <div class="w-full mt-6 bg-secondary/40">
    <div class="max-w-screen-lg mx-auto py-5 px-5 md:px-2">
      <p class="uppercase font-bold text-xs tracking-widest text-fuchsia-900 mb-1">Lectura</p>
      <h3 class="font-bold text-xl border-b-2 border-dashed border-fuchsia-900 pb-2 mb-4">¿Qué es el patriarcado y cómo surgió?</h3>
      <p>El patriarcado es un sistema histórico y social de relaciones sexo-políticas basado en la dominación masculina y la subordinación de las mujeres, que se manifiesta tanto en el ámbito privado como en el público. En su sentido literal, alude al "gobierno de los padres", pero las teorías feministas han mostrado que no se limita a la familia, sino que se estructura a través de múltiples instituciones sociales, políticas, económicas y simbólicas que regulan la vida social en su conjunto.</p>
      <p>Desde una perspectiva feminista, el patriarcado se entiende como un sistema específico de poder que explica la opresión histórica de las mujeres. Autoras como Gerda Lerner lo definen como la institucionalización del dominio masculino sobre mujeres, niñas y niños, con raíces históricas que se remontan a las primeras civilizaciones agrícolas. Este sistema se sostiene mediante relaciones de parentesco, el control de la sexualidad femenina, la heterosexualidad obligatoria y el llamado contrato sexual, que legitima el acceso de los varones al cuerpo, el trabajo y la reproducción de las mujeres.</p>
      <p>El patriarcado no es un orden natural ni universal. Estudios antropológicos muestran que muchas sociedades de cazadores-recolectores fueron relativamente igualitarias y que el dominio masculino se intensificó con el surgimiento de la agricultura y la ganadería, cuando apareció la acumulación de riqueza material. El control de la tierra, el ganado y otros recursos favoreció la concentración del poder en manos de los hombres y la pérdida progresiva de autonomía de las mujeres, especialmente a través del matrimonio, la herencia patrilineal y la vigilancia de la sexualidad femenina.</p>
      <p>La transmisión de la riqueza por línea masculina, junto con prácticas como la poliginia, la dote y el confinamiento de las mujeres, consolidó estructuras patriarcales duraderas. Estas formas de organización social reforzaron la idea de que los cuerpos y la capacidad reproductiva de las mujeres eran recursos a controlar. Sin embargo, también han existido y existen sociedades matrilineales, generalmente en contextos donde la acumulación de riqueza es limitada, lo que demuestra que el patriarcado es una construcción histórica y contingente, no un destino inevitable.</p>
      <p>Finalmente, ambos textos coinciden en que, aunque el patriarcado ha mostrado una gran capacidad de adaptación —incluida su forma moderna basada en el contrato social y el Estado—, también puede ser transformado. Los estudios feministas subrayan que reconocer su carácter histórico abre la posibilidad de cuestionarlo, desarticularlo y sustituirlo por modelos sociales más justos e igualitarios, especialmente cuando cambian las condiciones económicas, culturales y políticas, y cuando las mujeres acceden a derechos reproductivos, educación y autonomía económica.</p>
      <p class="font-bold mt-4">Referencias</p>
      <ul class="ul-disc">
        <li>Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él). (2022). <em>BBC News Mundo.</em> <a href="https://www.bbc.com/mundo/noticias-62969797" target="_blank">https://www.bbc.com/mundo/noticias-62969797</a></li>
        <li>¿Qué es el patriarcado? (2008). <em>Mujeres en Red. Periódico Feminista.</em> <a href="https://www.mujeresenred.net/spip.php?article1396" target="_blank">https://www.mujeresenred.net/spip.php?article1396</a></li>
      </ul>
    </div>
  </div>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a3', "Patriarcado", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>