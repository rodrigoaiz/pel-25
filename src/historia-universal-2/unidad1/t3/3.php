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
  <h2>Desarrollo e implicaciones de la Primera Guerra Mundial</h2>
  
  <h3>Desarrollo del conflicto</h3>
  <p>Hay diversas propuestas para la periodización de la I Guerra Mundial; para este trabajo hemos recuperado la del historiador Wolfgang Mommsen, quien distingue cuatro momentos importantes para comprender el conflicto (si bien hay otras más recientes, se acercan bastante a esta periodización):</p>
  
  <p>Guerra de movimientos. De Julio a Diciembre de 1914. En esta etapa, los alemanes se movilizaron conforme al Plan Schlieffen (Guerra Relámpago, enfocada a la derrota de Francia en el frente Occidental para combatir posteriormente a Rusia). Asimismo, los dos sistemas de alianzas sostienen negociaciones con los países neutrales, para atraerlos a sus respectivos bandos. En esta fase, los alemanes violaron la neutralidad de Bélgica para ingresar a territorio francés, pero su avance fue detenido a partir de la Batalla del Marne (septiembre de 1914) y se replegaron hacia el Norte, estableciendo un frente estático. El Plan Schlieffen para lograr una victoria rápida de la Triple Alianza había fracasado.</p>
  
  <p>Guerra de Posiciones (trincheras) y estancamiento político. De enero de 1915 hasta fines de 1916. Los combates en el Frente Occidental se eternizaron en las trincheras; cualquier intento por ganar terreno al adversario tenía un alto costo en vidas humanas. Ejemplo de ello son los combates de Verdún y del Somme. Los alemanes optaron por llevar la batalla al mar, encaminando una guerra submarina; hundieron un barco británico -el Lusitania- que transportaba casi un centenar de ciudadanos norteamericanos en mayo de 1915. Posteriormente, el buque Sussex en marzo de 1916. Esta guerra submarina afectaba los intereses de Estados Unidos, pues ellos suministraban bienes e insumos de guerra a Inglaterra y Francia. La batalla submarina pretendía cortar esa línea de abastecimiento.</p>
  <p>En el Frente Oriental, Rusia combatía simultáneamente (sin mucho éxito) a Austrohungría y Alemania. Este estancamiento, y la duración de la guerra, empieza a provocar cada vez más sufrimiento e inconformidad en la población rusa en general; el descontento por la forma en que es conducida la guerra iba en aumento, y ello tendría sus propias consecuencias (como verás más adelante).</p>
  
  <p>Bloqueo naval aliado y entrada de los Estados Unidos a la Guerra 1917. Inestabilidad al interior de las naciones combatientes. Austrohungría enfrentó una crisis interna; la guerra prolongada había minado el ánimo de los combatientes y los grupos nacionalistas de oposición al régimen cobraron nuevo impulso.</p>
  <p>La entrada de los Estados Unidos al conflicto fue una reacción a la guerra submarina de los alemanes, al haber hundido otro barco - el Vigilentia- en abril, pero también una respuesta al telegrama Zimmerman; en ese documento, los alemanes ofrecían a México apoyarle para recuperar el territorio perdido (Texas, Nuevo México, la Alta California) a cambio de su apoyo a la Triple Entente.</p>
  <p>En Rusia iniciaron fuertes protestas en febrero, que desembocarán posteriormente en una rebelión abierta. El régimen zarista cae y Rusia abandona el conflicto, pactando la paz por separado con Alemania en el Tratado de Brest-Litovsk (diciembre de 1917). Con la salida de Rusia, la Triple Entente perdía a su principal combatiente en el Frente Oriental. No obstante, la Triple Alianza no logra aprovechar esta situación a su favor; además, la entrada de los Estados Unidos al conflicto significó para la Entente contar con tropas y armamento nuevos.</p>
  
  
  <p>Negociaciones de Paz. Adelantándose a la previsible derrota alemana, Woodrow Wilson (presidente de los Estados Unidos) pronunció un discurso en enero de 2018, en el cual expuso una serie de propuestas para modificar las condiciones que habían dado origen a la Guerra, y para tratar de impedir un nuevo conflicto en el corto plazo. Esta propuesta se conoce como los “14 puntos de Wilson” y se enumeran a continuación:</p>

  <ul class="ul-disc">
    <li>Acuerdos de paz negociados abiertamente (...) La diplomacia procederá siempre (...) públicamente.</li>
    <li>Libertad absoluta de navegación sobre los mares (...)</li>
    <li>Supresión, hasta donde sea posible, de todas las barreras económicas (...)</li>
    <li>Suficientes garantías recíprocas de que los armamentos nacionales serán reducidos al límite compatible con la seguridad interior del país.</li>
    <li>Libre ajuste (...) de todas las reivindicaciones coloniales (...)</li>
    <li>Evacuación de todos los territorios rusos (...)</li>
    <li>Bélgica (...) deberá ser evacuada y restaurada.</li>
    <li>Todo el territorio francés deberá ser liberado (...) El daño hecho a Francia en 1871, en lo que se refiere a Alsacia-Lorena (...), deberá ser reparado.</li>
    <li>Deberá efectuarse un reajuste de las fronteras de Italia, siguiendo las líneas de las nacionalidades claramente reconocibles.</li>
    <li>A los pueblos de Austria-Hungría (...) deberá serles permitido, con la mayor premura, la posibilidad de un desarrollo autónomo.</li>
    <li>Rumania, Serbia y Montenegro deberán ser evacuados (...) A Serbia se le concederá libre acceso al mar (...)</li>
    <li>A los territorios turcos del actual Imperio otomano se les garantizará plenamente la soberanía (...), pero las otras nacionalidades que viven actualmente bajo el régimen de este Imperio deben (...) disfrutar de una total seguridad de existencia y de poderse desarrollar sin obstáculos.</li>
    <li>Deberá constituirse un Estado polaco independiente, que comprenda los territorios incontestablemente habitados por polacos, los cuales deberán tener asegurado el acceso al mar (...)</li>
    <li>Deberá crearse una Sociedad general de las Naciones en virtud de acuerdos formales, que tenga por objeto ofrecer garantías recíprocas de independencia política y territorial tanto a los pequeños como a los grandes estados."</li>
  </ul>

  <p><em>Discurso del presidente Wilson al Congreso de EE.UU., 8 de Enero de 1918</em></p>
  
  <?php
  renderImage('byeznhpyxeuztibuo.webp', 'Imagen de Byeznhpyxeuztibuo', 'https://commons.wikimedia.org/wiki/File:Governor_Woodrow_Wilson_for_President_(4515334672).jpg', 'Wikimedia Commons');
  ?>

