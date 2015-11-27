
	<?php
    $con=mysqli_connect("localhost","root","root","health_database");
    mysql_set_charset('utf8',$con);
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //Δημιουργία Πίνακα Persons    
    $sql="CREATE TABLE patientInfo( patientId INT, patientAmka INT, patientLast CHAR(30), patientDoctor CHAR(30) )";

    
    if (mysqli_query($con,$sql))
    {
      echo "Table 'patientInfo' created successfully";
    }
    else
    {
      echo "Error creating table: " . mysqli_error($con);
    }
?>