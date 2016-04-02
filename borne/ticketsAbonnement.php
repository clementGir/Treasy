<?php
    date_default_timezone_set('Europe/Brussels');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="ticket" class="ticketAbonnement count">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <h3 class="title">Sélectionnez le ticket</h3>
            <ul id="scrollable">
                <li class="ticket habitude">
                    <h3>Abonnement Habitude </h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Vous effectuez toujours le même trajet ? Cet abonnement est fait pour vous !</p>
                        <div class="price">
                            <p>prix : <span class="numb">80€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket illimite">
                    <h3>Abonnement Illimité</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Cet abonnement vous permet de circuler sur le réseau comme vous le voulez.</p>
                        <div class="price">
                            <p>prix : <span class="numb">140€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket koteur">
                    <h3>Abonnement Koteur</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Pour les étudiants qui rejoignent leur kot le dimanche et repartent le vendredi.</p>
                        <div class="price">
                            <p>prix : <span class="numb">16€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket scolaire">
                    <h3>Abonnement Scolaire</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Profitez des voyages illimités vers l’école ou l’UNIF.</p>
                        <div class="price">
                            <p>prix : <span class="numb">40€</span></p>
                        </div>
                    </div>
                </li>                
            </ul>            

            <div class="bottom">
                <a class="precedant" href="historiqueAbonnement.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Revenir à l'historique</h3>
                </a>
            </div>
        </main>

        <div class="ticketSelected">
            <div class="overlay"></div>
            <div class="ticket centered">

                <div class="ticketHead">
                    <img src="_ressources/logoBlue.svg" alt="treasy">
                    <h3 class="titreTicket">Abonnement</h3>
                </div>

                <div class="ticketInfo">
                    <div class="from">
                        <p>Départ</p>
                        <p class="ville">ZONE NAMUR</p>
                    </div>
                    <div class="to">
                        <p>Arrivée</p>
                        <p class="ville">ZONE TOURNAI</p>
                    </div>
                </div>

                <form method="POST" id="second">

                    <div class="nbr_ticket simple">
                        <label for="nbr_ticket">Nombre de mois</label>
                        <h3 class="prix numb"><span>30</span>€</h3>
                        <p class="button" id="plus">+</p>
                        <p id="count" class="numb">1</p>
                        <p class="button" id="minus">-</p>
                    </div> 

                    <div class="supplements">
                        
                        <div class="nbr_ticket animal">
                            <h3>Choisir la classe</h3>
                            <input type="radio" name="classe" id="classe2" value="2" checked="">
                            <label for="classe2">2e classe</label>
                            <input type="radio" name="classe" id="classe1" value="1">
                            <label for="classe1">1ère classe</label>                            
                        </div> 

                        <div class="nbr_ticket dateValidite">
                            <h3>Date de début de validité</h3>
                            <input type="date" id="date" name="date" class="numb" value="<?php echo date('Y-m-d'); ?>">
                            <div class="calendar"><img src="_ressources/calendar_icon.svg" width="50px"></div>
                        </div>                         
                        
                    </div>                  
                    <a href="recapitulatifAbonnement.php" class="next passed">
                        <h3>Valider</h3>
                        <p class="numb">€</p>
                        <p class="prixFinal final numb">31,5</p>
                    </a>
                </form>
                <a class="annuler" href="#">
                    <img src="_ressources/annuler.svg">
                    <p>Annuler</p>
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>