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
	$sql="INSERT INTO patientInfo (patientId, patientAmka, patientLast, patientDoctor)
	VALUES ('$patientId','$patientAmka','$patientLast','$patientDoctor')";
	mysql_query($sql, $con);

	header("Location: add2.php"); 




?>
