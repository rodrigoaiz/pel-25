<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
   <h2>La descolonización en el marco de la Guerra Fría</h2>

    <p>Después de 1945, un nuevo factor contribuyó a la polarización entre comunismo y capitalismo. Se trata de la descolonización; con dicho término, nos referimos a los procesos de liberación de las regiones que habían estado bajo control económico y político de los grandes imperios desde fines del siglo XIX. La descolonización dio como resultado una reconfiguración geopolítica pero, aunque surgieron naciones libres, sus posibilidades de alcanzar un desarrollo en términos económicos y una estabilidad política han encontrado hasta la fecha numerosos obstáculos. El proceso de descolonización se considera aún inacabado, pues los dominadores cortaron de tajo el desarrollo cultural de muchos pueblos, dejando además conflictos entre las poblaciones locales que aún no terminan de resolverse.</p>

    <?php
       renderImage('hu2-u3-argelia.webp', '1954 Ejercito de Liberación Nacional de Argelia luchando contra la ocupación francesa. Imagen de M Todorovic.', 'https://es.wikipedia.org/wiki/Guerra_de_Independencia_de_Argelia#/media/Archivo:National_Liberation_Army_Soldiers_(7).jpg', 'Wikimedia Commons.');
    ?>

    <p>Cómo recordarás, a principios del siglo XX el mundo funcionaba de acuerdo con la lógica del imperialismo colonial. Extensas regiones estaban repartidas entre unas cuantas potencias industriales. Entre otras cosas, esto fue una causa remota de la I y la II Guerras Mundiales. Pero al terminar la II Guerra esas naciones (Inglaterra, Francia, Holanda, Bélgica, Alemania) estaban demasiado devastadas y eran incapaces de mantener sus extensos dominios coloniales.</p>

    <p>Fueron varios los factores que aceleraron el proceso de descolonización, y suelen distinguirse entre factores internos y externos: rivalidad entre élites locales, distanciamiento entre estas, campesinos y trabajadores urbanos; conflictos religiosos, ideas milenaristas y el surgimiento de movimientos nacionalistas pueden considerarse cuestiones internas. El debilitamiento de las potencias coloniales a causa de la Segunda Guerra Mundial, la influencia del comunismo, la presión internacional son factores externos que propiciaron la descolonización.</p>

    <p>Si consideramos la polarización que caracterizó al mundo durante la Guerra Fría, tiene sentido preguntarse. ¿Qué rumbo tomarían las naciones recién formadas? ¿Se sumarían al bloque capitalista, o al socialista?</p>

    <p>En cada región predominaron distintos factores y se emplearon medios distintos para lograr la liberación; en países como Corea y Vietnam, el proceso de liberación derivó en una guerra civil para definir la esfera de influencia en que quedarían incluidos. Veamos esto un poco más de cerca.</p>

    <p>En 1948, Corea del Norte quedó bajo un régimen comunista que dos años después invadió la parte Sur, que era aliada de los Estados Unidos. Esto provocó la Guerra de Corea. El ejército de los Estados Unidos entró en defensa de Corea del Sur, mientras que China y en menor medida la URSS apoyaron a Corea del Norte (hasta la fecha, este país tiene un régimen que se autodefine como comunista, aunque muy autoritario y beligerante en la práctica).</p>

    <?php
       renderImage('hu2-u3-coreas.webp', 'División de Corea del Norte y Corea del Sur. Imagen de Shibo77.', 'https://es.wikipedia.org/wiki/Crisis_en_Corea_de_2013#/media/Archivo:Map_korea_without_labels.png', 'Wikimedia Commons.');
    ?>

    <p>En esa guerra se enfrentaron indirectamente los Estados Unidos y la URSS apoyando al bando partidario del capitalismo y del socialismo, respectivamente.</p>

    <p>Caso similar fue el de Vietnam. Vietnam se encuentra ubicado en la Península de Indochina, que formó parte del Imperio Francés hasta la I Guerra Mundial. Posteriormente esa región fue ocupada por el ejército japonés, en su impulso expansionista sobre el continente. Al terminar la II Guerra Mundial Vietnam logró independizarse de Francia, pero por diferencias en su interior la nueva nación se dividió en dos: Vietnam del Norte, bajo bandera comunista, apoyado por la URSS y China y Vietnam del Sur, capitalista, apoyado por los Estados Unidos. A partir de la división el líder comunista de Vietnam del Norte (Ho Chi Minh) buscó por diversos medios unificar las dos secciones de Vietnam bajo el comunismo.</p>

    <?php
       renderImage('hu2-u3-vietnam.webp', 'Vietnam del Norte (Amarillo) y del Sur (Lila). Imagen de Milenioscuro.', 'https://es.wikipedia.org/wiki/Vietnam_del_Sur#/media/Archivo:Indochina_1954-es.svg', 'Wikimedia Commons.');
    ?>

    <p>Los Estados Unidos, con el pretexto de defender la democracia, enviaron tropas a Vietnam para replegar a los comunistas. Es importante señalar que Vietnam era un país pobre, no industrializado, y con escaso armamento. Aunque recibió cierto apoyo de sus aliados, estaba en notoria desventaja frente al poderío militar de los Estados Unidos. Los vietnamitas combatían mediante la estrategia de Guerra de Guerrillas, con pocos recursos pero un gran apoyo popular. En contraste, los Estados Unidos contaban con armamento avanzado y utilizaron bombardeos con armas químicas sobre la población civil. A pesar de estar en desventaja, Vietnam derrotó al ejército más poderoso del mundo.</p>

    <p>Gradualmente, las naciones antes sometidas a los imperios se fueron liberando. Uno de los emblemas o símbolos de este proceso de liberación es la Independencia de India, que había sido la Joya de la Corona del Imperio británico. En este caso, el líder político Gandhi logró encabezar la lucha por la independencia mediante estrategias de resistencia no violenta. Gandhi se convirtió desde entonces en un símbolo del pacifismo a nivel mundial, aunque él mismo fue víctima de la violencia años más tarde.</p>

    <?php
       renderImage('hu2-u3-gandhi.webp', 'Mahatma Gandhi, líder de la independencia de la India. imagen de Yann.', 'https://es.wikipedia.org/wiki/Mahatma_Gandhi#/media/Archivo:Mahatma-Gandhi,_studio,_1931.jpg', 'Wikimedia Commons.');
    ?>
    
    <?php ob_start(); ?>
    <p>Antes de finalizar esta lección revisemos el siguiente reto para consolidar algunos conceptos importantes.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t2a2', "La descolonización", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <p>Para concluir, realiza el siguiente trabajo para entregar.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t2a3', "La descolonización", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
