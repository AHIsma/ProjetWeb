<?php

function totalPanier() {

$idUser = 1;
$total = 0;

//$bdd = new PDO('mysql:host=localhost;dbname=testprojet;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT `Id`, `Designation`, `Prix`, `Quantité`, `Id_user` FROM `panier` WHERE `Id_user` = :id");

$requete->bindValue(':id', $idUser, PDO::PARAM_STR);

$requete->execute();

$result = $requete->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

foreach ($result as &$value) {
    $total = $total + $value[Prix] * $value[Quantité];
}
return $total;

}
?>