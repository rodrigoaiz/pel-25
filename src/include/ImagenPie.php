<?php
  function renderImage($img, $piedefoto = null, $link = '#', $textolink = '', $useShadow = false, $imgClass = '')
  {
    // Clases base con sombra opcional y clases adicionales
    $class = 'my-0 min-w-full' . ($useShadow ? ' shadow-lg' : '') . (!empty($imgClass) ? ' ' . $imgClass : '');

    // Renderizar la imagen y el pie de foto
    echo '<img class="' . $class . '" src="' . PATH_IMAGES . $img . '" alt="' . $piedefoto . '" />';
    echo '<p class="text-center text-sm mt-2 mb-3">' . $piedefoto .
         ($link && $textolink ? ' <a href="' . $link . '" target="_blank" rel="noreferrer">' . $textolink . '</a>' : '') .
         '</p>';
  }
?>
