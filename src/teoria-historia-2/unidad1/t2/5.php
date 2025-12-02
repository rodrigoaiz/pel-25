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

<h2> Alexis de Tocqueville </h2>

<p>
    En un ambiente marcado por las ideas de libertad política y económica, con el contexto de la Revolución Francesa y el surgimiento 
    de las corrientes de pensamiento conservador, desarrollado a partir del Congreso de Viena, la visión de la historia se divide también 
    en pensadores de tipo liberal y conservador. De los primeros el autor que es el modelo de esta corriente es Alexis de Tocqueville.
</p>

<h3> Alexis de Tocqueville </h3>

<p>
  Nacido en Francia, en 1805 es uno de los principales teóricos del liberalismo político. En su obra La Democracia en América, abre una 
  perspectiva moderna de análisis político, al analizar y comprender la novedad que ofrece la Revolución de Independencia de los Estados 
  Unidos y, en especial su sistema político administrativo, el cual, considera es más moderno y viable que el modelo monárquico europeo.
</p>

<p>   En una carta al conde Louis de Kergorlay fechada el 15 de diciembre de 1850, el autor le escribe: </p>

<p class="citation">
  <b>
    «Me falta hallar en alguna parte, para mis ideas, la base sólida y continua de los hechos. Esto solo puedo encontrarlo escribiendo historia; 
    dedicándome a una época cuyo relato me dé ocasión de pintar a los hombres y a las cosas de nuestro siglo y me permita realizar un cuadro con 
    todas esas pinturas inconexas. Sólo el largo drama de la Revolución Francesa puede dar esta época».
</b>
<b>
    «Me dedicaría, sobre todo, a procurar la comprensión de los principales, a mostrar las diversas causas derivadas de ellos; cómo sobrevino el 
    Imperio; cómo pudo establecerse en medio de la sociedad creada por la Revolución; cuáles fueron los medios de los que se valió; cuál era la 
    verdadera naturaleza del hombre que lo forjó; a qué obedeció su éxito, a qué sus reveses; la influencia pasajera y la influencia perdurable 
    que ha ejercido en los destinos del mundo y, en particular, en los de Francia. A mi parecer, hay en ello materia para un gran libro.
    <i> Pero las dificultades son inmensas. Una de las que más perturban mi espíritu deriva de la mezcla de historia propiamente dicha con la 
    filosofía de la historia. </i> [Cursivas nuestras, nota del editor] Todavía no veo cómo mezclar ambas cosas y sin embargo resulta necesario 
    que así sea, pues podríamos decir que la primera es el lienzo y la segunda el color, y que para hacer el cuadro se requiere tener ambas a la vez. 
    Temo que una dañe a la otra y yo carezca del arte infinito necesario para escoger bien los hechos que deben, por así decirlo, sostener las ideas; 
    referirlos en número suficiente para que el lector sea llevado con naturalidad de una reflexión a otra por el interés del relato, en ver. de contar 
    demasiados a fin de que el carácter de la obra permanezca visible»
</b>
</p>

<p> y más adelante menciona por qué sus cualidades para escribir El Antiguo Régimen y la Revolución: </p>
<p class="citation"> 
<b>
    «Tengo el orgullo de creer que soy la persona más adecuada para aportar en campo semejante una gran libertad de espíritu y para hablar sin pasión 
    ni reticencia de los hombres y de las cosas. Pues, en cuanto a los hombres, por más que hayan vivido en nuestra época, estoy seguro de no sentir 
    por ellos ni amor ni odio: y en cuanto a las formas de las cosas que denominamos constituciones, leyes, dinastías y clases. Estas carecen, por 
    así decirlo, no sólo de valor, sino ni siquiera de existencia ante mis ojos, independientemente de los efectos que produzcan. No tengo tradiciones, 
    carezco de partido, no conozco otra causa que no sea la de la libertad y la dignidad humanas; de ello estoy seguro; y para un trabajo de este tipo, 
    una disposición y un natural de esa especie son tan útiles que con frecuencia resultan nocivos cuando ya no se trata de hablar de los asuntos humanos, 
    sino de mezclarse en ellos»
</b>
</p>

<p> Ya en su obra dice sobre la historia y la libertad lo siguiente: </p>
<p class="citation">
<b>
    «Algunos tal vez me acusen de mostrar en este libro cierto gusto algo intempestivo por la libertad, en la que, según me aseguran, ya nadie se interesa 
    en Francia. Sólo les ruego, a quienes me dirigen tal reproche, tengan a bien considerar que esta inclinación es en mí muy antigua. Hace más de 20 años que, 
    refiriéndome a otra sociedad, escribía yo casi textualmente lo que van a leer.
</b>
<b>
   En medio de las tinieblas del porvenir se pueden ya descubrir tres verdades clarísimas. La primera es que todos los hombres de nuestros días son arrastrados 
   por una fuerza desconocida que se puede esperar regular y moderar, pero no vencer; que tan pronto los impele suavemente, como los precipita hacia la destrucción 
   de la aristocracia; la segunda, que, entre todas las sociedades del mundo, las que mayor dificultad tendrán de librarse por mucho tiempo del gobierno absoluto 
   serán precisamente aquellas sociedades en que la aristocracia haya dejado de existir ahora y para siempre; en fin, la tercera, que el despotismo en ninguna 
   parte puede producir efectos más perniciosos que en dichas sociedades; pues favorece más que ninguna otra clase de gobierno el desarrollo de todos los vicios 
   a los que están sujetas especialmente estas sociedades y, de ese modo, las impulsa hacia el mismo lado en que, siguiendo una tendencia natural, se inclinaban ya»
</b>
<b>
    «¿Qué hombre por naturaleza tendría un alma tan mezquina para preferir depender de los caprichos de uno de sus semejantes antes que obedecer las leyes que él 
    mismo ha contribuido a establecer, si le pareciera que su nación posee las virtudes necesarias para hacer buen uso de la libertad? Creo que no existe. Ni siquiera 
    los déspotas niegan las bondades de la libertad; sólo que no la quieren más que para ellos mismos y señalan que todos los demás son indignos de ella. Así, no 
    diferimos en cuanto a la opinión que se deba tener de la libertad, sino respecto a la mayor o menor estima que se tenga de los hombres, de ahí que se pueda decir 
    de manera rigurosa que el apego que se muestre al gobierno absoluto guarda proporción directa con el desprecio que se profese por su país. Pido que se me permita 
    esperar un poco más antes de convertirme a este sentimiento».
</b>
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-retrato_de_Alexis_de_Tocqueville.webp', 'Alexis de Tocqueville es el ejemplo de los primeros historiadores liberales, al comparar la revolución 
  de independencia norteamericana y la revolución francesa, bajo el concepto de libertad.', 'https://en.wikipedia.org/wiki/Alexis_de_Tocqueville#/media/File:Alexis_de_Tocqueville_(Théodore_Chassériau_-_Versailles).jpg', 
'Wikimedia Commons.');
?>
</div>

<p> Para reafirmar tus conocimientos hasta el momento, elabora la actividad siguiente: </p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a2', "Liberalismo: Alexis de Tocqueville", $ActividadContent);
?>

<h4> Recuerda que la lectura es fundamental para esta materia.</h4>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>