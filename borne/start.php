<?php
    date_default_timezone_set('Europe/Brussels');

    $typeTrajet = trim(strip_tags($_POST['type']));

    if ($_POST) {
        if ($typeTrajet == "ticket") {
        	header('Location: trajet.php');
        	exit();
        }
        if ($typeTrajet == "abonnement") {
        	header('Location: abonnement.php');
        	exit();
        }
        if ($typeTrajet == "code") {
        	header('Location: qrcode.php');
        	exit();
        }
        
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="start">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <img class="logo" src="_ressources/logo.svg" alt="logo de treasy">
            
            <form id="type" method="POST">
                <ul>
                    <h3>Vous souhaitez...</h3>
                    <li>
                        <input type="radio" name="type" id="ticket" value="ticket" onclick="this.form.submit()">
                        <label for="ticket">Acheter un ticket</label>
                    </li>
                    <li>
                        <input type="radio" name="type" id="abonnement" value="abonnement" onclick="this.form.submit()">
                        <label for="abonnement">Renouveller mon abonnement</label>
                    </li>
                    <li>
                        <input type="radio" name="type" id="code" value="code" onclick="this.form.submit()">
                        <label for="code">Scanner mon QR Code</label>
                    </li>                              
                </ul>
            </form>

            <div class="bottom">
                <ul class="language">
					<li>
						<a class="selected fr" href="#">FR</a>
					</li>
					<li>
						<a class="nl" href="#">NL</a>
					</li>
					<li>
						<a class="en" href="#">EN</a>
					</li>
					<li>
						<a class="de" href="#">DE</a>
					</li>					
					<span class="span"></span>
				</ul>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>