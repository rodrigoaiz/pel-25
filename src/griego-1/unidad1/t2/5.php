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
  <h2>Diptongos, su transcripción. </h2>

  <p>Lo mismo pasa con la transcripción de los diptongos, necesitamos saber cómo pasaron al latín y de ahí al español.</p>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center">Griego </td>
        <td class="border border-slate-300 text-center">Latín </td>
        <td class="border border-slate-300 text-center">Español </td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center "><p class="text-purple-500">αι</p> 
        <p class="text-blue-500">ει</p> 
        <p class="text-amber-500" >οι</p> 
        <p class="text-green-500" >αυ</p>
      </td>
      <td class="border border-slate-300 text-center "><p class="text-purple-500">ae</p> 
        <p class="text-blue-500">i</p> 
        <p class="text-amber-500" >oe</p> 
        <p class="text-green-500" >au,av</p>
      </td>
      <td class="border border-slate-300 text-center "><p class="text-purple-500">e</p> 
        <p class="text-blue-500">i</p> 
        <p class="text-amber-500" >e</p> 
        <p class="text-green-500" >au,av</p>
      </td>
      </tr>
        <tr>
        <td class="border border-slate-300 text-center "><p class="text-red-800">ευ</p> 
        <p class="text-blue-800">ου</p> 
        <p class="text-fuchsia-500" >υι</p> 
        <p class="text-cyan-500" >ᾳ</p>
      </td>
      <td class="border border-slate-300 text-center "><p class="text-red-800">eu, ev</p> 
        <p class="text-blue-800">u</p> 
        <p class="text-fuchsia-500" >yi</p> 
        <p class="text-cyan-500" >a</p>
      </td>
      <td class="border border-slate-300 text-center "><p class="text-red-800">eu, ev</p> 
        <p class="text-blue-800">u</p> 
        <p class="text-fuchsia-500" >ii, iy</p> 
        <p class="text-cyan-500" >a</p>
      </td>  
      </tr>
      <tr>
        <td class="border border-slate-300 text-center "><p><b>ῃ</b></p> 
        <p class="text-amber-800">ῳ</p>
      </td>
      <td class="border border-slate-300 text-center ">
        <p><b>e</b></p> 
        <p class="text-amber-800">o, oe</p>
      </td>
      <td class="border border-slate-300 text-center ">
        <p><b>e</b></p> 
        <p class="text-amber-800">o, oe</p>
      </td>
      </tr>
    </tbody>
  </table>

 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
