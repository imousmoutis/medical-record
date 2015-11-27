<?php
	session_start( );
	include("connection.php"); 



	$patientId=$_POST['patientId'];
	$patientAmka=$_POST['patientAmka'];
	$patientLast=$_POST['patientLast'];
	$patientDoctor=$_POST['patientDoctor'];

	$_SESSION['patientId'] =$patientId;
	$_SESSION['patientAmka'] =$patientAmka;
	$_SESSION['patientLast'] =$patientLast;
	$_SESSION['patientDoctor'] =$patientDoctor;

	 mysql_select_db('health_database');
	mysql_query("UPDATE patientInfo  SET patientId='$patientId',patientAmka='$patientAmka', patientLast='$patientLast', patientDoctor='$patientDoctor' WHERE patientId='".$_POST["patientId"]."'")
	or die(mysql_error()); 

	header("Location: patient2.php"); 




?>
