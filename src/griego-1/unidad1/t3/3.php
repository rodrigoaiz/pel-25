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
  <h2>Composición de términos técnico-científicos, médicos y de cultura en general</h2>

  <p>Observa y lee varias veces el siguiente cuadro de palabras. Por su significado, algunas pertenecen a la terminología médica, otras al lenguaje técnico científico, y otras a la cultura en general. </p>

  <h3 class="text-xl text-center">Cuadro de composición de términos técnico-científicos, médicos y de cultura en general</h3>

   <table class="table-auto border-collapse border border-slate-400"> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-amber-600 text-center"> <span class="text-blue-600">ἀνατομία</span>
                = anatomía de
                <span class="text-blue-600">ἀνα</span>
                arriba +
                <span class="text-blue-600">τομη</span>
                corte +
                <span class="text-blue-600">ια</span>
                especialidad
                (corte hacia arriba).</td> 
              
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">κύκλος</span>
                = ciclo (círculo)</td> 
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">ἡπατίτις</span>
                = hepatitis de
                <span class="text-blue-600">ἧπατος</span>
                hígado +
                <span class="text-blue-600">ιτις</span>
                inflamación
                (inflamación del hígado)</td> 
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">κύκλωψ</span>
                = cíclope de
                <span class="text-blue-600">κύκλος</span>
                círculo +
                <span class="text-blue-600">ὠψ</span>
                ojo
                (un sólo ojo)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">κοσμολογία</span>
                = cosmología de
                <span class="text-blue-600">κόσμος</span>
                mundo, cosmos +
                <span class="text-blue-600">λογος</span>
                estudio +
                <span class="text-blue-600">ια</span>
                especialidad
                (especialidad que estudia al cosmos)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">Οἰδίπους</span>
                = Edipo (sustantivo propio)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">ζωοτέχνια</span>
                = zootécnia de
                <span class="text-blue-600">ζώων</span>
                animal +
                <span class="text-blue-600">τέχνη</span>
                arte / técnica
                (arte / técnica con animales)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">ἀνθρωπολογία</span>
                = antropología de
                <span class="text-blue-600">ἄνθρωπος</span>
                hombre +
                <span class="text-blue-600">λόγος</span>
                estudio +
                <span class="text-blue-600">ια</span>
                especialidad
                (estudio acerca del hombre)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">Τάρταρος</span>
                = Tártaro (sustantivo propio)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"> <span class="text-blue-600">ἄτομος</span>
                = átomo de
                <span class="text-blue-600">α</span>
                sin +
                <span class="text-blue-600">τομη</span>
                corte
                (sin división)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"> <span class="text-blue-600">παρασιτώσις</span>
                = parasitosis de
                <span class="text-blue-600">παρα</span>
                al lado +
                <span class="text-blue-600">κιτος</span>
                alimento +
                <span class="text-blue-600">σις</span>
                abundancia
                (abundancia de parásitos / al lado de la abundancia de alimento)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"> <span class="text-blue-600">ὁμοιοπαθεία</span>
                = homeopatía de
                <span class="text-blue-600">ομοιος</span>
                semejanza / igualdad +
                <span class="text-blue-600">παθος</span>
                sufrimiento / cuidado +
                <span class="text-blue-600">ια</span>
                especialidad
                (cuidado semejante/alterno al padecimiento)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"> <span class="text-blue-600">μαστογραφία</span>
          = mastografía de
          <span class="text-blue-600">μαστο</span> +
          <span class="text-blue-600">γραφος</span> +
          <span class="text-blue-600">ια</span>
          (trazo / radiografía del seno)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">  <span class="text-blue-600">ρινοπάθεια</span>
          = rinopatía de
          <span class="text-blue-600">ρινος</span>
          nariz +
          <span class="text-blue-600">παθος</span>
          <span class="underline decoration-red-500 decoration-2">
            padecimiento
          </span>
          +
          <span class="text-blue-600">ια</span>
          especialidad
          (padecimiento de la nariz)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">  <span class="text-blue-600"> <span class="text-blue-600">ἱπποποταμός</span>
          = hipopótamo de
          <span class="text-blue-600">ἱππος</span> +
          <span class="text-blue-600">ποταμος</span>
          (caballo de río)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">  <span class="text-blue-600"><span class="text-blue-600">Ἀθῆνας</span>
          = Atenas (sustantivo propio)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">κεφαλαλγία</span>
          cefalalgia
          </span>
          de
          <span class="text-blue-600">κεφαλη</span> +
          <span class="text-blue-600">αλγιος</span> +
          <span class="text-blue-600">ια</span>
          (dolor de cabeza)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600"><span class="text-blue-600">χρωματολογία</span>
          = cromatología de
          <span class="text-blue-600">χρωματος</span> +
          <span class="text-blue-600">λογος</span> +
          <span class="text-blue-600">ια</span>
          (estudio acerca del color)</td>
      </tr>
      
      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">διάλογος</span>
          = diálogo de
          <span class="text-blue-600">δια</span> +
          <span class="text-blue-600">λογος</span>
          (a través de la palabra)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">μονόλογος</span>
          = monólogo de
          <span class="text-blue-600">μονος</span> +
          <span class="text-blue-600">λογος</span>
          (uno solo habla/una sola palabra)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600"><span class="text-blue-600">γαστρεντερολογία</span>
          = gastroenterología de
          <span class="text-blue-600">γαστερ</span>
          estómago +
          <span class="text-blue-600">εντερον</span>
          intestino +
          <span class="text-blue-600">λογος</span>
          estudio +
          <span class="text-blue-600">ια</span>
          especialidad
          (estudio acerca del intestino y el estómago)</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">μακεδονία</span>
          = Macedonia (sustantivo propio)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">αιματολογία</span>
          = hematología de
          <span class="text-blue-600">αιματος</span> +
          <span class="text-blue-600">λογος</span> +
          <span class="text-blue-600">ια</span>
          (estudio acerca de la sangre)</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center"><span class="text-blue-600">χιλιόμετρος</span>
          = kilómetro de
          <span class="text-blue-600">χιλος</span>
          mil +
          <span class="text-blue-600">μετρον</span>
          medida
          (medida de mil/mil medidas)</td>
      </tr>

    </tbody>
  </table>

  <p>Para realizar cualquier transcripción, recurre a tu transcripción del alfabeto y diptongos. Algunas terminaciones están en las pantallas que has revisado.</p>

  <p>Te sugiero mantener el alfabeto griego y los diptongos a la vista cuando realices la transcripción. Consúltalos cuantas veces lo necesites descargando el <b>siguiente documento</b>.</p>

  <h3>La raíz transcrita y algunos derivados de ella. </h3>

  <p>Observa las transcripciones en los cuadros siguientes. Vamos a aplicar las <b>reglas de transcripción del alfabeto</b> y de los <b>diptongos</b> que ya realizamos en la Lección “Transcripción de palabras griegas al latín y al español”. También buscaremos algunos derivados o compuestos de las raíces. </p>

  <p>Fíjate que de una raíz griega podemos encontrar muchas palabras que se dan en la ciencias y en la vida diaria. Observa también que el significado suele coincidir con la transcripción (a veces, no, hemato es sangre).</p>

  <p>Lee y analiza el siguiente cuadro de raíces griegas transcritas al latín y al español y las palabras compuestas y sus derivados que podemos extraer de ellas.</p>


  <table class="table-auto border-collapse border border-slate-400">
    <thead>
        <tr >
          <th colspan="4" class="border border-slate-300 text-xl bg-blue-700 text-white-own text-center">Tabla de 12 raíces griegas transcritas y  5 derivados o compuestos de ellas</th>
        </tr>
      </thead> 
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-blue-500 text-center">observa la palabra original</td>
        <td class="border border-slate-300 text-xl text-center text-blue-500">observa la transcripción al latín</td>
        <td class="border border-slate-300 text-xl text-center text-blue-500">observa la transcripción al español</td>
        <td class="border border-slate-300 text-xl text-center text-blue-500">observa los derivados de ellas</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-purple-500 text-center">griego</td>
        <td class="border border-slate-300 text-xl text-center text-purple-500">latín</td>
        <td class="border border-slate-300 text-xl text-center text-purple-500">raiz en español</td>
        <td class="border border-slate-300 text-xl text-center text-purple-500">compuestos o palabras derivadas</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">αἱματος</td>
        <td class="border border-slate-300 text-xl text-center">haemato</td>
        <td class="border border-slate-300 text-xl text-center">hemato</td>
        <td class="border border-slate-300 text-xl text-center">hematología, hematoma, hematócrito, hemofilia hemodiálisis</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">κεφαλή</td>
        <td class="border border-slate-300 text-xl text-center">chefala</td>
        <td class="border border-slate-300 text-xl text-center">cefal</td>
        <td class="border border-slate-300 text-xl text-center">cefalalgia, encéfalo, encefalograma, encefalitis</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">κύκλος</td>
        <td class="border border-slate-300 text-xl text-center">chychlo</td>
        <td class="border border-slate-300 text-xl text-center">ciclo</td>
        <td class="border border-slate-300 text-xl text-center">biciclo, bicicleta, enciclopedia,triciclo, Cíclope</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">ἄνθρωπος</td>
        <td class="border border-slate-300 text-xl text-center">anthropo</td>
        <td class="border border-slate-300 text-xl text-center">antropo</td>
        <td class="border border-slate-300 text-xl text-center">antropología, antropomorfismo, antropocentrismo, filánttropo, licantropía.</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">ἧπατος</td>
        <td class="border border-slate-300 text-xl text-center">hepatho</td>
        <td class="border border-slate-300 text-xl text-center">hepato</td>
        <td class="border border-slate-300 text-xl text-center">hepatópata. hepatitis, hepatología, hepatoscopía,hepatopantitis.</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">δέρματος</td>
        <td class="border border-slate-300 text-xl text-center">dermato</td>
        <td class="border border-slate-300 text-xl text-center">dérmato</td>
        <td class="border border-slate-300 text-xl text-center">dermatitis, dermatoma, dermatología, epidermis,hipodérmico</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">ῥινός</td>
        <td class="border border-slate-300 text-xl text-center">rrino</td>
        <td class="border border-slate-300 text-xl text-center">rino</td>
        <td class="border border-slate-300 text-xl text-center">rinoterapia. rinitis, otorrino, rinología, rhinoderma</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-center">μαστός</td>
        <td class="border border-slate-300 text-xl text-center">masto
        <td class="border border-slate-300 text-xl text-center">masto</td>
        <td class="border border-slate-300 text-xl text-center">mastografía, mastitis, mastología, mastectomía, hipomastitis.</td>
      </tr>
      
    </tbody>
  </table>

   <?php ob_start(); ?>
  <p>Para repasar, realiza la actividad llamada “Aprendizajes sobre ejercicios de derivación”, al concluirla comparte con tus compañeros lo realizado.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a1', "Aprendizaje sobre ejercicios de derivación", $ActividadContent);
  ?>

  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
