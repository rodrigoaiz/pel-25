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
        <li>Chile Quiénes son Las Tesis | <em>El Violador eres tú</em> | <em>Cómo nació "Un violador en tu camino"</em> <a href="https://www.youtube.com/watch?v=_utq2Y7nXPw" target="_blank">https://www.youtube.com/watch?v=_utq2Y7nXPw</a></li>
        <li>
        Lima, L. (2020. 16 de febrero) <em>Feminicidio de Ingrid Escamilla: por qué el asesinato de la joven ha provocado protestas en México</em>. BBC News Mundo. <a href="https://www.bbc.com/mundo/noticias- america-latina-51518716" target="_blank">https://www.bbc.com/mundo/noticias- america-latina-51518716</a>  
        </li>
        <li>Jiménez Sánchez, R. M. (2021). Narrar el cuerpo de las víctimas de feminicidio: el crimen de Francisco Robledo, sus públicos y contrapúblicos. <em>Revista Mexicana De Ciencias Penales</em>, 4(13), 27-44. <a href="https://doi.org/10.57042/rmcp.v4i13.422" target="_blank">https://doi.org/10.57042/rmcp.v4i13.422</a></li>
        <li>Proceso. (2023, 12 de septiembre). <em>Ley Ingrid: avalan cárcel a quien difunda o filtre imágenes de víctimas de feminicidios.</em> Proceso <a href="https://www.proceso.com.mx/nacional/2023/9/12/ley-ingrid-avalan-carcel-quien-difunda-filtre-imagenes-de-victimas-de-feminicidios-314729.html" target="_blank">https://www.proceso.com.mx/nacional/2023/9/12/ley-ingrid-avalan-carcel-quien-difunda-filtre-imagenes-de-victimas-de-feminicidios-314729.html</a></li>
        <li>Quintana, V. (2020, 7 de marzo). Vivir sin miedo <a href="https://youtu.be/VLLyzqkH6cs?si=y_1iD0D7_Wc3QVQ1" target="_blank">https://youtu.be/VLLyzqkH6cs?si=y_1iD0D7_Wc3QVQ1</a></li>
        <li>Código Penal Federal. Última reforma del 17 de enero de 2024. Artículos 302 y 325. Publicado en el Diario Oficial de la Federación el 14 de agosto de 1931 (México). <a href="https://drive.google.com/file/d/18Ak0rZ5LvOlIkul4gOCT8cYKzVEpz0Ak/view?usp=sharing" target="_blank">https://drive.google.com/file/d/18Ak0rZ5LvOlIkul4gOCT8cYKzVEpz0Ak/view?usp=sharing</a></li>
        <li>Fiscalía General de la República (septiembre, 2015). Protocolo de investigación ministerial, policial y pericial para el delito de feminicidio (pp.25.32). <a href="https://drive.google.com/file/d/1coPrYSoTVHsExN3Wo3UlcP8yunJdcs_7/view?usp=sharing" target="_blank">https://drive.google.com/file/d/1coPrYSoTVHsExN3Wo3UlcP8yunJdcs_7/view?usp=sharing</a>
        </li>
        <li>Olimpia y Simone. (2021, 9 de febrero). A un año del feminicidio de Ingrid Escamilla.  <em>Voces feministas.mx.</em> <a href="https://vocesfeministas.mx/a-un-ano-del-feminicidio-de-ingrid-escamilla/" target="_blank">https://vocesfeministas.mx/a-un-ano-del-feminicidio-de-ingrid-escamilla/</a></li>
        <li>(S/A).(2020, 11 de febrero). Ingrid Escamilla había denunciado a su pareja por violencia; se pedirá pena máxima: Sheinbaum. <em>Etcétera.</em> <a href="https://etcetera.com.mx/nacional/ingrid-escamilla-habia-denunciado-su-pareja-por-violencia-se-pedira-pena-maxima-sheinbaum" target="_blank">https://etcetera.com.mx/nacional/ingrid-escamilla-habia-denunciado-su-pareja-por-violencia-se-pedira-pena-maxima-sheinbaum</a></li>
        <li>(S/A). ( 2020,21 de febrero). ¿Quién es Erick Francisco Robledo? Todo sobre el feminicida de Ingrid Escamilla. <em>Revista Mag.</em> <a href="https://elcomercio.pe/mag/historias/ingrid-escamilla-erick-francisco-robledo-el-feminicida-que-desollo-a-su-pareja-quien-es-erick-francisco-robledo-rosas-nnda-nnlt-noticia/#google_vignette" target="_blank">https://elcomercio.pe/mag/historias/ingrid-escamilla-erick-francisco-robledo-el-feminicida-que-desollo-a-su-pareja-quien-es-erick-francisco-robledo-rosas-nnda-nnlt-noticia/#google_vignette</a></li>
        <li>Mata, A. O. (2020, 11 de febrero). Ingrid y su asesino tenían una relación extraña: vecinos. <em>Excelsior.</em> <a href="https://www.excelsior.com.mx/comunidad/ingrid-y-su-asesino-tenian-una-relacion-extrana-vecinos/1363540" target="_blank">https://www.excelsior.com.mx/comunidad/ingrid-y-su-asesino-tenian-una-relacion-extrana-vecinos/1363540</a></li>
    </ul>
    <h3>Para el profesorado</h3>
    <ul class="ul-disc">
    <li>Lagarde, M. (2005) <em>Por la vida y la libertad de las mujeres.</em> 1er Informe Sustantivo de Actividades.</li>
    <li>H. Congreso de la Unión.</li>
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
