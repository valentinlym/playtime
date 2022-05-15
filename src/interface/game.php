<?php
$title = "jeu";
$css = "game";
$type = "app";
require '../components/head.php';
require_once '../interface/main.php';

if(isset($_GET['id']) && isset($_GET['path'])){
   $data = getGame($link,$_GET['id']);
   $path = $_GET['path'];
} else {
    $link->close();
    // Redirection
    header("Location: ../interface/404.php");
    die();
}
$_SESSION['data-status'] = $data['status'];
?>

<body class="n900">
    <header class="fb-sb n900">
        <h1 class="title-4xl text-n50"><?= ucfirst($title) ?></H1>
        <nav class="desktop">
            <a <?php if ($path == "accueil") {
                    echo "class='active'";
                } else {
                    echo "";
                } ?> href="../interface/apphome.php">Accueil</a>
            <a <?php if ($path == "recherche") {
                    echo "class='active'";
                } else {
                    echo "";
                } ?> href="../interface/appresearch.php">Recherche</a>
            <a <?php if ($path == "utilisateur") {
                    echo "class='active'";
                } else {
                    echo "";
                } ?> href="../interface/appuser.php">Utilisateur</a>
        </nav>
    </header>

    <nav class="mobile fb fb-sa">
        <a href="apphome.php">
            <img src="../../assets/icons/<?php if ($path == "accueil") {
                                                echo "act-";
                                            } else {
                                                echo "";
                                            } ?>home.svg" alt="home icon">
        </a>
        <a href="appresearch.php">
            <img src="../../assets/icons/<?php if ($path == "recherche") {
                                                echo "act-";
                                            } else {
                                                echo "";
                                            } ?>research.svg" alt="esearch icon">
        </a>
        <a href="appuser.php">
            <img src="../../assets/icons/<?php if ($path == "utilisateur") {
                                                echo "act-";
                                            } else {
                                                echo "";
                                            } ?>user.svg" alt="user icon">
        </a>
    </nav>

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
            <div class="gcta">
                <div class="gstatus <?= ($data['status']=="vue")?"active":"" ?>">
                    <a href="../scripts/status.php?status=vue&path=<?=$path?>&id=<?=$data['idgame']?>">
                        <div class="gstatus_content">
                            <img src="../../assets/icons/eye-open.svg" alt="eye open icon">
                            <span class="gstatus-vue text-sm text-p500">En vue</span>
                        </div>
                    </a>
                </div>
                <div class="gstatus <?= ($data['status']=="cours")?"active":"" ?>">
                    <a href="../scripts/status.php?status=cours&path=<?=$path?>&id=<?=$data['idgame']?>">
                        <div class="gstatus_content">
                            <img src="../../assets/icons/rocket.svg" alt="rocket icon">
                            <span class="text-sm text-p500">En cours</span>
                        </div>
                    </a>
                </div>
                <div class="gstatus <?= ($data['status']=="termine")?"active":"" ?>">
                    <a href="../scripts/status.php?status=termine&path=<?=$path?>&id=<?=$data['idgame']?>">
                        <div class="gstatus_content">
                            <img src="../../assets/icons/done.svg" alt="rocket icon">
                            <span class="text-sm text-p500">Terminer</span>
                        </div>
                    </a>
                </div>
            </div>
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
    </div>
</body>

</html>