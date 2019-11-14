<?php 
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("INSERT INTO inscritevenement SELECT et.Id as Id_user, et.Nom as Nom, et.Prenom as Prenom, ev.ID as Id_evenement, ev.Designation as Designation
FROM etudiantinscrit et INNER JOIN evenement ev
WHERE `et`.`Id` =:Id_user AND `ev`.`ID`=:Id_evenement");
        $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
        $requete->bindvalue(':Id_evenement', $_GET['id_evenement'], PDO::PARAM_STR);
        $requete->execute();
        echo "article ajouté";

?>

<br>
<a href="activites_boutique">revenir aux activités </a>
