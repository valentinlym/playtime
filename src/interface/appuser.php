<?php
$title = "utilisateur";
$css = "appuser";
$type = "app";
require '../components/head.php';
require_once '../interface/main.php';

// En vue
$gVue = $link->query("SELECT idgame, title FROM status INNER JOIN games ON fk_idgame=idgame WHERE typestatus='vue' AND fk_iduser='".$_SESSION['iduser']."'");
// En cours
$gCours = $link->query("SELECT idgame, title FROM status INNER JOIN games ON fk_idgame=idgame WHERE typestatus='cours' AND fk_iduser='".$_SESSION['iduser']."'");
// Terminé
$gTermie = $link->query("SELECT idgame, title FROM status INNER JOIN games ON fk_idgame=idgame WHERE typestatus='termine' AND fk_iduser='".$_SESSION['iduser']."'");

?>

<body class="n900">

    <?php
    require '../components/header.php';?>

    <div class="main n50">
        <?= banner() ?>
        <div class="uheader fb fb-cross">
            <div class="avatar n300 <?= $_SESSION['avatar'] ?> ">
            </div>
            <div class="info fb fb-dc">
                <p class="text-2xl bold cap"><?= htmlentities($_SESSION['pseudo']) ?></p>
                <p class="text-lg text-n400"><?= htmlentities($_SESSION['iduser']) ?></p>
            </div>
        </div>
        <div class="stats fb fb-sa">
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">
                <?= getCount($link,$_SESSION['iduser'],'vue') ?>
                </span>
                <p>Nombre de jeux en vue</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">
                    <?= getCount($link,$_SESSION['iduser'],"cours") ?>
                </span>
                <p>Nombre de jeux en cours</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">
                <?= getCount($link,$_SESSION['iduser'],"termine") ?>
                </span>
                <p>Nombre de jeux terminés</p>
            </div>
        </div>

        <details>
            <summary class="text-2xl">En vue</summary>
            <div class="slider__container">
            <?php
                if($gVue->num_rows>0){
                    while (list($idgame, $title) = $gVue->fetch_row()) {
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=utilisateur&id=$idgame"><img src="$path" alt="$title" class="cover"></a>
                        HTML;
                    }
                }
            ?>
                
            </div>
        </details>
        <hr>
        <details>
            <summary class="text-2xl">En cours</summary>
            <div class="slider__container">
            <?php
                if($gCours->num_rows>0){
                    while (list($idgame, $title) = $gCours->fetch_row()) {
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=utilisateur&id=$idgame"><img src="$path" alt="$title" class="cover"></a>
                        HTML;
                    }
                }
            ?>
            </div>
        </details>
        <hr>
        <details>
            <summary class="text-2xl">Terminés</summary>
            <div class="slider__container">
            <?php
                if($gTermie->num_rows>0){
                    while (list($idgame, $title) = $gTermie->fetch_row()) {
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=utilisateur&id=$idgame"><img src="$path" alt="$title" class="cover"></a>
                        HTML;
                    }
                }
            ?>
            </div>
        </details>
        <hr>
        <div class="settings">
            <h2>Paramètres</h2>
            <form class="fb fb-dc" action="../scripts/user-settings.php?type=app" method="POST">
                <input type="text" name="pseudo" placeholder="<?= htmlentities($_SESSION['pseudo']) ?>" id="pseudo">
                <p class="text-xs text-n400">TIPS: Les "-" sont remplacer par des espaces.</p>
                <input type="password" name="pwd1" placeholder="Nouveau mot de passe">
                <input type="password" name="pwd2" placeholder="Mot de passe (confirmation)">
                <hr>
                <input required type="password" name="pwd" placeholder="Mot de passe (actuel)">
                <p class="text-xs text-n400">Obligatoire.</p>
                <div class="fb fb-sb fb-cross">
                    <div>
                        <a href="../scripts/delete-user.php" class="btn btn__linkdanger" <?= ($_SESSION['iduser']==1)?'style="display: none;"':"" ?>  >Supprimer</a>
                        <a href="../scripts/logout.php" class="btn btn__linkdanger">Déconexion</a>
                    </div>
                    <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let banner = document.querySelector('.banner-box');
        if(banner != null){
            banner.addEventListener("click", function(){
                banner.style.display = 'none';
            });
        }
    </script>
</body>
</html>