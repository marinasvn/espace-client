<nav>
        <div id="logo"><h1>ESHOP</h1></div>
        
        <div class="links">
            <a id="connecter">se connecter</a>
            <a id="inscrire">s'inscrire</a>
        </div>
        
        <div id="formConnect">
           <div class="titleForm">
               <p>Connectez-vous</p>
               <p id="fermerConnect">X</p> 
          </div>
            <form action="./traitement/traitementConnection.php" method="POST">
                <input type="email" name="email" placeholder="votre email"><br/><br/>
                <input type="password" name="pass" placeholder="votre mot de pass"><br/><br/>
                <input type="submit" name="submit" value="se connecter">
            </form>
        </div>
        
        <div id="formInscrire">
          <div class="titleForm">
               <p>Inscrivez-vous</p>
               <p id="fermerInscrire">X</p> 
          </div>
            <form action="./traitement/traitementInscription.php" method="POST">
                <input type="text" name="prenom" placeholder="votre prenom"><br/><br/>
                <input type="text" name="nom" placeholder="votre nom"><br/><br/>
                <input type="email" name="email" placeholder="votre email"><br/><br/>
                <input type="password" name="pass" placeholder="votre mot de pass"><br/><br/>
                <input type="password" name="pass-confirm" placeholder="confirmez votre mot de pass"><br/><br/>
                <input type="submit" name="submit" value="s'inscrire">
            </form>
        </div>
</nav>