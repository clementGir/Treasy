<?php
    session_start();
    date_default_timezone_set('Europe/Brussels');

    $de = $_SESSION['de'];
    $a = $_SESSION['a'];
    $dateAller = $_SESSION['dateAller'];
    $age = trim(strip_tags($_POST['age']));

    if ($_POST) {
        $_SESSION['age'] = $age;
        header('Location: ticket.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
        
    </head>
    <body id="age">

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
            
            <form id="age" method="POST">
                <ul>
                    <h3>Sélectionnez la tranche d'âge du voyageur</h3>
                    <li>
                        <input type="radio" name="age" id="12" value="12" onclick="this.form.submit()">
                        <label for="12">Moins de <span class="numb">12</span> ans</label>
                    </li>
                    <li>
                        <input type="radio" name="age" id="12-25" value="12-25" onclick="this.form.submit()">
                        <label for="12-25">Entre <span class="numb">12</span> et <span class="numb">25</span> ans</label>
                    </li>
                    <li>
                        <input type="radio" name="age" id="25-65" value="25-65" onclick="this.form.submit()">
                        <label for="25-65">Entre <span class="numb">25</span> et <span class="numb">65</span> ans</label>
                    </li>
                    <li>
                        <input type="radio" name="age" id="65" value="65" onclick="this.form.submit()">
                        <label for="65">Plus de <span class="numb">65</span> ans</label>
                    </li>                   
                </ul>
            </form>

            <div class="bottom">
                <a class="precedant" href="trajet.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Changer la destination</h3>
                </a>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>