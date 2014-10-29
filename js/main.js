$(document).ready(function(){
	
	// Skjuler Header

	$('.slideUp').click(function(){

		$('header').slideUp(500);
		$('.slideDown').slideDown(1000);
	});

	$('.slideDown').click(function(){

		$('header').slideDown(500);
		$('.slideDown').slideUp(300);
	});


	// Aldersgruppen defineres her

	$(function() {

	    $( "#slider-range" ).slider({
	      range: true,
	      min: 14,
	      max: 80,
	      values: [ 18, 70 ],
	      slide: function( event, ui ) {
	        $( "#minValue" ).text( ui.values[ 0 ]  + " år");
	        $( "#maxValue" ).text( ui.values[ 1 ]  + " år");
	      }


	    });
	  
	});


	// Kategori søgefelt bliver styret her 

	 $(function() {
    var availableTags = [
	      "Fodbold",
	      "Tennis",
	      "Badminton",
	      "Kajak",
	      "Roning",
	      "Basketball",
	      "Håndbold",
	      "Windsurfing",
	      "Curling",
	      "Svæveflyvning",
	      "Kitesurfing",
	      "Svømning",
	      "Paintball",
	      "Boksning",
	      "Skate",
	      "Ishockey",
	      "Rulle hockey"
	     
	    ];
	    $( "#tags" ).autocomplete({
	      source: availableTags
	    });
	 });



	// Automatisk indsættelse af bynavn når man indtaster postnummer

	 	$('#postnummer').keyup( function(){



	 		var postnummer = parseInt($('#postnummer').val());
	 	

	 		$('#by').val(byen[postnummer]);s
	 	});


	//Tabbed content.

		//First we make sure to only show the first section
		$('header').children('section').hide();
		$('header').children('section').first().show();

		//When we click a link do this..
		$('nav ul li a').click(function(){
		  
		    //Makes sure the active tab gets a different color
		    $('nav ul li a').removeClass('active');
		    $(this).addClass('active');
		  
		    //we pull out the href E.g #tab2
		    var href = $(this).attr('href');
		  
		    //We slide up all sections and only reveal the one we clicked E.g #tab2
		    $('header').children('section').slideUp(300);
		    $(href).delay(300).slideDown(300);
		  
		});


	//DRAGGABLE 

		$('.ikon').draggable({
			containment: 'document',
			cursor: 'move',
			cursorAt: { bottom: -45, left: 45}, //Virker ikke optimalt, skal måske placeres til sidst? 
			helper: "clone",
			iframeFix: true
			
		});






});