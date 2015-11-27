<?php
	$con = mysql_connect("localhost","root","root");
	mysql_set_charset("utf8", $your_connection_name);


	    if (!$con)
	    {
	    	die('Could not connect: ' . mysql_error());
	    }

	    //Δημιουργία Βάσης health_database

	  
	    if (mysql_query("CREATE DATABASE health_database",$con))
	    {
	   		echo "Database created";
	    }
	    else
	    {
	    	echo "Error creating database: ".mysql_error();
	    }
	    mysql_close($con);

    mysql_close($con);
?>
