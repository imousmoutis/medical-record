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
	$sql="INSERT INTO patientPersonal (patientId, patientName, patientLastName, patientFather, patientAdress, patientPhone, patientSex, patientAmka)
	VALUES ('$_SESSION[patientId]','$patientName','$patientLastName','$patientFather','$patientAdress','$patientPhone','$patientSex','$patientAmka')";
	mysql_query($sql, $con);

	header("Location: add1.php"); 




?>
