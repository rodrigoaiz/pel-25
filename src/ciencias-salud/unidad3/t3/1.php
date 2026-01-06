<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Distingue entre factor de riesgo, factor protector, conducta de riesgo y factor resiliente.</h2>

  <p>Según la OMS, un <b>factor de riesgo</b> es cualquier condición, característica o comportamiento que aumente la probabilidad de contraer una enfermedad o sufrir una lesión. Estos factores dependen de las características socioeconómicas, ambientales, condiciones de la comunidad, así como el comportamiento y el lugar geográfico en donde viven los adolescentes. Los factores de riesgo pueden ser modificables como el consumo de tabaco, alcohol y sustancias adictivas, la obesidad, el sedentarismo, etc., y los no modificables como la edad, el sexo y los antecedentes familiares. Todos estos pueden afectar la salud física y mental de los jóvenes.</p>

  <p>La forma de razonamiento de los jóvenes sobre las conductas de riesgo es variable, ya que si se encuentran en una situación emocionalmente relajada o con un adulto, pueden tomar decisiones razonadas sobre los riesgos. En cambio si se encuentran con amigos o en situaciones emotivas, su decisiones son más impulsivas y menos racionales sobre los peligros que pueden correr.</p>

  <p>Los factores de riesgo más comunes que afectan a los adolescentes están relacionados con:</p>

    <ul>

        <li><b>Salud mental</b>, como la depresión, la ansiedad y trastornos de la conducta, que de no atenderse pueden llevar al extremo que es el suicidio, una de las causas de muerte que se presenta frecuentemente en los adolescentes.</li>

        <li><b>Comportamientos de riesgo</b>, los jóvenes suelen participar frecuentemente en actividades que los llevan a tener problemas, como pueden ser el consumo de alcohol y drogas, conductas sexuales sin protección que pueden causarles lesiones y/o enfermedades que pueden ser fatales.</li>

        <li><b>Determinantes sociales y económicos</b>, otros factores de riesgo son la pobreza, problemas familiares, la falta de apoyo social, el abuso y la violencia como la sexual y el bullyng. Estos pueden causar graves problemas en la salud mental y física de los adolescentes.</li>

        <li><b>Medios y normas de género</b>,  los medios de comunicación, las normas sociales y el género pueden provocar estrés y problemas de identidad en los jóvenes.</li>

    </ul>

    <p>De acuerdo con la OMS, las causas de muerte y discapacidad más frecuentes en los adolescentes son: los accidentes de tránsito, ahogamientos, violencia, consumo de alcohol, drogas y tabaco, la salud mental, enfermedades de transmisión sexual como el VIH, embarazos y partos precoces, sobrepeso y obesidad, entre otros.</p>

    <p>Las conductas de riesgo que llevan a cabo los adolescentes, son acciones que aumentan la probabilidad de sufrir consecuencias negativas para su salud y bienestar, ya que incrementan las posibilidades de tener un accidente o padecer una enfermedad. Estas pueden ser provocadas por factores físicos, biológicos, psicológicos, sociales y ambientales y sus efectos pueden ser inmediatos o a largo plazo. Algunas de las conductas de riesgo más comunes entre los adolescentes son: </p>

    <ol class="ol-number">

        <li><b>Consumo de drogas.</b>
          <ul>
            <li><b>Tabaco:</b> su consumo puede provocar cáncer, enfermedades respiratorias y cardiovasculares.</li>
            <li><b>Alcohol:</b> cuando se consume en grandes cantidades causa accidentes, enfermedades hepáticas, de salud mental y violencia.</li>
            <li><b>Abuso de medicamentos:</b> pueden provocar adicción, sobredosis y problemas de salud mental.</li>
            <li><b>Drogas ilícitas:</b> Su consumo puede desarrollar adicción y daños físicos, mentales y problemas legales.</li>
          </ul>

          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-drogas.webp', 'Drogadicción en adolescente.', 'https://www.freepik.es/fotos-premium/adolescente-triste-drogas-sentada-suelo-contra-pared_110397446.htm ', 'Freepik.');
              ?>
          </div>

      </li>

        <li><b>Actividades sexuales de riesgo.</b>
          <ul>
            <li><b>Relaciones sexuales precoces sin protección:</b> aumentan el riesgo de infecciones de transmisión sexual, embarazos no deseados y abortos, por la falta de uso de preservativos y anticonceptivos.</li>
            <li><b>Múltiples parejas sexuales:</b> propicia la aparición de infecciones de transmisión sexual.</li>
            <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-embarazo.webp', 'Embarazo en adolescentes.', 'https://upload.wikimedia.org/wikipedia/commons/4/47/Cambios_en_una_adolescente.JPG', 'wikimedia.');
              ?>
          </div>
          </ul>
        </li>

        <li><b>Conductas antisociales.</b>
          <ul>
            <li><b>Acoso y bullying:</b> tanto la víctima como el victimario pueden sufrir lesiones físicas, problemas de salud mental, depresión y ansiedad.
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-bullying.webp', 'Bullying entre adolescentes.', 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bullying_on_Instituto_Regional_Federico_Err%C3%A1zuriz_%28IRFE%29_in_March_5%2C_2007.jpg', 'wikimedia.');
              ?>
          </div>
          </li>
            <li><b>Violencia física y verbal:</b> puede causar lesiones físicas, psicológicas y alterar el bienestar emocional.
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-violencia.webp', 'Violencia física.', 'https://depositphotos.com/mx/photos/violencia-juvenil.html?qview=110081228', 'depositphotos.');
              ?>
          </div>
        </li>
            <li><b>Quebrantamiento de las normas:</b> se refiere al robo, vandalismo, pandillerismo, provocación de incendios, entre otras, las cuales pueden causar lesiones físicas, emocionales, materiales y tener consecuencias legales.</li>
            <li><b>Conducción de vehículos:</b> el no respeto del reglamento de tránsito, el  conducir bajo el efecto del alcohol o alguna droga, no usar cinturón de seguridad o casco, no respetar los límites de velocidad ni las señalizaciones, etc., aumentan el riesgo de lesiones graves inclusive la muerte.
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-accidente.webp', 'Accidente, joven en motocicleta choca contra un auto.', 'https://www.freepik.es/vector-gratis/composicion-isometrica-accidente-trafico-choque-motociclista-lesionado-automovil-motocicleta-ilustracion-vector-transeuntes-carretera_26763275.htm#query=accidente%20moto&position=14&from_view=keyword&track=ais_user&uuid=d8a06e65-6ecf-415b-8c6e-0d62e3235527?sign-up=google', 'freepik.');
              ?>
          </div>
        </li>
          </ul>
      
      
      </li>

        <li><b>Alimentación y actividad física.</b>

       <ul>
          <li><b>Dieta poco saludable:</b>consumo excesivo de grasas, azúcares y sal, bajo consumo de frutas y verduras, lo que puede causar problemas de obesidad, desnutrición y enfermedades crónicas.</li>

          <li><b>Trastornos de la alimentación:</b>se pueden presentar como bulimia y anorexia, que son causados por problemas de salud mental que los puede llevar a la muerte.</li>

          <li><b>El sedentarismo:</b>la falta de actividad física puede provocar problemas de obesidad, enfermedades cardiovasculares y diabetes tipo dos.
        
        <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t1-sedentarismo.webp', 'El sedentarismo puede provocar obesidad.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Computadoras_y_Obesidad.jpg/760px-Computadoras_y_Obesidad.jpg?20130706142548', 'wikimedia.');
              ?>
          </div>
        </li>


       </ul> 
      
      </li>

    </ul>

    <p>Es importante que los adolescentes conozcan las consecuencias que pueden traerles estas conductas de riesgo para su salud, su vida y su futuro, lo que les permitirá tomar decisiones más razonadas.</p>

  <?php ob_start(); ?>
  <p>Ve el siguiente video introductorio de UNICEF sobre factores de riesgo
