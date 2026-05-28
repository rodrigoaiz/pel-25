<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¿Cómo sabemos qué es la masculinidad?</h2>
  <div class="max-2xl mx-auto">
    <?php
    renderImage('iga4-img01.webp');
    ?>
  </div>
  <p>En el aprendizaje 4 te invitamos a reconocer y cuestionar algunos de los presupuestos de la masculinidad tradicional. Pero, ¿cómo sabemos qué es la masculinidad tradicional? Si bien la respuesta es compleja, en los estudios de género se utilizan distintas herramientas teórico-metodológicas para comprender la construcción del género masculino a partir de los comportamientos generalizados de los hombres.</p>
  <p>En esta primera actividad del aprendizaje 4 leerás un texto que te permitirá reconocer distintas formas de ser hombre a partir de los mandatos o pilares que se imponen para ejercer una masculinidad tradicional. Además, te invitamos a reflexionar sobre las formas en que algunos de estos pilares o mandatos impiden el desarrollo de otros hombres y mujeres e incluso promueven la violencia de género.</p>
  <p class="font-bold text-xl text-fuchsia-900">Propósito</p>
  <p>Identificar los presupuestos de la masculinidad mediante la herramienta de la caja de la masculinidad, para diferenciar la masculinidad tradicional, de las que están en transición o las alternativas.</p>
  <p><strong>Instrucciones:</strong></p>
  <ol class="ol-number">
    <li>Lee la siguiente síntesis de los documentos “¿Qué es el patriarcado?” y “Cómo comenzó el patriarcado (y cuán posible es que la evolución se deshaga de él)”. Si quieres profundizar tu lectura, puedes consultar los textos completos que se encuentran en las referencias. </li>
    <li><strong>Toma nota en tu cuaderno de trabajo</strong> de la asignatura.</li>
    <li>Con base en la lectura, resuelve el ejercicio de relación de columnas cuantas veces sea necesario, para que tengas un dominio de los conceptos.</li>
  </ol>
