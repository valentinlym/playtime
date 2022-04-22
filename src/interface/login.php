<pre>
<?php
error_reporting(E_ALL);

$title = "login";
$css = "";
require '../components/head.php';
include '../class/Database.php';

$db = new Database();
print_r($db);
?>
</pre>
<body>

    <header>
        <img src="../../assets/img/logo.svg" alt="logo de play time">
    </header>

    <div class="container">
        <div class="register">
            <h2>S’inscrire</h2>
            <form action="/test.php" method="POST">
                <input required type="email" name="email" placeholder="email" id="email1" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" onchange="verify()">
                <input required type="password" name="pwd1" id="pwd1" placeholder="Mot de passe" onchange="verify()">
                <input required type="password" name="pwdc" id="pwdc" placeholder="Mot de passe (confirmation)" id="pwdc" onchange="verify()">
                <button type="submit" class="btn btn__secondary" id="btn1" onchange="verify()">S'inscrire</button>
            </form>
        </div>
        <div class="login">
            <h2>Se connecter</h2>
            <form action="login.php" method="POST">
                <input required type="email" placeholder="email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" id="email" onchange="verify()">
                <input required type="password" name="password" id="pwd" placeholder="Mot de passe" onchange="verify()">
                <p class="text text-base xlmt">Mot de passe oublié ? <a class="text-p500 underline" href="mailto:support@playtime.fr">Contactez-nous</a>
                </p>
                <button type="submit" class="btn btn__secondary sxmt" id="btn2">Se connecter</button>
            </form>
        </div>
    </div>

    <script>
        const email1 = document.getElementById('email1');
        const pwd1 = document.getElementById('pwd1');
        const pwdc = document.getElementById('pwdc');
        const register = document.getElementById('btn1');

        const email = document.getElementById('email');
        const pwd = document.getElementById('pwd');
        const login = document.getElementById('btn2');
        register.disabled = true;
        login.disabled = true;

        function verify() {

            if (email1.checkValidity() && pwd1.checkValidity() && pwdc.checkValidity()) {
                register.disabled = false;
            } else {
                register.disabled = true;
            }

            if (email.checkValidity() && pwd.checkValidity()) {
                login.disabled = false;
            } else {
                login.disabled = true;
            }
        }
    </script>
</body>

</html>