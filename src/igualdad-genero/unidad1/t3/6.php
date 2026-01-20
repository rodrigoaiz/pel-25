<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div>
      <h2>Machismos cotidianos y relaciones de poder</h2>
      <p>Los machismos cotidianos son manifestaciones sutiles y a menudo invisibles de la desigualdad de género que se arraigan en nuestras interacciones diarias. Se trata de actitudes, comentarios y comportamientos que perpetúan la idea de que los hombres son superiores a las mujeres, y que estás últimas deben subordinarse a ellos.</p>
      <p>Estas conductas machistas se entrelazan intrínsecamente con las relaciones de poder, ya que refuerzan la dominación masculina y limitan la autonomía femenina. Un ejemplo común son los machismos cotidianos.</p>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('iga3-img04.webp');
      ?>
    </div>
  </div>
  <p>En esta sección podrás aprender a identificar los <i>machismos cotidianos</i> (antes denominados <i>micromachismos</i>), para ello te pedimos que realices la lectura de <a href="<?php echo PATH_DOCS . 'u1t3-Lectura_LosMicromachismos_Act.3.5.pdf'; ?>" target="_blank">"Los Micromachismos"</a> de Luis Bonino y, al terminar, revises el contenido que se presenta en esta pantalla.</p>
  <p>El material disponible tiene la finalidad de ayudarte a proponer soluciones a casos específicos donde están presentes conductas machistas, promoviendo la reflexión crítica y la búsqueda de igualdad en las dinámicas de poder cotidianas.</p>
  <p>En el artículo <em>Los micromachismos</em>, Luis Bonino señala que, aunque en las sociedades actuales muchos varones ya no ejercen un machismo abierto o violento, persisten múltiples prácticas cotidianas de control y dominación de baja intensidad hacia las mujeres. Estas conductas, socialmente legitimadas, naturalizadas e invisibilizadas, impiden que la mayoría de los hombres se sitúe en relaciones plenamente igualitarias, incluso aquellos que se consideran progresistas.</p>
  <p>El autor denomina <strong>micromachismos</strong> a estos comportamientos sutiles, reiterados y casi imperceptibles, que funcionan como formas de abuso y de imposición en la vida cotidiana, especialmente en la pareja. Se sustentan en la masculinidad hegemónica y en la creencia masculina de autoridad y superioridad sobre las mujeres, así como en la idea de que ellas deben estar disponibles para satisfacer necesidades, deseos y decisiones masculinas.</p>
  <p>Los micromachismos pueden ser inconscientes o conscientes, pero en ambos casos forman parte de hábitos incorporados durante la socialización de género. Su persistencia se explica porque, al deslegitimarse socialmente las violencias masculinas más visibles, estas prácticas se convierten en mecanismos frecuentes para conservar privilegios y mantener la asimetría de poder en las relaciones de género.</p>
  <p>Bonino clasifica los micromachismos en cuatro tipos: <strong>utilitarios</strong>, que se basan en el aprovechamiento del trabajo doméstico y de cuidado femenino; <strong>encubiertos</strong>, caracterizados por su sutileza y manipulación psicológica; <strong>de crisis</strong>, que aparecen cuando la desigualdad se ve amenazada por una mayor autonomía femenina; y <strong>coercitivos</strong>, que utilizan la fuerza moral, psicológica o económica para limitar la libertad y la capacidad de decisión de las mujeres.</p>
  <p>Aunque cada micromachismo puede parecer trivial, su uso reiterado genera un clima relacional dañino que afecta la autonomía, la autoestima, la lucidez mental y el bienestar de las mujeres. En la pareja, contribuyen a mantener relaciones asimétricas, a orientar la vida común hacia los intereses masculinos y a responsabilizar a las mujeres del deterioro del vínculo.</p>
  <p>Finalmente, el autor señala que visibilizar y nombrar los micromachismos es un paso fundamental para erradicarlos. Las mujeres necesitan conocerlos para resistirlos, y los varones deben reconocerlos y asumir una autocrítica que les permita desactivar estos comportamientos y avanzar hacia relaciones verdaderamente igualitarias.</p>
  <p>Para entender el tema de los machismos cotidianos o micromachismos, te invitamos a reflexionar en torno a los siguientes puntos clave sobre el tema:</p>
  <ul class="ul-disc">
    <li><strong>Dominación masculina "de baja intensidad":</strong> Los micromachismos son prácticas cotidianas, sutiles e invisibilizadas mediante las cuales los varones ejercen control y dominio sobre las mujeres, aun cuando el machismo explícito está socialmente deslegitimado.</li>
    <li><strong>Sustento en la masculinidad hegemónica:</strong> Estas conductas se basan en un modelo social que legitima la autoridad masculina y la creencia en privilegios de género considerados naturales.</li>
    <li><strong>Prácticas machistas normalizadas y automatizadas:</strong> Muchos micromachismos no son intencionales, sino hábitos incorporados durante la socialización masculina, lo que explica su persistencia incluso en varones que se consideran igualitarios.</li>
    <li><strong>Perpetuación de la asimetría de poder:</strong> La función central de los micromachismos es conservar la posición ventajosa del varón, limitar la autonomía femenina y reproducir relaciones no igualitarias, especialmente en la pareja.</li>
    <li><strong>Daños acumulativos e invisibles:</strong> Aunque parecen inofensivos de manera aislada, su uso reiterado genera malestar, deterioro de la autoestima y restricción del desarrollo personal de las mujeres, constituyendo una forma de violencia de género.</li>
  </ul>
  <h4>La visión androcéntrica</h4>
  <p>De acuerdo a esta visión, el mundo patriarcal prioriza los intereses masculinos, relegando las necesidades y derechos de las mujeres. Por lo tanto, para esta visión los intereses masculinos se consideran como prioritarios y centrales mientras que los intereses femeninos se consideran periféricos y sin importancia.</p>
  <p>La desigualdad de se manifiesta claramente en la distribución del trabajo doméstico. Los hombres al considerar estas tareas como insignificantes y una pérdida de tiempo, se desentienden de ellas, perpetuando así una visión donde:</p>
  <ul class="ul-disc">
    <li>Las mujeres son subordinadas y al servicio de los hombres</li>
    <li>El trabajo de cuidados no se valora ni se reconoce como una responsabilidad compartida</li>
  </ul>
  <div class="md:grid grid-cols-2 gap-3 items-center">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('iga3-img05.webp');
      ?>
    </div>
    <div>
      <h4>Micromachismos utilitarios</h4>
      <p>Los micromachismos utilitarios están directamente relacionados con el mandato patriarcal de que las mujeres deben servir a los hombres. Se caracterizan por dos comportamientos masculinos principales:</p>
      <p><strong>Evasión de la responsabilidad:</strong> los hombres se desatienden de las tareas domésticas, considerándolas ajenas a su incumbencia.</p>
      <p><strong>Pseudorresponsabilidad:</strong> Los hombres participan de forma esporádica y deficiente, asumiendo una "ayuda" que en realidad perpetúa la desigualdad.</p>
    </div>
  </div>
  <p>Además, se observa la práctica de la delegación del cuidado, donde los hombres transfieren la responsabilidad del trabajo de cuidado a las mujeres, reforzando la idea de que esta es una tarea inherentemente femenina.</p>
  <p>Los micromachismos utilitarios perpetúan la desigualdad en el trabajo doméstico y de cuidados. Estas prácticas incluyen:</p>
  <ul class="ul-disc">
    <li><strong>Requerimientos abusivos:</strong> Los hombres hacen peticiones que activan los roles femenino tradicional de cuidar y servir.</li>
    <li><strong>Negociación de la reciprocidad:</strong> Los hombres se niegan a cuidar a las mujeres cuando ellas lo necesitan.</li>
    <li><strong>Aprovechamiento laboral:</strong> Los hombres sacan del trabajo no remunerado de las mujeres en sus empresas y otros centros de trabajo, invisibilizando su contribución.</li>
  </ul>
  <p>Estas conductas se fundamentan en la creencia arraigada de que las mujeres deben estar permanentemente disponibles para atender las necesidades de los hombres, consolidando así la desigualdad en el ámbito doméstico y laboral.</p>
  <p>Las consecuencias para las mujeres de estas prácticas masculinas derivan en:</p>
  <ul class="ul-disc">
    <li><strong>Sobrecarga de trabajo:</strong> las mujeres asumen la mayor carga de trabajo doméstico y de cuidados.</li>
    <li><strong>Desigualdad en la calidad de vida:</strong> Los hombres disfrutan de una mejor calidad de vida a expensas de las mujeres.</li>
    <li><strong>Impacto en el bienestar:</strong> Problemas en la salud física y mental, como el estrés, insomnio y depresión.</li>
  </ul>
  <h4>Despatriarcalización del Trabajo doméstico</h4>
  <p>Es necesario distribuir equitativamente las responsabilidades domésticas y de cuidados. Para ello es fundamental que haya:</p>
  <ul class="ul-disc">
    <li><strong>Equidad de responsabilidades:</strong> Hombres asumiendo igual responsabilidad en tareas domésticas y de cuidados.</li>
    <li><strong>Reconocimiento económico y social:</strong> Salarios, vacaciones, jubilación, pensiones y servicios de salud para amas de casa.</li>
    <li><strong>Recursos públicos:</strong> Guarderías, comedores comunitarios, lavanderías, centros de día y asistencia a domicilio.</li>
  </ul>
  <p>Un aspecto que también ha cobrado relevancia desde una perspectiva de género feminista es el <strong>derecho al tiempo propio de las mujeres</strong>, que refiere al derecho humano que garantiza la libertad en el uso del tiempo para atender necesidades, e intereses de las mujeres, tanto en el ámbito público como privado. Este derecho debe ser reconocido en instrumentos jurídicos nacionales e internacionales, ya que está basado en una crítica al patriarcado.</p>
  <p>Para saber más te invitamos a que revises lo siguiente:</p>

  <div class="md:grid grid-cols-2 gap-3">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig1.webp');
      ?>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig2.webp');
      ?>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig3.webp');
      ?>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig4.webp');
      ?>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig5.webp');
      ?>
    </div>
    <div class="max-2xl mx-auto">
      <?php
      renderImage('u1t3-micromachismos-ig6.webp');
      ?>
    </div>
  </div>

  <p>También es importante que revises algunos conceptos que te ayudarán a comprender mejor el tema <a href="https://coordinaciongenero.unam.mx/avada_portfolio/que-son-los-micromachismos/#" target="_blank">https://coordinaciongenero.unam.mx/avada_portfolio/que-son-los-micromachismos/#</a></p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>