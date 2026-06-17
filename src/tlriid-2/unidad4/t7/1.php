<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'TarjetasImagen.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Figuras retóricas</h2>
  <p>Para continuar, identificarás y trabajarás con tres recursos retóricos, principalmente: las metáforas, las imágenes y las isotopías. Antes de iniciar revisa el siguiente video en donde se explican de manera general algunas de las figuras que usaremos.</p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('VxNRMVqvVrY', 'La novela');
      ?>
    </div>
  </div>
  <h3>Metáfora</h3>
  <p>Es el hecho de dar a una cosa el nombre de otra que se le parece.</p>
  <h4>Ejemplos:</h4>
  <ul class="ul-disc italic">
    <li>La noche de sus ojos</li>
    <li>Voz de cristal</li>
    <li>Alma de tigre</li>
    <li>Manos de seda</li>
  </ul>
  <p>La metáfora puede ser:</p>
  <ul class="ul-disc">
    <li>En presencia (Comparación A→B) </li>
    <li>En ausencia (B implica A)</li>
    <li>Alegoría es la sucesión de metáforas</li>
  </ul>
  <p>Helena Beristáin, apoyándose en otros estudiosos, dice que esta figura se puede dividir en dos clases, como veremos a continuación:</p>
  <h4>Metáfora en presencia</h4>
  <p>Se construye a través de la contigüidad de los términos que de algún modo se comparan.</p>
  <div class="not-prose my-6 grid gap-6 text-center text-darkestblue-own">
    <article class="leading-tight">
      <p class="m-0">Enorme tronco que arrastró la ola,</p>
      <p class="m-0">yace el caimán varado en la ribera:</p>
      <p class="m-0">espinazo de abrupta cordillera,</p>
      <p class="m-0">fauces de abismo y formidable cola.</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Santos Chocano</p>
    </article>
    <article class="leading-tight">
      <p class="m-0">Velloncito de mi carne</p>
      <p class="m-0">que en mis entrañas tejí,</p>
      <p class="m-0">¡Velloncito tembloroso,</p>
      <p class="m-0">duérmete apegado a mí!</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Gabriela Mistral</p>
    </article>
    <article class="leading-tight">
      <p class="m-0">La blanca niña que adoro</p>
      <p class="m-0">lleva al templo su oración,</p>
      <p class="m-0">y, como un piano sonoro,</p>
      <p class="m-0">suena el piso bajo el oro</p>
      <p class="m-0">de su empinado tacón.</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Fabio Fíallo</p>
    </article>
  </div>
  <p>En los tres ejemplos anteriores hay una asociación visual, sonora y de sentido. En el primero el tronco nos remite al caimán y su espinazo a la cordillera; el Velloncito de mi carne alude al hijo y en el tercero el piano sonoro se refiere al tacón de la niña.</p>
  <div class="mx-auto max-w-md">
    <img class="mx-auto" src="<?php echo PATH_IMAGES . 'tlriid2-u4-virgen.webp'; ?>">
  </div>
  <h4>Metáfora en ausencia</h4>
  <p>En esta clase de metáfora desaparece la comparación o asociación entre los términos, se trata de un salto súbito a lo nuevo. A veces es más difícil detectar su procedencia y entonces debemos recurrir a nuestros conocimientos poéticos, a la tradición literaria, a los gustos del autor, etcétera. De hecho, si pensamos en la expresión “ponga un tigre a su motor” en principio no sabríamos de que se trata ya que no podemos establecer una correspondencia entre el “tigre” y la “máquina” de un auto, pero si pensamos en las características de este felino como son la velocidad, fuerza, agresividad, color, elasticidad, etcétera y luego pensamos que la vida de un motor se sustenta en el aceite podríamos concluir que poner un tigre a un motor se supone comprar y verter en él “X” marca de lubricante. De ese modo encontramos que hay un término A (aceite) y un término B (tigre) y que ambos comparten ciertas características semánticas y metafóricas. Veamos otros casos:</p>
  <div class="not-prose my-6 grid gap-6 text-center text-darkestblue-own">
    <article class="leading-tight">
      <p class="m-0">Dejad las hebras de oro ensortijado</p>
      <p class="m-0">que el ánima me tienen enlazada</p>
      <p class="m-0">y volved a la nieve no pisada</p>
      <p class="m-0">lo blanco de esas rosas matizado.</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Francisco de Terrazas</p>
    </article>
    <article class="leading-tight">
      <p class="m-0">Este, que ves engaño colorido,</p>
      <p class="m-0">que del arte ostentando los primores,</p>
      <p class="m-0">con falsos silogismos de colores</p>
      <p class="m-0">es cauteloso engaño del sentido.</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Sor Juana Inés de la Cruz</p>
    </article>
    <article class="leading-tight">
      <p class="m-0">Hambre y sed padezco: siempre me he negado</p>
      <p class="m-0">a satisfacerlas en los turbadores</p>
      <p class="m-0">gozos de ciudades –flores del pecado</p>
      <p class="m-0 pt-2 text-sm text-slate-600">Ramón López Velarde</p>
    </article>
  
    <article class="leading-tight">
      <p class="m-0">Allá arriba suena, rítmica y sonora,</p>
      <p class="m-0">y sin que lo impidan sus graves hermanas</p>
      <p class="m-0">que rezan el coro,</p>
      <p class="m-0">la campana del reloj</p>
      <p class="m-0">suena, suena, suena ahora</p>
      <p class="m-0 pt-2 text-sm text-slate-600">José Asunción Silva</p>
    </article>
  </div>
  <p>En el primer ejemplo, Terrazas se refiere al cabello rubio y, probablemente, a las manos de la mujer vanidosa o, por lo menos, confiada en su belleza; en el otro sor Juana alude a un retrato que miente al retener la juventud de la persona allí pintada; mientras que en el tercero López Velarde puede referirse a las muchachas que podrían satisfacer el <em>hambre</em> y la <em>sed</em> que él sufre; mientras que en el cuarto ejemplo las graves hermanas serían las manecillas del reloj. Veamos otros ejemplos de metáforas en los siguientes poemas:</p>

  <div class="not-prose my-8 overflow-hidden rounded-lg border border-slate-300 bg-white shadow-sm">
    <div class="grid gap-px bg-slate-300 md:grid-cols-3">
      <article class="flex min-h-44 flex-col justify-between bg-stone-50 p-4 text-darkestblue-own">
        <div class="space-y-1 italic leading-snug">
          <p class="m-0">Azules y con oro</p>
          <p class="m-0">enarenados,</p>
          <p class="m-0">como las noches limpias de</p>
          <p class="m-0">nublados,</p>
          <p class="m-0">los ojos que contemplan mis</p>
          <p class="m-0">pecados<sup>3</sup>.</p>
        </div>
        <p class="m-0 mt-6 text-right text-sm text-slate-700">Salvador Díaz Mirón</p>
      </article>

      <article class="flex min-h-44 flex-col justify-between bg-stone-50 p-4 text-darkestblue-own">
        <div class="space-y-1 italic leading-snug">
          <p class="m-0">Aunque la mañana está</p>
          <p class="m-0">asoleada</p>
          <p class="m-0">Tiene algo de una celda</p>
          <p class="m-0">abandonada<sup>4</sup>.</p>
        </div>
        <p class="m-0 mt-6 text-right text-sm text-slate-700">Francisco González León</p>
      </article>

      <article class="flex min-h-44 flex-col justify-between bg-stone-50 p-4 text-darkestblue-own">
        <div class="space-y-1 italic leading-snug">
          <p class="m-0">La luna es araña</p>
          <p class="m-0">de plata</p>
          <p class="m-0">que tiende su telaraña</p>
          <p class="m-0">en el río que la retrata.<sup>5</sup></p>
        </div>
        <p class="m-0 mt-6 text-right text-sm text-slate-700">José Juan Tablada</p>
      </article>
    </div>
  </div>
  <h4>Alegoría</h4>
  <div class="mx-auto max-w-md">
    <img class="mx-auto" src="<?php echo PATH_IMAGES . 'tlriid2-u4-alegoria.webp'; ?>">
  </div>
  <p>La alegoría contiene una serie de comparaciones ligadas entre sí hasta formar una gran construcción poética. Revisemos los siguientes poemas.</p>

  <div class="not-prose my-8 overflow-hidden rounded-lg border border-slate-300 bg-white shadow-sm">
    <div class="grid gap-px bg-slate-300 md:grid-cols-2">
      <article class="bg-stone-50 p-5 text-center text-darkestblue-own">
        <header class="mb-5 leading-tight">
          <p class="m-0 font-bold italic">Coplas a la muerte de su padre</p>
          <p class="m-0 text-sm text-slate-700">Jorge Manrique</p>
        </header>
        <div class="space-y-1 leading-snug">
          <p class="m-0">Nuestras vidas son los ríos</p>
          <p class="m-0">que van a dar al mar</p>
          <p class="m-0">que es el morir.</p>
          <p class="m-0">Ahí van los señoríos,</p>
          <p class="m-0">derechos a se acabar</p>
          <p class="m-0">y consumir.</p>
          <p class="m-0">Ahí los ríos caudales,</p>
          <p class="m-0">ahí los otros medianos</p>
          <p class="m-0">y más chicos.</p>
          <p class="m-0">Allegados, son iguales</p>
          <p class="m-0">los que viven por sus manos,</p>
          <p class="m-0">y los ricos.</p>
        </div>
      </article>

      <article class="bg-stone-50 p-5 text-center text-darkestblue-own">
        <header class="mb-5 leading-tight">
          <p class="m-0 font-bold italic">La música</p>
          <p class="m-0 text-sm text-slate-700">Baudelaire</p>
        </header>
        <div class="space-y-1 leading-snug">
          <p class="m-0">¿Hay veces que la música me arrastra como el mar!</p>
          <p class="m-0">Rumbo a mi pálida estrella</p>
          <p class="m-0">bajo un techo de bruma o en éter vastísimo</p>
          <p class="m-0">me doy a la vela;</p>
          <p class="m-0">el aguerrido pecho, los inflados pulmones,</p>
          <p class="m-0">cual se comban las velas,</p>
          <p class="m-0">escalo el lomo de las olas cambiantes</p>
          <p class="m-0">que la noche esconde.</p>
          <p class="m-0">Siento dentro de mí los avatares</p>
          <p class="m-0">de la desvencijada nao:</p>
          <p class="m-0">el viento bonancible, la tempestad convulsa,</p>
          <p class="m-0">sobre el piélago inmenso,</p>
          <p class="m-0">Me acunan. Calma chicha otras veces, espejo</p>
          <p class="m-0">de mi desesperanza.</p>
        </div>
      </article>
    </div>
  </div>

  <div class="not-prose my-8 overflow-hidden rounded-lg border border-slate-300 bg-white shadow-sm">
    <div class="bg-stone-50 px-5 py-4 text-center text-darkestblue-own">
      <p class="m-0 font-bold italic">Para un menú<sup>1</sup></p>
      <p class="m-0 text-sm text-slate-700">Manuel Gutiérrez Nájera</p>
    </div>

    
  </div>

  <?php ob_start(); ?>
      <p>Lee el siguiente poema y explica las metáforas de al menos tres versos, explica lo que piensas que significan y comenta con tus compañeros las explicaciones de las diferentes metáforas que hayas elegido y busquen desentrañar, en una primera aproximación, el sentido del poema.</p>
      <div class="max-w-xl mx-auto">
      <table class="w-full min-w-[760px] border-collapse text-darkestblue-own">
        <thead>
          <tr class="bg-slate-100">
            <th class="w-1/2 border border-slate-300 px-3 py-2 text-left font-normal"></th>
            <th class="w-1/2 border border-slate-300 px-3 py-2 text-center text-sm font-semibold">Explica con tus palabras las metáforas</th>
          </tr>
        </thead>
        <tbody class="text-base leading-snug">
          <tr>
            <td class="border border-slate-300 px-3 py-2">Las novias pasadas son copas vacías;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">en ellas pusimos un poco de amor;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">el néctar tomamos…huyeron los días…</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">¡Traed otras copas con nuevo licor!</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="h-7 border border-slate-300 px-3 py-2"></td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">Champán son las rubias de cutis de azalia;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">Borgoña los labios de vivo carmín;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">los ojos oscuros son vino de Italia,</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">los verdes y claros son vino del Rin.</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="h-7 border border-slate-300 px-3 py-2"></td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">Las bocas de grana son húmedas fresas;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">las negras pupilas escancian café;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">son ojos azules las llamas traviesas</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">que trémulas corren como almas del té.</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="h-7 border border-slate-300 px-3 py-2"></td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">La copa se apura, la dicha se agota;</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">de un sorbo tomamos mujer y licor…</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">Dejemos las copas… ¡Si queda una gota,</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
          <tr>
            <td class="border border-slate-300 px-3 py-2">que beba el lacayo las heces de amor!</td>
            <td class="border border-slate-300 px-3 py-2"></td>
          </tr>
        </tbody>
      </table>
    </div>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u4a6', "Para un menú Foro", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
