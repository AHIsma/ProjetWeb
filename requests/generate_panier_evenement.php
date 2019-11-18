<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM panier WHERE Id_user = :id_user AND Id_evnt > 0");
        $requete->bindvalue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            echo '<div class="row item">
                    <img class="image" src=' . $ligne['Link'] . '>
                    <span class="name">'.$ligne['Designation'].'</span>
                    <span class="price">'.$ligne['Prix'].'€ </span>
                    <span class="action">
                        <a href="requests/scriptSupprLignePanier_bdd.php?idEvenement=' . $ligne['Id_evnt'] . '" class="del"><i class="fa fa-trash"></i></a>
                    </span>
                  </div>';
        }

?>