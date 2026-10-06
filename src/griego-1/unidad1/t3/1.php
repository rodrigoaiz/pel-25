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
  <h2>Las raíces griegas, principales componentes del lenguaje médico, científico y en la cultura en general</h2>

  <p>En el lenguaje técnico científico, médico y en el lenguaje cotidiano español,  hay presentes raíces griegas más afijos, dos o tres palabras en una, sustantivo más sustantivo, sustantivo más adjetivo, sustantivo y verbo, sustantivo más afijo…</p>

  <p>Los <b>Afijos</b> son partículas griegas que, si van al <b>inicio</b> de una palabra se llaman <b>prefijos</b>; si van en <b>medio</b> se llaman <b>infixos</b>, y si van al <b>final</b> de la palabra se llaman <b>sufijos</b>.</p>

  <p>Te presento algunos ejemplos:</p>


   <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-amber-600 text-center">αἷματος + λόγος + ία = hematología = estudio sobre la sangre</td>
        
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-amber-600 text-center">sangre + estudio + especialidad / enfermedad</td>
      
      </tr>
    </tbody>
  </table>

  <p>Esta palabra está compuesta por sustantivo, más sustantivo, más sufijo.</p>

  <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-amber-600 text-center">εγκεφαλος   εν/εγ + κεφαλος = en + cefalo = encéfalp = en la cabeza</td>
      </tr>
    </tbody>
  </table>

  <p>Esta palabra está compuesta por un prefijo y un sustantivo.</p>

  <p>A continuación te presento algunas partículas y afijos con su respectivo significado.</p>

  <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-center">α</td>
        <td class="border border-slate-300 text-xl text-center">(a)</td>
        <td class="border border-slate-300 text-xl text-center">negación, no</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ανα</td>
        <td class="border border-slate-300 text-xl text-center">(ana)</td>
        <td class="border border-slate-300 text-xl text-center">hacia arriba, movimiento hacia arriba</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ια</td>
        <td class="border border-slate-300 text-xl text-center">(ia)</td>
        <td class="border border-slate-300 text-xl text-center">especialidad, enfermedad</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">δις</td>
        <td class="border border-slate-300 text-xl text-center">(dis)</td>
        <td class="border border-slate-300 text-xl text-center">deshacer,separar</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ικος</td>
        <td class="border border-slate-300 text-xl text-center">(icos)</td>
        <td class="border border-slate-300 text-xl text-center">lugar</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ιτις</td>
        <td class="border border-slate-300 text-xl text-center">(itis)</td>
        <td class="border border-slate-300 text-xl text-center">inflamación</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">μετα</td>
        <td class="border border-slate-300 text-xl text-center">(metá)</td>
        <td class="border border-slate-300 text-xl text-center">cambio de posición</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">σις</td>
        <td class="border border-slate-300 text-xl text-center">(sis)</td>
        <td class="border border-slate-300 text-xl text-center">abundancia</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ὑπο</td>
        <td class="border border-slate-300 text-xl text-center">(hipó)</td>
        <td class="border border-slate-300 text-xl text-center">debajo, por debajo.</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center">ὑπερ</td>
        <td class="border border-slate-300 text-xl text-center">(hipér)</td>
        <td class="border border-slate-300 text-xl text-center">arriba de, encima</td>
      </tr>
    </tbody>
  </table>

  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
