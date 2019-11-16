<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("DELETE FROM `paniers` 
WHERE Id_user=:Id_user");
        $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
        $requete->execute();