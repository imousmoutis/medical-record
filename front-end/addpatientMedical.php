<?php
	session_start( );
	include("connection.php"); 



	$patientId=$_POST['patientId'];
	$patientAmka=$_POST['patientAmka'];
	$patientAllergies=$_POST['patientAllergies'];
	$patientPrognosi=$_POST['patientPrognosi'];

	$_SESSION['patientId'] =$patientId;
	$_SESSION['patientAmka'] =$patientAmka;
	$_SESSION['patientAllergies'] =$patientAllergies;
	$_SESSION['patientPrognosi'] =$patientPrognosi;

	 mysql_select_db('health_database');
	$sql="INSERT INTO patientMedical (patientId, patientAmka, patientAllergies, patientPrognosi)
	VALUES ('$patientId','$patientAmka','$patientAllergies','$patientPrognosi')";
	mysql_query($sql, $con);

	header("Location: main.php"); 




?>
