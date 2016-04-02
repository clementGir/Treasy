<?php
	session_start();
    date_default_timezone_set('Europe/Brussels');

    if ($_POST) {

		// hacker?
		if ($_POST['userEmail'] !== '') {
			die("die you hacker");
		}	

		//  Assainissement 
		$de = trim(strip_tags($_POST['search-de']));
		$a = trim(strip_tags($_POST['search-a']));
		$via = trim(strip_tags($_POST['search-via']));
		$dateAller = trim(strip_tags($_POST['date']));
		$dateRetour = trim(strip_tags($_POST['dateRetour']));

		// Validation
		if ($de == '') {
			$erreurs['de'] = "Donne une adresse de départ.";
		}
		if ($a == '') {
			$erreurs['a'] = "Donne une adresse de destination.";
		}
		if ($dateAller == '') {
			$erreurs['dateAller'] = "Quel jour souhaitez vous voyager?";
		}

		if ($de !== '' && $a !== '' && $dateAller !== '') {
			$_SESSION['de'] = $de;
			$_SESSION['a'] = $a;
			$_SESSION['dateAller'] = $dateAller;
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
	<body id="home" class="trajet">

		<header>
			<p class="numb"><?php echo date("H:i"); ?></p>
			<p class="numb"><?php echo date("d/m/Y"); ?></p>
		</header>

		<main>
			<img class="logo" src="_ressources/logo.svg" alt="logo de treasy">

			<form id="first" method="POST">

				<div class="mailInput">
					<label for-"userEmail">name</label>
					<input id="userEmail" name="userEmail" style="display:none">
				</div>

				<div>
					<label for="search-de">De :</label>
					<input type="text" name="search-de" id="search-de" value="Namur"></input>
				</div>
				<div>
					<label for="search-a">À :</label>
					<input type="text" name="search-a" id="search-a" placeholder="Tournai" value=""></input>
					<button type="button" class="via">Via</button>
				</div>
				<div class="inputVia">
					<input type="text" name="search-via" id="search-via" placeholder="Bruxelles"></input>
				</div>
				<div class="date">
					<label for="date">Le :</label>
					<input type="date" name="date" id="date" class="numb" value="<?php echo date('Y-m-d'); ?>">
					<div><img src="_ressources/calendar_icon.svg" width="50px"></div>
					<button type="button" class="a-r"><p>Aller - retour</p></button>
				</div>
				<div class="inputA-R">
					<label for="dateRetour">Retour le :</label>
					<input type="date" name="dateRetour" id="dateRetour" class="numb" value="<?php echo date('Y-m-d'); ?>">
					<div><img src="_ressources/calendar_icon.svg" width="50px"></div>
				</div>

			</form>

			<div class="bottom">
				<a class="precedant" href="start.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Retour</h3>
                </a>
			  	<div class="valider">
			  		<input type="submit" form="first" id="submit" value="">
			  		<p>Valider</p>
			  		<img src="_ressources/arrowNext.svg">
			  	</div>
			</div>

		</main>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZJSSLW43k04ltFpRpKCE-zPG0WHXHwj8&libraries=places"></script>
		<script src="js/main.js"></script>
	</body>
</html>