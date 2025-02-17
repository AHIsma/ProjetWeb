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
    <title>Connexion</title>
</head>

<body class="body_connexion">

    <main>
            <form id="login" method="post" action="requests/scriptConnexion.php" autocomplete="on">
                <h1 class="titre_connexion">CONNEXION</h1>
                <div class="form_connex">
                    <p class="email_connexion">
                        <label for="username" class="uname" data-icon="u"> EMAIL </label><br>
                        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                        <input id="username" name="email" required="required" type="text"
                            placeholder="janedoe123@email.com" />
                    </p>
                    <p class="pass_connexion">
                        <label for="password" class="youpasswd" data-icon="p"> MOT DE PASSE </label><br>
                        <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                        <input id="password" name="motDePasse" required="required" type="password"
                            placeholder="************************" />
                    </p>
                </div>
                <p class="login button_connex">
                    <input type="submit" value="SE CONNECTER       &gt" />
                </p>
            </form>

    </main>

    <?php
            include 'cookies.php';
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

</html>