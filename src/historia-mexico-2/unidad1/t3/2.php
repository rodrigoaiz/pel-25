<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>La Constitución de 1917</h2>

  <p>Aunque en un principio solo se pretendía reformar algunos aspectos de la Constitución de 1857, esta resultaba anacrónica ante los cambios que vivía el país. Por ello, se realizaron numerosas modificaciones, hasta el punto de considerarse una nueva Constitución, la cual fue promulgada el 5 de febrero de 1917.</p>

  <p>Entre los <b>artículos, reformados completamente</b> por el Congreso se encuentra el <b>27°y 123°</b>, el primer artículo, puede ser dividido en dos partes principales: por un lado, está el reordenamiento legal de la tenencia de la tierra por la resucitación de la vieja institución del ejido, así como por la creación de la pequeña propiedad a través del fraccionamiento de las haciendas. Por otro lado, confiere rango constitucional a los derechos de propiedad inalienables y directos de la nación sobre la riqueza del subsuelo; el derecho de explotación sólo puede ser transferido por el Estado a particulares en forma de concesiones (Tobler Hans, 1994, pág. 359).  El segundo reglamenta el campo de las relaciones laborales, atendiendo de esta manera las demandas sociales presentes en la lucha revolucionaria.</p>

  <p>A continuación, revisa las infografías que refieren a cada artículo antes señalado:</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-27.png', 'Artículo 27 de la Constitución de 1917');
      ?>
  </div>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-123.png', 'Artículo 123 de la Constitución de 1917');
      ?>
  </div>


  <p>Entre los artículos anticlericales que recuperan lo plasmado en la Constitución de 1857, se encuentra el artículo 130. Para conocer algunos de sus planteamientos revisa lo siguiente:</p>

    <div class="relative my-8 border-l-4 border-azulcla bg-gradient-to-br from-azulcla/5 to-transparent rounded-r-xl overflow-hidden max-w-2xl mx-auto">
      <div class="absolute top-0 right-0 w-32 h-32 bg-azulcla/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
      
      <div class="relative p-6 space-y-6">
        <div class="space-y-3">
          <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
            El matrimonio es un contrato civil
          </h4>
          <p class="pl-4 text-gray-700 leading-relaxed">Este y los demás actos del estado civil de las personas, son de la exclusiva competencia de los funcionarios y autoridades del orden civil en los términos previstos por las leyes, y tendrán la fuerza y validez que las mismas les atribuyan.</p>
        </div>

        <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

        <div class="space-y-3">
          <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
            Neutralidad religiosa del gobierno
          </h4>
          <p class="pl-4 text-gray-700 leading-relaxed">El Congreso no puede dictar leyes estableciendo o prohibiendo religión cualquiera.</p>
        </div>

        <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

        <div class="space-y-3">
          <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
            Restricciones en actividades religiosas
          </h4>
          <div class="pl-4 space-y-2 text-gray-700 leading-relaxed">
            <p>Los ministros de los cultos nunca podrán, en reunión pública o privada constituida en junta, ni en actos del culto o de propaganda religiosa, hacer crítica de las leyes fundamentales del país, de las autoridades en particular, o en general del Gobierno; no tendrán voto activo ni pasivo, ni derecho para asociarse con fines políticos.</p>
            <p>Queda estrictamente prohibida la formación de toda clase de agrupaciones políticas cuyo título tenga alguna palabra o indicación cualquiera que la relacione con alguna confesión religiosa.</p>
            <p>No podrán celebrarse en los templos reuniones de carácter político.</p>
          </div>
        </div>

        <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

        <div class="space-y-3">
          <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
            Regulación de bienes religiosos
          </h4>
          <p class="pl-4 text-gray-700 leading-relaxed">Los bienes muebles o inmuebles del clero o de asociaciones religiosas, se regirán para su adquisición, por particulares, conforme al artículo 27 de esta Constitución.</p>
        </div>
      </div>
    </div>

  <p>En la Constitución Política de los Estados Unidos Mexicanos, la soberanía es un principio fundamental porque garantiza y delimita la soberanía de México en diferentes aspectos, entre ellos: que sea un país independiente, democrático y gobernado por sus ciudadanos. Además, protege su territorio, su sistema de gobierno y sus leyes, de influencias externas y abusos internos.</p>

  <p>Entre los artículos podemos destacar los siguientes:</p>

  <div class="relative my-8 border-l-4 border-azulcla bg-gradient-to-br from-azulcla/5 to-transparent rounded-r-xl overflow-hidden max-w-2xl mx-auto">
    <div class="absolute top-0 right-0 w-32 h-32 bg-azulcla/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="relative p-6 space-y-6">
      <div class="space-y-3">
        <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
          <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
          Art. 39 — La soberanía nacional
        </h4>
        <p class="pl-4 text-gray-700 leading-relaxed">La soberanía nacional reside esencial y originariamente en el pueblo. Todo poder público dimana del pueblo y se instituye para beneficio de éste. El pueblo tiene en todo tiempo el alienable derecho de alterar o modificar la forma de su gobierno.</p>
      </div>

      <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

      <div class="space-y-3">
        <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
          <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
          Art. 40 — República representativa
        </h4>
        <p class="pl-4 text-gray-700 leading-relaxed">Es voluntad del pueblo mexicano constituirse en una República representativa, democrática, federal, compuesta de Estados libres y soberanos en todo lo concerniente a su régimen interior; pero unidos en una federación establecida según los principios de esta ley fundamental.</p>
      </div>

      <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

      <div class="space-y-3">
        <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
          <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
          Art. 41 — Ejercicio de la soberanía
        </h4>
        <p class="pl-4 text-gray-700 leading-relaxed">El pueblo ejerce su soberanía por medio de los Poderes de la Unión, en los casos de la competencia de éstos, y por los de los Estados, en lo que toca a sus regímenes interiores, en los términos respectivamente establecidos por la presente Constitución Federal y las particulares de los Estados, las que en ningún caso podrán contravenir las estipulaciones del Pacto Federal.</p>
      </div>

      <div class="h-px bg-gradient-to-r from-azulcla/30 via-azulcla/10 to-transparent"></div>

      <div class="space-y-3">
        <h4 class="text-lg font-bold text-azulcla flex items-center gap-2">
          <span class="inline-block w-1.5 h-1.5 rounded-full bg-azulcla"></span>
          Art. 49 — División de poderes
        </h4>
        <p class="pl-4 text-gray-700 leading-relaxed">El Supremo Poder de la Federación se divide, para su ejercicio, en Legislativo, Ejecutivo y Judicial.</p>
      </div>
    </div>
  </div>

  <p>Finalmente debemos mencionar que un artículo que trasciende por su planteamiento social es el <b>Artículo 3</b>, en el que se establece “<b>La enseñanza es libre; pero será laica</b> la que se dé en los establecimientos oficiales de educación, lo mismo que la enseñanza primaria, elemental y superior que se imparta en los establecimientos particulares. Ninguna corporación religiosa, ni ministro de algún culto, podrán establecer o dirigir escuelas de instrucción primaria. Las escuelas primarias particulares sólo podrán establecerse sujetándose a la vigilancia oficial. En los establecimientos oficiales se impartirá gratuitamente la enseñanza primaria”</p>

  <div class="mx-auto max-w-md">
      <?php
       renderImage('hm2-u1-3.jpg');
      ?>
  </div>

  
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
