<script src="api/scriptSignalEvents.js"></script>

<?php
if(!isset($_SESSION)){
    session_start();}

include 'connexionBdd.php';
$requete = $bdd->prepare("SELECT * FROM  evenement WHERE Ville = :ville AND Date_prv > CURRENT_DATE()");
        $requete->bindvalue(':ville', $_SESSION['Ville'], PDO::PARAM_STR);
        $requete->execute();

        foreach ($requete->fetchAll() as $ligne) {
        	echo '<div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <a href="index.php" class="panier"></a>
                        <div class="bbb_deals_slider_container">';
                        if(isset($_SESSION['status_bde']) && $_SESSION['status_bde'] == "3") {; echo '
                        <a href="http://localhost/BDE/ProjetWeb/activites.php?id=avenir" onclick="flagEvent('; echo $ligne['ID']; echo ')"><i class="fa fa-exclamation-triangle fa-1x panier_icone"></i></a>'; };
                        echo '
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src="' . $ligne['Images'] . '"
                                        alt="">';
                                        if(isset($_SESSION['enligne']) && $_SESSION['enligne'] == "1") {;
                                            echo '
                                        <a href="requests/scriptAjoutPanier_bdd.php?id_evenement=' . $ligne['ID'] . '" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a>
                                        '; } echo '
                                        </div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a href="index.php">
                                            <div class="bbb_deals_item_name">'.$ligne['Designation'].'</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">'.$ligne['Prix'].'€ </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
           }   
?>
