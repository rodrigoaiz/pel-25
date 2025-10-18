<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Explica los conceptos de salud y enfermedad</h2>
  <p>Los conceptos de salud (Lat. <em>salus</em>, que significa entero, intacto) y enfermedad (Lat. <em>infirmitas</em>, que significa falto de firmeza), han ido cambiando a lo largo del tiempo, dependiendo de las necesidades de cada persona, grupo o sociedad, del contexto del que se trate, de la época, etc. La salud y la enfermedad forman parte de la vida y de los procesos biológicos de los seres vivos y así mismo, las interacciones con el medio ambiente y las relaciones sociales.</p>
  <p>La Organización Mundial de la Salud, reconoce que la salud es un recurso fundamental para la vida, y un derecho humano fundamental; en 1948 la define de la siguiente manera: “<strong>estado de completo bienestar físico, mental y social, y no solamente la ausencia de afecciones o enfermedades</strong>”.</p>
  <p>Sin embargo, esta definición ha recibido críticas de diversos autores por considerarla utópica, estática y subjetiva.</p>
  <p>Algunos investigadores han propuesto su concepto de salud, como Rene Dubos que en 1956 dijo “La salud es un estado físico y mental razonablemente libre de incomodidad y dolor, que permite a la persona en cuestión, funcionar efectivamente por el más largo tiempo posible en el ambiente donde por elección está ubicado”. Alessandro Seppilli en 1971, la define como:</p>
  <blockquote class="blockquote-destacado">
    <p>Una condición de equilibrio funcional, tanto mental como físico, conducente a una integración dinámica del individuo en su ambiente natural y social”. Milton Terris en 1975 determinó que la “Salud es un estado de bienestar físico, mental y social y la capacidad para funcionar y no meramente la ausencia de enfermedad o incapacidad.</p>
  </blockquote>
  <div class="flex gap-x-10 relative">
    <img class="max-w-1/3 h-fit sticky top-0 self-start" src="<?php echo PATH_IMAGES . 'u1-presion-arterial-saludable.webp'; ?>">
    <article>
      <p>Según la Organización Mundial de la Salud la enfermedad es una “alteración o desviación del estado fisiológico en una o varias partes del cuerpo, por causas en general conocidas, manifestadas por síntomas y signos característicos, y cuya evolución es más o menos previsible”. En otras palabras, una enfermedad es una afección que padece un ser vivo, que consiste en el cambio de su estado normal de salud.</p>
      <p>El concepto de enfermedad a lo largo de la historia, ha sido definido de acuerdo a la comprensión y el conocimiento médico de la época. Antiguamente, se asociaba a menudo con causas místicas o castigos divinos, mientras que en la actualidad se basan en causas biológicas y científicas. La enfermedad es una parte más de la vida y la salud en general. Es imposible evitar la enfermedad dentro del proceso biológico, como parte natural de la interacción del individuo con el mundo que le rodea, tanto a nivel ambiental como en el contacto con otros seres humanos, animales, y materias en general.</p>
      <p>Además de la definición de enfermedad que da la OMS, otros autores la consideran como: según Claude Bernard biólogo y médico francés, la define como “una desviación de la fisiología normal”, Georges Canguilhem filósofo y médico francés en 1971 describe a la enfermedad como “el estado anormal (patológico), que predispone al organismo a un resultado adverso, dañino y susceptible de ser tratado”. Lenox afirma que la enfermedad “es un estado corporal y que tal estado recorta el valor de la vida en comparación al promedio de individuos de la misma clase” y Temple en 2001 dice que “la enfermedad es un estado que, al tomar lugar en un individuo incrementa el riesgo para consecuencias adversas”.</p>
    </article>
  </div>
</section>
<div class="flex items-center justify-center max-w-7xl mx-auto gap-10">
  <div class="max-w-1/2">
    <?php
    renderImage('u1-la-visita-de-la-madre.webp', 'La obra representa a una madre visitando a su hija, que se halla enferma y en la sala de un hospital.', 'https://es.wikipedia.org/wiki/Enfermedad#/media/Archivo:La_visita_de_la_madre_al_hospital,_de_Enrique_Paternina_Garc%C3%ADa_Cid_(Museo_del_Prado).jpg', 'recuperado el 7 de noviembre de 2023.');
    ?>
  </div>
  <div class="max-w-1/2">
    <?php
    renderImage('u1-the-doctor.webp', 'Famosa pintura relacionada con la enfermedad titulada El Doctor, de Sir Luke Fildes de 1891', 'https://es.wikipedia.org/wiki/Enfermedad#/media/Archivo:The_Doctor_-_Joseph_Tomanek,_after_Luke_Fildes.jpg', 'recuperado el 7 de noviembre de 2023.');
    ?>
  </div>
</div>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
