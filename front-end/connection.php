<?php
	$con=mysql_connect("localhost","root","root","health_database");
	
	if (!$con)
 	{
 		 die('Could not connect: ' . mysql_error());
  	}
?>