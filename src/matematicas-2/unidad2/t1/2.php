<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelo de una función cuadrática</h3>
    <p>En este aprendizaje <b>obtendremos</b> el modelo de una función cuadrática a partir de un problema de aplicación, para esto comienza por revisar lo siguiente:</p>

    <div class="md:grid grid-cols-2 gap-3">
      <div>
          <a href="https://uapas1.bunam.unam.mx/matematicas/iden_variables/" target="_blank">
              <?php
              renderImage('u2t1_banner_identificacion_variables.webp', '', '', '');
              ?>
          </a>
          <p>En esta liga encontrarás definiciones e identificarás concepto de <b>variable, variable independiente, variable dependiente</b>, debes leer solo la pantalla 1 y 2.</p>
      </div>
    <div>
        <a href="https://uapas2.bunam.unam.mx/matematicas/definicion_de_funcion/" target="_blank">
            <?php
            renderImage('u2t1_banner_definicion_funcion.webp', '', '', '');
            ?>
        </a>
        <p>En esta liga encontrarás definiciones de función, por favor observar el video.</p>
      </div>
    </div>
    <div>
        <a href="https://uapas2.bunam.unam.mx/matematicas/funcion_cuadratica/" target="_blank">
            <?php
            renderImage('u2t1_banner_funcion_cuadratica.webp', '', '', '');
            ?>
        </a>
        <p>En esta liga encontrarás definiciones de función cuadrática, por favor leer hasta el <b>cambio de y en las funciones cuadráticas</b>.</p>
    </div>
</section>

<style>
  .link-card {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    margin: 0.5rem;
    background-color: #e8e8ea;
    border-radius: 8px;
    text-align: center;
    text-decoration: none;
    color: #333;
  }

  .link-card:hover {
    background-color: #d0d0d8;
  }

  .link-card h4 {
    margin: 0;
    font-size: 1.2rem;
  }
</style>

<!-- <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-4 bg-secondary/50 px-5 py-5 mx-auto">
        <div>
        <p class="mb-3">En esta liga encontrarás definiciones e identificarás concepto de variable, variable independiente, variable dependiente, debes leer solo la pantalla 1 y 2.</p>
        <a href="https://uapas1.bunam.unam.mx/matematicas/iden_variables/" target="_blank">
        <?php
        renderImage('u2t1_banner_identificacion_variables.webp', '', '', '');
        ?>
        </a>
        </div>
        <div>
        <p class="mb-3">En esta liga encontrarás definiciones de función, por favor observar el video.</p>
        <a href="https://uapas2.bunam.unam.mx/matematicas/definicion_de_funcion/" target="_blank">
        <?php
        renderImage('u2t1_banner_definicion_funcion.webp', '', '', '');
        ?>
        </a>
        </div>
        <div>
        <p class="mb-3">En esta liga encontrarás definiciones de función cuadrática , por favor leer hasta el cambio de y en las funciones cuadráticas.</p>
        <a href="https://uapas2.bunam.unam.mx/matematicas/funcion_cuadratica/" target="_blank">
        <?php
        renderImage('u2t1_banner_funcion_cuadratica.webp', '', '', '');
        ?>
        </a>
        </div>
</div> -->

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>