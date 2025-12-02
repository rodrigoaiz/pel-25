<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2> Reconoce los diferentes métodos de investigación en el área de la salud</h2>

  <p>En esta unidad, se pretende que comprendas los métodos que intervienen en el proceso de la construcción de los conocimientos en el campo de la salud, por lo tanto es importante promover estrategias que te permitan tener un aprendizaje significativo, para que seas capaz de organizar científicamente tus conocimientos, y de esta manera puedas tomar decisiones razonadas sobre los diferentes aspectos de tu salud, y  cumplir con uno de los objetivos de la unidad que es, que reconozcas que las Ciencias de la Salud utilizan al método científico experimental en la comprensión del proceso salud-enfermedad. </p>

  <p>A lo largo de esta unidad, adquirirás los elementos necesarios que te permitirán diseñar tus propias investigaciones en el campo de la salud, y comprenderás que los conocimientos de esta disciplina son producto de una metodología científica rigurosa. Valorarás la importancia de la salud pública, en la prevención y control de las enfermedades, y desarrollarás destrezas, habilidades, actitudes y valores.</p>

  <p>El método clínico, surge en Grecia a finales del siglo VI a.C., consiste en una secuencia de pasos para estudiar y comprender el proceso de salud-enfermedad de un individuo en toda su integridad, social, biológica y psicológica. En las Ciencias de la Salud, en especial en la medicina, el método clínico son la serie de  acciones que el médico desarrolla, para llegar a un diagnóstico y tratamiento del paciente.</p>

  <p>El método epidemiológico es una herramienta que permite la investigación, el estudio de las enfermedades y la salud de las poblaciones, se sabe que desde hace aproximadamente 3000 años ya se conocían las enfermedades epidémicas, y se buscaron mecanismos para tratar de prevenirlas y evitar los contagios. En la actualidad tanto el método clínico como el epidemiológico son herramientas importantes en la salud de las personas y de las poblaciones.</p>

  <p>Uno de los hechos más impactantes que le ocurrieron al hombre primitivo, fue tratar de entender qué le causaba malestar, preocupación y zozobra, lo que lo llevó a investigar las causas, generando la necesidad de buscar el conocimiento e interpretación adecuada de este proceso. Con esto se inició el desarrollo del conocimiento médico, el cual pudo explicar la enfermedad y encontrar alternativas para ayudar al enfermo.</p>

  <p>Los métodos de investigación, son herramientas que ayudan a la adquisición y sistematización del conocimiento y permiten obtener información, analizar datos y responder preguntas de investigación, que llevan al  avance en el conocimiento y a la solución de problemas. Por lo tanto, son los procedimientos o enfoques sistemáticos que los investigadores utilizan para recolectar, analizar e interpretar datos con el objetivo de responder a preguntas o probar hipótesis. Estos métodos proporcionan una estructura y un marco para llevar a cabo la investigación de manera rigurosa y confiable. Existen varios métodos de investigación en Ciencias de la Salud, como son los siguientes: </p>

  <h3>Método experimental</h3>

  <p>El método experimental, es fundamental en la investigación científica, porque permite establecer relaciones causales entre variables y proporciona una base sólida para la toma de decisiones y la formulación de teorías. Cuando nos referimos a variables, estamos hablando de una característica, cualidad o propiedad observada que puede adquirir diferentes valores y es susceptible de ser cuantificada o medida en una investigación científica, se pueden encontrar las variables independientes que son las que manipula un investigador en un experimento, estás variables son la causa que afecta a otra variable y puede tomar valores numéricos, y las variables dependientes, estas no son manipuladas por el  investigador, y son las que pueden cambiar como resultado de la acción de las variables independientes. Las variables antes mencionadas, pueden ser cualitativas ( expresan características o cualidades) o cuantitativas (se expresan mediante números). Por ejemplo: la prescripción de un medicamento en un paciente para mejorar su salud, aquí la variable independiente es el medicamento que se administra y la variable dependiente es la mejora en la salud del paciente. </p>

  <p>El método experimental está basado en el método científico cuyo propósito es estudiar la relación entre las variables que se están estudiando en una investigación, en donde el investigador controla las condiciones en las que se realiza el experimento, manipula las variables, utiliza instrumentos de precisión para obtener información precisa, compara los datos con estudios realizados anteriormente y puede repetirlo para confirmar los resultados. El método experimental, no es rígido, ya que puede modificarse, de acuerdo a las características y necesidades de la investigación. Los pasos del método experimental son:</p>

  <ul>
    <li><b>Observación.</b> Es el punto de partida, para iniciar una investigación a partir de los hechos o fenómenos naturales que la ciencia pretende explicar</li>

    <li><b>Planteamiento del problema.</b> Debe ser definido en forma clara, sencilla y sin ambigüedades, factible y pertinente, que explique lo se va a investigar, relacionado con algún fenómeno natural, esto  ayuda a establecer la base teórica y práctica del estudio.</li>

    <li><b>Formulación de hipótesis.</b> Es una afirmación tentativa, razonada y basada en conocimientos científicos, que se realiza con el propósito de explicar algún fenómeno natural, debe de tener relación entre las variables de estudio y anticipar el resultado que se espera obtener en la investigación, y que puede ser sometida a prueba mediante la experimentación.</li> 

    <li><b>Diseño experimental:</b> Es un plan organizado de acuerdo a la hipótesis planteada, que se elabora para realizar un experimento, en el cual se incluyen los pasos a seguir y los materiales que se utilizarán. El propósito del diseño experimental, es comprobar la validez de la hipótesis, para  obtener resultados confiables y permitir sacar conclusiones válidas sobre las relaciones causales, entre las variables estudiadas. El control de variables en un experimento, es muy importante, ya que pueden influir o alterar los resultados, para evitar esto, se deben mantener constantes todas las variables que puedan influir, excepto la variable independiente.</li>

    <li><b>Recopilación de datos:</b> Estos se recopilan de manera cuidadosa y sistemática, pudiendo implicar el uso de instrumentos de medición, la realización de observaciones detalladas y el registro de todos los datos relevantes.</li>

    <li><b>Análisis de datos:</b> Los datos obtenidos, se examinan, analizan e interpretan, utilizando métodos estadísticos para determinar la significancia de los datos, de esta manera evaluar si los resultados se deben a la manipulación de la variable independiente o al azar,   se presentan de manera clara y comprensible, ya sea en forma de tabla, gráficos u otras representaciones visuales. El objetivo del análisis de datos es, identificar patrones, relaciones o tendencias que puedan respaldar o refutar la hipótesis</li>

    <li><b>Conclusiones:</b> En base al análisis de resultados, se llega a una  conclusión, la hipótesis puede ser aceptada o rechazada en función de la evidencia experimental, la conclusión también puede llevar a la formulación de nuevas preguntas y al planteamiento de nuevas hipótesis.</li>

    <li><b>Bibliografía:</b> Son las citas y referencias consultadas a lo largo de todo el trabajo de investigación.</li>

    <li><b>Comunicación de los resultados:</b> Los resultados se presentarán en un informe, de manera clara, accesible y  fáciles de entender, de forma organizada y de manera lógica, así mismo se destacará la importancia de los resultados obtenidos relacionándolos con la literatura existente y la hipótesis planteada, que conducirán a la discusión e interpretación relacionada con los resultados y sus implicaciones. Finalmente a partir de los datos principales y la respuesta a la hipótesis se plantea la conclusión, el último elemento se refiere a las citas y referencias utilizadas.</li>

  </ul>

  <p>A través de la historia ha habido una gran cantidad de científicos que contribuyeron al desarrollo del método científico, como una forma ordenada de llevar a cabo una investigación orientada a generar nuevos conocimientos, entre ellos destacan:</p>

 <ul>
    <li><b>Francis Bacon (1561-1626)</b>  filósofo, estadista, científico y escritor inglés, quien es considerado uno de los fundadores del método científico moderno.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-francis-bacon.webp', 'Francis Bacon defendió la observación sistemática de la naturaleza y la experimentación para obtener conocimientos.', 'https://upload.wikimedia.org/wikipedia/commons/1/11/Francis_Bacon%2C_Viscount_St_Alban_from_NPG_%282%29.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Isaac Newton (1643-1727)</b> físico y matemático inglés famoso por sus leyes del movimiento y la ley de la gravitación universal.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-isaac-newton.webp', 'Issac Newton su obra "Philosophiæ Naturalis Principia Mathematica" es uno de los textos científicos más influyentes.', 'https://upload.wikimedia.org/wikipedia/commons/3/3b/Portrait_of_Sir_Isaac_Newton%2C_1689.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Charles Darwin (1809-1882)</b>, naturalista inglés conocido por su teoría de la evolución por selección natural.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-charles-darwin.webp', 'Charles Darwin', 'https://upload.wikimedia.org/wikipedia/commons/3/33/Charles_Darwin_by_Julia_Margaret_Cameron%2C_c._1868.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
         <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-origen.webp', 'Ejemplar de la primera edición de “El Origen de las Especies” de Charles Darwin.', 'https://upload.wikimedia.org/wikipedia/commons/8/8f/Origin_of_Species.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Louis Pasteur (1822-1895)</b>, químico y microbiólogo francés quien hizo contribuciones significativas a la microbiología y la medicina.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-louis-pasteur.webp', 'Louis Pasteur en su laboratorio de microbiología, desarrolló la técnica de la pasteurización y demostró la teoría germinal de las enfermedades.', 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Albert_Edelfelt_-_Louis_Pasteur_-_1885.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Marie Curie (1867-1934)</b> física y química francesa de origen polaco, que fue pionera en el campo de la radiactividad.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-marie-curie.webp', 'Marie Curie y su esposo Pierre, ella fue la primera persona en recibir dos premios Nobel en diferentes campos científicos (Física y Química).', 'https://upload.wikimedia.org/wikipedia/commons/6/6c/Pierre_and_Marie_Curie.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>
  </ul>

  <p>Estos son solo algunos ejemplos de científicos notables, en diferentes momentos de la historia del desarrollo del método científico, y todos ellos han influido de manera importante en el avance de las ciencias y han contribuido al conocimiento en diversas disciplinas.</p>

  <h3>Método Clínico</h3>

  <p>El método clínico surge a finales del siglo VI a.C. en la antigua Grecia, en la escuela hipocrática de medicina que se basaba en “el método hipocrático”, que expresaba una actitud racional, libre de interpretaciones mágicas, sobrenaturales o divinas, mediante la observación directa y el estudio del paciente y no de la enfermedad, lo cual permitía hacer una evaluación honesta y ayudar a las fuerzas naturales del cuerpo humano a restablecer el equilibrio. En los tratados conocidos como Corpus Hippocraticum, se trataban diferentes tópicos que conducían a la idea principal del papel del médico, como de alguien cuya obligación ética y racional era la de ayudar al cuerpo a recomponerse.</p>

  <p>Otros personajes importantes para la medicina fueron:</p>

  <ul>
    <li><b>Claudio Galeno (129-216 d.C.)</b> nacido en Pérgamo, médico y filósofo, que ejerció una profunda influencia en la medicina.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-claudio.webp', 'Claudio Galeno', 'https://upload.wikimedia.org/wikipedia/commons/8/87/Galen._Lithograph_by_P._R._Vign%C3%A9ron._Wellcome_V0002113.jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Avicena (980-1037)</b> médico y filósofo árabe, su libro <b>Canon de Medicina</b> fue considerado una verdadera enciclopedia médica y síntesis de la medicina clásica y árabe, lectura obligada en las Universidades europeas hasta la edad moderna.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-avicena.webp', 'Retrato de Avicena', 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Pursina.jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Thomas Sydenham (1624-1689)</b> médico inglés, conocido como el hipócrates inglés apoyó la observación cuidadosa de los pacientes y la descripción precisa de los síntomas para entender las enfermedades.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-thomas-sydenham.webp', 'Retrato de Thomas Sydenham.', 'https://upload.wikimedia.org/wikipedia/commons/7/78/Thomas_Sydenham_by_Mary_Beale.jpg', 'recuperado el 4 de diciembre de 2023'); ?>
         </div>
    </li>

    <li><b>Sir Williams Osler (1849-1919)</b> médico nacido en Canadá, considerado el padre de la práctica clínica moderna.
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-sir-william-osler.webp', 'Sir William Osler el  “Padre de la práctica clínica moderna”.', 'https://upload.wikimedia.org/wikipedia/commons/1/17/Sir_William_Osler.jpg', 'recuperado el 11 de diciembre de 2023'); ?>
         </div>
    </li>
  </ul>

  <p>El método clínico ha evolucionado a lo largo de la historia, pasando de ser solo prácticas basadas en la observación y la experiencia, a integrar tecnologías y enfoques más avanzados. La atención a la observación detallada, la recopilación sistemática de datos y la aplicación de la evidencia científica son elementos fundamentales en la práctica clínica moderna.</p>

  <p>El método clínico, no es otra cosa que el método científico aplicado a la práctica clínica, el cual consiste de la secuencia de pasos para estudiar y comprender el proceso de salud-enfermedad de un individuo en toda su integridad social, biológica y psicológica. En las Ciencias de la Salud, en especial en la medicina, el método clínico es la secuencia de acciones que se desarrollan, para comenzar la evaluación, el diagnóstico y el tratamiento del paciente. Durante mucho tiempo, los médicos solo contaban con el método clínico para diagnosticar y tratar a un enfermo, en la actualidad existen una gran cantidad de herramientas que le permiten conocer la morfología y fisiología de los órganos, la anatomía humana, existen diversas y sofisticadas pruebas de laboratorio, y aparatos de imagenología, que le dan al médico más recursos, para llegar a un mejor diagnóstico para el tratamiento de un paciente. Algunas de las características del método clínico son:</p>

  <ul>
    <li><b>Observación.</b>Comienza con la observación cuidadosa de los síntomas y signos clínicos del paciente.</li>

    <li><b>Historia clínica.</b> En está etapa, se recaba información detallada de la historia del paciente, como son: los síntomas actuales y anteriores, los antecedentes médicos, el historial familiar, qué medicamentos toma actualmente y otros factores relevantes. </li>

    <li><b>Examen físico.</b> Se realiza un examen físico, para evaluar los signos vitales y para detectar cualquier anomalía que pudiera existir y sea relevante para el diagnóstico y el tratamiento.</li>

    <li><b>Diagnóstico.</b> Con los datos recabados en la historia clínica y el examen físico, el médico puede realizar un diagnóstico provisional del estado del paciente, en ocasiones, se requieren exámenes de laboratorio y pruebas de imagen para confirmar o desmentir el diagnóstico.</li>

    <li><b>Plan de tratamiento.</b> Después de realizado el diagnóstico, se elabora un plan de tratamiento que puede incluir: medicamentos, procedimientos médicos, intervenciones quirúrgicas, terapias físicas u otros, según sea necesario.</li>

    <li><b>Seguimiento y evaluación.</b> El seguimiento para evaluar la respuesta del paciente al tratamiento es muy importante, ya que de ser necesario, se realizarán los ajustes pertinentes. La evaluación continua del enfermo, es fundamental para garantizar la eficacia del tratamiento.</li>

    <li><b>Comunicación con el paciente.</b> La comunicación con el paciente es un elemento fundamental en el método clínico. Una comunicación efectiva entre el profesional de la salud y el paciente contribuye significativamente a la comprensión mutua, al establecimiento de una relación de confianza y a la calidad de la atención médica.</li>

    <li><b>Ética y respeto.</b> El método clínico se rige por principios éticos que incluyen el respeto a la autonomía del paciente, la confidencialidad, la justicia y la generosidad. Los profesionales de la salud deben actuar de manera ética y respetuosa en todas las interacciones con los pacientes.</li>
  </ul>

  <p>Podemos concluir, que el método clínico y el método científico comparten similitudes en su enfoque sistemático, para la adquisición de conocimiento y la resolución de problemas, aunque están dirigidos a contextos diferentes. Estos métodos tienen aplicaciones distintas, pero comparten una estructura lógica y ambos están diseñados para ser flexibles y adaptarse a las circunstancias específicas de su campo de acción. El método clínico, es utilizado por los profesionales de la salud para evaluar, diagnosticar y tratar a los pacientes, centrándose en la recopilación de información, el análisis crítico y el cuidado personalizado. Al aplicar el método clínico se está elaborando y construyendo el conocimiento médico. </p>

  <h3>Método Epidemiológico</h3>

  <p>El método epidemiológico es una herramienta importante en la investigación, el estudio de las enfermedades y la salud de las  poblaciones, ya que permite comprender las causas y la distribución de estas desde un enfoque científico. A lo largo de la historia, el método epidemiológico ha evolucionado en respuesta a desafíos de la salud pública y emergencias médicas. La epidemiología (Gr. epi-encima, demos-pueblo y logos-estudio), surgió como respuesta al estudio de las epidemias de enfermedades infecciosas, que se han presentado desde tiempos muy remotos a lo largo de los siglos y que impactaron a las poblaciones. Un ejemplo de esto se puede encontrar en Egipto, donde hace alrededor de 3000 años ya se veneraba a Sekmeth, diosa de la peste, así mismo se han encontrado momias con marcas producidas por enfermedades infecciosas que se cree que pudieron ser causadas por la lepra o la viruela. Otro ejemplo es el papiro Ebers (alrededor de 2000 a.C.), en el cual se mencionan unas “fiebres pestilentes”, probablemente malaria, que afectaron a la población que vivía en las márgenes del río Nilo.</p>

  <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-sekmeth.webp', 'Sekhmet Diosa Egipcia de la Peste.', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Figur_G%C3%B6ttin_Sachmet.JPG', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>

  <p>Todo esto hace pensar que este tipo de enfermedades, fueron bastante frecuentes en el mundo antiguo, entre las se muestran los relatos que hacen los griegos sobre las plagas ocurridas durante la guerra del Peloponeso en el año 430 a.C. Hipócrates en el siglo V a.C., describe a las enfermedades, clasificándolas en agudas, crónicas, endémicas y epidémicas, y creó protocolos médicos de limpieza tanto del paciente como del médico para evitar la propagación de las enfermedades, el pensaba que se debían al modo de vida y al ambiente en el que vivían las población. Durante los siguientes 20 siglos para evitar las epidemias, la iglesia y el estado dictaron acciones para prevenir las enfermedades epidémicas.</p>

  <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-hipocrates.webp', 'Busto de Hipócrates.', 'https://upload.wikimedia.org/wikipedia/commons/1/18/Hippocrates_pushkin02.jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>

  <p>Desde hace muchos siglos, ya se tenía la noción del contagio, que podía provenir del enfermo o los objetos que lo rodeaban, por lo que ya se hacían prácticas de aislamiento y cuarentena, por ejemplo, el Califa Umar ibn al-Jattab en el año 660 se abstuvo de invadir sitios afectados por la peste, para evitar que su ejército enfermara. Entre los siglos V y VI d.C., en la época del Emperador Justiniano I El Grande, se utilizó la palabra griega pandemia para describir a la terrible plaga que azotó su territorio.</p>

  <div class="flex items-center justify-center max-w-7xl mx-auto gap-10">
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-Umar.webp', 'Califa Umar ibn al-Jattab.', 'https://upload.wikimedia.org/wikipedia/commons/5/57/Grands_conquerants_-_Omar_le_2eme_calife_prenant_en_personne_possession_de_Jerusalem_l%27an_638_de_l%27ere_chretienne.derv..jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>

         <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-Justiniano.webp', 'Emperador Justiniano I El Grande.', 'https://upload.wikimedia.org/wikipedia/commons/3/3d/Mosaic_of_Justinianus_I_-_Basilica_San_Vitale_%28Ravenna%29.jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>
    </div>

    <p>El médico italiano Girolamo Fracastoro (1478-1553), escribió un libro llamado De Contagionibus, que es considerado el primer libro que habla de las enfermedades contagiosas en la medicina, y definió claramente este concepto. Thomas Sydenham (1624-1689), médico inglés, en su libro Observationes Medicae propuso el sistema actual de clasificación de las enfermedades contagiosas. John Snow (1813-1858), médico inglés, considerado como el “Padre de la Epidemiología Moderna”, investigó el brote de cólera en Londres en 1854, identificando a una bomba de agua contaminada como la fuente del brote, demostrando la transmisión del cólera por el agua. Estudió está enfermedad desde el punto de vista poblacional, relacionando la incidencia de casos con el consumo de agua contaminada. </p>

     <div class="flex items-center justify-center max-w-7xl mx-auto gap-10">
        <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-Girolamo.webp', 'Girolamo Fracastoro ', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Girolamo_Fracastoro.jpg/519px-Girolamo_Fracastoro.jpg?20130310172114', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>

         <div class="mx-auto max-w-lg">
          <?php renderImage('u2-t1-thomas-sydenham.webp', 'Retrato de Thomas Sydenham.', 'https://upload.wikimedia.org/wikipedia/commons/7/78/Thomas_Sydenham_by_Mary_Beale.jpg', 'recuperado el 4 de diciembre de 2023'); ?>
         </div>

         <div class="mx-auto max-w-lg">
           <?php renderImage('u2-t1-John.webp', 'John Snow', 'https://upload.wikimedia.org/wikipedia/commons/c/cc/John_Snow.jpg', 'recuperado el 6 de diciembre de 2023'); ?>
         </div>
    </div>

    <p>Según la Organización Mundial de la Salud (OMS), la epidemiología es “el estudio de la distribución y los determinantes de estados o eventos (en particular de enfermedades) relacionados con la salud y la aplicación de esos estudios al control de enfermedades y otros problemas de salud”. Es decir, la epidemiología es la disciplina científica que se encarga del estudio de factores como: la distribución, la frecuencia, las predicciones y el control de los agentes relacionados con la salud y la enfermedad de los seres humanos. El método epidemiológico se ocupa  de identificar patrones, causas, así como efectos de las condiciones de salud y enfermedades de las poblaciones, para intervenirlas, comprenderlas y atacarlas. El método epidemiológico se caracteriza por ser un procedimiento ordenado, contemplando las variables básicas de tiempo, lugar y persona, en donde interviene la acción de observar (medir), comparar (analizar) y proponer (intervenir). Los fases del método epidemiológico son:</p>

    <ul>
      <li>Fase descriptiva: Se refiere a la descripción detallada, que implica observar, describir e interpretar los fenómenos o problemas de salud-enfermedad. La observación debe ser cuidadosa y describir la realidad de los hechos que se observan, tomando en cuenta la relación que existe en la distribución de una enfermedad de acuerdo a la población, lugar y tiempo. Dentro de esta fase, se encuentran los siguientes pasos:
        <ul>
          <li><b>Observación:</b> Consiste en observar rigurosamente la realidad, sin intentar modificarla, considerando la descripción detallada de los fenómenos de salud-enfermedad, basadas en la observación cuidadosa y el registro objetivo de los hechos.</li>
          <li><b>Identificación de problemas de salud:</b> Consiste en la definición clara del problema de salud que se va a investigar, determinando la enfermedad o condición de interés y estableciendo la población afectada.</li>
          <li><b>Establecimiento de la Base Teórica:</b> Revisión de la literatura científica para comprender la enfermedad, sus factores de riesgo y cualquier información relevante que pueda guiar la investigación.</li>
          <li><b>Formulación de Preguntas de Investigación:</b> Las preguntas de investigación deben ser específicas, y se abordarán a lo largo del estudio epidemiológico. Las preguntas pueden estar relacionadas con la distribución, los factores de riesgo, las características de la población, etc.</li>
          <li><b>Planteamiento de la hipótesis:</b> Se formularán hipótesis sobre posibles asociaciones entre factores de riesgo y la enfermedad, las hipótesis servirán como guía para la recopilación y el análisis de datos.</li>
        </ul>
      </li>

      <li>Fase analítica: En esta fase se realiza la comprobación o refutación de las hipótesis formuladas por medio de dos tipos de estudios, los experimentales y los observacionales, siendo los elementos de estudio las poblaciones o grupos humanos, en está etapa es donde se responde las siguientes preguntas ¿Cómo ocurrió? y ¿Por qué ocurrió?. En esta fase, se pueden encontrar los siguientes pasos:
        <ul>
          <li><b>Diseño del Estudio: </b> Se selecciona el diseño de estudio epidemiológico más apropiado para abordar las preguntas de investigación, pudiendo ser observacional o experimental, entre otros.</li>
          <li><b>Recopilación de datos:</b> Los datos pueden provenir de encuestas, entrevistas, revisión de registros médicos, pruebas de laboratorio, u otras técnicas de recolección de información.</li>
          <li><b>Análisis de Datos:</b> Para esto se aplican métodos estadísticos para analizar los datos recopilados. Esto implica la identificación de patrones, asociaciones y la evaluación de la significancia estadística.</li>
          <li><b>Interpretación de Resultados:</b> Es el proceso mediante el cual se le da sentido a los resultados obtenidos, para responder a las preguntas de la investigación y nos permite entender las implicaciones de los descubrimientos.</li>
          <li><b>Comunicación de Resultados:</b> Los resultados se pueden presentar en informes, artículos científicos, presentaciones o cualquier otro medio de comunicación, estos deben ser claros y transparentes.</li>
          <li><b>Implementación de Medidas de Control:</b> Cuando se identifican factores de riesgo o formas de transmisión, se pueden proponer e implementar medidas de control y prevención.</li>
          <li><b>Evaluación Continua y Retroalimentación:</b> Revisión permanente del estudio, evaluación de su calidad y aplicación de ajustes según sea necesario, la retroalimentación permite mejorar la investigación y ajustar los enfoques si es necesario.</li>
        </ul>
      </li>

    </ul>

    <p>Finalmente se puede decir que las fases del método epidemiológico, son una herramienta importante en la investigación de las enfermedades, ya que se pueden ajustar a las necesidades específicas de cada estudio y problemas de salud. Así mismo es primordial destacar que a lo largo de todas las fases de este proceso, esté garantizada la privacidad y la confidencialidad de las personas participantes en él, y la ética debe de ser fundamental durante toda la investigación. En el siguiente cuadro podrás observar las analogías que se pueden encontrar entre los métodos científico, clínico y epidemiológico.</p>

           <?php renderImage('u2-t1-tabla.png'); ?>
    
   <?php ob_start(); ?>
  <p>Lee cuidadosamente la siguiente lectura y complétala con las palabras que se encuentran en la lista, ten cuidado con la ortografía. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a2', "Actividad de completa la lectura", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Para que sepas cuánto aprendiste del tema de Métodos de investigación en salud, resuelve el siguiente ejercicio, escribiendo en la columna de la derecha el nombre del método que corresponda a cada característica.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a3', "Relaciona las columnas", $ActividadContent);
  ?>

  <?php ob_start(); ?>
  <p>Video Original</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a4', "Relaciona las columnas", $ActividadContent);
  ?>




  

 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
