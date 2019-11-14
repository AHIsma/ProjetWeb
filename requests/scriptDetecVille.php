<?php
if(isset($_GET['campus'])) {

session_start();

$_SESSION['Ville'] = $_GET['campus'];

}



?>