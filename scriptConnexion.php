<?php

include 'connexionBdd.php';

// Récupération des données utilisateurs
$e_mail = isset($_POST['email']) ? $_POST['email']: NULL;
$mot_DePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse']: NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT * FROM etudiantinscrit WHERE Email=:email
AND Mdp=:motdepasse");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
$requete->bindValue(':motdepasse', $mot_DePasse, PDO::PARAM_STR);
// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();


if($ligne && $ligne['Status'] === '1'){
 	if(!isset($_SESSION)){
    session_start();} 
 		$_SESSION['Ville'] = $ligne['Ville'];
 		$_SESSION['Id_user']= $ligne['Id'];
 		$_SESSION['Nom']= $ligne['Nom'];
 		$_SESSION['Prenom']= $ligne['Prenom'];
 	echo "vous etes un etudiant";
 	header('Location: /ProjetWeb/boutique.php');
 	
 exit();

}
elseif ($ligne && $ligne['Status'] === '2') {
		if(!isset($_SESSION)){
    session_start();}
 			$_SESSION['Ville'] = $ligne['Ville'];
 			$_SESSION['Id_user']= $ligne['Id'];
		echo "vous etes un personnel";
		header('Location: /ProjetWeb/boutique.php');
		
    exit();
}
elseif ($ligne && $ligne['Status'] === '3') {
		if(!isset($_SESSION)){
    session_start();}
 			$_SESSION['Ville'] = $ligne['Ville'];
    		$_SESSION['Id_user']= $ligne['Id'];
		echo "vous etes un personnel";
		header('Location: /ProjetWeb/boutique.php');
		
	exit();
}
else
{
    echo  $ligne? 'Connexion réussie.' : include 'connexion_echouee.php';
}

// Fermeture de la connexion
$requete->closeCursor();

?>
