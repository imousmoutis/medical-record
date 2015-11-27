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
	mysql_query("UPDATE patientMedical  SET patientId='$patientId',patientAmka='$patientAmka', patientAllergies='$patientAllergies', patientPrognosi='$patientPrognosi' WHERE patientId='".$_POST["patientId"]."'")
	or die(mysql_error()); 

	header("Location: main.php"); 




?>
