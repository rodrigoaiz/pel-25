<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Desarrollo de la Guerra</h2>
  <p>Así como hemos mencionado en el caso de la Primera Guerra Mundial, hay varios criterios para periodizar el conflicto. En esta ocasión, nos basaremos en la propuesta de Eric Hobsbawm, uno de los historiadores más importantes del siglo XX. Siguiendo a este autor, podemos identificar dos fases conforme al alcance de la guerra:</p>
   <?php
  $accordionItems1 = [
    [
      'title' => 'De 1939 a 1941',
      'content' => '<p>En que Alemania avanza sobre Europa occidental, teniendo como objetivo principal derrotar a Inglaterra (lo cual no logró). Hobsbawm se refiere a esta como un conflicto europeo, que se destaca por el rápido avance alemán (táctica de Guerra relámpago) y la resistencia de Inglaterra prácticamente en solitario. Esta etapa cierra con la invasión alemana a la URSS, en 1941, que cambió decisivamente el rumbo de los acontecimientos.</p>'
    ],
    [
      'title' => 'De 1942 a 1945',
      'content' => '<p>Del bombardeo japonés sobre Pearl Harbor hasta la rendición de Alemania y Japón en 1945. Esta es una fase de guerra mundial, en la cual se enfrentan todos los integrantes del Eje Berlín-Roma Tokio contra los aliados, encabezados por Inglaterra y los Estados Unidos.</p>'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');
  ?>

  <h3>Primera fase. 1939 - 1941</h3>
  <div class="mx-auto max-w-md">
 <?php
  renderImage('hu2-u2-tropas.webp','Tropas alemanas al inicio de la Operación Despertar de Primavera. Imagen de Interesado1one.', 'https://commons.wikimedia.org/wiki/File:German_troops_at_the_beginning_of_Operation_Spring_Awakening.jpg','Wikimedia Commons.');
 ?>
  </div>
  
 <p>En esta etapa Alemania es el principal protagonista pues nuevamente se proponía un avance rápido que impidiese una reacción unificada de sus adversarios. La Guerra inició con la invasión alemana a Polonia, el 1 de septiembre de 1939.</p>
 <p>Tras derrotar a Polonia Hitler avanzó sobre Dinamarca, Noruega, Holanda y Bélgica, con la clara intención de rodear a Francia, que fue invadida y derrotada en 1940. Francia fue dividida en dos zonas de ocupación militar; al Norte, se impuso un gobernador alemán y al Sur se estableció un gobierno “títere” de Alemania, con capital en Vichy y dirigido por un militar conservador (Philippe Pétain). En el mapa podrás observar las zonas de Europa bajo control del Eje; a esto hay que sumar que España estaba gobernada por Francisco Franco. Aunque España se mantuvo neutral durante todo el conflicto, era un régimen bastante cercano al fascismo. Portugal y Suiza mantuvieron una neutralidad inclinada hacia el bando aliado.</p>
 <div class="mx-auto max-w-md">
 <?php
  renderImage('hu2-u2-europanazi.webp','Europa bajo la Alemania nazi. Imagen de Religiones abrahámicas.', 'https://commons.wikimedia.org/wiki/File:Europa_bajo_la_Alemania_nazi.png','Wikimedia Commons.');
 ?>
  </div>
 <p>Después de la victoria sobre Francia, el siguiente objetivo de los alemanes era derrotar a Inglaterra. Entre julio y octubre de 1940, la población británica tuvo que padecer los bombardeos de la Fuerza Aérea Alemana, pero Hitler no logró derrotar a la fuerza naval inglesa. Ya hacia fines de 1940, Hitler decidió suspender sus planes de invadir Inglaterra y retornó hacia Europa del Este (reforzando las posiciones de Mussolini) invadiendo Yugoslavia y Grecia en junio de 1941.</p>
 <p>De manera un tanto sorpresiva (y rompiendo el pacto de no agresión que tenía con Stalin) Hitler invadió la Unión Soviética en 1941 dando inicio a la Operación Barbarroja. Esto forzó al ejército alemán a en dos frentes: Occidental (donde mantenía la ocupación de Francia, Bélgica, Holanda, Noruega, Dinamarca y se enfrentaba a Inglaterra); del otro lado, un frente Oriental donde trataba de someter a la Unión Soviética. A partir de ese momento, Alemania entra en una guerra de desgaste. Ahora, el enemigo a vencer no era solamente Inglaterra sino también la URSS, que pasó a formar parte del bloque aliado. Aunque los alemanes enfocaron sus mayores esfuerzos en vencer rápidamente a los soviéticos, estos se apresuraron en no dejar nada que pudiera ser utilizado para la subsistencia de sus enemigos. Los combates se prolongaron y el invierno ruso tomó por sorpresa a los alemanes, que fueron derrotados en la Batalla de Stalingrado, en 1943. A partir de entonces, los aliados asumieron que la derrota de las potencias del Eje era solo cuestión de tiempo.</p>
 <p>Antes de continuar observa el siguiente material audiovisual, que seguramente será de tu interés para reforzar algunas ideas mencionadas hasta aquí.</p>
  <?php
  renderVideoIframe('o_xSFq4PUrM', 'Operacion Barbarroja');
  ?>
  <h4>La Batalla del Pacífico</h4>
  <p>Recordemos que Japón tenía su propio plan expansionista. En paralelo había avanzado sobre China, logrando tomar la capital (que en ese momento se encontraba en Nanking) en 1937, donde establecieron un nuevo gobierno títere, encabezado por Wang Chingwei, quien aceptó firmar un Tratado con los japoneses (a espaldas del gobierno nacionalista chino) por el cual se aceptaba la ocupación total de China. Este avance del ejército japonés era una muestra de la fuerza que habían conquistado los militares en dicho país. En el interior de China, de poco sirvió la alianza entre el gobierno nacionalista y la guerrilla comunista de Mao Zedong, pues no lograron frenar a Japón, lo cual preocupaba tanto a europeos como a los Estados Unidos.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-mao.webp',' Mao Zedong. Imagen de 沈澄心.', 'https://commons.wikimedia.org/wiki/File:1961_Mao_Zedong_reading_People%27s_Daily_in_Hangzhou_(2).jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Aprovechando que Inglaterra y Francia estaban siendo atacadas por los alemanes, los japoneses iniciaron una nueva invasión sobre Indochina (que estaba bajo control francés). En represalia, los Estados Unidos, Inglaterra y sus dominios impusieron sanciones económicas a Japón (congelaron inversiones, limitaron tratos comerciales y finalmente decretaron un embargo para impedir que Japón adquiriese petróleo). A pesar de algunas iniciativas de los aliados para buscar una salida pacífica, Japón decidió pasar a la ofensiva y el 6 de diciembre de 1942 atacó una base naval norteamericana en Pearl Harbor (en el Pacífico Sur). Si observas el mapa detenidamente, comprenderás el por qué este era un punto estratégico en esos momentos.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-asia.webp','Máximo avance del ejército japonés en 1942. las secciones en azul corresponden a la ocupación japonesa (aliados, en rojo). Imagen de Rzzgn.', 'https://commons.wikimedia.org/wiki/File:Second_world_war_asia_1937-1942_map_en6.png','Wikimedia Commons.');
  ?>
  </div>
  <p>El bombardeo sobre Pearl Harbor detonó la guerra entre Japón y los Estados Unidos. Días después, el 11 de diciembre, Alemania e Italia declararon la guerra a Estados Unidos e Inglaterra, con lo cual el conflicto pasó a ser propiamente mundial; se desarrollaba en los frentes Oriental, Occidental y en el Pacífico.</p>
   <?php ob_start(); ?>
  <p>Es momento de repasar un poco los conocimientos adquiridos hasta este momento resolviendo el siguiente reto.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a2', "Momentos decisivos", $ActividadContent);
  ?>
  <h4>Los pasos hacia un nuevo orden mundial</h4>
  <p>Hemos visto que la entrada de la URSS en la guerra representó un dolor de cabeza para el ejército alemán, pues tuvo que dividir sus fuerzas en dos frentes. A partir de 1943, los soviéticos iban consiguiendo que las tropas alemanas retrocedieran; aunque requerían de apoyo, la victoria sobre Hitler parecía posible. ¿Qué ocurriría al lograrse la paz? ¿Una crisis económica, como la que afectó al mundo después de la I Guerra Mundial? ¿Cómo evitar que un nuevo conflicto de grandes dimensiones estallara nuevamente?</p>
  <p>Para dar respuesta a estas preocupaciones, los líderes de las potencias aliadas (Inglaterra, Estados Unidos y la URSS) se reunieron en varios encuentros o Conferencias. Las más importantes fueron en Teherán (1943), en Yalta (febrero de 1945) y Potsdam (julio- agosto de 1945). En la primera, Stalin insistió en la necesidad de abrir un segundo frente occidental, desde el cual tropas de los Estados Unidos combatieran a los alemanes (apoyando así a la Unión Soviética). Esta petición no fue concedida sino hasta junio de 1944, cuando los norteamericanos e ingleses dirigieron la Operación Overlord (desembarco en Normandía o “Día D”). La operación cobró miles de vidas de soldados, procedentes de diversos países, pero aún así lograron el objetivo de atacar las posiciones alemanas en Francia, abreviando el final de la guerra.</p>
  <p>En la Conferencia de Yalta, por otro lado, se discutió cuál sería el futuro de Europa una vez que terminase la guerra. La idea era convocar a elecciones en las naciones liberadas de la ocupación nazi (en Europa del Este, gracias a la intervención de la URSS). En otras palabras, se esperaba que Stalin organizara elecciones en los territorios que había liberado. Winston Churchill, Primer Ministro Británico, manifestó poco después su desconfianza hacia Stalin, suponiendo que ya no abandonaría esas posiciones. Observa en el siguiente mapa los territorios que habían sido ocupados por Alemania durante la guerra. Es una extensión considerable.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-conferencia.webp','La conferencia de Yalta. Imagen de Hohum.', 'https://commons.wikimedia.org/wiki/File:Yalta_Conference_(Churchill,_Roosevelt,_Stalin)_(B%26W).jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Más adelante veremos que la desconfianza de Churchill fue el punto de partida de nuevos conflictos. Por otro lado, en Yalta se acordó también organizar un encuentro posterior, donde se daría origen a la Organización de las Naciones Unidas, para sustituir a la ineficaz Sociedad de Naciones, y cuyo primer objetivo sería generar las condiciones para una paz duradera.</p>
  <p>En la Conferencia de Potsdam se discutió la necesidad de desnazificar Alemania y Austria. Para ello, se propuso dividirla en cuatro zonas de ocupación, someter a juicio a los criminales de guerra. Aunque se trató el tema de la rendición incondicional de Japón, no se mencionó con detalle el plan que los Estados Unidos tenían en mente, ni las características de las bombas atómicas que estaban por emplear.</p>
  <p>Se habló asimismo, de dividir Indochina (que estaba ocupada por los japoneses) en dos zonas (al Sur y al Norte del paralelo 16). Pero no contaban con que Indochina, así como otros dominios de los imperios, ya estaban iniciando otros procesos hacia su liberación.</p>
  <h3>El fin de la Guerra</h3>
  <p>La II Guerra Mundial concluyó con la derrota del Eje Berlín-Roma-Tokio. En 1943, la población italiana en general mostraba hartazgo hacia la guerra y sus repercusiones. Mussolini fue destituido por el rey Víctor Manuel; huyó hacia el Norte de Italia, donde fue protegido por Hitler. Pero, temeroso de ser capturado por los aliados Mussolini huye, es interceptado y fusilado por rebeldes partisanos el 28 de abril de 1945. El 29 de abril se consuma la rendición de Italia ante las tropas aliadas, por lo cual no recibió el trato de un territorio ocupado (como ocurriría con Alemania y Japón) sino de un país derrotado con un gobierno reconocido. La Alianza Berlín-Roma- Tokio había perdido a uno de sus integrantes.<p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-urssberlin.webp','Los soviéticos llegan a Berlín. Imagen de PlanespotterA320', 'https://commons.wikimedia.org/wiki/File:Raising_a_flag_over_the_Reichstag_2.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Hitler se suicidó el 30 de abril de 1945, durante un bombardeo sobre Berlín, ante la incapacidad de admitir la inminente derrota de Alemania. Japón, ya a punto de rendirse, sufrió la devastación provocada por dos bombardeos atómicos sobre Hiroshima y Nagasaki, en agosto de 1945. Este episodio fue una muestra del poderío militar norteamericano y una advertencia de lo que podría ocurrirle a otro adversario de los Estados Unidos. Ellos poseían ya el arma de destrucción masiva más mortífera que se hubiera conocido hasta entonces: la bomba atómica.</p>
  <p>El bombardeo atómico tuvo como propósito conseguir la inmediata e incondicional rendición del ejército japonés. Pero los efectos de la radiación sobre la población civil permanecieron por décadas. La bomba estalló en el aire, liberando inmediatamente rayos caloríficos que arrasaron todo a su paso. Tras el estallido, se produjo un "viento fuerte", de acuerdo con los testimonios de los sobrevivientes. A este viento se le denomina "rebufo". Otro fenómeno desencadenado en lo inmediato fue la "lluvia negra", cargada de hollín radiactivo altamente tóxico. Las lesiones al cuerpo humano fueron distintas (evidentemente) para quienes estuvieron cerca del hipocentro, y para quienes resultaron irradiados indirectamente.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-lanzamiento.webp','El avión que lanzó la primera bomba atómica sobre una ciudad habitada. Imagen de Signaleer.', 'https://commons.wikimedia.org/wiki/File:B-29_Enola_Gay_w_Crews.jpg','Wikimedia Commons.');
  ?>
  </div>
    <?php ob_start(); ?>
  <p>El bombardeo atómico sobre Hiroshima dio inicio al empleo de la energía nuclear como arma de destrucción masiva. Días después de este golpe, los Estados Unidos arrojaron un artefacto más sobre Nagasaki, también en el archipiélago japonés. Hoy, se mantiene la memoria de ambos acontecimientos con la esperanza de que nunca se repitan.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a3', "¿Era necesario arrojar la bomba atómica sobre Japón?", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
