<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';

$requete = $bdd->prepare("SELECT * FROM paniers WHERE `Id_evenement`=:Id_evenement;");
    // Liaison des variables de la requête préparée aux variables PHP
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);

        $requete->execute();

    if (!$requete->fetch()){

		$requete = $bdd->prepare("INSERT INTO paniers SELECT ET.Id as Id_user, ET.Nom as Nom, ET.Prenom as Prenom, ET.Email as email, ev.ID as Id_evenement, ev.Designation as Designation, ev.Prix as Prix, ev.Images as Images
		FROM etudiantinscrit ET INNER JOIN evenement ev
		WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
		$requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
		$requete->execute();
		echo "article ajouté au panier";
	}
	else {
    	echo"déjà inscrit à l'évènement";
    }

?>

<br>
<a href="../activites.php">revenir aux activités </a>
