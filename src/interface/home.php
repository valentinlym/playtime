<?php
$title = "home-page";
$css = "home";
require '../components/head.php';
session_start();
unset($_SESSION['email-register'], $_SESSION['email-login']);
?>

<body>
    <header class="fixed n900">
        <img src="../../assets/img/logo.svg" alt="logo de play time">
        <a class="btn btn__primary" href="login.php">Se connecter</a>
    </header>

    <div class="fmain">
        <div class="intro">

            <div class="intro_txt">
                <h1 class="title-4xl">
                    <span class="title-4xl text-p400">Le temps</span> est venu<br>de lister <span class="title-4xl text-p400">ses jeux.</span>
                </h1>
                <p class="text text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua.
                </p>
                <a class="btn btn__secondary" href="login.php">Commencer</a>
            </div>

        </div>
        <div class="illu">
            <div class="slider_auto">
                <div class="slider__auto">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <!-- Duclication -->
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                    <img src="../../assets/img/cover.svg" class="cover">
                </div>
            </div>
        </div>
        <div class="stats">
            <div class="stat">
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../../assets/icons/eye-open.svg" alt="eye open icon">
                        <span class="text-base text-p500">En vue</span>
                    </div>
                </div>
                <p>Ne perdez plus aucun jeu<br>qui vous fait de l'oeil</p>
            </div>
            <div class="stat icon--margin">
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../../assets/icons/rocket.svg" alt="rocket icon">
                        <span class="text-base text-p500">En cours</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
            </div>
            <div class="stat">
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../../assets/icons/done.svg" alt="rocket icon">
                        <span class="text-base text-p500">Terminer</span>
                    </div>
                </div>
                <p>N'oubliez jamais les jeux<br>qui vous ont marqué.</p>
            </div>
        </div>
        <div class="faq">

            <div class="faq-container">

                <h2 class="title title-4xl text-p400">FAQs</h2>
                <div class="questions">

                    <details>
                        <summary>Peut-on acheter des jeux sur <i>Play Time</i> ?</summary>
                        <p>Non, aucun achat n'est réalisable sur notre site.</p>
                    </details>
                    <hr>
                    <details>
                        <summary>Puis-je ajouter un jeu ?</summary>
                        <p>Nos utilisateurs ne peuvent pas ajouter eu même les jeux. Cependant, vous pouvez soumettre un ou plusieurs jeux non listés à notre catalogue. <a class="text-p500 underline" href="mailto:support@playtime.fr">Soumettre une recommandation</a></p>
                    </details>
                    <hr>
                    <details>
                        <summary>Question lorem ipsum dolor sit amet ?</summary>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum
                            in nesciunt culpa repudiandae id atque fugit, cumque soluta quam facilis officiis, quia
                            temporibus repellat dolore quis deserunt minus ipsa?</p>
                    </details>
                    <hr>
                    <details>
                        <summary>Question lorem ipsum dolor sit amet ?</summary>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum
                            in nesciunt culpa repudiandae id atque fugit, cumque soluta quam facilis officiis, quia
                            temporibus repellat dolore quis deserunt minus ipsa?</p>
                    </details>
                    <hr>
                    <details>
                        <summary>Question lorem ipsum dolor sit amet ?</summary>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum
                            in nesciunt culpa repudiandae id atque fugit, cumque soluta quam facilis officiis, quia
                            temporibus repellat dolore quis deserunt minus ipsa?</p>
                    </details>
                </div>
                <p class="text text-base ">
                    Vous avez encore des questions ? <a class="text-p500 underline" href="mailto:support@playtime.fr">Parlons-en</a>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-text">
            <p class="sora text-p400 text-base bold">Play Time</p>
            <a href="https://github.com/valentinlym/playtime" target="_bank">Projet Univesitaire</a>
        </div>
    </footer>
</body>

</html>