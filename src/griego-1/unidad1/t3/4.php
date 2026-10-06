<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Aplica normas de transcripción</h2>

  <p>Léxico griego textual didáctico presente en el lenguaje médico, técnico-científico y en la cultura en general. </p>

  <p>Como ya vimos, las transcripciones son palabras que se transcriben al latín y al español sin cambios morfofonéticos; por ejemplo <span class="text-blue-600">ἀνατομία</span> (palabra original), <b>anatomía</b> (transcripción al español). Estas palabras griegas son <b>compuestos</b> sea por 2 o 3 sustantivos, verbos, adjetivos o afijos desde su origen, pero que al separarlas dan las raíces desde las que sacamos muchos derivados y que se usan en el lenguaje técnico-científico y médico principalmente. Aunque en el español cotidiano se utilizan mucho.</p>

  <p>Observa que, a veces, el significado y la transcripción es la misma, y a veces, no. Revisa la tabla de las 12 raíces griegas transcritas además del siguiente cuadro para revisar algunos ejemplos. Posteriormente realizaremos un ejercicio de repaso de estos contenidos.</p>

  <p>Las palabras de este cuadro están ubicadas según su pertenencia, si pertenecen a la terminología usada por los médicos, o a la terminología técnico-científica, o si pertenecen a la cultura en general ¿Te das cuenta de que las raíces griegas forman la base de ese vocabulario? </p>

  <p>Vamos a realizar un sencillo ejercicio que nos hará jugar con lo aprendido en esta primera unidad. Vamos a transcribir algunas de esas palabras tal como hicimos en el apartado 2.5 y en el apartado 3.1. No obtendremos derivados, solo realizaremos la transcripción al latín y al español. </p>

  <table class="table-auto border-collapse border border-slate-400">
    <thead>
        <tr >
          <th colspan="3" class="border border-slate-300 text-xl bg-blue-700 text-white-own text-center">Tabla 1. Terminología Médica, Técnico - Científica y Cultura en General</th>
        </tr>
      </thead> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-fuchsia-500 text-center">Terminología médica</td>
        <td class="border border-slate-300 text-xl text-center text-green-500">Terminología técnico-científica</td>
        <td class="border border-slate-300 text-xl text-center text-blue-500">Terminología cultura en genera</td>
        
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-fuchsia-500">ἀνατομία</li>
            <li class="text-fuchsia-500">αἱματολογία</li>
            <li class="text-fuchsia-500">ἡπατίτις</li>
            <li class="text-fuchsia-500">παρασιτώσεις</li>
            <li class="text-fuchsia-500">μαστογραφία</li>
            <li class="text-fuchsia-500">ῥινοπαθεία</li>
            <li class="text-fuchsia-500">κεφαλάλγια</li>
            <li class="text-fuchsia-500">γαστροεντερολογία</li>

          </ol>

        </td>
         <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-green-500">ἀνθρωπολογία</li>
            <li class="text-green-500">ζωοτέχνια</li>
            <li class="text-green-500">κοσμολογία</li>
            <li class="text-green-500">ἄτομος</li>
            <li class="text-green-500">όμοιοπαθεία</li>
            <li class="text-green-500">ἱπποποταμός</li>
            <li class="text-green-500">χρωματολογία</li>
            <li class="text-green-500">κιλόμετρος</li>

          </ol>

        </td>
        
        <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-blue-500">κύκλος</li>
            <li class="text-blue-500">κύκλωπος</li>
            <li class="text-blue-500">Οἰδίπους</li>
            <li class="text-blue-500">Τάρταρος</li>
            <li class="text-blue-500">Ἀθήνας</li>
            <li class="text-blue-500">μακεδονία</li>
            <li class="text-blue-500">διάλογος</li>
            <li class="text-blue-500">μονόλογος</li>

          </ol>

        </td>
      </tr>     
    </tbody>
  </table>

  <p>Transcribe las siguientes seis palabras griegas al latín y al español en tu cuaderno. Sigue este ejemplo:</p>

  <table class="table-auto border-collapse border border-slate-400">
    <thead>
        <tr >
          <th colspan="3" class="border border-slate-300 text-xl bg-blue-700 text-white-own text-center">Tabla 2. Palabras griegas a latín y español</th>
        </tr>
      </thead> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-fuchsia-500 text-center">griego</td>
        <td class="border border-slate-300 text-xl text-center text-green-500">latín</td>
        <td class="border border-slate-300 text-xl text-center text-blue-500">español</td>
        
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-fuchsia-500">ἀνατομία</li>
            <li class="text-fuchsia-500">αἱματολογία</li>
            <li class="text-fuchsia-500">ἡπατίτις</li>
            <li class="text-fuchsia-500">κεφαλάλγια</li>
            <li class="text-fuchsia-500">ἄτομος</li>
            <li class="text-fuchsia-500">κύκλος</li>
            <li class="text-fuchsia-500">μακεδονία</li>

          </ol>

        </td>
         <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-green-500">anatomia</li>
           

          </ol>

        </td>
        
        <td class="border border-slate-300 text-xl  text-center">
          <ol class="ol-number ">
            <li class="text-blue-500">anatomía</li>
          </ol>
        </td>
      </tr>     
    </tbody>
  </table>

   <?php ob_start(); ?>
  <p>Para repasar, realiza la actividad llamada “Aprendizajes sobre ejercicios de derivación”, al concluirla comparte con tus compañeros lo realizado.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a2', "Aprendizaje sobre ejercicios de derivación", $ActividadContent);
  ?>

  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
