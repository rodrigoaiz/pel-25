<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>El léxico y los registros del lenguaje</h2>

    <div class="w-full bg-teal-600/10 border-l-4 border-teal-600 rounded-r-lg px-6 py-4 mb-6">
        <p class="text-teal-800 font-semibold italic">Aprecia la diversidad de usos de la lengua y reconoce los vicios y errores más comunes.</p>
    </div>

    <p>El propósito de este aprendizaje es que utilices los registros adecuados para la producción de textos a nivel académico y que seas capaz de escribir otros con originalidad e ingenio, pero ateniéndote a los usos de la lengua. Para esto, es necesario que entiendas algunos conceptos básicos que te ayudarán a desarrollar los ejercicios.</p>

    <p>Para Saussure el lenguaje es un sistema de signos que expresa ideas, y, por consiguiente, puede compararse a un sistema de escritura, al alfabeto para sordomudos, a las fórmulas de cortesía, a las señales militares, etcétera. En este sentido, el lenguaje humano es el más importante de estos sistemas.</p>

    <p>Asimismo, debe recordarse que el lenguaje es &ldquo;el medio del que se vale el hombre para comunicarse con sus semejantes&rdquo;. El lenguaje puede ser:</p>

    <ul>
        <li>Mímico.</li>
        <li>Fonético.</li>
        <li>De señales.</li>
    </ul>

    <p>El lenguaje mímico es el que emplea los gestos y el movimiento de las manos para &ldquo;darse a entender&rdquo;, mientras que el fónico se expresa a través de los sonidos emitidos por la voz humana. El lenguaje por señales usa algún implemento externo al hombre para comunicar, por ejemplo, cambios de luces, señales de humo, etcétera. Pero la lengua constituida por un conjunto de palabras es la forma a través de la cual el hombre puede expresar sus emociones, sentimientos e ideas. &ldquo;Las palabras son sonidos o signos que expresan ideas. La palabra es necesaria para pensar, por eso se dice que es el instrumento de formación del pensamiento&rdquo;.
        <span class="text-xs text-gray-500"> - Isabel Sánchez, <em> Notas del Taller de Lectura y Redacción,</em> p. 5.</span>
    </p>

    <p>De acuerdo con la estructura del lenguaje podemos hablar de:</p>

    <div class="my-6 grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">

        <!-- Lenguaje recto -->
        <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden">
            <div class="bg-sky-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Lenguaje recto</p>
            </div>
            <div class="px-6 py-5 text-gray-700">
                <p>Es aquel que exige un orden riguroso, &ldquo;un sentido legítimo y una interpretación íntegra de la expresión.&rdquo;<sup>1</sup> Se considera que es un lenguaje rígido que &ldquo;expresa <em>exactamente</em> la idea que expone&rdquo;.</p>
                <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup> Isabel Sánchez, <em> Notas del Taller de Lectura y Redacción,</em> p. 5.</p>
            </div>
        </div>

        <!-- Lenguaje figurado -->
        <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden">
            <div class="bg-violet-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Lenguaje figurado</p>
            </div>
            <div class="px-6 py-5 text-gray-700">
                <p>Es aquel que embellece los pensamientos mediante la imaginación y el sentimiento: &ldquo;El afecto que es natural de la sensibilidad exquisita del hombre y que no está sujeto a la lógica, ni a normas rígidas, sino que refleja fantasía en la expresión, logrando nuevas y hermosas formas en el lenguaje&rdquo;.<sup>2</sup></p>
                <p class="text-left text-xs text-gray-500 mt-6"><sup>2</sup> Isabel Sánchez, <em> Notas del Taller de Lectura y Redacción,</em> p. 6.</p>
            </div>
        </div>
    </div>

    <h3 class="text-xl font-bold mt-8 mb-4">Registro de la lengua</h3>

    <p>La sociedad, como sistema humano cambiante y dependiente del tiempo y el espacio, ha creado diversas formas de usar la lengua:</p>

    <div class="my-6 grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">

        <!-- Lenguaje coloquial -->
        <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
            <div class="bg-amber-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Lenguaje coloquial</p>
            </div>
            <div class="px-6 py-5 text-gray-700">
                <p>Es la fuerza expresiva del lenguaje familiar y el habla popular y &ldquo;se utiliza en las conversaciones, los diálogos, etc.&rdquo;</p>
            </div>
        </div>

        <!-- Lenguaje técnico -->
        <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden">
            <div class="bg-emerald-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Lenguaje técnico</p>
            </div>
            <div class="px-6 py-5 text-gray-700">
                <p>&ldquo;Es la terminología de las ciencias, artes o grupos que practican algún oficio y por lo mismo poseen un lenguaje específico&rdquo;.</p>
            </div>
        </div>

        <!-- Lenguaje literario -->
        <div class="border-l-4 border-rose-500 bg-rose-500/10 rounded-r-lg shadow-md overflow-hidden">
            <div class="bg-rose-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Lenguaje literario</p>
            </div>
            <div class="px-6 py-5 text-gray-700">
                <p>&ldquo;Es el que se encuentra en poemas, relatos, novelas, etcétera.&rdquo; Recrea mediante la palabra, profundizando realidades, dando lugar al surgimiento de un conocimiento poético que es la luz de una magia preñada de símbolos. &ldquo;El lenguaje literario es un ejercicio intelectual espontáneo que lleva implícita la belleza&rdquo;.<sub>3</sub></p>
                <p class="text-left text-xs text-gray-500 mt-6"><sup>3</sup> Isabel Sánchez, <em> Notas del Taller de Lectura y Redacción,</em> p. 6.</p>
            </div>
        </div>
    </div>

    <p class="mt-10">Dentro del lenguaje coloquial, podemos encontrar formas de expresión que van en contra de reglas gramaticales o de conceptos institucionalmente establecidos. Como ejemplo de esto, lee con atención el siguiente fragmento de la obra <em>De la calle</em> de Jesús González Dávila, piensa en la forma en que los personajes se comunican y cómo en algunos se podrían decir las cosas en otro registro.</p>
