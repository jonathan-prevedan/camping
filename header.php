<html>
    <head>
                <link rel="stylesheet" href="index.css">
                <link href="https://fonts.googleapis.com/css?family=Pacifico|Varela+Round&display=swap" rel="stylesheet">
    </head>
</html>
<header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
            <?php 

            session_start();

                if(isset($_SESSION['login']))
                {
                ?>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="choice.php">Lieux</a></li>
                    <li><a href="prix.php">Tarifs</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="deco.php">Déconnexion</a></li>
                    <li><a href="livreor.php">Livre d'or</a></li>
                <?php
                }

                else
                {
                ?>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="choice.php">Lieux</a></li>
                    <li><a href="prix.php">Tarifs</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="livreor.php">Livre d'or</a></li>
                <?php
                }
                ?>
        </ul>
      </nav>
    </div>
  </header>