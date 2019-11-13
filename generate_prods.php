<?php
if(!isset($_SESSION)){
    session_start();
}

$bdd = new PDO('mysql:host=localhost;dbname=bdd_site_bde;charset=utf8', 'root','');
$requete = $bdd->prepare("SELECT * FROM  goodie_vetements WHERE Ville = :ville");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            echo "<div>
            <img src='" . $ligne['Link'] . "'/>
            <p> ".$ligne['Prix']."euros </p>
            <div> ".$ligne['Designation']." </div>
            </div>";
           }   
?>
