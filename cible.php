<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ciao.css">
        <title>Cible</title>
    </head>
    <body>
        <h1>Bonjour!</h1>

        <?php include("menu.php"); ?>
        <p>Un grand merci pour votre don d'
            <?php
                if (isset($_POST['offrande'])
                    AND $_POST['offrande']==null)
                {
                    echo htmlspecialchars("Ogrines");
                }
                else if (isset($_POST['offrande']))
                {
                    echo htmlspecialchars($_POST['offrande']);
                }
                else
                {
                    echo htmlspecialchars("Âme");
                }
            ?>!</p>

        <p>Et merci pour votre avis :<br />

        <?php
            if (isset($_POST['eloge'])
                AND $_POST['eloge']==null)
            {
                echo htmlspecialchars("Pas d'avis? Espèce de mouton!");
            }
            else if (isset($_POST['eloge']))
            {
                echo htmlspecialchars($_POST['eloge']);
            }
            else
            {
                echo htmlspecialchars("Vade Retro Cretinas!");
            }
        ?><br /><br /><br />
            Vous pouvez maintenant vous le carrer.<br /><br />
            Bien cordialement,<br />
            Le Dev Merveilleux.
        </p>
        <p>Si vous souhaitez donner à nouveau vous pouvez toujours retourner <a href="Hello.php">ici</a>!</p>
        <p>
            <?php
                if (isset($_FILES['fichier'])
                    AND $_FILES['fichier']['error']==0
                    AND $_FILES['fichier']['size']<=1000000)
                {
                    $infosFichier = pathinfo($_FILES['fichier']['name']);
                    $extension_upload = $infosFichier['extension'];
                    $extension_autorisees = array ('txt');

                    if (in_array($extension_upload, $extension_autorisees))
                    {
                        $name = str_replace(' ','_', basename($_FILES['fichier']['name']));
                        move_uploaded_file($_FILES['fichier']['tmp_name'], 'fichiers_envoye/' . $name);
                        echo "J'ai bien récupéré votre fichier!";
                    }
                }
                else
                {
                    echo "Je n'ai rien reçu, sac à merde!";
                }
            ?>
        </p>
    </body>
</html>
