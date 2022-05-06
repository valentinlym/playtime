<?php
$title = "login-register";
$css = "login";
$type = "global";
require '../components/head.php';
require_once '../interface/main.php';

// L'utilisateur est-il déja connecter ?
if (isset($_SESSION['admin'])) {
    header("Location: ../interface/apphome.php");
	die();
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
            <form action="../scripts/login.php" method="POST">
                <input required type="email"  name="email" placeholder="<?= email("login") ?>" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" id="email-login" onchange="verify()">
                <input required type="password" name="pwd" id="pwd-login" placeholder="Mot de passe" onchange="verify()">
                <p class="text text-base xlmt">Mot de passe oublié ? <a class="text-p500 underline" href="mailto:support@playtime.fr">Contactez-nous</a>
                </p>
                <button type="submit" class="btn btn__secondary sxmt" id="btn-login">Se connecter</button>
            </form>
        </div>
    </div>
    <pre>
     </pre>
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