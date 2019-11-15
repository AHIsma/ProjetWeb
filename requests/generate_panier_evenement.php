<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM paniers WHERE Id_user = :Id_user");
        $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            echo '<div class="row item">
                    <img class="image" src=' . $ligne['Images'] . '>
                    <span class="name">'.$ligne['Designation'].'</span>
                    <span class="price">'.$ligne['Prix'].'€ </span>
                    <span class="action">
                        <a href="" class="del"><i class="fa fa-trash"></i></a>
                    </span>
                  </div>';
        }

?>