<html>
        <head>
            <meta charset="utf-8">
                    <link rel="stylesheet" href="index.css">
                    <link href="https://fonts.googleapis.com/css?family=Pacifico|Varela+Round&display=swap" rel="stylesheet">
                <title>Camping | Accueil</title>
        </head>
        
        <body>
            <?php
            require_once('../src/header.php');
            
            if(isset($_POST['emplacement']))
{
	$_SESSION['emplacement']=$_POST['emplacement'];
	header('Location: reservation.php');
}

            ?>
            <section class="split">
                <div class="lieux">
                    <div class="infos_lieux">
                        <h2>LA PLAGE</h2>
                        <p>Vamos a la playa <br>
                        And nino guste la paiela.<br>
                        Viens paye le camping.
                                <form class="btn" method="post">
                                    <input class="btn_" name="emplacement" type="submit" value="La Plage">
                                </form>
                        </p>
                    </div>
                </div>
                <div class="lieux">
                        <div class="infos_lieux">
                                <h2>LES PINS</h2>
                                <p>Arrivé cet été en prêt de la aprt du Villareal C.F <br>
                                Alvaro vien quant à lui afin de prêter main forte<br>
                                A une défense qui fait pleurer plus d'un tout les week-ends..
                                    <form class="btn" method="post" action="choice.php">
                                        <input class="btn_" name="emplacement" type="submit" value="Les Pins">
                                    </form>
                                </p>
                            </div>
                </div>
                <div class="lieux">
                        <div class="infos_lieux">
                                <h2>LE MAQUIS</h2>
                                <p>Hatem Ben Arfa devrait signé un contrat avec l'OM <br>
                               dans les prochaines heures, le montant avoisinnerait les 10 million d'euros.<br>
                                Un grand retour de la part de Ben Arfa qui avait déjà joué sous les couleurs phocéenne durant 5 ans !<br>
                                Affaire à suivre..
                                        <form class="btn" method="post">
                                        <input class="btn_" name="emplacement" type="submit" value="Le Maquis">
                                        </form>
                            </p>
                </div>
            </section>

        </body>
</html>
