var express = require('express');

var hostname = 'localhost';
var port = 3000;

var app = express();

var myRouter = express.Router();

var mysql = require('mysql');
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

myRouter.route('/accs') //requêtes par rapport aux comptes-incriptions-connections
    //on crée un utilisateur dans la bd
    .post(function (req, res) {
        //TODO adapter la requête quand Dona aura fini la bd
        connection.query("INSERT INTO users (username, password, rank) VALUES ('" + req.query.username + "', '" + req.query.password + "', '" + req.query.rank + "')", function (error, results, fields) {
            if (error) throw error;
        });
        res.json({
            message: "Utilisateur créé avec les infos suivantes :",
            username: req.query.username,
            password: req.query.password,
            rank: req.query.rank,
            methode: req.method
        });
    })
    //on cherche si un utilisateur existe pour le connecter
    .get(function (req, res) {
        //TODO adapter la requête quand Dona aura fini la bd
        var sql = "SELECT username, rank FROM users WHERE username=?? AND password=??";
        var inserts = ['username', 'password'];
        sql = mysql.format(sql, inserts);
        connection.query(sql, function (error, results, fields) {
            if (error) throw error;
        });
        res.json({
            message: res.query,
            methode: req.method
        });
    });

app.use(myRouter);

app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port);
});