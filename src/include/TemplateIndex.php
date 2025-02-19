<?php
include_once BASE_PATH . '/config.php';
include BASE_PATH . '/include/header1.php';


?>
<title>234</title>
</head>


<body>
  <?php renderMenu($menu); ?>

  <main>
    <section>
      <h1>123</h1>
    </section>
    <?php echo $content; ?>
  </main>

  <?php
  // Incluir archivos sin BOM
  ob_start();
  require_once BASE_PATH . '/include/footer.php';
  $footerContent = ob_get_clean();


  ob_start();
  require_once BASE_PATH . '/include/footer2.php';
  $footer2Content = ob_get_clean();

  ?>
</body>

</html>