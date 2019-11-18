<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="api/scriptSignalComments.js"></script>

<?php

if(!isset($_SESSION)){
    session_start();
}
include 'requests/connexionBdd.php';
// Récupération des commentaires
$req = $bdd->prepare('SELECT id, nom, prenom, commentaire FROM commentaires WHERE id_post = :id_post ');
$req->bindValue(':id_post', $_SESSION['id_post'], PDO::PARAM_STR);
$req->execute();

while ($donnees = $req->fetch())
{
?>
<div class="col-sm-8 comment">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong><?php echo htmlspecialchars($donnees['nom']); ?> <?php echo htmlspecialchars($donnees['prenom']); ?></strong>
                    </div>
                    <div class="panel-body">
                    <?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?>
                    <?php
                                        if(isset($_SESSION['status_bde']) && $_SESSION['status_bde'] == "3") {
                                   foreach ($req->fetchAll() as $x){?><input type="button" onclick="flagComment($x['id']) /><?php echo $x['id'] ?>">
                                    <i class="fa fa-times-circle"></i>
                            </a>
                            <?php
                                   }}
                                    ?>
                    </div>
                </div>
</div>

<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
