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
    <h3>Problemas que dan lugar a ecuaciones cuadráticas con una incógnita</h3>
    <p>Los problemas verbales que generan ecuaciones de segundo grado suelen involucrar situaciones en las que una cantidad desconocida (generalmente representada por "\(x\)") se relaciona con otras cantidades de una manera cuadrática. Estos problemas pueden ser resueltos al usar la información dada para obtener una ecuación cuadrática en cualquiera de sus formas anteriormente mencionadas, en esta lección veremos cómo convertir algunas situaciones verbales en ecuaciones cuadráticas así como la solución de estas en distintas formas \((x2 =b; ax2 =b; ax2 +b=c; ax2 +b=0 a(x+b)2 +c=d; (x+b)(x+c)=0)\) que más adelante se abordarán.</p>

    <?php
    renderImage('u1_t3_problemas.webp', 'Imagen de Titlutin', 'https://commons.wikimedia.org/wiki/File:CMAP_-_Centre_de_Math%C3%A9matiques_Appliqu%C3%A9es_de_l%27Ecole_polytechnique_(25911635211).jpg', 'Wikimedia Commons.');
    ?>

    <h3>Situaciones que dan lugar a ecuaciones cuadráticas.</h3>
    <h4>Ejemplo 1</h4>
    <p>Antonio tiene dos años más que su hermana Julia y se sabe que la suma de los cuadrados de ambas edades es de 650.</p>
    <p>Si queremos saber las edades de los hermanos, tendremos que plantear una ecuación de la siguiente forma, por lo que quedaría:</p>
    <p>$$Antonio=x$$</p>
    <p>$$Julia=x-2$$</p>
    <div class="text-center">
    <p>Por lo que el cuadrado de cada edad quedaría:</p>
            <p>Antonio\(= x^2\)</p>
            <p>Julia\(= (x-2)^2\)</p>
            <p>Y si sumamos las edades obtenemos:</p>
            <p>\(x^2 + (x-2)^2 = 650\)</p>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-none md:table-fixed text-left text-gray-500 rtl:text-right my-0">
            <tbody>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Desarrollando \((x-2)^2\) de la ecuación anterior</p>
                    </th>
                    <td class="px-6 py-2 text-lg">
                    <p>\(x^2 + \left(x^2 - 4x + 4\right) = 650\)</p>
                    <p>\(x^2 + x^2 - 4x + 4 = 650\)</p>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 text-lg">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap text-lg">
                    <p>Simplificando e igualando a cero obtenemos</p>
                    </th>
                    <td class="px-6 py-2">
                        <p>\(2x^2 - 4x + 4 - 650 = 0\)</p>
                        <p>\(2x^2 - 4x - 646 = 0\)</p>
                        <p>\(x^2 - 2x - 323 = 0\)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p>La ecuación que obtuvimos es una ecuación cuadrática (esto debido a que el término con mayor potencia es 2).</p>

    <?php
    renderImage('u1_t3_ecuaciones_cuadraticas.webp', 'Imagen de Lena Gulenko', 'https://commons.wikimedia.org/wiki/File:The_Institute_of_Mathematics_of_national_academy_of_sciences_of_Ukraine.Entrance_examination._Kyiv_2019.jpg', 'Wikimedia Commons.');
    ?>

    <h4>Ejemplo 2</h4>

    <p>Juan tienen un terreno en forma rectangular, sabe que su perímetro es de 280 \(m\) y tiene un área de 4000 \(m^2\), ayúdalo a determinar sus dimensiones.</p>
    <p>Si queremos identificar las dimensiones del terreno debemos de plantear lo siguiente:</p>
    <p>El terreno es rectangular y si conocemos su perímetro, por lo tanto:</p>
        <p>$$2(base)+2(altura)=perimetro$$</p>
        <p>$$2x+2(altura)=280$$</p>
        <p>$$x+altura=140$$</p>
        <p>$$Altura=140-x$$</p>
    <p>Si conocemos área obtenemos:</p>
    <p>$$Área=base*altura$$</p>
    <p>$$4000=x*140-x$$</p>
    <p>Desarrollando los productos indicados obtenemos:</p>
            <p>$$4000=140x-x^2$$</p>
            <p>Igualando a cero obtenemos </p>
            <p>$$x^2-140x+4000=0$$</p>
            <p>Obtuvimos nuevamente una ecuación cuadrática.</p>

    <h4>Ejemplo 3</h4>

    <p>Un obrero puede hacer un trabajo en 6 horas menos que las requeridas por su ayudante. Si trabajan juntos
                pueden hacer el trabajo en 17 horas, ¿Cómo planteamos la ecuación que da solución a este problema?</p>
            <p>Para dar respuesta a este tipo de problemas podemos considerar la misma unidad de tiempo, de esta manera,
                la suma de las partes del trabajo que realiza cada uno de los trabajadores en una unidad de tiempo es
                igual a la parte de trabajo que pueden hacer trabajando juntos en el mismo tiempo.</p>
            <p>Por lo que si un solo obrero puede realizar el trabajo en 6 horas menos que su ayudante lo escribimos:
            </p>
            <p>$$\frac{1}{x-6}$$</p>
            <p>Ya que esto significa que en 1 hora puede efectuar \(\frac{1}{x-6} \) partes del trabajo.</p>
            <p>Y que si trabajan juntos se tarden 17 horas por lo que: \(\frac{1}{17} \)</p>
            <p>Entonces tenemos que:</p>
            <p>$$\frac{1}{x}+\frac{1}{x-6}=\frac{1}{17}$$</p>
            <p>Tenemos una suma de fracciones, por lo que al sumar (primero trabajaremos solo con el lado izquierdo de
                la expresión) esta obtenemos:</p>
            <p>$$\frac{1}{x}+\frac{1}{x-6}=\frac{1(x-6)+1(x)}{(x)(x-6)}$$</p>
            <p>Desarrollando la expresión obtenemos:</p>
            <p>$$\frac{1(x-6)+1(x)}{(x)(x-6)}=\frac{x-6+x}{x^2 -6x}=\frac{2x-6}{x^2-6x}$$</p>
            <p> Reescribiendo esto en la ecuación planteada original obtenemos</p>
            <p>$$\frac{2x-6}{x^2-6x}=\frac{1}{17}$$</p>
            <p>De donde al desarrollar toda la expresión obtenemos:</p>
            <p>$$\frac{2x-6}{x^2-6x}=\frac{1}{17}$$</p>
            <p>$$17(2x-6)=1(x^2-6x)$$</p>
            <p>$$34x-102=x^2-6x$$</p>
            <p>$$34x-102-x^2+6x=0$$</p>
            <p>$$-x^2+6x+34x-102=0$$</p>
            <p>$$-x^2+40x-102=0$$</p>
            <p>Multiplicando por -1 toda la ecuación para que no nos quede el término cuadrático en negativo</p>
            <p>$$x^2-40x+102=0$$</p>

    <h4>Ejemplo 4</h4>

    <p>Se lanza un dardo desde una cerbatana, éste lleva una velocidad inicial de 29 m/seg, si el dispara se
                efectúa hacia arriba, ¿en qué momento alcanza los 22.5m? ¿cuál es la ecuación que representa este
                problema?</p>
            <p>Para poder dar solución a este problema tenemos que recurrir a una fórmula de física la cual nos
                permitirá determinar la altura o distancia a la que podría llegar el dardo, y debido a que el disparo es
                hacia arriba, se involucra la gravedad por lo que la formula a utilizar sería:</p>
            <p>$$h = v_it - \frac{1}{2}gt^2$$</p>
            <p>donde:</p>
            <p>\(v_i =\) velocidad inicial</p>
            <p>\(t =\) tiempo</p>
            <p>\(g =\) gravedad \((g = 9.81 \frac{m}{seg^2})\)</p>
            <p>\(h =\) altura</p>
            <p>sustituyendo los valores conocidos en la ecuación obtenemos</p>
            <p>$$22.5=29t - \frac{1}{2}(9.81)t^2$$</p>
            <p>$$4.9t^2-29t +22.5=0 $$</p>
            <p>Por lo que obtenemos una ecuación cuadrática para poder dar solución al problema. </p>

    <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right my-0">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-2">
                        Silver
                    </td>
                    <td class="px-6 py-2">
                        Laptop
                    </td>
                    <td class="px-6 py-2">
                        $2999
                    </td>
                    <td class="px-6 py-2">
                        <a href="#" class="font-medium hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-2">
                        White
                    </td>
                    <td class="px-6 py-2">
                        Laptop PC
                    </td>
                    <td class="px-6 py-2">
                        $1999
                    </td>
                    <td class="px-6 py-2">
                        <a href="#" class="font-medium hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-2">
                        Black
                    </td>
                    <td class="px-6 py-2">
                        Accessories
                    </td>
                    <td class="px-6 py-2">
                        $99
                    </td>
                    <td class="px-6 py-2">
                        <a href="#" class="font-medium hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->



</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
