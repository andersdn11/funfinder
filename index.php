<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Fun Finder - find aktiviter nær dig og mød nye mennesker</title>
        <meta name="description" content="På Fun Finder kan du deltage i aktiviteter nær dig. Det er GRATIS og vil altid være det.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- pace loading ikon skal inkluderes tidligst muligt. -->
        <link rel="stylesheet" href="css/pace.css">
        <script src="js/pace.js"></script>

         <!-- stylesheets -->

        <link href='http://fonts.googleapis.com/css?family=Raleway:500,800,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- til For Google maps lokation til at virke. -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

       


    </head>
    <body>
      
        <header>

			
					
		<?php include('includes/find.php'); ?>
		<?php include('includes/opret.php'); ?>
		<?php include('includes/firma.php'); ?>

		<?php include('includes/nav.php'); ?>	



			<!-- Arrow slideup  -->
			
				<p class="center slideUp"> <img src="SVG/arrowUp.svg"> </p>
			


        </header> 
        

	        <!-- Arrow slideDown  -->
	       	
					<p class="center slideDown"><img src="SVG/arrowDown.svg"></p>
		





		


<!-- Embed det gamle map via javascript, nødvendigt for API. VIDST NOK! -->
        <div id="map-canvas"></div>

<!-- Embed det nye map  -->
        
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17994.45788392817!2d12.585475114111315!3d55.68364605042227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sda!2sdk!4v1400578685839"  frameborder="0" style="border:0"></iframe>

<!-- Altid scripts i bunden, så siden loader først derefter scripts -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
       
        <script src="js/blur.js"></script>
       	<script src="js/byer.js"></script>
        <script src="js/main.js"></script>
       

      
    </body>

</html>
