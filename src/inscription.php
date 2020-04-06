<?php 

require_once('../src/header.php');

$connexion= mysqli_connect('localhost', 'root', '','camping' );

if(isset($_POST['buttonc']))
{
	$login=$_POST['login'];
	$req="SELECT  *from utilisateurs WHERE login='$login'";
    $query=mysqli_query($connexion, $req) or die(mysqli_error($connexion));
    $result=mysqli_num_rows($query);


		
	if((($_POST['password']!=$_POST['cpassword'])||($result>0))||(strlen($_POST['password'])< 5))
	{
		if(($_POST['password']!=$_POST['cpassword'])&&($result>0))
		{
			?>
			<div class="erreur">
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			mysqli_close($connexion);
			?>
			</div>
			</div>
			<?php
		}
		else if((strlen($_POST['password'])< 5)&&($result>0))
		{  
			?>
			<div class="erreur">
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo" 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			</div>
			<?php			
		}	
		else if($result>0)
		{	  
			?>
			<div class="erreur">
			<div class="affichage">
			<?php
			echo "*Veuillez renseigner un autre login";
			?>
			</div>
			</div>
			<?php
			mysqli_close($connexion);	
		}
		else if($_POST['password']!=$_POST['cpassword'])
		{  
			?>
			<div class="erreur">
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			mysqli_close($connexion);
			?>
			</div>
			</div>
			<?php			
		}
		else if(strlen($_POST['password']< 5))
		{  
			?>
			<div class="erreur">
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo " 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			</div>
			<?php			
		}	
	}	
	else
	{	
			echo 'b';
			$hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);					
			$req2 = ("INSERT INTO utilisateurs(login,password) VALUES ('$login','$hash')");	
			$query = mysqli_query($connexion, $req2);
			var_dump($req2);		 
			
				
			
			
	}
}
// --------------------------------------------FIN PHP--------------------------------------------
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