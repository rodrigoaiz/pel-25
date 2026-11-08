<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <!-- ✏️ Tu contenido va aquí, entre <section> y </section>. -->
<h2>Inventos que cambiaron la vida diaria</h2>
<p>Muchos objetos que hoy son comunes nacieron en esta época.</p>

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Invento</th>
        <th>Año</th>
        <th>Qué cambió</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Proceso Bessemer para fabricar acero</td>
        <td>1856</td>
        <td>El acero se volvió barato y se usó en vías de tren, puentes y edificios.</td>
      </tr>
      <tr>
        <td>Lámpara eléctrica de Edison</td>
        <td>1879</td>
        <td>Las casas y las calles se iluminaron sin fuego.</td>
      </tr>
      <tr>
        <td>Automóvil de Benz</td>
        <td>1886</td>
        <td>Apareció un transporte individual con motor de combustión.</td>
      </tr>
    </tbody>
  </table>
</div>

<img class="mx-auto max-w-xs" src="<?php echo PATH_IMAGES . 'edison-lampara.webp'; ?>" alt="Dibujo de la patente de la lámpara eléctrica de Thomas A. Edison, de 1880.">

<h3>Cambios en la sociedad</h3>
<ol class="ol-number">
  <li>Millones de personas dejaron el campo para trabajar en las fábricas de las ciudades.</li>
  <li>Las jornadas eran largas y los obreros empezaron a organizarse en sindicatos.</li>
  <li>Los países industrializados buscaron materias primas y mercados en otros continentes.</li>
</ol>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
