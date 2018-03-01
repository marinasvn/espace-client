<div id="header">
     <?php
         include './include/nav.php';
     ?>   
</div> 

<div id="container">
    <div id="items">
              <?php
                    $select = 'SELECT * FROM produits';
                    $result = $dbc->query($select);

                    foreach ($result as $item) {
                        echo "<div id='item'><img src='./assets/items/".$item['img']."'/><p class='h3'>".$item['name']."</p><p class='brand'>".$item['brand']."</p><p clas='price'>€ ".$item['price']."</p><p class='addWish' id='".$item['id_product']."'><i class='fas fa-heart'></i></p></div>";
                    }

                ?>
    </div>
</div>