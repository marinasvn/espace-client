<?php
    require '../serverSide/BD-connection.php';

    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        
        $fileName = $_FILES['file']['name'];
        /*$fileTmpName = $_FILES['file']['tmp_name'];*/
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $categorie = $_POST['categorie'];
        
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png', "pdf");
        
        /*print_r($file);*/
        
        if (in_array($fileActualExt, $allowed)) {
               if ($fileSize < 500000) {
                   
                  $upload = $dbc->prepare('INSERT INTO produits(id, img, name, brand, price, categorie) VALUES(NULL, :img, :name, :brand, :price, :categorie)');
                   
                  $upload->bindValue(':img', $fileName);
                  $upload->bindValue(':name', $name);
                  $upload->bindValue(':brand', $brand);
                  $upload->bindValue(':price', $price);
                  $upload->bindValue(':categorie', $categorie);
                   
                   $upload->execute();
                   
                   header("location: ../adminSide/upload-products-to-db.php");

                   
               } 
                else {
                    echo "Your file is too big";
                }
            } 
            else {
                echo "There was an error uploading your file!";
            }

    }


?>