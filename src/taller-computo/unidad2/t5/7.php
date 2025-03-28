<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Daños en la salud por el uso de hardware</h3>
  <h4>Lesiones y su prevención</h4>
  <p>En esta parte explicaremos cómo el uso inadecuado de hardware puede llevar a diferentes tipos de lesiones y problemas de salud. Es importante comprender cómo nuestras acciones pueden afectar nuestra salud en el entorno digital.</p>
  <h4>Lesiones comunes por uso inadecuado de Hardware</h4>
  <p><strong>Síndrome del túnel carpiano</strong>: Este problema afecta las manos y muñecas debido a una postura inadecuada al usar el teclado y el mouse por largos periodos.</p>
  <p><strong>Fatiga visual</strong>: Mirar la pantalla durante mucho tiempo puede causar fatiga ocular, sequedad y visión borrosa.</p>
  <p><strong>Dolor de cuello y espalda</strong>: Adoptar una postura incorrecta mientras se trabaja en la computadora puede generar dolor en cuello y espalda.</p>
  <div class="grid md:grid-cols-2 gap-4">
    <div>
      <?php renderImage("u2_t5_trabajador_independiente.webp", "Lesiones por el uso de hardware. Imagen de user18526052.", "https://www.freepik.es/foto-gratis/toma-interior-trabajador-independiente-sentado-kithen-mesa-frente-cuaderno-blanco-mirando-fijamente-pantalla-portatil-tratando-notar-algo-importante-mantiene-mano-cuello_18326387.htm#query=dolor%20por%20usar%20la%20computadora&position=6&from_view=search&track=ais&uuid=83a75dfd-39f5-4e1d-87ec-0d3d264e74e2", 'Freepik.') ?>
    </div>
    <div>
      <?php renderImage("u2_t5_joven_empleada.webp", "Fatiga visual. Imagen de karlyukav.", 'https://www.freepik.es/foto-gratis/concepto-moderno-tecnologia-trabajo-personas-retrato-joven-empleada-cansada-mono-quitandose-anteojos-masajeando-su-puente-nariz-sintiendose-estresada-mucho-trabajo_11284591.htm#query=fatiga%20visual&position=5&from_view=search&track=ais&uuid=7bde43b4-8d08-4ef6-9ee6-b91280985b62', 'Freepik.') ?>
    </div>
  </div>
  <h4>Prevención de lesiones</h4>
  <ul class="ul-disc">
    <li><strong>Postura adecuada</strong>: Mantener la espalda recta, los pies apoyados en el suelo y los brazos en un ángulo cómodo al escribir.</li>
    <li><strong>Pausas regulares</strong>: Tomar descansos cortos cada 30-45 minutos para estirar el cuerpo y relajar los ojos.</li>
    <li><strong>Ergonomía</strong>: Ajustar la altura y la inclinación del monitor, usar una silla con soporte lumbar y teclado y mouse ergonómicos.</li>
    <li><strong>Ejercicios de estiramiento</strong>: Realizar ejercicios de estiramiento suaves para aliviar la tensión muscular y mejorar la circulación.</li>
    <li><strong>Iluminación adecuada</strong>: Asegurarse de que la iluminación del entorno sea adecuada y evitar reflejos en la pantalla.</li>
    <li><strong>Descanso visual</strong>: Aplicar la regla "20-20-20": cada 20 minutos, mirar a 20 pies de distancia durante al menos 20 segundos.</li>
  </ul>
  <?php renderImagePleca('u2_t5_streatching.webp', 'Estiramientos. Imagen DCStudio.', 'https://www.freepik.es/foto-gratis/mujer-cansada-trabajando-casa-streatching-despues-escribir-computadora-portatil-altas-horas-noche-empleado-enfocado-ocupado-utilizando-tecnologia-inalambrica-red-tecnologia-moderna-haciendo-horas-extraordinarias-trabajo-lectura-escritura-busqueda_18115979.htm#query=estiramientos%20computadora&position=0&from_view=search&track=ais&uuid=ba031203-5d20-4122-83e3-264829c67a7b', 'Freepik.', 'justify-center') ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
