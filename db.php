<?php 

	$connection = mysqli_connect("localhost",'root','','locations_db');

	if(!$connection){
		die('No conectado: ' .mysqli_connect_error());
	}
	

 ?>