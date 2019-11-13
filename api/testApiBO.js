var express = require('./node_modules/express');

var hostname = 'localhost';
var port = 3000;

var app = express();

var myRouter = express.Router();

var mysql = require('./node_modules/mysql');
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'testProjet'
});

connection.connect(function (err) {
    if (err) {
        console.error('error connecting : ' + err.stack);
        return;
    }

    console.log('connected as id ' + connection.threadId);
});

myRouter.route('/events') //Pour gérer les evènements
    .post(function (req, res) {
        //var sql = "INSERT INTO evenements (nom, description, date, prix) VALUES ('??', '??', ??, ??)";
        //var inserts = [req.query.nom, req.query.description, req.query.date, req.query.prix];
        /*var sql = "INSERT INTO evenements (nom, description, prix) VALUES ('??', '??', '??')";
        var inserts = [req.query.nom, req.query.description, req.query.prix];
        sql = mysql.format(sql, inserts);
        connection.query(sql, function (error, results, fields) {
            if (error) throw error;
        });*/
        connection.query("INSERT INTO evenements (nom, description, date, prix) VALUES ('" + req.query.nom + "', '" + req.query.description + "', '" + req.query.date + "', '" + req.query.prix + "')", function (error, results, fields) {
            if (error) throw error;
        });

        res.json({
            message: "Un évènement a été ajouté à la BD",
            nom: req.query.nom,
            description: req.query.description,
            date: req.query.date,
            prix: req.query.prix,
            method: req.method
        });
    })
    .delete(function (req, res) {
        connection.query("DELETE FROM evenements WHERE id = '" + req.query.id + "'", function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "Un évènement a été supprimé de la BD",
            id: req.query.id
        });
    })
    .patch(function (req, res) {
        connection.query("UPDATE evenements SET name = '" + req.query.name + "', description = '" + req.query.description + "', date = '" + req.query.date + "', price = " + req.query.price + " WHERE evenements.id = " + req.query.id, function (error, results, fields) {
            if (error) throw error;
        })

        res.json({
            message: "L'évènement a été mis à jour",
            name: req.query.name,
            description: req.query.description,
            date: req.query.date,
            price: req.query.price,
            id: req.query.id
        })
    })

myRouter.route('/flag')
    .patch(function (req, res) {
        if (req.query.type == 1) {
            connection.query("UPDATE evenements SET flag = 1 WHERE evenements.id = '" + req.query.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "L'évènement a été signalé",
                id: req.query.id
            });
        }
        if (req.query.type == 0) {
            connection.query("UPDATE evenements SET flag = 0 WHERE evenements.id = '" + req.query.id + "'", function (error, results, fields) {
                if (error) throw error;
            })

            res.json({
                message: "Le signalement a été supprimé",
                id: req.query.id
            });
        }
    });

myRouter.route('/product')
    .post(function (req, res) {
        connection.query("")
    })

app.use(myRouter);

app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port);
});