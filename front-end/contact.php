<?php
	session_start( );
	include("connection.php"); 

	$username=$_POST['username'];
	$password=$_POST['password'];

	if ($_POST['username'] == admin && $_POST['password']==admin)
	{
		header("Refresh: 3; url= main.php");
		echo "Εισάγατε τα κλειδιά ;)!";
		exit();
	}
	
	$_SESSION['username'] =$username;
	$_SESSION['password'] =$password;

	$sql="SELECT * FROM doctor WHERE username='$username' AND password='$password'";
	$res=mysql_db_query('health_database', $sql);
	if (($res!=null) && (mysql_num_rows($res)>0))
	{
		$_SESSION['username'] = $_POST['username']; $_SESSION['password'] = $_POST['password'];
		header("Refresh: 3; url= main.php");
		echo "Συνδεθήκατε με την βάση!";
	}
	else
	{
		header("Refresh: 5; url= index.html");
		echo"Access Denied!";
	}
?>
