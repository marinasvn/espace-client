<?php
    require 'BD-connection.php';
    session_start();

    $product = $_GET['product'];   
    $user = $_SESSION['id_user'];

    $add = $dbc->prepare('INSERT INTO wishlist(id_user, id_product) VALUES(:id_user, :id_product)');

    $add->execute(array(
            'id_user' => $user,
            'id_product' => $product
    ));

    header('location: ../index.php?pageCharger=./include/connected&titre=Shop')

?>