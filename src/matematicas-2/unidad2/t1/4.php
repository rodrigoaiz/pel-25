<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Variación lineal y cuadrática</h3>
    <div class="md:grid grid-cols-2 gap-3">
      <div>
        <p>En este aprendizaje recordaremos a la función lineal por lo que a manera de repaso te invitamos a que
        revises el siguiente interactivo en el que se aborda el concepto de variación lineal.</p>
        <p>Da clic en la imagen que aparece a continuación para acceder al recurso: en el siguiente link nos apoyará
        en recordar los aprendizajes de variación lineal.</p>
      </div>
      <div>
        <a href="https://uapas2.bunam.unam.mx/matematicas/variacion_lineal/" target="_blank">
            <?php
            renderImage('u2t1_banner_variacion_lineal.webp', '', '', '');
            ?>
        </a>
      </div>
    </div>

    <p>Empecemos a trabajar con la función lineal para esto tenemos el siguiente problema:</p>
    <p>En un estacionamiento del centro de la Ciudad de México cobran a cada auto \$30.00 cada 15 minutos, decidí dejar el auto ahí y pienso tardar 3 horas ¿Cuánto debo pagar?; Si solo tuviera \$240</p>
    <p>Bueno antes que nada empecemos a preguntarnos:</p>

    <ol class="ol-number">
      <li>¿Cuáles son los datos que tengo del problema?</li>
      <li>¿Cuáles son las variables? ¿Qué es lo que debo resolver?</li>
    </ol>

    <div class="max-w-3xl mx-auto">
          <?php
          $accordionItems1 = [
            [
              'title' => 'Respuesta',
              'content' => '<ul class="ul-disc">
                                      <li>¿Cuáles son los datos que tengo del problema? <strong>Estos son que cada 15 minutos
                                    cobran $30.</strong></li>
                                      <li>¿Cuáles son las variables? <strong>En este caso el tiempo que se deja el auto estacionado
                                    y el cobro de este tiempo.</strong></li>
                                      <li>¿Qué es lo que debo resolver? <strong>Cuánto dinero debo pagar si tardo 3 horas en
                                    regresar por el carro y si tuviera $240 pesos cuanto tiempo me podría tardar en
                                    recoger el auto del estacionamiento.</strong></li>
                                  </ul>'
            ]
          ];
          renderAccordion($accordionItems1, 'primero-');
          ?>
    </div>

    <p>Ya que tenemos todo lo anterior, debemos relacionar los 15 minutos en el estacionamiento del auto que cuestan $30 con el tiempo que permanece el mismo en dicho estacionamiento.</p>
    <p>Realicemos una tabla, obtener la gráfica y modelo matemático.</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-gray-500 my-0">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                Tiempo (minuto)
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                Pago ($)
                </th>
            </tr>
        </thead>
            <tbody class="text-center">
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    1
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                    2
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      2
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      3
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      6
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      4
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      5
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      10
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      6
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      12
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      7
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      14
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      8
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      16
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      9
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      18
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      10
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      20
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      11
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      22
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      12
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      24
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      13
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      26
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      14
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      28
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      15
                    </th>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg text-center">
                      30
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="m-auto pt-5">
        <a href="https://uapas2.bunam.unam.mx/matematicas/variacion_lineal/" target="_blank">
            <?php
            renderImage('u2t1_grafica_1.webp', '', '', '');
            ?>
        </a>
    </div>

    <p>La gráfica que obtuviste nos confirma que estamos trabajando con una función lineal (recuerda que lo
                revisaste en la uapa), ya que la expresión gráfica del problema es una recta, además si realizamos las
                primeras diferencias finitas de la variable dependiente (dinero) al tener datos consecutivos de tiempo
                tenemos:</p>
            <p>30-28=2</p>
            <p>28-26=2</p>
            <p>8-6=2</p>
            <p>Esta diferencia es constante lo que nos confirma nuevamente que se trata de una función lineal</p>
            <p>Podemos concluir que si las primeras diferencias finitas son constantes se trata de una función lineal.
            </p>
            <p>Y=2x</p>
            <p>Y: cantidad a pagar </p>
            <p>x : Tiempo </p>
            <p>Ahora contestemos las preguntas del problema.</p>
            <p> En 3 horas sería 180 minutos, por lo tanto </p>
            <p>Y=2(180) =360</p>
            <p><strong>Tendría que pagar $360.00</strong></p>
            <p>Y si tengo $240.00</p>
            <p>240=2x</p>
            <p>Despejando </p>
            <p>x= 240/2</p>
            <p><strong>=120 minutos puedo estar estacionado como máximo, dos horas.</strong></p>
            <p>Volvamos al ejemplo del anterior aprendizaje</p>
            <p>La gráfica es una parábola que representa una función cuadrática pero además observemos las diferencias
                finitas de la variable dependiente cuando la variable independiente es consecutiva.</p>
            <p>175-144=31</p>
            <p>144-111=33</p>
            <p>111-76=35</p>
            <p>76-39=37</p>
            <p>39-0=39</p>
            <p>Podemos concluir que las primeras diferencias finitas no son constantes, claro no es una función lineal,
                ahora veamos con las segundas diferencias</p>
            <p>33-31=2</p>
            <p>35-33=2</p>
            <p>37-35=2</p>
            <p>39-37=2</p>
            <p>Estas segundas diferencias finitas sí son constantes y esta constante es igual a 2, esto nos dice que la
                variación es cuadrática y tenemos una función cuadrática. </p>
            <p>Por lo que podemos concluir que si las segundas diferencias finitas son constantes tenemos una función
                cuadrática.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>