<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Distingue la adolescencia como una etapa del desarrollo humano.</h2>

  <p>El desarrollo humano es el estudio científico de los cambios que sufren las personas a lo largo de sus vidas, desde la concepción hasta la vejez, según el programa de Naciones Unidas para el desarrollo (PNUD), considera que el desarrollo no solo se mide por el crecimiento económico, sino también por la capacidad para llevar vidas dignas y plenas. Por lo tanto lo define como: <b><i>”El proceso de ampliación de las opciones de las personas y mejora de sus capacidades y oportunidades para llevar una vida larga, saludable y creativa, y para disfrutar de una vida digna. Es la ampliación de las opciones humanas, la construcción de capacidades humanas, y la ampliación de las libertades humanas”</i></b>.</p>

  <p>Para entender el concepto de desarrollo humano, se tiene que partir de las diferentes etapas por las cuales los individuos tienen que transitar a lo largo de su vida, las cuales inician con la concepción, el nacimiento, continúan con la infancia, la adolescencia, la etapa adulta y la vejez. El desarrollo de un ser humano se ve influenciado por diferentes factores, como los genéticos, ambientales, culturales y sociales, los cuales determinan los cambios de las personas a lo largo de sus vidas en diversos aspectos, como pueden ser físicos, cognitivos, emocionales, sociales, morales, etc. </p>

  <p>Otros aspectos importantes en la evolución de las personas, son los procesos biológicos, psicológicos y sociales  que influyen en la forma en que piensan, sienten, se comportan y se relacionan con los demás. Dentro de las etapas del desarrollo humano mencionaremos las siguientes:</p>

  <p><b>Prenatal:</b> Esta etapa inicia con la concepción y termina en el nacimiento. La concepción se lleva a cabo cuando el espermatozoide fecunda al óvulo, dando lugar a la formación del <b>cigoto</b> o <b>huevo</b>, el cual por mitosis inicia la división celular para formar la <b>mórula</b> que es una bola compacta formada por entre 16 a 32 células. El proceso continúa con la formación del <b>blastocisto</b>, el cual está constituido por dos partes, el trofoblasto que es la capa externa (dará origen a la placenta y a las membranas embrionarias), y el embrioblasto que es la capa interna que dará origen al <b>embrión</b>. La siguiente etapa es la implantación y posteriormente la diferenciación y formación de órganos, sistemas y tejidos.</p>

  <p>Aproximadamente hasta la octava semana del desarrollo se le da el nombre de embrión, y a partir de la novena semana recibe el nombre de feto hasta el nacimiento.</p>

 <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-ultra.webp', 'Ultrasonido de un feto humano.', 'https://www.fundacionunam.org.mx/wp-content/uploads/2018/03/ultrasonidoPARTO1.jpg', 'Fundación UNAM.');
  ?>
 </div>

 <div class="mx-auto max-w-lg">

  <?php
  renderImage('u3-t1-bebe.webp', 'Recién nacido en una incubadora.', 'https://img.freepik.com/foto-gratis/bebe-recien-nacido-duerme-cuna-hospital-ropa-recien-nacido_140725-266.jpg', 'Freepik.');
  ?>
 </div>

  <p>La duración de las diferentes etapas de la vida de un individuo puede variar dependiendo de la cultura, la sociedad, y los criterios de los diferentes autores, entre otros. En este curso se tomará en cuenta el desarrollo biológico, psicológico y social para determinar las diferentes fases del desarrollo.</p>

  <p><b>Infancia:</b> Inicia con el nacimiento y se prolonga hasta los tres años de edad, siendo la primera etapa la de la <b>lactancia</b>, que es el periodo en el cual el bebé se alimenta exclusivamente de leche y puede durar en términos generales alrededor de seis meses. Al concluir este periodo empieza la infancia propiamente dicha, la cual se caracteriza por un rápido crecimiento físico, desarrollo de la coordinación motora y la comprensión y uso del lenguaje, que aprende por imitación. Ya poseen desde edades tempranas, las capacidades de aprender y recordar. También existe una dependencia total de los padres y/o cuidadores y empieza el camino hacia su autonomía; inicia el  desarrollo de su independencia que les permitirá explorar el mundo que los rodea y tomar decisiones.</p>

  <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-bebes.webp', 'Bebés de menos de un año de edad jugando.', 'https://www.freepik.es/foto-gratis/dos-ninos-pequenos-jugando-pelotas-xilofono-sentados-suelo-jardin-infantes_39317121.htm#fromView=search&page=1&position=1&uuid=dc688eee-cc4b-46ca-95c6-202d72a03444&query=Bebes+jugando', 'Freepik.');
  ?>
  </div>

  <p><b>Niñez:</b> Comienza al terminar la infancia y termina entre los 10 y 12 años con el inicio de la adolescencia. Para una mejor comprensión, se dividirá en dos etapas: la primera abarca de los 3 a los 6 años de edad y la segunda de los 6 a los 12 años.  Durante la primera etapa hay un rápido crecimiento físico, mejoran sus habilidades motoras tanto finas como gruesas y aumenta la fuerza. Hay un importante incremento en las habilidades del lenguaje, y cognitivas como la memoria, el razonamiento (egocéntrico), y la resolución de problemas; aumenta la iniciativa, el autocontrol e independencia, y se desarrollan habilidades para interactuar con otros niños.</p>

  <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-niños.webp', 'Niños en la primera etapa de la infancia de 3 a 6 años.', 'https://img.freepik.com/vector-gratis/fondo-plano-dia-nino-espanol_23-2149317533.jpg?size=626&ext=jpg&ga=GA1.1.1376287020.1717782723&semt=sph', 'Freepik.');
  ?>
  </div>

  <p>En la segunda etapa, el crecimiento se hace más lento. Continúa aumentando la fuerza física, disminuye el egocentrismo, se inicia el pensamiento lógico y abstracto, mejora sus capacidades en lectura y escritura, progresa en sus habilidades sociales para compartir, cooperar y trabajar en equipo y se incrementa la comprensión de los patrones sociales y culturales más complejos.</p>

  <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-niños2.webp', 'Niños en la segunda etapa de la infancia de 6 a 12 años.', 'https://www.freepik.es/foto-gratis/ninos-felices-sentados-juntos-cerca-sonriendo_9695335.htm#page=3&query=ninos&position=10&from_view=keyword&track=sph&uuid=ade1ddef-f1cb-4425-9032-4374d17a1a42', 'Freepik.');
  ?>
  </div>

  <p><b>Adolescencia:</b> Esta etapa es el paso de la niñez a la adultez, cuyo inicio y término pueden variar dependiendo de múltiples factores, como son los biológicos, ambientales y psicosociales. La Organización Mundial de la Salud (OMS), establece el inicio de la adolescencia a los 10 años y su término a los 19 años de edad. Durante esta etapa, suceden cambios muy importantes: los biológicos, psicológicos y sociales, tales como el crecimiento acelerado, aparecen las características sexuales secundarias, y sufren cambios en el comportamiento, lo que los prepara para la vida adulta.</p>

  <p>Se desarrolla la capacidad del pensamiento abstracto y científico, la planificación a largo plazo y la toma de decisiones más complejas. Reflexionan sobre su identidad y la moralidad, y entablan relaciones profundas e importantes como las románticas. También puede ser un periodo de vulnerabilidad debido a que se enfrentan a presiones de grupo, acoso escolar, consumo de alcohol o sustancias, y conductas de riesgo impulsivas, entre otras.</p>

  <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-adolescencia.webp', 'Jóvenes adolescentes.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Diversity_of_youth_in_Oslo_Norway.jpg/1200px-Diversity_of_youth_in_Oslo_Norway.jpg?20080512094838', 'Freepik.');
  ?>
  </div>

  <p>Algunos autores al inicio de la adolescencia, lo llaman pubertad que se caracteriza por que los niños y las niñas experimentan cambios importantes tanto físicos, como hormonales y sexuales relacionados con la reproducción.</p>

   <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-pubertad.webp', 'Jóvenes en la pubertad.', 'https://img.freepik.com/fotos-premium/grupo-estudiantes-adolescentes-estudian-biblioteca-escolar_116407-21715.jpg?w=900', 'Freepik.');
  ?>
   </div>

  <p><b>Adultez:</b> Se inicia aproximadamente a los 19 años y concluye entre los 60 y 65 años, se alcanza el máximo desarrollo y rendimiento físico y la capacidad reproductiva. Durante esta etapa se hacen las elecciones educativas y laborales, y el desarrollo del pensamiento y resolución de problemas son más complejos, así como la toma de decisiones y la estabilidad emocional. Desde el punto de vista psicosocial se entablan relaciones íntimas y duraderas como puede ser el matrimonio, la formación de la familia y las amistades sólidas; así mismo se incrementa el sentido de la responsabilidad.</p>

   <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-adultez.webp', 'Adultos jóvenes', 'https://img.freepik.com/foto-gratis/amigos-comiendo-pizza-playa_23-2148179893.jpg?w=360&t=st=1717889426~exp=1717890026~hmac=c1fe6c3371921cc1e10c4013cc6d442dc3bffcc5d10bbe11c8a03ce48bbe1901', 'Freepik.');
  ?>
   </div>

  <p>Conforme avanza la adultez, se inicia progresivamente la pérdida de la fuerza física, la velocidad de reacción mental, pero al mismo tiempo aumenta la experiencia y la sensatez. Se alcanza el éxito profesional y económico. También en esta etapa se presta más atención a la salud personal. Con frecuencia los hijos se independizan, provocando el síndrome del nido vacío y se vive la crisis de la mediana edad.</p>

   <div class="mx-auto max-w-lg">
   <?php
  renderImage('u3-t1-edades.webp', 'Adultos de diferentes edades.', 'https://img.freepik.com/free-photo/people-taking-selfie-together-registration-day_23-2149096795.jpg?size=626&ext=jpg&ga=GA1.1.1224184972.1712016000&semt=ais', 'Freepik.');
  ?>
   </div>

  <p><b>Vejez:</b> Esta etapa se inicia entre los 60 y 65 años de edad y se prolonga hasta el final de la vida, En ella se presentan paulatinamente muchos cambios, como la pérdida de masa ósea y muscular, lo cual disminuye la fuerza física y como consecuencia, la movilidad. Así mismo se presentan problemas crónicos de salud, disminución de la capacidad visual, auditiva y de aprendizaje de nuevas habilidades y la pérdida de la memoria a corto plazo. En el aspecto físico aparecen canas, arrugas, manchas y flacidez en la piel. En el aspecto emocional, se presentan con cierta frecuencia la depresión, la ansiedad y el aislamiento social. </p>

   <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-vejez.webp', 'Adultos mayores.', 'https://img.freepik.com/foto-gratis/tiro-medio-sonriente-pareja-mayor-sentado_23-2148984223.jpg', 'Freepik.');
  ?>
   </div>

  <p>Las experiencias adquiridas a lo largo de la vida, les proporcionan una mayor sabiduría, lo que les permite tomar mejores decisiones, a la vez que adquieren madurez emocional para manejar el estrés y los problemas. En esta etapa la familia, las amistades y los grupos de apoyo, juegan un papel importante en la parte emocional y social.</p>

   <div class="mx-auto max-w-lg">
  <?php
  renderImage('u3-t1-profesor.webp', 'Profesor impartiendo clases.', 'https://img.freepik.com/foto-gratis/viejo-profesor-mostrando-aula_23-2148201060.jpg?t=st=1719086740~exp=1719090340~hmac=aa091f4cad86b728d5d394de2ce37ec8522a81f271d1b0df0b1b01efc38d4e57&w=900', 'Freepik.');
  ?>
    </div>

  <?php ob_start(); ?>
  <p>Para que refuerces los conceptos, completa el siguiente cuadro escribiendo la etapa del desarrollo que corresponde a cada característica.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a2', "Etapas del desarrollo humano", $ActividadContent);
  ?>


 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
