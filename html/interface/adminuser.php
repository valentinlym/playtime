<?php
$title = "user";
$css = "app";
require '../components/head.php';
?>

<body class="n900">

    <header class="fb-sb n900">
        <h1 class="title-4xl text-y100">Admin • User</H1>
    </header>

    <nav class="mobile fb fb-sa">
        <a class="home active" href="apphome.html">
            <img src="../src/icons/home.svg" alt="home icon">
        </a>
        <a href="appresearch.html">
            <img src="../src/icons/research.svg" alt="esearch icon">
        </a>
        <a href="appuser.html">
            <img src="../src/icons/act-user.svg" alt="user icon">
        </a>
    </nav>

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
                <p>Nombre de jeux terminé</p>
            </div>
        </div>

        <div class="settings">
            <h2>Paramètres</h2>
            <span class="lab g200 text-g600">User</span>
            <span class="lab n200 text-n600">Admin</span>
            <form class="fb fb-dc" action="user-settings.php" method="POST">
                <!-- TODO: avatar select -->
                <input type="text" name="pseudo" placeholder="{old-pseudo}" id="pseudo">
                <input type="email" name="email" placeholder="{old-email}" id="email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+">
                <input type="password" name="pwd" id="pwd" placeholder="Nouveau Mot de passe" id="pwd1">
                <input type="password" name="pwdC" id="pwdC" placeholder="Mot de passe (confirmation)" id="pwd2">
                <div class="fb fb-sb fb-cross">
                    <a href="#" class="btn btn__linkdanger"> Supprimer</a>
                    <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>