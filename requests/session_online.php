<?php
$requete = $bdd->prepare("UPDATE users SET online = '1' WHERE Id = :id_user");
$requete->bindValue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);
$requete->execute();

$requetee = $bdd->prepare("SELECT * FROM users WHERE Id = :id_user");
$requetee->bindValue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);
$requetee->execute();
$lignee=$requetee->fetch();

$_SESSION['enligne'] = $lignee['online'];
$_SESSION['status_bde'] = $ligne['Status'];
?>