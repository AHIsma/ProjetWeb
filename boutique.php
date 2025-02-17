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

        <?php
            include 'requests/scriptCarousel.php';
        ?>

        <form class="form_scroll" action="#articles">
            <input class="voir_plus_top voir_plus_scroll" type="submit" value="PLUS DE PRODUITS" />
        </form>

        <div id="articles" class="container mydiv">
            <?php
            include 'nav_categories.php';
        ?>

            <div class="row">
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
<script src="assets/js/autocomplete.js"></script>

</html>