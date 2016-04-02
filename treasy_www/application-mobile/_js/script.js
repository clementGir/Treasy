$(document).ready(function(){
	setTimeout(function(){
		$("#section__loading_screen_logo").addClass("translateBack");
		$("#section__first_log_in").addClass("translate");
	}, 1000);

	var usesFav = false;

	// Auto complete adress
    (function () {
        var AutocompleteAddress, addressInputs, autocompleteInput, canvas;
        AutocompleteAddress = function () {
            function AutocompleteAddress(autocompleteInput, addressInputs1, canvas) {
                var map, mapOptions;
                this.addressInputs = addressInputs1;
                this.addressComponentsOptions = {
                    route: 'long_name',
                    street_number: 'short_name',
                    postal_code: 'short_name',
                    postal_town: 'long_name'
                };
                var options = {
                  types: ['(cities)'],
                  componentRestrictions: {country: "be"}
                 };
                this.autocomplete = new google.maps.places.Autocomplete(autocompleteInput, options);   
            }
            return AutocompleteAddress;
        }();
        autocompleteInput = document.getElementById('from');
        autocompleteInputDest = document.getElementById('to');

        new AutocompleteAddress(autocompleteInput, addressInputs);
        new AutocompleteAddress(autocompleteInputDest, addressInputs);
    }.call(this));   


	$('#letsgo').addClass("button_before")
	setInterval(function(){
		if($('.date').val() == ""){
			$('#letsgo').addClass('button_before');
		}else{
			$('#letsgo').removeClass('button_before');
			$("#letsgo").click(function(e){
				e.preventDefault();
                $("#section__first_log_in").addClass("translateBack");
				$("#section__recent_travel").addClass("translate");
			});
		}
	},50);

	$(".add_travel").click(function(){
		$("#section__recent_travel").addClass("translateBack");
		$("#section__configure_your_ticket").addClass("translate");
	});

	$('.add_ticket').addClass('button_before');
	$('#ticketInfo input').keypress(function() {
		if($('#from').val() !== "" && $('#to').val() !== "" ){
			$('.add_ticket').removeClass('button_before');
		}
		else {
			$('.add_ticket').addClass('button_before');
		}
	});
	$('#ticketInfo input').focusout(function() {
		if($('#from').val() !== "" && $('#to').val() !== "" ){
			$('.add_ticket').removeClass('button_before');
		}
		else {
			$('.add_ticket').addClass('button_before');
		}
	});
		
		

	$(".add_ticket").click(function(e){
		e.preventDefault();

		if($('#from').val() !== "" && $('#to').val() !== "" ){

	        $.ajax({
	            type: "POST",
	            url: "data.php",
	            data: $("#ticketInfo, #dateNaissance").serialize(), // <-- serialize all fields into a string that is ready to be posted to your PHP file

	            success: function(data){
	                $("#section__configure_your_ticket").addClass("translateBack");
					$("#section__qrcode_generated").addClass("translate");

					//show hide stuff
					$('.fromRecap').text($('#from').val());
					$('.toRecap').text($('#to').val());
					$('.timeTravel').text($('#calendar_date').val());

					if ($('#avion').is(':checked')) {
						$('.detailPlane').show();
					}
					else {
						$('.detailPlane').hide();
					}
					if ($('#animal').val() < 2) {					
						$('.detailPets').hide();
					}
					else {
						$('.detailPets').show();
					}

					if ($('#bike').val() < 2) {
						$('.detailBike').hide();
					}
					else {
						$('.detailBike').show();
					}

					var qrcode = new QRCode("qrcode");
		
					function draw(){
						var adresse = data; 
						 qrcode.makeCode(adresse);
					}

					draw();					

					setTimeout(function(){

						$("#section__qrcode_generated").addClass("translateBack");
						$("#section__qrcode_download").addClass("translate");
						$('.download_icon').click(function() {
							var imgLoc = $('#qrcode img').attr('src');
							$('.download_icon').attr('href', imgLoc);
						})
					}, 2500);
	            }
	        });
		};
	});

	$("#section__qrcode_download .left_arrow").click(function(){
		
		$("#section__qrcode_generated").removeClass("translateBack");
		$("#section__qrcode_download").removeClass("translateBack");
		$("#section__qrcode_generated").removeClass("translate");
		$("#section__qrcode_download").removeClass("translate");
		$("#section__configure_your_ticket").removeClass("translateBack");

		setTimeout(function(){
			$("#qrcode").empty();
		}, 700);
	});

	$("#section__configure_your_ticket .left_arrow").click(function(){
		$("#section__configure_your_ticket").removeClass("translate");
		$("#section__recent_travel").removeClass("translateBack");
	});

	$("#section__recent_travel .calendar").click(function(){
		$("#section__first_log_in").removeClass("translateBack");
		$("#section__recent_travel").removeClass("translate");
	});
	
	$('#date, #ticketInfo, #qrImg').submit(function () {
	 return false;
	});

	$("#section__first_log_in a").click(function() {
        $("#section__first_log_in a").removeClass("active");
        $(this).addClass("active");
    });

    $(".check_selected").click(function(){
    	$(this).toggleClass("check_selected_after")
    });

    

	// Links stay on desktop mode

	if(("standalone" in window.navigator) && window.navigator.standalone){

	    // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
	    var noddy, remotes = false;
	    
	    document.addEventListener('click', function(event) {
	        
	        noddy = event.target;
	        
	        // Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
	        while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
	            noddy = noddy.parentNode;
	        }
	        
	        if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
	        {
	            event.preventDefault();
	            document.location.href = noddy.href;
	        }
	    
	    },false);
	}

	document.addEventListener("touchmove", function(event){
       
       if ($("#section__qrcode_generated").hasClass("translate")) {
       	//
       }
       else {
       	event.preventDefault();
       }
   });

});

