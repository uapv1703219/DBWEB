<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- google library -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Librairie jQuery -->
    <link rel="css/stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--custome css -->
    <!-- Corp -->
     <link href="css/style.css" rel="stylesheet">  
    <!-- Chat css -->
    <link href="Pandax/pageContent/Chat.css" rel="stylesheet"> 
    <!-- Jumbotron -->
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">


    <title>
        Pandax
    </title>

</head>

<body>
    <!-- Home bar + chat -->

	<?php include("Pandax/pageContent/HomeBar.php"); ?>

    <!-- Content -->
     <div id="website" class="container-fluid">
    	<div class="row">
	        <?php include($template_session); ?>
	    </div>
    </div>
    <div> 
		<center>
	    	<p class="mt-5 mb-3 text-muted">© Nathan & Florian Corporation</p>
	    </center>
    </div> 


          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>




