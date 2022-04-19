<?php
$title = "login";
$css = "";
require '../components/head.php';
?>

<body>

    <header>
        <img src="../../src/img/logo.svg" alt="logo de play time">
    </header>

    <div class="container">
        <div class="register">
            <h2>S’inscrire</h2>
            <form action="/test.php" method="POST">
                <input required onchange="verify()" type="email" name="email" placeholder="email" id="email1" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+">
                <input required onchange="verify()" type="password" name="pwd" id="pwd" placeholder="Mot de passe" id="pwd1">
                <input required onchange="verify()" type="password" name="pwdC" id="pwdC" placeholder="Mot de passe (confirmation)" id="pwd2">
                <button type="submit" class="btn btn__secondary" id="btn1">S'inscrire</button>
            </form>
        </div>
        <div class="login">
            <h2>Se connecter</h2>
            <form action="login.php" method="POST">
                <input required type="email" placeholder="email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" >
                <input required type="password" name="password" id="password" placeholder="Mot de passe">
                <p class="text text-base xlmt">Mot de passe oublié ? <a class="text-p500 underline" href="mailto:support@playtime.fr">Contactez-nous</a>
                </p>
                <button type="submit" class="btn btn__secondary sxmt" id="btn2">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>