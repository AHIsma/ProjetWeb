<?php

$bdd = new PDO('mysql:host=localhost;dbname=bdd_site_bde;charset=utf8', 'root','');
$ville = $_SESSION['Ville'];
 
echo " <strong> Bde Exia CESI ".$ville." </strong>";
?>