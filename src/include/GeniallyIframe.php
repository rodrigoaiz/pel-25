<?php

function renderGenially($geniallyId, $geniallyTitle = "Genially Content", $geniallyWrapperClass = "genially-wrapper", $geniallyWidth = "100%", $geniallyHeight = "100%")
{
  if ($geniallyId) {
?>
</section>
  <article class="<?php echo htmlspecialchars($geniallyWrapperClass); ?> max-w-7xl mx-auto">
    <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
      <iframe
        title="<?php echo htmlspecialchars($geniallyTitle); ?>"
        frameborder="0"
        width="<?php echo htmlspecialchars($geniallyWidth); ?>"
        height="<?php echo htmlspecialchars($geniallyHeight); ?>"
        class="absolute top-0 left-0 w-full h-full"
        src="https://view.genially.com/<?php echo htmlspecialchars($geniallyId); ?>"
        type="text/html"
        allowscriptaccess="always"
        allowfullscreen="true"
        scrolling="yes"
        allownetworking="all">
      </iframe>
    </div>
  </article>
<section>
<?php
  } else {
    echo "ID del recurso no proporcionado.";
  }
}
?>
