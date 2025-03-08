<?php
  function renderImage($img, $piedefoto, $link = '#', $textolink = '')
  {
    echo '<img class="my-0" src="' . PATH_IMAGES . $img . '" alt="'.$piedefoto.'" />';
    echo '<p class="text-center text-sm mt-1 mb-2">' . $piedefoto .
         ($link && $textolink ? ' <a href="' . $link . '" target="_blank" rel="noreferrer">' . $textolink . '</a>' : '') .
         '.</p>';
  }
?>
