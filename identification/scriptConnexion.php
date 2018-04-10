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

    $requete_test_pseudo = $bdd->prepare("SELECT pseudo, motDePasse, statutAdmin FROM utilisateurs WHERE pseudo = :pseudo_value AND motDePasse = :motDePasse_value");

    $requete_test_pseudo->bindValue(':pseudo_value', $pseudo, PDO::PARAM_STR);
    $requete_test_pseudo->bindValue(':motDePasse_value', $motDePasse, PDO::PARAM_STR);

    $requete_test_pseudo->execute();

    $identifiants = $requete_test_pseudo->fetch();

    if($pseudo == $identifiants['pseudo'] AND $motDePasse == $identifiants['motDePasse'])
    {
        $_SESSION['login'] = $pseudo;
        $_SESSION['role'] = $identifiants['statutAdmin'];
        header('Location: ../Hello.php');
        exit();
    }
    else
    {
        echo "Login ou Mot de passe incorrect!";
    }

?>
