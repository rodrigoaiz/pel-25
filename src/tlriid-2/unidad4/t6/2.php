<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'TarjetasImagen.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Elementos de la poesía</h2>
  <h3>La rima</h3>
  <p>Los versos se agrupan en conjuntos de dos o más líneas dando lugar a la formación de estrofas. La rima consiste en la semejanza que se da entre unos finales de versos, con otros a partir de la última vocal acentuada.</p>
  
  <div class="my-8 space-y-6">
    <!-- Rima Consonante -->
    <article class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg shadow-md p-6 border border-blue-100">
      <div class="mb-4">
        <span class="inline-block bg-blue-600 text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">Rima Consonante</span>
        <p class="text-gray-700 mb-3">Cuando hay igualdad entre todos los fonemas, la rima se llama consonante.</p>
      </div>
      
      <div class="bg-white rounded-lg p-5 shadow-sm">
        <h5 class="text-lg font-bold text-blue-800 mb-2">Canción de otoño en primavera</h5>
        <p class="text-sm text-blue-600 mb-3 italic">Rubén Darío</p>
        <div class="text-gray-800 leading-relaxed">
          <p class="italic mb-0">
            Juventud, divino tes<strong class="text-blue-700">oro</strong><br>
            ya te vas para no volv<strong class="text-blue-700">er</strong><br>
            cuando quiero llorar no ll<strong class="text-blue-700">oro</strong><br>
            y a veces lloro sin quer<strong class="text-blue-700">er</strong>
          </p>
        </div>
      </div>
    </article>

    <!-- Rima Asonante -->
    <article class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-lg shadow-md p-6 border border-emerald-100">
      <div class="mb-4">
        <span class="inline-block bg-emerald-600 text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">Rima Asonante o Vocálica</span>
        <p class="text-gray-700 mb-3">Cuando son iguales solamente las vocales.</p>
      </div>
      
      <div class="bg-white rounded-lg p-5 shadow-sm">
        <h5 class="text-lg font-bold text-emerald-800 mb-2">Consolación por el burro muerto</h5>
        <p class="text-sm text-emerald-600 mb-3 italic">José Antonio Peñaloza</p>
        <div class="text-gray-800 leading-relaxed">
          <p class="italic mb-0">
            Por el burrito blanco de las Nueve pos<strong class="text-emerald-700">adas</strong>,<br>
            Por el burrito negro del Domingo de p<strong class="text-emerald-700">almas</strong><br>
            Que los arrieros vayan a ensillar una estr<strong class="text-emerald-700">ella</strong>.<br>
            ¡Dejádmelo que mu<strong class="text-emerald-700">era</strong>!
          </p>
        </div>
      </div>
    </article>

    <!-- Verso Blanco -->
    <article class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-lg shadow-md p-6 border border-amber-100">
      <div class="mb-4">
        <span class="inline-block bg-amber-600 text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">Verso Blanco</span>
        <p class="text-gray-700 mb-3">Cuando el final de un verso no rima con ningún otro pero conservan una regularidad métrica.</p>
      </div>
      
      <div class="bg-white rounded-lg p-5 shadow-sm">
        <h5 class="text-lg font-bold text-amber-800 mb-2">Canto a la primavera</h5>
        <p class="text-sm text-amber-600 mb-3 italic">Xavier Villaurrutia</p>
        <div class="text-gray-800 leading-relaxed">
          <p class="italic mb-0">
            Decimos en sil<strong class="text-amber-700">encio</strong><br>
            o en voz alta, de pronto, "Primav<strong class="text-amber-700">era</strong>",<br>
            y algo nace o germ<strong class="text-amber-700">ina</strong><br>
            o tiembla o se despi<strong class="text-amber-700">erta</strong>
          </p>
        </div>
      </div>
    </article>

    <!-- Ejercicio -->
    <article class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-lg shadow-md p-6 border border-purple-100">
      <div class="mb-4">
        <span class="inline-block bg-purple-600 text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">Ejercicio</span>
        <p class="text-gray-700 mb-3 font-semibold">Intenta determinar el tipo de rima del siguiente poema.</p>
      </div>
      
      <div class="bg-white rounded-lg p-5 shadow-sm">
        <h5 class="text-lg font-bold text-purple-800 mb-2">La joven artista</h5>
        <p class="text-sm text-purple-600 mb-3 italic">Renato Leduc</p>
        <div class="text-gray-800 leading-relaxed space-y-3">
          <p class="italic mb-0">
            La joven artista exhibe sus tetas<br>
            partes integrantes de su profesión<br>
            arriesgando –claro– que curas ascetas<br>
            le nieguen los goces de la comunión…
          </p>
          <p class="italic mb-0">
            La joven artista de ondulante nalga<br>
            penetra a la iglesia en mala ocasión.<br>
            El cura la increpa, le grita que salga,<br>
            que libre a los fieles de la tentación…
          </p>
          <p class="italic mb-0">
            La joven artista desnuda y contrita<br>
            en la sacristía se llena de unción.<br>
            La sotana alzada, el santo curita<br>
            beatíficamente da su absolución…
          </p>
        </div>
        <div class="mt-4 p-3 bg-purple-50 rounded border-l-4 border-purple-500">
          <p class="text-purple-900 font-semibold mb-0">¿Qué tipo de rima piensas que es?</p>
        </div>
      </div>
    </article>
  </div>
  <h3>La métrica y el ritmo</h3>
  <p>Primero revisarás las definiciones de metro, ritmo, estrofa y verso, luego, para generar consensos o por lo menos para dotar de una aproximación más a estas categorizaciones, leerás lo siguiente:</p>
  <div class="mx-auto max-w-2xl bg-azulcla/30 space-x-5 space-y-0 rounded-lg shadow-md p-6 border">
    <p>El verso es la unidad básica que constituye al poema porque lo dota de un metro, número determinado de sílabas; de una rima, repetición sonora y coincidente al final de cada línea y de un ritmo, repetición acentual a lo largo del verso. Asimismo, al grupo de versos que se delimitan gráficamente, ya sea por espacios en blanco, por el uso de sangrías y, sobre todo, por la regularidad en su número se llama estrofa. La estrofa es una unidad sonora y de sentido superior al verso.</p>
    <p>La métrica es la disciplina que estudia las normas de construcción de los versos, las estrofas y los poemas. Los sistemas de verificación han variado a lo largo de la historia y también se han adaptado a las particularidades de cada lengua. Así, dentro de estos sistemas podemos citar los siguientes: el paralelístico, el cuantitativo y el silábico o métrico que corresponde a las lenguas romances, entre ellas la castellana.</p>
    <p>El verso es una unidad o una frase que tiene un efecto rítmico y conforma su estructura “mediante la combinación de sílabas, acentos y pausas”. Las sílabas determinan su medida, los acentos su ritmo y las pausas su tono. Otro ejemplo, sin ser característico de todas las clases de versos, es la rima y ésta les proporciona el timbre.</p>
  </div>
  <h4>¡Para aprender más!</h4>
  <p>Escucha y ve el poema musicalizado por Paco Ibáñez, Palabras para Julia de José Agustín Goytisolo. Posteriormente, ve y escucha la adaptación que hicieron Los Suaves y reflexiona con tus compañeros acerca del ritmo de la poesía y su innegable relación con el ritmo musical.</p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('Sa7T72nWa_A', 'Paco Ibáñez - Palabras para Julia');
      ?>
    </div>
  </div>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('IKc8ub5rj-U', 'Los Suaves - Palabras para Julia');
      ?>
    </div>
  </div>
  <p class="mb-6">Ahora revisemos con calma el poema del cual se extrajo la canción:</p>
  
  <article class="bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50 rounded-xl shadow-lg p-8 border border-rose-200 my-8">
    <div class="text-center mb-6 pb-4 border-b border-rose-200">
      <h4 class="text-2xl font-bold text-rose-900 mb-2">Palabras para Julia</h4>
      <p class="text-rose-700 italic text-lg">José Agustín Goytisolo</p>
    </div>
    
    <div class="bg-white/70 backdrop-blur-sm rounded-lg p-6 shadow-inner">
      <div class="max-w-3xl mx-auto text-gray-800 leading-relaxed space-y-4 text-center">
        <p class="italic text-base">
          Tú no puedes volver atrás<br>
          porque la vida ya te empuja<br>
          como un aullido interminable.
        </p>
        
        <p class="italic text-base">
          Hija mía, es mejor vivir<br>
          con la alegría de los hombres,<br>
          que llorar ante el muro ciego.
        </p>
        
        <p class="italic text-base">
          Te sentirás acorralada,<br>
          te sentirás perdida o sola,<br>
          tal vez querrás no haber nacido.
        </p>
        
        <p class="italic text-base">
          Yo sé muy bien que te dirán<br>
          que la vida no tiene objeto,<br>
          que es un asunto desgraciado.
        </p>
        
        <p class="italic text-base font-semibold text-rose-800">
          Entonces siempre acuérdate<br>
          de lo que un día yo escribí<br>
          pensando en ti como ahora pienso.
        </p>
        
        <p class="italic text-base">
          Un hombre solo, una mujer<br>
          así tomados, de uno en uno,<br>
          son como polvo, no son nada.
        </p>
        
        <p class="italic text-base">
          Pero yo cuando te hablo a ti,<br>
          cuando te escribo estas palabras,<br>
          pienso también en otros hombres.
        </p>
        
        <p class="italic text-base">
          Tu destino está en los demás,<br>
          tu futuro es tu propia vida,<br>
          tu dignidad es la de todos.
        </p>
        
        <p class="italic text-base">
          Otros esperan que resistas,<br>
          que les ayude tu alegría,<br>
          tu canción entre sus canciones.
        </p>
        
        <p class="italic text-base font-semibold text-rose-800">
          Entonces siempre acuérdate<br>
          de lo que un día yo escribí<br>
          pensando en ti como ahora pienso.
        </p>
        
        <p class="italic text-base">
          Nunca te entregues ni te apartes<br>
          junto al camino, nunca digas<br>
          no puedo más y aquí me quedo.
        </p>
        
        <p class="italic text-base">
          La vida es bella, tú verás<br>
          como a pesar de los pesares<br>
          tendrás amor, tendrás amigos.
        </p>
        
        <p class="italic text-base">
          Por lo demás no hay elección<br>
          y este mundo tal como es<br>
          será todo tu patrimonio.
        </p>
        
        <p class="italic text-base">
          Perdóname, no sé decirte<br>
          nada más, pero tú comprende<br>
          que yo aún estoy en el camino.
        </p>
        
        <p class="italic text-base font-semibold text-rose-800">
          Y siempre acuérdate<br>
          de lo que un día yo escribí<br>
          pensando en ti como ahora pienso.
        </p>
      </div>
    </div>
    
    <div class="mt-6 p-4 bg-rose-100/50 border-l-4 border-rose-500">
      <p class="text-rose-900 text-sm mb-0">
        <strong>Reflexión:</strong> Este poema es un mensaje de un padre a su hija, donde le transmite 
        palabras de aliento y esperanza. El estribillo que se repite destaca la importancia de la memoria 
        y el amor como guías en momentos difíciles.
      </p>
    </div>
  </article>
  
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
