<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM  goodie_vetements WHERE Ville = :ville");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();  
        foreach ($requete->fetchAll() as $ligne) {
        	echo '<div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <a href="index.php" class="panier"></a>
                        <div class="bbb_deals_slider_container">
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src=' . $ligne['Link'] . '
                                        alt=""><a href="index.php" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a></div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="bbb_deals_item_category"><a href="">Pulls</a></div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a href="index.php">
                                            <div class="bbb_deals_item_name">'.$ligne['Designation'].'</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">'.$ligne['Prix'].'euros </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            /*echo "<div>
            <img src='" . $ligne['Link'] . "'/>
            <strong> ".$ligne['Prix']."euros </strong>
            <div> ".$ligne['Designation']." </div>
            </div>";*/
           }   
?>