<section>
  <p>
    Días más tarde, se dio inicio en París a las reuniones para formalizar la paz. 
    El resultado de estas reuniones fue el Tratado de Versalles, que impuso a Alemania 
    una serie de sanciones muy severas. El historiador Eric Hobsbawm resume de la siguiente manera:
  </p>

  <blockquote>
    “Se habían impuesto a Alemania unos pagos onerosos y no definidos en concepto de 
    «reparaciones» por el costo de la guerra y los daños ocasionados a las diferentes 
    potencias vencedoras. Para justificarlas se incluyó en el tratado de paz una cláusula 
    que declaraba a Alemania única responsable de la guerra (la llamada cláusula de «culpabilidad»), 
    que, además de ser dudosa históricamente, fue un auténtico regalo para el nacionalismo alemán.  
    [...] En 1921 la suma se fijó en 132.000 millones de marcos de oro, que todo el mundo sabía 
    que era imposible de pagar” <br>
    <cite>(Hobsbawm op cit:105)</cite>
  </blockquote>

  <p>
    Del bando derrotado, solo Alemania se mantuvo en pie (el imperio Austrohúngaro y el 
    imperio Turco se desintegraron). Por eso, Alemania tuvo que asumir todas las consecuencias 
    de la guerra, como lo marcaba la cláusula de culpabilidad del Tratado de Versalles. 
    Además, fue despojada de sus colonias en África, perdió Alsacia y Lorena, y otros territorios 
    que había arrebatado a Rusia con el Tratado de Brest-Litovsk.
  </p>

  <p>
    El Tratado de Versalles también impuso el pago de reparaciones, dejando a Alemania en ruinas. 
    Además, debía reducir su ejército, su flota naval y no podía tener Fuerza Aérea, 
    lo que debilitaba gravemente su posición frente a Inglaterra y Francia.
  </p>

  <p>
    Los Estados Unidos no estuvieron de acuerdo con el tratado, pues era claro que 
    generaría problemas a mediano plazo, pero no intervinieron demasiado en los asuntos europeos.
  </p>
</section>

