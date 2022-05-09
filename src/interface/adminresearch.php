<?php
$title = "admin • recherche";
$css = "adminresearch";
$type = "admin";
require '../components/head.php';
require_once '../interface/main.php';

$rUsers = $link->query("SELECT iduser, email FROM users ORDER BY email ASC");
$rGames = $link->query("SELECT idgame, title FROM games ORDER BY title ASC");

$nb_result = $rUsers->num_rows + $rGames->num_rows;
?>

<body>
    <?php
    require '../components/header.php';
    echo banner();
    ?>
    <div class="main">
        <!--  
            <input type="search" placeholder="Recherche dans admin"> -->
        <p class="text-xs text-n600 lab n200 banner">Il est recommandé d'utiliser un écran plus grand pour afficher plus d'éléments.</p>
        
        <div class="result fb fb-cross">
            <h2 class="title title-2xl">Résultat</h2>
            <span class="lab n200 text-n600"><?= $nb_result ?></span>
        </div>
        
        <div class="table">
            <div class="theader trow">
                <p class="tname">Nom/Email</p>
                <p class="tid">Identifiant</p>
                <p class="ttype">Type</p>
            </div>
            <div class="tbody">
                <?php 
                if($rUsers->num_rows>0){
                    while (list($id, $email) = $rUsers->fetch_row()) {
                        echo <<<HTML
                        <a href="adminuser.php?email=$email">
                            <div class="trow fb-cross">
                                <p class="tname">$email</p>
                                <p class="tid">$id</p>
                                <span class="ttype">User</span>
                            </div>
                        </a>
                HTML;
                    }
                }
                ?>
                <?php
                    if($rGames->num_rows>0){
                        while (list($id, $title) = $rGames->fetch_row()) {
                            echo <<<HTML
                            <a href="admingame.php?id=$id">
                                <div class="trow fb-cross">
                                    <p class="tname">$title</p>
                                    <p class="tid">$id</p>
                                    <span class="ttype">Game</span>
                                </div>
                            </a>
                            HTML;
                        }
                    }
                ?>
                
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