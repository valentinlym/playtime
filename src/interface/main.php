<?php
// DEBUG
error_reporting(E_ALL);

session_start();
// Connection à la base de données
$link = new mysqli("localhost","root","Bk3dGftO)QiQIPj5","playtime");

// vérifier la connection à la BD
if ($link->connect_error) {
    die("Erreur de connection : " . $link->connect_error);
}

// authorisation
if (($type == "app" && !$_SESSION['admin']) || ($type == "admin" && $_SESSION['admin'])) {
	header("Location: ../interface/404.php");
	die();
}

// *********************************************************** \\
// *********************** Fonctions ************************** \\
// ************************************************************ \\

/**
 * 
 * @param mysqli $link instance de connextion avec la BD
 * @return int dernière valeur utiliser par l'autoincrement
 */
function getLastId($link): int
{
	$q = 'SELECT LAST_INSERT_ID()';
	return $link->query($q)->fetch_row()[0];
}

function getUser($link, string $email): void
{
	$q = "SELECT * FROM users WHERE email='$email'";
	$_SESSION['iduser'] =  $link->query($q)->fetch_row()[0]; 
	$_SESSION['email'] = $link->query($q)->fetch_row()[1];
	$_SESSION['pseudo'] =   str_replace("-", " ", $link->query($q)->fetch_row()[2]);
	$_SESSION['password'] =  $link->query($q)->fetch_row()[3];
	$_SESSION['avatar'] =  $link->query($q)->fetch_row()[4];
	$_SESSION['admin'] =  ($link->query($q)->fetch_row()[5] == 0)? "false":"true";
}

function getCount($link,string $status): int
{
	$q = "SELECT * FROM status WHERE typestatus='$status'";
	return $link->query($q)->num_rows;
}

function banner()
{   
    $result = "";
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        $error = $_SESSION['error'];
        $result = <<<HTML
        <div class="banner-box">
            <div class="banner banner-danger">
                <h2 class="title-lg maj text-r600">Erreur</h2>
                <p class="text-sm text-r600">$error</p>
            </div>
        </div>
HTML;
    } else if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
        $success = $_SESSION['success'];
        $result = <<<HTML
        <div class="banner-box">
            <div class="banner banner-success">
                <h2 class="title-lg maj text-g600">Succès</h2>
                <p class="text-sm text-g600">$success</p>
            </div>
        </div>
HTML;
    }
    unset($_SESSION['error'],$_SESSION['success']);
    return $result;
}

?>