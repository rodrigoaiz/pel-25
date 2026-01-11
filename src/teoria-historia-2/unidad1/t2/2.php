<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2> La Historiografía Romántica y Nacionalista </h2>

<p>
  El desarrollo de las ideas nacionalistas en Europa tiene uno de sus posibles orígenes de la expansión napoleónica por el continente. 
  A la caída del imperio, el congreso de Viena, al buscar la restauración de las monarquías, redefine el mapa de Europa y en esta 
  restauración se dividen territorios correspondientes a diversas nacionalidades, por lo cual se desarrollan sentimientos de identidad 
  nacional, asociados principalmente a la lengua e historia. Se busca exaltar los valores de una nación, la cual se identifica, en 
  especial en el caso francés, con la patria, personificada como una mujer, Mariane, desde la Revolución Francesa, y, en este caso es 
  la patria liberal, tal como se representa en el cuadro de Eugene Delacroix, <b> La libertad guiando al pueblo. </b>
</p>

<p>
  Así que, al estudiar cómo se escribe la historia del siglo XIX, el concepto de la historia, así como los principales problemas que 
  trata a partir del concepto de nacionalismo, dentro del entorno cultural del romanticismo. Para estos fines, te presentamos a un 
  historiador representante de esta corriente Jules Michelet.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-la_libertad_guiando_al_pueblo_de_Eugene_Delacroix.webp', 'A partir del periodo romántico, la imagen de la patria y 
  de la libertad se representan como una mujer. Bajo esta idea, el amor a la patria es la mayor expresión de amor que puede tener el ser 
  humano. La imagen es de Eugene Delacroix y se llama la libertad guiando al pueblo.', 'https://es.wikipedia.org/wiki/La_Libertad_guiando_al_pueblo#/media/Archivo:Eugène_Delacroix_-_Le_28_Juillet._La_Liberté_guidant_le_peuple.jpg', 
'Wikimedia Commons.');
?>
</div>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>