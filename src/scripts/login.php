<?php
$type="global";
require_once '../interface/main.php';

// Vérification des données
if(
    !(preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/',$_POST['email']))||
    empty($_POST['pwd']))
{
    $_SESSION['error'] = "Le formulaire n'a pas été rempli correctement";
    $link->close();
    // Redirection
    header("Location: ../interface/login.php");
    die();
}
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$_SESSION['email-login'] = $email;

$sql = "SELECT * FROM users WHERE email='".$email."'";
$result = $link->query($sql);

if($result->num_rows==1){
    $pwd_hash = (($result->fetch_row()[3]));
    if(password_verify($pwd,$pwd_hash)){ // L'utilisateur s'est connecté correctement.
        unset($_SESSION['email-login']);
        getUser($link, $email);
        $link->close();
        // Redirection
        header("Location: ../interface/apphome.php");
        die();
    } else { // Le mot de passe est incorrect.
        $_SESSION['error'] = "Mot de passe incorrect";
        $link->close();
        // Redirection
        header("Location: ../interface/login.php");
        die();
    }
} else { // L'email n'est pas associé à un compte Play Time.
    $_SESSION['error'] = "Compte inexistant";
    $link->close();
    // Redirection
    header("Location: ../interface/login.php");
    die();
}
?>