<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Cambio de referentes</h2>
  <p>Como ya mencionábamos antes, en un texto escrito el referente es el objeto, la cosa, el asunto o el tema del que se habla. En una obra escrita, el referente se construye al interior del texto mediante un conjunto de valores que el autor le atribuye gracias al uso de diversos recursos lingüísticos como la adjetivación. Para observar cómo se construye el referente leamos el siguiente relato de Juan José Arreola:</p>

  <div class="max-w-xs mx-auto">
    <?php
    renderImage('tlriid2-u1t2p1img1.webp', 'Juan José Arreola', 'https://commons.wikimedia.org/wiki/File:Juan_Jos%C3%A9_Arreola.jpg', 'Wikimedia Commons');
    ?>
  </div>
</section>

<div class="my-6 max-w-3xl mx-auto">
  <div class="border-l-4 border-indigo-500 bg-indigo-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-indigo-500 px-5 py-2">
      <p class="font-bold text-white tracking-wide text-lg">Baby H. P.</p>
    </div>
    <div class="px-6 py-5">
      <blockquote class="font-serif text-gray-800 space-y-4">
        <p>Señora ama de casa: convierta usted en fuerza motriz la vitalidad de sus niños. Ya tenemos a la venta el maravilloso Baby H. P., un aparato que está llamado a revolucionar la economía hogareña.</p>
        <p>El Baby H. P. es una estructura de metal muy resistente y ligera que se adapta con perfección al delicado cuerpo infantil, mediante cómodos cinturones, pulseras, anillos y broches. Las ramificaciones de este esqueleto suplementario recogen cada uno de los movimientos del niño, haciéndolos converger en una botellita de Leyden que puede colocarse en la espalda o en el pecho, según necesidad. Una aguja indicadora señala el momento en que la botella está llena. Entonces usted, señora, debe desprenderla y enchufarla en un depósito especial, para que se descargue automáticamente. Este depósito puede colocarse en cualquier rincón de la casa, y representa una preciosa alcancía de electricidad disponible en todo momento para fines de alumbrado y calefacción, así como para impulsar alguno de los innumerables artefactos que invaden ahora, y para siempre, los hogares.</p>
        <p>De hoy en adelante usted verá con otros ojos el agobiante ajetreo de sus hijos. Y ni siquiera perderá la paciencia ante una rabieta convulsiva, pensando que es fuente generosa de energía. El pataleo de un niño de pecho durante las veinticuatro horas del día se transforma, gracias al Baby H. P., en unos útiles segundos de tromba licuadora, o en quince minutos de música radiofónica.</p>
        <p>Las familias numerosas pueden satisfacer todas sus demandas de electricidad instalando un Baby H. P. en cada uno de sus vástagos, y hasta realizar un pequeño y lucrativo negocio, transmitiendo a los vecinos un poco de energía sobrante. En los grandes edificios de departamentos pueden suplirse satisfactoriamente las fallas del servicio público, enlazando todos los depósitos familiares.</p>
        <p>El Baby H. P. no causa ningún trastorno físico ni psíquico en los niños, porque no cohíbe ni trastorna sus movimientos. Por el contrario, algunos médicos opinan que contribuye al desarrollo armonioso de su cuerpo. Y por lo que toca a su espíritu, puede despertarse la ambición individual de las criaturas, otorgándoles pequeñas recompensas cuando sobrepasen sus récords habituales. Para este fin se recomiendan las golosinas azucaradas, que devuelven con creces su valor. Mientras más calorías se añadan a la dieta del niño, más kilovatios se economizan en el contador eléctrico.</p>
        <p>Los niños deben tener puesto día y noche su lucrativo H. P. Es importante que lo lleven siempre a la escuela para que no se pierdan las horas preciosas del recreo de las que ellos vuelven con el acumulador rebosante de energía.</p>
        <p>Los rumores acerca de que algunos niños mueren electrocutados por la corriente que ellos mismos generan son completamente irresponsables. Lo mismo debe decirse sobre el temor supersticioso de que las criaturas provistas de un Baby H. P. atraen rayos y centellas. Ningún accidente de esta naturaleza puede ocurrir, sobre todo si se siguen al pie de la letra las indicaciones contenidas en los folletos explicativos que se obsequian con cada aparato.</p>
        <p>El Baby H. P. está disponible en las buenas tiendas en distintos tamaños, modelos y precios. Es un aparato moderno, durable y digno de confianza, y todas sus coyunturas son extensibles. Lleva la garantía de fabricación de la casa J. P. Mansfield &amp; Sons, de Atlanta, III.</p>
        <p class="text-right text-sm text-gray-500 font-medium">Juan José Arreola</p>
      </blockquote>
    </div>
  </div>
</div>

<section>
  <p>Como habrás observado, en el relato el referente es el Baby H.P., un artículo &ldquo;novedoso&rdquo; que el enunciador (en este caso el narrador-vendedor) desea mostrar al enunciatario, o sea, a las amas de casa. El narrador describe su producto como &ldquo;maravilloso&rdquo;, dice que &ldquo;está llamado a revolucionar la economía hogareña&rdquo;, que es &ldquo;lucrativo&rdquo; y &ldquo;contribuye al desarrollo armonioso&rdquo; del cuerpo del bebé. Finalmente, asevera que el Baby H.P. &ldquo;Es un aparato moderno, durable y digno de confianza&rdquo;. En este proceso de creación del referente, los adjetivos tienen un papel importante porque vuelven atractivo al producto.</p>
  <p>Sin embargo, los recursos lingüísticos también pueden usarse para desacreditar al referente, exhibiendo sus defectos o fallas. Así, podríamos imaginar que pertenecemos a una compañía con intereses económicos contrarios a la empresa que produce el Baby H.P., entonces nos apoyaríamos en &ldquo;Los rumores acerca de que algunos niños mueren electrocutados por la corriente que ellos mismos generan...&rdquo; y luego escribir un panfleto que comience de este modo:</p>

  <div class="my-6 max-w-3xl mx-auto border-l-4 border-rose-400 bg-rose-50 rounded-r-lg px-6 py-4">
    <p class="font-serif text-gray-800 italic">Señora ama de casa: no exponga la vida de sus niños. El Baby H. P. es un aparato siniestro que ha sumido en el dolor a muchos hogares de familia humildes y bien intencionadas.</p>
  </div>

  <p>Ahora te invitamos a que cambies el modo de presentar el referente en los párrafos segundo, tercero, cuarto, quinto y sexto. Recuerda que debes mostrar los defectos que el producto tiene y el peligro que representa para los niños. Te recomendamos que hagas tu reescritura en el cuaderno. Luego que la hayas concluido, sube a la plataforma tu texto para que lo revise tu asesor(a).</p>

  <?php ob_start(); ?>
  <p>Reescribe los párrafos segundo, tercero, cuarto, quinto y sexto del relato <em>Baby H. P.</em> cambiando el modo de presentar el referente: muestra los defectos del producto y el peligro que representa para los niños. Sube tu archivo a la plataforma.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t2a1', "Subida de archivo: Cambio de referente", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>