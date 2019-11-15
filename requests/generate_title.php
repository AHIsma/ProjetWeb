<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$ville = $_SESSION['Ville'];
 
echo " <strong> CESI École d’Ingénieurs ".$ville." </strong>";
?>