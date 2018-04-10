<?php
    session_start();
    try
    {
        $bdd = new PDO('mysql:host=178.62.4.64;dbname=WSPROSIT5;charset=utf8', 'Administrateur', 'maxime1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        die ('Erreur : ' . $e->getMessage());
    }

    $pseudo = $_POST['pseudo'];
    $motDePasse = $_POST['motDePasse'];

    $requete_test_pseudo = $bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo = :pseudo_value;");

    $requete_test_pseudo->bindValue(':pseudo_value', $pseudo, PDO::PARAM_STR);

    $requete_test_pseudo->execute();

    $pseudo_value = $requete_test_pseudo->fetch();

    if($pseudo == $pseudo_value['pseudo'])
    {
        echo "Ce pseudo est déjà utilisé, veillez en saisir un autre.";
    }
    else
    {
        $requete = $bdd->prepare("CALL ajout_utilisateur(:pseudo, :motDePasse);");

        $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);

        $requete->execute();
        echo "Félicitation vous êtes maintenant inscrit!";
    }
?>
