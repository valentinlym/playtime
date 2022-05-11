<?php
$type = "global";
require_once '../interface/main.php';
$type = $_GET['type'];
$page = $type . "user.php";
if($type == "app"){
    $email = $_SESSION['email'];
    $pseudo = $_SESSION['pseudo'];
    $pwd = $_SESSION['password'];
    $admin = $_SESSION['admin'];
} else {
    $data = getUser($link,$_SESSION['data-email']);
    $email = $data['email'];
    $pseudo = $data['pseudo'];
    $pwd = $_SESSION['password'];
    $admin = $data['admin'];
}

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
    $admin = $_POST['admin'];
} elseif($type == "admin" && $_POST['admin']!=$admin){
    # VERSION 2.0
    $pwd = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
    $admin = $_POST['admin'];
} else {
    verify($link,$page,false,true);
}
if($_POST['pseudo']!=null){
    $pseudo = $_POST['pseudo'];
}

$sql = "UPDATE users SET pseudo='$pseudo', password='$pwd', admin='$admin' WHERE email='$email'";
$link->query($sql);
if($type == "app"){
    $_SESSION = getUser($link,$_SESSION['email']);
} else {
    $data = getUser($link,$_SESSION['data-email']);
}
$link->close();
// Redirection
header("Location: ../interface/$page");
die();
?>