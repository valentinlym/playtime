<?php
$type="global";
require_once '../interface/main.php';
// Vérification des données
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
verify($link,"login.php",true,false,$pwd1,$pwd2);

$_SESSION['email-register'] = $_POST['email'];

$sql = "SELECT * FROM users WHERE email='" . $_SESSION['email-register'] . "'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Cet email est déjà associé à un compte";
    $link->close();
    // Redirection
    header("Location: ../interface/login.php");
    die();
} else {
    $name = ["zelda", "glados", "lara-croft", "madeline", "chloe-frazer", "aloy"];

    $email = $_POST['email'];
    $pseudo = $name[rand(0, 5)];
    $_SESSION['pwd'] = $_POST['pwd1'];
    $pwd_hash = (password_hash($_POST['pwd1'], PASSWORD_DEFAULT));
    $_SESSION['pwd_hash'] = (password_hash($_POST['pwd1'], PASSWORD_DEFAULT));
    $last_id = getLastId($link);
    $sql = "INSERT INTO users (iduser,email,pseudo,password,avatar,admin) VALUES ($last_id, '$email','$pseudo','$pwd_hash','$pseudo',0)";
    print_r($sql);
    $link->query($sql);
    $_SESSION['success'] =  "Céation de votre compte terminé";
    $_SESSION = getUser($link,$email);
    $link->close();
    header("Location: ../interface/apphome.php");
    die();
}
?>