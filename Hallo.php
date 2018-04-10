<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <title>Troisième Page de test du Dev Merveilleux</title>
    </head>

    <body>
   		 <!-- Corps de la page -->
        <header>
                <h1>Vous êtes sur la Troisième Page de Test du Dev Merveilleux</h1>
        </header>

       <?php include("menu.php"); ?>

        <section>
                <aside>

                </aside>

                <article>
                        <p class="dragon">
                            Après une longue marche, Vous arrivez finalement devant un élargissement du tunnel qui donne sur une grotte titanesque qui vous semble dépouillé de tout. Même avec la nouvelle vision que vous venez d’acquérir vous n’arrivez pas à distinguer la voûte qui reste cachée dans les ombres. Vous ne voyez pas non plus les bordures de cette caverne qui aurait facilement pu abriter une ville entière, voir même Lunargent!<br/>
                            Soudain, votre regard est attiré par ce que vous aviez d’abord pris pour une colline au loin. Celle-ci en effet s’est mise à bouger, elle se déploie sous vos yeux et s’étire et s’étire encore. Elle déroule une longue queue qui paraît sans fin, un cou large et puissant, deux ailes immenses qui pourrait déclencher un cataclysme sans même s’en rendre compte, une masse énorme soulève tout à coup le tout et quatre pattes gigantesques et griffues se mettent à bouger dans votre direction.<br/>
                            A ce moment, tout s’éteint durant une fraction de seconde puis se rallume dans une explosion de couleurs. Une myriade de reflets rouge illumine chaque rocher de la grotte. En levant les yeux vous comprenez que vous avez récupérés vos facultés visuels classiques et que tous ces reflets viennent de l’immense créature que se dirige vers vous. Celle-ci est en effet recouverte d’une solide carapace de d’écailles rouge vermeil. Après avoir fait quelques pas qui ont fait trembler le sol sous vos pieds, la créature s'immobilise à bonne distance et baisse son long cou dans votre direction.<br/>
                            Vous parvenez enfin à distinguer correctement la tête du monstre qui vous fait face. Celle-ci est doté de terribles cornes qui partent du dessus de son crâne et suivent ensuite une élégante double courbure vers l’arrière. Vous remarquez que ses yeux vous fixent avec intensité, le jaune vif de ces pupilles fendue vous traverse l’âme. Ce terrible regard est surplombé de solides arcades d’écaille épaisse. La créature souffle sur vous un air nauséabond où vous pouvez discerner d’important relents de souffre. Sa large gueule s’ouvre en un rictus qui pourrait vous rappeler un sourir sans tous ces croc effilé qui luisent dans cette lumière rougeâtre.
                        </p>
                </article>
        </section>

        <table>
             <caption>Récompenses offerte par le Dragon :</caption>

             <tr>
                 <th>Nom</th>
                 <th>Classique</th>
                 <th>Rare</th>
                 <th>Magique</th>
             </tr>
             <tr>
                 <td>Tim</td>
                 <td rowspan="2">Casque de cuir +1/0</td>
                 <td>Veste en cuir renforcée +2/0</td>
                 <td>Veste de cuir du renfort magique +2/0<br/>(+1 def physique, +1 def magique)</td>
             </tr>
             <tr>
                 <td>Kat</td>
                 <td>Canne épée ornée FD7</td>
                 <td>Canne épée en mithril FD8</td>
             </tr>
             <tr>
                 <td>Grim</td>
                 <td>Traité ésotérique basique (+2XP)</td>
                 <td>Traité ésotérique (+3XP)</td>
                 <td>Collier de volonté (+1 volonté)</td>
             </tr>
             <tr>
                 <td>Gunter</td>
                 <td>Brassard de cuir +1</td>
                 <td>Arc elfique FD8</td>
                 <td>Arc en corne d’antilope FD9 et portée 60/110</td>
             </tr>
        </table>

   	    <?php include("footer.php"); ?>
    </body>
</html>
