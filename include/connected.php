<div id="header">
     <?php
         /*session_start();*/
         include './include/nav-connected.php';
     ?>   
</div> 

<div id="container">
    <div id="items">
              <?php
                    $select = 'SELECT * FROM produits';
                    $result = $dbc->query($select);

                    foreach ($result as $item) {
                        echo "<div id='item'><img src='./assets/items/".$item['img']."'/><p class='h3'>".$item['name']."</p><p class='brand'>".$item['brand']."</p><p clas='price'>€ ".$item['price']."</p><form method='post' action='./traitement/traitementWishlist.php?product=".$item['id_product']."'><input type='submit' value='.' name='submit' class='submitButton'><i class='fas fa-heart'></i></form></div>";
                    }

                ?>

    </div>
</div>