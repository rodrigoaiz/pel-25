<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php'; // Asegúrate de incluir el archivo Accordion.php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<h3>Conceptos de red y servicios de Internet</h3>
<p>Te invito a que revises el siguiente video, donde identificamos las actividades a realizar para lograr el aprendizaje.</p>
<div class="max-w-xl mx-auto">
  <?php
  renderVideoIframe('eAGZ1nqAtEw', ' Presentación del Aprendizaje 1 "Conceptos de red y servicios de Internet"');
  ?>
</div>
<h3>Introducción</h3>
<p>A partir de la interacción actual, las redes sociales constituyen, las nuevas expresiones como productores de conocimiento, así como su necesidad de intercambiar y transferir lo que se aprende y se crea, sin embargo, es necesario conocer algunos conceptos básicos de Redes informáticas, al mismo tiempo de algunos de los servicios de Internet que utilizamos día a día, debido a que son estructuras tecnológicas, que permiten la interconexión de información a través de diversos dispositivos, cada uno con su propia autonomía, que convergen en el acceso a la Red llamada Internet, así como el envío-recepción de datos y archivos, lo cual se logra a partir de una serie de protocolos de comunicación, como el TCP/IP.</p>
<h3>Aprendizajes de la unidad</h3>
<img src="<?php echo PATH_IMAGES ?>gente_negocios_iconos.webp" alt="Alumnos CCH" />

<?php
// Define the first accordion items
$accordionItems1 = [
  [
    'title' => 'What is Flowbite?',
    'content' => '<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p><p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>'
  ],
  [
    'title' => 'Is there a Figma file available?',
    'content' => '<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p><p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>'
  ],
  [
    'title' => 'What are the differences between Flowbite and Tailwind UI?',
    'content' => '<p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p><p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p><p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p><ul class="ps-5 text-gray-500 list-disc dark:text-gray-400"><li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li><li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li></ul>'
  ]
];

// Render the first accordion
renderAccordion($accordionItems1, 'first-');
?>
<p>más información por aquí</p>
<?php

$accordionItems2 = [
  [
    'title' => 'What are the differences between Flowbite and Tailwind UI?',
    'content' => '<p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p><p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p><p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p><ul class="ps-5 text-gray-500 list-disc dark:text-gray-400"><li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li><li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li></ul>'
  ]
];

// Render the second accordion
renderAccordion($accordionItems2, 'second-');
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
