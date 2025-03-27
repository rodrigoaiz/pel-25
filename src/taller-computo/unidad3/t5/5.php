<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Referencias</h2>
  <ul id="biblio" class="ul-disc">
    <li>Bravo, A. y Martínez, F. (s.f.). <em>Concepto y notación de función y gráfica de una función</em>. Recuperado de <a href="https://prometeo.matem.unam.mx/recursos/Bachillerato/DGEE_DGTIC_IMATE/recursos/2_117/index.html" target="_blank"> https://prometeo.matem.unam.mx/recursos/Bachillerato/DGEE_DGTIC_IMATE/recursos/2_117/index.html</a></li>
    <li>Centro de Innovación Educativa Regional-Sur. (24 de mayo de 2017). <em>¿Para qué sirve una parábola en la vida real?</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=CZpRhyR0MyQ" target="_blank"> https://www.youtube.com/watch?v=CZpRhyR0MyQ</a></li>
    <li>Fhybea. (s. f.). <em>Función cuadrática</em>. Recuperado de <a href="https://www.fhybea.com/funcion-cuadratica" target="_blank"> https://www.fhybea.com/funcion-cuadratica</a></li>
    <li><em>Función cuadrática o parábola</em>. (s. f.). Recuperado de <a href="https://www.problemasyecuaciones.com/funciones/parabolica/funcion-cuadratica-parabolica-vertice-puntos-corte-canonica-factorizada-problemas-resueltos.html" target="_blank"> https://www.problemasyecuaciones.com/funciones/parabolica/funcion-cuadratica-parabolica-vertice-puntos-corte-canonica-factorizada-problemas-resueltos.html</a></li>
    <li>Guzmán, J. (3 de junio de 2022). <em>Dominio y rango de funciones lineales</em>. Recuperado de <a href="https://www.neurochispas.com/wiki/dominio-y-rango-de-funciones-lineales/" target="_blank"> https://www.neurochispas.com/wiki/dominio-y-rango-de-funciones-lineales/</a></li>
    <li>IngenioVirtual. (6 de noviembre de 2019). <em>Tipos de gráficos y diagramas para la visualización de datos</em>. Recuperado de <a href="https://www.ingeniovirtual.com/tipos-de-graficos-y-diagramas-para-la-visualizacion-de-datos/" target="_blank"> https://www.ingeniovirtual.com/tipos-de-graficos-y-diagramas-para-la-visualizacion-de-datos/</a></li>
    <li>JULIAN CLASES. (26 de abril de 2021). <em>GRAFICAR y ANALIZAR UNA FUNCIÓN CUADRÁTICA | FUNCIÓN CUADRÁTICA</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=XxH-tKW2ctw" target="_blank"> https://www.youtube.com/watch?v=XxH-tKW2ctw</a></li>
    <li>Juliana la profe. (22 de junio de 2020). <em>FUNCIÓN LINEAL Análisis completo: dominio, rango, cero raíz , intervalo de positividad y negatividad</em> [Vídeo]. Recuperado de <a href="https://www.youtube.com/watch?v=TZjT0JmVJ_Q" target="_blank"> https://www.youtube.com/watch?v=TZjT0JmVJ_Q</a></li>
    <li>Matemóvil. (1 de enero de 2021). <em>Función lineal, ejercicios resueltos</em>. Recuperado de <a href="https://matemovil.com/funcion-lineal-ejercicios-resueltos/" target="_blank"> https://matemovil.com/funcion-lineal-ejercicios-resueltos/</a></li>
    <li><em>Positividad y negatividad de una función lineal</em>. (2 de junio de 2022). Recuperado de <a href="https://www.tutorela.es/matematicas/positividad-y-negatividad-de-una-funcion-lineal" target="_blank"> https://www.tutorela.es/matematicas/positividad-y-negatividad-de-una-funcion-lineal</a></li>
    <li>Soloaga, C. (26 de mayo de 2023). <em>Diagramas de dispersión, qué son y cómo crearlos en pocos pasos</em>. Recuperado de <a href="https://www.socialmediapymes.com/diagrama-de-dispersion/" target="_blank"> https://www.socialmediapymes.com/diagrama-de-dispersion/</a></li>
    <li>Soporte técnico de Microsoft. (s. f.). <em>Presentar los datos en un gráfico de dispersión o en un gráfico de líneas</em>. Recuperado de <a href="https://support.microsoft.com/es-es/topic/presentar-los-datos-en-un-gr%C3%A1fico-de-dispersi%C3%B3n-o-en-un-gr%C3%A1fico-de-l%C3%ADneas-4570a80f-599a-4d6b-a155-104a9018b86e" target="_blank"> https://support.microsoft.com/es-es/topic/presentar-los-datos-en-un-gr%C3%A1fico-de-dispersi%C3%B3n-o-en-un-gr%C3%A1fico-de-l%C3%ADneas-4570a80f-599a-4d6b-a155-104a9018b86e</a></li>
  </ul>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
