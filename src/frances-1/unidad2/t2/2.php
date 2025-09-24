<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Nationalité</h2>
    <h3>Nacionalidad</h3>
    <p>Para practicar lo antes visto, vamos a hacer las siguientes actividades.</p>
    <?php ob_start(); ?>
    <p>Écris la terminaison correcte / Escribe el final correcto.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t2a9', "Nationalité", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Complète ce formulaire avec l’information correcte / Complete este formulario con la información correcta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t2a10', "Détails du passeport", $ActividadContent);
    ?>
    <p class="text-xl font-bold text-teal-600 mt-14">Para ir más lejos – Los idiomas</p>
    <p>Las <span class="underline decoration-pink-500/60 decoration-4 underline-offset-4">nacionalidades</span> (en másculino y singular) también te van a servir para decir los <span class="underline decoration-pink-500/60 decoration-4 underline-offset-4">idiomas</span>.</p>
    <p>Para decir que idioma o idiomas habla una persona, vas a usar el verbo <span class="font-bold italic">parler</span></p>
    <ul class="list-none text-center">
        <li class="text-xl italic">Je parle</li>
        <li class="text-xl italic">Tu parles</li>
        <li class="text-xl italic">Il, elle, on parle</li>
        <li class="text-xl italic">Nous parlons</li>
        <li class="text-xl italic">Vous parlez</li>
        <li class="text-xl italic">Ils, elles parlent</li>
    </ul>
    <p class="mt-6">Entonces, si quieres decir que tú hablas español y francés, vas a decir:</p>
    <p class="text-xl italic  text-center mt-6">Je parle espagnol et français.</p>
    <p>Si quieres indicar que solo hablas un poco de algún idioma, puedes utilizar <span class="font-bold italic">« un peu de »</span>, solo recuerda que la <span class="font-bold italic">« de »</span> se convierte en <span class="font-bold italic">« d' »</span> si la palabra que le sigue comienza por vocal:</p>
    <p class="text-xl italic  text-center mt-2">Je parle un peu de français et un peu d'anglais.</p>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>