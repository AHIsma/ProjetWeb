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
        <form id="login" method="post" action="requests/scriptInscription.php" autocomplete="on">
            <h1 class="titre_connexion">INSCRIPTION</h1>
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
                    <input id="password" name="Pass" required="required" type="password"
                        placeholder="************************" />
                </p>
                <p class="pass_connexion">
                    <label for="password" class="youpasswd" data-icon="p"> NOM </label><br>
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    <input id="password" name="nom" required="required" type="text" placeholder="Doe" />
                </p>
                <p class="pass_connexion">
                    <label for="password" class="youpasswd" data-icon="p"> PRENOM </label><br>
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    <input id="password" name="prenom" required="required" type="text" placeholder="Jane" />
                </p>
                <p class="pass_connexion">
                    <label for="password" class="youpasswd" data-icon="p"> CAMPUS </label><br>
                    <i class="fa fa-building fa-lg fa-fw" aria-hidden="true"></i>
                    <select id="password" name="ville">
                        <option value="Arras">CESI École d’Ingénieurs ARRAS</option>
                        <option value="Lille">CESI École d’Ingénieurs LILLE</option>
                        <option value="Rouen">CESI École d’Ingénieurs ROUEN</option>
                        <option value="Caen">CESI École d’Ingénieurs CAEN</option>
                        <option value="Reims">CESI École d’Ingénieurs REIMS</option>
                        <option value="Nancy">CESI École d’Ingénieurs NANCY</option>
                        <option value="Strasbourg">CESI École d’Ingénieurs STRASBOURG</option>
                        <option value="Paris">CESI École d’Ingénieurs PARIS</option>
                        <option value="Le Mans">CESI École d’Ingénieurs LE MANS</option>
                        <option value="Orleans">CESI École d’Ingénieurs ORLEANS</option>
                        <option value="Brest">CESI École d’Ingénieurs BREST</option>
                        <option value="Saint-Nazaire">CESI École d’Ingénieurs SAINT-NAZAIRE</option>
                        <option value="Nantes">CESI École d’Ingénieurs NANTES</option>
                        <option value="Dijon">CESI École d’Ingénieurs DIJON</option>
                        <option value="La Rochelle">CESI École d’Ingénieurs LA ROCHELLE</option>
                        <option value="Angouleme">CESI École d’Ingénieurs ANGOULEME</option>
                        <option value="Lyon">CESI École d’Ingénieurs LYON</option>
                        <option value="Grenoble">CESI École d’Ingénieurs GRENOBLE</option>
                        <option value="Bordeaux">CESI École d’Ingénieurs BORDEAUX</option>
                        <option value="Toulouse">CESI École d’Ingénieurs TOULOUSE</option>
                        <option value="Pau">CESI École d’Ingénieurs PAU</option>
                        <option value="Montpellier">CESI École d’Ingénieurs MONTPELLIER</option>
                        <option value="Aix-En-Provence">CESI École d’Ingénieurs AIX-EN-PROVENCE</option>
                        <option value="Nice">CESI École d’Ingénieurs NICE</option>
                    </select>
                </p>
                <p class="pass_connexion">
                    <label for="password" class="youpasswd" data-icon="p"> SEXE </label><br>
                    <i class="fa fa-male fa-lg fa-fw" aria-hidden="true"></i>
                    <input id="password" name="gender" required="required" type="text" placeholder="Homme/Femme" />
                </p>
                <p class="pass_connexion">
                    <label for="password" class="youpasswd" data-icon="p"> TELEPHONE </label><br>
                    <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
                    <input id="password" name="tel" required="required" type="text" placeholder="06 13 12 19 21" />
                </p>
            </div>
            <p class="login button_connex">
                <input type="submit" value="S'INSCRIRE       &gt" />
            </p>
        </form>

    </main>

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