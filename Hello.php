<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <title>Page de test du Dev Merveilleux</title>
    </head>

    <body>
        <!-- Corps de la page -->
        <header>
                <h1>Vous êtes sur la Page de Test du Dev Merveilleux</h1>
        </header>

        <?php include("menu.php"); ?>

        <section>
                <aside>
                        <img src="images/sacri.png" alt="Fenêtre de passage lv 200 de mon Sacrieur sur Dofus" class="image_flottante_gauche" title="Good job Carmaximese!" id="carmaximese">
                </aside>

                <article>
                        <p class="intro">Hello tout le monde! <br class="intro" />	Il est pas beau <strong>MON</strong> site?
                            <?php
                                echo "Et en plus il sera bientôt dynamique!";
                            ?>
                            <?php
                                $monfichier = fopen('nbe_visiteur.txt', 'r+');

                                $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
                                $pages_vues += 1; // On augmente de 1 ce nombre de pages vues
                                fseek($monfichier, 0); // On remet le curseur au début du fichier
                                fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

                                fclose($monfichier);

                                echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
                            ?>
                        </p>
                        <p>Si vous aimez pas, vous pouvez aller directement <a href="#bas_de_page" title="Monstre!">là</a>, bande de <em>connards</em>!</p>
   	                    <p class="regles">Règles de base de la <span class="important">Page de Test du Dev Merveilleux</span> :</p>
   		                <ul class="regles">
   		                   <li>Respect de Moi</li>
   		                   <li>Adoration de Moi</li>
   		                   <li>Offrandes à Moi</li>
                        </ul>

                        <form method="post" action="cible.php">
                            <p>
                                <label for="offrande">Quel offrande allez-vous déposer sur l'Autel du Dev Merveilleux? </label><input type="text" name="offrande" id="offrande" placeholder="Ogrines" />
                            </p>
                        </form>

                        <form method="post" action="cible.php">
                            <p>
                                <label for="eloge">Peut-être voudriez-vous rédiger une éloge de ma personne? Si c'est la cas, c'est ici que cela se passe :</label><br />
                                <textarea name="eloge" id="eloge">Ô Dev Merveilleux, ...</textarea><br />
                                <input type="submit" value="Envoyer" />
                            </p>

                        </form>

                        <form method="post" action="traitement.php">
                            <p>
                                <label for="apreciation">Comment trouvez-vous mon site?</label><br/>
                                <select name="apreciation" id="apreciation">
                                    <optgroup label="Apréciations">
                                    <option value="bien">Bien</option>
                                    <option value="tres_bien">Très bien</option>
                                    <option value="excellent">Excellent</option>
                                    <option value="fabuleux" selected>Fabuleux</option>
                                    </optgroup>
                                </select>
                            </p>
                        </form>
                        <form action="cible.php" method="post" enctype="multipart/form-data" id="envoie_fichier">
                            <p>Vous pouvez également m'envoyer des fichiers .txt! C'est pas beau ça?<br/>
                            <input type="file" name="fichier" /><br />
                            <input type="submit" value="Envoyer" />
                            </p>
                        </form>
                </article>
        </section>

   	    <?php include("footer.php"); ?>

        <script>
            var apreciation = document.getElementById('apreciation');

            apreciation.addEventListener('change', function() {

                // On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
                alert(apreciation.options[apreciation.selectedIndex].innerHTML);

            });
        </script>

<!--
        <script>
            $( "#carmaximese" ).on( 'click', function(){
                $( "#carmaximese" ).fadeIn(4000);
            }
        </script>
-->

        <script src="//code.jquery.com/jquery-3.3.1.min.js">
    </body>
</html>
