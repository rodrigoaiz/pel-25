<?php
  function renderImage($img, $piedefoto = null, $link = '#', $textolink = '')
  {
    echo '<img class="my-0 min-w-full" src="' . PATH_IMAGES . $img . '" alt="'.$piedefoto.'" />';
    echo '<p class="text-center text-sm mt-2 mb-3">' . $piedefoto .
         ($link && $textolink ? ' <a href="' . $link . '" target="_blank" rel="noreferrer">' . $textolink . '</a>' : '') .
         '</p>';
  }
?>
