<?php
$title = "research";
$css = "admin";
require '../components/head.php';
?>

<body>
    <header class="n900">
        <h1 class="title title-4xl text-y100">Admin • Research</h1>
    </header>

    <div class="main">
        <input type="search" placeholder="Recherche dans admin">
        <p class="text-xs text-n600 lab n200 banner">Il est recommandé d'utiliser un écran plus grand pour afficher plus d'éléments.</p>
        
        <div class="result fb fb-cross">
            <h2 class="title title-2xl">Resultat</h2>
            <span class="lab n200 text-n600">3</span>
        </div>
        
        <div class="table">
            <div class="theader trow">
                <p class="tname">Nom/Email</p>
                <p class="tid">Identifiant</p>
                <p class="ttype">Type</p>
            </div>
            <div class="tbody">
                <a href="#">
                    <div class="trow fb-cross">
                        <p class="tname">joe.deo@exemple.com</p>
                        <p class="tid">87</p>
                        <span class="ttype">User</span>
                    </div>
                </a>
                <a href="#">
                    <div class="trow fb-cross">
                        <p class="tname">The legend of zelda breath of the wild</p>
                        <p class="tid">892</p>
                        <span class="ttype">Game</span>
                    </div>
                </a>
                <a href="#">
                    <div class="trow fb-coss">
                        <p class="tname">{Nom}</p>
                        <p class="tid">{Identifiant}</p>
                        <span class="ttype">Type</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
