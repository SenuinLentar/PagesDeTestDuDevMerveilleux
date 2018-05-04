<?php
session_start();

try
{
    $bdd = new PDO('mysql:host=178.62.4.64;dbname=Re:Monster_M;charset=utf8', 'Administrateur', 'maxime1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
        <title>Re:Monster Monstres Glaciesa</title>
        <link rel="stylesheet" href="ciao.css">
    </head>
    <body>
        <h1>Re:Monster Monstres Glaciesa</h1>

        <?php
        include("menu.php");
        include("menuRe.php");
        $reponse = $bdd->query('SELECT * FROM monstres_glaciesa ORDER BY nom') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse->fetch())
        {
        ?>
        <p>
            <strong><?php echo $donnees['nom']; ?> : </strong><br /><?php echo $donnees['description']; ?><br /><?php echo $donnees['comp1']; ?>&emsp;&emsp;<?php echo $donnees['niveau1']; ?><br /><?php echo $donnees['comp2']; ?>&emsp;&emsp;<?php echo $donnees['niveau2']; ?><br /><?php echo $donnees['comp3']; ?>&emsp;&emsp;<?php echo $donnees['niveau3']; ?><br /><?php echo $donnees['comp4']; ?>&emsp;&emsp;<?php echo $donnees['niveau4']; ?><br /><?php echo $donnees['comp5']; ?>&emsp;&emsp;<?php echo $donnees['niveau5']; ?><br /><?php echo $donnees['comp6']; ?>&emsp;&emsp;<?php echo $donnees['niveau6']; ?><br /><?php echo $donnees['comp7']; ?>&emsp;&emsp;<?php echo $donnees['niveau7']; ?><br /><?php echo $donnees['comp8']; ?>&emsp;&emsp;<?php echo $donnees['niveau8']; ?><br /><?php echo $donnees['comp9']; ?>&emsp;&emsp;<?php echo $donnees['niveau9']; ?><br /><?php echo $donnees['comp10']; ?>&emsp;&emsp;<?php echo $donnees['niveau10']; ?><br /><?php echo $donnees['difficulte']; ?>
        </p>
        <?php
        }


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

    </body>
</html>
