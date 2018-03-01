<nav>
        <div id="logo"><h1>ESHOP</h1></div>
        
        <div class="links">
           Bonjour <?php echo $_SESSION['prenom'] ?>
            <a href="index.php?pageCharger=./include/wishlist&titre=Wishlist"><i class='fas fa-heart'></i></a>
            <a id="monCompte">votre compte</a>
            <form action="./traitement/traitementDeconnection.php">
                <input type="submit" name="submit" value="se deconnecter">
            </form> 
        </div>
</nav>