<?php
$type = "global";
require '../interface/main.php';
$id = $_GET['id'];
$path = $_GET['path'];
// Status
print_r($_SESSION);
print_r($_GET);
if(isset($_GET['status'])) {
    if($_SESSION['data-status']!=""){
        if($_SESSION['data-status']===$_GET['status']){
            $link->query("DELETE FROM status WHERE fk_idgame='$id' AND fk_iduser='".$_SESSION['iduser']."'");
            $link->close();
            // Redirection
            header("Location: ../interface/game.php?path=$path&id=$id");
            die();
        }
        $link->query("DELETE FROM status WHERE fk_idgame='$id' AND fk_iduser='".$_SESSION['iduser']."'");
    }
    $iduser = $_SESSION['iduser'];
    $q = "INSERT INTO `playtime`.`status` (`typestatus`, `fk_iduser`, `fk_idgame`) VALUES ('".$_GET['status']."', $iduser, $id)";
    $link->query($q);
    $link->close();
    // Redirection
    header("Location: ../interface/game.php?path=$path&id=$id");
    die();
}