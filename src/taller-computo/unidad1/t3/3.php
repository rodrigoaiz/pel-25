<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Buscar y evaluar fuentes de información</h3>
  <p>Ahora revisaremos la información del paso 2 del Modelo Gavilán. Recuerda consultar el documento <a href="<?php echo PATH_DOCS . 'u1_t2_guia_gavilan.pdf' ?>" target="_blank">Guía para utilizar el modelo gavilán en el aula (páginas 15-22)</a> que descargaste la pantalla anterior.</p>
  <ol class="ol-number">
    <li>
      <h3>Identificar y seleccionar las fuentes de información más adecuadas</h3>
      <p>En este subpaso debes ubicar de qué fuentes obtendrás la información necesaria para dar respuesta a las preguntas secundarias, para ello describimos a las fuentes de información.</p>
      <p><strong>Las fuentes de información primarias </strong>son documentos que contienen información nueva y original, resultado de un trabajo intelectual, ofrecen información de primera mano, que proviene directamente del autor, que se publica por primera vez, no se ha filtrado, interpretado o evaluado por nadie más.</p>
      <p><strong>Ejemplos</strong>: libros, artículos, actas de conferencias, memorias de congresos, fotografías, videos o filmaciones, folletos, documentos de expertos que se acceden por internet, monografías, normas o estándares técnicas, patentes, periódicos y otras publicaciones seriadas, revistas científicas y de entretenimiento, diarios, documentos oficiales de instituciones públicas, informes técnicos y de investigación de instituciones públicas o privadas, recursos audiovisuales o en multimedia entre otros.</p>
      <p><strong>Las fuentes de información secundarias</strong> son documentos que contienen información organizada, elaborada, producto de análisis, extracción o reorganización que refiere a documentos originales de fuentes primarias, es decir toman como base a las fuentes primarias para comentarlas o reinterpretarlas.</p>
      <p><strong>Ejemplos</strong>: enciclopedias, antologías, directorios, libros o artículos que interpretan otros trabajos o investigaciones, también incluyen abstracts o resúmenes, índices, almanaques o anuarios, atlas, bibliografías, catálogos, diccionarios, enciclopedias, biografías, guías, manuales, módulos de consulta de las bases de datos de las bibliotecas, tablas.</p>
      <p><strong>Las fuentes de información terciarias</strong> son guías para encontrar fuentes de información primaria y secundaria. Ejemplos: catálogos, índices y bibliografías, guías de archivos, bibliotecas, librerías y editoriales, índices y buscadores en internet.</p>
    </li>
    <li>
      <h3>Acceder a las fuentes de información seleccionadas</h3>
      <p>La clave para encontrar las fuentes de información son las estrategias de búsqueda, estas son las frases que utilizarás y escribirás en el buscador para realizar la búsqueda o consulta.</p>
      <p>Una estrategia de búsqueda en general es el conjunto de procedimientos y operaciones que un usuario realiza con el fin de obtener la información necesaria para resolver un problema de información.</p>
      <p>Específicamente es una frase formada por palabras clave enlazadas por operadores lógicos o boléanos, de proximidad o de truncamiento.</p>
      <p>Los operadores booleanos son el conjunto de conectores utilizados para describir las operaciones lógicas (proposiciones) que el usuario emplea en una base de datos para iniciar, ampliar o reducir una búsqueda de información. Sirven para combinar los términos, palabras claves, temas, etc. Los operadores booleanos son: AND, OR y NOT.</p>
      <p>Al usar los operadores se establecen relaciones entre los conceptos o términos que mejor expresan el tema. Los operadores permiten formar estrategias de búsqueda compuestas por la combinación de dos o más términos. También los paréntesis permiten agrupar términos.</p>
      <ul>
        <li>AND (Y) se utiliza para reducir o ajustar la búsqueda para encontrar registros que contienen todos los términos que se han introducido en la estrategia de búsqueda. Usando el operador AND permite ser más preciso mediante la integración de conceptos adicionales necesarios en la estrategia. Ejemplo de estrategia de búsqueda utilizando AND para localizar únicamente a los estudiantes de CCH o que están relacionados con CCH: estudiantes AND CCH.</li>
        <li>OR (O) amplía una búsqueda para encontrar registros que contengan cualquiera o todos los términos que incluidos en la estrategia de búsqueda. El uso de OR hace su búsqueda más amplia mediante la búsqueda de términos similares o relacionados. Ejemplo de estrategia de búsqueda utilizando OR para localizar a las páginas que contienen como términos a Pascal o a la pascalina o a ambos: Pascal OR pascalina.</li>
        <li>NOT (NO) se estrecha la búsqueda para encontrar registros que contengan un término, pero no otro. Emplear NOT permite ser más preciso mediante la exclusión de ciertos términos. Ejemplo de estrategia de búsqueda utilizando NOT para localizar a las páginas que contienen como términos a Pascal, pero no triángulo: Pascal NOT triángulo.</li>
      </ul>
    </li>
    <li>
      <h3>Evaluar las fuentes encontradas</h3>
      <p>Tienes que identificar y seleccionar, de entre todas las fuentes de información disponibles, los recursos de más alta calidad y adecuados , Esta capacidad te exige que desarrolles una serie de criterios para hacerlo y ponga en práctica constantemente habilidades de pensamiento crítico.</p>
    </li>
    <li>
      <h3>Evaluación Paso 2</h3>
    </li>
  </ol>
  <?php ob_start(); ?>
  <p>Después de haber revisado cada uno de los subpasos anteriores lleva a cabo la siguiente actividad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a10', "Verificación de la búsqueda", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p class="font-black">Continúa con la práctica del modelo que estamos revisando. Elabora el paso 2. Buscar y evaluar fuentes de información y responde en la casilla de cada subpaso.</p>
  <p>Recuerda que para esta actividad estos son los pasos a seguir:</p>
  <ol class="ol-number">
    <li>Descarga este <a href="<?php echo PATH_DOCS . 'u1_t3_practica_modelo_gavilan.docx' ?>" target="_blank">documento</a> para anotar tus avances.</li>
    <li>Una vez que concluyas los cuatro pasos guarda el documento siguiendo el formato: Apellidos_Nombre_Ap3_Actividad01. Ejemplo: SanchezLopez_JoseLuis_Ap3_Actividad01</li>
  </ol>
  <p>Consulta los <a href="<?php echo PATH_DOCS . 'u1_t3_lista_cotejo_practica_modelo_gavilan.pdf' ?>" target="_blank">Criterios de evaluación</a> de la actividad. Más adelante te indicaremos dónde enviar tu archivo.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a11', "Práctica: Modelo Gavilán", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
