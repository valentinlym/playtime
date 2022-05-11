<?php
$type = "app";
require_once '../interface/main.php';
$id = $_SESSION['iduser'];
$email = $_SESSION['email'];
$link->query("DELETE FROM status WHERE fk_iduser='$id'");
$sql = "DELETE FROM users WHERE iduser='$id' AND email='$email'";
$link->query($sql);
header("Location: logout.php");
die();
?>