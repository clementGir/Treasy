<?php
    session_start();
    date_default_timezone_set('Europe/Brussels');

    $de = $_SESSION['de'];
    $a = $_SESSION['a'];
    $dateAller = $_SESSION['dateAller'];
    $age = $_SESSION['age'];
    $action = trim(strip_tags($_POST['redirection']));

    if ($_POST) {
        if ($action == "payer" ) {
           header('Location: recapitulatif.php');
           exit(); 
        }
        if ($action == "ajoutTicket" ) {
           header('Location: age.php');
           exit(); 
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="ticket" class="count">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <div class="recap">
                <p>De : <span><?php echo $de; ?></span></p>
                <p>A : <span><?php echo $a; ?></span></p>
                <p>Le : <span class="numb"><?php echo $dateAller; ?></span></p>
            </div>
            <h3 class="title">Sélectionnez le ticket</h3>
            <ul id="scrollable">
                <li class="ticket goPass">
                    <h3>Ticket Jeune</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet unique, utilisable par tous les passagers âgés de 12 à 25 ans.</p>
                        <div class="price">
                            <p>prix : <span class="numb">6€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket adulte">
                    <h3>Ticket Adulte</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet unique, utilisable par tous les passagers âgés de 25 à 65 ans.</p>
                        <div class="price">
                            <p>prix : <span class="numb">8€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket senior">
                    <h3>Ticket Senior</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet unique, utilisable par tous les passagers âgés de plus de 65 ans.</p>
                        <div class="price">
                            <p>prix : <span class="numb">6€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket weekEnd">
                    <h3>Ticket Week-End</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est uniquement disponible le week end. Il propose un aller-retour à prix réduit.
                        <div class="price">
                            <p>prix : <span class="numb">10€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket standart">
                    <h3>Ticket Standard</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Ce billet est un billet valable pour tous les utilisateurs.</p>
                        <div class="price">
                            <p>prix : <span class="numb">12€</span></p>
                        </div>
                    </div>
                </li>

                <li class="ticket goPass10">
                    <h3>Ticket Jeune 10</h3>
                    <div class="ticketInfo">                            
                        <p class="ticketDescription">Le Ticket Jeune 10 vous permet de faire 10 trajets à prix réduit (disponible pour les moins de 25 ans).</p>
                        <div class="price">
                            <p>prix : <span class="numb">50€</span></p>
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

        <div class="ticketSelected">
            <div class="overlay"></div>
            <div class="ticket centered">

                <div class="ticketHead">
                    <img src="_ressources/logoBlue.svg" alt="treasy">
                    <h3 class="titreTicket">Ticket Standard</h3>
                </div>

                <div class="ticketInfo">
                    <div class="from">
                        <p>Départ</p>
                        <p class="ville"><?php echo $de; ?></p>
                        <p class="date">Date : <span class="numb"><?php echo $dateAller; ?></span></p>
                    </div>
                    <div class="to">
                        <p>Arrivée</p>
                        <p class="ville"><?php echo $a; ?></p>
                    </div>
                </div>

                <form method="POST" id="second">
                    <div class="nbr_ticket simple">
                        <label for="nbr_ticket">Nombre de ticket(s)</label>
                        <h3 class="prix numb"><span>6</span>€</h3>
                        <p class="button" id="plus">+</p>
                        <p id="count" class="numb">1</p>
                        <p class="button" id="minus">-</p>
                    </div> 

                    <div class="supplements">
                        <div class="left">
                            <div class="nbr_ticket animal">
                                <label for="nbr_ticket">Animal</label>
                                <p class="button" id="plus">+</p>
                                <p id="count" class="numb">0</p>
                                <p class="button" id="minus">-</p>
                            </div> 

                            <div class="nbr_ticket aeroport">
                                <label for="nbr_ticket">Taxe aéroport</label>
                                <p class="button" id="plus">+</p>
                                <p id="count" class="numb">0</p>
                                <p class="button" id="minus">-</p>
                            </div> 
                        </div>
                        
                        <div class="right">
                            <div class="nbr_ticket velo">
                                <label for="nbr_ticket">Vélo</label>
                                <p class="button" id="plus">+</p>
                                <p id="count" class="numb">0</p>
                                <p class="button" id="minus">-</p>
                            </div> 

                            <div class="nbr_ticket surclassement">
                                <label for="nbr_ticket">Surclassement</label>
                                <p class="button" id="plus">+</p>
                                <p id="count" class="numb">0</p>
                                <p class="button" id="minus">-</p>
                            </div> 
                        </div>
                    </div>                  
                    
                    <ul class="result">
                        <li>
                            <input type="radio" name="redirection" id="ajoutTicket" value="ajoutTicket" onclick="this.form.submit()">
                            <label for="ajoutTicket">Valider et rajouter un ticket</label>
                        </li>
                        <li class="next passed">
                            <input type="radio" name="redirection" id="payer" value="payer" onclick="this.form.submit()">
                            <label for="payer">Valider</label>
                            <p class="numb">€</p>
                            <p class="prixFinal numb">31,5</p>
                        </li>
                    </ul>
                </form>
                <a class="annuler" href="#">
                    <img src="_ressources/annuler.svg">
                    <p>Annuler</p>
                </a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <?php

            if ($age == "12" OR $age == "12-25") {
            ?>
                <script type="text/javascript">
                    $(".goPass, .goPass10").css("display","block");
                </script>
            <?php
            }

            if ($age == "25-65") {
            ?>
                <script type="text/javascript">
                    $(".adulte").css("display","block");
                </script>
            <?php
            }

            if ($age == "65") {
            ?>
                <script type="text/javascript">
                    $(".senior").css("display","block");
                </script>
            <?php
            }

        ?>
    </body>
</html>





