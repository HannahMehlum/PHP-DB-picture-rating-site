<?php
//connection to database
	$a = mysqli_connect("mehlumconsulting.com.mysql", "mehlumconsulting_com", "Lnex3MV2xjsF4CaALJPeRwi8") or die("Error processing the request");
	mysqli_select_db($a, "mehlumconsulting_com") or die("Could not connect to database"); //database name=gamequiz
	//echo "Connected";
?>