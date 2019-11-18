<?php
if(!isset($_SESSION)){
    session_start();}
include 'connexionBdd.php';



$requeteee = $bdd->prepare("DELETE FROM `carousel`");
$requeteee->execute();

$requeteees = $bdd->prepare("TRUNCATE `bdd_site_bde`.`quantites`");
$requeteees->execute();

$requetes = $bdd->prepare("INSERT INTO quantites(Id_goodie_vetements, Quantite, Designation, Link, Ville) SELECT Id_goodie_vetements, SUM(Quantite) AS Quantite, Designation, Link, Ville FROM commande GROUP BY Id_goodie_vetements ORDER BY `Quantite` DESC");
$requetes->execute(); 


$requete = $bdd->prepare("INSERT INTO carousel(nom_produit, image_url) SELECT Designation, Link FROM quantites WHERE Ville=:ville LIMIT 3");
$requete->bindValue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();   

$requetee = $bdd->prepare("SELECT nom_produit, image_url FROM carousel");
$requetee->execute();  
$ligne=$requetee->fetchAll();
                echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/top1.png" alt="fondtop1">
                        <img class="carousel-caption ml-auto" src="'.$ligne[0][1].'" alt="Top vente 1">
                        <div class="carousel-caption">
                            <h3>'.htmlspecialchars($ligne[0][0]).'</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/top2.png" alt="fondtop2">
                        <img class="carousel-caption ml-auto" src="'.$ligne[1][1].'" alt="Top vente 2">
                        <div class="carousel-caption">
                            <h3>'.htmlspecialchars($ligne[1][0]).'</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/top3.png" alt="fondtop3">
                        <img class="carousel-caption ml-auto" src="'.$ligne[2][1].'" alt="Top vente 3">
                        <div class="carousel-caption">
                            <h3>'.htmlspecialchars($ligne[2][0]).'</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>';
?>