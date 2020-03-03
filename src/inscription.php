<?php 
require_once('../src/header.php');

$connexion = mysqli_connect('Localhost','root','','camping');

if(isset($_POST['buttonc']))
{
    $nom = htmlspecialchars(($_POST['nom']));
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = $_POST['email'];
    $login = htmlspecialchars($_POST['login']);
    $psd = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $cpsd = password_hash($_POST['cpassword'], PASSWORD_BCRYPT);

        if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['cpassword']))
        {
            echo'b';
           $query = "SELECT login FROM utilisateurs WHERE login ='$login'";
           $execquery_exist = mysqli_query($connexion, $query);
           $result_exist = mysqli_num_rows($execquery_exist); 


                    if(mysqli_num_rows($execquery_exist) == 0)
                    {
                            if($_POST['password'] == $_POST['cpassword'])
                            {   
                                    $insertmbr ="INSERT INTO utilisateurs (login,nom,prenom,email,password) VALUES ('$login','$nom','$prenom','$email','$psd')";
                                    var_dump($insertmbr);
                                    $query= mysqli_query($connexion, $insertmbr);
                                    $eror = "Votre compte à bien été crée ! ";
                            }

                                else
                                {
                                    $eror = "Vos mots de passes ne correspondent pas !";
                                }
                    }
                                    else
                                    {
                                        $erreur = "Ce login n'est pas disponnible";
                                        echo "<b>".$erreur."</b>";
                                    }

        }

        else
        {
            $eror = "Tous les champs doivent être complétés.";
        }
}

        if(isset($eror))
        {
            echo $eror;
        } 

        // if(isset($_SESSION['login']))
        // {
        //     header('Location: index.php');
        // }

?>

<html>
        <head>
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <link rel="stylesheet" href="index.css">
            <title>Inscription</title>
        </head>
    <body id="connexion">
        <form method="POST" action="inscription.php" class="box">
            <h3>Inscription :</h3>
            <input type="text" name="login" placeholder="Votre login" required>
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="text" name="prenom" placeholder="Votre prenom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="password" name="cpassword" placeholder="Confirmer" required>
            <input type="submit" name="buttonc" value="S'inscrire">
            <?php 
                    if(isset($eror))
                        {
                            echo $eror;
                        } 
            ?>

        </form>

    </body>
</html>