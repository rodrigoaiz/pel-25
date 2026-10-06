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
  <h2>Clasificación de consonantes</h2>

  <p>¿Sabes para qué sirve clasificar las consonantes? Para poder saber cómo las han transcrito al latín y después al español.</p>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-pink-500">guturales</td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center "><p class="text-pink-500">κ fuerte</p> <p class="text-pink-500">γ media</p> <p class="text-pink-500" >χ aspirada</p></td> 
      </tr>
    </tbody>
  </table>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-green-500">labiales</td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center "><p class="text-green-500">π fuerte</p> <p class="text-green-500">β media</p> <p class="text-green-500" >φ aspirada</p></td> 
      </tr>
    </tbody>
  </table>

    <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-purple-500">dentales</td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center "><p class="text-purple-500">τ fuerte</p> <p class="text-purple-500">δ media</p> <p class="text-purple-500" >θ aspirada</p></td> 
      </tr>
    </tbody>
  </table>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-amber-800">nasales</td>
        </tr>
      <tr>
        <td class=" text-amber-800 border border-slate-300 text-center "> μ, ν </td> 
      </tr>
    </tbody>
  </table>

   <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-orange-500">líquidas</td>
        </tr>
      <tr>
        <td class=" text-orange-500 border border-slate-300 text-center "> λ, ρ </td> 
      </tr>
    </tbody>
  </table>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-blue-500">dobles</td>
        </tr>
      <tr>
        <td class=" text-blue-500 border border-slate-300 text-center ">  ζ,ψ,ξ</td> 
      </tr>
    </tbody>
  </table>

 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
