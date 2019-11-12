
<!DOCTYPE html>
<html>

<head>
<title>BoutiqueExia</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"> <?php include 'generate_title.php'?> </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link nav_boutique" href="">BOUTIQUE</a>
                    <a class="nav-item nav-link nav_activites" href="">ACTIVITÉS</a>
                    <a class="nav-item nav-link nav_blog" href="">BLOG</a>
                </div>
            </div>
        </nav>
<table>
	<?php include 'generate_prods.php'?>
</table>


	
</body>

<footer>
	
</footer>
</html>
