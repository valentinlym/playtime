<?php
$title = "admin • recherche";
$css = "adminresearch";
$type = "admin";
require '../components/head.php';
require_once '../interface/main.php';

?>

<body>
    <?php
    require '../components/header.php';
    echo banner();
    ?>
    <div class="main">
        <input type="search" placeholder="Recherche dans admin">
        <p class="text-xs text-n600 lab n200 banner">Il est recommandé d'utiliser un écran plus grand pour afficher plus d'éléments.</p>
        
        <div class="result fb fb-cross">
            <h2 class="title title-2xl">Resultat</h2>
            <span class="lab n200 text-n600">3</span>
        </div>
        
        <div class="table">
            <div class="theader trow">
                <p class="tname">Nom/Email</p>
                <p class="tid">Identifiant</p>
                <p class="ttype">Type</p>
            </div>
            <div class="tbody">
                <a href="adminuser.php">
                    <div class="trow fb-cross">
                        <p class="tname">joe.deo@exemple.com</p>
                        <p class="tid">87</p>
                        <span class="ttype">User</span>
                    </div>
                </a>
                <a href="admingame.php">
                    <div class="trow fb-cross">
                        <p class="tname">The legend of zelda breath of the wild</p>
                        <p class="tid">892</p>
                        <span class="ttype">Game</span>
                    </div>
                </a>
                <a href="#">
                    <div class="trow fb-coss">
                        <p class="tname">{Nom}</p>
                        <p class="tid">{Identifiant}</p>
                        <span class="ttype">Type</span>
                    </div>
                </a>
            </div>
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
