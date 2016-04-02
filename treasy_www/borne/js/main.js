// no smooth scroll on iOS

    document.addEventListener("touchmove", function(event){
        event.preventDefault();
    });

    $('form').on('touchmove', function (e) {
         if (!$('.scrollable').has($(e.target)).length) e.preventDefault();
    });

//Redirections

if($('body').is('#home.index')){
    $('main').click(function(){
        window.location.href = "start.php";
    });
};

if($('body').is('.qr.paiement')){
     $('body').delay(4500).queue(function(){
        window.location.href = "end.php";
    });
};

if($('body').is('.end')){
    $('body').delay(10000).queue(function(){
       window.location.href = "index.php";
    });
};

if($('body').is('#code')){
    
    //wait for gif to be loaded or already loaded in cache (and so, playing) to redirect
    var img = $('.video img');
    if (img.prop('complete')) {

        $('.video img').delay(3500).queue(function(){
            window.location.href = "recapitulatif-QRCode.php";
        });
    } 
    else {

        img.load(function(){
            $('.video img').delay(3500).queue(function(){
                window.location.href = "recapitulatif-QRCode.php";
            });
        });
    }
};

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

// Page specific js

if($('body').is('.qr')){

    // Cancel events
    $(".overlay").click(function() {
        window.location.href = "qrcode.php";
    });

    // delete an item
    var numItems = 0;
    $("button").click(function() {
        $(this).closest( "li" ).addClass("delete");

        //adjust price
        var number = parseFloat($('.total').find('.totalNumber').text(), 10);
        $(".totalNumber").text(number-6+"0");

        //prevent pay if all elements are deleted
        numItems++;
        if (numItems==2) {
            $('.result').removeClass('passed');
            $(".totalNumber").text(0);
        };
    });
};

if($('body').is('.trajet')){
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
                  componentRestrictions: {country: "be"}
                 };
                this.autocomplete = new google.maps.places.Autocomplete(autocompleteInput, options);   
            }
            return AutocompleteAddress;
        }();
        autocompleteInput = document.getElementById('search-de');
        autocompleteInputDest = document.getElementById('search-a');
        autocompleteInputVia = document.getElementById('search-via');

        new AutocompleteAddress(autocompleteInput, addressInputs);
        new AutocompleteAddress(autocompleteInputDest, addressInputs);
        new AutocompleteAddress(autocompleteInputVia, addressInputs);
    }.call(this));     
    
    // add inputs if via is selected
    $(".via").click(function() {
        $("form").toggleClass("viaSelected");
    });

    // add inputs if aller-retour is selected
    $(".a-r").click(function() {
        $("form").toggleClass("a-rSelected");
    });

    // Language switch
    $(".bottom a").click(function() {
        $(".bottom a").removeClass("selected");
        $(this).toggleClass("selected");
    });

    // check if inputs are filled to allow button to be clicked
    $field = $("#search-de");
    $fieldA = $("#search-a");
    $fieldDate = $("#date");

    $('#first input').blur(function() {
        if( $fieldA.val() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $field.val() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $fieldA.val() == "" )
        {
            $("#submit").removeClass("passed");
        }
        if( $field.val() == "" )
        {
            $("#submit").removeClass("passed");
        }
    });

    $('#first input').keypress(function() {
        if( $fieldA.val() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $field.val() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $fieldA.val() == "" )
        {
            $("#submit").removeClass("passed");
        }
        if( $field.val() == "" )
        {
            $("#submit").removeClass("passed");
        }
    });
};

if($('body').is('#start')){
    $(".bottom li a").click(function() {
        $(".bottom li a").removeClass("selected");
        $(this).addClass("selected");
    });

    $(".fr").click(function() {
        $(".span").css("left","22px");  
    });

    $(".nl").click(function() {
        $(".span").css("left","93px");  
    });

    $(".en").click(function() {
        $(".span").css("left","162px");  
    });

    $(".de").click(function() {
        $(".span").css("left","232px");  
    });
};

if($('body').is('#abonnement')){

    var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', '_ressources/tududii.mp3');
        audioElement.load();
        $.get();

    // simulate card infra-red conection (Mobib)
    $('body').delay(10000).queue(function(){
    
        audioElement.play();
        $('body').clearQueue();
        $('body').delay(1000).queue(function(){
            window.location.href = "historiqueAbonnement.php";
        });
    });

    // prevent submission when input is empty styling
    $fieldAbonnement = $("#abonnement");

    $('#noAbonnement input').blur(function() {
        if( $fieldAbonnement.text() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $fieldAbonnement.text() == "" )
        {
            $("#submit").removeClass("passed");
        }
        console.log($fieldAbonnement);
    });
    $('#noAbonnement input').keypress(function() {
        if( $fieldAbonnement.text() !== "" )
        {
            $("#submit").addClass("passed");
        }
        if( $fieldAbonnement.text() == "" )
        {
            $("#submit").removeClass("passed");
        }
    });
};

