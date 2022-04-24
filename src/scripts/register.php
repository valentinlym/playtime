<pre>
    <?php
    print_r($_POST);
    SESSION_start();
    $link = new mysqli("localhost", "root", "Bk3dGftO)QiQIPj5", "playtime");
    // Vérifier la connection à la BD
    if ($link->connect_error) {
        die("Erreur de connection : " . $link->connect_error);
    }
    $_SESSION['email-register'] = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email='".$_SESSION['email-register']."'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Cet email est déjà associé à un compte";
        // Redirection
        header("Location: ../interface/login.php");
        die();
    } else if ($_POST['pwd1'] != $_POST['pwd2']) {
        $_SESSION['error'] = "Vous avez saisi deux mots de passe différents";
        // Redirection
        header("Location: ../interface/login.php");
    } else {
        // TODO: Add new account DB
        $_SESSION['success'] =  "Céation de votre compte terminé";
        header("Location: ../interface/apphome.php");
    }
    ?>
</pre>