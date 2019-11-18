<?php
	if(!isset($_SESSION)){
	    session_start();
	}
	include 'requests/connexionBdd.php';

	$requete = $bdd->prepare("SELECT * FROM  panier WHERE Id_user=:id_user AND Quantite!=0");
	$requete->bindvalue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);


	        $requete->execute();  

	        foreach ($requete->fetchAll() as $x) {
	        	echo '<div class="row item">
	        	<img class="image" src='.$x['Link'].'>
	        	<span class="name">'.$x['Designation'].'</span>
	        	<span class="price">'.$x['Prix'].' €</span>
	        	<div class="quantity">

	        	
	        	<a href="fonctions_panier.php?action=moins&amp;id_prod='.$x['Id_prod'].'&amp;designation='.$x['Designation'].'&amp;prix='.$x['Prix'].'&amp;taille='.$x['Taille'].'&amp;link='.$x['Link'].'&amp;quantite='.$x['Quantite'].'&amp;id_user='.$x['Id_user'].'">
	        	-
	        	</a>
	        	
	        	<div class="nb_quantity">'.$x['Quantite'].'</div>

	        	<a href="fonctions_panier.php?action=plus&amp;id_prod='.$x['Id_prod'].'&amp;designation='.$x['Designation'].'&amp;prix='.$x['Prix'].'&amp;taille='.$x['Taille'].'&amp;link='.$x['Link'].'&amp;quantite='.$x['Quantite'].'&amp;id_user='.$x['Id_user'].'">
	        	+
	        	</a>
	        	
	        	</div>
	        	
	        	<span class="action">
	        	<a href="fonctions_panier.php?action=delete&amp;id_prod='.$x['Id_prod'].'&amp;designation='.$x['Designation'].'&amp;prix='.$x['Prix'].'&amp;taille='.$x['Taille'].'&amp;link='.$x['Link'].'&amp;quantite='.$x['Quantite'].'&amp;id_user='.$x['Id_user'].'" class="del"><i class="fa fa-trash"></i></a>
	        	</span>
	        	</div>
	        	';
            }

           
            $requetee = $bdd->prepare("SELECT SUM(Prix*Quantite) FROM  panier WHERE Id_user=:id_user");
			$requetee->bindvalue(':id_user', $_SESSION['id_user'], PDO::PARAM_STR);


	        $requetee->execute(); 

	        foreach ($requetee->fetchAll() as $y) {
	        	 echo '<div class="total-price">Prix total de vos produits selectionnes:'.$y['SUM(Prix*Quantite)'].'€</div>';


	        }

	
?>
