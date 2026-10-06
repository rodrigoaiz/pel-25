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
  <h2>El alfabeto griego, correspondencia morfofonética y transcripción al latín y al español.</h2>

  <p>Comenzamos a revisar el alfabeto griego, observamos sus letras mayúsculas y minúsculas. También identificamos la correspondencia en sonido y forma de cada una de las letras en su paso al latín y al español. En la siguiente tabla, observa que se escribió entre paréntesis una transcripción en español de cada letra. Al leer, trata de pronunciar cada letra viendo el griego.</p>

  <h3>Alfabeto griego (en mayúsculas y minúsculas)</h3>

   <table class="table-auto border-collapse border border-slate-400">
    <thead>
      <tr >
        <th class="border border-slate-300 text-center">Griego</th>
        <th class="border border-slate-300 text-center">Pronunciación</th>
        <th class="border border-slate-300 text-center">Latín</th>
        <th class="border border-slate-300 text-center">Español</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Α α</td>
        <td class="border border-slate-300 text-center">ἄλφα (álfa)</td>
        <td class="border border-slate-300 text-center">a</td>
        <td class="border border-slate-300 text-center">a</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Β β</td>
        <td class="border border-slate-300 text-center"> βέτα (béta)</td>
        <td class="border border-slate-300 text-center">b</td>
        <td class="border border-slate-300 text-center">b</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Γ γ</td>
        <td class="border border-slate-300 text-center">γάμμα (gámma)</td>
        <td class="border border-slate-300 text-center">g</td>
        <td class="border border-slate-300 text-center">g</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Δ δ</td>
        <td class="border border-slate-300 text-center">δέλτα (délta)</td>
        <td class="border border-slate-300 text-center">d</td>
        <td class="border border-slate-300 text-center">d</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ε ε</td>
        <td class="border border-slate-300 text-center">ἔψιλον (épsilon)</td>
        <td class="border border-slate-300 text-center">e</td>
        <td class="border border-slate-300 text-center">e</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ζ ζ</td>
        <td class="border border-slate-300 text-center">ζ ῆτα (tzéta)</td>
        <td class="border border-slate-300 text-center">thse/z/c</td>
        <td class="border border-slate-300 text-center">z/c</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Η η</td>
        <td class="border border-slate-300 text-center">ἦτα (éta)</td>
        <td class="border border-slate-300 text-center">e /a</td>
        <td class="border border-slate-300 text-center">e/a</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Θ θ</td>
        <td class="border border-slate-300 text-center"> θῆετα (théta)</td>
        <td class="border border-slate-300 text-center">th</td>
        <td class="border border-slate-300 text-center">t</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ι ι</td>
        <td class="border border-slate-300 text-center">ἰῶτα (iôta)</td>
        <td class="border border-slate-300 text-center">i</td>
        <td class="border border-slate-300 text-center">i</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Κ κ</td>
        <td class="border border-slate-300 text-center">κάππα (káppa)</td>
        <td class="border border-slate-300 text-center">k</td>
        <td class="border border-slate-300 text-center">k</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Λ λ</td>
        <td class="border border-slate-300 text-center"> λάμβδα (lámnda)</td>
        <td class="border border-slate-300 text-center">l</td>
        <td class="border border-slate-300 text-center">l</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Μ μ</td>
        <td class="border border-slate-300 text-center">μῦ (mí)</td>
        <td class="border border-slate-300 text-center">m</td>
        <td class="border border-slate-300 text-center">m</td>
      </tr>

      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ν ν</td>
        <td class="border border-slate-300 text-center">νῦ (ní)</td>
        <td class="border border-slate-300 text-center">n</td>
        <td class="border border-slate-300 text-center">n</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">ξῖ (csí)</td>
        <td class="border border-slate-300 text-center"> ξῖ (csí)</td>
        <td class="border border-slate-300 text-center">csi/x/j</td>
        <td class="border border-slate-300 text-center">x/j</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ο ο</td>
        <td class="border border-slate-300 text-center">ὄμικρον (ómicron)</td>
        <td class="border border-slate-300 text-center">o</td>
        <td class="border border-slate-300 text-center">o</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Π π</td>
        <td class="border border-slate-300 text-center">πῖ (pí)</td>
        <td class="border border-slate-300 text-center">p</td>
        <td class="border border-slate-300 text-center">p</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ῥ ῥ </td>
        <td class="border border-slate-300 text-center">ῤῶ (rhó)</td>
        <td class="border border-slate-300 text-center">rr/r</td>
        <td class="border border-slate-300 text-center">rr/r</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Σ σ ς </td>
        <td class="border border-slate-300 text-center">σίγμα  (sígma)</td>
        <td class="border border-slate-300 text-center">s</td>
        <td class="border border-slate-300 text-center">s</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Τ τ</td>
        <td class="border border-slate-300 text-center">ταῦ (tau) </td>
        <td class="border border-slate-300 text-center">t</td>
        <td class="border border-slate-300 text-center">t 
(a veces la t da sonido tz/c en español teia=tia/cia en las terminaciones de palabra).
</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Υ υ</td>
        <td class="border border-slate-300 text-center"> ὔψιλον (uípsilon)</td>
        <td class="border border-slate-300 text-center">u/y/v</td>
        <td class="border border-slate-300 text-center">y/u/v</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Φ φ</td>
        <td class="border border-slate-300 text-center">φῖ (fhí)</td>
        <td class="border border-slate-300 text-center">f</td>
        <td class="border border-slate-300 text-center">f</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Χ χ</td>
        <td class="border border-slate-300 text-center">χ ῖ (xhí)</td>
        <td class="border border-slate-300 text-center">qu/ch/j</td>
        <td class="border border-slate-300 text-center">qu/c/j</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ψ ψ</td>
        <td class="border border-slate-300 text-center"> ψῖ (psí)</td>
        <td class="border border-slate-300 text-center">ps</td>
        <td class="border border-slate-300 text-center">ps (sonido sólo s)</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-purple-600 text-center">Ω ω</td>
        <td class="border border-slate-300 text-center">ωμεγα (oméga)</td>
        <td class="border border-slate-300 text-center">o</td>
        <td class="border border-slate-300 text-center">o</td>
      </tr>
    </tbody>
   </table>

  <p>Ya sabes la pronunciación. Lee en voz alta, tanto las mayúsculas como las minúsculas, para que te familiarices con la grafía.</p>

  <table class="table-auto border-collapse border border-slate-400">
    <thead>
      <tr >
        <th colspan="2" class="border border-slate-300 text-center c">Alfabeto Griego</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border border-slate-300 text-center">Mayúsculas</td>
        <td class="border border-slate-300 text-center">Minúsculas</td>
      </tr>
      <tr>
        <td class="border border-slate-300 text-xl text-blue-950 text-center">Α, Β , Γ, Δ,  Ε, Ζ, Η, Θ, Ι, Κ, Λ, Μ, Ν, Ξ, Ο, Π, Ρ, Σ, Τ, Υ, Φ, Χ, Ψ,Ω</td>
        <td class="border border-slate-300 text-xl  text-blue-950 text-center">α, β. γ. δ. ε, ζ, η, θ, ι, κ,λ, μ, ν, ξ, ο, π, ρ, σ,ς, τ, υ, φ, χ, ψ, ω </td>
      </tr>

    </tbody>
  </table>

  



   

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
