<?php

function renderiseazy($iseazyId, $iseazyTitle = "Recurso iseazy", $iseazyWrapper = "max-w-7xl")
{
  if ($iseazyId) {
?>
</section>
  <article class="<?php echo htmlspecialchars($iseazyWrapper); ?> mx-auto">
    <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
      <iframe
        title="<?php echo htmlspecialchars($iseazyTitle); ?>"
        frameborder="0"
        width="100%"
        height="100%"
        class="absolute top-0 left-0 w-full h-full"
        src="https://iseazy.com/dl/<?php echo htmlspecialchars($iseazyId); ?>"
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
