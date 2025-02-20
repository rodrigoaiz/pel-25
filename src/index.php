<?php
include_once 'config.php';
include BASE_PATH . '/include/header1.php';

// Cargar el menú desde el JSON
$menuData = json_decode(file_get_contents(BASE_PATH . '/menu.json'), true);
$menu = $menuData['menu'];

include BASE_PATH . '/include/menu.php';


// ID de la página actual (puedes obtenerlo de la URL o de otra fuente)
$currentPageId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<title>Programa de Regularización e Iniciación a la Docencia - Portada</title>
</head>



<body>

  <?php renderMenu($menu); ?>
  <?php renderMenuMoodle(); ?>
  <main>
    <section>
      <h1 class="text-3xl text-orange-own font-titulos">asdPrograma de Regularización e Iniciación a la Docencia</h1>
      <p>Para el Colegio de Ciencias y Humanidades (CCH) es fundamental contar con una planta docente comprometida con el aprendizaje de las y los estudiantes, y que posea una sólida formación disciplinaria, pedagógica y didáctica.</p>
      <p>Por ello, pone a disposición de la comunidad docente de reciente ingreso el Programa de Regularización e Iniciación a la Docencia (PRID), el cual tiene como objetivo comprender el Modelo Educativo del CCH y, a partir de sus postulados, fortalecer la reflexión sobre el quehacer docente, la adquisición de conocimientos, habilidades disciplinarias, didácticas, pedagógicas y principios éticos para impartir alguna de las materias del Plan de Estudios vigente de las Áreas y Departamentos Académicos del CCH.</p>
      <h3 class="text-2xl">El Programa está conformado por cuatro módulos de trabajo:</h3>
      <ul class="list-disc text-xl gap-3 flex flex-col mb-3">
        <li>Modelo Educativo del Colegio (30 h).</li>
        <li>La metodología didáctica en las áreas del Colegio (20 h).</li>
        <li>Taller de planeación didáctica (30 h).</li>
        <li>Aplicación y evaluación de la planeación de una clase (40 h).</li>
      </ul>
      <p>Durante este tiempo tendrás el acompañamiento y apoyo de las y los impartidores, profesores de amplia experiencia en el Colegio. Para evaluarte se tomarán en cuenta tu participación y presencia virtual en las sesiones sincrónicas, así como haber realizado en su totalidad las actividades en línea.</p>
      <div class="text-2xl xl:my-10 text-center text-blueown font-bold bg-bluelightown px-2 py-3 max-w-screen-md mx-auto shadow-xl">
        Te invitamos a conocer uno de los proyectos educativos de nivel medio superior más importantes del país; que, a lo largo de sus más de cincuenta años de existencia, ha formado ciudadanos y ciudadanas capaces de incidir en la transformación de su contexto.
      </div>
      <div class="w-full text-center">
        <div class="hover:-translate-y-1 transform transition-all duration-100 block"><a href="<?php echo BASE_URL . '/modulo-1'; ?>" class="bg-orangeown px-4 py-3 text-xl font-black uppercase text-white rounded-xl shadow-md shadow-darkown/50 ">Iniciar Programa</a></div>
      </div>
    </section>
    <div class="w-full xl:mt-10">
      <img class="block mx-auto" src="<?php echo ASSET_URL . '/img/comunidad.webp'; ?>" alt="comunidad cch">
    </div>
  </main>
  <script src="<?php echo BASE_URL; ?>/js/bundle.js"></script>
  <?php
  // Función para eliminar BOM
  function removeBOM($text)
  {
    if (substr($text, 0, 3) === "\xEF\xBB\xBF") {
      $text = substr($text, 3);
    }
    return $text;
  }

  // Incluir archivos sin BOM
  ob_start();
  require_once BASE_PATH . '/include/footer.php';
  $footerContent = ob_get_clean();
  echo removeBOM($footerContent);

  ob_start();
  require_once BASE_PATH . '/include/footer2.php';
  $footer2Content = ob_get_clean();
  echo removeBOM($footer2Content);
  ?>