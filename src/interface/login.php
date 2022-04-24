<?php
error_reporting(E_ALL);
session_start();
$title = "login";
$css = "";
require '../components/head.php';

// Connection à la BD
$link = new mysqli("localhost", "root", "Bk3dGftO)QiQIPj5", "playtime");
// Vérifier la connection à la BD
if ($link->connect_error) {
    die("Erreur de connection : " . $link->connect_error);
}

$sql = "SELECT * FROM users";
$result = $link->query($sql);

$link->close();
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
function email($type) {
    if ($type == "register") {
        if (isset($_SESSION['email-register']) && !empty($_SESSION['email-register']))
        {
            echo htmlentities($_SESSION['email-register']);
        } else {
            echo "email";
        }
    } else {
        if (isset($_SESSION['email-login']) && !empty($_SESSION['email-login']))
        {
            echo htmlentities($_SESSION['email-login']);
        } else {
            echo "email";
        }
    }
}
?>
<body>

    <header>
        <img src="../../assets/img/logo.svg" alt="logo de play time">
    </header>

    <?= banner() ?>

    <div class="container">
        <div class="register">
            <h2>S’inscrire</h2>
            <form action="../scripts/register.php" method="POST">
                <input required type="email" name="email" placeholder="<?= email("register") ?>" id="email-register" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" onchange="verify()">
                <input required type="password" name="pwd1" id="pwd1-register" placeholder="Mot de passe" onchange="verify()">
                <input required type="password" name="pwd2" placeholder="Mot de passe (confirmation)" id="pwd2-register" onchange="verify()">
                <button type="submit" class="btn btn__secondary" id="btn-register" onchange="verify()">S'inscrire</button>
            </form>
        </div>
        <div class="login">
            <h2>Se connecter</h2>
            <form action="../scripts/register.php" method="POST">
                <input required type="<?= email("login") ?>" placeholder="email"
                 pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" id="email-login" onchange="verify()">
                <input required type="password" name="password" id="pwd-login" placeholder="Mot de passe" onfocus="verify()">
                <p class="text text-base xlmt">Mot de passe oublié ? <a class="text-p500 underline" href="mailto:support@playtime.fr">Contactez-nous</a>
                </p>
                <button type="submit" class="btn btn__secondary sxmt" id="btn-login">Se connecter</button>
            </form>
        </div>
    </div>
     
    <script>
        const emailRegister = document.getElementById('email-register');
        const pwd1Register = document.getElementById('pwd1-register');
        const pwd2Register = document.getElementById('pwd2-register');
        const register = document.getElementById('btn-register');

        const emailLogin = document.getElementById('email-login');
        const pwdLogin = document.getElementById('pwd-login');
        const login = document.getElementById('btn-login');

        register.disabled = true;
        login.disabled = true;

        function verify() {

            if (emailRegister.checkValidity() && pwd1Register.checkValidity() && pwd2Register.checkValidity()) {
                register.disabled = false;
            } else {
                register.disabled = true;
            }

            if (emailLogin.checkValidity() && pwdLogin.checkValidity()) {
                login.disabled = false;
            } else {
                login.disabled = true;
            }
        }

        let banner = document.querySelector('.banner-box');
        banner.addEventListener("click", function(){
            banner.style.display = 'none';
        });
    </script>
</body>

</html>