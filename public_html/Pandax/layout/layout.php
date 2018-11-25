<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--custome css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <title>
        Pandax
    </title>

</head>

<body>
	<div>
		<?php include("Pandax/pageContent/HomeBar.php"); ?>
	</div>
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
</body>

</html>




