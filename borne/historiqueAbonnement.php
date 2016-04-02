<?php
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
    </head>
    <body id="historiqueAbonnement">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <h3>Historique de vos achats</h3>

            <ul>
                <h3 class="produit">Produit acheté</h3>
                <h3 class="classe">Classe</h3>
                <h3 class="validite">Validité</h3>

                <li class="current">
                    <div class="produit">
                        <h3>Go Pass Abo1 de</h3>
                        <h3>Zone Namur à</h3>
                        <h3>Zone Bruxelles</h3>
                    </div>
                    <h3 class="classe numb">2</h3>
                    <div class="validite">
                        <h3 class="numb">29/12/2014</h3>
                        <h3 class="numb">au 04/01/2015</h3>
                    </div>
                    <button type="button"><p>Prolonger</p></button>
                </li>

                <li class="second">
                    <div class="produit">
                        <h3>Go Pass Abo1 de</h3>
                        <h3>Zone Namur à</h3>
                        <h3>Zone Bruxelles</h3>
                    </div>
                    <h3 class="classe num">2</h3>
                    <div class="validite">
                        <h3 class="numb">29/12/2014</h3>
                        <h3 class="numb">au 04/01/2015</h3>
                    </div>
                </li>

                <li>
                    <div class="produit">
                        <h3>Go Pass Abo1 de</h3>
                        <h3>Zone Namur à</h3>
                        <h3>Zone Bruxelles</h3>
                    </div>
                    <h3 class="classe numb">2</h3>
                    <div class="validite">
                        <h3 class="numb">29/12/2014</h3>
                        <h3 class="numb">au 04/01/2015</h3>
                    </div>
                </li>
            </ul>

            <div class="bottom">
                <a class="precedant" href="start.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Retour</h3>
                </a>
                <a href="ticketsAbonnement.php" class="next">
                    <h3>Achat d'un nouveau produit</h3>
                    <img src="_ressources/arrowNextBlue.svg">
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>        
        <script src="js/main.js"></script>
    </body>
</html>