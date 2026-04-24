<?php
include_once PATH_INCLUDE . 'ImagenPie.php';

function renderTarjetasImagen($items)
{
  echo '<div class="space-y-6 my-8">';

  foreach ($items as $item) {
    $titulo = htmlspecialchars($item['titulo'] ?? '');
    $etiqueta = htmlspecialchars($item['etiqueta'] ?? '');
    $subtitulo = htmlspecialchars($item['subtitulo'] ?? '');
    $descripcion = htmlspecialchars($item['descripcion'] ?? '');
    $imagen = $item['imagen'] ?? null;
    $pie = htmlspecialchars($item['pie'] ?? '');
    $link = $item['link'] ?? '#';
    $fuente = $item['fuente'] ?? '';
    $puntos = $item['puntos'] ?? [];

    echo '<article class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm md:grid md:grid-cols-[16rem_1fr]">';
    echo '<div class="bg-slate-100 p-4 flex items-center">';

    if ($imagen) {
      echo '<div class="w-full">';
      renderImage($imagen, $pie, $link, $fuente, true, 'rounded-md object-cover');
      echo '</div>';
    } else {
      echo '<div class="flex min-h-64 w-full items-center justify-center rounded-md border border-dashed border-slate-300 bg-slate-50 px-4 text-center">';
      echo '<p class="my-0 text-sm text-slate-500">' . $pie . '<br><span class="text-xs">Espacio para imagen</span></p>';
      echo '</div>';
    }

    echo '</div>';
    echo '<div class="p-5 md:p-6">';

    if ($etiqueta !== '') {
      echo '<p class="my-0 text-sm font-semibold uppercase tracking-wide text-secondary">' . $etiqueta . '</p>';
    }

    echo '<h3 class="mt-1 mb-2 text-2xl">' . $titulo . '</h3>';

    if ($subtitulo !== '' || $descripcion !== '') {
      echo '<p class="mb-4">';
      if ($subtitulo !== '') {
        echo '<strong>' . $subtitulo . '.</strong> ';
      }
      echo $descripcion . '</p>';
    }

    if (!empty($puntos)) {
      echo '<ul class="mb-0">';
      foreach ($puntos as $punto) {
        echo '<li>' . htmlspecialchars($punto) . '</li>';
      }
      echo '</ul>';
    }

    echo '</div>';
    echo '</article>';
  }

  echo '</div>';
}
?>
