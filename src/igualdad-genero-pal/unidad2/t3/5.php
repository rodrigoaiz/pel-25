<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bibliografía</h2>
  <h3>Básica para el alumnado</h3>
      <ul id="biblio" class="ul-disc">
        <li>Código Penal Federal [CPF]. (1931, 14 de agosto; última reforma 17 de enero de 2024). Artículos 302 y 325. <em>Diario Oficial de la Federación</em>. https://drive.google.com/file/d/18Ak0rZ5LvOlIkul4gOCT8cYKzVEpz0Ak/view?usp=sharing</li>
        <li>Fiscalía General de la República. (2015, septiembre). <em>Protocolo de investigación ministerial, policial y pericial para el delito de feminicidio</em> (pp. 25-32). https://drive.google.com/file/d/1coPrYSoTVHsExN3Wo3UlcP8yunJdcs_7/view?usp=sharing</li>
        <li>Lagarde, M. (2005). <em>Por la vida y la libertad de las mujeres. 1er Informe Sustantivo de Actividades.</em> H. Congreso de la Unión.</li>
        <li>Olimpia y Simone. (2021, 9 de febrero). A un año del feminicidio de Ingrid Escamilla. <em>Voces feministas.mx</em>. https://vocesfeministas.mx/a-un-ano-del-feminicidio-de-ingrid-escamilla/</li>
        <li>Redacción Mag. (2020, 21 de febrero). Ingrid Escamilla: Erick Francisco Robledo, el feminicida que desolló a su pareja | ¿Quién es Erick Francisco Robledo Rosas? <em>El Comercio Perú</em>. https://mag.elcomercio.pe/historias/ingrid-escamilla-erick-francisco-robledo-el-feminicida-que-desollo-a-su-pareja-quien-es-erick-francisco-robledo-rosas-nnda-nnlt-noticia/</li>
        <li>Proceso. (2023, 12 de septiembre). Ley Ingrid: avalan cárcel a quien difunda o filtre imágenes de víctimas de feminicidios. <em>Proceso</em>. https://www.proceso.com.mx/nacional/2023/9/12/ley-ingrid-avalan-carcel-quien-difunda-filtre-imagenes-de-victimas-de-feminicidios-314729.html</li>
        <li>Sin autor. (2020, 11 de febrero). Ingrid Escamilla había denunciado a su pareja por violencia; se pedirá pena máxima: Sheinbaum. <em>Etcétera</em>. https://etcetera.com.mx/nacional/ingrid-escamilla-habia-denunciado-su-pareja-por-violencia-se-pedira-pena-maxima-sheinbaum</li>
        <li>Sin autor. (2020, 21 de febrero). ¿Quién es Erick Francisco Robledo? Todo sobre el feminicida de Ingrid Escamilla. <em>Revista Mag</em>. https://elcomercio.pe/mag/historias/ingrid-escamilla-erick-francisco-robledo-el-feminicida-que-desollo-a-su-pareja-quien-es-erick-francisco-robledo-rosas-nnda-nnlt-noticia/#google_vignette</li>
        <li>Mata, A. O. (2020, 11 de febrero). Ingrid y su asesino tenían una relación extraña: vecinos. <em>Excelsior</em>. https://www.excelsior.com.mx/comunidad/ingrid-y-su-asesino-tenian-una-relacion-extrana-vecinos/1363540</li>
      </ul>
    <h3>Para el profesorado</h3>
    <ul class="ul-disc">
    <li>Lagarde, M. (2005) <em>Por la vida y la libertad de las mujeres.</em> 1er Informe Sustantivo de Actividades. H. Congreso de la Unión.</li>
    <li>Núñez, L. (2018). <em>El género en la ley penal: crítica feminista de la ilusión punitiva.</em> Centro de Investigaciones y Estudios de Género de la Universidad Nacional Autónoma de México, México: 210p. ISBN: 9786070299087.</li>
    <li>Rivera, C. (2021). <em>El invencible verano de Liliana.</em> Penguin Random House.</li>
    <li>Segato, R. (2014) <em>Las nuevas formas de la guerra y el cuerpo de las mujeres.</em> Tinta Limón.</li>
    <li>Segato, R. (2016) <em>La guerra contra las mujeres. Traficantes de Sueños.</em></li>
    <li>Segato, R. (2021) <em>Las estructuras elementales de la violencia: Ensayos sobre género entre la antropología, el psicoanálisis y los derechos humanos.</em> Prometeo.</li>
    </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
