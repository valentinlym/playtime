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
            // Redirection
            header("Location: ../interface/game.php?path=$path&id=$id");
            die();
        }
        $link->query("DELETE FROM status WHERE fk_idgame='$id' AND fk_iduser='".$_SESSION['iduser']."'");
    }
    $iduser = $_SESSION['iduser'];
    switch ($_GET['status']) {
        case "vue":
            $q = "INSERT INTO `playtime`.`status` (`typestatus`, `fk_iduser`, `fk_idgame`) VALUES ('vue', $iduser, $id)";
            $link->query($q);
            // Redirection
            header("Location: ../interface/game.php?path=$path&id=$id");
            die();
            break;
        case "cours":
            $q = "INSERT INTO `playtime`.`status` (`typestatus`, `fk_iduser`, `fk_idgame`) VALUES ('cours', $iduser, $id)";
            $link->query($q);
            // Redirection
            header("Location: ../interface/game.php?path=$path&id=$id");
            die();
            break;
        case "termine":
            $q = "INSERT INTO `playtime`.`status` (`typestatus`, `fk_iduser`, `fk_idgame`) VALUES ('termine', $iduser, $id)";
            $link->query($q);
            // Redirection
            header("Location: ../interface/game.php?path=$path&id=$id");
            die();
            break;
    }  
}
?>