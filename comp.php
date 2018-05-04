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
        <title>Re:Monster</title>
        <link rel="stylesheet" href="ciao.css">
    </head>
    <body>
        <h1>Re:Monster</h1>

        <?php
        include("menu.php");
        include("menuRe.php");
        $reponse = $bdd->query('SELECT * FROM competences ORDER BY nom') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse->fetch())
        {
        ?>
        <p>
            <strong><?php echo $donnees['nom']; ?> : </strong><br /><?php echo $donnees['description']; ?><br /> Avec niveau : <?php echo $donnees['avec_niveau']; ?>
        </p>
        <?php
        }


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

    </body>
</html>
