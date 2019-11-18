<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM  post WHERE Ville = :ville ORDER BY `post`.`id` DESC ");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
            $_SESSION['id_post'] = $ligne['id'];
            echo '<div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ml-2">
                                            <input type="hidden" name="id_post" value=';echo($_SESSION['id_post']);
                                        echo'/>
                                            <div class="h5 m-0">' . $ligne['nom'] . ' ' . $ligne['prenom'] . ' </div>
                                            <div class="h7 text-muted">' . $ligne['nom_evenement'] . '</div>
                                        </div>
                                    </div>
                                    <!-- BOUTON SIGNALER POUR LES PERSO --> ';
                                    if(isset($_SESSION['status_bde']) && $_SESSION['status_bde'] == "3") {;
                                        echo '
                                     <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <a class="dropdown-item" href="#">Signaler</a>
                                            </div>
                                        </div>
                                    </div>';
                                    };
                                    echo '

                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                   ' . $ligne['message'] . '
                                </p>
                                <img class="image_poste" src="' . $ligne['images'] . '">
                            </div>
                            <div class="card-footer">
                            <a href="requests/scriptLikes.php?id_p='.$ligne['id'].'&amp;id_u='.$ligne['id_users'].'" class="card-link"><i class="fa fa-gittip"></i> '.$ligne['nb_likes'].'</a>
                                <a onclick="cacherComment()" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            </div> <div id="monCommentaire"> ';
                                include "commentaires.php";
                                include "afficherCommentaire.php";
            echo'</div></div>';
            
           }   
?>
