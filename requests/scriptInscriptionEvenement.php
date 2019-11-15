<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';

$requete = $bdd->prepare("SELECT * FROM inscritevenement WHERE `id_evenement`=:Id_evenement;");
    // Liaison des variables de la requête préparée aux variables PHP
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);

        $requete->execute();

    if (!$requete->fetch()){
		$requete = $bdd->prepare("INSERT INTO inscritevenement SELECT et.Id as Id_user, et.Nom as Nom, et.Prenom as Prenom, ev.ID as Id_evenement, ev.Designation as Designation
		FROM etudiantinscrit et INNER JOIN evenement ev
		WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
		$requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
		$requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
		$requete->execute();
		echo "inscription ajouté";
    }
    else {
    	echo"déjà inscrit à l'évènement"# code...
    }
?>
    <br>
		<a href="../activites.php">revenir aux activités </a>
