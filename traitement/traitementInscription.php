<?php   

        // se connecter à la base de données ici
        require 'BD-connection.php';

        // Vérification de la validité des informations
    
        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $passConfirm = $_POST['pass-confirm'];
        
  if ($passConfirm == $_POST['pass']) {
      
        // Insertion
        $req = $dbc->prepare('INSERT INTO membres(id_user, prenom, nom, pass, email, date_inscription) VALUES(NULL, :prenom, :nom, :pass, :email, CURDATE())');
    
        $req->execute(array(
            'prenom' => $prenom,
            'nom' => $nom,
            'pass' => $pass_hache,
            'email' => $email
        ));

    header('location: connection.php');
  }  
  else {
      /*header('location: inscription.php');*/
      echo "Le password doit etre identique";
  }

header('location: ../index.php');

?>