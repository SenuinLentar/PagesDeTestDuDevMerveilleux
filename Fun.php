<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <title>Quatrième Page de test du Dev Merveilleux</title>
    </head>

    <body>
        <div id="fun">
   		     <!-- Corps de la page -->
             <h1>Vous êtes sur la Quatrième Page de Test du Dev Merveilleux</h1>

             <?php include("menu.php"); ?>

             <audio src="audio/pokemon_s1.mp3" controls class="audio" title="Générique saison 1 Pokémon"></audio>
             <p>
                Générique version longue de la saison 1 de Pokémon.
             </p>
             <video src="videos/isis_blue_bird.mp4" controls class="video" title="Blue Bird, Isis Vasconcellos"></video>
             <p>
                La chanteuse Isis Vasconcellos reprenant le thème Blue Bird de l'anime Naruto.
             </p>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