if($('body').is('#historiqueAbonnement')){
    $("button").click(function() {
        $(this).toggleClass("selected");
        $(location).attr('href', 'prolongerAbonnement.php')
    });
};

if($('body').is('.recapitulatif.abonnement')){
    // Cancel events
    $(".overlay").click(function() {
        window.location.href = "ticketsAbonnement.php";
    });

    // delete an item
    $("button").click(function() {
        $(this).closest( "li" ).addClass("delete");
    });
};

if($('body').is('.paiement.abonnement')){
    // Cancel events
    $(".overlay").click(function() {
        window.location.href = "ticketsAbonnement.php";
    });
     $('body').delay(4500).queue(function(){
        window.location.href = "end.php";
    });
};

if($('body').is('.recapitulatif.simple')){
    // Cancel events
    $(".overlay").click(function() {
        window.location.href = "ticket.php";
    });

    // delete an item
    var numItems = 0;
    $("button").click(function() {
        $(this).closest( "li" ).addClass("delete");

        //adjust price
        var number = parseFloat($('.total').find('.totalNumber').text(), 10);
        $(".totalNumber").text(number-6+"0");

        //prevent pay if all elements are deleted
        numItems++;
        if (numItems==3) {
            $('.result').removeClass('passed');
            $(".totalNumber").text(0);
        };
    });


};


if($('body').is('.paiement.simple')){
    // Cancel events
    $(".overlay").click(function() {
        window.location.href = "ticket.php";
    });
    $('body').delay(4500).queue(function(){
       window.location.href = "end.php";
    });
};

if($('body').is('.ticketAbonnement')){

    $(".habitude").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".illimite").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".koteur").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".scolaire").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".button").click(function(){
        setTimeout(function() {
        
            if ( parseInt($(".simple #count").text())== 0 ) {
                $(".next").removeClass('passed');
            };

            if ( parseInt($(".simple #count").text())== 1 ) {
                $(".next").addClass('passed');
            };
         }, 100);
    });

    $(".animal label").click(function(){
        var prixClasse = parseInt($(".prix span").text());
        var checked = $( "input:radio[name=classe]:checked" ).val();
        if (prixClasse == 0) {}
        else{
            if (checked == 2) {
                $(".prixFinal.final").text(prixClasse+6); 
            }
            else{
                $(".prixFinal.final").text(prixClasse); 
            }
        }
    });
};

if($('body').is('#ticket.count')){

    $(".goPass").on('click',function() {
        $(".result .next").addClass('passed');
    });

    $(".adulte").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".senior").on('click',function() {
        $(".next").addClass('passed');
    });

    $(".weekEnd").on('click',function() {
        $(".result .next").addClass('passed');
    });

    $(".standart").on('click',function() {
        $(".result .next").addClass('passed');
    });

    $(".goPass10").on('click',function() {
        $(".result .next").addClass('passed');
    });

    $(".button").click(function(){
        setTimeout(function() {
        
            if (
                parseInt($(".simple #count").text())== 0 &&
                parseInt($(".animal #count").text())== 0 &&
                parseInt($(".aeroport #count").text())== 0 &&
                parseInt($(".velo #count").text())== 0 &&
                parseInt($(".surclassement #count").text())== 0
                ) {
                $(".result .next").removeClass('passed');
            };
            if (
                parseInt($(".simple #count").text())== 1 ||
                parseInt($(".animal #count").text())== 1 ||
                parseInt($(".aeroport #count").text())== 1 ||
                parseInt($(".velo #count").text())== 1 ||
                parseInt($(".surclassement #count").text())== 1
                ) {
                $(".result .next").addClass('passed');
            };

        }, 100);
    });

    $(".animal label").click(function(){
        var prixClasse = parseInt($(".prix span").text());
        var checked = $( "input:radio[name=classe]:checked" ).val();
        if (prixClasse == 0) {}
        else{
            if (checked == 2) {
                $(".prixFinal.final").text(prixClasse+6); 
            }
            else{
                $(".prixFinal.final").text(prixClasse); 
            }
        }
    });
};

