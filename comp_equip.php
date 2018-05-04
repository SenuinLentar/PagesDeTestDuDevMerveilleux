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
        <title>Re:Monster Compétences Equipement</title>
        <link rel="stylesheet" href="ciao.css">
    </head>
    <body>
        <h1>Re:Monster Compétences Equipement</h1>

        <?php
        include("menu.php");
        include("menuRe.php");
        $reponse = $bdd->query('SELECT * FROM competences_equipement ORDER BY Type') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse->fetch())
        {
        ?>
        <p>
            <strong><?php echo $donnees['Type']; ?> : </strong><br /><?php echo $donnees['Comp_1']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_1']; ?><br /><?php echo $donnees['Comp_2']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_2']; ?><br /><?php echo $donnees['Comp_3']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_3']; ?><br /><?php echo $donnees['Comp_4']; ?>&emsp;&emsp;<?php echo $donnees['Niveau_4']; ?>
        </p>
        <?php
        }


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

    </body>
</html>
