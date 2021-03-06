<?php
function navAdmin($type, $css)
{
    if ($css == "desktop") {

        if ($_SESSION['admin']==1) {
            if ($type == "admin") {
                return <<<HTML
                <a class="active" href="adminresearch.php">Admin</a>
                HTML;
            } else {
                return <<<HTML
                <a href="adminresearch.php">Admin</a>
                HTML;
            }
        }
    } else {
        if ($_SESSION['admin']==1) {
            if ($type == "admin") {
                return <<<HTML
                <a href="adminresearch.php">
                <img src="../../assets/icons/act-admin.svg" alt="user icon">
                </a>
HTML;
            } else {
                return <<<HTML
                <a href="adminresearch.php">
                <img src="../../assets/icons/admin.svg" alt="user icon">
                </a>
HTML;
            }
        }
    }
}
?>

<header class="fb-sb n900">
    <h1 class="title-4xl text-n50"><?= ucfirst($title) ?></H1>
    <nav class="desktop">
        <a <?php if ($title == "accueil") {
                echo "class='active'";
            } else {
                echo "";
            } ?> href="../interface/apphome.php">Accueil</a>
        <a <?php if ($title == "recherche") {
                echo "class='active'";
            } else {
                echo "";
            } ?> href="../interface/appresearch.php">Recherche</a>
        <a <?php if ($title == "utilisateur") {
                echo "class='active'";
            } else {
                echo "";
            } ?> href="../interface/appuser.php">Utilisateur</a>
        <?= navAdmin($type, "desktop") ?>
    </nav>
</header>

<nav class="mobile fb fb-sa">
    <a href="apphome.php">
        <img src="../../assets/icons/<?php if ($title == "accueil") {
                                            echo "act-";
                                        } else {
                                            echo "";
                                        } ?>home.svg" alt="home icon">
    </a>
    <a href="appresearch.php">
        <img src="../../assets/icons/<?php if ($title == "recherche") {
                                            echo "act-";
                                        } else {
                                            echo "";
                                        } ?>research.svg" alt="esearch icon">
    </a>
    <a href="appuser.php">
        <img src="../../assets/icons/<?php if ($title == "utilisateur") {
                                            echo "act-";
                                        } else {
                                            echo "";
                                        } ?>user.svg" alt="user icon">
    </a>
    <?= navAdmin($type, "mobile") ?>
</nav>