<?php
session_start();

try
{
    $bdd = new PDO('mysql:host=178.62.4.64;dbname=openclassroom_bdd;charset=utf8', 'Administrateur', 'maxime1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
        <title>BDD</title>
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <!--        <script src="script.js"></script>-->
    </head>
    <body>
        <h1>Base de données</h1>

        <?php
        include("menu.php");

        $reponse = $bdd->query('SELECT * FROM jeux_video') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse->fetch())
        {
        ?>
        <p>
            <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
            Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
            <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
        </p>
        <?php
        }


        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>


    </body>
</html>
