<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("DELETE FROM paniers 
WHERE Id_evenement=:Id_evenement");
        $requete->bindvalue(':Id_evenement', $_GET['idEvenement'], PDO::PARAM_STR);
        $requete->execute();
       	header('Location: /ProjetWeb/panier.php');
?>


