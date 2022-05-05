<pre>
    <?php
    SESSION_start();
    require_once '../interface/main.php';
    // Vérifier la connection à la BD
    if ($link->connect_error) {
        die("Erreur de connection : " . $link->connect_error);
    }
    if(
        !(preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/',$_POST['email']))||
        empty($_POST['pwd1']) || 
        empty($_POST['pwd2']))
    {
        $_SESSION['error'] = "Le formulaire n'a pas été rempli correctement";
        $link->close();
        // Redirection
        header("Location: ../interface/login.php");
        die();
    }

    $_SESSION['email-register'] = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email='".$_SESSION['email-register']."'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Cet email est déjà associé à un compte";
        $link->close();
        // Redirection
        header("Location: ../interface/login.php");
        die();
    } else if ($_POST['pwd1'] != $_POST['pwd2']) {
        $_SESSION['error'] = "Vous avez saisi deux mots de passe différents";
        $link->close();
        // Redirection
        header("Location: ../interface/login.php");
        die();
    } else {
        $name = ["zelda","glados","peach","samus","lara-croft","madeline","mipha","yennefer","chloe-frazer","aloy"];

        $email = $_POST['email'];
        $pseudo = $name[rand(0,9)];
        $_SESSION['pwd'] = $_POST['pwd1'];
        $pwd_hash = (password_hash($_POST['pwd1'],PASSWORD_DEFAULT));
        $_SESSION['pwd_hash'] = (password_hash($_POST['pwd1'],PASSWORD_DEFAULT));
        $last_id = getLastId($link);
        $sql = "INSERT INTO users (iduser,email,pseudo,password,avatar,admin) VALUES ($last_id, '$email','$pseudo','$pwd_hash','$pseudo',0)";
        print_r($sql);
        $link->query($sql);
        $_SESSION['success'] =  "Céation de votre compte terminé";
        $link->close();
        header("Location: ../interface/apphome.php");
        die();
    }
    ?>
</pre>