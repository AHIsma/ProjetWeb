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
        $extension_autorisees = array('.png', '.jpg');

        if (in_array($file_extension, $extension_autorisees)) {
            if (move_uploaded_file($file_tmp_name, $file_dest)) {
                echo "image bien envoyée";

                $message = isset($_POST['message']) ? $_POST['message']: NULL;
                $image =$fil_arbores;
                $evenement = isset($_POST['evenement_participe']) ? $_POST['evenement_participe']: NULL;

                // Requête préparée pour empêcher les injections SQL
                $requete = $bdd->prepare("SELECT Nom FROM etudiantinscrit WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Nom = $requete->fetch();
                $nom =$Nom['Nom'];

                $requete = $bdd->prepare("SELECT Prenom FROM etudiantinscrit WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Prenom = $requete->fetch();
                $prenom = $Prenom['Prenom'];

                $requete = $bdd->prepare("SELECT Ville FROM etudiantinscrit WHERE Id=:Id_user
                ");
               $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
                // Exécution de la requête
                $requete->execute();
                $Ville = $requete->fetch();
                $ville = $Ville['Ville'];

                
                    $designation = "Laser game";


                $requete = $bdd->prepare("INSERT INTO post(id_users, nom, prenom, Ville, nom_evenement, message, images) VALUES(:Id_user, :nom, :prenom, :ville, :nom_evenement, :message, :image);");
                $requete->bindvalue(':Id_user', $_SESSION['Id_user'], PDO::PARAM_STR);
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
            echo "seul les .png et .jpg sont valides";
        }

    }

    /*

    // Récupération des données utilisateurs
        $message = isset($_POST['message']) ? $_POST['message']: NULL;
        $image = isset($_POST['Pass']) ? $_POST['Pass']: NULL;
        $evenement = isset($_POST['nom']) ? $_POST['nom']: NULL;

            // Requête préparée pour empêcher les injections SQL
            $requete = $bdd->prepare("INSERT INTO etudiantinscrit(Email,Mdp,Nom,Prenom,Ville,Sexe,Telephone) VALUES(:email,:Pass,:nom,:prenom,:ville,:gender,:tel);");
    
            $requete->bindValue(':email', $e_mail, PDO::PARAM_STR);
            $requete->bindValue(':Pass', $p_word, PDO::PARAM_STR);
            $requete->bindValue(':nom', $n_f, PDO::PARAM_STR);
    
        $requete->execute();*/
?>