<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ToolTip.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El léxico y los registros del lenguaje</h2>

  <p>Un claro ejemplo cotidiano del lenguaje coloquial se da a través de la música popular. Como ejemplo, lee con atención la siguiente canción compuesta e interpretada por el compositor mexicano Jaime López, la cual se popularizó con el grupo Café Tacuba en la década de los noventa. Es importante que escuches su ritmo, su métrica, su cadencia.</p>
</section>

<div class="my-6 max-w-3xl mx-auto">
  <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-amber-600 px-5 py-3">
      <p class="font-bold text-white tracking-wide text-lg">Chilanga Banda</p>
      <p class="text-amber-100 text-sm">Jaime López, "Chilanga Banda", interpretada por Café Tacuba en el álbum Avalancha de éxitos, 1996.</p>
    </div>
    <div class="px-6 py-5 font-serif text-gray-800">
      <div class="md:col-span-2 text-center">

        <!-- Estrofa 1 -->
        <div class="mt-2">
          <p class="leading-relaxed">
            <?php renderTooltip('Ya chole', 'Interjección usada como petición a alguien para que deje de fastidiar'); ?> <?php renderTooltip('chango', '1) Persona o individuo. 2) Atento, alerta (con el verbo ponerse: ponte chango)'); ?> chilango,<br>
            &iexcl;qué <?php renderTooltip('chafa', 'De poco valor, no auténtico'); ?> <?php renderTooltip('chamba', 'Trabajo, empleo'); ?> te <?php renderTooltip('chutas', 'Chutar: ingerir, consumir, acabar; desempeñar, llevar a cabo'); ?>!<br>
            No <?php renderTooltip('checa', 'Checar: revisar, controlar, comparar'); ?> andar de <?php renderTooltip('tacuche', 'Traje'); ?><br>
            &iexcl;y <?php renderTooltip('chale', 'No, de ninguna manera'); ?> con la <?php renderTooltip('charola', 'Placa, distintivo de la policía'); ?>!
          </p>
        </div>

        <!-- Estrofa 2 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            Tan <?php renderTooltip('choncho', 'Regordete'); ?> como una chinche,<br>
            más <?php renderTooltip('chueco', 'Irregular, ilegal'); ?> que la <?php renderTooltip('fayuca', 'Contrabando'); ?>,<br>
            con <?php renderTooltip('fusca', 'Pistola'); ?> y con cachiporra<br>
            te <?php renderTooltip('pasa', '1) Gustar. 2) Dar'); ?> andar de <?php renderTooltip('guarura', 'Guardia del cuerpo, guardaespaldas'); ?>.
          </p>
        </div>

        <!-- Estrofa 3 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            Mejor yo me echo una <?php renderTooltip('chela', 'Cerveza'); ?><br>
            y <?php renderTooltip('chance', 'Oportunidad, esperanza'); ?> <?php renderTooltip('enchufo', 'Conozco'); ?> una <?php renderTooltip('chava', 'Adolescente, muchacha'); ?><br>
            <?php renderTooltip('chambeando', 'Chambeando: trabajando (de chamba: trabajo, empleo)'); ?> de <?php renderTooltip('chafirete', 'Chofer'); ?><br>
            me sobra <?php renderTooltip('chupe', 'Bebida alcohólica'); ?> y <?php renderTooltip('pachanga', 'Fiesta, celebración'); ?>.
          </p>
        </div>

        <!-- Estrofa 4 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            Si choco saco <?php renderTooltip('chipote', 'Chichón'); ?><br>
            la <?php renderTooltip('chota', 'Policía'); ?> no es muy <?php renderTooltip('molacha', 'Que le hacen falta uno o más dientes'); ?><br>
            <?php renderTooltip('chiveando', 'Chivear: avergonzar, causar vergüenza'); ?> a los que <?php renderTooltip('machucan', 'Machucar: atropellar'); ?><br>
            se va a <?php renderTooltip('morder', 'Aceptar un soborno'); ?> su <?php renderTooltip('talacha', 'Labor, trabajo; referido particularmente a quehaceres domésticos'); ?>.
          </p>
        </div>

        <!-- Estrofa 5 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            De noche caigo al <?php renderTooltip('congal', 'Burdel'); ?><br>
            &ldquo;<?php renderTooltip('No manches', 'Hacer el ridículo'); ?>&rdquo; dice la <?php renderTooltip('Changa', 'Mono, simio'); ?>,<br>
            &lsquo;A <?php renderTooltip('chocho', 'Pastilla de droga'); ?> de <?php renderTooltip('teporocho', 'Borracho'); ?>&rsquo;<br>
            en <?php renderTooltip('chifla', "Eufemismo de 'en chinga': de prisa, rápidamente"); ?> <?php renderTooltip('pasa', '1) Gustar. 2) Dar'); ?> la <?php renderTooltip('pacha', 'Recipiente de metal o botella de licor que llevan consigo los borrachos'); ?>.
          </p>
        </div>

        <!-- Coro -->
        <div class="bg-amber-100 rounded-lg px-4 py-3 mt-6">
          <p class="uppercase text-xs font-bold tracking-widest text-amber-700 mb-2">Coro</p>
          <p class="leading-relaxed">
            Pachucos, cholos y chundos<br>
            <?php renderTooltip('chichifos', 'Chichifo: prostituto'); ?> y <?php renderTooltip('malafachas', 'Malafacha: vago, de aspecto delincuente, agresivo visualmente'); ?><br>
            acá los <?php renderTooltip('chómpiras', "Caco, ladronzuelo (personaje popular del programa televisivo 'Chespirito')"); ?> <?php renderTooltip('rifan', 'Dominar, ser superior'); ?><br>
            y bailan tibiritabara
          </p>
        </div>
        <div class="mt-6">
          <p class="uppercase text-xs font-bold tracking-widest text-amber-700">- Coro -</p>
        </div>

        <!-- Estrofa 6 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            Mejor yo me echo una <?php renderTooltip('chela', 'Cerveza'); ?><br>
            y <?php renderTooltip('chance', 'Oportunidad, esperanza'); ?> <?php renderTooltip('enchufo', 'Conozco'); ?> una <?php renderTooltip('chava', 'Adolescente, muchacha'); ?><br>
            <?php renderTooltip('chambeando', 'Chambeando: trabajando (de chamba: trabajo, empleo)'); ?> de <?php renderTooltip('chafirete', 'Chofer'); ?><br>
            me sobra <?php renderTooltip('chupe', 'Bebida alcohólica'); ?> y <?php renderTooltip('pachanga', 'Fiesta, celebración'); ?>.
          </p>
        </div>

        <!-- Estrofa 7 -->
        <div class="mt-6">
          <p class="leading-relaxed">
            Mi <?php renderTooltip('ñero', 'Compañero'); ?> mata la <?php renderTooltip('bacha', 'Colilla de cigarro de mariguana'); ?><br>
            y canta La Cucaracha<br>
            su <?php renderTooltip('cholla', 'Cholla o choya: cabeza'); ?> vive de <?php renderTooltip('chochos', 'Chocho: pastilla de droga'); ?><br>
            de <?php renderTooltip('chemo', 'Pegamento que inhalado intoxica'); ?>, <?php renderTooltip('churro', 'Se refiere a una obra mal hecha en el teatro'); ?> y <?php renderTooltip('garnachas', 'Garnacha: comida elaborada en la calle, comida rápida'); ?>.
          </p>
          <p class="uppercase text-xs font-bold tracking-widest text-amber-700 mt-6">- Coro -</p>
        </div>

        <!-- Estrofa final -->
        <div class="mt-6">
          <p class="leading-relaxed">
            <?php renderTooltip('Transando', 'Transar: estafar'); ?> de arriba a abajo<br>
            &iexcl;ahí va la chilanga banda!<br>
            <?php renderTooltip('Chinchin', "Desafío; su eufemismo es 'Chinguen su madre'. Recordarla: recordarle la madre a alguien como insulto"); ?> si me la recuerdan,<br>
            <?php renderTooltip('carcacha', 'Vehículo en mal estado o destartalado'); ?> y se les <?php renderTooltip('retacha', 'Retachar: devolver. "Carcacha y se les retacha": es la respuesta para devolver el insulto'); ?>.
          </p>
        </div>

      </div><!-- /grid -->
    </div><!-- /card body -->
  </div><!-- /card -->
