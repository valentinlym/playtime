<?php
$type = $_POST['type'];
$page = $type . "user.php";
require_once '../interface/main.php';
$email = $_SESSION['email'];
$pseudo = $_SESSION['pseudo'];
$pwd = $_SESSION['password'];
$admin = ($_SESSION['admin']);

if(!password_verify($_POST['pwd'],$pwd)){
    $_SESSION['error']="Mot de passe incorrect";
    // Redirection
    header("Location: ../interface/$page");
    die();
}
$pwd1 = null;
$pwd2 = null;
if($_POST['pwd1']!=null && $_POST['pwd2']!=null){
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    verify($link,$page,false,true,$pwd1,$pwd2);
    $pwd = password_hash($pwd1,PASSWORD_DEFAULT);
} else {
    verify($link,$page,false,true);
}
if($_POST['pseudo']!=null){
    $pseudo = $_POST['pseudo'];
}
$sql = "UPDATE users SET pseudo='$pseudo', password='$pwd', admin='$admin' WHERE email='$email'";
$link->query($sql);

getUser($link,$email);
$link->close();
// Redirection
header("Location: ../interface/$page");
die();
?>