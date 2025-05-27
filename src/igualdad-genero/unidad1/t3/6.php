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
  <p>En esta sección podrás aprenden a identificar los <i>machismos cotidianos</i> (antes denominados <i>micromachismos</i>), para ello te pedimos que realices la lectura de <a href="<?php echo PATH_DOCS . 'u1t3-Lectura_MirandoConLupaFeministaLosMicromachismosEnTrabajoDeCuidadosYDoméstico_Act.3.5.pdf'; ?>" target="_blank">"Mirando con lupa feminista los micromachismos en el trabajo de cuidados y doméstico"</a> y al terminar revises el contenido que se presenta.</p>
  <p>El material disponible tiene la finalidad de ayudarte a proponer soluciones a casos específicos donde están presentes conductas machistas, promoviendo la reflexión crítica y la búsqueda de igualdad en las dinámicas de poder cotidianas.</p>
  <h3>Micromachismos: En realidad son machismos cotidianos</h3>
  <p>El artículo "Mirando con lupa feminista los micromachismos en el trabajo de cuidados y doméstico" de Pilar Alberti ofrece un análisis profundo y revelador sobre las sutilezas del machismo en el ámbito privado. A continuación, se destacan los puntos más importantes de su investigación.</p>
  <h4>La visión androcéntrica</h4>
  <p>De acuerdo a esta visión, el mundo patriarcal prioriza los intereses masculinos, relegando las necesidades y derechos de las mujeres. Por lo tanto, para esta visión los intereses masculinos se consideran como prioritarios y centrales mientras que los intereses femeninos se consideran periféricos y sin importancia.</p>
  <p>La desigualdad de se manifiesta claramente en la distribución del trabajo doméstico. Los hombres al considerar estas tareas como insignificantes y una pérdida de tiempo, se desentienden de ellas, perpetuando así una visión donde:</p>
  <ul class="ul-disc">
    <li>Las mujeres son subordinadas y al servicio de los hombres</li>
    <li>El trabajo de cuidados no se valora ni se reconoce como una responsabilidad compartida.</li>
  </ul>
  <p>Un ejemplo ilustrativo de esta contradicción es la figura de Jean-Jaques Rousseau, filósofo influyente en el ámbito de la educación. A pesar de sus teorías Rousseau no aplicó sus principios con sus propios hijos, evidenciando:</p>
    <ul class="ul-disc">
      <li>El ejercicio del poder y la autoridad: Rousseau dictaba normas que no se aplicaban a sí mismo.</li>
      <li>La falta de coherencia: Existía una contradicción evidente entre sus ideas y su práctica personal.</li>
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
          <p><strong>Pseudorresponsabilidad:</strong> Los hombres participan de forma esporádica y deficiente, asumiendo una “ayuda” que en realidad perpetúa la desigualdad.</p>
        </div>
  </div>
  <p>Además, se observa la práctica de la delegación del cuidado, donde los hombres transfieren la responsabilidad del trabajo de cuidado a las mujeres, reforzando la idea de que esta es una tarea inherentemente femenina.</p>
  <p>Los micromachismos utilitarios perpetúan la desigualdad en el trabajo doméstico y de cuidados. Estás prácticas incluyen:</p>
  <ul class="ul-disc">
    <li><strong>Requerimientos abusivos:</strong> Los hombres hacen peticiones solapadas que activan el rol femenino tradicional</li>
    <li><strong>Negociación de la reciprocidad:</strong> Los hombres se niegan a cuidar a las mujeres cuando ellas lo necesitan</li>
    <li><strong>Aprovechamiento laboral:</strong> Los hombres se aprovechan del trabajo no remunerado de las mujeres en sus empresas, invisibilizando su contribución.</li>
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
    <p>Un aspecto que también ha cobrado relevancia desde una perspectiva de género feminista es el derecho al tiempo propio de las mujeres, que refiere al derecho humano que garantiza la libertad en el uso del tiempo para atender necesidades, e intereses de las mujeres, tanto en el ámbito público como privado. Este derecho debe ser reconocido en instrumentos jurídicos nacionales e internacionales, ya que está basado en una crítica al patriarcado.</p>
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