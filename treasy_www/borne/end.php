<?php
    session_start();
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php'; ?>       
        
    </head>
    <body id="ticket" class="recapitulatif end">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <h3 class="title">Paiement effectué</h3>
            <img src="_ressources/done.svg" alt="">  
            <h3>Voici le prochain train qui effectue le trajet Namur-Tournai</h3> 
            <div class="nextTrain">
                <div class="destination"><h3>Destination</h3></div>
                <div class="voie"><h3>Voie</h3></div>
                <div class="heure"><h3>Heure</h3></div>               
                <div class="train">
                    <div class="destination"><h3>Tournai</h3></div>
                    <div class="voie"><h3 class="numb">7</h3></div>
                    <div class="heure"><h3 class="numb">13:34</h3></div>                    
                </div>
            </div>       

            <div class="bottom">
                <a class="precedant" href="index.php">
                    <h3>Retour à l'accueil</h3>
                </a>
            </div>
        </main>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>