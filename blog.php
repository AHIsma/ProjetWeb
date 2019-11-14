<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>BLOG</title>
</head>

<body class="body_blog">
    <header>
        <?php
            include 'nav_nonconnecte.php';
        ?>
    </header>

    <main class="main_blog">
        <div class="container-fluid gedf-wrapper">
            <div class="row">
                <div class="col-md-6 gedf-main">

                    <!--- \\\\\\\Post-->
                    <div class="card gedf-card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                        aria-controls="posts" aria-selected="true">Poster une photo</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts" role="tabpanel"
                                    aria-labelledby="posts-tab">
                                    <div class="form-group">
                                        <label class="sr-only" for="message">post</label>
                                        <textarea class="form-control" id="message" rows="3"
                                            placeholder="Tu peux poster et discuter avec les autres participants sur des évènement auxquels t'as déjà participer ....."></textarea>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Charger l'image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-toolbar justify-content-between">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary">poster</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ml-2">
                                            <div class="h5 m-0">Nom Prénom</div>
                                            <div class="h7 text-muted">Nom de l'évènement</div>
                                        </div>
                                    </div>
                                    <!-- BOUTON SIGNALER POUR LES PERSO -->
                                    <!-- <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <a class="dropdown-item" href="#">Signaler</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem
                                    eos
                                    ipsa praesentium esse magnam nemo dolor
                                    sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                                <img class="image_poste" src="assets/images/sweat.png">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#newcommentaire" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            </div>
                            <?php
                                include 'commentaires.php';
                            ?>
                        </div>
                        <!-- Post /////-->


                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ml-2">
                                            <div class="h5 m-0">Nom Prénom</div>
                                            <div class="h7 text-muted">Nom de l'évènement</div>
                                        </div>
                                    </div>
                                    <!-- BOUTON SIGNALER POUR LES PERSO -->
                                    <!-- <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <a class="dropdown-item" href="#">Signaler</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem
                                    eos
                                    ipsa praesentium esse magnam nemo dolor
                                    sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                                <img class="image_poste" src="assets/images/sweat.png">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            </div>
                        </div>
                        <!-- Post /////-->


                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ml-2">
                                            <div class="h5 m-0">Nom Prénom</div>
                                            <div class="h7 text-muted">Nom de l'évènement</div>
                                        </div>
                                    </div>
                                    <!-- BOUTON SIGNALER POUR LES PERSO -->
                                    <!-- <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <a class="dropdown-item" href="#">Signaler</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem
                                    eos
                                    ipsa praesentium esse magnam nemo dolor
                                    sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                                <img class="image_poste" src="assets/images/sweat.png">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            </div>
                        </div>
                        <!-- Post /////-->



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