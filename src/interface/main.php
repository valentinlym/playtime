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

//  autorisation
if ($type!="global") {
    if(isset($_SESSION['admin'])){
        if(($type == "admin" && $_SESSION['admin']!=1)) {
            header("Location: ../interface/404.php");
            die();
        }
    } else {
        header("Location: ../interface/404.php");
        die();
    }
}

// ************************************************************ \\
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

function getUser($link, string $email): array
{
    $q = "SELECT * FROM users WHERE email='$email'";
    $data = array(
        'iduser' => $link->query($q)->fetch_row()[0],
        'email' => $link->query($q)->fetch_row()[1],
        'pseudo' => str_replace("-", " ", $link->query($q)->fetch_row()[2]),
        'password' => $link->query($q)->fetch_row()[3],
        'avatar' => $link->query($q)->fetch_row()[4],
        'admin' => $link->query($q)->fetch_row()[5]
    );
    return $data;
}

function getGame($link, string $idgame): array
{
    $q = "SELECT * FROM games WHERE idgame='$idgame'";
    $data = array(
        'idgame' => $link->query($q)->fetch_row()[0],
        'title' => $link->query($q)->fetch_row()[1],
        'description' => $link->query($q)->fetch_row()[2],
        'date' => $link->query($q)->fetch_row()[3],
        'developper' => $link->query($q)->fetch_row()[4]
    );
    return $data;
}

function getCount($link,string $id,string $status): int
{
	$q = "SELECT * FROM status WHERE typestatus='$status' AND fk_iduser='$id'";
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

/**
 * Permet de vérifier les entrées saisie par l'utilisateur
 * 
 * @param mysqli $link nstance de connextion avec la BD
 * @param string $page nom de la page à retourner en cas d'erreur
 * @param bool $email vérifier l'email ?
 * @param bool $pwd vérifier le mot de passe ?
 * @param string $pwd1 1er mot de passe
 * @param string $pwd1 2nd mot de passe
 * 
 * @return void
 */
function verify($link,string $page,bool $email=false,bool $pwd=false,$pwd1=null,$pwd2=null): void
{
    $error = false;
    if($email && !(preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/',$_POST['email']))){
            $error = true;
            $_SESSION['error'] = "Le formulaire n'a pas été rempli correctement : email";
        }
    if($pwd && !(isset($_POST['pwd']))){
            $error = true;
            $_SESSION['error'] = "Le formulaire n'a pas été rempli correctement : pwd";
        }
    if($error){
        $link->close();
        // Redirection
        header("Location: ../interface/$page");
        die();
    } 
    if(($pwd1!=null && $pwd2!=null) && ($pwd1 != $pwd2)){
        $_SESSION['error'] = "Vous avez saisi deux mots de passe différents";
        // Redirection
        header("Location: ../interface/$page");
        die();
    }
}

function getPathImg($title)
{
    return "../../assets/img/cover/".str_replace(" ", "_", $title).".jpg";
}

?>