if($('body').is('.count')){

    var scrollingDivDeux= document.getElementById('scrollable');
        scrollingDivDeux.addEventListener('touchmove', function(event){
            event.stopPropagation();
        });
    
    // record what kind of ticket is selected, add and remove prices events.
    //functions
    function initPrice(prixTicket){
        $(".prix span").text(prixTicket);
        $(".prixFinal").text(prixTicket);                
    };

    function getPriceTicket(prixDeBase,counter){
        var prixTicket = prixDeBase*counter;
        return prixTicket;
    };

    function count(prixDeBase){

        var ticketSupplement = 0;
        //nombre de billet
        var counter = 1;
        $(".simple #plus").click(function(){
            counter++;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            $(".prix span").text(ticketPrice);

            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".simple #count").text(counter);                  
        });

        $(".simple #minus").click(function(){
          if(counter <= 0){
            $(".simple #count").text(counter);
          }
          else{ 
            counter--;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            $(".prix span").text(ticketPrice);

            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".simple #count").text(counter);
          }
        });

        //Animaux
        var counterAnimaux = 0;
        $(".animal #plus").click(function(){
            counterAnimaux++;
            ticketSupplement = ticketSupplement+1.5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".animal #count").text(counterAnimaux);                  
        });

        $(".animal #minus").click(function(){
          if(counterAnimaux <= 0){
            $(".animal #count").text(counterAnimaux);
          }
          else{ 
            counterAnimaux--;
            ticketSupplement = ticketSupplement-1.5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".animal #count").text(counterAnimaux);
          }
        });

        //Aeroport
        var counterAeroport = 0;
        $(".aeroport #plus").click(function(){
            counterAeroport++;
            ticketSupplement = ticketSupplement+5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".aeroport #count").text(counterAeroport);                  
        });

        $(".aeroport #minus").click(function(){
          if(counterAeroport <= 0){
            $(".aeroport #count").text(counterAeroport);
          }
          else{ 
            counterAeroport--;
            ticketSupplement = ticketSupplement-5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".aeroport #count").text(counterAeroport);
          }
        });

        //Velo
        var counterVelo = 0;
        $(".velo #plus").click(function(){
            counterVelo++;
            ticketSupplement = ticketSupplement+2.5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".velo #count").text(counterVelo);                  
        });

        $(".velo #minus").click(function(){
          if(counterVelo <= 0){
            $(".velo #count").text(counterVelo);
          }
          else{ 
            counterVelo--;
            ticketSupplement = ticketSupplement-2.5;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".velo #count").text(counterVelo);
          }
        });

        //Vélo
        var counterSurclassement = 0;
        $(".surclassement #plus").click(function(){
            counterSurclassement++;
            ticketSupplement = ticketSupplement+3;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".surclassement #count").text(counterSurclassement);                  
        });

        $(".surclassement #minus").click(function(){
          if(counterSurclassement <= 0){
            $(".surclassement #count").text(counterVelo);
          }
          else{ 
            counterSurclassement--;
            ticketSupplement = ticketSupplement-3;
            var ticketPrice = getPriceTicket(prixDeBase,counter);
            var prixFinal = ticketPrice+ticketSupplement;
            $(".prixFinal").text(prixFinal);
            $(".surclassement #count").text(counterSurclassement);
          }
        });
    };

    $(".goPass").on('click',function() {
        initPrice(6);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Jeune");
        count(6);
    });

    $(".weekEnd").on('click',function() {
        initPrice(10);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Week-End");
        count(10);
    });

    $(".standart").on('click',function() {
        initPrice(12);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Standard");
        count(12);
    });

    $(".goPass10").on('click',function() {
        initPrice(50);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Jeune 10");
        count(50);
    });

    $(".adulte").on('click',function() {
        initPrice(8);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Adulte");
        count(8);
    });

    $(".senior").on('click',function() {
        initPrice(6);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Senior");
        count(6);
    });

    $(".habitude").on('click',function() {
        initPrice(80);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Habitude");
        count(80);
    });

    $(".illimite").on('click',function() {
        initPrice(140);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Illimité");
        count(140);
    });

    $(".koteur").on('click',function() {
        initPrice(16);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Koteur");
        count(16);
    });

    $(".scolaire").on('click',function() {
        initPrice(40);
        $("body").addClass("ticketIsSelected");
        $(".titreTicket").text("Ticket Scolaire");
        count(40);
    });

    // Cancel events
    $(".overlay").click(function() {
        $("body").removeClass("ticketIsSelected");
        $(".prix span").text("0"); 
        $(".surclassement #count").text("0");
        $(".velo #count").text("0");
        $(".aeroport #count").text("0");
        $(".animal #count").text("0");
        $(".simple #count").text("1");
        $(".prixFinal").text("0"); 
    });
};

