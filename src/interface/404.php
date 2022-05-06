<?php
$title = "404";
$css = "404";
$type = "global";
require '../components/head.php';
require_once '../interface/main.php';
?>

<body>
  <header>
    <img src="../../assets/img/logo.svg" alt="logo de play time">
  </header>
  <div class="flex-center">
  <?= banner() ?>
    <div class="main">
      <div class="main__img">
        <span class="img404">404<br>('⌓')</span>
      </div>
      <div class="main__txt">
        <div class="txt__box">
          <p>La page que vous rechercher<br>n’est pas disponible.</p>
          <a class="btn btn__secondary" href="home.php">Retour à l’acceuil</a>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>