<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div id="newcommentaire" class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="col-sm-8 comment">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong><?php
                     echo $_SESSION['nom']= "OUBAYA"; ?> <?php echo $_SESSION['prenom']= "Amine"; ?></strong>
                    </div>
                    <div class="panel-body">
                        <form  method="post" action="requests/generateComment.php" autocomplete="off">
                            <input class="newcomment" name="commentaire" type="text" placeholder="Postez un commentaire" />
                            <input type="hidden" name="id_post" value="<?php echo $_SESSION['id_post']; ?>" />
                            <input type="image" src="assets/images/send.png" alt="Add" />
                        </form>
                    </div>
                </div>
            </div>
</div>
</div>
</div>