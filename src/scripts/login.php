<pre>
<?php
print_r($_POST);
SESSION_start();
require_once '../interface/main.php';
// Vérifier la connection à la BD
if ($link->connect_error) {
    die("Erreur de connection : " . $link->connect_error);
}
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
    //$pwd_hash = ($result->fetch_row()[3]);
    print_r("->".$pwd_hash);
    if(password_verify($pwd,$pwd_hash)){
        $link->close();
        // Redirection
        header("Location: ../interface/apphome.php");
        die();
    } else {
        print_r((password_verify($pwd,$pwd_hash))?"true":"false");
        $_SESSION['error'] = "Mot de passe incorrect";
        $link->close();
        // Redirection
        header("Location: ../interface/login.php");
        die();
    }
} else {
    $_SESSION['error'] = "Compte inexistant";
    $link->close();
    // Redirection
    header("Location: ../interface/login.php");
    die();
}
?>
</pre>