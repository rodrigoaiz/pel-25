<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>La crisis del estado benefactor</h2>

    <p>La "crisis del estado benefactor" se refiere a un período de transformación y reforma en las políticas gubernamentales y el papel del Estado en la economía y la sociedad. Esta crisis se manifestó en diferentes países a lo largo de las últimas décadas del siglo XX y principios del siglo XXI.</p>

    <p>Las características principales de esta crisis incluyen:</p>

    <?php
  $accordionItems1 = [
    [
      'title' => 'Presiones económicas',
      'content' => '<p>Los altos costos de mantener programas de bienestar social, como la seguridad social, el sistema de salud y las pensiones, junto con desafíos económicos como la inflación y el desempleo, llevaron a una creciente preocupación sobre la sostenibilidad de los sistemas de bienestar existentes.</p>'
    ],
    [
      'title' => 'Cambios demográficos',
      'content' => 'El envejecimiento de la población en muchos países desarrollados, junto con tasas de natalidad más bajas, aumentó la presión sobre los sistemas de seguridad social, ya que había menos trabajadores activos para financiar a los jubilados y otros beneficiarios de programas de bienestar.'
    ],
    [
      'title' => 'Presiones fiscales',
      'content' => 'Los altos niveles de gasto público para financiar programas de bienestar social a menudo resultaron en déficits fiscales y deudas gubernamentales crecientes, lo que generó preocupaciones sobre la capacidad de los gobiernos para mantener sus compromisos a largo plazo.'
    ],
    [
      'title' => 'Cambios ideológicos',
      'content' => 'En muchos lugares, hubo un cambio en la ideología política hacia una mayor promoción de políticas de mercado y la reducción de la intervención del Estado en la economía, lo que a menudo se describe como neoliberalismo.'
    ],
    [
      'title' => 'Reformas y recortes',
      'content' => 'En respuesta a estas presiones, muchos países implementaron reformas en sus programas de bienestar social, reduciendo beneficios, aumentando la edad de jubilación y cambiando la forma en que se financian estos programas.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');

  ?>

   <p>Es importante destacar que la "crisis del estado benefactor" se vivió de manera diferente en diferentes países y regiones, y las respuestas a esta crisis variaron ampliamente. Algunos países buscaron mantener sus sistemas de bienestar social a través de reformas, mientras que otros optaron por recortar significativamente el gasto en programas de bienestar. La forma en que se abordó esta crisis y sus consecuencias varían según el contexto político y económico de cada país.</p>

   <p>Revisemos el siguiente video para relacionar los cambios generados por las crisis del estado del bienestar con el neoliberalismo.</p>

    <?php
      renderVideoIframe('LjNTGsR28yQ', 'El neoliberalismo');
      ?>

    <?php
       renderImage('hu2-u3-defensores.webp', 'Ronald Reagan, presidente de Estados Unidos y Margaret Thatcher , primera ministra de Inglaterra durante la década de los ochenta del siglo pasado, son considerados dos defensores del neoliberalismo, debido a sus numerosas políticas en contra del Estado de Bienestar. Foto de Neveselbert (mobile).', 'https://upload.wikimedia.org/wikipedia/commons/4/49/President_Ronald_Reagan_and_Prime_Minister_Margaret_Thatcher_of_the_United_Kingdom.jpg', 'Wikimedia Commons.');
    ?>
    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
