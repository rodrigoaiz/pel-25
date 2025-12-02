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
  <h2>Pensamiento Critico</h2>

      <div class="mx-auto max-w-lg">
  <?php
       renderImage ('hu2-u4-presentacion.webp', 'El diálogo es fundamental para el pensamiento crítico. Foto de Luisalvaz.', 
       'https://commons.wikimedia.org/wiki/File:Presentaci%C3%B3n_del_libro_Pa%C3%ADs_sin_techo_de_Carla_Escoffi%C3%A9_en_Aquelarre_39.jpg', 'Wikipedia Commons.');
  ?>
        </div>

  <p>El pensamiento crítico puede ser una herramienta poderosa para abordar y enfrentar los efectos de la posmodernidad en la sociedad contemporánea.</p>

  <p>
    El pensamiento crítico nos anima a cuestionar las narrativas y metanarrativas dominantes que perpetúan desigualdades y exclusiones. 
    Podemos examinar y analizar críticamente las ideologías y las estructuras de poder subyacentes en las narrativas culturales, políticas 
    y económicas.
    </p>

    <p>
        El pensamiento crítico nos permite desarrollar habilidades de análisis y evaluación para comprender y evaluar la información, 
        las ideas y los argumentos que nos rodean. Podemos aprender a discernir entre la información confiable y la desinformación, y 
        a evaluar críticamente las fuentes y los discursos.
    </p>

    <p>
        El pensamiento crítico nos impulsa a desarrollar la empatía y la comprensión hacia diferentes culturas, perspectivas y experiencias. 
        Nos permite cuestionar nuestros propios prejuicios y estereotipos, y buscar un diálogo intercultural constructivo y respetuoso.
    </p>

    <p>
        El pensamiento crítico nos anima a participar en el diálogo y la discusión abierta con otras personas, incluso aquellas con opiniones 
        diferentes a las nuestras. Esto nos permite ampliar nuestra comprensión, considerar diferentes puntos de vista y trabajar juntos para
         abordar los desafíos y las injusticias.
    </p>

    <p>
        El pensamiento crítico nos invita a reflexionar sobre nuestras propias creencias, valores y suposiciones. Podemos examinar críticamente 
        nuestras propias perspectivas y privilegios, y ser conscientes de cómo nuestras acciones y decisiones pueden contribuir a los problemas 
        o a las soluciones.
    </p>

    <p>
        El pensamiento crítico nos ayuda a tomar decisiones y acciones informadas y responsables. Nos permite considerar las implicaciones éticas 
        y sociales de nuestras elecciones y acciones, y buscar formas de contribuir positivamente al cambio social y cultural.
    </p>

  <?php ob_start(); ?>
  <p>Antes de concluir, te invitamos a resolver el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t3a2', "Pensamiento crítico", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Ahora te invitamos a realizar la evaluación final de la unidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t3a3', "Cuestionario final Unidad 4", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>