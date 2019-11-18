<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("DELETE FROM inscritevent 
WHERE id_evenement=:id_evnt");
        $requete->bindvalue(':id_evnt', $_GET['idEvenement'], PDO::PARAM_STR);
        $requete->execute();

$requete = $bdd->prepare("DELETE FROM panier 
WHERE Id_evnt=:id_evnt");
        $requete->bindvalue(':id_evnt', $_GET['idEvenement'], PDO::PARAM_STR);
        $requete->execute();
       	
$requete = $bdd->prepare("DELETE FROM commande 
WHERE Id_evenement=:Id_evenement");
        $requete->bindvalue(':Id_evenement', $_GET['idEvenement'], PDO::PARAM_STR);
        $requete->execute();
       	header('Location: /BDE/ProjetWeb/panierEvent.php');

?>


