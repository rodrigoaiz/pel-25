<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadH5P.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La medida de los versos</h2>
  <p>Los versos se construyen a partir de las sílabas métricas, por oposición a las gramaticales que normalmente usamos en la sintaxis de las oraciones ordinarias para comunicarnos. Así, para conocer la composición del verso es necesario distinguir las licencias o convenciones establecidas para lograr el cómputo correcto de las sílabas.</p>
  <h3>Palabra Final</h3>
  <p>Esta regla consiste en lo siguiente:</p>
  <ul class="ul-disc">
    <li>Si la palabra final es aguda, aumenta una sílaba.</li>
    <li>Si la palabra final es esdrújula disminuye una sílaba.</li>
    <li>Si la palabra final es grave o llana no aumenta ni disminuye.</li>
    <li>Si la palabra final es sobresdrújula disminuyen dos sílabas.</li>
  </ul>

  <div class="my-10 overflow-hidden rounded-lg border border-amber-200 bg-stone-50 shadow-sm">
    <div class="text-center">
      <p class="text-2xl font-bold italic leading-tight text-stone-950">Romance</p>
      <p class="mt-1 text-xl text-stone-800">José Gorostiza</p>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full min-w-[820px] border-collapse bg-white text-stone-950">
        <thead>
          <tr class="bg-amber-100/70 text-left">
            <th class="w-[42%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Distribución silábica</th>
            <th class="w-[22%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Número<br>de sílabas</th>
            <th class="w-[36%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Uso de la regla</th>
          </tr>
        </thead>
        <tbody class="text-lg leading-8">
          <tr class="border-t border-amber-200/80 align-top">
            <td class="px-5 py-2">La/ ni/ña/ de/ mi/ lu/<span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">gar</span>/</td>
            <td class="px-5 py-2 tabular-nums">7 + 1 = 8</td>
            <td class="px-5 py-2">Es aguda la palabra final</td>
          </tr>
          <tr class="align-top">
            <td class="px-5 py-2">tie/ne/ de/ o/ro/ las/ <span class="font-bold underline decoration-sky-500 decoration-2 underline-offset-4">ce</span>/jas</td>
            <td class="px-5 py-2 tabular-nums">8</td>
            <td class="px-5 py-2">Es grave la palabra final</td>
          </tr>
          <tr class="align-top">
            <td class="px-5 py-2">y en/ la/ mi/ra/da,/ des/<span class="font-bold underline decoration-sky-500 decoration-2 underline-offset-4">un</span>/das,</td>
            <td class="px-5 py-2 tabular-nums">8</td>
            <td class="px-5 py-2">Es grave la palabra final</td>
          </tr>
          <tr class="align-top">
            <td class="px-5 py-2">las/ lu/ces/ de/ las/ lu/<span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ciér</span>/na/gas.</td>
            <td class="px-5 py-2 tabular-nums">9 - 1 = 8</td>
            <td class="px-5 py-2">Es esdrújula la palabra final</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h3>Acento</h3>
  <p>El acento prosódico es aquel que se pronuncia, pero no se escribe y nos permite determinar si las palabras son agudas, graves, esdrújulas o sobresdrújulas. Es importante reconocerlo porque es la base para acentuar ortográficamente o para detectar el acento métrico, porque éste no solamente se ubica en las sílabas acentuadas con tilde. Por otra parte, el acento rítmico está relacionado con la entonación de las palabras y las frases, cuando hay interrogación, cuando hay admiración, etcétera.</p>
  <h3>El acento métrico</h3>
  <p>Es la repetición de sonidos dentro del verso, de la estrofa y del poema. Los acentos deben aparecer en las mismas posiciones para que produzcan el ritmo poético. Algunas de las reglas de acentuación métrica son las siguientes:</p>
  <div class="flex flex-row items-center gap-4 my-8">
    <div class="w-2/3">
      <ul class="ul-disc">
        <li>Los versos en lengua castellana llevan un acento en la penúltima sílaba. Además, se debe recordar que si la palabra es aguda, aumenta una sílaba y si es esdrújula, resta una.</li>
        <li>Los acentos que se repiten –entre grupos de sílabas y versos– a intervalos regulares son rítmicos.</li>
        <li>Los acentos rítmicos no pueden ir seguidos uno del otro.</li>
      </ul>
    </div>
    <div class="w-1/3">
      <img class="mx-auto" src="<?php echo PATH_IMAGES . 'tlriid2-u4-linea-tiempo.webp'; ?>">
    </div>

  </div>
  <p>Observa el análisis del siguiente poema.</p>

  <div class="my-10 overflow-hidden rounded-lg border border-amber-200 bg-stone-50 shadow-sm">
    <div class="text-center">
      <p class="text-2xl font-bold italic leading-tight text-stone-950">Mi verso</p>
      <p class="mt-1 text-xl text-stone-800">José Martí</p>
    </div>

    <div class="table-container">
      <table class="w-full min-w-[840px] border-collapse bg-white text-stone-950">
        <thead>
          <tr class="bg-amber-100/70 text-left">
            <th class="w-[18%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Número<br>de versos</th>
            <th class="w-[58%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Distribución del acento</th>
            <th class="w-[24%] px-5 py-4 text-lg font-semibold italic leading-tight text-stone-800">Número de<br>sílabas</th>
          </tr>
        </thead>
        <tbody class="text-lg leading-8">
          <tr class="border-t border-amber-200/80">
            <td class="px-5 py-1 text-center tabular-nums">1</td>
            <td class="px-5 py-1">Sí/ ves/ un/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">mon</span>/te/ de/ es/<span class="font-bold underline decoration-sky-500 decoration-2 underline-offset-4">pu</span>/mas,</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">2</td>
            <td class="px-5 py-1">es/ mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so/ lo/ que/ <span class="font-bold">ves</span>:</td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">3</td>
            <td class="px-5 py-1">mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so es/ un/ <span class="font-bold">mon</span>/te y / <span class="font-bold">es</span></td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">4</td>
            <td class="px-5 py-1">mi/ a/ba/ni/co/ de/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">plu</span>/mas</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>

          <tr class="border-t-8 border-stone-50">
            <td class="px-5 py-1 text-center tabular-nums">5</td>
            <td class="px-5 py-1">Mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so es/ <span class="font-bold underline decoration-sky-500 decoration-2 underline-offset-4">co</span>/mo un/ pu/<span class="font-bold">ñal</span></td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">6</td>
            <td class="px-5 py-1">que/ <span class="font-bold">por</span>/ el/ <span class="font-bold underline decoration-sky-500 decoration-2 underline-offset-4">pu</span>/ño e/cha/ <span class="font-bold">flor</span>:</td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">7</td>
            <td class="px-5 py-1">mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so es/ <span class="underline decoration-sky-500 decoration-2 underline-offset-4">un/ sur</span>/ti/<span class="font-bold">dor</span></td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">8</td>
            <td class="px-5 py-1">que/ <span class="font-bold">da</span>/ un/ a/gua/ de/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">cor</span>/<span class="font-bold">al</span>.</td>
            <td class="px-5 py-1 tabular-nums">7 + 1 = 8</td>
          </tr>

          <tr class="border-t-8 border-stone-50">
            <td class="px-5 py-1 text-center tabular-nums">9</td>
            <td class="px-5 py-1">Mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so es/ de un/ <span class="font-bold">ver</span>/de/ cla/ro</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">10</td>
            <td class="px-5 py-1">y/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">de un</span>/ car/<span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">mín</span>/* en/cen/<span class="font-bold">di</span>/do:</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">11</td>
            <td class="px-5 py-1">mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so es/ un/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">cier</span>/vo he/ri/do:</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">12</td>
            <td class="px-5 py-1">que/ <span class="font-bold">bus</span>/ca en/ el/ <span class="font-bold">mon</span>/te am/<span class="font-bold">pa</span>/ro.</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>

          <tr class="border-t-8 border-stone-50">
            <td class="px-5 py-1 text-center tabular-nums">13</td>
            <td class="px-5 py-1">Mi/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">ver</span>/so al/ va/<span class="font-bold">lien</span>/te a/<span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">gra</span>/da:</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">14</td>
            <td class="px-5 py-1">mi/ <span class="font-bold">ver</span>/so/ bre/<span class="font-bold">ve y</span>/ sin/ce/ro,</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">15</td>
            <td class="px-5 py-1">es/ <span class="font-bold">del</span>/ ri/<span class="font-bold">gor</span>/ del/ a/ce/<span class="font-bold">ro</span></td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
          <tr>
            <td class="px-5 py-1 text-center tabular-nums">16</td>
            <td class="px-5 py-1">con/ <span class="font-bold">que</span>/ se/ <span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">fun</span>/de/ la/ es/<span class="font-bold underline decoration-orange-500 decoration-2 underline-offset-4">pa</span>/da.</td>
            <td class="px-5 py-1 tabular-nums">8</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u4-act4', "Palabra final y acento", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