</section>

<div class="my-6 max-w-3xl mx-auto">
    <div class="border-l-4 border-slate-500 bg-slate-500/10 rounded-r-lg shadow-md overflow-hidden">
        <div class="bg-slate-600 px-5 py-3">
            <p class="font-bold text-white tracking-wide text-lg">De la calle</p>
            <p class="text-slate-200 text-sm">Jesús González Dávila</p>
        </div>
        <div class="px-6 py-5 font-serif text-gray-800 space-y-4">

            <p class="italic text-gray-500 text-sm">Rufino con las manos atadas a la nuca.</p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Rufino:</strong> &iexcl;Ochoa&hellip;! &iexcl;Ochoa! &iexcl;Qué bueno Ochoa! &iexcl;Quería decirte lo de la seño; yo&hellip;!</p>

            <p class="italic text-gray-500 text-sm">Rufino es lanzado contra un rincón. Un tubo, de hule macizo le golpea el estómago, sus piernas se doblan, su cuerpo se desliza y queda en cuclillas. A su lado, el Ochoa le habla quedo.</p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Ochoa:</strong> Mira nomás <em>(silencio)</em> Mira nomás&hellip; Dónde nos venimos a topar.</p>

            <p class="italic text-gray-500 text-sm">El Ochoa lo levanta de los cabellos, obligándolo a pararse en las puntas de los pies.</p>

            <p>Mira nomás <em>(silencio)</em> mosquita muerta, mira nomás.</p>

            <p class="italic text-gray-500 text-sm">Lo suelta. Rufino se derrumba de nuevo. Algunas sombras pasan por el pasillo de junto. El Ochoa simula:</p>

            <p>&iquest;Te sientes mal? Di, &iquest;quieres agua? Di, &iquest;necesitas algo?</p>

            <p class="italic text-gray-500 text-sm">Una pausa. Vuelven a quedar solos. El Ochoa le da un tubazo en el pecho.</p>

            <p>Mira nomás <em>(Silencio)</em> Para chingarse al Ochoa se necesita lo que no tienes. <em>(Pausa)</em> Pendejo&hellip; <em>(se oye una voz fuera que grita:)</em></p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Voz:</strong> &iexcl;Rufino Mireles&hellip;!</p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Ochoa:</strong> <em>(Suavemente)</em> Mira nomás, qué cara pones. Pero del Ochoa no te salvas pendejo. Ya verás <em>(pausa)</em> Ya verás.</p>

            <p class="italic text-gray-500 text-sm">El tubo de hule golpea una vez más sobre el abdomen de Rufino: un momento después. Rufino es empujado para que se alinee con otros sospechosos que van colocándose bajo la luz potente de las lámparas. Se oyen voces fuera de la luz.</p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Xochitl</strong> <em>(Llorosa)</em> No sé. Le digo que no sé. Nunca los había visto. &iquest;Eh&hellip;? <em>(pausa)</em> Ni a aquéllos ni a éstos. <em>(Pausa)</em> A qué horas me van a soltar. Que no sé, &iquest;no le digo? Lo que quiero es irme. No, yo no hice nada, &iquest;por qué? <em>(pausa)</em>. Que no; ya le digo que no&hellip;</p>

            <p><strong class="uppercase tracking-widest text-slate-700 text-sm">Gregorio:</strong> Pero &iquest;cómo se le ocurre, Ochoa? &iquest;Identificarlos? Yo estaba tan asustado como la muchacha. <em>(pausa)</em> En ese momento, todos se ven iguales, <em>(pausa)</em> bueno, ese del bigotito no&hellip; El de la cintura quebrada, más bien. No, el de la camiseta, ése&hellip; quiero decir, se ve capaz de todo. A ver. Enséñeme los que siguen. <em>(pausa)</em> Qué&hellip; &iquest;no tiene más?</p>

        </div>
    </div>
