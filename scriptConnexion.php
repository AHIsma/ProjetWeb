<?php
// Adapter dbname et mot de passe si besoin
$bdd = new PDO('mysql:host=localhost;dbname=bdd_site_bde;charset=utf8', 'root','');
// Récupération des données utilisateurs
$e_mail = isset($_POST['email']) ? $_POST['email']: NULL;
$mot_DePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse']: NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT Email, Status FROM etudiantinscrit WHERE Email=:email
AND Mdp=:motdepasse");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
$requete->bindValue(':motdepasse', $mot_DePasse, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();
if($ligne && $ligne['Status'] === '2')
{
	$requete->execute();
    // include 'index.php';
    echo "vous etes membre du bde";
	exit();
}
elseif ($ligne && $ligne['Status'] === '3') {
    $requete->execute();
	echo "vous etes un personnel";
	exit();
}
else
{
    echo  $ligne? 'Connexion réussie.' : include 'connexion_echouee.php';
}
// Fermeture de la connexion
$requete->closeCursor();
?>
