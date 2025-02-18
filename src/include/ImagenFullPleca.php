<?php
function renderImageComponent($imageSrc, $justifyClass)
{
  $mdJustifyClass = 'justify-center ' . 'md:' . $justifyClass;
?>
  </section>
  <div class="w-full my-4 relative z-0">
    <div class="w-full bg-greenown min-h-20 absolute translate-y-full origin-center z-0">
    </div>
    <div class="max-w-screen-lg flex <?php echo $mdJustifyClass; ?> w-full mx-auto">
      <img class="z-10 max-w-full md:max-w-[22rem] mx-10" src="<?php echo $imageSrc; ?>" alt="">
    </div>
  </div>
  <section>
  <?php
}
  ?>