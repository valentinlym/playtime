<?php
$title = "jeu";
$css = "game";
(isset($_GET['path'])) ? $path = $_GET['path'] : $path = "";
require '../components/head.php';
// TODO: Créer une requete sql avec le non du jeu
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
                <img src="" alt="">
            </div>
            <p class="gtitle title-3xl extra-bold cap">Title</p>
        </div>
        <div class="gnav">
            <div class="gtag ">
                <span class="lab text-sm text-n600 n200">Switch</span>
                <span class="lab text-sm text-n600 n200">Wii U</span>
            </div>
            <div class="gcta">
                <div class="gstatus active">
                    <a href="?status=0">
                        <div class="gstatus_content">
                            <img src="../../assets/icons/eye-open.svg" alt="eye open icon">
                            <span class="gstatus-vue text-sm text-p500">En vue</span>
                        </div>
                    </a>
                </div>
                <div class="gstatus">
                    <a href="?status=1">
                        <div class="gstatus_content">
                            <img src="../../assets/icons/rocket.svg" alt="rocket icon">
                            <span class="text-sm text-p500">En cours</span>
                        </div>
                    </a>
                </div>
                <div class="gstatus">
                    <a href="?status=3">
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
                    <p class="text-lg">Mars 2017</p>
                </div>
                <div class="dtag">
                    <p class="text-lg text-n400">Genre :</p>
                    <p class="text-lg">Action Aventure, Open-World</p>
                </div>
                <div class="dtag">
                    <p class="text-lg text-n400">Développement :</p>
                    <p class="text-lg">Nintendo</p>
                </div>
                <div class="dtag">
                    <p class="text-lg text-n400">Édition :</p>
                    <p class="text-lg">Nintendo</p>
                </div>
            </div>

            <div class="box">

                <div class="description">
                    <h2 class="title-2xl">Description</h2>
                    <hr>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa
                        qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="langues">
                    <h2>Langues</h2>
                    <hr>
                    <div class="ltable">
                        <div class="lheader lrow">
                            <br>
                            <p class="text">Text</p>
                            <p class="audio">Audio</p>
                        </div>
                        <div class="tbody">

                            <div class="lrow">
                                <p class="langue">Français</p>
                                <div class="text">
                                    <img src="../../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../../assets/icons/done--dark.svg" alt="done icon">
                                </div>
                            </div>
                            <div class="lrow">
                                <p class="langue">Anglais</p>
                                <div class="text">
                                    <img src="../../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../../assets/icons/close.svg" alt="done icon">
                                </div>
                            </div>
                            <div class="lrow">
                                <p class="langue">Espagnol</p>
                                <div class="text">
                                    <img src="../../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../../assets/icons/close.svg" alt="done icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>