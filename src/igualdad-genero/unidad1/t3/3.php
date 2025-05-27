<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Foro: Orígenes de la desigualdad</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img02.webp');
    ?>
  </div>
  <h3>Propósito</h3>
  <p>Mediante este foro, te proponemos reflexionar en torno a los orígenes de la disparidad de condiciones sociales asociadas al género. Para ello, te presentamos diversos materiales donde podrás explorar los orígenes históricos del patriarcado, de la propiedad privada y de la división sexual del trabajo.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li> A partir de los siguientes artículos, reflexiona acerca de los orígenes de la disparidad de condiciones sociales entre hombre y mujeres, desde el origen de la propiedad privada y la repartición primitiva del trabajo.</li>
    <ul class="ul-disc">
      <li><a href="<?php echo PATH_DOCS . 'u1t3-Lectura_QuéEsElPatriarcado_Act.3.2.pdf'; ?>" target="_blank">¿Qué es el patriarcado?</a></li>
      <li><a href="<?php echo PATH_DOCS . 'u1t3-Lectura_CómoComenzóElPatriarcado_Act.3.2.pdf'; ?>" target="_blank">Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él)</a></li>
    </ul>
    <li>Escribe un texto donde expliques los siguientes puntos:</li>
      <ul class="ul-disc">
        <li>¿Cómo influyó el origen del patriarcado en la distribución desigual del poder entre hombres y mujeres?</li>
        <li>¿De qué manera la propiedad privada contribuyó a la consolidación de roles de género?</li>
        <li>¿Qué similitudes y diferencias encuentran entre los ejemplos históricos presentados en los artículos y las realidades contemporáneas?</li>
        <li>¿Qué acciones consideran que podrían contribuir a la equidad de género en la sociedad actual?</li>
      </ul>
      <li>Después de dar tus respuestas recuerda leer las opiniones de al menos 2 integrantes, y responde a cada una de ellas mostrando tu opinión, de manera escrita. </li>
  </ol>
  <p><strong>Nota:</strong> Elige dos de los tópicos (preguntas) en los que quieras participar y en los dos tópicos restantes, es decir, a los distintos a los que participaste originalmente, coloca tu opinión escrita a las demás participaciones. NO agregues nuevos tópicos, participa en los tópicos ya abiertos correspondientes a las preguntas anteriores.</p>
  <p>Consulta la <a href="<?php echo PATH_DOCS . 'u1t3-Rubrica-Foro-Origenes-Desigualdad.pdf'; ?>" target="_blank">Rúbrica de evaluación</a> de participación en el foro.
</p>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t3a2', "Orígenes de la desigualdad.", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>