<?php
//  require_once('/sites/moodles/html/modeloeducativo/config.php');
//  require_login(10);

?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--<meta http-equiv="Expires" content="0" />
        <meta http-equiv="Pragma" content="no-cache" />-->
  <meta name="description" content="Para el Colegio de Ciencias y Humanidades es fundamental contar con una planta docente comprometida con el aprendizaje de las y los estudiantes, y que posea una sólida formación disciplinaria, pedagógica y didáctica. Por ello, pone a disposición de la comunidad docente de reciente ingreso el Programa De Regularización e Iniciación a la Docencia, el cual tiene como objetivo comprender el Modelo Educativo del CCH y, a partir de sus postula dos, fortalecer la reflexión sobre el quehacer docente, la adquisición de conocimientos, habilidades disciplinarias, didácticas, pedagógicas y principios éticos para impartir alguna de las materias del Plan de Estudios vigente de las Áreas y Departamentos Académicos del CCH.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Estilos -->
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/styles.css">
  <?php if ($include_latex): ?>
    <script>
      window.MathJax = {
        tex: {
          inlineMath: [['\\(', '\\)']],
          displayMath: [['$$', '$$']],
          processEscapes: true,
          processEnvironments: true
        },
        options: {
          ignoreHtmlClass: 'no-mathjax|nav|header|footer',
          processHtmlClass: 'mathjax_process'
        }
      };
    </script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <?php endif; ?>
