<?php 

if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';

$requete = $bdd->prepare("SELECT * FROM `commande` C INNER JOIN `evenement` E 
						  WHERE C.id_user=:Id_user AND C.`id_evenement` =E.ID AND E.Date_prv < CURRENT_DATE");

$requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR); 
$requete->execute();
foreach ($requete->fetchAll() as $ligne) {
	echo '<option value="' . $ligne['ID'] . '" href="requests/scriptTo_post.php?designation=' . $ligne['designation'] .'">' . $ligne['Designation'] . '</option>';
	}
?>

