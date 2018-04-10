<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <title>Deuxième Page de test du Dev Merveilleux</title>
    </head>

    <body>
   		 <!-- Corps de la page -->
   		 <h1>Vous êtes sur la Deuxième Page de Test du Dev Merveilleux</h1>

        <?php include("menu.php"); ?>

       <p>Si comme moi vous aimez Zoro, celui qui deviendra le plus grand escrimeur du monde, cliquez <a href="images/Zoro.jpg">ici</a>!</p>
       <p>Un peu d'humour : <br><a href="images/graphe_religion.jpg"><img src="images/graphe_religion_mini.png" alt="Un graphique en barre du niveau de fanatisme des divers religions (dont le culte voué à apple)" title="Le fanatisme religieux au 21ème siècle" class="religion"></a></p>
       <p>Sinon, une autre de mes grandes passions : Dofus</p>
       <figure>
          <img src="images/dofus.png" alt="Screen d'un personnage du jeu Dofus">
          <figcaption id="titre_image">Le MMO français Dofus</figcaption>
       </figure>

        <?php include("footer.php"); ?>
    </body>
</html>
