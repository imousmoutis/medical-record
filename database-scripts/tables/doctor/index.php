
	<?php
    $con=mysqli_connect("localhost","root","root","health_database");
    mysql_set_charset('utf8',$con);
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //Δημιουργία Πίνακα Persons    
    $sql="CREATE TABLE doctor (doctorId INT, doctorName CHAR(30), doctorLastName CHAR(30), doctorAdress CHAR(30), doctorPhone INT, username CHAR(30), password CHAR(30))";

    
    if (mysqli_query($con,$sql))
    {
      echo "Table 'doctor' created successfully";
    }
    else
    {
      echo "Error creating table: " . mysqli_error($con);
    }
?>