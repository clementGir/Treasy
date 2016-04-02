<?php
    session_start();
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="ticket" class="ticketIsSelected recapitulatif paiement abonnement">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <div class="recap">
                <p>De : <span><?php echo $de; ?></span></p>
                <p>A : <span><?php echo $a; ?></span></p>
                <p>Le : <span><?php echo $dateAller; ?></span></p>
            </div>
            <h3>Sélectionnez le ticket</h3>
            <ul>
                <li class="ticket goPass">
                    <h3>Go Pass 1</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet unique, utilisable par tous les passagers âgés de 12à 25 ans.</p>
                        <div class="price">
                            <p>prix : <span>6€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket weekEnd">
                    <h3>Ticket Week-End</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est uniquement disponible le week end. Il propose un aller-retour à prix réduit.
                        <div class="price">
                            <p>prix : <span>10€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket standart">
                    <h3>Ticket standart</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet valable pour tous les utilisateurs.</p>
                        <div class="price">
                            <p>prix : <span>12€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket goPass10">
                    <h3>Go Pass 10</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Le Go Pass 10 vous permet de faire 10 trajets à prix réduit (disponible pour les moins de 25 ans).</p>
                        <div class="price">
                            <p>prix : <span>50€</span></p>
                        </div>
                    </div>
                </li>                
            </ul>            

            <div class="bottom">
                <a class="precedant" href="age.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Changer la tranche d'âge</h3>
                </a>
            </div>
        </main>

        <div class="ticketSelected ticketIsSelected">
            <div class="overlay"></div>
            <div class="ticket centered">

                <div class="ticketHead">
                    <img src="_ressources/logoBlue.svg" alt="treasy">
                    <h3>Paiement</h3>
                </div>

                <div class="ticketInfo">
                    <p>Vous pouvez désormais procéder au paiement</p>
                </div>

                <div id="recap">                                  
                    <h3>Insérez votre monnaie dans la borne ou votre carte dans le lecteur de carte.</h3>
                        
                    <img src="_ressources/espece.svg" alt="Espece">
                    <img src="_ressources/carte.svg" alt="Carte banquaire">
                   
                    <div class="result">
                        <p>Reste à payer: <span class="numb">69.50€</span></p>
                    </div>
                </div>
                <a class="annuler" href="ticket.php">
                    <img src="_ressources/annuler.svg">
                    <p>Annuler</p>
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>