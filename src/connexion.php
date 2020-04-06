<?php 

require_once('../src/header.php');



if(!isset($_SESSION['login']))
{
if((isset($_POST['buttonc']))&&(isset($_POST['login']))&&(isset($_POST['password'])))
{

	$connexion= mysqli_connect("localhost", "root", "", "camping"); 
	$login=$_POST['login'];
	$query="SELECT *from utilisateurs WHERE login='$login'";
	$result= mysqli_query($connexion, $query);
	$row = mysqli_fetch_array($result);
	
	if(password_verify($_POST['password'],$row['password'])) 
	{
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
	header ('location: ../index.php');
	}
	else
	{	
	?>
	<div class="erreur">
	<div class="affichage">
	<?php
	echo "*Login ou mot de passe incorrect";	
	?>
	</div>
	</div>
	<?php
	}
}
}

// --------------------------------------------FIN PHP--------------------------------------------
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../src/index.css">
    <title>Connexion</title>
</head>
<body id="connexion">

    
<form method="POST" action="connexion.php" class="box">
    <h3>Connexion :</h3>
    <input type="text" name="login" placeholder="Login ?" class="input">
    <input type="password" name="password" placeholder="Mot de passe ?" class="input">
    <input type="submit" name="buttonc" value="Connexion !">
    <a href="inscription.php">Inscription ?</a>
</form>

</body>
</html>