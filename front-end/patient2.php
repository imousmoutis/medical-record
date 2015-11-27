<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=windows- 1253">
  <title>Καταχώρηση Νέου Ασθενή</title>
  <link rel="shortcut icon" href="https://hos-static-assets.s3.amazonaws.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 


</head>

<body>

  <table width="930" height="230" border="10" bgcolor="black" align="center">
    <tr>
      <td height="350" align="center" valign="top" bgcolor="#C0C0C0">
         <div align="center">
            <p class="style1"><img src="https://www.helenhayeshospital.org/wp-content/uploads/2010/08/medical-records.jpg" width="1000" height="250"></p>
           
          </div>

          <div id="leftnav">
             <div id="pageNav">
                <div id="sectionLinks">
                  <a href="find.html">Προβολή Καρτέλα Ασθενή</a>
                  <a href="add.php">Καταχώρηση Νέου Ασθενή</a>
                  <a href="doctor.php">Στοιχεία Ιατρού</a>
                  <a href="exit.php">Αποσύνδεση από το Σύστημα</a>
                </div>
              </div>
            </div>
            <h3>Iστορικό του Ασθενή:<h3><br>

            <div align = "center">

              <form action="editpatientMedical.php" method="POST" "validate();">
                <table width="300" cellspacing="1" border="2" bordercolor="orange" align="center">
                  <tr>
                    <td>
                      <div align = "center">

                      <?php
                      session_start();
                      include("connection.php"); 
                       
                      
                      $query  = "SELECT patientId, patientAmka, patientAllergies, patientPrognosi  FROM patientMedical WHERE patientId='$_SESSION[patientId]'";
                      $res=mysql_db_query('health_database', $query);


                        while($newarray=mysql_fetch_array($res))
                        {
                          $toid=$newarray['patientId']; 
                          $toamka=$newarray['patientAmka'];
                          $toallergies=$newarray['patientAllergies'];
                          $toprognosi=$newarray['patientPrognosi'];

                        }
                        ?>

                              <font face="verdana" size="2"></br>
                                <b> ID:</b>
                              </font>
                              <input type="text" name="patientId" value="<?php echo $toid; ?>"></br>

                              <font face="verdana" size="2"></br>
                                <b> ΑΜΚΑ:</b>
                              </font>
                              <input type="text" name="patientAmka" value="<?php echo $toamka; ?>"></br>

                              <font face="verdana" size="2"></br>
                                <b> Αλλεργίες:</b>
                              </font>
                              <input type="text" name="patientAllergies" value="<?php echo $toallergies; ?>" ></br>
                              
                               <font face="verdana" size="2"></br>
                                <b> Πρόγνωση:</b>
                              </font>
                              <input type="text" name="patientPrognosi" value="<?php echo $toprognosi; ?>" ></br></br>

                                </div>
                           </font>
                          </td>
                        </tr> 
                      </table> 
                    </center> <br>
                    <input type="submit" value="Τελική Υποβολή" align = "center"><br>



        </div>
      </td>
    </tr>
  </table>

?>
  
</body>
</html>