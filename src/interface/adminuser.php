<?php
$title = "admin • utilisateur";
$css = "appuser";
$type = "admin";
require '../components/head.php';
require_once '../interface/main.php';
if(isset($_GET['email'])){
    $data = getUser($link,$_GET['email']);
    $_SESSION['data-email'] = $_GET['email'];
} else {
    $data = getUser($link,$_SESSION['data-email']);
}
?>

<body class="n900">
    <?php require '../components/header.php'; ?>
    <div class="main n50">
        <?= banner() ?>
        <div class="uheader fb fb-cross">
            <div class="avatar n300  <?= $data['avatar'] ?>">
            </div>
            <div class="info fb fb-dc">
                <p class="text-2xl bold"><?= $data['pseudo'] ?></p>
                <p class="text-lg text-n400"><?= $data['iduser'] ?></p>
            </div>
        </div>
        <div class="stats fb fb-sb">
            <div class="stat">
                <span class="text-2xl lab p200 text-p600"><?= getCount($link, $data['iduser'], 'vue') ?></span>
                <p>Nombre de jeux en vue</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600"><?= getCount($link, $data['iduser'], 'cours') ?></span>
                <p>Nombre de jeux en cours</p>
            </div>
            <div class="stat">
                <span class="text-2xl lab p200 text-p600"><?= getCount($link, $data['iduser'], 'termie') ?></span>
                <p>Nombre de jeux terminés</p>
            </div>
        </div>

        <div class="settings">
            <h2>Paramètres</h2>
            <form class="fb fb-dc" action="../scripts/user-settings.php?type=admin" method="POST">
                <div <?= ($data['iduser'] == 1) ? 'style="display: none;"' : "" ?>>
                    <input <?= ($data['admin'] == 0) ? "checked":"" ?> 
                    type="radio" id="user" name="admin" value="0">
                    <label for="html">User</label>
                    <input <?= ($data['admin'] == 1) ? "checked" : "" ?> type="radio" id="css" name="admin" value="1">
                    <label for="css">Admin</label>
                </div>
                <input type="text" name="pseudo" placeholder="<?= $data['pseudo'] ?>" id="pseudo">
                <p class="text-xs text-n400">TIPS: Les "-" sont remplacer par des espaces.</p>
                <input type="password" name="pwd1" id="pwd1" placeholder="Nouveau Mot de passe">
                <input type="password" name="pwd2" placeholder="Mot de passe (confirmation)">
                <hr>
                <input required type="password" name="pwd" placeholder="Mot de passe (actuel)">
                <p class="text-xs text-n400">Obligatoire.</p>
                <div class="fb fb-sb fb-cross">
                    <div>
                        <a href="../scripts/delete-user.php" class="btn btn__linkdanger" <?= ($data['iduser'] == 1) ? 'style="display: none;"' : "" ?>>Supprimer</a>
                        <a href="../scripts/logout.php" class="btn btn__linkdanger">Déconexion</a>
                    </div>
                    <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let banner = document.querySelector('.banner-box');
        if (banner != null) {
            banner.addEventListener("click", function() {
                banner.style.display = 'none';
            });
        }
    </script>
</body>

</html>