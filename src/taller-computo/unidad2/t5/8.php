<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Toxicidad de los componentes y manejo adecuado</h3>
  <p>En este tema, explicaremos algunos de los posibles efectos perjudiciales para la salud y el medio ambiente causados por la toxicidad de los componentes presentes en el hardware. Aprenderemos sobre la importancia de manejar adecuadamente los dispositivos electrónicos al desecharlos.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderImage('u2_t5_warning.webp', 'Toxicidad. Imagen de gstudioimagen.', 'https://www.freepik.es/vector-gratis/etiqueta-precaucion-sobre-fondo-gris_5853673.htm#query=toxico&position=9&from_view=search&track=sph&uuid=cd12d3ce-2605-412f-aa2e-8324bdeaecbc', 'Freepik.') ?>
  </div>
  <h4>Toxicidad de los componentes del Hardware</h4>
  <ol class="ol-number">
    <li><strong>Plomo:</strong> Algunos dispositivos electrónicos pueden contener plomo, un metal pesado tóxico. La exposición al plomo puede dañar el sistema nervioso, el cerebro y otros órganos internos, especialmente en niños y mujeres embarazadas.</li>
    <li><strong>Mercurio</strong>: Algunos componentes electrónicos, como las lámparas fluorescentes, contienen mercurio. La exposición al mercurio puede causar problemas neurológicos y afectar el desarrollo cerebral en niños.</li>
    <li><strong>Cadmio</strong>: Este metal pesado se encuentra en baterías y circuitos impresos. La exposición prolongada puede afectar los riñones, los huesos y los pulmones.</li>
  </ol>
  <h4>Manejo adecuado de componentes de Hardware</h4>
  <ul class="ul-disc">
    <li><strong>Reciclaje electrónico:</strong> Utilizar centros de reciclaje autorizados para desechar dispositivos electrónicos. Estos centros separan los componentes tóxicos y los manejan adecuadamente.</li>
    <li><strong>Programas de recolección</strong>: Participar en programas de recolección de electrónicos organizados por instituciones gubernamentales o empresas.</li>
    <li><strong>Evitar el vertido</strong>: No arrojar dispositivos electrónicos en la basura convencional ni en cuerpos de agua. Esto evita la liberación de sustancias tóxicas en el ambiente.</li>
  </ul>
  <?php renderImagePleca('u2_t5_electronic_garbage.webp', 'Reciclaje. Imagen de macrovector.', 'https://www.freepik.es/vector-gratis/composicion-isometrica-basura-electronica-personajes-humanos-rostro-que-sostienen-baterias-agotadas-lamparas-ilustracion-cubo-basura_15481012.htm#query=reciclaje%20electronica&position=22&from_view=search&track=ais&uuid=5f0d409b-bf36-4f0b-80b5-13710d657ab0', 'Freepik.', 'justify-center') ?>
  <h4>Conclusión</h4>
  <p>En un mundo digitalizado y tecnológico, el uso de software y hardware se ha convertido en una parte esencial de nuestras vidas. Sin embargo, es crucial reconocer que estos avances también conllevan riesgos y desafíos que deben abordarse de manera responsable. Exploramos dos dimensiones interconectadas: la seguridad cibernética y la salud física en el contexto de la tecnología.</p>
  <p>En el primer tema, "Riesgos en el Uso de Software", descubrimos cómo las vulnerabilidades y amenazas en el software pueden poner en peligro nuestra información y privacidad. Aprendimos sobre la evolución de los malware y cómo prevenir su propagación. Comprendimos que el conocimiento y las medidas preventivas son fundamentales para mantener la seguridad en línea y proteger nuestros dispositivos y datos.</p>
  <p>En el segundo tema, "Daños en la Salud por el Uso de Hardware", exploramos cómo el uso inadecuado de dispositivos electrónicos puede afectar negativamente nuestra salud. Desde lesiones comunes debido a la mala postura hasta la toxicidad de componentes en el hardware, internalizamos la importancia de mantener la ergonomía y de manejar adecuadamente los dispositivos electrónicos al desecharlos.</p>
  <p>Ambos temas comparten un denominador común: la responsabilidad personal en la adopción de prácticas seguras y saludables. La prevención, la educación y la acción proactiva son las claves para navegar por el mundo digital de manera segura y saludable.</p>
  <p>Estos temas nos brindan las herramientas para comprender los desafíos que acompañan al avance tecnológico y cómo podemos mitigar sus impactos negativos. Al aplicar el conocimiento adquirido en seguridad cibernética y salud física, podemos aprovechar los beneficios de la tecnología de manera responsable y empoderada.</p>
  <?php ob_start(); ?>
  <p>Pon a prueba lo que has aprendido hasta el momento acerca de daños en la salud por el uso de hardware con el siguiente ejercicio.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a25', "Daños por el uso de hardware y toxicidad", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de autoevaluación para que conozcas tu desempeño en esta unidad 2 “Hardware y software” ¡Éxito!</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a26', "Cuestionario final unidad 2", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
