<?php

if(!isset($_SESSION)){
    session_start();
}

include 'connexionBdd.php';

// Récupération des données utilisateurs
$id_post = isset($_GET['id_p']) ? $_GET['id_p']: NULL;
$id_user = isset($_GET['id_u']) ? $_GET['id_u']: NULL;


// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT * FROM likes WHERE id_post=:id_post AND id_user=:id_user");
$requete->bindValue(':id_post', $id_post, PDO::PARAM_STR);
$requete->bindValue(':id_user', $id_user, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
if ($donnees = $requete->fetch())
{

    if($donnees['likes'] == 0) {
        $requetee = $bdd->prepare("UPDATE likes SET likes = '1' WHERE id_post = :id_post AND id_user=:id_user");
        $requetee->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requetee->bindValue(':id_user', $id_user, PDO::PARAM_STR);
        $requetee->execute();
        

        $requetees = $bdd->prepare("UPDATE post SET nb_likes=nb_likes+1 WHERE id = :id_post");
        $requetees->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requetees->execute();

        $requeteess = $bdd->prepare("SELECT nb_likes FROM post WHERE id = :id_post");
        $requeteess->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requeteess->execute();

        foreach ($requeteess->fetchAll() as $x) {
       
        }

         header('Location: ../blog.php');
    }

    elseif($donnees['likes'] == 1) {
        $requeteee = $bdd->prepare("UPDATE likes SET likes = '0' WHERE id_post = :id_post AND id_user=:id_user");
        $requeteee->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requeteee->bindValue(':id_user', $id_user, PDO::PARAM_STR);
        $requeteee->execute();

        $requetees = $bdd->prepare("UPDATE post SET nb_likes=nb_likes-1 WHERE id = :id_post");
        $requetees->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requetees->execute();

        $requeteess = $bdd->prepare("SELECT nb_likes FROM post WHERE id = :id_post");
        $requeteess->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requeteess->execute();
 
        foreach ($requeteess->fetchAll() as $x) {
            $_SESSION['num']=$x['nb_likes'];
        }
        header('Location: ../blog.php');
    }
}
elseif($donnees = !$requete->fetch()) {
        $requete = $bdd->prepare("INSERT INTO likes(id_post,id_user,likes) VALUES(:id_post,:id_user,'1');");
        $requete->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requete->bindValue(':id_user', $id_user, PDO::PARAM_STR);
        $requete->execute();

        $requetees = $bdd->prepare("UPDATE post SET nb_likes=nb_likes+1 WHERE id = :id_post");
        $requetees->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requetees->execute();

        $requeteess = $bdd->prepare("SELECT nb_likes FROM post WHERE id = :id_post");
        $requeteess->bindValue(':id_post', $id_post, PDO::PARAM_STR);
        $requeteess->execute();

         foreach ($requeteess->fetchAll() as $x) {
            $_SESSION['num']=$x['nb_likes'];
        }
        
        header('Location: ../blog.php');
}

?>