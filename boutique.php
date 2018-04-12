<?php
    session_start();
    try
        {
            $bdd = new PDO('mysql:host=178.62.4.64;dbname=test_boutique_lav;charset=utf8', 'Administrateur', 'maxime1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die ('Erreur : ' . $e->getMessage());
        }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boutique du Dev Merveilleux</title>
        <link rel="stylesheet" type="text/css" href="ciao.css">
    </head>
    <body>
        <header>
                <h1>Vous êtes dans la Boutique du Dev Merveilleux</h1>
        </header>
       <div id="boutique">
        <?php
            include("menu.php");

            $reponse = $bdd->query('SELECT * FROM Goodies') or die(print_r($bdd->errorInfo()));
            while ($donnees = $reponse->fetch())
            {
        ?>
               <img src="<?php echo $donnees['URL']; ?>" alt="<?php echo $donnees['NameGoodies']; ?>" title="<?php echo $donnees['NameGoodies']; ?>" class="picture" id="id<?php echo $donnees['Id']; ?>"/>
        <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
        ?>

        </div>
    </body>
</html>
