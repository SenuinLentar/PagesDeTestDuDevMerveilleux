<?php
function getBDD(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Re:Monster_M;charset=utf8', 'root', 'maxime', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }
    catch (Exception $e)
    {
        die ('Erreur : ' . $e->getMessage());
    }
}

//function getBDD(){
//    try
//    {
//        $bdd = new PDO('mysql:host=178.62.4.64;dbname=Re:Monster_M;charset=utf8', 'Administrateur', 'maxime1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//    }
//    catch (Exception $e)
//    {
//        die ('Erreur : ' . $e->getMessage());
//    }
//}
?>
