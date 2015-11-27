<?php
	session_start( );
	include("connection.php"); 



	$patientId=$_POST['patientId'];
	$patientName=$_POST['patientName'];
	$patientLastName=$_POST['patientLastName'];
	$patientFather=$_POST['patientFather'];
	$patientAdress=$_POST['patientAdress'];
	$patientPhone=$_POST['patientPhone'];
	$patientSex=$_POST['patientSex'];
	$patientAmka=$_POST['patientAmka'];

	$_SESSION['patientId'] =$patientId;
	$_SESSION['patientName'] =$patientName;
	$_SESSION['patientLastName'] =$patientLastName;
	$_SESSION['patientFather'] =$patientFather;
	$_SESSION['patientAdress'] =$patientAdress;
	$_SESSION['patientPhone'] =$atientPhone;
	$_SESSION['patientSex'] =$patientSex;
	$_SESSION['patientAmka'] =$patientAmka;

	 mysql_select_db('health_database');
	 mysql_query("UPDATE patientPersonal  SET patientId='$patientId',patientName='$patientName', patientLastName='$patientLastName', patientFather='$patientFather', patientAdress='$patientAdress', patientPhone='$patientPhone', patientSex='$patientSex', patientAmka='$patientAmka' WHERE patientId='".$_POST["patientId"]."'")

	or die(mysql_error()); 

	header("Location: patient1.php"); 




?>
