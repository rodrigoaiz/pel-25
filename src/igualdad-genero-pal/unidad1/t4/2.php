<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ParaSaber.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Definición de la cultura de la igualdad y su aplicación</h2>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-2">
            <?php
            renderImage('iga5-img2.webp');
            ?>
        </div>
        <div class="col-span-3">
            <p>La <strong>cultura de la igualdad</strong> es un fundamento esencial para la convivencia social, porque promueve el respeto, la justicia, el acceso a oportunidades educativas, laborales y sociales para lograr el desarrollo personal de mujeres, identidades diverso-genéricas y varones. Se logra por medio de la eliminación de prejuicios y obstáculos sociales que impiden a las personas conducirse con libertad y autonomía. </p>
        </div>
    </div>

    <p>Para conocer más acerca de la cultura de la igualdad te invitamos a revisar la siguiente infografía:</p>
    <div class="w-2xl mx-auto">
        <?php
        renderImage('u1t5-infografia-cultura-de-la-igualdad-junio.webp');
        ?>
    </div>

    <?php ob_start(); ?>
    <p>Complementa tu comprensión acerca de la cultura de la igualdad escuchando el siguiente podcast:</p>
    <p class="font-semibold mt-2">Título: La cultura de la igualdad</p>
    <p class="font-semibold">Autora: Mtra. Jessica Fernanda Díaz Lara</p>
    <div class="mt-4">
        <audio controls class="w-full max-w-md mx-auto mt-2">
            <source src="../../assets/audio/cultura-de-la-igualdad.m4a" type="audio/mp4">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>
    <?php
    $SaberContent = ob_get_clean();
    renderSaberContent($SaberContent, "Recomendación");
    ?>

    <p>Ahora que comprendes la definición de la cultura de la igualdad es necesario que conozcas su normativa legal y las necesidades de su aplicación.</p>
    <p>En el artículo 4º de la Constitución Política de los Estados Unidos Mexicanos se establece que: <em>"La mujer y el hombre son iguales ante la ley. Ésta protegerá la organización y el desarrollo de las familias. El Estado garantizará el goce y ejercicio del derecho a la igualdad sustantiva de las mujeres"</em> (Constitución Política de México, 2026, p.12).</p>
    <p>En nuestro país la igualdad se garantiza como un derecho para las personas, busca el mismo trato y oportunidades de desarrollo sin distinción de género, lamentablemente las creencias y antivalores que se comparten en la formación informal deforman este principio a conveniencia. La discriminación está presente en las formas de socialización, ésta daña la dignidad de infantes, jóvenes, adultos, personas en senectud y comunidades que se desarrollan en el territorio mexicano e incluso fuera de él.</p>
    <p>Todas las personas mexicanas y las que llegan a nuestro país en búsqueda de protección legal tienen derecho a no ser discriminadas, la Ley Federal para Prevenir y Eliminar la Discriminación en México explica que la discriminación es: <em>"toda distinción, exclusión o restricción que, basada en el origen étnico o nacional, sexo, edad, discapacidad, condición social o económica, condiciones de salud, embarazo, lengua, religión, opiniones, preferencias sexuales, estado civil o cualquier otra, tenga por efecto impedir o anular el reconocimiento o ejercicio de los derechos y la igualdad real de oportunidades de las personas"</em> (INMUJERES, 2007, p.52).</p>
    <p>La discriminación es una de las principales barreras que impiden configurar una cultura de la igualdad, por ello se debe evitar y prohibir la discriminación de los tipos:</p>
    <ul class="ul-disc">
        <li><strong>Directa:</strong> recibir un trato desfavorable.</li>
        <li><strong>Indirecta:</strong> aplicar leyes o desarrollar prácticas que inferioricen o vulneren a las personas a partir de normativas instituidas en el país.</li>
        <li><strong>Sistémica:</strong> actuar a través de creencias arraigadas para segregar o separar a alguien por etnia, religión o por pertenecer a un grupo minoritario.</li>
    </ul>
    <p>Actualmente en nuestro país la discriminación es un delito y es sancionada por el artículo 206 del Código Penal de la Ciudad de México, por medio de esta acción se busca respetar y proteger a las personas para lograr la igualdad y evitar ser excluidas.</p>
    <p>En México se han comenzado a crear acciones que castigan actos que impiden la formación de una cultura de la igualdad, lo que implica el respeto a la individualidad, pero también la obligación por un trato semejante para todas las personas. Por tanto, la cultura de la igualdad es un enfoque que vincula políticas inclusivas y de sensibilización para crear ambientes justos, equitativos y plenos con la intención de que todas las personas se desarrollen plenamente.</p>
    <p>Además, la cultura de la igualdad promueve la aplicación de la perspectiva de género para detectar desigualdades, contrarrestarlas por medio del ejercicio de los derechos humanos, así como busca incluir identidades diversas, apoyar a la autonomía de las mujeres e impedir la violencia.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('iga3-img01-lentes.webp', 'Gafas moradas para detectar desigualdades de género | Basada en el cuento: Al fin iguales de la autora Enriqueta Navagómez');
        ?>
    </div>
    <p class="text-center font-semibold border-l-4 bg-violet-200 pl-4 py-2 bg-violet-200 rounded-r-md">La cultura de la igualdad es un factor que influye para que las personas se sientan plenas y valiosas, porque evita que se conciban desiguales a otras.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>