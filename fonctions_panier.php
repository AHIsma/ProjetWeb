<?php
  if(!isset($_SESSION)){
    session_start();
  }

  include 'requests/connexionBdd.php';

  
  $action = isset($_GET['action']) ? $_GET['action']: NULL;

  
  $user = $_SESSION['id_user'];
  
  $Id_evnt = "NULL";

  switch ($action) {
    case 'firstadd':
      $Id_prod = $_GET['id_prod'];
      $Des = $_GET['designation'];
      $Prix = $_GET['prix'];
      $Taille = $_GET['taille'];
      $Link = $_GET['link'];
      $Q = $_GET['quantite'];
      $T = $_GET['taille'];
     // Requête préparée pour empêcher les injections SQL
        $requete = $bdd->prepare("SELECT * FROM panier WHERE Id_prod = :id_prod;");
    // Liaison des variables de la requête préparée aux variables PHP
        $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);

        $requete->execute();

    if (!$requete->fetch())
        {

            // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("INSERT INTO panier(Designation,Prix,Link,Id_user,Quantite,Id_prod,Taille) VALUES(:designation,:prix,:link,:id_user,:quantite,:id_prod,:taille);");
    
            $requete->bindValue(':designation', $Des, PDO::PARAM_STR);
            $requete->bindValue(':prix', $Prix, PDO::PARAM_STR);
            $requete->bindValue(':link',  $Link, PDO::PARAM_STR);
            $requete->bindValue(':id_user',  $user, PDO::PARAM_STR);
            $requete->bindValue(':quantite', $Q, PDO::PARAM_STR);
            $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);
            $requete->bindValue(':taille', $Taille, PDO::PARAM_STR);
            $requete->execute();
        }

    else{ 
            $x=1;
           // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("UPDATE panier SET Quantite = Quantite+:x WHERE Id_prod=:id_prod;");
            $requete->bindValue(':x', $x, PDO::PARAM_STR);
             $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);
            $requete->execute();
        }



    break;
    
    case 'delete':
     $Id_prod = $_GET['id_prod'];
      $Des = $_GET['designation'];
      $Prix = $_GET['prix'];
      $Taille = $_GET['taille'];
      $Link = $_GET['link'];
      $Q = $_GET['quantite'];
      $T = $_GET['taille'];
        // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("DELETE FROM panier WHERE Id_prod=:id_prod");
            $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);
            $requete->execute();
      
    break;

    case 'plus':
     $Id_prod = $_GET['id_prod'];
      $Des = $_GET['designation'];
      $Prix = $_GET['prix'];
      $Taille = $_GET['taille'];
      $Link = $_GET['link'];
      $Q = $_GET['quantite'];
      $T = $_GET['taille'];
        $y=1;
           // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("UPDATE panier SET Quantite = Quantite+:y WHERE Id_prod=:id_prod;");
            $requete->bindValue(':y', $y, PDO::PARAM_STR);
             $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);
            $requete->execute();
    break;

    case 'moins':
     $Id_prod = $_GET['id_prod'];
      $Des = $_GET['designation'];
      $Prix = $_GET['prix'];
      $Taille = $_GET['taille'];
      $Link = $_GET['link'];
      $Q = $_GET['quantite'];
      $T = $_GET['taille'];
        $z=1;
           // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("UPDATE panier SET Quantite = Quantite-:z WHERE Id_prod=:id_prod;");
            $requete->bindValue(':z', $z, PDO::PARAM_STR);
            $requete->bindValue(':id_prod', $Id_prod, PDO::PARAM_STR);
            $requete->execute();
    break;
    case 'commander':

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO commande(Id_goodie_vetements, Id_evenement, Id_user, Quantite,Designation,Link)  
      SELECT Id_prod, Id_evnt, Id_user, Quantite,Designation,Link
      FROM panier
      WHERE Id_user=:id_user;");
    $requete->bindValue(':id_user', $user, PDO::PARAM_STR);
    $requete->execute();
    
      

     $requeteeee = $bdd->prepare("DELETE FROM panier
        WHERE Id_user=:id_user;");

      
      $requeteeee->bindValue(':id_user', $user, PDO::PARAM_STR);

      $requeteeee->execute();
      

            
    break;

    default:
     echo "cmort";
    break;
   }
   
   header('Location: panier.php');

?>