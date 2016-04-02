<?php
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
    </head>
    <body id="code">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>            
            <h3 class="title">Scannez votre QR Code</h3>
            <div class="video">
                <img src="_ressources/video.gif" class="loading qrcode...">
            </div>
            <div class="bottom">
                <a class="precedant" href="start.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Retour</h3>
                </a>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>