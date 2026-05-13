<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identifica los referentes</h2>
  <p>Ahora te presentamos dos textos breves; identifica los referentes en cada uno.</p>

  <p><strong>Instrucciones:</strong></p>
  <p>Para reforzar tus aprendizajes sobre los referentes, te proponemos que leas los siguientes dos relatos. Posteriormente detecta en cada uno de ellos el referente e indica cuál es en cada caso.</p>

  <div class="my-6 max-w-3xl mx-auto">
    <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-rose-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide text-lg">La paloma<sup>1</sup></p>
      </div>
      <div class="px-6 py-5">
        <blockquote class="font-serif text-gray-800 space-y-4">
          <p>La tía Mercedes caminaba por un callejón de Montparnasse cuando de pronto encontró una paloma que yacía en el suelo con el ala rota. Se adelantó unos pasos; entonces vino un hombre gordo cargado de buenas intenciones que se agachó a recogerla y la arrojó al aire exclamando "¡Vuela, no seas floja!" Y la mató.</p>
        </blockquote>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Beatriz Espejo, <em>Cuentos reunidos</em>, p. 45.</p>
      </div>
    </div>
  </div>
  <div class="my-6 max-w-3xl mx-auto">
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden">
      <div class="bg-violet-500 px-5 py-2">
        <p class="font-bold text-white tracking-wide text-lg">La rebelión de los colgados<sup>2</sup></p>
      </div>
      <div class="px-6 py-5">
        <blockquote class="font-serif text-gray-800 space-y-4">
          <p>Todo fue tan rápido que cuando me di cuenta ya era tarde. Mis zapatos ya iban rumbo al cielo, al parecer se evaporaron con el calor que hacía aquí abajo. Nunca los llegué a entender. Se sublevaban cada vez que los amarraba, preferían andar desatados. Realmente ahora que ya no los traigo, me siento libre. No sé ni cuánto me costaron, creo que eran del borceguí; tengo el pie plano y me cuesta mucho trabajo caminar.</p>
          <p>Ahora los observo desde aquí abajo, se balancean con el viento desde aquel cable de luz, se ven solitarios, quizá algún día bajen de ahí, espero que cuando lo hagan mi pie haya crecido un poco y ya no me queden, por lo mientras me tendré que poner los zapatos viejitos y aguantar la regañada de mi madre, pero ni modo.</p>
        </blockquote>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>2</sup>Sergio García Díaz, <em>Los mil y un insomnios. Antología del festival del cuento brevísimo</em>, p. 98.</p>
      </div>
    </div>
  </div>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a3', "Identifica los referentes", $ActividadContent);
  ?>
</section>

<?php ob_start(); ?>
<section>
  <p>Puedes escuchar el acertijo de <em>El Camello</em> de Gloria Fuentes y elabora otro para ser adivinado en clase, imitando su estructura. Además, podrías escuchar una fábula de Samaniego y al terminar, reelabora otra en prosa donde dos animales interactúen a fin de aprender algo. Finalmente, para enriquecer lo hasta aquí visto, ve el video sobre por qué Bauer sostiene que Cortázar es un buen escritor. Imita su forma de argumentar y defiende a algún escritor que para ti sea bueno.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¡Para aprender más!");
?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>