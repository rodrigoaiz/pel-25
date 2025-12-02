<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>La operación Cóndor</h2>

      <p>La Operación Cóndor fue una red de inteligencia y represión política coordinada entre las dictaduras militares de varios países de América del Sur y respaldada por Estados Unidos durante las décadas de 1970 y 1980. Fue concebida como una respuesta conjunta de las dictaduras de Argentina, Chile, Brasil, Paraguay, Uruguay, y posteriormente Bolivia y Perú, para eliminar opositores políticos y combatir el comunismo y la subversión de izquierda en la región.</p>

      <p>En este contexto debemos de recordar que de acuerdo con la doctrina Truman, Estados Unidos “apoyaría” a los pueblos libres a combatir el comunismo, también debemos recordar que, a raíz de la doctrina Monroe que había sido establecida incluso antes de la primera guerra mundial, América Latina había sido definida como área de influencia exclusiva de Estados Unidos por cuestiones de seguridad nacional, lo cual era aún más apremiante después de la segunda guerra mundial debido a la influencia de las ideas comunistas en varios movimientos descolonizadores e independentistas de todo el mundo.</p>

      <p>Antes de continuar, te invitamos a revisar el siguiente video para introducirnos al tema de las dictaduras.</p>

      <?php
      renderVideoIframe('5_RClqmxQ1Q', 'Autoritarismo en América Latina y el plan cóndor.');
    ?>

    <?php
       renderImage('hu2-u3-condor.webp', 'El cóndor es el ave representativa de América del Sur.Imagen de Snowmanstudios.', 'https://commons.wikimedia.org/wiki/File:Peru_-_Colca_Canyon_-_Andean_condor_(Vultur_gryphus)_01.jpg', 'Wikimedia Commons.');
    ?>



    <p>La operación Cóndor llevó a cabo numerosos secuestros, torturas, asesinatos y desapariciones forzadas de personas consideradas subversivas o peligrosas para los regímenes militares. Las víctimas incluían a activistas políticos, periodistas, intelectuales, sindicalistas y cualquier persona que fuera percibida como una amenaza para los regímenes autoritarios de la época. El nombre "Operación Cóndor" se cree que proviene de un código utilizado por los servicios de inteligencia involucrados, y hace referencia al cóndor, un ave rapaz que se encuentra en los Andes sudamericanos.</p>

    <p>Las dictaduras que participaron en la Operación Cóndor fueron responsables de violaciones masivas de derechos humanos en sus respectivos países. Algunos de los líderes más prominentes de estas dictaduras fueron Augusto Pinochet en Chile, Jorge Rafael Videla en Argentina, Alfredo Stroessner en Paraguay, y Ernesto Geisel en Brasil, entre otros. En las décadas siguientes, muchos de los responsables de los crímenes cometidos durante la Operación Cóndor fueron juzgados y condenados por violaciones a los derechos humanos en sus respectivos países. Sin embargo, el impacto de esta operación sigue siendo significativo en la memoria colectiva de la región y en la lucha por la justicia y la verdad histórica.</p>

    <h3>La guerra sucia en Argentina</h3>

    <p>La "Guerra Sucia" en Argentina se refiere a un período de represión estatal y violaciones sistemáticas de los derechos humanos que tuvo lugar durante las décadas de 1970 y 1980. Fue una parte importante de la historia del país que se caracterizó por la persecución y eliminación de opositores políticos por parte de las fuerzas armadas y las fuerzas de seguridad del gobierno militar que gobernó Argentina desde 1976 hasta 1983.</p>

    <?php
       renderImage('hu2-u3-videla.webp', 'Rafael Videla 1980. Imagen de Lali (ArchivoUNLP).', 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Jorge_Rafael_Videla_visita_la_Universidad_Nacional_de_La_Plata_en_1980_02.jpg', 'Wikimedia Commons.');
    ?>
    <p>La Guerra Sucia comenzó oficialmente con el golpe de Estado del 24 de marzo de 1976, que derrocó al gobierno democráticamente elegido de Isabel Perón. La junta militar que tomó el poder bajo el liderazgo del general Jorge Rafael Videla instauró un régimen autoritario que implementó una estrategia de represión brutal contra cualquier forma de disidencia política y social. Durante este período, miles de personas fueron secuestradas, torturadas, asesinadas o desaparecidas forzosamente.</p>

    <p>Las Madres de la Plaza de Mayo son un grupo de mujeres que jugaron un papel fundamental en la denuncia de los abusos cometidos durante la Guerra Sucia. Estas valientes mujeres, en su mayoría madres y abuelas de las víctimas, se reunieron en la Plaza de Mayo en Buenos Aires, frente a la Casa Rosada, la sede del gobierno, para reclamar información sobre sus seres queridos desaparecidos y para exigir justicia. Vistiendo pañuelos blancos en la cabeza, símbolo de la lucha por la verdad y la justicia, estas mujeres se convirtieron en un poderoso símbolo de resistencia y de denuncia de los abusos del régimen militar.</p>

    <?php
       renderImage('hu2-u3-madres.webp', 'Madres de la Plaza de Mayo en protesta 1984. Imagen de Mónica Hasenberg.', 'https://commons.wikimedia.org/w/index.php?search=M%C3%B3nica+Hasenberg&title=Special%3AMediaSearch&type=image', 'Wikimedia Commons.');
    ?>

    <p>Las Madres de la Plaza de Mayo y otras organizaciones de derechos humanos jugaron un papel fundamental en la visibilización de la violencia estatal, en la presión para que se conociera la verdad sobre lo que sucedía y en la lucha por la justicia. Su activismo y perseverancia contribuyeron en gran medida a la restauración de la democracia en Argentina en 1983 y a la posterior búsqueda de justicia y reparación para las víctimas de la Guerra Sucia. La lucha por la memoria, la verdad y la justicia sigue siendo un tema importante en la sociedad argentina hasta el día de hoy, y las Madres de la Plaza de Mayo siguen siendo una fuerza influyente en la defensa de los derechos humanos en el país.</p>

    <?php ob_start(); ?>
    <p>Antes de continuar, reforcemos nuestros aprendizajes con el siguiente reto.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t4a1', "Política de Estados Unidos en Latinoamérica", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
