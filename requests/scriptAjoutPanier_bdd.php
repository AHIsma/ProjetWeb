<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';

$requete = $bdd->prepare("SELECT * FROM panier WHERE `Id_evnt`=:Id_evenement;");
    // Liaison des variables de la requête préparée aux variables PHP
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);

        $requete->execute();


    if (!$requete->fetch()){

		$requete = $bdd->prepare("INSERT INTO inscritevent (id_user, nom, prenom, email, id_evenement, designation, prix, Images) SELECT ET.Id as Id_user, ET.Nom as Nom, ET.Prenom as Prenom, ET.Email as email, ev.ID as Id_evenement, ev.Designation as Designation, ev.Prix as Prix, ev.Images as Images
		FROM users ET INNER JOIN evenement ev
		WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
		$requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
		$requete->execute();

    	$requete = $bdd->prepare("INSERT INTO commande (Id_user, nom, prenom, email, Id_evenement, Designation, prix, Link) SELECT ET.Id as Id_user, ET.Nom as Nom, ET.Prenom as Prenom, ET.Email as email, ev.ID as Id_evenement, ev.Designation as Designation, ev.Prix as Prix, ev.Images as Images
		FROM users ET INNER JOIN evenement ev
		WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
		$requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
		$requete->execute();

		$requete = $bdd->prepare("INSERT INTO panier(Id_user,Id_evnt,Designation,Prix,Link) SELECT ET.Id as Id_user, ev.ID as Id_evnt, ev.Designation as Designation, ev.Prix as Prix, ev.Images as Images
		FROM users ET INNER JOIN evenement ev
		WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
		$requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
		$requete->execute();
		echo "article ajouté au panier";
		header('Location: ../panierEvent.php');
	}
	else {
    	echo"déjà inscrit à l'évènement";
    	header('Location: ../panierEvent.php');
    }

?>