</div><!-- /container -->

<section>
  <p>Ahora piensa en cómo se podría cambiar el lenguaje coloquial de la canción por uno de tipo estándar. Si tienes duda sobre el significado de las palabras consulta el glosario que aparece en la nota al pie de esta página. No tienes que entregar este ejercicio; la finalidad es que reflexiones en las distintas formas en las que se puede decir algo y en lo rico que es nuestro lenguaje en este sentido.</p>

  <div class="max-w-2xl mx-auto mt-10">
    <table class="table-auto">
      <thead class="bg-rose-700">
        <tr>
          <th class="text-white-own text-center p-4 border border-rose-700">Canción (lenguaje vulgar)</th>
          <th class="text-white-own text-center p-4 border border-rose-700">Canción (lenguaje coloquial)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Ya chole chango chilango, </br>
            ¡qué chafa chamba te chutas!</br>
            No checa andar de tacuche</br>
            ¡y chale con la charola! </td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Tan choncho como una chinche,</br>
            más chueco que la fayuca,</br>
            con fusca y con cachiporra</br>
            te pasa andar de guarura. </td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Mejor yo me echo una chela<br>
            y chance enchufo una chava<br>
            chambeando de chafirete<br>
            me sobra chupe y pachanga.</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Si choco saco chipote<br>
            la chota no es muy molacha<br>
            chiveando a los que machucan<br>
            se va a morder su talacha.</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">De noche caigo al congal<br>
            &lsquo;No manches,&rsquo; dice la &ldquo;Changa&rdquo;,<br>
            &lsquo;A chorro de teporocho,<br>
            en chifla pasa la pacha&rsquo;.</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Pachucos, cholos y chundos<br>
            chichifos y malafachas<br>
            acá los ch&oacute;mpiras rifan<br>
            y bailan tibiritabara</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Mi &ntilde;ero mata la bacha<br>
            y canta La Cucaracha<br>
            su cholla vive de chochos<br>
            de chemo, churro y garnachas</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>
        <tr>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700">Transando de arriba a abajo<br>
            &iexcl;ah&iacute; va la chilanga banda!<br>
            Chinchin si me la recuerdan,<br>
            carcacha y se les retacha.</td>
          <td class="bg-rose-100 font-serif p-4 border border-rose-700"></td>
        </tr>

      </tbody>
    </table>
  </div>

  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number md:ml-32">
    <li>Redacta un <strong>párrafo original</strong> de entre <strong>8 y 10 oraciones</strong>. El tema es libre (puedes escribir sobre tu pasatiempo favorito, un lugar que te guste, una anécdota, etc.).</li>
    <li>Dentro de tu párrafo, <strong>destaca</strong> (resalta con distintos colores) lo siguiente:
      <ul>
        <li><strong>5 sustantivos.</strong> Verde</li>
        <li><strong>5 verbos.</strong> Azul</li>
        <li><strong>3 adjetivos.</strong> Amarillo</li>
        <li><strong>3 adverbios.</strong> Naranja</li>
      </ul>
    </li>
    <li>Al final de tu párrafo, elabora una <strong>lista organizada</strong> donde clasifiques cada palabra marcada según su categoría (por ejemplo: "Sustantivos: perro, amistad, playa, etc.").</li>
    <li>Envía la actividad para su evaluación. </li>
    <li>Consulta la <a href="<?php echo PATH_DOCS . 'u1t3p2-rubrica-parrafo.pdf'; ?>" target="_blank">rúbrica</a> con el que se evaluará tu actividad. </li>
  </ol>

  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a4', "Construyo y analizo mi propio párrafo", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>