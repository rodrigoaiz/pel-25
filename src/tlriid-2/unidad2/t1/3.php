<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Organización textual: las secuencias</h2>

  <div class="flex justify-center">
    <div class="w-2/3 bg-slate-600/10 border-l-4 border-slate-600 rounded-r-lg px-6 py-4 mb-6">
      <p class="text-slate-800 text-sm font-semibold italic">Emplea la lectura analítica para obtener una comprensión más precisa del texto.</p>
    </div>
  </div>

  <p>A diario, en la escuela y en tus variadas materias, tienes contacto con diferentes textos. También en tu vida cotidiana te enfrentas a un número incalculable de textos que poseen determinadas características, según el propósito de comunicación que cada autor ha elegido para exponer sus ideas.</p>

  <p>Para iniciar con nuestro tema, lo primero es saber qué se entiende como <strong>secuencia</strong>, lo cual &ldquo;se refiere a la estructura con que están dispuestas las ideas o los hechos que el texto comunica, al modo en que están jerarquizadas unas con respecto a otras, lo cual permitirá, por ejemplo, diferenciar entre secuencias <strong>descriptivas</strong>, <strong>narrativas</strong>, <strong>argumentativas</strong>, <strong>expositivas</strong>...&rdquo; <span class="font-light text-sm">(Marta Marín, Lingüística y enseñanza de la lengua, p. 175.)</span> Para que esto quede más claro, veremos las secuencias más significativas:</p>

  <?= TabsComponent([
    'tabs' => [
      [
        'id' => 'descriptiva',
        'label' => 'Secuencia descriptiva',
        'content' =>
        '<p>Es aquella que se ocupa de las características de los objetos, de los lugares, de los animales, de las plantas y por supuesto, de los seres humanos. Describir significa no sólo enumerar los elementos de los que se constituye un todo; se trata de relacionar esos elementos desde el punto de vista del observador. En palabras de Serafíni: &ldquo;La descripción es una prosa que hace la presentación de objetos, personas, lugares y sentimientos, utilizando en la medida de lo posible, los detalles concretos&rdquo;<sup>1</sup>. Tal vez algunos de los recursos más utilizados sean los sustantivos y los adjetivos, como se observa en el siguiente fragmento:</p>
      <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="px-6 py-5">
      <blockquote class="font-serif not-italic text-gray-800 space-y-4">
        <p>Tenía los <strong>ojos</strong> <em>pardos y regulares</em>, <strong>nariz</strong> un poco <em>aguileña</em>, <strong>bigote</strong> <em>pequeño y negro</em>, <strong>cabellos</strong> <em>lacios, oscuros y cortos</em>, <strong>manos</strong> <em>flacas y trémulas</em>. Su <strong>boca</strong> <em>regular</em> tenía a veces un pliegue que daba a su <strong>semblante</strong> un <em>aire de altivez desdeñosa que ofendía, que hacía mal</em>.</p>
        <p><em>Taciturno</em>, siempre sumido en profundas cavilaciones, <em>distraído, metódico, sumiso con sus superiores</em>, aunque traicionaba su aparente humildad el pliegue altanero de sus labios, <em>severo y riguroso</em> con sus inferiores, <em>económico, laborioso, reservado, frío</em>, <strong>este joven</strong> tenía <em>aspecto repugnante</em> y, en efecto, era <em>antipático</em> para todo el mundo.<sup>2</sup></p>
      </blockquote>
    </div>
  </div>
  <p>Como te habrás dado cuenta, en el ejemplo anterior se advierte la descripción física (llamada también prosopografía) y psicológica (que también recibe el nombre de etopeya) de un joven que aparece ante el lector como antipático.</p>
  <p>Otro ejemplo se advierte en este caso:</p>
  
      <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="px-6 py-5">
      <blockquote class="font-serif not-italic text-gray-800 space-y-4">
        <p>Era un <strong>perro</strong> de pueblo, enteramente flaco, de orejas derechas y agudas, ojo vivaz, hocico puntiagudo, grandes pelos lacios y cedosos, patas delgadas y cola pendiente; era de esa clase de perros de raza indígena, que tienen semejanza con los lobos; de un color amarillo sucio manchado de negro, lo que le había valido su nombre de Pinto.<sup>3</sup></p>
      </blockquote>
    </div>
  </div>  
      <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Juan María Teresa Serafín, <em>Cómo redactar un tema</em>, p. 194.</p>      
      <p class="text-left text-xs text-gray-500"><sup>2</sup>Ignacio M. Altamirano, <em>"El comandante Fernando Valle"</em>, en Margarita Murillo, <em>La palabra escrita</em>, p. 380.</p>      
      <p class="text-left text-xs text-gray-500"><sup>3</sup>Ángel del Campo, <em>"El pinto"</em>, en <em>El galano arte de leer</em>, p. 18.</p>'
      ],
      [
        'id' => 'narrativa',
        'label' => 'Secuencia narrativa',
        'content' =>
        '<p>De la secuencia narrativa se puede decir que es una práctica común en diversos ámbitos de la vida cotidiana. Narrar consiste en contar un acontecimiento que ocurre en un espacio y en un tiempo; que le sucede a un personaje a lo largo de la secuencia. La secuencia narrativa se ocupa de los <strong>hechos</strong> y los ordena cronológicamente, como se muestra en el siguiente cuadro:</p>
        <div class="my-1">
          <table class="w-full border-collapse text-center max-w-2xl mx-auto">
            <tbody>
              <tr>
                <td class="bg-sky-500 text-white font-bold p-4 border border-sky-600 w-1/3">Situación inicial o<br>planteamiento</td>
                <td class="bg-sky-600 text-white font-bold p-4 border border-sky-700 w-1/3">Transformación</td>
                <td class="bg-sky-700 text-white font-bold p-4 border border-sky-800 w-1/3">Situación final o<br>resolución</td>
              </tr>
              <tr>
                <td class="bg-sky-100 text-sky-800 font-bold p-4 border border-sky-200">ANTES</td>
                <td class="bg-sky-200 text-sky-900 font-bold p-4 border border-sky-300">PROCESO</td>
                <td class="bg-sky-300 text-sky-900 font-bold p-4 border border-sky-400">DESPUÉS</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p>A partir de este cuadro se puede considerar que la situación inicial, es aquella donde nos presentan al protagonista, al tiempo y el lugar donde ocurre la historia. En la transformación o nudo, la historia se modifica. En la situación final el protagonista suele cambiar; no es el mismo que aparece en el planteamiento, debido a las circunstancias que se le van presentando a lo largo del relato. Veamos un ejemplo:</p>
        <div class="my-2 border border-gray-200 rounded-lg overflow-hidden shadow-sm max-w-3xl mx-auto">
          <div class="bg-gray-700 text-white text-center py-2 font-bold text-lg tracking-wide">Un sueño<sup>1</sup></div>
          <div class="p-4 space-y-4 text-gray-700">
            <span class="inline-block bg-sky-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Situación inicial / Planteamiento</span>
            <p class="font-serif">Josef K. soñó:</p>
            <p class="font-serif">Era un día hermoso, y K. quiso salir a pasear. Pero apenas dio dos pasos, llegó al cementerio. Vio numerosos e intrincados senderos, muy numerosos y nada prácticos; K. flotaba sobre uno de esos senderos como sobre un torrente, en un inconmovible deslizamiento.</p>
            <p class="font-serif">Su mirada advirtió desde lejos el montículo de una tumba recién cubierta, y quiso detenerse a su lado. Ese montículo ejercía sobre él casi una fascinación, y le parecía que nunca podría acercarse demasiado rápidamente. De pronto, sin embargo, la tumba casi desaparecía de la vista, oculta por estandartes que flameaban y se entrechocaban con fuerza; no se veía a los portadores de los estandartes, pero era como si allí reinara un gran júbilo.</p>
            <span class="inline-block bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mt-2">Transformación</span>
            <p class="font-serif">Todavía buscaba a la distancia, cuando vio de pronto la misma sepultura a su lado, cerca del camino; pronto la dejaría atrás. Saltó rápidamente al césped. Pero como en el momento del salto el sendero se movía velozmente bajo sus pies, se tambaleó y cayó de rodillas justamente frente a la tumba. Detrás de ésta había dos hombres que sostenían una lápida en la tierra, donde quedó sólidamente asegurada. Entonces surgió de un matorral un tercer hombre, en quién K. inmediatamente reconoció a un artista. Sólo vestía pantalones y una camisa mal abotonada; en la cabeza tenía una gorra de terciopelo; en la mano un lápiz común, con el que dibujaba figuras en el aire mientras se acercaba.</p>
            <p class="font-serif">Apoyó ese lápiz en la parte superior de la lápida; la lápida era muy alta; el hombre no necesitaba agacharse, pero si inclinarse hacia adelante, porque el montículo de tierra (que evidentemente no quería pisar) lo separaba de la piedra. Estaba en puntas de pie y se apoyaba con la mano izquierda en la superficie de la lápida.</p>
            <p class="font-serif">Mediante un prodigio de destreza logró dibujar con un lápiz común letras doradas y escribió: &ldquo;Aquí yace&rdquo;. Cada una de las letras era clara y hermosa, profundamente inscripta y de oro purísimo. Cuando hubo escrito las dos palabras, se volvió hacia K. que sentía gran ansiedad por saber cómo seguiría la inscripción, apenas se preocupaba por el individuo y sólo miraba la lápida.</p>
            <p class="font-serif">El hombre se dispuso nuevamente a escribir, pero no pudo, algo se lo impedía; dejó caer el lápiz y nuevamente se volvió hacia K. Esta vez K. lo miró y advirtió que estaba profundamente perplejo, pero sin poder explicarse el motivo de su perplejidad. Toda su vivacidad anterior había desaparecido. Esto hizo que también K. comenzara a sentirse perplejo; cambiaban miradas desoladas; había entre ellos algún odioso malentendido, que ninguno de los dos podía solucionar. Fuera de lugar, comenzó a repicar la pequeña campana de la capilla fúnebre, pero el artista hizo una señal con la mano y la campana cesó.</p>
            <p class="font-serif">Poco después comenzó nuevamente a repicar; esta vez con mucha suavidad y sin insistencia; inmediatamente cesó; era como si solamente quisiera probar su sonido. K. estaba preocupado por la situación del artista, comenzó a llorar y sollozó largo rato en el hueco de sus manos. El artista esperó que K. se calmara y luego decidió, ya que no encontraba otra salida, proseguir su inscripción.</p>
            <p class="font-serif">El primer breve trazo que dibujó fue un alivio para K. pero el artista tuvo que vencer evidentemente una extraordinaria repugnancia antes de terminarlo; además, la inscripción no era ahora tan hermosa, sobre todo parecía haber mucho menos dorado, los trazos se demoraban, pálidos e inseguros; pero la letra resultó bastante grande.</p>
            <p class="font-serif">Era una J.; estaba casi terminada ya, cuando el artista, furioso, dio un puntapié contra la tumba y la tierra voló por los aires.</p>
            <span class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mt-2">Situación final / Resolución</span>
            <p class="font-serif">Por fin comprendió K.; era muy tarde para pedir disculpas; con sus diez dedos escarbó en la tierra, que no le ofrecía ninguna resistencia; todo parecía preparado de antemano; sólo para disimular, habían colocado esa fina capa de tierra; inmediatamente se abrió debajo de él un gran hoyo, de empinadas paredes, en el cual K. impulsado por una suave corriente que lo colocó de espaldas, se hundió. Pero cuando ya lo recibía la impenetrable profundidad esforzándose todavía por erguir la cabeza, pudo ver su nombre que atravesaba rápidamente la lápida, con espléndidos adornos. Encantado con esta visión, se despertó.</p>
          </div>
        </div>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Franz Kafka, <em>Obras completas</em>, http://www.geocities.com/Athens/9505/textos.htm
</p>'
      ],
      [
        'id' => 'argumentativa',
        'label' => 'Secuencia argumentativa',
        'content' =>
        '<p>La argumentación es la técnica que consiste en convencer a alguien sobre un determinado asunto. Asimismo, la secuencia argumentativa es de tipo jerárquico porque se ordenan las partes bien diferenciadas: generalmente se establece la cuestión sobre la que se va a desarrollar la argumentación; la posición que se va a defender. "La argumentación se hace necesaria cuando alguien no está de acuerdo con una opinión; con una prueba; con su interpretación; con su valor o su relación con el problema del que hablamos"<sup>1</sup>.</p>
        <p>Como ejemplo podemos considerar el siguiente:</p>
        <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-4 my-4 text-gray-700 not-italic">
          <p class="font-serif"><strong>La naturaleza humana no es en sí ni buena ni mala,</strong> es la <strong>educación</strong> la que hace buena o mala. Más allá del ser, la educación apunta al deber ser. Presupone la perfectibilidad del hombre&rdquo;. Cuanto más se eleva el individuo en la sociedad, más acepta responsabilidades y más importancia reviste este deber ser.<sup>2</sup></p>
        </blockquote>
        <p>Como puedes observar en el ejemplo anterior, el autor afirma que el ser humano será bueno o malo, dependiendo de la educación que reciba.</p>
        <p>Por otra parte, debemos recordar que para que alguien pueda argumentar es necesario un <strong>enunciador</strong> (quien emite un mensaje) y un <strong>enunciatario</strong> (quien recibe el mensaje). El enunciador utiliza la función apelativa de la lengua, es decir, trata de persuadirnos o convencernos para que hagamos lo que él quiere: para ejecutar alguna acción o para que pensemos igual que él, para lo cual se sirve de razones o argumentos. Veamos otro ejemplo:</p>
        <blockquote class="border-l-4 border-violet-400 bg-violet-50 pl-6 pr-4 py-4 my-4 text-gray-700 not-italic">
          <p class="font-serif"><strong>Las obras literarias no nacieron para ser estudiadas y analizadas, sino para ser leídas y directamente intuidas.</strong> Ni el <em>Quijote</em> se creó para los cervantistas [...] ni el teatro de Shakespeare para la filología alemana. El árbol está ahí para recrearnos con su sombra [...] El primer conocimiento de la obra es, pues, el del lector... - <em>Dámaso Alonso</em></p>
        </blockquote>
        <p>Como seguramente advertiste, en este segundo ejemplo el autor sostiene y prueba que es mejor leer las obras directamente, antes que recurrir a los críticos.</p>
        <p>Otro ejemplo es la <strong><em>Fábula del León y el Ratón</em></strong>:</p>
        <div class="my-6 border border-amber-200 rounded-lg overflow-hidden shadow-sm max-w-3xl mx-auto">
          <div class="bg-amber-500 text-white text-center py-3 font-bold text-lg tracking-wide">Fábula del León y el Ratón<sup>3</sup></div>
          <div class="p-6 space-y-4 text-gray-700 ">
            <p class="font-serif">Dormía el león pardo en la sombría montaña, en la espesura tiene su cueva subterránea; allí juegan un grupo de ligeros ratones, al león despertaron con su gran alboroto; el león tomó a uno y lo quería matar, el ratón con mucho miedo le empezó a halagar: &ldquo;Señor, dijo, no me mates que no te podré hartar, ni dándome la muerte tú te puedes honrar.</p>
            <p class="font-serif">&iquest;Qué honor es para el león, para el fuerte y poderoso, matar a un pequeño, al pobre, al penoso?: es deshonor y descrédito, y no hermosa victoria, el del que mata a un ratón es trofeo vergonzoso; y, si bien vencer es honor para todo hombre nacido, es maldad y pecado vencer al desfallido: el vencedor tiene honor según el precio del vencido, su trofeo es igual a lo que es el abatido.&rdquo;</p>
            <p class="font-serif">El león con estas razones quedóse satisfecho, soltó al ratoncillo; al ser el ratón soltado, le dio muchas gracias y le quedó obligado: en todo lo que pudiera le serviría de grado.</p>
            <p class="font-serif">Se fue el ratón al agujero, el león fue a cazar; andando por el monte, vino a tropezar, cayó en grandes redes, no las podía cortar, envuelto de pies a manos no se podía levantar; empezó a quejarse y lo oyó el ratoncillo, se fue a él y dijo: &ldquo;Señor, yo traigo buen cuchillo, con estos dientes míos roeré poco a poquillo y donde están vuestras manos haré un gran portillo; vuestros brazos por allí los sacaréis, abriendo y estirando las redes rasgaréis, por mis chiquitos dientes hoy vos escaparéis perdonaste mi vida y vos por mí viviréis.&rdquo;</p>
            <p class="font-serif">Tú, rico poderoso, no quieras desechar al pobre, al faltado, no lo quieras de ti echar; puede prestarte servicio quien no tiene que pagar, el que no puede más puede aprovechar; puede una pequeña cosa y de poca valía nacer mucho provecho, causar gran mejoría: el que no tiene poder, oro, ni hidalguía tenga habilidad y seso, maña y sabiduría.</p>
          </div>
        </div>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup>Cfr. Margarida Bassols, <em>op. cit.</em> p. 31.</p>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>2</sup>Marta Marín, <em>op. cit.</em> p. 180.</p>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>3</sup>Arcipreste de Hita, <em>Libro de Buen Amor</em>, pp. 239-240.</p>'
      ],
    ],
  ]) ?>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32 mb-8">
    <li>Completa los espacios en blanco con el tipo de secuencia correcto.</li>
  </ol>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u2t1a3', "Tipos de secuencias", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>