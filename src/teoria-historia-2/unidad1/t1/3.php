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

<h2>Las ideas revolucionarias </h2>

<p> 
  La Revolución Francesa aporta un nuevo sentido a las ideas de
 <?php renderTooltip('Libertad', 'El concepto de libertad en la historia moderna se desarrolla por John Locke y por autores de la 
  Ilustración Francesa. La libertad se considera un derecho de todo ser humano por nacimiento.'); ?>,
<?php renderTooltip('Derechos del ciudadano', 'En 1789, la Asamblea Nacional promulga los Derechos del Hombre y del Ciudadano, entre 
los cuales se encuentran los siguientes: libertad, la propiedad, la seguridad y la resistencia a la opresión.'); ?>,
<?php  renderTooltip('Pueblo','La palabra pueblo puede tener distintos significados, pero como la emplearon los autores del siglo XIX 
implicaba que una comunidad se identificará a partir de un territorio, cultura, tradiciones e historia común. El concepto de pueblo se 
desarrolla a partir de las ideas de la Ilustración y el liberalismo.'); ?>,
entre otras, las cuales se retomarán no sólo para la explicación del sentido de la Historia en el periodo que te presentamos, 
  sino que impactaron en el campo político pues permitieron explicar las transformaciones tan rápidas de este periodo.
</p>


<p> 
  Las ideas revolucionarias no fueron exclusivas para Francia, sino que se extendieron por toda Europa, principalmente, a partir del 
 <?php renderTooltip('periodo napoleónico','Periodo que va de 1799 a 1815, años en los cuales la figura política más importante tanto 
 en Francia como, a partir de 1804, en toda Europa es Napoleón Bonaparte. Abarca dos periodos históricos: el Consulado, de 1799 a 1804 
 y el Imperio de 1804 a 1815.'); ?>. 
 Así, al convertirse en un peligro para los gobiernos monárquicos, a la derrota del imperio de Napoleón, se convoca al  
 <?php renderTooltip('Congreso en Viena','Tras la derrota de Napoleón, las potencias europeas, Prusia, Rusia, Austria e Inglaterra, se 
 reúnen en Viena para redefinir el mapa de Europa y, bajo el principio de legitimidad, buscan restaurar los gobiernos absolutistas e 
 impulsar un programa conservador en lo político.');?>, 
 con el fin de restaurar el orden político previo a la Revolución, el Antiguo Régimen, como una reacción política frente a las ideas 
 libertarias. Así se formarán y utilizarán dos conceptos en la explicación tanto de la política como de la historia a partir del siglo XIX: el 
 <?php renderTooltip('liberalismo','El liberalismo se desarrolla a partir del siglo XVIII y considera la libertad, tanto económica como 
 política el máximo valor y la busca no sólo en el Estado, sino fundamentalmente en el individuo, pues sólo a través de la libertad puede 
 darse el ejercicio político, a partir de las libertades y derechos del ciudadano.'); ?>, 
 como una corriente política que, con base a las ideas de la Revolución, busca las libertades individuales y políticas de las sociedades 
 y el pensamiento 
 <?php renderTooltip('reaccionario','El término se aplica a quienes buscan revivir un régimen político anterior al presente. Se utilizó 
 este término desde la crisis de la revolución francesa hacia 1799 cuando actores políticos buscaban restaurar el poder monárquico. 
 A partir del siglo XIX, se identifica con la ideología conservadora'); ?>, 
 identificado con la idea de volver al momento previo a la revolución, con el fin de conservar los privilegios tanto de la monarquía, 
 como del clero, y se identifica como el pensamiento 
 <?php renderTooltip ('conservador','Corriente política que busca restaurar los principios del Antiguo Régimen, tanto en lo social, 
 como en lo económico y con un fuerte referente moral y religioso. Se opone a los principios revolucionarios y liberales.'); ?>. 
 Ambos conceptos, liberal y conservador, se manifestarán en una corriente de pensamiento que surge durante la segunda década del siglo 
 XIX y que influirá no sólo en los elementos artísticos, sino también en las formas políticas y de explicación de la historia; esta 
 corriente es el 
 <?php renderTooltip('romanticismo','El término se aplica a quienes buscan revivir un régimen político anterior al presente. Se utilizó 
 este término desde la crisis de la revolución francesa hacia 1799 cuando actores políticos buscaban restaurar el poder monárquico. A 
 partir del siglo XIX, se identifica con la ideología conservadora.'); ?>.
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
