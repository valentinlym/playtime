<?php
$title = "accueil";
$css = "apphome";
$type = "app";
require '../components/head.php';
require_once '../interface/main.php';
?>

<body class="n900">
    <?php
    require '../components/header.php'
    ?>   
    <div class="main n50">
        <?= banner() ?>
        <div class="slider">
            <h3>Aventure</h3>
            <div class="slider__container">
                <?php
                $r= $link->query("SELECT idgame, title FROM games INNER JOIN games_details ON idgame=fk_idgame WHERE fk_categorie='aventure'");
                if($r->num_rows>0){
                    while(list($id,$title) = $r->fetch_row()){
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=accueil&id=$id"><img src="$path" alt="$title" title="$title" class="cover"></a>
                        HTML;
                    }
                }
                ?>
            </div>
        </div>
        <div class="slider">
            <h3>Les indé-tronables</h3>
            <div class="slider__container">
            <?php
                $r= $link->query("SELECT idgame, title FROM games INNER JOIN games_details ON idgame=fk_idgame WHERE fk_categorie='inde'");
                if($r->num_rows>0){
                    while(list($id,$title) = $r->fetch_row()){
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=accueil&id=$id"><img src="$path" alt="$title" title="$title" class="cover"></a>
                        HTML;
                    }
                }
                ?>
            </div>
        </div>
        <div class="slider">
            <h3>Action</h3>
            <div class="slider__container">
            <?php
                $r= $link->query("SELECT idgame, title FROM games INNER JOIN games_details ON idgame=fk_idgame WHERE fk_categorie='action'");
                if($r->num_rows>0){
                    while(list($id,$title) = $r->fetch_row()){
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=accueil&id=$id"><img src="$path" alt="$title" title="$title" class="cover"></a>
                        HTML;
                    }
                }
                ?>
            </div>
        </div>
        <div class="slider">
            <h3>Simulation</h3>
            <div class="slider__container">
            <?php
                $r= $link->query("SELECT idgame, title FROM games INNER JOIN games_details ON idgame=fk_idgame WHERE fk_categorie='simulation'");
                if($r->num_rows>0){
                    while(list($id,$title) = $r->fetch_row()){
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=accueil&id=$id"><img src="$path" alt="$title" title="$title" class="cover"></a>
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