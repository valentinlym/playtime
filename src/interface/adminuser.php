<?php
$title = "admin • utilisateur";
$css = "appuser";
$type = "admin";
require '../components/head.php';
require_once '../interface/main.php';

?>

<body class="n900">
    <?php require '../components/header.php';
    echo banner();
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

        <div class="settings">
            <h2>Paramètres</h2>
            <span class="lab g200 text-g600">User</span>
            <span class="lab n200 text-n600">Admin</span>
            <form class="fb fb-dc" action="user-settings.php?type=admin" method="POST">
                <input type="text" name="pseudo" placeholder="{old-pseudo}" id="pseudo">
                <input type="password" name="pwd" id="pwd" placeholder="Nouveau Mot de passe" id="pwd1">
                <input type="password" name="pwdC" id="pwdC" placeholder="Mot de passe (confirmation)" id="pwd2">
                <div class="fb fb-sb fb-cross">
                    <a href="#" class="btn btn__linkdanger"> Supprimer</a>
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