</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a1', "Video", $ActividadContent);
  ?>

  <h3>Factor protector</h3>

  <p>La etapa de la adolescencia  se caracteriza por que los jóvenes sufren una serie de cambios importantes en su personalidad e identidad, por lo que es fundamental que cuenten con  los recursos personales, familiares y sociales que les ayuden a superar los cambios y problemas que se les presentan en esta etapa. De aquí la importancia de los <b>factores protectores</b>, que son aquellas características, condiciones, circunstancias y atributos relacionados con los comportamientos psicosociales, que les permiten reducir y afrontar situaciones adversas que se les presentan durante esta etapa, y así evitar el desarrollo de una enfermedad o un accidente. </p>

  <p>Los factores protectores pueden ser individuales, como la autoestima, la autonomía, el autocontrol y los valores que posea, los que ayudarán al joven a tomar mejores decisiones cuando se enfrente a algún evento de riesgo. Otro tipo de factores son los relacionados con su ambiente, como el apoyo de la familia, los amigos, la escuela, sus habilidades sociales, entre otros. En ambos casos evitarán que tenga conductas de riesgo. </p>

  <p>Es importante fortalecer los factores de protección en los adolescentes, para lograr un desarrollo saludable y capacidades para enfrentar los retos que la vida les presente en esta etapa. A continuación se mencionan algunos de los factores de protección que intervienen evitando conductas de riesgo. </p>

  <ol class="ol-number">

      <li><b>Apoyo familiar y social:</b> se refiere a un ambiente familiar sano que le dé seguridad y apoyo al adolescente, así como una red de amigos afines y que compartan valores.
    
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t3-apoyo.webp', 'Red de apoyo familiar.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Computadoras_y_Obesidad.jpg/760px-Computadoras_y_Obesidad.jpg?20130706142548', 'wikimedia.');
              ?>
          </div>
        
      </li>

      <li><b>Entorno escolar:</b> en este rubro es importante que se sienta parte de la escuela y que esté comprometido con su rendimiento académico; asimismo, que cuente con el apoyo de los profesores y programas extracurriculares de su interés.
    
          <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t3-escolar.webp', 'Entorno escolar seguro para los adolescentes.', 'https://www.freepik.es/search?format=search&last_filter=selection&last_value=1&query=Integracion+escolar&selection=1#uuid=5f9ccbe6-bb4a-4210-8f70-ddece7029d08', 'wikimedia.');
              ?>
          </div>
        
        </li>
      

      <li><b>Habilidades para la vida:</b> promover el desarrollo de habilidades para la resolución efectiva de problemas, el manejo adecuado del estrés y una comunicación asertiva.
    
          
        
      </li>

      <li><b>Participación en actividades positivas:</b> participar en deportes y actividades recreativas afines a sus gustos y que realice trabajo comunitario.
    
    <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t3-actividades.webp', 'Participación en actividades positivas.', 'https://www.freepik.es/foto-gratis/mujeres-tiro-medio-jugando-baloncesto_58395876.htm#fromView=search&page=1&position=5&uuid=73412805-2a2b-46e6-9f51-2c77db6a2aa4&query=Adolescentes+haciendo+deporte', 'wikimedia.');
              ?>
          </div>
        
        
        </li>

      <li><b>Acceso a servicios de salud:</b> recibir una educación sobre diversos temas de salud (educación sexual, reproductiva y nutrición), y tener derecho a los servicios médicos y de salud mental.</li>

      <li><b>Entorno comunitario positivo:</b> vivir en un lugar seguro y que cuente con todos los servicios urbanos y comunitarios, tales como bibliotecas, parques, centros juveniles y deportivos, etc.</li>

  </ol>

  <p>Los factores de protección con los que cuente el adolescente son de suma importancia para su sano desarrollo, ya que van a contrarrestar las consecuencias de los factores y conductas de riesgo a los que se enfrente el joven. Así mismo la familia, la sociedad, los sistemas de salud, el entorno y la escuela, juegan un papel importante ya que deben proporcionarle los factores de protección que requiere durante esta etapa, para reducir significativamente los riesgos y fomentar el desarrollo saludable de los adolescentes.</p>

  <h3>Factor resiliente</h3>

  <p>La resiliencia es la capacidad que tienen los adolescentes de adaptarse de forma positiva a circunstancias adversas, y esta les permite recuperarse y superarlas. La resiliencia se va desarrollando a lo largo de la vida de acuerdo con las interacciones con el medio ambiente en el que viven; se va construyendo con las características propias de cada persona, como la inteligencia, el sentido del humor, la autoestima, entre otras, y las externas como la cohesión familiar, el sentido de pertenencia escolar, el entorno, etc. La resiliencia implica ser capaces de regular las emociones ante los eventos adversos; es una capacidad que nos orienta al futuro, a la esperanza y a la fuerza, pero ante todo los orienta a la acción y los prepara para la edad adulta.</p>

  <p>Algunos de los factores resilientes en los adolescentes son: las relaciones de apoyo, la autoestima y la autosuficiencia, las habilidades para la vida, la flexibilidad y adaptabilidad, el sentido de propósito y metas, el entorno seguro y la participación en actividades positivas. Estos factores permiten a los adolescentes un desarrollo positivo, ya que los ayudan a superar las adversidades y a promover las habilidades y fortalezas necesarias para afrontar la vida y ser adultos saludables y exitosos.</p>

  <div class="mx-auto max-w-lg">
              <?php
                renderImage('u3-t3-resiliencia.webp', 'Resiliencia', 'https://www.fundacionunam.org.mx/wp-content/uploads/2018/01/RESILIENCIA1.jpg', 'wikimedia.');
              ?>
          </div>



      <?php
        renderVideoIframe('zzzaxJE2BeE', 'La Resiliencia en adolescentes y jóvenes');
      ?>


    <?php ob_start(); ?>
      <p>Los estudiantes se organizarán  en equipos de cuatro personas, para realizar una investigación sobre factores de riesgo, factores protectores y factores resilientes. Con la información obtenida diseñarán un guión que les servirá de guía para la realización de un video que contendrá: una introducción, el desarrollo de los temas y las conclusiones; debe contener una carátula con los siguientes datos: Institución, título del vídeo,  nombres de los elaboradores, fecha de entrega. El video puede tener una duración de entre 2 y 3 minutos; para su elaboración pueden utilizar imágenes fijas, o en movimiento, música, textos hablados o escritos, diferentes transiciones y todas las herramientas tecnológicas que tengan a su alcance.</p>
    <?php
       $ActividadContent = ob_get_clean();
      renderActividad('u3t3a2', "Video sobre factores de riesgo, protectores y resilientes", $ActividadContent);
    ?>


 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
