<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Identificación y cuestionamiento de los presupuestos de la masculinidad tradicional</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga4-img01.webp');
    ?>
  </div>
  <h3>¡Te damos la bienvenida al aprendizaje 4!</h3>
  <p>Los cambios sociales generados por la igualdad de derechos están modificando la forma en que nos relacionamos con otras personas en lo personal, académico, laboral o social. Por eso el contenido y las actividades que realizarás en el aprendizaje 4 te ayudarán a <strong>reconocer y cuestionar algunos presupuestos de la masculinidad tradicional</strong>.</p>
  <p>Pero ¿qué es la masculinidad tradicional? Para responder a esta interrogante te presentamos la caja de la masculinidad, una herramienta con perspectiva de género que investiga cómo se comportan, actúan, interactúan y se relacionan las personas que ejercen una masculinidad tradicional, y quienes está en proceso de transformación, y quienes ejercen una masculinidad alternativa.</p>
  <p>¿Y es necesario cuestionar a la masculinidad tradicional? La triada de la violencia y los machismos cotidianos te servirán de guía para <strong>comprender que algunos de esos comportamientos, acciones, interacciones y formas de relacionarse promueven la violencia de género</strong> porque impiden el libre desarrollo de los propios hombres, de otros hombres, de las mujeres, de las infancias y de las comunidades sexo diversas y sexo divergentes.</p>
  <p>Sin embargo, <strong>las personas masculinas no nacen siendo violentas, aprenden a serlo</strong>. Aunque para los hombres la violencia es algo indeseable, es incentivada por las representaciones culturales que nos muestran como deberían ser y comportarse los hombres. Por eso, analizarás cuáles son los aspectos negativos y los positivos de los modelos de masculinidad que puedes encontrar en los diversos medios de comunicación, entretenimiento o redes sociales. Para cerrar este aprendizaje <strong>te invitamos a finalizar con una reflexión sobre las contribuciones que hacen los diversos modelos de masculinidad para crear ambientes de igualdad, respeto, tolerancia y convivencia</strong>.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>Al finalizar este aprendizaje lograrás identificar y cuestionar algunos de los presupuestos de la masculinidad tradicional.</p>
  <p class="font-bold text-xl text-fuchsia-900">Contenidos</p>
  <p class="font-bold">Declarativos:</p>
  <p>- Estereotipos y roles de género de los hombres.</p>
  <p>- Pilares y mandatos de la masculinidad tradicional.</p>
  <p>- Masculinidad hegemónica, tradicional, masculinidades alternativas y caja de la masculinidad.</p>
  <p>- Triada de la violencia</p>
  <p>- Derechos humanos de los hombres y ambientes de igualdad, respeto, tolerancia y convivencia.</p>
  <p class="font-bold">Procedimentales:</p>
  <p>- Diferenciar estereotipos y roles masculinos.</p>
  <p>- Ejemplificar pilares o mandatos de la masculinidad tradicional.</p>
  <p>- Detectar los elementos de las masculinidades que obstaculizan, impiden o favorecen el -desarrollo de las mujeres, otros hombres, infancias, diversidades y disidencias sexo-genéricas.</p>
  <p>- Argumentar y cuestionar las masculinidades que impiden la creación de ambientes de igualdad, respeto, tolerancia y convivencia.</p>
  <p class="font-bold">Actitudinales:</p>
  <p>- Responsabilidad en el aprendizaje.</p>
  <p>- Disposición para compartir.</p>
  <p>- Respeto a la diversidad de ideas y a los derechos humanos.</p>
  <p>- Escucha activa.</p>
  <p>- Participación en la formación de pares.</p>
  <p>- Disposición para el trabajo colaborativo.</p>
  <p class="mt-10"> <span class="font-bold text-xl text-fuchsia-900">Tiempo |</span> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
