<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM  goodie_vetements WHERE Ville = :ville");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            echo "<div>
            <img src='" . $ligne['Link'] . "'/>
            <strong> ".$ligne['Prix']."euros </strong>
            <div> ".$ligne['Designation']." </div>
            </div>";
           }   
?>
