<?php
function renderActividad($ActividadContent, $ActividadTitulo = "Para Actividad más")
{
?>
  <div class="w-full mt-10 border-t-4 border-dashed border-t-slate-300">
    <div class="max-w-screen-lg mx-auto py-5 text-darkown px-5 md:px-2">
      <h3 class="uppercase font-bold mb-5 flex justify-start items-center gap-3"><img class="h-10 bg-greenown p-2 rounded-xl" src="<?php echo PATH_ICONS ?>pencil.svg" alt="Icono Actividad"><?php echo htmlspecialchars($ActividadTitulo); ?></h3>
      <?php
      if (!empty($ActividadContent)) {
        echo $ActividadContent;
      } else {
        echo "Contenido no disponible.";
      }
      ?>
    </div>
  </div>
<?php
}
?>