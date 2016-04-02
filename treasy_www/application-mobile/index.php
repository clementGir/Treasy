<!DOCTYPE html>
<html>
<head>
	<title>Treasy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="_img/home_icon.png">	
	<link rel="stylesheet" href="_css/framework7.ios.min.css">
	<link rel="stylesheet" href="_css/style.css">

</head>
<body>
<div class="content">

	<section id="section__loading_screen_logo" class="translate">
		<img src="_img/loading_screen_logo.svg" alt="Logo de chargement">
	</section>

	<section id="section__first_log_in">
		<img class="header_logo" src="_img/small_logo.svg" alt="Logo de chargement">
		<div class="information">
		<h1>Quand êtes-vous né?</h1>
			<aside>
				<p>Cette information sera utilisée pour vous fournir les meilleurs prix</p>
			</aside>
			<form id="dateNaissance" method="post">
				<input class="date" type="date" name="dateNaissance" value="2015-10-08">
				<div></div>
				<input id="letsgo" type="submit" name="dateNaissance" value="Allons-y">
			</form>
		</div>
		<ul>
			<li><a class="active">FR</a></li>
			<li><a>NL</a></li>
			<li><a>EN</a></li>
			<li><a>DE</a></li>
		</ul>
	</section>
	
	<section id="section__recent_travel">
		<div class="header">
			<h1>Destinations</h1>
			<button class="calendar"></button>
		</div>
		<div class="list-block">
			<ul>
				<li class="swipeout">					
					<div class="swipeout-content item-content">
						<p class="listDe">De</p>
						<p class="departure_city">Gand Saint-Pierre</p>
						<p class="listA">à</p>
						<p class="destination_city">Liège</p>
						<div class="move">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="swipeout-actions-left">
				        <a href="#" class="action1"></a>
				    </div>
				    <div class="swipeout-actions-right">
				        <a href="#" class="swipeout-delete" data-confirm="Êtes-vous sûr de vouloir supprimer ce trajet?" data-confirm-title=" " data-close-on-cancel="true"></a>
				    </div>
				</li>

				<li class="swipeout">					
					<div class="swipeout-content item-content">
						<p class="listDe">De</p>
						<p class="departure_city">Namur</p>
						<p class="listA">à</p>
						<p class="destination_city">Bruxelles</p>
						<div class="move">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="swipeout-actions-left">
				        <a href="#" class="action1"></a>
				    </div>
				    <div class="swipeout-actions-right">
				        <a href="#" class="swipeout-delete" data-confirm="Êtes-vous sûr de vouloir supprimer ce trajet?" data-confirm-title=" " data-close-on-cancel="true"></a>
				    </div>
				</li>

				<li class="swipeout">
					<div class="swipeout-content item-content">
						<p class="listDe">De</p>
						<p class="departure_city">Mons</p>
						<p class="listA">à</p>
						<p class="destination_city">Ollignies</p>
						<div class="move">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="swipeout-actions-left">
				        <a href="#" class="action1"></a>
				    </div>
				    <div class="swipeout-actions-right">
				        <a href="#" class="swipeout-delete" data-confirm="Êtes-vous sûr de vouloir supprimer ce trajet?" data-confirm-title=" " data-close-on-cancel="true"></a>
				    </div>
				</li>
				<li class="empty"></li>
				<li class="empty"></li>
			</ul>
		</div>
		
		<button class="add_travel">Ajouter un trajet</button>

	</section>
	<section id="section__configure_your_ticket">
		<div class="header">
			<h1>Configuration</h1>
			<button class="left_arrow"></button>
		</div>
		<form id="ticketInfo" method="post">
			<div class="from_to">
				<label for="from">Je veux voyager de:</label>
				<input id="from" name="from" type="text" value="Namur">
			</div>
			<div class="from_to">
				<label for="to">À:</label>
				<input id="to" name="to" type="text" placeholder="Tournai">
			</div>
			<div class="round_trip_date">
				<label for="calendar_date">Le:</label>
				<input id="calendar_date" type="date" value="2015-10-10">
				<div></div>
			</div>	
			<div class="round_trip_check">
				<button id="round_trip">Aller-retour</input>
			</div>
			<p>Suppléments:</p>
			
			<input id="avion" name="avion" type="checkbox" hidden>
			<label class="check_selected" id="airport" for="avion"><p>Taxe aéroport</p></label>

			<input id="premiere" name="premiere" type="checkbox" hidden>
			<label class="check_selected" name="premiere" id="first_class" for="premiere"><p>1<sup>ère</sup> classe</p></label>

			<select id="animal" name="animal">
				<option value="0">Animal</option>
				<option value="1">0</option>
				<option value="2">1</option>
				<option value="3">2</option>
				<option value="4">3</option>
				<option value="5">4</option>
				<option value="6">5</option>
				<option value="7">6</option>
				<option value="8">7</option>
				<option value="9">8</option>
				<option value="10">9</option>
				<option value="11">10</option>
			</select>
			<select id="bike" name="velo">
				<option value="0">Vélo</option>
				<option value="1">0</option>
				<option value="2">1</option>
				<option value="3">2</option>
				<option value="4">3</option>
				<option value="5">4</option>
				<option value="6">5</option>
				<option value="7">6</option>
				<option value="8">7</option>
				<option value="9">8</option>
				<option value="10">9</option>
				<option value="11">10</option>
			</select>
			<input class="add_ticket" type="submit" name="ticketInfo" value="Créer le ticket">
		</form>
	</section>
	<section id="section__qrcode_generated">
		<div class="header">
			<h1>QR CODE</h1>
		</div>
		<div id="loader">
			<img src="_img/small_logo.svg" alt="Logo de chargement">
			<svg width="300" height="4" viewPort="0 0 300 4" version="1.1" xmlns="http://www.w3.org/2000/svg">
    			<line stroke-dasharray="5, 5" x1="35" y1="2" x2="265" y2="2" />
    		</svg>
		</div>
	</section>
	<section id="section__qrcode_download">
		<div class="header">
			<h1>QR CODE</h1>
			<button class="left_arrow"></button>
			<a download="Treasy.png" class="download_icon"></a>
		</div>
		<ul>
			<li class="fromRecap">Namur</li>
			<li></li>
			<li class="toRecap">Tournai</li>
		</ul>
		<div class="travel-details">
			<p class="timeTravel">23/10/15</p>
			<img class="detailPets" src="_img/pets_icon.svg" alt="">
			<img class="detailBike" src="_img/bike_icon.svg" alt="">
			<img class="detailPlane" src="_img/plane_icon.svg" alt="">
		</div>
		<div id="qrcode"></div>
		<p class="scannez">Veuillez scanner ce QR Code à l'une de nos bornes.</p>
	</section>
</div>
	<script src="_js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZJSSLW43k04ltFpRpKCE-zPG0WHXHwj8&libraries=places&region=be"></script>
	<script src="_js/qrcode.js"></script>
	<script src="_js/framework7.min.js"></script>
	<script src="_js/script.js"></script>
</body>

</html>