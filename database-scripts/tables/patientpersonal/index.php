
	<?php
    $con=mysqli_connect("localhost","root","root","health_database");
    mysql_set_charset('utf8',$con);
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //Δημιουργία Πίνακα Persons    
    $sql="CREATE TABLE patientPersonal( patientId INT, patientName CHAR(30), patientLastName CHAR(30), patientFather CHAR(60), patientAdress CHAR(30), patientPhone INT, patientSex CHAR(30), patientAmka INT)";

    
    if (mysqli_query($con,$sql))
    {
      echo "Table 'patientPersonal' created successfully";
    }
    else
    {
      echo "Error creating table: " . mysqli_error($con);
    }
?>