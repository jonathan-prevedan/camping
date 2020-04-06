 <?php 
require_once('../src/header.php'); 


?>


<html>
    <link rel="stylesheet" href="index.css">
    <body>

        
            <form action="slot.php" method="post">
            <select name="logement" id="logement">
            <label for="form_type">
                <option value="">Type de logement </option>
                
                <option value="1" <?php 
                if(isset($tente))
                {
                    echo $select;
                }
                
                ?>>Tente</option>

                <option value="2" <?php 
                    if(isset($cc))
                    {
                        echo $select;
                    }
                ?>>Camping-car</option>
            </label>
            </select>
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="date" name="date_debut">
            <input type="date" name="date_fin"><br/>
            <input type="checkbox" name="option1">
            <label for="option1">Accès à la borne d'électricité +2€/jour</label><br/>
            <input type="checkbox" name="option2">
            <label for="option2">Accès au disco-club +17€/jour</label><br/>
            <input type="checkbox" name="option3">
            <label for="option3">Accès au PACK d'activités +30€/jour</label><br/>
            <input type="submit" name="ok">
        </form>
        <?php 
        
        if(isset($_POST['ok']))
        {

        }
        
        ?>
    </body>
</html>
