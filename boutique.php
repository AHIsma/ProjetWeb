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
    <title>BDE CESI REIMS</title>
</head>

<body class="body_boutique">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- TITRE DYNAMIQUE -->
            <a class="navbar-brand" href="#"><?php include 'generate_title.php'?></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link nav_boutique" href="">BOUTIQUE</a>
                    <a class="nav-item nav-link nav_activites" href="">ACTIVITÉS</a>
                    <a class="nav-item nav-link nav_blog" href="">BLOG</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="main_boutique">
        <div class="search-container">
            <form class="search" action="action_page.php">
                <input type="text" placeholder="RECHERCHE" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
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
                        <form action="http://google.com">
                            <input class="voir_plus_top" type="submit" value="VOIR PLUS" />
                        </form>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/top2.png" alt="Tasse CESI REIMS">
                    <div class="carousel-caption">
                        <h3>Tasse</h3>
                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                        <form action="http://google.com">
                            <input class="voir_plus_top" type="submit" value="VOIR PLUS" />
                        </form>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/top3.png" alt="USB CESI REIMS">
                    <div class="carousel-caption">
                        <h3>USB</h3>
                        <p class="d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                        <form action="http://google.com">
                            <input class="voir_plus_top" type="submit" value="VOIR PLUS" />
                        </form>
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
            include 'categories.php';
        ?>
        
            <div class="row">

                <!-- liste des produits -->
         <?php
            include 'generate_prods.php';
        ?>
                
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