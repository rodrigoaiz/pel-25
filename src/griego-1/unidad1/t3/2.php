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
  <h2>¿Cómo sacamos la raíz griega? </h2>

  <p>Vamos a profundizar un poco más acerca de la composición de las palabras griegas y su transcripción con algunos ejemplos:</p>

   <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <tr>
        <td rowspan="8" class="border border-slate-300 text-xl text-amber-600 text-center">–αἱματος</td> 
        <td class="border border-slate-300 text-xl ">Observa el <span class="text-fuchsia-600">espíritu fuerte ( ῾ )</span> sobre la iota jha  <span class="text-fuchsia-600">(αἵματος)</span></td> 
              
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl">Se transcribe <span class="text-fuchsia-600">h</span></td> 
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl">Luego el diptongo <span class="text-fuchsia-600">ai=ae</span></td> 
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl">Las demás letras son las correspondientes <span class="text-fuchsia-600">mato</span></td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl">Todas las letras <span class="text-fuchsia-600">haemato</span></td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl">Al español se quita la <span class="text-fuchsia-600">a</span></td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl">Queda <span class="text-fuchsia-600">hemato</span></td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl"><span class="text-fuchsia-600">hemato</span> es la raíz de la que derivamos:<span class="text-fuchsia-600"> hematología, hematócrito, etc.</span> </td>
      </tr>

    </tbody>
  </table>

  <p>Básicamente estos 4 pasos:</p>

  <ol class="ol-number">
    <li>Griego</li>
    <li>Latín</li>
    <li>Español</li>
    <li>Derivados o compuestos</li>
  </ol>

  <p>Retomando el ejemplo anterior, se puede establecer el siguiente proceso:</p>

  <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <thead>
        <tr>
          <th class="border border-slate-300 text-xl text-center">1. Griego</th>
          <th class="border border-slate-300 text-xl text-center">2. Latín</th>
          <th class="border border-slate-300 text-xl text-center">3. Español</th>
          <th class="border border-slate-300 text-xl text-center">4. Derivados o compuestos</th>
        </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">αἱματος</td>
        <td class="border border-slate-300 text-xl text-center">haemato</td>
        <td class="border border-slate-300 text-xl text-center">hemato</td>
        <td class="border border-slate-300 text-xl text-center">hematología, hematoma…</td>
      </tr>
      
    </tbody>
  </table>

  <p>Antes de realizar las transcripciones, vamos a profundizar un poco más en la composición de las palabras griegas para saber su transcripción y significado, es decir, para saber qué estamos transcribiendo.</p>

  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