<section>
  <h2>Reordenamiento territorial</h2>
  <p>
    La I Guerra Mundial tuvo varias consecuencias políticas, como la reconfiguración del 
    continente europeo tras la desintegración de los imperios Turco y Austrohúngaro. 
    Alemania dejó de ser un imperio y se convirtió en la República de Weimar. 
    Surgieron nuevas naciones en Europa.
  </p>

  <p><strong>Identifica en este mapa cuáles son:</strong></p>

    

   <img class="mx-auto" src="../../assets/img/europa-antes-despues.webp" alt="europa antes y despues">



  


  <p>Rusia también desapareció como imperio, aunque no directamente a causa de la I Guerra Mundial sino como consecuencia de una revolución que ocurrió dentro de sus fronteras: la Revolución Socialista. En la siguiente unidad aprenderás más sobre el tema.</p>

  <p>Entre las consecuencias demográficas habría que mencionar muy claramente: La devastación de Europa. Alrededor de 15 millones de personas, entre militares y víctimas civiles, perdieron la vida. La capacidad de los ejércitos creció como nunca antes, y se puso en marcha la creación de armas de destrucción masiva.</p>

  <p>La capacidad productiva de los países en combate se fue a pique durante y después de la guerra, pues miles de hombres jóvenes se encontraban combatiendo. Las mujeres incrementaron su presencia en el mundo laboral, ahí donde la fuerza de trabajo masculina era escasa.</p>

  <p>La incorporación de la mujer al mercado laboral alcanza unas cifras nunca vistas hasta el momento. Además, asumen trabajos tan dispares como como deshollinadoras, conductoras de camiones u obreras en la industria armamentística. Así entre Francia y Gran Bretaña más de un millón y medio de mujeres trabajaron en fábricas de armamento; mientras en Alemania el 38% de la fábrica bélica Krupp estaba compuesto por mujeres en 1918.</p>
  
  <?php
  renderImage('sopa-de-pato.webp', 'Imagen de Sopa de pato', 'https://commons.wikimedia.org/wiki/File:Women_at_work_during_the_First_World_War_Q27873.jpg', 'Wikimedia Commons');
  ?>

  <p>Las mujeres también estuvieron presentes en los frentes de batalla; como enfermeras y en tareas de asistencia pero algunas sí se integraron como combatientes e inclusive en Rusia se conformaron batallones de mujeres. Esta participación en el esfuerzo de guerra (desde el hogar, desde el frente en diversas funciones) fue muy importante para una toma de conciencia en torno a los derechos que estarían dispuestas a defender más adelante.</p>
  
  <?php
  renderImage('ras67-primera-mujer-piloto.webp', 'Mikhailovna Shakhovskaya. Primera mujer piloto. Imagen de ras67', 'https://commons.wikimedia.org/w/index.php?curid=17997425', 'Wikimedia Commons');
  ?>

  <p>En cuanto a los Estados Unidos, la guerra significó crecimiento de las exportaciones puesto que en las naciones europeas toda la energía social se concentró hacia el esfuerzo de guerra. En Europa, la actividad económica, la producción, la agricultura quedaron de lado durante las batallas. Los productos que se requerían eran importados desde los Estados Unidos. Esto hizo CRECER la producción de ese país durante la guerra. Fue una época de gran prosperidad para los estadounidenses, y al finalizar el conflicto se convirtieron en el principal acreedor (muchos países estaban endeudados con ellos). Esto tendría consecuencias catastróficas, como podrás ver más adelante.</p>
  
  <h3>Algunas consecuencias de la Primera Guerra Mundial</h3>
  <p>Para finalizar revisemos algunos de nuestros aprendizajes mediante el siguiente reto.</p>
  <?php ob_start(); ?>
  <p>Elige la opción que mejor responda: ¿Cuál fue una consecuencia principal del Tratado de Versalles?</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a3', "Ir a la actividad", $ActividadContent);
  ?>

  <p>Revisa el siguiente video acerca de la incorporación de la mujer al mercado laboral durante la primera guerra mundial.</p>
  <?php
  // La mujer en el mercado laboral durante la 1a guerra mundial
  echo '<iframe width="960" height="730" 
          src="https://www.youtube.com/embed/IaeBZOQKFlc" 
          title="La mujer en el mercado laboral durante la 1a guerra mundial"
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>';
?>

  <h3>Referencias</h3>
  <ul class="ul-disc">
    <li>Hobsbawm, Erik. (1994). <em>Historia del Siglo XX</em>. Barcelona, ed Crítica.</li>
    <li>Hobsbawm, Erik. (2009). <em>La Era del Imperio</em>. Barcelona, ed Crítica.</li>
    <li>Mommsen, Wolfgang. (1991). <em>La época del imperialismo</em>. Madrid, ed Siglo XXI.</li>
    <li>Renouvin, Pierre. (1990). <em>La Primera Guerra Mundial</em>. Barcelona, Oikos-Tau ediciones.</li>
    <li>Huguet, M. (2016). <em>Batallar fuera de casa: mujeres de uniforme en la Primera Guerra Mundial</em>. <em>Journal of Feminist, Gender and Women Studies</em>, (3). https://doi.org/10.15366/jfgws2016.3.005</li>
    <li>Lowe, Norman. (2013). <em>Guía Ilustrada de Historia Moderna</em>. México, Fondo de Cultura Económica.</li>
    <li>Redacción National Geographic. (2023/03/08). <em>La mujer en la Primera Guerra Mundial: ¿un nuevo camino hacia la igualdad?</em>. National Geographic. https://www.nationalgeographic.es/historia/la-mujer-en-la-primera-guerra-mundial-igualdad</li>
  </ul>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>