</section>
<div class="w-2/3 mt-6 p-10 mx-auto bg-secondary/30">
  <div class="max-w-screen-lg mx-auto py-5 px-5 md:px-2">
    <p class="uppercase font-bold text-xs tracking-widest text-fuchsia-900 mb-1">Lectura</p>
    <h3 class="font-bold border-b-2 border-dashed border-fuchsia-900 pb-2 mb-4">Presupuestos de la masculinidad</h3>
    <p>Una de las herramientas con perspectiva de género que pretende entender la construcción del género es la <strong>caja de la masculinidad</strong>. Esta es una metáfora que se utiliza para describir la masculinidad tradicional a partir de pilares o mandatos que definen, imponen o idealizan como deberían ser o comportarse los hombres.</p>

    <p>Sin embargo, hay hombres que ejercen una masculinidad en transición, porque se identifican parcialmente o han modificado algunos de esos pilares o mandatos. También existen otros hombres cuya masculinidad se considera alternativa porque tienen formas de ser y comportamientos distintos a los pilares o mandatos de la masculinidad tradicional.</p>
    <p class="font-bold mt-8 text-fuchsia-900">¿Cuáles son los presupuestos de la masculinidad?</p>
    <p>Al igual que lo femenino, la masculinidad no es algo con lo que se nace, sino que lo conformamos y transformamos a partir de nuestro entorno histórico, social, político y cultural.</p>
    <div class="grid grid-cols-4 gap-4">
      <div class="col-span-2">
        <p>Los estudios de género relacionados con la masculinidad se sintetizan en cuatro ejes:</p>
        <ol class="list-decimal ml-8">
          <li>Identificar sus mecanismos.</li>
          <li>Comprender sus consecuencias.</li>
          <li>Descubrir masculinidades diversas, es decir, otras formas de ser hombre.</li>
          <li>Rastrear cambios en los comportamientos que eran predominantes.</li>
        </ol>
        <p>Como resultado de estos estudios de género han surgido varios conceptos y modelos para describir la masculinidad. En este aprendizaje nos enfocaremos en 4 de ellos: <strong>la masculinidad hegemónica, la tradicional, la dominante y las alternativas</strong>. A continuación, describiremos cada una de ellas:</p>
      </div>
      <div class="col-span-2">
        <?php
        renderImage('iga4-img04.webp');
        ?></div>
    </div>
    <?php
    $accordionItems1 = [
      [
        'title' => 'Masculinidad hegemónica',
        'content' => '<p>El diccionario de la Real Academia Española (RAE) define la palabra hegemónica como “supremacía de cualquier tipo.” Es decir, que se trata de una masculinidad superior y dominante.</p>
            <p>La masculinidad hegemónica está compuesta por comportamientos ampliamente aceptados que ejercen presión sobre la forma ideal de ser hombre. Estos comportamientos posicionan, permiten y justifican que los hombres dominen a las mujeres (Connell y Messerschmidt, 2005).</p>
            <p>La masculinidad hegemónica varía en cada contexto social y cultural, por lo que no existe una sola forma de definir sus comportamientos. Por ejemplo, mientras que en México una forma de masculinidad hegemónica es el machismo, en Japón es el hombre asalariado (salary man), y en Reino Unido es la masculinidad gerencial (Connell y Messerschmidt, 2005).</p>'
      ],
      [
        'title' => 'Masculinidad tradicional',
        'content' => '<p>"La masculinidad tradicional se define en oposición a lo femenino: los hombres no lloran, no cuidan y tienen que proveer" (ONU Mujeres, s/f, p. 6).  Esto significa que un hombre debe comportarse y hacer cosas opuestas a las mujeres.</p>
            <p>La masculinidad tradicional se basa en roles y estereotipos de género rígidos, que fomentan la desigualdad y las relaciones de poder, dominio, debilidad y sumisión entre hombres, mujeres, infancias, y diversidades y disidencias sexo-genéricas. </p>
            <p>El principal mecanismo para preservar la masculinidad tradicional es ejercer presión para que los hombres ajusten su comportamiento o se desempeñen de acuerdo con las expectativas de lo que se considera viril o masculino. Por ejemplo, cuando se impide que un hombre demuestre sus sentimientos, o se exige que él sea el responsable de proteger a una mujer.</p>'
      ],
      [
        'title' => 'Masculinidad dominante',
        'content' => '<p>De acuerdo con la Comisión Nacional de los Derechos Humanos (CNDH) la masculinidad dominante "causa muchos problemas debido a que busca la subordinación de las mujeres, la violencia entre hombres y la negación de las necesidades emocionales y de autocuidado de los propios varones" (septiembre, 2022/4VG/BAPJ).</p>
            <p>Ello implica que, aquellos hombres que ejercen una masculinidad dominante recurren a la violencia -digital, emocional, económica, física, institucional, psicológica, patrimonial, sexual, verbal, entre otras- para imponer su voluntad sobre otras personas. Cabe aclarar que ser hombre no es sinónimo de ser violento.</p>
            <p>Los roles, estereotipos, creencias o expectativas que impone la masculinidad dominante pueden ser insostenibles, incluso para los propios hombres. Por ejemplo, no acudir al médico cuando se está enfermo o por un chequeo de rutina por la creencia de que un hombre debe ser fuerte.</p>'
      ],
      [
        'title' => 'Masculinidades alternativas',
        'content' => '<p>El glosario para la igualdad de INMUJERES diferencia la masculinidad de las masculinidades.</p>
            <p>La <strong>masculinidad</strong>, en singular, hace referencia a los hombres que definen su virilidad y hombría a partir de ciertas prácticas.</p>
            <p>El término <strong>masculinidades</strong>, en plural, es el proceso por el cual los hombres reflexionan sobre su identidad para liberarse de estereotipos y roles que promueven la violencia de género. A estas masculinidades también se les conoce como masculinidades alternativas. </p>
            <p>Los hombres que ejercen una masculinidad alternativa analizan y revisan su forma de ser, la educación que recibieron, sus relaciones sociales y su participación para entender de qué manera se ejerce el patriarcado. Mediante este análisis buscan modificar su comportamiento y sus relaciones, creando estrategias que se contraponen a las jerarquías, el dominio, la denigración, o el rechazo a mujeres, infancias, y diversidades y disidencias sexo-genéricas.</p>'
      ]
    ];
    renderAccordion($accordionItems1, 'primero-');
    ?>
    <p class=" font-bold text-fuchsia-900 mt-8">Presupuestos de la masculinidad</p>
    <p>Pero, ¿cómo sabemos las diferencias entre las masculinidades?</p>
    <p>En su análisis para comprender los géneros femenino y masculino, Marcela Lagarde propuso una normatividad compuesta de "códigos, leyes, mandatos y mandamientos escritos, memorizados y trasmitidos oral, ejemplar, gráfica o imaginariamente" (1996, p. 15). Esto refiere al concepto de mandatos de género que veremos a continuación.</p>
    <p class="font-bold text-fuchsia-900 mt-4">Presupuestos de la masculinidad: los mandatos</p>
    <p>El concepto de mandatos de género se refiere a costumbres y tradiciones que se validan socialmente y se transmiten de generación en generación. Los mandatos de género condicionan las formas en que hombres y mujeres (deben) comportarse, actuar, interactuar y relacionarse en el ámbito de lo público y lo privado.</p>
    <p>Una herramienta teórico-metodológica para estudiar y comprender estos mandatos es la "Caja de la Masculinidad" que veremos a continuación.</p>
    <p>Una herramienta teórico-metodológica para estudiar y comprender estos mandatos es la "Caja de la Masculinidad" que veremos a continuación.</p>
    <ul class="ul-disc ml-10">
      <li>La metáfora es que hay hombres que están dentro, porque tienen todas o casi todas las características de la caja de la masculinidad.</li>
      <li>Hay hombres que están al borde de la caja, porque tienen algunas de las características.</li>
      <li>Y hay hombres que están fuera de la caja, porque no tienen o casi no tienen las características de la masculinidad tradicional.</li>
    </ul>
    <div class="w-xl mx-auto">
      <?php
      renderImage('iga4-img05.webp');
      ?>
    </div>
    <p>Originalmente, la caja de la masculinidad se propuso con <strong>7 pilares (o mandatos)</strong>, que son: autosuficiencia, ser fuerte, agresión y control, atractivo físico, heterosexualidad y homofobia, roles masculinos rígidos e hipersexualidad.</p>
    <p>Sin embargo, en los estudios de género se pueden incluir o proponer otros mandatos dependiendo de la cultura, la edad, el grupo social, entre otras variables de la población que será estudiada. Los resultados estadísticos de estos estudios permiten identificar los mandatos que predominan, y así interpretar los porcentajes de la población que están dentro, al borde, o fuera de la caja de la masculinidad. Es decir, lo que define a la masculinidad hegemónica de ese grupo.</p>
    <p>A continuación, se presentan algunos mandatos de la masculinidad. Los mandatos que aparecen en color <strong class="text-fuchsia-900">violeta</strong> se retoman en la caja de la masculinidad.</p>
    <p class="font-bold text-center text-fuchsia-900 my-4">Mandatos de la masculinidad</p>
    <div class="grid grid-cols-3 gap-2">
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Agresión y control</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Conductas temerarias y violentas</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Roles masculinos rígidos</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ambición de poder</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Evitar el autocuidado</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser fuerte</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Atractivo físico</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Heterosexualidad obligatoria y homofobia</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser importante</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Autosuficiencia</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none font-bold text-fuchsia-900">Hipersexualidad</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser procreador</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Censurar a los grupos subordinados</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Inteligencia racional</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser protector</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Comportamiento y rendimiento diferenciado</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Restricción emocional</div>
      <div class="bg-purple-100 rounded-lg p-2 text-center content-center leading-none text-gray-900">Ser proveedor</div>
    </div>
  </div>
</div>
</div>
<section>
  <?php ob_start(); ?>
  <p>Ahora resuelve el ejercicio.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a1', "Mandatos de la masculinidad.", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>