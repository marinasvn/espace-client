<?php
    
    try {
        $dbc = new PDO('mysql:host=localhost;dbname=ESHOP', 'root','');
    }

    catch (PDOExeption $e) {
        print "Erreur: ".$e->getMessage()."<br/>";
        die();
    }

?>