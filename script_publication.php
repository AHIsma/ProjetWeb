<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM  post WHERE Ville = :ville");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            echo '<div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ml-2">
                                            <div class="h5 m-0">' . $ligne['nom'] . ' ' . $ligne['prenom'] . ' </div>
                                            <div class="h7 text-muted">' . $ligne['nom_evenement'] . '</div>
                                        </div>
                                    </div>
                                    <!-- BOUTON SIGNALER POUR LES PERSO -->
                                    <!-- <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <a class="dropdown-item" href="#">Signaler</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                   ' . $ligne['message'] . '
                                </p>
                                <img class="image_poste" src="' . $ligne['images'] . '">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#newcommentaire" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            </div>
                            <?php
                                include "commentaires.php";
                            ?>
                        </div>';
            
           }   
?>
