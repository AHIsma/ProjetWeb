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
    <title>ACTIVITÉS BDE CESI</title>
</head>

<body class="body_activites">
    <header>
        <?php
            include 'requests/scriptOnlineOffline.php';
        ?>
    </header>

    <main class="main_boutique">
        <div id="articles" class="container mydiv">
            <p></p>
            <p></p>
            <div class="nav_categories">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav navbar-center flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="activites.php?id=avenir">Activités à venir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="activites.php?id=passee">Activités passées</a>
                        </li>
                </nav>
            </div>

            <div class="row">
                <?php

if (isset($_GET['id']) && $_GET['id'] ===  "passee") {
 include 'requests/generate_activites_past.php';
}   
 
else {

    include 'requests/generate_activites.php';
}    
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