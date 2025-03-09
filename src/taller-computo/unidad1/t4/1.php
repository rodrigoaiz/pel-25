<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Criterios de evaluación de fuentes de información</h3>
  <p>La habilidad para evaluar la calidad de la información es cada vez más importante en la era digital en la que vivimos. En México, como en muchos otros países, los estudiantes de nivel bachillerato tienen acceso a una gran cantidad de información en línea, pero no toda es confiable o precisa. </p>
  <p>Por lo tanto, es fundamental que aprendas a evaluar de manera crítica la información que encuentras en la red, para poder tomar decisiones informadas y basadas en hechos. En este contexto, el objetivo de este tema es proporcionar las herramientas y los criterios necesarios para evaluar la calidad de la información, de manera que puedas distinguir entre información confiable y no confiable y tomar decisiones más informadas en tu vida diaria y en tus estudios.</p>
  <p>Los criterios para evaluar fuentes de información son fundamentales en el proceso de investigación y búsqueda de información confiable y verídica. A continuación, profundizaremos más sobre algunos de estos criterios, para ello da clic en cada título para despegar la información adicional.</p>

  <div class="grid gird-cols-1 md:grid-cols-3 gap-x-10 my-7">
    <ul class="ul-disc mt-0 md:col-span-2">
      <li>
        <h3>Credibilidad del autor o de la organización que publicó la fuente de información</h3>
        <p>Es importante considerar la credibilidad del autor o de la organización que publicó la información. Si el autor es una persona reconocida en el campo o la organización es confiable, es más probable que la información sea verídica.</p>
      </li>
      <li>
        <h3>Basado en datos y hechos comprobables</h3>
        <p>Una fuente de información es más confiable si está basada en datos y hechos comprobables. Si la información presenta fuentes y referencias, es más probable que sea verídica.</p>
      </li>
      <li>
        <h3>Claridad de la información y tipo de lenguaje</h3>
        <p>Al evaluar una fuente de información, es importante considerar la claridad de la información y el tipo de lenguaje utilizado. La información debe ser fácil de entender y el lenguaje debe ser objetivo y no presentar sesgos.</p>
      </li>

    </ul>
    <div><?php renderImage("u1_t4_books.webp", "Fuentes de datos. Imagen elaborada con IA.", "https://lexica.art/prompt/eb7b3215-7bc6-45a8-9bdf-d09e87235426", "Lexica"); ?></div>
  </div>
  <ul class="ul-disc mt-0 md:col-span-2">
    <li>
      <h3>Respaldado por estudios, investigaciones y publicaciones revisadas por pares</h3>
      <p>Las fuentes de información que están respaldadas por estudios, investigaciones y publicaciones revisadas por pares son generalmente más confiables, ya que han sido revisadas y evaluadas por expertos en el tema.
      </p>
    </li>
    <li>
      <h3>Actualidad de la fuente de información</h3>
      <p>Es importante considerar la actualidad de la fuente de información. Si la información está desactualizada, puede ser que no sea precisa o relevante.
      </p>
    </li>
    <li>
      <h3>Imparcialidad y conflicto de intereses</h3>
      <p>Al evaluar una fuente de información, es importante considerar su imparcialidad y si existe algún conflicto de intereses. Si la fuente de información presenta sesgos o intereses ocultos, puede ser que la información no sea objetiva.</p>
    </li>
    <li>
      <h3>Múltiples perspectivas y puntos de vista</h3>
      <p>Una fuente de información es más confiable si se basa en múltiples perspectivas y puntos de vista. Si la información presenta diferentes puntos de vista y opiniones, es más probable que sea objetiva.</p>
    </li>
    <li>
      <h3>Precisión y objetividad del contenido</h3>
      <p>Al evaluar una fuente de información, es importante considerar la precisión y objetividad del contenido. La información debe ser precisa y objetiva, sin presentar sesgos ni manipulaciones.</p>
    </li>
  </ul>
  <p>Estos son solo algunos de los criterios para evaluar fuentes de información. Es importante recordar que estos criterios pueden variar dependiendo del tipo de información que se está evaluando y del contexto en el que se utiliza. Siempre es importante ser críticos y reflexivos al evaluar la veracidad de una fuente de información.</p>
  <p>A continuación te presentamos una lista de criterios para evaluar fuentes de información de internet.</p>
  <div class="overflow-x-auto">
    <table class="">
      <tbody>
        <tr>
          <td rowspan="3">Autor</td>
          <td>1. Se identifica el nombre del autor: Nombre. institución o empresa.</td>
        </tr>
        <tr>
          <td>2. Hay información sobre el autor sobre sus estudios, cargo u ocupación que lo acredita.</td>
        </tr>
        <tr>
          <td>3. Se acredita al autor como experto y conocedor del tema.</td>
        </tr>
        <tr>
          <td rowspan="5">Fiabilidad y pertinencia</td>
          <td>4. Se indica la fecha de publicación de los contenidos.</td>
        </tr>
        <tr>
          <td>5. Se indican fechas de actualización de los contenidos.</td>
        </tr>
        <tr>
          <td>6. Los enlaces están vigentes y funcionan correctamente.</td>
        </tr>
        <tr>
          <td>7. Está libre de errores de ortografía, gramaticales y de redacción.</td>
        </tr>
        <tr>
          <td>8. Se mencionan claramente las fuentes de datos de donde se obtuvo la información.</td>
        </tr>
        <tr>
          <td rowspan="2">Propósito y objetividad</td>
          <td>9. Está libre de publicidad que trata de venderte algo o persuadir.</td>
        </tr>
        <tr>
          <td>10. La información son datos reales (no son opiniones personales ni propaganda).</td>
        </tr>
        <tr>
          <td rowspan="2">Créditos</td>
          <td>11. Indica a qué entidad, organización o autor pertenece.</td>
        </tr>
        <tr>
          <td>12. Contiene algún apartado de información de contacto (por ejemplo: correo electrónico, número telefónico, apartado de contáctanos, etc.)</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>En el siguiente video observarás 7 criterios importantes para evaluar fuentes de internet, te sugerimos <strong>tomar nota y analizar</strong> los cuestionamientos que debes realizarte para considerar si una fuente es confiable o no.</p>
  <?php renderVideoIframe("YRVVn2SLKuk", "Cómo evaluar fuentes de internet", "max-w-2xl mx-auto"); ?>
  <p>Los siguientes videos son de apoyo, en ellos podrás observar diferentes cuestionamientos en cuanto a los criterios ya mencionados, sólo en caso que quieras consultarlos para ampliar tu visión respecto al tema.</p>
  <div class="grid grid-cols-2 gap-4">
    <?php renderVideoIframe("JQt-ebz9AEw", "Evaluación y Selección de Información | ¿CÓMO EVALUAR UN SITIO WEB?"); ?>
    <?php renderVideoIframe("LS58xNMxnOQ", "Identifica fuentes de información en 6 pasos "); ?>
  </div>
  <?php ob_start(); ?>
  <p>Para reafirmar tus conocimientos al evaluar fuentes de información realiza siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a18', "Evaluación de una fuente de informació", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>En conclusión, evaluar la calidad y la confiabilidad de las fuentes de información es crucial para la investigación y la toma de decisiones informadas en cualquier área del conocimiento. Los criterios de evaluación de las fuentes de información nos permiten determinar su autoridad, objetividad, actualidad, claridad y consistencia con otras fuentes confiables.</p>
  <p>En un mundo cada vez más conectado y con acceso a una gran cantidad de información, es importante que aprendamos a ser críticos y a evaluar cuidadosamente las fuentes de información que utilizamos. Esto nos permite no solo evitar la propagación de información falsa o engañosa, sino también acceder a información precisa y confiable para ampliar nuestro conocimiento.</p>
  <p>Por lo tanto, es fundamental que como estudiante de nivel bachillerato aprendas a evaluar adecuadamente las fuentes de información para asegurarte de que la información que utilizas en tus investigaciones o tareas escolares sea precisa, confiable y actualizada. Esto no solo te ayudará en su proceso de aprendizaje, sino que también te preparará para futuras investigaciones y para tomar decisiones informadas en tu vida cotidiana.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "En conclusión");
?>
<style>
  .ul-disc {
    h3 {
      margin-top: 0;
    }

    li {
      margin-top: 0;
    }
  }
</style>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
