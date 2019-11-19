<?php

    session_start();
    
    if(isset($_SESSION['enligne']) && $_SESSION['enligne'] == "1") {
        include 'nav_connecte.php';
    }
    else {
        include 'nav_nonconnecte.php';
    }
?>