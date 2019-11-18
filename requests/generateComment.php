<?php


if(!isset($_SESSION)){
    session_start();
}

include 'connexionBdd.php';

// Récupération des données utilisateurs
$commentaire = isset($_POST['commentaire']) ? $_POST['commentaire']: NULL;
$id_post = isset($_POST['id_post']) ? $_POST['id_post']: NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT * FROM commantaires");
// Exécution de la requête
$requete->execute();
if (!$requete->fetch())
{

    // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO commentaires(id_post,nom,prenom,commentaire) VALUES(:id_post,:nom,:prenom,:commentaire);");
    
    $requete->bindValue(':id_post', $id_post, PDO::PARAM_STR);
    $requete->bindValue(':nom', $_SESSION['nom'], PDO::PARAM_STR);
    $requete->bindValue(':prenom', $_SESSION['prenom'], PDO::PARAM_STR);
    $requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);

    header('Location: ../blog.php');
    $requete->execute();
}

?>