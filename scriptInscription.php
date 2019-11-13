<?php

$bdd = new PDO('mysql:host=localhost;dbname=bdd_site_bde', 'root', '');

// Récupération des données utilisateurs
$e_mail = isset($_POST['email']) ? $_POST['email']: NULL;
$p_word = isset($_POST['Pass']) ? $_POST['Pass']: NULL;
$n_f = isset($_POST['nom']) ? $_POST['nom']: NULL;
$n_p = isset($_POST['prenom']) ? $_POST['prenom']: NULL;
$ville = isset($_POST['ville']) ? $_POST['ville']: NULL;
$sexe = isset($_POST['gender']) ? $_POST['gender']: NULL;
$tel = isset($_POST['tel']) ? $_POST['tel']: NULL;


// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT * FROM etudiantinscrit WHERE Email = :email;");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':email', $e_mail, PDO::PARAM_STR);

$requete->execute();

if (!$requete->fetch())
{

    // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO etudiantinscrit(Email,Mdp,Nom,Prenom,Ville,Sexe,Telephone) VALUES(:email,:Pass,:nom,:prenom,:ville,:gender,:tel);");
    
    $requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
    $requete->bindValue(':Pass', $p_word, PDO::PARAM_STR);
    $requete->bindValue(':nom', $n_f, PDO::PARAM_STR);
    $requete->bindValue(':prenom', $n_p, PDO::PARAM_STR);
    $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
    $requete->bindValue(':gender', $sexe, PDO::PARAM_STR);
    $requete->bindValue(':tel', $tel, PDO::PARAM_STR);
    
    header('Location: connexion.php');
    $requete->execute();
}
else{
  echo "Vous etes deja parmi nous!";
}
?>