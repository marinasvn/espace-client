<?php
    require './traitement/BD-connection.php';
    session_start();
    // if connected.php en bas -> session start ici
    setcookie('email', $_SESSION['email'], time() + 365*24*3600, null, null, false, true);
    setcookie('pass', 'Marina', time() + 365*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
		<?php
            if(isset($_GET['titre'])){
                $titre=htmlentities($_GET['titre']);
                echo $titre;
            }
            else{
                echo 'Shop';
            }
		?>
		</title>
		<link rel="stylesheet" href="./assets/style.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
	</head>
	<body>

            <?php
                if(isset($_GET['pageCharger'])){

                $nompageCharger=htmlentities($_GET['pageCharger']);
                include './'.$nompageCharger.'.php';	
                }
                else{
                    include './include/accueil.php';
                }

            ?> 
		
		
		
		<script src="./assets/jquery-3.3.1.min.js"></script>
		<script src="./assets/script.js"></script>
	</body>
</html>