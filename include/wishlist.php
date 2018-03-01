<div id="header">
     <?php
         /*session_start();*/
         include './include/nav-connected.php';
     ?>   
</div> 

<div id="container">
    <div id="items">
            <h2><?php echo $_SESSION['prenom'] ?>, voici votre wishlist</h2>
              <?php   
                    $user = $_SESSION['id_user'];
                
                    $wishlist = $dbc->prepare('SELECT * FROM produits INNER JOIN wishlist ON produits.id_product = wishlist.id_product WHERE wishlist.id_user = :id_user');
                
                    
                    $wishlist->execute(array(
                            ':id_user' => $user
                    ));

                
                    foreach ($wishlist as $item) {
                        echo "<div id='item'><img src='./assets/items/".$item['img']."'/><p class='h3'>".$item['name']."</p></div>";
                    }
                ?>

    </div>
</div>