<?php 

session_start();

include 'connexionBdd.php';
$requete = $bdd->prepare("UPDATE etudiantinscrit SET online = '0' WHERE Id = :id_user");
$requete->bindValue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);
$requete->execute();

session_destroy();
header('Location: ../bdecesicampus.php');
exit();
?>