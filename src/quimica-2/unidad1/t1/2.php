<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

  <h3>Presentación</h3>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('bIMTcrHCI9k', 'Presentación de la Unidad 1 "Uso y búsqueda de información en Internet".');
    ?>
  </div>
  <p>En esta <strong>Unidad 1 “Uso y búsqueda de información en Internet”</strong> desarrollarás el conocimiento y habilidades que te permitirán identificar algunos términos básicos correspondientes a la Red, así como los servicios que ofrece Internet, de igual modo configurarás tu navegador predeterminado el buscador de tu preferencia, te apoyaras de métodos y estrategias de búsqueda, estableciendo la confiabilidad de la información encontrada como es el Motor de búsqueda de la BIDIUNAM, además utilizarás una herramienta que te permita hacer la citación y referencia bibliográfica correspondiente.</p>
  <p>En esta <strong>Unidad 1 “Uso y búsqueda de información en Internet”</strong> desarrollarás el conocimiento y habilidades que te permitirán identificar algunos términos básicos correspondientes a la Red, así como los servicios que ofrece Internet, de igual modo configurarás tu navegador predeterminado el buscador de tu preferencia, te apoyaras de métodos y estrategias de búsqueda, estableciendo la confiabilidad de la información encontrada como es el Motor de búsqueda de la BIDIUNAM, además utilizarás una herramienta que te permita hacer la citación y referencia bibliográfica correspondiente.</p>
  <h3>Aprendizajes de la unidad</h3>
  <div class="bg-secondary/50 px-5 py-2 max-w-3xl mx-auto">
    <p>Los aprendizajes que desarrollarás en esta unidad serán:</p>
    <ul class="ul-disc">
      <li>Explica conceptos de red y servicios de Internet.</li>
      <li>Utiliza el navegador web para administrar los sitios visitados.</li>
      <li>Utiliza un método de búsqueda de información en Internet.</li>
      <li>Localiza información a través de índices, buscadores y otras aplicaciones.</li>
      <li>Realiza búsquedas y obtiene información por medio de los sistemas de recuperación de información de la biblioteca digital de la UNAM.</li>
      <li>Aplica los criterios para evaluar las fuentes de información.</li>
      <li>Utiliza una herramienta para administrar citas y referencias bibliográficas.</li>
    </ul>

  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
