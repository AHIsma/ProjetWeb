var express = require('express');
var mysql = require('mysql');
var cors = require('cors');

// Create express server
const app = express();

var bodyParser = require('body-parser')
app.use(bodyParser.json()); // to support JSON-encoded bodies
app.use(bodyParser.urlencoded({ // to support URL-encoded bodies
    extended: true
}));

app.use(cors());

//on initialise le domaine du serveur ainsi que son port
var hostname = 'localhost';
var port = 3000;

var myRouter = express.Router();

//on crée la connexion avec la BDD
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'bdd_site_bde'
});

connection.connect(function (err) {
    //si la connexion est impossible on fait afficher l'erreur
    if (err) {
        console.error('error connecting : ' + err.stack);
        return;
    }

    //si la connexion réussit on affiche l'id du serveur
    console.log('connected as id ' + connection.threadId);
});

myRouter.route('/events') //Pour gérer les evènements
    .post(function (req, res) { //pour ajouter un événement
        //var sql = "INSERT INTO evenements (nom, description, date, prix) VALUES ('??', '??', ??, ??)";
        //var inserts = [req.body.nom, req.body.description, req.body.date, req.body.prix];
        /*var sql = "INSERT INTO evenements (nom, description, prix) VALUES ('??', '??', '??')";
        var inserts = [req.body.nom, req.body.description, req.body.prix];
        sql = mysql.format(sql, inserts);
        connection.query(sql, function (error, results, fields) {
            if (error) throw error;
        });*/
        connection.query("INSERT INTO evenement (Designation, Date_prv, Prix, Ville, Images) VALUES ('" + req.body.name + "', '" + req.body.date + "', '" + req.body.price + "', '" + req.body.city + "', '" + req.body.picture + "')", function (error, results, fields) {
            if (error) throw error;
        });

        res.json({
            message: "Un évènement a été ajouté à la BD",
            nom: req.body.name,
            date: req.body.date,
            prix: req.body.price,
            ville: req.body.city,
            picture: req.body.picture,
            method: req.method
        }); //affichage en json pour voir si la requête a fonctionné
    })
    .delete(function (req, res) { //pour supprimer un événement
        connection.query("DELETE FROM evenement WHERE id = '" + req.body.id + "'", function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "Un évènement a été supprimé de la BD",
            id: req.body.id
        });
    })
    .patch(function (req, res) { //pour modifier un événement
        connection.query("UPDATE evenement SET Designation = '" + req.body.name + "', Date_prv = '" + req.body.date + "', Prix = " + req.body.price + ", Images = '" + req.body.picture + "', Ville = '" + req.body.city + "' WHERE evenement.id = " + req.body.id, function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "L'évènement a été mis à jour",
            name: req.body.name,
            date: req.body.date,
            price: req.body.price,
            ville: req.body.city,
            picture: req.body.picture,
            id: req.body.id
        })
    })

myRouter.route('/flag') //gestion du signalement des événements
    .patch(function (req, res) {
        if (req.body.type == 1) { //on signale un événement
            connection.query("UPDATE evenement SET flag = 1 WHERE evenement.id = '" + req.body.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "L'évènement a été signalé",
                id: req.body.id
            });
        }
        if (req.body.type == 0) { //on enlève le signalement d'un événement
            connection.query("UPDATE evenement SET flag = 0 WHERE evenement.id = '" + req.body.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "Le signalement a été supprimé",
                id: req.body.id
            });
        }
    });

myRouter.route("/products") //requêtes pour gérer les produits
    //on ajoute un produit
    .post(function (req, res) {
        connection.query("INSERT INTO goodie_vetements (Designation, Prix, Ville, Link, Taille, Categorie) VALUES ('" + req.body.name + "', '" + req.body.price + "', '" + req.body.city + "', '" + req.body.picture + "', '" + req.body.size + "', '" + req.body.category + "')", function (error, results, fields) {
            if (error) throw error;
        });
        res.json({
            message: "Produit créé avec les infos suivantes :",
            name: req.body.name,
            price: req.body.price,
            ville: req.body.city,
            picture: req.body.picture,
            methode: req.method
        });
    })
    //on supprime un produit
    .delete(function (req, res) {
        connection.query("DELETE FROM goodie_vetements WHERE id = '" + req.body.id + "'", function (error, results, fields) {
            if (error) throw error;
        });

        res.json({
            message: "Produit suivant supprimé :",
            id: req.body.id
        });
    })
    //on modifie un produit
    .patch(function (req, res) {
        connection.query("UPDATE goodie_vetements SET Designation = '" + req.body.name + "', Prix = " + req.body.price + ", Ville = '" + req.body.city + "', Link = '" + req.body.picture + "', Taille = '" + req.body.size + "', Categorie = '" + req.body.category +"' WHERE goodie_vetements.id = " + req.body.id, function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "Le produit a été mis à jour",
            name: req.body.name,
            price: req.body.price,
            ville: req.body.city,
            picture: req.body.picture,
            id: req.body.id
        })
    });

/*myRouter.route("/articles")
    //on ajoute un article
    .post(function (req, res) {
        connection.query("INSERT INTO articles (name, content) VALUES ('" + req.body.name + "', '" + req.body.content + "')", function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "L'article a été créé",
            name: req.body.name,
            content: req.body.content
        })
    })

    .delete(function (req, res) {
        connection.query("DELETE FROM articles WHERE id = '" + req.body.id + "'", function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "L'article a été supprimé",
            id: req.body.id
        })
    })

    .patch(function (req, res) {
        connection.query("UPDATE articles SET name = '" + req.body.name + "', content = '" + req.body.content + "' WHERE id = " + req.body.id, function (error, results, fields) {
            if (error) throw error;
        })


        res.json({
            message: "L'article a été modifié",
            name: req.body.name,
            content: req.body.content
        })
    })*/

myRouter.route("/comments")
    //on signale un commentaire
    .patch(function (req, res) {
        if (req.body.type == 1) { //on signale un commentaire
            connection.query("UPDATE commentaires SET flag = 1 WHERE commentaires.id = '" + req.body.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "Le commentaire a été signalé",
                id: req.body.id
            });
        }
        if (req.body.type == 0) { //on enlève le signalement d'un commentaire
            connection.query("UPDATE commentaires SET flag = 0 WHERE commentaires.id = '" + req.body.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "Le signalement a été supprimé",
                id: req.body.id
            });
        }
    });

app.use(myRouter); //on dit à l'application d'utiliser le routeur

app.listen(port, hostname, function () { //on dit à l'application d'écouter ce qui se passe sur le port spécifié au début
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port);
    //et on envoie un message pour confirmer que le serveur s'est allumé sans soucis
});