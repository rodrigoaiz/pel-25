<?php

function renderVideoIframe($videoUrl, $videoTitle = null)
{
  if ($videoUrl) {
?>
    <article>
      <lite-youtube class="aspect-video" videoid="<?php echo htmlspecialchars($videoUrl); ?>"></lite-youtube>
      <?php echo $videoTitle ? '<p class="text-sm text-slate-700 text-center">' . htmlspecialchars($videoTitle) . '</p>' : ''; ?>
    </article>

<?php
  } else {
    echo "URL del video no proporcionada.";
  }
}
?>
