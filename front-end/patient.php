<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=windows- 1253">
  <title>Στοιχεία Ασθενή</title>
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

             <div align = "center">
            <p align="center" class="style" id="maintext">
              

              <form action="editpatientpersonal.php" method="POST" "validate();">
              <center>
              		<h3>Τα προσωπικά στοιχεία του Ασθενή: </h3>
              		

                      <?php
                      session_start();
                      include("connection.php"); 

    	  			  $query  = "SELECT patientId, patientName, patientLastName, patientFather, patientAdress, patientPhone, patientSex, patientAmka   FROM patientPersonal WHERE patientId='$_SESSION[patientId]'";
                      $res=mysql_db_query('health_database', $query);
                      while($newarray=mysql_fetch_array($res))
                        {
                          $Pid=$newarray['patientId']; 
                          $Pname=$newarray['patientName']; 
                          $Plname=$newarray['patientLastName'];
						  $Pfname=$newarray['patientFather']; 
                          $Padress=$newarray['patientAdress']; 
                          $Pphone=$newarray['patientPhone']; 
                          $Psex=$newarray['patientSex']; 
                          $Pamka=$newarray['patientAmka']; 
                          ?>
                          
					          	  <center>
					       		  <table width="300" cellspacing="1" border="2" bordercolor="orange" align="center">
					              <tr> 
					              <td>

					                  <div align = "center">


					                    <font face="verdana" size="2"></br>
					                      <b> ID:</b>
					                    </font>
					                    <input type="text" name="patientId" value="<?php echo $Pid; ?>"></br>

					                    <font face="verdana" size="2"></br>
					                      <b> Όνομα:</b>
					                    </font>
					                    <input type="text" name="patientName" value="<?php echo $Pname; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> Επώνυμο:</b>
					                    </font>
					                    <input type="text" name="patientLastName" value="<?php echo $Plname; ?>"></br>
					                    
					                    <font face="verdana" size="2"></br>
					                      <b> Όνομα Πατρός:</b>
					                    </font>
					                    <input type="text" name="patientFather" value="<?php echo $Pfname; ?>"></br>

					                    <font face="verdana" size="2"></br>
					                      <b> Διεύθυνση:</b>
					                    </font>
					                    <input type="text" name="patientAdress" value="<?php echo $Padress; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> Τηλέφωνο:</b>
					                    </font>
					                    <input type="text" name="patientPhone" value="<?php echo $Pphone; ?>"></br>
					                    
					                     <font face="verdana" size="2"></br>
					                      <b> Φύλο:</b>
					                    </font>
					                    <input type="text" name="patientSex" value="<?php echo $Psex; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> AMKA:</b>
					                    </font>
					                    <input type="text" name="patientAmka" value="<?php echo $Pamka; ?>"></br>
					                    
					                      <div align="center"><br>

					                      </div>
					                 </font>
					                </td>
					              </tr> 
					            </table> 
					          </center> <br>
					          <input type="submit" value="Υποβολή & Προβολή 'Ιδιότητες'" align = "center"><br>
					        	</form>

					        	<?php
								}

                      ?>
  
                      </div>  
             </center>
          </div>
        </div>
      </td>
    </tr>




</body>
</html>