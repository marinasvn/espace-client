<?php
    // se connecter à la base de données ici
    require 'BD-connection.php';

    //  Récupération de l'utilisateur et de son pass hashé
    $email = $_POST['email'];

    $req = $dbc->prepare('SELECT id_user, prenom, pass FROM membres WHERE email = :email');
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id_user'] = $resultat['id_user'];
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['email'] = $email;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    } 
    

    if (isset($_SESSION['id_user']) AND isset($_SESSION['email']))
    {
        /*echo 'Bonjour ' . $_SESSION['prenom'];*/
        header('location: ../index.php?pageCharger=./include/connected&titre=Shop');
    }

?>