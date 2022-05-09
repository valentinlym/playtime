<?php
$title = "admin • jeu";
$css = "game";
$type = "admin";
require '../components/head.php';
require_once '../interface/main.php';
if(isset($_GET['id'])){
    $data = getGame($link,$_GET['id']);
} else {
    header("Location: ../interface/404.php");
    die();
}
?>

<body class="n900">
    <?php require '../components/header.php';
    echo banner();
    ?>
    <div class="main n50">
        <div class="ghead">
            <div class="cover n300">
                <img src="<?= getPathImg($data['title'])?>" width="100" height="150" alt="<?= $data['title']?>">
            </div>
            <p class="gtitle title-3xl extra-bold cap"><?= $data['title'] ?></p>
        </div>
        <div class="gnav">
        <div class="gtag ">
                <?php 
                foreach($data['categories'] as $categorie){

                    echo <<<HTML
                <span class="lab text-sm text-n600 n200">$categorie</span>
                HTML;
                }
                ?>
            </div>
            <br>
            <div class="gtag ">
                <?php 
                foreach($data['platforms'] as $platform){

                    echo <<<HTML
                <span class="lab text-sm text-y600 y200">$platform</span>
                HTML;
                }
                ?>
            </div>
            <br>
        </div>
        <div class="info">

            <div class="details">
                <h2 class="title-2xl">Détails</h2>
                <hr>
                <div class="dtag">
                    <p class="text-lg text-n400">Date de sortie :</p>
                    <p class="text-lg"><?= $data['date'] ?></p>
                </div>
                <div class="dtag">
                    <p class="text-lg text-n400">Développement :</p>
                    <p class="text-lg"><?= $data['developper'] ?></p>
                </div>
            </div>

            <div class="box">

                <div class="description">
                    <h2 class="title-2xl">Description</h2>
                    <hr>
                    <p class="text-sm"><?= $data['description'] ?></p>
                </div>
            </div>
        </div>
        <hr>
        <form class="fb fb-dc" action="game.php" method="POST">
            <h2>Paramètre</h2>
            <input type="text" name="title" placeholder="{old-title}">
            <input type="date" name="title">
            <select multiple name="category" id="gategory" size="4">
                <option value="aventure">Aventure</option>
                <option value="action">action</option>
                <option value="inde">Inde</option>
                <option value="MMORPG">MMORPG</option>
            </select>
            <select multiple name="developer" id="developer" size="2">
                <option value="nitendo">Nintendo</option>
                <option value="ubisoft">Ubisoft</option>
            </select>
            <select multiple name="edition" id="edition" size="2">
                <option value="nintendo">Nintendo</option>
                <option value="ubisoft">Ubisoft</option>
            </select>
            <textarea name="description" id="description" rows="4" maxlength="255" placeholder="Description">
               
            </textarea>
            <div class="text-lg">
                <input type="checkbox" id="newgame"><label class="newgame" for="newgame">Nouveau jeu</label>
            </div>
                <div class="fb fb-sb fb-cross">
                <a href="#" class="btn btn__linkdanger"> Supprimer</a>
                <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
            </div>
        </form>
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