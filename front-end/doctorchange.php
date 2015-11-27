<?php
	session_start( );
	include("connection.php"); 

	$doctorId=$_POST['doctorId'];
	$doctorName=$_POST['doctorName'];
	$doctorLastName=$_POST['doctorLastName'];
	$doctorAdress=$_POST['doctorAdress'];
	$doctorPhone=$_POST['doctorPhone'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$_SESSION['doctorId'] =$doctorId;
	$_SESSION['doctorName'] =$doctorName;
	$_SESSION['doctorLastName'] =$doctorLastName;
	$_SESSION['doctorAdress'] =$doctorAdress;
	$_SESSION['doctorPhone'] =$doctorPhone;
	$_SESSION['username'] =$username;
	$_SESSION['password'] =$password;

	mysql_select_db('health_database');

	mysql_query("UPDATE doctor SET doctorId='$doctorId',doctorName='$doctorName', doctorLastName='$doctorLastName', doctorAdress='$doctorAdress', doctorPhone='$doctorPhone', username='$username', password='$password' WHERE doctorId='".$_POST["doctorId"]."'")
 	or die(mysql_error()); 

 			header("Refresh: 3; url= doctor.php");
		echo "Τα στοιχεία ανανεώθηκαν με επιτυχία!";


?>
