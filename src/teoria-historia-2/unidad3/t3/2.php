<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>CRISIS DE LA CIENCIA HISTÓRICA EN LA POSMODERNIDAD.</h2>
  <p>Antes de iniciar con los contenidos de esta unidad, es necesario que explicites si ya conoces el concepto de posmodernidad, para lo cual te pedimos que participes en el siguiente foro anterior</p>
  <h4>Introducción: el ámbito del posmodernismo.</h4>
  <p>Los años ochenta marcaron que las exigencias de cambio social que se manifestaron desde 1968 tendrían que esperar frente a la coyuntura que representó la contraofensiva ideológica de derecha, que se expresó a partir de la caída del bloque soviético, dando por finalizados los ideales de la revolución de octubre y pregonando el triunfo del capitalismo con su política neoliberal y la victoria de la 
    <?php renderTooltip ('globalización', 'El concepto de globalización se utiliza para describir el proceso histórico en el que se reducen o desaparecen las barreras comerciales entre los estados. Los mercados quedan libres, es decir se elimina la regulación estatal y se propicia la fluctuación monetaria y los movimientos especulativos de capital, los cuales se pueden trasladar a cualquier parte del mundo. El impacto de esta política se aprecia con claridad no sólo en la economía, sino también en la innovación tecnológica y el ocio.','bottom');?>. Por toda Europa se generó una crisis a partir de la implementación de la política neoliberal de privatización del sector público: recortes a los gastos sociales, aumento del desempleo, abandonando las políticas de bienestar social para la población. Estas políticas de adelgazamiento del Estado, así como los cambios en el orden mundial propiciaron la aparición, en distintas partes del mundo, de guerras de exterminio y como consecuencia migración forzada, hambre, enfermedad, y acentuaron la desigualdad, problemas que ya se conocían, pero ahora, se aceleraron con los recursos tecnológicos de vanguardia. Nunca como en ese momento se aplicó un calificativo tan preciso para un modo de producción: el 
    <?php renderTooltip ('capitalismo salvaje', 'Este concepto se aplica a la fase capitalista de libre mercado que concentra en una élite transnacional la riqueza producto del saqueo y explotación de los países en vías de desarrollo, acentuando las diferencias económicas, tecnológicas y de calidad de vida; creando problemas sociales no a nivel local, sino en un mundo global, depredando el medio ambiente de los países pobres y eliminando el concepto de seguridad social.','bottom');?>.</p>
  <p>La globalización promueve la tecnología informativa como la televisión, los juegos electrónicos, la robótica y el Internet, lo cual rompe con las fronteras nacionales, permitiendo que los usuarios de ellas, especialmente los contenidos de Internet,  sean receptores que no cuestionan los contenidos de lo observado. Asimismo, se desarrolla una visión individualista: cada sujeto vive en su propio mundo, limitando sus intereses y conocimientos, alejándose de los demás hombres. </p>
    <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-homelees.webp','Homelees', 'https://es.wikipedia.org/wiki/Sinhogarismo#/media/Archivo:Criatura.jpg','Wikimedia Commons.');
  ?>
  </div>
  <h4>La Posmodernidad</h4>
  <p>La posmodernidad surgió a partir del último tercio XX, en un momento en que se vivía un pesimismo por el futuro, frente a un duro presente, permeado por el individualismo, la guerra, la inseguridad. Todo esto se refleja en la cultura, en el arte, la ciencia, la filosofía y las formas de hacer historia.</p>
  <p>Los años setenta y ochenta fueron testigos de la derrota política de los movimientos político-culturales de los años sesenta, los movimientos contraculturales, la rebelión juvenil, el fracaso de movimientos guerrilleros en América Latina, por ejemplo, y al mismo tiempo se integraron nuevas formas de protesta: la subcultura punk y okupa contra el sistema aparecieron nuevos problemas, como la migración forzada. Las respuestas fueron variadas: las nuevas formas de pensamiento se dividieron y algunas buscaron una ruptura abierta con la izquierda, así como con los postulados del marxismo. Como resultado del desencanto de una generación que consideró muertas las grandes utopías sociales que resolverán los grandes problemas de la sociedad basadas en la idea de libertad, la ciencia y el progreso; surgió el posmodernismo. Fue a partir 1971 cuando esta noción se emplea con mayor frecuencia y se define como el </p>
  <ul>
    <p>«rechazo de los rasgos dominantes de la modernidad, una configuración que abarcaba las artes visuales, la música, la tecnología y la sensibilidad en general» [Perry Anderson, Los orígenes de la posmodernidad, p. 23]. </p>
  </ul>
  <p>También representó un cambio de valores que se expresó en la ciencia y la filosofía. Dejando de lado las “polaridades de izquierda y derecha” lo posmoderno es una búsqueda por establecer una civilización mundial de la tolerancia plural. Proponiendo un cambio en todas las circunstancias humanas: el laboral, emotivo, sexual, político, económico. Con la caída de las ideas de la modernidad, se terminaba con el pasado, los estados nacionales eran trascendidos por la globalización, el desarrollo tecnológico de las computadoras y la ciencia. Se creaba una sociedad en la que se eliminaban las barreras entre la vida pública y privada, se dejaba de lado la discusión de las diferencias sociales, la explotación social, el conflicto de clases.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('th2-u3-graffitibelen.webp','Bansky Grafitti en Belem', 'https://commons.wikimedia.org/wiki/File:Bethlehem_Wall_Graffiti_1.jpg','Wikimedia Commons.');
  ?>
  </div>
  <h4>Características.</h4>
  <p>La posmodernidad busca nuevas formas de expresión cuyas características se centran en la ruptura y crítica a la modernidad, esto se hace impulsando el 
    <?php renderTooltip ('Hedonismo', 'Corriente de pensamiento que se orienta como fin único de la experiencia humana la búsqueda del placer, evitar el dolor, difundido por los medios de comunicación. La sexualidad pone en tela de juicio las normas y la moralidad.','bottom');?>, la ruptura con la ética y las reglas, la exaltación del sentimiento, la crisis de las ideas y de los ideales, la irreligiosidad, tal como afirma Alain Touraine en su obra Crítica de la Modernidad, pues se parte de la idea de que los problemas que vivimos no se pueden arreglar, se libera al individuo y a la sociedad de las leyes y de la razón, por lo que es mejor vivir el presente, no pensando en el pasado ni en el futuro. Así lo que importa son los sentimientos, los gustos, valores, principios y pautas individuales.</p> 
  <p>Estos aspectos de la posmodernidad se reflejan en los diferentes ámbitos de la cultura, como es el caso de la historia y el arte; es así como se considera, por ejemplo, más importante presentar un texto literario bien escrito que el contenido, por lo que la narración se vuelve el centro de lo escrito. Esta característica es fundamental para entender su visión de la historia.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
