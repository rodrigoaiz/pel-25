<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reconoce la importancia de un estilo de vida saludable, así como el de calidad de vida.</h2>

  <h3>Importancia de un estilo de vida saludable</h3>

  <p>Para gozar de un estilo de vida saludable, es necesario tener hábitos y comportamientos que permitan tener una buena salud y bienestar, tanto físico como mental y emocional, por lo que es muy importante fomentar estos, para que contribuyan al desarrollo integral de los adolescentes, ya que permitirán la prevención de enfermedades y mejorarán su calidad de vida, así como fomentarán el bienestar mental y emocional, lo cual se continuará a lo largo de toda su vida.</p>

  <p>Los hábitos de vida saludables son necesarios para el desarrollo y bienestar físico, mental y emocional del adolescente. A continuación se mencionan algunos de estos.</p>

  <ol>
    <li>Alimentación saludable:
      <ul>
        <li>Dieta balanceada formada por frutas, verduras, granos enteros y semillas, carnes magras y productos lácteos bajos en grasas.</li>
        <li>Hidratación: beber suficiente agua para evitar la deshidratación.
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t5-alimentacion.webp', 'La alimentación saludable es indispensable para mantener la buena salud.', 'https://www.google.com/url?q=https://www.freepik.es/vector-premium/nutricion-dibujos-animados-comida-dieta-fruta-fresca-ilustracion-salud_10955192.htm&sa=D&source=docs&ust=1764380132799226&usg=AOvVaw1cHMMgvMF4EakAkuQ3cN-6', 'freepik.');
              ?>
          </div>

      </li>
      </ul>
    </li>
    <li>Actividad física regular.
      <ul>
        <li>Practicar diferentes tipos de ejercicio (aeróbico, de fuerza y flexibilidad) a diario por lo menos 30 minutos.</li>
        
        <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t5-ejercicio.webp', 'Practicar actividad física en forma regular.', 'https://www.freepik.es/fotos-premium/mujeres-asiaticas-corren-parque-perder-peso-mantenerse-saludables_12567743.htm#from_view=detail_alsolike', 'freepik.');
              ?>
          </div>
      </ul>
    </li>
    <li>Sueño adecuado y manejo del estrés: 
      <ul>
        <li>Dormir entre 7 y 9 horas diarias por la noche con un horario regular, en un ambiente tranquilo, evitando el uso de dispositivos electrónicos.</li>
        <li>Practicar técnicas de relajación como meditar, yoga, respiración profunda, etc.

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t5-relajacion.webp', 'Grupo de adolescentes practicando técnicas de relajación. ', 'https://www.freepik.es/foto-gratis/tiro-medio-clase-educacion-fisica_16312084.htm#query=yoga%20adolescentes&position=15&from_view=keyword&track=ais_user&uuid=72756669-04f8-456c-91c2-50f4dca8298d#page=1&query=y&from_query=undefined&position=1&from_view=keyword&track=ais_user&uuid=72756669-04f8-456c-91c2-50f4dca8298d', 'freepik.');
              ?>
          </div>
        </li>
      </ul>
    </li>
    <li>Relaciones sociales saludables:
      <ul>
        <li>
          Participar en relaciones saludables con amigos y familiares y realizar actividades sociales afines a ellos.
        </li>
        <li>Tener comunicación abierta y franca con sus seres queridos y amigos.
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t5-relaciones.webp', 'Relaciones saludables con la familia.', 'https://www.freepik.es/foto-gratis/familia-tomando-selfie-juntos-mientras-cenan_9265603.htm?query=familia%20amigos#from_view=detail_alsolike', 'freepik.');
              ?>
          </div>
        </li>
      </ul>
    </li>
    <li>Prevención de comportamientos de riesgo:
       <ul>
          <li>No consumir alcohol, tabaco ni drogas y estar conscientes de los riesgos que esto conlleva. </li>
          <li>Evitar conductas de riesgo como: no respetar los limites de velocidad, no usar cinturon o casco de seguridad, practicar sexo riesgoso, no protegerse del sol, etc.</li>
       </ul>           
    </li>
    <li>Auto cuidado y bienestar mental:</li>
      <ul>
        <li>Mantener el cuidado e higiene personal, como el baño diario, la ropa limpia, lavarse los dientes, etc.</li>
        <li>Realizar actividades que desarrollen habilidades como: la lectura, cursos y talleres, así mismo tener hobbies o actividades recreativas que les brindan relajación y placer.</li>
      </ul>
    </li>
    
  </ol>

 <h3>Calidad de vida</h3>

  <p>Se define como el bienestar general tanto de un individuo como de la comunidad, e incluye condiciones materiales, emocionales y sociales que la determinan. Algunos de los factores importantes en la calidad de vida de un adolescente son: la educación, el acceso a servicios de salud, vivienda adecuada, seguridad en la comunidad, oportunidades laborales, medioambiente saludable, relaciones sociales satisfactorias, y el acceso a disfrutar de actividades recreativas y culturales. La calidad de vida evalúa el grado de satisfacción y felicidad que disfrutan tanto una comunidad como una persona en su vida diaria.</p>
  <p>La calidad de vida de los adolescentes, está relacionada al bienestar general en esta etapa, y comprende diversos aspectos como factores físicos, emocionales, sociales y educativos, que les permitirán un desarrollo saludable y equilibrado, que les preparará para la vida adulta.  Algunas características de la calidad de vida son: </p>

  <ol>
    <li><b>Salud física:</b> se refiere a la alimentación saludable, a la realización de ejercicio regular y dormir las horas necesarias para un descanso adecuado.</li>
    <li><b>Salud mental:</b>  manejo adecuado del estrés, buena autoestima y ser positivo en la vida. Tener acceso a los servicios de salud para el manejo adecuado de los problemas emocionales y psicológicos.</li>
    <li><b>Salud social:</b>  relaciones saludables y de apoyo con amigos, familiares y la comunidad, realizar actividades comunitarias.</li>
    <li><b>Educación y desarrollo personal:</b> oportunidad de tener una educación de calidad e involucrarse en actividades extracurriculares que le ayuden a su crecimiento personal y el desarrollo de habilidades.</li>
    <li><b>Entorno y seguridad:</b> es importante que el lugar en el que se vive, sea seguro y protegido, que la vivienda sea adecuada y que cuente con todos los servicios urbanos; que garantice su seguridad y desarrollo.</li>
  </ol>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
