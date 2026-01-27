<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>La personnalité</h2>
    <h3>La personalidad</h3>
    <p>Al describir o presentar a una persona, también es interesante poder decir cómo es su carácter. A continuación tienes un pequeño vocabulario que te puede ayudar a describir el carácter de la gente:</p>

    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde la vidéo et glisse les mots pour décrire le monsieur avant et après la rencontre avec la vieille dame. / Mira el vídeo y usa las palabras para describir al hombre antes y después de su encuentro con la anciana.</li>
    </ol>
    <div class="max-w-xl mx-auto bg-cyan-200/80 p-4">
        <?php
        renderVideoIframe('LM7rtFJcnG8', 'Le pouvoir des petits gestes du quotidien');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t9a16', "Le pouvoir des petits gestes du quotidien", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>À partir de la vidéo, décrit les personnages. Glisse les mots pour compléter les phrases. / A partir del video, describe a los personajes. Arrastra las palabras para completar las frases.</li>
    </ol>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-19', "Décrit les personnages", $ActividadContent);
    ?>
    <p class="mt-10">Si observas las frases anteriores, puedes notar que, para hacer una descripción del carácter de una persona, vamos a usar el verbo *être*.</p>
    <p>En seguida tienes una ficha de vocabulario para poder describir el carácter de una persona.</p>



    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-5 font-bold text-center bg-purple-500 text-white p-1">L'expression / le caractère | Avoir l'air… / Être…</div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-76-fatigue.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Fatigué / fatiguée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-77-triste.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Triste / triste</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-78-hereuse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Heureux / heureuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-79-fachee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Fâché / fâchée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-80-malhereuse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Malheureux / malheureuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-81-sarcastique.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Sarcastique / sarcastique</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-82-serieuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Sérieux / sérieuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-83-drole.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Drôle / drôle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-84-preocupee.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Préoccupé / préoccupée</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-85-confiante.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Confiant / confiante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-86-malade.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Malade / malade</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-87-mefiante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Méfiant / méfiante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-88-amoureuse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Amoureux / amoureuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-89-mechante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Méchant / méchante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a1p02-35-sportif.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Sportif / sportive</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06 91 extrovertie.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Extroverti / extrovertie</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06 92 introvertie.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Introverti / Introvertie</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06 93 reveuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Rêveur / rêveuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-94-genereuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Généreux / généreuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-95-gentile.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Gentil / gentille</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-96-cancaniere.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Cancanier / cancanière</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-97-amicale.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Amical / amicale</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-98-bizarre.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bizarre</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-99-travaiilereuse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Travailleur / travailleuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-100-egoiste.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Égoïste / égoïste</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-101-menteuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Menteur / menteuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-102-pretentieuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Frimeur / frimeuse<br>Prétentieux / prétentieuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-103-hypocrite.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Hypocrite</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-104-sincere.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Sincère / sincère</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-105-vaniteuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Vaniteux / vaniteuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-106-bavarde.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bavard / bavarde</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-107-intelligente.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Intelligent / intelligente</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-108-bette.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Sot / sotte<br>Bête / bête</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-109-patient.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Patient / patiente</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-110-impatient.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Impatient / impatiente</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-111-maladroit.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Maladroit / maladroite</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-112-souriante.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Souriant / souriante</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-113-espiegle.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Espiègle / espiègle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-114-sauvage.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Sauvage / sauvage</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-115-honnete.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Honnête</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-116-curieuse.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Curieux / curieuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-117-paresseux.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Paresseux / paresseuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-118-caline.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Câlin / câline</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-119-sympathique.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Sympathique</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-120-antipathique.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Antipathique</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-121-jalouse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Jaloux / jalouse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-122-fidele.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Fidèle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-123-infidele.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Infidèle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-124-tranquille.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Tranquille</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-125-nerveuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Nerveux / nerveuse</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-126-tmide.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Timide</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-127-indecise.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Indécis / indécise</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-128-decidee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Décidé / décidée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-129-aimable.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Aimable</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-130-inquiete.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Inquiet / inquiète</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-131-peureuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Peureux / peureuse<br>Lâche</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-131-peureuse.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Courageux / courageuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-132-stricte.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Strict / Stricte<br>Sévère / sévère</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-133-autoritaire.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Autoritaire</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-134-eveille.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Éveillé / éveillée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-135-rusee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Rusé / rusée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-136-mal-elevee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Mal élevé / mal élevée<br>Impoli / impolie</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-137-bien-elevee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bien élevé / bien élevée<br>Poli / polie</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-138-naive.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Naïf / naïve</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-139-bienveillante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Bienveillant / bienveillante</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-140-tendre.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Tendre</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-141-cruelle.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Cruel / cruelle</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-142-energique.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Énergique<br>Dynamique</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-143-pesimiste.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Pessimiste</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-144-optimiste.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Optimiste</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-145-reservee.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Réservé / réservée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-146-franche.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Franc / franche</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-147-independante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Indépendant / indépendante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-148-modeste.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Modeste</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-148-modeste.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Fier / fière</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-150-etourdie.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Étourdi / étourdie</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-151-tetue.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Têtu / têtue</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-152-sensible.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Sensible</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-153-enthousiaste.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Enthousiaste</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-154-stressee.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Stressé / stressée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-155-ennuyante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Ennuyant / ennuyante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-156-carree.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Inflexible<br>Carré / carrée</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-157-charmante.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Charmant / charmante</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-158-lourde.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Lourd / lourde</p>
        </div>
        <div class="bg-purple-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-159-flexible.webp');
            ?>
            <p class="text-purple-700 text-center leading-none">Souple<br>Flexible</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-160-froide.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Froid / froide</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-160-froide.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Chaleureux / chaleureuse</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-162-interesante.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Intéressant / Intéressante</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-163-agreable.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Agréable</p>
        </div>
        <div class="bg-cyan-500/30 px-4">
            <?php
            renderImage('fr1u3a2p06-164-collante.webp');
            ?>
            <p class="text-cyan-700 text-center leading-none">Collant / collante</p>
        </div>
    </div>

    <p class="mt-10">También puedes ver el siguiente video para practicar la pronunciación de algunos de los adjetivos del vocabulario:</p>

    <div class="max-w-xl mx-auto bg-orange-200/80 p-4">
        <?php
        renderVideoIframe('WXVuPAFnFkY', 'Le caractère/ la personnalité (Activité): " Quel est le masculin/ Quel est le féminin de..."');
        ?>
    </div>

    <?php ob_start(); ?>
    <p>Afin de pratiquer le vocabulaire pour faire une description de la personnalité, fais le suivant mots croisés. Fais attention aux masculins et aux féminins. / Para practicar el vocabulario para hacer una descripción de la personalidad, haz el siguiente crucigrama. Presta atención a los masculinos y femeninos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-19', "Description de la personnalité", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <p>Lis le texte et écris la terminaison correcte des adjectifs de personnalité. Attention aux accents. / Lee el texto y escribe la terminación correcta de los adjetivos de personalidad. Atención a los acentos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t9a19', "Adjectifs de personnalité", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
