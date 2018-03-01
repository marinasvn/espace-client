<?php
//le session_start() est dans le header

session_destroy();

header('location: ../index.php');
//si on veut effacer uniquement une variable
//unset($_SESSION['login']);
//dans notre cas on détruit complètement la session
?>