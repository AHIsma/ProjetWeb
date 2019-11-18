        <div class="nav_connecte">
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between ml-auto">
                <ul class="navbar-nav  ml-auto flex-row">
                <?php
                    if(isset($_SESSION['status_bde']) && $_SESSION['status_bde'] == "2") 
                    {
                        echo '<li class="nav-item"><a class="nav-link" href="backOffice.php"><i class="fa fa-edit"></i></a></li>';
                    }

                ?>
                    <li class="nav-item">
                    <a class="nav-link" href="panierEvent.php"><i class="fa fa-list"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier.php"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link deco" href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><i
                                class="fa fa-user"></i></a>
                        <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Déconnexion <i class="fa fa-lock"></i></h4>
                                    </div>
                                    <div class="modal-body"><i class="fa fa-question-circle"></i> Voulez-vous vraiment
                                        vous déconnecter? </div>
                                    <div class="modal-footer"><a href="requests/scriptLogout.php"
                                            class="btn btn-primary btn-block">Se déconnecter</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="nav_all">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="boutique.php"><?php include 'requests/generate_title.php'?></a>
                <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link nav_boutique" href="boutique.php">BOUTIQUE</a>
                        <a class="nav-item nav-link nav_activites" href="activites.php">ACTIVITÉS</a>
                        <a class="nav-item nav-link nav_blog" href="blog.php">BLOG</a>
                    </div>
                </div>
            </nav>
        </div>