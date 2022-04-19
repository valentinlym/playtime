<?php
$title = "home";
$css = "";
require '../components/head.php';
?>

<body>
    <header class="fixed n900">
        <img src="../../src/img/logo.svg" alt="logo de play time">
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
            <div class="slider">
                <div class="slider__container">
                    <img src="../../src/img/cover_3.jpg" class="cover">
                    <img src="../../src/img/cover_4.jpg"  class="cover">
                    <img src="../../src/img/cover_1.jpg"  class="cover">
                    <img src="../../src/img/cover_2.jpg"  class="cover">
                    <img src="../../src/img/cover_3.jpg"  class="cover">
                    <img src="../../src/img/cover_4.jpg"  class="cover">
                    <img src="../../src/img/cover_1.jpg"  class="cover">
                    <img src="../../src/img/cover_2.jpg"  class="cover">
                    <img src="../../src/img/cover_3.jpg"  class="cover">
                    <img src="../../src/img/cover_4.jpg"  class="cover">
                </div>
            </div>
        </div>
        <div class="stats">
            <div class="stat">
                <div class="icon"></div>
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
            </div>
            <div class="stat icon--margin">
                <div class="icon"></div>
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
            </div>
            <div class="stat">
                <div class="icon"></div>
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="faq">

            <div class="faq-container">

                <h2 class="title title-4xl text-p400">FAQs</h2>
                <div class="questions">

                    <details>
                        <summary>Peut-on acheter des jeux sur <i>Play Time</i> ?</summary>
                        <p>Non, aucun achat n'est réalisable sur notre site. Néanmoins un accés rapide
                            aux différents store est présent pour chaque jeu.</p>
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
            <a href="#">Projet Univesitaire</a>
        </div>
    </footer>
</body>
</html>