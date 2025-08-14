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
   <h2>La guerra de Vietnam</h2>

   <h3>Origen, Desarrollo y Fin de la Guerra de Vietnam</h3>

    <p>La Guerra de Vietnam es uno de los conflictos más icónicos del siglo XX, ya que involucró a las fuerzas armadas de Estados Unidos y a los guerrilleros comunistas vietnamitas del Viet Cong, así como al ejército regular de Vietnam del Norte. La guerra se libró durante casi dos décadas y tuvo profundas implicaciones en la política, la sociedad y la cultura de Estados Unidos y Vietnam.</p>

    <?php
       renderImage('hu2-u3-helicoptero.webp', 'Helicópteros norteamericanos en Vietnam (1966). Imagen de Madmax32', 'https://upload.wikimedia.org/wikipedia/commons/f/fc/UH-1D_helicopters_in_Vietnam_1966.jpg', 'Wikimedia Commons.');
    ?>

    <p>La Guerra de Vietnam tuvo sus raíces en el proceso de descolonización que se produjo en el sudeste asiático después de la Segunda Guerra Mundial. Francia había colonizado Indochina, que incluía a Vietnam, Laos y Camboya, durante el siglo XIX. Sin embargo, tras la derrota de Francia por parte de las fuerzas japonesas en la Segunda Guerra Mundial, Ho Chi Minh, líder comunista vietnamita, proclamó la independencia de Vietnam en 1945. Esto marcó el inicio de la lucha por la independencia y la guerra contra las fuerzas coloniales francesas.</p>

    <?php
       renderImage('hu2-u3-minh.webp', 'Ho-Chi-Min (centro), en 1950. Imagen de Musée Annam.', 'https://upload.wikimedia.org/wikipedia/commons/9/9d/Ho-chi-Minh_with_children_%284%29.jpg', 'Wikimedia Commons.');
    ?>

    <p>La guerra de independencia de Vietnam contra Francia, conocida como la Primera Guerra de Indochina (1946-1954), culminó en la histórica Batalla de Dien Bien Phu en 1954, donde las fuerzas vietnamitas lograron derrotar a las fuerzas francesas. Esto llevó a la Conferencia de Ginebra, que dividió Vietnam en dos zonas temporales a lo largo del paralelo 17, con el compromiso de celebrar elecciones unificadas en 1956 para determinar el futuro del país.</p>

    <p>La división de Vietnam en dos zonas separadas, Vietnam del Norte y Vietnam del Sur, sentó las bases para el conflicto subsiguiente. Vietnam del Norte, bajo el liderazgo de Ho Chi Minh y respaldado por la Unión Soviética y China, se convirtió en una república comunista, mientras que Vietnam del Sur, bajo el liderazgo de Ngo Dinh Diem y con el apoyo de Estados Unidos, mantuvo un régimen no comunista.</p>

    <p>Vietnam del Sur experimentó agitación política y disturbios civiles, lo que llevó a la intervención militar estadounidense. En 1965, el presidente Lyndon B. Johnson ordenó el despliegue de tropas estadounidenses en una guerra que rápidamente se convirtió en una lucha contra las guerrillas comunistas del Viet Cong en el sur. Estados Unidos justificó su intervención en términos de la "teoría dominó", argumentando que si Vietnam del Sur cayera bajo control comunista, otros países del sudeste asiático seguirán su ejemplo cayendo como fichas de dominó, una tras otra.</p>

    <?php
       renderImage('hu2-u3-lyndon.webp', 'Lyndon B. Johnson, presidente de Estados Unidos al inicio de la guerra de Vietnam. Imagen de fae.', 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Lyndon_B._Johnson_campaigning_for_John_F._Kennedy-_Jacksonville%2C_Florida_%288008859865%29.jpg', 'Wikimedia Commons.');
    ?>

    <p>La Guerra de Vietnam se intensificó a medida que aumentó la presencia estadounidense. Se llevaron a cabo operaciones de bombardeo masivo en Vietnam del Norte y se desplegaron cientos de miles de tropas estadounidenses en Vietnam del Sur. La guerra se volvió cada vez más impopular en Estados Unidos, lo que llevó a protestas y movimientos contra la guerra. El conflicto en Vietnam también atrajo la atención internacional. Las conversaciones de paz en París se convirtieron en un escenario diplomático clave, pero no se llegó a un acuerdo significativo. La Guerra de Vietnam se convirtió en un símbolo de la Guerra Fría y de la lucha contra el imperialismo estadounidense. Los Estados Unidos buscaron una solución política, pero la falta de progreso en las negociaciones y la creciente oposición doméstica hicieron que la guerra se volviera insostenible.</p>

    <?php
       renderImage('hu2-u3-paz.webp', 'Estudiantes Americanos protestan contra la guerra de Vietnam. Imagen de Fences and windows.', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Student_Vietnam_War_protesters.JPG', 'Wikimedia Commons.');
    ?>

    <p>En 1973, se firmó el Acuerdo de Paz de París, que puso fin a la participación militar estadounidense en Vietnam. Las tropas estadounidenses se retiraron y los prisioneros de guerra fueron liberados. Sin embargo, el acuerdo no logró resolver las cuestiones fundamentales del conflicto, y la guerra continuó en el terreno entre Vietnam del Norte y Vietnam del Sur. El 30 de abril de 1975, las fuerzas comunistas de Vietnam del Norte capturaron Saigón, la capital de Vietnam del Sur. Esta victoria marcó el final de la Guerra de Vietnam y la reunificación del país bajo un gobierno comunista. Vietnam del Sur dejó de existir como entidad independiente.</p>

    <p>La Guerra de Vietnam tuvo un costo humano y económico masivo para todos los involucrados. Estados Unidos perdió más de 58,000 soldados, y millones de vietnamitas perdieron la vida. La guerra dejó cicatrices profundas en la sociedad estadounidense y desencadenó una era de desconfianza hacia el gobierno.Estados Unidos experimentó una profunda división interna y una reevaluación de su papel en el mundo, mientras que Vietnam enfrentó desafíos en la reconstrucción de su país y la gestión de las consecuencias del conflicto.</p>

    <p>Si deseas complementar tus conocimientos de este importante acontecimiento, te recomendamos ver el documental de Televisión Española, titulado “La guerra de los diez mil días”, donde se da cuenta de todos los detalles que nos permiten comprender la complejidad de estos sucesos en la historia.</p>

     <?php
      renderVideoIframe('AvbC9Vmm52U', 'La guerra de los diez mil días');
      ?>

    <?php ob_start(); ?>
    <p>Para consolidar nuestros aprendizajes, te invitamos a realizar el siguiente reto.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t3a2', "La guerra de Vietnam", $ActividadContent);
    ?>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