</div>

<section>
  <p>Un claro ejemplo cotidiano del lenguaje coloquial se da a través de la música popular. Como ejemplo, lee con atención la siguiente canción compuesta e interpretada por el compositor mexicano Jaime López, la cual se popularizó con el grupo Café Tacuba en la década de los noventa. Es importante que escuches su ritmo, su métrica, su cadencia.</p>
</section>

<div class="my-6 max-w-3xl mx-auto">
  <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden">
    <div class="bg-amber-600 px-5 py-3">
      <p class="font-bold text-white tracking-wide text-lg">Chilanga Banda<sup>1</sup></p>
      <p class="text-amber-100 text-sm">Jaime López &mdash; popularizada por Café Tacuba (años noventa)</p>
    </div>
    <div class="px-6 py-5 font-serif text-gray-800">
      <div class="grid md:grid-cols-2 gap-x-10 gap-y-6">

        <!-- Estrofa 1 -->
        <div>
          <p class="leading-relaxed">
            Ya chole chango chilango,<br>
            &iexcl;qué chafa chamba te chutas!<br>
            No checa andar de tacuche<br>
            &iexcl;y chale con la charola!
          </p>
        </div>

        <!-- Estrofa 2 -->
        <div>
          <p class="leading-relaxed">
            Tan choncho como una chinche,<br>
            más chueco que la fayuca,<br>
            con fusca y con cachiporra<br>
            te pasa andar de guarura.
          </p>
        </div>

        <!-- Estrofa 3 -->
        <div>
          <p class="leading-relaxed">
            Mejor yo me echo una chela<br>
            y chance enchufo una chava<br>
            chambeando de chafirete<br>
            me sobra chupe y pachanga.
          </p>
        </div>

        <!-- Estrofa 4 -->
        <div>
          <p class="leading-relaxed">
            Si choco saco chipote<br>
            la chota no es muy molacha<br>
            chiveando a los que machucan<br>
            se va a morder su talacha.
          </p>
        </div>

        <!-- Estrofa 5 -->
        <div>
          <p class="leading-relaxed">
            De noche caigo al congal<br>
            &ldquo;No manches&rdquo; dice la Changa,<br>
            &lsquo;A chocho de teporocho&rsquo;<br>
            en chifla pasa la pacha.
          </p>
        </div>

        <!-- Coro -->
        <div class="bg-amber-100 rounded-lg px-4 py-3">
          <p class="uppercase text-xs font-bold tracking-widest text-amber-700 mb-2">Coro</p>
          <p class="leading-relaxed">
            Pachucos, cholos y chundos<br>
            chichifos y malafachas<br>
            acá los chómpiras rifan<br>
            y bailan tibiritabara
          </p>
          <p class="text-xs text-amber-600 mt-2 italic">(coro)</p>
        </div>

        <!-- Estrofa 6 -->
        <div>
          <p class="leading-relaxed">
            Mejor yo me echo una chela<br>
            y chance enchufo una chava<br>
            chambeando de chafirete<br>
            me sobra chupe y pachanga.
          </p>
        </div>

        <!-- Estrofa 7 -->
        <div>
          <p class="leading-relaxed">
            Mi ñero mata la bacha<br>
            y canta La Cucaracha<br>
            su cholla vive de chochos<br>
            de chemo, churro y garnachas.
          </p>
          <p class="text-xs text-amber-600 mt-2 italic">(coro)</p>
        </div>

        <!-- Estrofa final -->
        <div class="md:col-span-2 text-center">
          <p class="leading-relaxed">
            Transando de arriba a abajo<br>
            &iexcl;ahí va la chilanga banda!<br>
            Chinchin si me la recuerdan,<br>
            carcacha y se les retacha.
          </p>
        </div>

      </div><!-- /grid -->

      <p class="text-left text-xs text-gray-500 mt-6 border-t border-gray-200 pt-4"><sup>1</sup> Jaime López, &ldquo;Chilanga Banda&rdquo;, interpretada por Café Tacuba en el álbum <em>Avalancha de éxitos</em>, 1996.</p>
    </div><!-- /card body -->
  </div><!-- /card -->
</div><!-- /container -->

<section>
  <p>Ahora piensa en cómo se podría cambiar el lenguaje coloquial de la canción por uno de tipo estándar. Si tienes duda sobre el significado de las palabras consulta el glosario que aparece en la nota al pie de esta página. No tienes que entregar este ejercicio; la finalidad es que reflexiones en las distintas formas en las que se puede decir algo y en lo rico que es nuestro lenguaje en este sentido.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>