<?php
function renderSaberContent($SaberContent, $SaberTitulo = "Para saber más")
{
  ob_start();
?>
  <div class="w-full mt-5 bg-greenown/40">
    <div class="max-w-screen-lg mx-auto py-5 text-darkown px-5 md:px-2">
      <h3 class="uppercase font-bold w-100 border-b-2 border-dashed border-b-darkown mb-5"><?php echo htmlspecialchars($SaberTitulo); ?></h3>
      <?php
      if (isset($SaberContent)) {
        echo $SaberContent;
      } else {
        echo "Contenido no disponible.";
      }
      ?>
    </div>
  </div>
<?php
  ob_end_flush();
}
?>