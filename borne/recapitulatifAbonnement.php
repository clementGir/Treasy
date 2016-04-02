<?php
    session_start();
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="ticket" class="ticketIsSelected recapitulatif abonnement">

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
                    <h3>Récapitulatif</h3>
                </div>

                <div class="ticketInfo">
                    <p>N'oubliez pas de vérifier vos abonnements</p>
                </div>

                <div id="recap"> 
                    <ul>
                        <li class="titres">
                            <div class="produit">
                                <h3>Nom du ticket</h3>
                            </div>

                            <div class="classe">
                                <h3>Classe</h3>
                            </div>

                            <div class="nombre">
                                <h3>Mois</h3>
                            </div>

                            <div class="prix">
                                <h3>Validité</h3>
                            </div>
                        </li>

                        <li class="grayed">   
                            <div class="produit">
                            <h3>Ticket Jeune de</h3>
                            <h3>Zone Namur à</h3>
                            <h3>Zone Bruxelles</h3>
                            </div>

                            <div class="classe">
                                <h3 class="numb">2</h3>
                            </div>

                            <div class="nombre">
                                <h3 class="numb">2</h3>
                            </div>

                            <div class="prix">
                                <h3 class="numb">29/12/2014</h3>
                                <h3 class="numb">au 04/01/2015</h3>
                            </div>                             
                        </li>                        

                        <li class="total">
                            <h3>Prix</h3>
                            <h3 class="numb">60.00€</h3>
                        </li>

                    </ul>                                     
                    
                    <a href="paiementAbonnement.php" class="result">
                        <p >Procéder au paiement</p>
                    </a>
                </div>
                <a class="annuler" href="ticketsAbonnement.php">
                    <img src="_ressources/annuler.svg">
                    <p>Annuler</p>
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>