<?php
$title = "accueil";
$css = "apphome";
require '../components/head.php';
session_start();
function banner()
{   
    $result = "";
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        $error = $_SESSION['error'];
        $result = <<<HTML
        <div class="banner-box">
            <div class="banner banner-danger">
                <h2 class="title-lg maj text-r600">Erreur</h2>
                <p class="text-sm text-r600">$error</p>
            </div>
        </div>
HTML;
    } else if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
        $success = $_SESSION['success'];
        $result = <<<HTML
        <div class="banner-box">
            <div class="banner banner-success">
                <h2 class="title-lg maj text-g600">Succès</h2>
                <p class="text-sm text-g600">$success</p>
            </div>
        </div>
HTML;
    }
    unset($_SESSION['error'],$_SESSION['success']);
    return $result;
}


?>

<body class="n900">
    <?php
    require '../components/header.php'
    ?>   
    <div class="main n50">
        <?= banner() ?>
        <div class="slider">
            <h3>Title slider</h3>
            <div class="slider__container">
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </div>
        <div class="slider">
            <h3>Title slider</h3>
            <div class="slider__container">
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </div>
        <div class="slider">
            <h3>Title slider</h3>
            <div class="slider__container">
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </div>
        <div class="slider">
            <h3>Title slider</h3>
            <div class="slider__container">
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </div>
        <div class="slider">
            <h3>Title slider</h3>
            <div class="slider__container">
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
                <a href="game.php?path=accueil"><img src="../../assets/img/cover.svg" alt="" class="cover"></a>
            </div>
        </div>
    </div>

    <script>
        let banner = document.querySelector('.banner-box');
        banner.addEventListener("click", function(){
            banner.style.display = 'none';
        });
    </script>
</body>

</html>