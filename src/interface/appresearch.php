<?php
$title = "recherche";
$css = "appresearch";
$type = "app";
require '../components/head.php';
require_once '../interface/main.php';
$rGames = $link->query("SELECT idgame, title FROM games ORDER BY title ASC");
?>

<body class="n900">

    <?php
    require '../components/header.php';
    echo banner();
    ?>

    <div class="main n50">
        <!-- 
             <input type="search" id="search" placeholder="Recherche"> -->
        <div class="result fb fb-cross">
            <h2 class="title title-2xl">Résultat</h2>
            <span class="lab n200 text-n600"><?= $rGames->num_rows ?></span>
        </div>
        <div class="result-game">
            <?php
                if($rGames->num_rows>0){
                    while(list($id, $title) = $rGames->fetch_row()) {
                        $path = getPathImg($title);
                        echo <<<HTML
                        <a href="game.php?path=recherche&id=$id"><img src="$path" alt="$title" title="$title" width="100" height="150" class="cover"></a>
                        HTML;
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>