//swipe list

var myApp = new Framework7();
 
var $$ = Dom7;
 
// $$('.action1').on('click', function () {
// 	$("#section__recent_travel").addClass("translateBack");
// 	$("#section__configure_your_ticket").addClass("translate");

// 	var from = $(this).closest('swipeout').children('.departure_city').text();
// 	var to = $(this).parent('.swipeout').children('.destination_city').text();
// 	console.log($(this));
// });

$('.action1').on('click', function () {
	$("#section__recent_travel").addClass("translateBack");
	$("#section__configure_your_ticket").addClass("translate");

	var from = $('.transitioning .departure_city').text();
	var to = $('.transitioning .destination_city').text();
	$('#from').val(from);
	$('#to').val(to);
	$('.add_ticket').removeClass('button_before');
});




// mouse move click prevent
(function($){
    var $doc = $(document),
        moved = false,
        pos = {x: null, y: null},
        abs = Math.abs,
        mclick = {
        'mousedown.mclick': function(e) {
            pos.x = e.pageX;
            pos.y = e.pageY;
            moved = false;
        },
        'mouseup.mclick': function(e) {
            moved = abs(pos.x - e.pageX) > $.clickMouseMoved.threshold
                || abs(pos.y - e.pageY) > $.clickMouseMoved.threshold;
        }
    };
    
    $doc.on(mclick);
    
    $.clickMouseMoved = function () {
        return moved;
    };
    
    $.clickMouseMoved.threshold = 3;
})(jQuery);

// use a bookmarked journey
$(document).on('click', '.swipeout-content', function(e) {
    if ($.clickMouseMoved()) {}
    else {
    	if ($('.swipeout').hasClass('swipeout-opened')) {

    	}
    	else {
    		var from = $(this).children('.departure_city').text();
			var to = $(this).children('.destination_city').text();
			
            $("#section__recent_travel").addClass("translateBack");
			$("#section__qrcode_generated").addClass("translate");

			//show hide stuff
			$('.fromRecap').text(from);
			$('.toRecap').text(to);

			var qrcodeFromList = new QRCode("qrcode");

			function drawFromList(){
				var adresseFromList = 'recapitulatif-qrcode.php?standard=1&from='+from+'&to='+to; 
				console.log(adresseFromList);
				adresseFromList = encodeURIComponent(adresseFromList);
				console.log(adresseFromList);
				qrcodeFromList.makeCode(adresseFromList);
			}			

			function b64EncodeUnicode(str) {
			    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g, function(match, p1) {
			        return String.fromCharCode('0x' + p1);
			    }));
			}	

			drawFromList();				

			setTimeout(function(){

				$("#section__qrcode_generated").addClass("translateBack");
				$("#section__qrcode_download").addClass("translate");
				$('.download_icon').click(function() {
					var imgLoc = $('#qrcode img').attr('src');
					$('.download_icon').attr('href', imgLoc);
				})

				

				$("#section__qrcode_download .left_arrow").click(function(){
		
					event.preventDefault;
					$("#section__recent_travel").removeClass("translateBack");

					setTimeout(function(){
						$("#qrcode").empty();
					}, 700);
				});

			}, 2500);
    	}
    }
});






