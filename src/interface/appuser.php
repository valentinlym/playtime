<?php
$title = "utilisateur";
$css = "appuser";
require '../components/head.php';
?>

<body class="n900">

    <?php
    require '../components/header.php'
    ?>

    <div class="main n50">
        <div class="uheader fb fb-cross">
            <div class="avatar n300">
            </div>
            <div class="info fb fb-dc">
                <p class="text-2xl bold">Link</p>
                <p class="text-lg text-n400">8080089</p>
            </div>
        </div>
        <div class="stats fb fb-sb">
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">8</span>
                <p>Nombre de jeux en vue</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">8</span>
                <p>Nombre de jeux en cours</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600">8</span>
                <p>Nombre de jeux terminés</p>
            </div>
        </div>

        <details>
            <summary class="text-2xl">En vue</summary>
            <div class="slider__container">
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </details>
        <hr>
        <details>
            <summary class="text-2xl">En cours</summary>
            <div class="slider__container">
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </details>
        <hr>
        <details>
            <summary class="text-2xl">Terminés</summary>
            <div class="slider__container">
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=utilisateur"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </details>
        <hr>
        <div class="settings">
            <h2>Paramètres</h2>
            <form class="fb fb-dc" action="user-settings.php" method="POST">
                <!-- TODO: avatar select -->
                <input type="text" name="pseudo" placeholder="{old-pseudo}" id="pseudo">
                <input type="email" name="email" placeholder="{old-email}" id="email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+">
                <input type="password" name="pwd" id="pwd" placeholder="Nouveau Mot de passe" id="pwd1">
                <input type="password" name="pwdC" id="pwdC" placeholder="Mot de passe (confirmation)" id="pwd2">
                <hr>
                <input required type="password" name="pwdC" id="pwdC" placeholder="Mot de passe (actuel)" id="pwd2">
                <p class="text-xs text-n400">Obligatoire.</p>
                <div class="fb fb-sb fb-cross">
                    <a href="#" class="btn btn__linkdanger"> Supprimer</a>
                    <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>