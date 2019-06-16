<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Gabagabs</title>
	<link rel="icon" type="image/png" href="logo.png">
	

	<!-- Bootstrap -->

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!-- Font Awesome -->

<link href="css/font-awesome.min.css" rel="stylesheet">

     <!-- Icon Font-->
<link rel="stylesheet" href="css/style.css">


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   
</head>
<body>


<!-- Navigation -->
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
      <a class="navbar-brand" href="index.html" style="text-transform: uppercase;"> ZafiroDEV</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Sobre mí</a>
          </li>

         <li class="nav-item">
            <a class="nav-link" href="#">Mapas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Distancia</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="position-relative">
	<?php
		include_once 'getDistanceMapBox.php';
	?>
</div>
	
</body>
</html>