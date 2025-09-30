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
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

<h2>Las ideas revolucionarias </h2>

<p> 
  La Revolución Francesa aporta un nuevo sentido a las ideas de 
  <span style="color: #FF0000;">Libertad</span>, 
  <span style="color: #FF0000;">Derechos del Ciudadano</span>,
  <span style="color: #FF0000;">Pueblo</span>, 
  entre otras, las cuales se retomarán no sólo para la explicación del sentido de la Historia en el periodo que te presentamos, 
  sino que impactaron en el campo político pues permitieron explicar las transformaciones tan rápidas de este periodo.
</p>


<p> 
  Las ideas revolucionarias no fueron exclusivas para Francia, sino que se extendieron por toda Europa, principalmente, a partir del 
 <span style="color: #FF0000;">periodo napoleónico</span>. Así, al convertirse en un peligro para los gobiernos monárquicos, a la 
 derrota del imperio de Napoleón, se convoca al  <span style="color: #FF0000;">Congreso en Viena</span>, con el fin de restaurar el 
 orden político previo a la Revolución, el Antiguo Régimen, como una reacción política frente a las ideas libertarias. Así se formarán 
 y utilizarán dos conceptos en la explicación tanto de la política como de la historia a partir del siglo XIX: el 
 <span style="color: #FF0000;">liberalismo</span>, como una corriente política que, con base a las ideas de la Revolución, busca 
 las libertades individuales y políticas de las sociedades y el pensamiento  <span style="color: #FF0000;">reaccionario</span>, 
 identificado con la idea de volver al momento previo a la revolución, con el fin de conservar los privilegios tanto de la monarquía, 
 como del clero, y se identifica como el pensamiento  <span style="color: #FF0000;">conservador</span>. Ambos conceptos, liberal y 
 conservador, se manifestarán en una corriente de pensamiento que surge durante la segunda década del siglo XIX y que influirá no sólo 
 en los elementos artísticos, sino también en las formas políticas y de explicación de la historia; esta corriente es el 
  <span style="color: #FF0000;">romanticismo</span>.
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-pergamino__sindicato_obrero_sociedad_ingenieros_unidos.webp', 'Las primeras formas de organización sindical y de 
  discusión política se dieron en cafés, donde se reunían obreros y discutían sobre sus condiciones de trabajo o sobre ideas políticas. 
  La imagen representa uno de estos lugares, en Inglaterra, donde se desarrolla, hacia 1830 una asamblea sindical, prohibida.', 
  'https://collection.sciencemuseumgroup.org.uk/objects/co67275/chromolithograph-amalgamated-society-of-engineers-machinists-by-blades-print', 'CC BY-NC-SA');
?>
</div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
