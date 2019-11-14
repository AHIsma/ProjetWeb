<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>BOUTIQUE BDE CESI</title>
</head>

<body class="body_boutique">
    <header>
    <?php
            include 'requests/scriptOnlineOffline.php';
        ?>
    </header>

    <main class="main_boutique">
        <div class="search-container">
            <form autocomplete="off" class="search" action="boutique_categories">
                <div class="autocomplete" >
                <input id="myInput" type="text" placeholder="RECHERCHE" name="id">
                <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/top1.png" alt="Sweat CESI REIMS">
                    <div class="carousel-caption">
                        <h3>Sweat a capuche</h3>
                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/top2.png" alt="Tasse CESI REIMS">
                    <div class="carousel-caption">
                        <h3>Tasse</h3>
                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/top3.png" alt="USB CESI REIMS">
                    <div class="carousel-caption">
                        <h3>USB</h3>
                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <form class="form_scroll" action="#articles">
            <input class="voir_plus_top voir_plus_scroll" type="submit" value="PLUS DE PRODUITS" />
        </form>

        <div id="articles" class="container mydiv">
            <?php
            include 'nav_categories.php';
        ?>

            <div class="row">
                <div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <div class="bbb_deals_slider_container">
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src="assets/images/sweat.png"
                                        alt="">
                                    <a href="panier.php" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a>
                                </div>

                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="bbb_deals_item_category"><a href="boutique_categories#sweat">Sweats</a></div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a>
                                            <div class="bbb_deals_item_name">Sweat CESI REIMS</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">40€</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <a href="index.php" class="panier"></a>
                        <div class="bbb_deals_slider_container">
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src="assets/images/pull.png"
                                        alt=""><a href="panier.php" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a></div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="bbb_deals_item_category"><a href="boutique_categories#pulls">Pulls</a></div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a>
                                            <div class="bbb_deals_item_name">Pull eSPORT REIMS</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">30€</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <a href="index.php" class="panier"></a>
                        <div class="bbb_deals_slider_container">
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src="assets/images/tasse.png"
                                        alt=""><a href="panier.php" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a></div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="bbb_deals_item_category"><a href="boutique_categories#tasses">Tasses</a></div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a>
                                            <div class="bbb_deals_item_name">Tasse eSPORT REIMS</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">20€</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- bbb_deals -->
                    <div class="bbb_deals">
                        <a href="index.php" class="panier"></a>
                        <div class="bbb_deals_slider_container">
                            <div class=" bbb_deals_item">
                                <div class="bbb_deals_image"><img class="image_article" src="assets/images/usb.png"
                                        alt=""><a href="panier.php" class="panier" style="display: none;">
                                        <i class="fa fa-cart-plus fa-3x panier_icone"></i></a></div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="bbb_deals_item_category"><a href="boutique_categories#usb">Clés USB</a></div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <a>
                                            <div class="bbb_deals_item_name">Clé USB BDE CESI REIMS</div>
                                        </a>
                                        <div class="bbb_deals_item_price ml-auto">10€</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
            include 'footer.php';
        ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.12.3.js" integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
    crossorigin="anonymous"></script>
<script src="assets/js/javaS2.js"></script>

</html>