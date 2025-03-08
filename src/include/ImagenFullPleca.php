<?php
function renderImageComponent($imageSrc, $justifyClass, $piedefoto, $link = '#', $textolink = '')
{
  $mdJustifyClass = 'justify-center ' . 'md:' . $justifyClass;
?>
  </section>
  <div class="w-full my-4 relative z-0">
    <div class="w-full bg-orange-own min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <div class="max-w-3xl flex <?php echo $mdJustifyClass; ?> mx-auto">
      <div class="flex flex-col">
        <img class="z-10 max-w-full md:max-w-[25rem] mx-10" src="<?php echo PATH_IMAGES . $imageSrc; ?>" alt="">
        <p class="text-center text-sm mt-1 mb-2">
          <?php echo $piedefoto; ?>
          <?php if ($link && $textolink): ?>
            <a href="<?php echo $link; ?>" target="_blank" rel="noreferrer"><?php echo $textolink; ?></a>
          <?php endif; ?>.
        </p>
      </div>
    </div>
  </div>
  <section>
  <?php
}
  ?>
