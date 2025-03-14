<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Referencias</h3>
  <ul id="biblio" class="ul-disc">
    <li>Cruz, A. L. (2023). <em>Representación y Comunicación de la Información - ENiUN</em>. Recuperado de <a href="https://www.eniun.com/representacion-comunicacion-informacion/#1_Representacion_de_la_informacion" target="_blank">https://www.eniun.com/representacion-comunicacion-informacion/#1_Representacion_de_la_informacion</a></li>
    <li>Educar Portal. (11 de julio de 2019). <em>Microaprendizaje: ¿Cómo se representa la información?</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=7s8UqW8xk1A" target="_blank">https://www.youtube.com/watch?v=7s8UqW8xk1A</a></li>
    <li><em>El código ASCII</em>. (s. f.). Recuperado de <a href="https://elcodigoascii.com.ar/" target="_blank">https://elcodigoascii.com.ar/</a></li>
    <li>History Latinoamérica. (18 de junio de 2021). <em>¿Cómo funciona el código binario? - LA GRAN HISTORIA</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=oTuYAqeZaBw" target="_blank">https://www.youtube.com/watch?v=oTuYAqeZaBw</a></li>
    <li>Martín, G., Toledo, F., y Cerverón, V. (1995). Capítulo 4. Aritmética y representación de la información en el computador [PDF]. En <em>Fundamentos de Informática y Programación</em>. España: Universidad de Valencia. Recuperado de <a href="http://informatica.uv.es/docencia/fguia/TI/Libro/PDFs/CAPI4.pdf" target="_blank">http://informatica.uv.es/docencia/fguia/TI/Libro/PDFs/CAPI4.pdf</a></li>
    <li>Mártil, I. (2015, 16 junio). <em>Almacenamiento óptico de datos: CD, DVD y BD</em>. Recuperado de <a href="https://blogs.publico.es/ignacio-martil/2017/10/25/almacenamiento-optico-de-datos-cd-dvd-y-bd/" target="_blank">https://blogs.publico.es/ignacio-martil/2017/10/25/almacenamiento-optico-de-datos-cd-dvd-y-bd/</a></li>
    <li>Pasos por ingeniería. (1 de junio de 2021). <em>¿QUÉ ES EL CÓDIGO ASCII? (Explicación del código alfanumérico ASCII)</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=QbX7D7XDAWE" target="_blank">https://www.youtube.com/watch?v=QbX7D7XDAWE</a></li>
    <li>Rivera, A. (2022). Sistema de numeración: expresando cantidades. <em>Plataforma Educativa Luca: Curso en línea y Aprendizaje Esperado</em>. Recuperado de <a href="https://www.lucaedu.com/sistema-de-numeracion/" target="_blank">https://www.lucaedu.com/sistema-de-numeracion/</a></li>
    <li>Quiroga, E. (16 de junio de 2015). <em>Unidades de disquete, CD y DVD | Observatorio Tecnológico</em>. Recuperado de <a href="http://recursostic.educacion.es/observatorio/web/eu/equipamiento-tecnologico/hardware/250-eduardo-quiroga-gomez" target="_blank">http://recursostic.educacion.es/observatorio/web/eu/equipamiento-tecnologico/hardware/250-eduardo-quiroga-gomez</a></li>
    <li>TeoCom. (21 de mayo de 2020). <em>CODIFICACIÓN y DECODIFICACIÓN | Fundamentos de COMUNICACIÓN</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=_zphD-F5b5Y" target="_blank">https://www.youtube.com/watch?v=_zphD-F5b5Y</a></li>
    <li>Wikipedia. (2023). <em>Disco Blu-ray</em>. En wikipedia.org. Recuperado de <a href="https://es.wikipedia.org/wiki/Disco_Blu-ray" target="_blank">https://es.wikipedia.org/wiki/Disco_Blu-ray</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
