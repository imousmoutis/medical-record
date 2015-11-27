
	<?php
    $con=mysqli_connect("localhost","root","root","health_database");
    mysql_set_charset('utf8',$con);
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //Δημιουργία Πίνακα Persons    
    $sql="CREATE TABLE patientMedical( patientId INT, patientAmka INT, patientAllergies CHAR(200), patientPrognosi CHAR(200))";

    
    if (mysqli_query($con,$sql))
    {
      echo "Table 'patientMedical' created successfully";
    }
    else
    {
      echo "Error creating table: " . mysqli_error($con);
    }
?>