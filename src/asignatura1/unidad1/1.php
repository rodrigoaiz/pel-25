<?php
include_once dirname(__DIR__, 2) . '/include/templateContent.php';
ob_start();
?>
  que tal
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>