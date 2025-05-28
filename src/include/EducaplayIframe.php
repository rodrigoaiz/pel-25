<?php

function renderEducaplay($educaplayId, $educaplayWrapper = "max-w-7xl")
{
  if ($educaplayId) {
?>
</section>
  <article class="<?php echo htmlspecialchars($educaplayWrapper); ?> mx-auto">
    <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
      <iframe

        frameborder="0"
        width="100%"
        height="100%"
        class="absolute top-0 left-0 w-full h-full"
        src="https://es.educaplay.com/juego/<?php echo htmlspecialchars($educaplayId); ?>"
        type="text/html"
        allow="fullscreen; autoplay; allow-top-navigation-by-user-activation"
        allowfullscreen
      >
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
