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
        <title>Re:Monster Equipement</title>
        <link rel="stylesheet" href="ciao.css">
    </head>
    <body>
        <h1>Re:Monster Equipement</h1>

        <?php
        include("menu.php");
        include("menuRe.php");
        $reponse = $bdd->query('SELECT * FROM equipement ORDER BY nom') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse->fetch())
        {
        ?>
        <p>
            <strong><?php echo $donnees['Nom']; ?> : </strong><br /><?php echo $donnees['Type']; ?><br /><?php echo $donnees['Effet_1']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_1']; ?><br /><?php echo $donnees['Effet_2']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_2']; ?><br /><?php echo $donnees['Effet_3']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_3']; ?><br /><?php echo $donnees['Effet_4']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_4']; ?><br /><?php echo $donnees['Effet_5']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_5']; ?><br /><?php echo $donnees['Effet_6']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_6']; ?><br /><?php echo $donnees['Autre']; ?>
        </p>
        <?php
        }


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

    </body>
</html>
