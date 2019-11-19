<?php
    if(!isset($_SESSION)){
    session_start();}
    include 'connexionBdd.php';

    if (!empty($_FILES)) {
        $file_name = $_FILES['image']['name'];
        $file_extension = strrchr($file_name, ".");

         $file_tmp_name = $_FILES['image']['tmp_name'];
         $file_dest = '../assets/images/'.$file_name;
         $fil_arbores = 'assets/images/'.$file_name;
        $extension_autorisees = array('.png', '.jpg', '.jpeg');

        if (in_array($file_extension, $extension_autorisees)) {
            if (move_uploaded_file($file_tmp_name, $file_dest)) {
                echo "image bien envoyée";

                $message = isset($_POST['message']) ? $_POST['message']: NULL;
                $image =$fil_arbores;
                $evenement = isset($_POST['evenement_participe']) ? $_POST['evenement_participe']: NULL;

                // Requête préparée pour empêcher les injections SQL
                $requete = $bdd->prepare("SELECT Nom FROM users WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Nom = $requete->fetch();
                $nom =$Nom['Nom'];

                $requete = $bdd->prepare("SELECT Prenom FROM users WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Prenom = $requete->fetch();
                $prenom = $Prenom['Prenom'];

                $requete = $bdd->prepare("SELECT Ville FROM users WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Ville = $requete->fetch();
                $ville = $Ville['Ville'];

            //     $requete = $bdd->prepare("SELECT likes FROM likes WHERE Id=:Id_user AND id_post=:id_post
            //     ");
            //    $requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
            //     // Exécution de la requête
            //     $requete->execute();
            //     $Likes = $requete->fetch();
            //     $likes = $likes['likes'];
                
                    $designation = $_GET['ID'];


                $requete = $bdd->prepare("INSERT INTO post(id_users, nom, prenom, Ville, nom_evenement, message, images) VALUES(:Id_user, :nom, :prenom, :ville, :nom_evenement, :message, :image);");
                $requete->bindvalue(':Id_user', $_SESSION['id_user'], PDO::PARAM_STR);
                $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
                $requete->bindValue(':nom_evenement', $designation, PDO::PARAM_STR);
                $requete->bindValue(':message', $message, PDO::PARAM_STR);
                $requete->bindValue(':image', $image, PDO::PARAM_STR);

                $requete->execute();
                header('Location: ../blog.php');
            }
        }else {
            echo "seul les .png et .jpg et .jpeg sont valides";
        }

    }

?>