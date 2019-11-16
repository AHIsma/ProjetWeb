<?php
if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
}
?>

<?php if($showcookie) { ?>
<div class="cookie-alert">
   En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<br /><a href="requests/accept_cookie.php">OK</a>
</div>
<?php } ?>