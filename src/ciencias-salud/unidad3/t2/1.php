<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Describe los cambios biológicos, psicológicos y socioculturales que tienen lugar durante la adolescencia.</h2>

  <p>La <b>adolescencia</b> (del Lat. <i>dolescens</i> o <i>adulescens</i>, que significa crecer o robustecer), es la transición de la niñez a la adultez, en la cual ocurren una serie de cambios biológicos, psicológicos y sociales. Esta etapa consiste principalmente en transformaciones físicas y el desarrollo del pensamiento abstracto, la exploración de roles sociales, la formación de la identidad, entre otros.  En esta fase se incluyen los cambios biológicos y los psicosociales.</p>

  <p>La adolescencia se inicia con la pubertad, la cual en las niñas comienza con la <b>telarquia</b>, que consiste en el desarrollo de los senos, el crecimiento del vello púbico, y la aparición de la primera menstruación o <b>menarquia</b> que ocurre dos años después de la telarquia. En los niños inicia con el aumento de tamaño de los testículos, el crecimiento del pene y el desarrollo del vello púbico.</p>

  <p>La <b>pubertad</b> (del Lat. <i>pubertas</i> que significa edad fértil) - con ella se inicia la adolescencia. Aquí se observa el desarrollo físico y la maduración sexual con lo cual se adquiere la capacidad reproductiva. Todos estos cambios están controlados por las hormonas principalmente por los estrógenos y la testosterona. Este es un proceso de cambios principalmente físicos y biológicos. En la siguiente lista pueden verse los cambios más significativos que ocurren en esta etapa.</p>

 <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-atravez.webp', 'Jóvenes atravesando la pubertad.', 'https://www.freepik.es/vector-gratis/grupo-jovenes-posando-foto_5230715.htm#query=pubertad&position=24&from_view=keyword&track=sph&uuid=f581b6b6-4e16-46ff-a3de-50c21c251d8d', 'Freepik.');
  ?>
 </div>

 <h2>Características sexuales secundarias en las niñas </h2>

    <ul>

        <li>Desarrollo de los senos.</li>

        <li>Crecimiento del vello púbico y axilar.</li>

        <li>Aumento de grasa en muslos, caderas y glúteos.</li>

        <li>Desarrollo muscular que se refiere al tono y masa.</li>

        <li>Incremento del peso y la estatura.</li>

        <li>Cambios en el útero: aumenta de tamaño, engrosamiento del endometrio y se realiza la menstruación, se desarrolla la capa muscular y adquiere la capacidad de contraerse.</li>

        <li>Cambios en la vagina: aumenta de tamaño y sus paredes se vuelven más elásticas, el epitelio se engrosa, el pH se vuelve más ácido y hay mayor lubricación.</li>

        <li>Cambios en los ovarios: maduran los folículos y se lleva a cabo la ovulación, mayor producción de las hormonas, estrógenos y progesterona.</li>

    </ul>

    <h2>Características sexuales secundarias en los niños</h2>

    <ul>

        <li>Crecimiento de los testículos y del pene.</li>

        <li>Aumento de la masa, el tono muscular, la fuerza y resistencia física.</li>

        <li>Desarrollo del vello facial, pectoral, abdominal, axilar y púbico.</li>

        <li>El tórax y los hombros se ensanchan.</li>

        <li>La voz se vuelve grave y profunda.</li>

        <li>Aparición de la manzana de Adan.</li>

        <li>Incremento del peso y la estatura.</li>

        <li>Cambios en los testículos: maduran los espermatozoides y se lleva a cabo la producción de testosterona.</li>

        <li>Mayor producción de sebo lo que favorece la aparición de acné.</li>

    </ul>

    <div class="mx-auto max-w-lg">
        <?php
          renderImage('u3-t1-caracteres.webp', 'Caracteres sexuales secundarios en los adolescentes.', 'https://upload.wikimedia.org/wikipedia/commons/b/b3/Jovenes-sexuaidad-intro.jpg', 'Freepik.');
        ?>
    </div>

  <p>La adolescencia es un periodo que incluye los cambios físicos de la pubertad, y el desarrollo emocional, psicológico y sociocultural que ocurren durante esta etapa. Algunos de los cambios psicológicos y socioculturales que se pueden observar en los adolescentes son  la búsqueda y el desarrollo de la identidad personal, incluyendo la formación de valores, creencias y metas personales, demanda de mayor privacidad e independencia, desarrollo del pensamiento abstracto (es decir piensan de forma más lógica y crítica), razonamiento moral (manejo de conceptos morales y éticos), presentan cambios emocionales importantes y son muy susceptibles a las críticas. Es muy importante la aceptación social y crear nuevas amistades, la relación con los pares y el desarrollo de la autoestima.</p>


  <?php ob_start(); ?>
  <p>Después de leer el artículo “Embarazo adolescente” participa en el foro con tus compañeros, iniciando una discusión a partir de las siguientes preguntas generadoras. Recuerda que debes ser respetuoso de las opiniones de los demás, aun cuando no estés de acuerdo con ellas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a1', "Foro de discusión", $ActividadContent);
  ?>


 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
