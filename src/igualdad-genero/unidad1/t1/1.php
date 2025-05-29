<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Tabs.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <?= TabsComponent([
    'tabs' => [
        ['id' => 'resumen', 'label' => 'Resumen',
        'content' =>
        '<div class="p-5">
            <p>Bienvenido a la Unidad 1, Tema 1, Tarea 1. Aquí encontrarás información sobre igualdad de género y su importancia en la sociedad.</p>
            <p>En esta sección, exploraremos los conceptos básicos y las estadísticas relacionadas con la igualdad de género.</p>
            <p>La igualdad de género es un principio fundamental que busca garantizar que hombres y mujeres tengan las mismas oportunidades y derechos en todos los aspectos de la vida.</p>
            <p>Es crucial para el desarrollo sostenible y el bienestar de las sociedades.</p>
            <p>La igualdad de género no solo beneficia a las mujeres, sino que también contribuye al progreso social y económico en general.</p>
        </div>'
        ],
        ['id' => 'detalles', 'label' => 'Detalles',
        'content' =>
        '<div class="p-5">
            <p>En esta sección, profundizaremos en los detalles de la igualdad de género, incluyendo su historia, desafíos actuales y logros alcanzados.</p>
            <p>La lucha por la igualdad de género ha sido un proceso largo y complejo, con avances significativos en las últimas décadas.</p>
            <p>A pesar de estos logros, aún existen barreras que impiden alcanzar una verdadera igualdad.</p>
            <p>Es importante seguir trabajando para eliminar estas barreras y promover un entorno más equitativo para todos.</p>
        </div>'
        ],
        ['id' => 'examples', 'label' => 'Ejemplos', 'content' => 'Soy contenido de los ejemplos'],
        ['id' => 'resources', 'label' => 'Recursos', 'content' => 'Soy contenido de los recursos'],
    ],
]) ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
