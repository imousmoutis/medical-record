<?php
  session_start( );
  include("connection.php"); 

  $patientId=$_POST['patientId'];
  
  
  $_SESSION['patientId'] =$patientId;

  $sql="SELECT * FROM patientPersonal WHERE patientId='$patientId'";
  $res=mysql_db_query('health_database', $sql);
  if (($res!=null) && (mysql_num_rows($res)>0))
  {
    $_SESSION['patientId'] = $_POST['patientId'];
     header("Refresh: 5; url= patient.php");    
    echo "Ο Ασθενής βρέθηκε!";
    echo" Μπορείτε τώρα να δείτε την καρτέλα του.";
  }
  else
  {
    header("Refresh: 5; url= find.html");
    echo"Δε βρέθηκε ο ασθενής..";
    echo" Ξαναπροσπαθήστε!";
  }
?>
