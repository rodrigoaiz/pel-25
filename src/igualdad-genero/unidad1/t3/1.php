<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¡Te damos la bienvenida al aprendizaje 3!</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga3-img01.webp');
    ?>
  </div>
  <p>En este apartado explorarás las relaciones de poder a fin de buscar formas de fomentar la igualdad de género. También abordarás conceptos clave como el machismo y el <i>mansplaining</i>. También analizarás casos para desarrollar tus habilidades críticas y propositivas hacia la igualdad de género.</p>
  <h3>Propósito</h3>
  <p>Comprenderás 	las relaciones de poder al identificar la diversidad de campos de denominación desde la desigualdad de género para proponer soluciones igualitarias e inclusivas.</p>
  <h3>Contenidos</h3>
  <ul class="ul-disc">
    <li><strong>Declarativos</strong><br>
    Comprenderás conceptos clave relacionados con las relaciones de poder, el patriarcado y los micromachismos, identificando sus manifestaciones en la sociedad actual y su impacto en la desigualdad de género.
    </li>
    <li><strong>Procedimentales</strong><br>
    Desarrollarás habilidades para analizar casos problemáticos, identificar relaciones de poder y proponer soluciones, utilizando herramientas como la discusión en grupos y la elaboración de propuestas.
    </li>
    <li><strong>Actitudinales</strong><br>
    Promoverás la empatía, el espíritu crítico y el compromiso con la equidad de género, fomentando actitudes de respeto, igualdad y solidaridad hacia todas las personas, independientemente de su género. 
    </li>
  </ul>

  <p>En este aprendizaje reflexionarás en torno a los siguientes conceptos clave:</p>

  <ol class="ol-number">
    <li><strong>Relación de poder:</strong> Vínculo social en el que una persona, grupo o institución influye o condiciona las acciones, pensamientos o decisiones de otra. El poder puede manifestarse en autoridad, persuasión o acceso a recursos.  
Ejemplo: En una clase, el maestro decide qué temas se estudiarán y cómo se evaluará a los estudiantes, condicionando su aprendizaje.</li>
    <li><strong>Campos de dominación:</strong> Espacios sociales donde se organizan y distribuyen las relaciones de poder, con jerarquías, normas y posiciones que determinan quién tiene más influencia.<br>
    <strong>Ejemplo:</strong> En la familia, los padres suelen tener autoridad para tomar decisiones importantes, mientras que los hijos deben acatar normas.
    <li><strong>Tipos de capital</strong><br>
    <strong>Definición:</strong> Recursos que las personas poseen y que les permiten obtener ventajas o poder dentro de un campo social.</li>
    <ul class="ul-disc">
      <li><strong>Capital económico:</strong> dinero o bienes materiales.</li>
      <li><strong>Capital cultural:</strong> educación, habilidades o títulos académicos.</li>
      <li><strong>Capital social:</strong> redes de contactos o relaciones de confianza.</li>
      <li><strong>Capital simbólico:</strong> prestigio o reconocimiento social.</li>
    </ul>
  </li><br>
  <strong>Ejemplo:</strong> Una persona con un título universitario (capital cultural), buenas conexiones laborales (capital social) y reputación profesional (capital simbólico) tiene más posibilidades de acceder a un buen empleo.
  <li><strong>Micromachismos (o machismos cotidianos):</strong> Prácticas sutiles y normalizadas mediante las cuales los hombres ejercen control o dominio sobre las mujeres en la vida diaria, reforzando la desigualdad de género.</li><br>
    <strong>Ejemplo:</strong> En una reunión de trabajo, un hombre interrumpe constantemente a una colega, minimizando su participación, mientras todos los demás lo permiten. 
  </ol>

  <p><strong>Tiempo:</strong> 6 horas divididas en 3 sesiones</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>