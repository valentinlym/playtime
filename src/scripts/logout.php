<?php
session_start();
session_unset();
// Redirection
header("Location: ../interface/home.php");
die();
?>