<?php


	$con=mysqli_connect("localhost","root","root","health_database");
	mysql_set_charset('utf8',$con);
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	mysqli_query($con,"INSERT INTO doctor (doctorId, doctorName, doctorLastName, doctorAdress, doctorPhone, username, password)
	VALUES (1, 'System', 'Doctor','online', 2310,'test','test')");
	

	
	mysqli_close($con);
?>