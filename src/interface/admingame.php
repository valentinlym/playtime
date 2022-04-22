<?php
$title = "game";
$css = "app";
require '../components/head.php';
?>

<body class="n900">
    <header class="fb-sb n900">
        <h1 class="title-4xl text-y100">Admin • Game</H1>
    </header>

    <nav class="mobile fb fb-sa">
        <a class="home active" href="apphome.html">
            <img src="../assets/icons/act-home.svg" alt="home icon">
        </a>
        <a href="appresearch.html">
            <img src="../assets/icons/research.svg" alt="esearch icon">
        </a>
        <a href="appuser.html">
            <img src="../assets/icons/user.svg" alt="user icon">
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
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../assets/icons/eye-open.svg" alt="eye open icon">
                        <span class="text-sm text-p500">En vue</span>
                    </div>
                </div>
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../assets/icons/rocket.svg" alt="rocket icon">
                        <span class="text-sm text-p500">En cours</span>
                    </div>
                </div>
                <div class="gstatus">
                    <div class="gstatus_content">
                        <img src="../assets/icons/done.svg" alt="rocket icon">
                        <span class="text-sm text-p500">Terminer</span>
                    </div>
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
                                    <img src="../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../assets/icons/done--dark.svg" alt="done icon">
                                </div>
                            </div>
                            <div class="lrow">
                                <p class="langue">Anglais</p>
                                <div class="text">
                                    <img src="../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../assets/icons/close.svg" alt="done icon">
                                </div>
                            </div>
                            <div class="lrow">
                                <p class="langue">Espagnol</p>
                                <div class="text">
                                    <img src="../assets/icons/done--dark.svg" alt="close icon">
                                </div>
                                <div class="audio">
                                    <img src="../assets/icons/close.svg" alt="done icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <form class="fb fb-dc" action="game.php" method="POST">
            <h2>Paramètre</h2>
            <input type="text" name="title" placeholder="{old-title}">
            <input type="date" name="title">
            <select multiple name="category" id="gategory" size="4">
                <option value="aventure">Aventure</option>
                <option value="action">action</option>
                <option value="inde">Inde</option>
                <option value="MMORPG">MMORPG</option>
            </select>
            <select multiple name="developer" id="developer" size="2">
                <option value="nitendo">Nintendo</option>
                <option value="ubisoft">Ubisoft</option>
            </select>
            <select multiple name="edition" id="edition" size="2">
                <option value="nintendo">Nintendo</option>
                <option value="ubisoft">Ubisoft</option>
            </select>
            <textarea name="description" id="description" rows="4" maxlength="255" placeholder="Description">
               
            </textarea>
            <div class="text-lg">
                <input type="checkbox" id="newgame"><label class="newgame" for="newgame">Nouveau jeu</label>
            </div>
                <div class="fb fb-sb fb-cross">
                <a href="#" class="btn btn__linkdanger"> Supprimer</a>
                <button type="submit" class="btn btn__secondary" id="btn1">Enregistrer</button>
            </div>
        </form>
    </div>
</body>

</html>