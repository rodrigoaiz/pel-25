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
  <h2>Signos ortográficos, espíritus, acentos, puntuación</h2>

  <p>Primero los espíritus, es una especie de aspiración que el español no tiene. Hay dos signos llamados espíritus, uno suena, el otro no. A continuación te los presento.</p>

  <table class="table-auto border-collapse border border-slate-400">
    <thead>
      <tr >
        <th  class="border border-slate-300 text-center text-fuchsia-900">Espíritu suave</th>
        <th  class="border border-slate-300 text-center text-fuchsia-900">Espíritu rudo o fuerte</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center">
          <ul>
            <li>No suena</li>
            <li>No pasa al latín ni al español</li>
          </ul>
        </td>
        <td class="border border-slate-300 text-center">
          <ul>
            <li>Aspirado, según la vocal, sonido jha, jhe, jhi, jho, jhu (va sobre vocal que inicia palabra)</li>
            <li>Pasa al latín y al español en la forma de la letra h</li>
            <li>Por ejemplo: ἱστορία (jhistoría) que sería historia.</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>

  <p>Continuando con los acentos griegos, son <b>tres</b> los que vamos a ver y funcionan de manera semejante en español.</p>

    <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-blue-950">Acento circunflejo</td>
        <td class="border border-slate-300 text-center text-blue-950"> ̃ </td>
        <td class="border border-slate-300 text-center ">va sobre ω ῶ, η ῆ, α ᾶ ,ο diptongo  αῖ,  οῦ</td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center text-blue-950">Acento agudo</td>
        <td class="border border-slate-300 text-center text-blue-950"> ́ </td>
        <td class="border border-slate-300 text-center">κεφαλή suena igual que en español <b>kefalé</b></td>  
      </tr>
      <tr>
        <td class="border border-slate-300 text-center text-blue-950">Acento grave</td>
        <td class="border border-slate-300 text-center text-blue-950"> ̀ </td>
        <td class="border border-slate-300 text-center">καὶ suena sobre la vocal anterior <b>kái</b>.</td>
      </tr>
    </tbody>
  </table>

  <p>En cuanto a la puntuación, en la siguiente tabla identificarás los dos principales:</p>

  <table class="table-auto border-collapse border border-slate-400">
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center text-green-500">Punto y coma</td>
        <td class="border border-slate-300 text-center text-green-500"> ; </td>
        <td class="border border-slate-300 text-center ">Es igual a <b>interrogación</b> o <b>pregunta</b></td>
        </tr>
      <tr>
        <td class="border border-slate-300 text-center text-green-500">Punto alto</td>
        <td class="border border-slate-300 text-center text-green-500"> ۰ֹ</td>
        <td class="border border-slate-300 text-center">Es igual a dos puntos, o punto y seguido, o punto final en español. </td>  
      </tr>
    </tbody>
  </table>

  <p>Ahora vamos a ejercitar la pronunciación del alfabeto, sus espíritus y acentos en el siguiente ejercicio. Lee las palabras en letra mayúscula y después localiza las minúsculas y léelas en el siguiente mapa:</p>

  <?php
  renderImage('g1-u1-mapagrecia2.webp', 'Arenas, A. (2026). Mapa de Grecia con los nombres en griego. [Ilustración].');
  ?>

 
  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
