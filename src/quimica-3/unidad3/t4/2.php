<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Equilibrio químico</h2>
  <h3>Ácidos y bases</h3>

  <?= TabsComponent([
    'tabs' => [
      [
        'id' => 'acidos',
        'label' => 'Ácidos',
        'content' =>
        '<div class="grid grid-cols-3 gap-4">
                    <div class="pt-8 pl-4">
                <img class="mx-auto" src="../../assets/img/q3-u3-clorhidrico.webp" />
                <img class="mx-auto" src="../../assets/img/q3-u3-acetico.webp" />
                </div>

                    <div class="col-span-2 text-2xl leading-6">
                        
                        <p>Imagina que entras al laboratorio y encuentras dos frascos sin etiquetar que contienen soluciones ácidas, uno con ácido clorhídrico y otro con ácido acético, que es un componente común en el vinagre. </p>
                        <p>Para identificar cuál es cuál, puedes realizar algunas pruebas simples. Por ejemplo, puedes agregar un poco de bicarbonato de sodio a cada frasco y observar cuál produce burbujas. El ácido clorhídrico reaccionará efervescentemente, mientras que el ácido acético lo hará de manera más suave.</p>

                        <p>¿Cómo podemos identificar cada solución usando nuestro conocimiento del equilibrio químico?</p>
                       
                    </div>
                </div>'
      ]
    ],
  ]) ?>
  
  <p>Para ello, primero debemos comprender algunos conceptos que se encuentran en el siguiente video. Te recomendamos agregar subtítulos para traducir el audio. </p>

  <?php
  renderVideoIframe('ZiokqP0aZ1E', 'Teoría de Bronsted-Lowry');
  ?>

  <p>El modelo de Bronsted-Lowry considera a un ácido como aquella sustancia que dona un protón (H⁺), mientras que una base es una sustancia que acepta un protón. En este modelo, los ácidos y las bases siempre funcionan en pares.</p>

  <p>Es así como los ácidos fuertes, como el ácido clorhídrico (HCl) y el ácido sulfúrico (H₂SO₄), se ionizan completamente en iones cuando están en agua, lo que los hace irreversibles porque una vez que donan sus iones de hidrógeno, no se reforman fácilmente en la molécula original.</p>

  <p class="text-center">HCl ⇌ H⁺ + Cl⁻</p>


  <p>Por otro lado, los ácidos débiles como el ácido acético (CH₃COOH) solo se ionizan parcialmente en agua, creando un equilibrio entre las moléculas no disociadas y los iones disociados. Esto significa que los ácidos débiles pueden reformar la molécula original después de donar iones de hidrógeno, lo que permite una reacción reversible.</p>

  <p class="text-center">CH₃COOH ⇌ CH₃COO⁻ + H⁺</p>

  <h4>Equilibrio en ácidos y bases: modelo de Bronsted-Lowry</h4>

  <p>En una reacción ácido-base basada en el modelo de Bronsted-Lowry, el equilibrio se logra cuando la rapidez de la reacción directa (donación de protones) es igual a la rapidez de la reacción inversa (aceptación de protones). Este equilibrio dinámico permite la formación de pares ácido-base conjugados donde el ácido en la reacción directa se convierte en una base en la reacción inversa y viceversa.</p>

  <p>Relacionada con los conceptos de ácidos fuertes y débiles, la ionización es el proceso en el que las moléculas se dividen en iones cuando se disuelven en un disolvente como el agua. Los ácidos fuertes se ionizan completamente, provocando una gran concentración de iones en solución, mientras que los débiles se ionizan sólo parcialmente, lo que provoca menos concentración de iones.</p>

  <p> Los ácidos fuertes con altos niveles de ionización se consideran más ácidos y tienen un pH más bajo, mientras que los ácidos débiles con niveles de ionización más bajos son menos ácidos y tienen un pH más alto.</p>

  <p>Con lo anterior, ¿qué podríamos concluir sobre el problema inicial? </p>

  <?php ob_start(); ?>
  <p>Te invitamos a seguir revisando otros conceptos para inferir cuál es el tipo de solución. Revisa la actividad  Características de los ácidos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t4a2', "Características de los ácidos", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
