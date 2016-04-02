<?php
	//Tranche d'age
	$url = "recapitulatif-qrcode.php?";

	$dateNaissance = trim(strip_tags($_POST['dateNaissance']));
	$dateNaissance = substr($dateNaissance, 0, 4);

	$dif = 2016-$dateNaissance;	

	if ($dif <= 18) {
		$trancheAge = 'jeune';
	}
	if ($dif >= 65) {
		$trancheAge = 'senior';
	}
	if ($dif >= 18 && $dif <= 65) {
		$trancheAge = 'standard';
	}

	$url .= $trancheAge."=1";

	// Autres
	$from = trim(strip_tags($_POST['from']));
	$url .= "&from=".$from;

	$to = trim(strip_tags($_POST['to']));
	$url .= "&to=".$to;

	if (isset($_POST['avion'])) {
		$url .= "&avion=1";
	}
	if (isset($_POST['premiere'])) {
		$url .= "&premiere=1";
	}
	if (isset($_POST['animal'])) {
		$animal = trim(strip_tags($_POST['animal']));
		if ($animal>=2) {
			$animal = $animal-1;
			$url .= "&animal=".$animal;
		}		
	}
	if (isset($_POST['velo'])) {
		$velo = trim(strip_tags($_POST['velo']));
		if ($velo>=2) {
			$velo = $velo-1;
			$url .= "&velo=".$velo;
		}
	}

	echo $url;
	
?>