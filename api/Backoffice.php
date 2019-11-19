<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Back-office</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <script src="scriptBackOffice.js"></script>
</head>

<body>
    <div class="wrapper">
        <h1>Gestion et administration :</h1>
        <div class="container">
            <div class="events">
                <div class="addEvent">
                    <div>
                        <h2>Ajouter un événement :</h2>
                    </div>
                    <div>
                        Nom de l'événement : <input type="text" id="nameAE" />
                    </div>
                    <div>
                        Date de l'événement : <input type="date" id="dateAE" />
                    </div>
                    <div>
                        Prix d'entrée de l'événement : <input type="number" id="priceAE" />
                    </div>
                    <div>
                        Ville de l'événement : <input type="text" id="cityAE" />
                    </div>
                    <div>
                        Image de l'événement (URL) : <input type="text" id="picAE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddEvent()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteEvent">
                    <div>
                        <h2>Supprimer un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idDE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteEvent()" value="Envoyer" />
                    </div>
                </div>
                <div class="editEvent">
                    <div>
                        <h2>Modifier un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idEE" />
                    </div>
                    <div>
                        Nom de l'événement : <input type="text" id="nameEE" />
                    </div>
                    <div>
                        Date de l'événement : <input type="date" id="dateEE" />
                    </div>
                    <div>
                        Prix d'entrée de l'événement : <input type="number" id="priceEE" />
                    </div>
                    <div>
                        Ville de l'événement : <input type="text" id="cityEE" />
                    </div>
                    <div>
                        Image de l'événement (URL) : <input type="text" id="picEE" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditEvent()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="addProduct">
                    <div>
                        <h2>Ajouter un produit :</h2>
                    </div>
                    <div>
                        Nom du produit : <input type="text" id="nameAP" />
                    </div>
                    <div>
                        Prix du produit : <input type="number" id="priceAP" />
                    </div>
                    <div>
                        Taille du produit : <input type="text" id="sizeAP" />
                    </div>
                    <div>
                        Ville du produit : <input type="text" id="cityAP" />
                    </div>
                    <div>
                        Image du produit (URL) : <input type="text" id="picAP" />
                    </div>
                    <div>
                        Catégorie du produit : <input type="text" id="catAP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddProduct()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteProduct">
                    <div>
                        <h2>Supprimer un produit :</h2>
                    </div>
                    <div>
                        ID du produit : <input type="number" id="idDP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteProduct()" value="Envoyer" />
                    </div>
                </div>
                <div class="editProduct">
                    <div>
                        <h2>Modifier un produit :</h2>
                    </div>
                    <div>
                        ID du produit : <input type="number" id="idEP" />
                    </div>
                    <div>
                        Nom du produit : <input type="text" id="nameEP" />
                    </div>
                    <div>
                        Prix du produit : <input type="number" id="priceEP" />
                    </div>
                    <div>
                        Taille du produit : <input type="text" id="sizeEP" />
                    </div>
                    <div>
                        Ville du produit : <input type="text" id="cityEP" />
                    </div>
                    <div>
                        Image du produit (URL) : <input type="text" id="picEP" />
                    </div>
                    <div>
                        Catégorie du produit : <input type="text" id="catEP" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditProduct()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <div class="flags">
                <div class="flagProduct">
                    <div>
                        <h2>Signaler un événement :</h2>
                    </div>
                    <div>
                        ID de l'événement : <input type="number" id="idFP" />
                    </div>
                    <div>
                        <form>
                            <select size="2" id="typeFP">
                                <option>Signaler</option>
                                <option>Enlever le signalement</option>
                            </select>
                        </form>
                        <!--Type de signalement : <input type="number" id="typeFP" />-->
                    </div>
                    <div>
                        <input type="button" onclick="sendFormFlagEvent()" value="Envoyer" />
                    </div>
                </div>
                <div class="flagComments">
                    <div>
                        <h2>Signaler un commentaire :</h2>
                    </div>
                    <div>
                        ID du commentaire : <input type="number" id="idFC" />
                    </div>
                    <div>
                        <form>
                            <select size="2" id="typeFC">
                                <option>Signaler</option>
                                <option>Enlever le signalement</option>
                            </select>
                        </form>
                        <!--Type de signalement : <input type="number" id="typeFP" />-->
                    </div>
                    <div>
                        <input type="button" onclick="sendFormFlagComment()" value="Envoyer" />
                    </div>
                </div>
            </div>
            <!--<div class="articles">
                <div class="addArticles">
                    <div>
                        <h2>Ajouter un article :</h2>
                    </div>
                    <div>
                        Nom de l'article : <input type="text" id="nameAA" />
                    </div>
                    <div>
                        Contenu de l'article : <input type="text" id="contentAA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormAddArticle()" value="Envoyer" />
                    </div>
                </div>
                <div class="deleteArticle">
                    <div>
                        <h2>Supprimer un article :</h2>
                    </div>
                    <div>
                        ID de l'article : <input type="number" id="idDA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormDeleteArticle()" value="Envoyer" />
                    </div>
                </div>
                <div class="editArticle">
                    <div>
                        <h2>Modifier un article :</h2>
                    </div>
                    <div>
                        ID de l'article : <input type="number" id="idEA" />
                    </div>
                    <div>
                        Nom de l'article : <input type="text" id="nameEA" />
                    </div>
                    <div>
                        Contenu de l'article : <input type="text" id="contentEA" />
                    </div>
                    <div>
                        <input type="button" onclick="sendFormEditArticle()" value="Envoyer" />
                    </div>
                </div>
            </div>-->
            <div class="listComs">
                <h2>Commentaires signalés :</h2>
                <?php

                    function listFlaggedComs() {
                        $bddComs = new PDO('mysql:host=localhost;dbname=bdd_site_bde;charset=utf8', 'root', '');

                        $requete = $bddComs->prepare("SELECT `id`, `commentaire` FROM `commentaires` WHERE `flag` = 1");
                        $requete->execute();

                        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
                        //print_r($result);
                        foreach ($result as &$value) {
                            echo $value[id];
                            echo "<br />";
                            echo $value[commentaire];
                            echo "<br />";
                            echo "<br />";
                        }
                    }

                    listFlaggedComs();
                ?>
            </div>
            <div class="listEvents">
                <h2>Événements signalés :</h2>
                <?php

                    function listFlaggedEvents() {
                        $bddEvents = new PDO('mysql:host=localhost;dbname=bdd_site_bde;charset=utf8', 'root', '');

                        $requete = $bddEvents->prepare("SELECT `ID`, `Designation` FROM `evenement` WHERE `flag` = 1");
                        $requete->execute();

                        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
                        //print_r($result);
                        foreach ($result as &$value) {
                            echo $value[ID];
                            echo "<br />";
                            echo $value[Designation];
                            echo "<br />";
                            echo "<br />";
                        }
                    }

                    listFlaggedEvents();
                ?>
            </div>
        </div>
    </div>
</body>

</html>