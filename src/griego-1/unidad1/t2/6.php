<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Transcripción de palabras griegas al latín y al español.</h2>

  <p>Ahora vamos a transcribir palabras completas por medio de los siguientes ejemplos de transcripción.</p>

  <table class="table-auto border-collapse border border-slate-400 ">
    <tbody >
      <tr class="bg-blue-800">
        <td class="border border-slate-300 text-center text-white">Griego </td>
        <td class="border border-slate-300 text-center text-white">Latín </td>
        <td class="border border-slate-300 text-center text-white">Español </td>
        <td class="border border-slate-300 text-center text-white">Significado </td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">αἷμορραγία</td>
      <td class="border border-slate-300 text-center text-blue-800">haemorragia
      </td>
      <td class="border border-slate-300 text-center text-blue-800">hemorragia</td>
      <td class="border border-slate-300 text-center text-blue-800">fluido sanguíneo</td>
      </td>
      </tr>
      
    </tbody>
  </table>

  <p>Cuando letra y sonido coinciden en ambos idiomas, la palabra es una transcripción o transliteración,  cuando letras y sonido no coinciden es una traducción. </p>

  <table class="table-auto border-collapse border border-slate-400 ">
    <tbody >
      <tr class="bg-blue-800">
        <td class="border border-slate-300 text-center text-white">Griego </td>
        <td class="border border-slate-300 text-center text-white">Latín </td>
        <td class="border border-slate-300 text-center text-white">Español </td>
        <td class="border border-slate-300 text-center text-white">Significado </td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">αἷματολογία</td>
      <td class="border border-slate-300 text-center text-blue-800">haematologia
      </td>
      <td class="border border-slate-300 text-center text-blue-800">hematología</td>
      <td class="border border-slate-300 text-center text-blue-800">estudio de la sangre</td>
      </td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">ἀρχαιολογί</td>
      <td class="border border-slate-300 text-center text-blue-800">arquaeologia
      </td>
      <td class="border border-slate-300 text-center text-blue-800">arqueología</td>
      <td class="border border-slate-300 text-center text-blue-800">estudio de lo antiguo</td>
      </td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">διφθογγός</td>
      <td class="border border-slate-300 text-center text-blue-800">diphthongο
      </td>
      <td class="border border-slate-300 text-center text-blue-800">diptongo</td>
      <td class="border border-slate-300 text-center text-blue-800">dos tonos</td>
      </td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">εὐαγγέλιον</td>
      <td class="border border-slate-300 text-center text-blue-800">euangelium
      </td>
      <td class="border border-slate-300 text-center text-blue-800">evangelio</td>
      <td class="border border-slate-300 text-center text-blue-800">buena noticia</td>
      </td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">ὄγκος</td>
      <td class="border border-slate-300 text-center text-blue-800">oncho/us
      </td>
      <td class="border border-slate-300 text-center text-blue-800">onco</td>
      <td class="border border-slate-300 text-center text-blue-800">tumor</td>
      </td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-center text-blue-800 ">οὐρήθρα</td>
      <td class="border border-slate-300 text-center text-blue-800">urethra
      </td>
      <td class="border border-slate-300 text-center text-blue-800">uretra</td>
      <td class="border border-slate-300 text-center text-blue-800">uretra</td>
      </td>
      </tr>
      
    </tbody>
  </table>

  

  <?php ob_start(); ?>
  <p>En la siguiente pantalla retomaremos la transcripción. Por ahora, te invito a ejercitar la lectura y morfología de las palabras, sus espíritus y acentos en el siguiente ejercicio con palabras mayúsculas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a3', "Morfología de las palabras en Letra Mayúscula", $ActividadContent);
  ?>

 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
