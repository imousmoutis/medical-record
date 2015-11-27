<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=windows- 1253">
  <title>Στοιχεία Ιατρού</title>
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


              </br>

              <form action="doctorchange.php" method="POST" "validate();">
              <center>
            
              		Τα στοιχεία που έχετε εισάγει είναι τα παρακάτω!
              		<br>Θέλετε να τα επεξεργαστείτε;</br><br>

                      <?php
                      session_start();
                      include("connection.php"); 

                      $query  = "SELECT doctorId, doctorName, doctorLastName, doctorAdress, doctorPhone, username, password  FROM doctor WHERE username='$_SESSION[username]'";
                      $res=mysql_db_query('health_database', $query);
                      
                      while($newarray=mysql_fetch_array($res))
                        {
                          $Fid=$newarray['doctorId']; 
                          $Fname=$newarray['doctorName']; 
                          $Lname=$newarray['doctorLastName'];
                          $Fadress=$newarray['doctorAdress']; 
                          $Fphone=$newarray['doctorPhone']; 
                          $Fuser=$newarray['username']; 
                          $Fpass=$newarray['password']; 
                          ?>
                          
					          	  <center>
					       		  <table width="300" cellspacing="1" border="2" bordercolor="orange" align="center">
					              <tr> 
					              <td>

					                  <div align = "center">


					                    <font face="verdana" size="2"></br>
					                      <b> ID:</b>
					                    </font>
					                    <input type="text" name="doctorId" value="<?php echo $Fid; ?>"></br>

					                    <font face="verdana" size="2"></br>
					                      <b> Όνομα:</b>
					                    </font>
					                    <input type="text" name="doctorName" value="<?php echo $Fname; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> Επώνυμο:</b>
					                    </font>
					                    <input type="text" name="doctorLastName" value="<?php echo $Lname; ?>"></br>
					                    
					                    <font face="verdana" size="2"></br>
					                      <b> Διεύθυνση:</b>
					                    </font>
					                    <input type="text" name="doctorAdress" value="<?php echo $Fadress; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> Τηλέφωνο:</b>
					                    </font>
					                    <input type="text" name="doctorPhone" value="<?php echo $Fphone; ?>"></br>
					                    
					                     <font face="verdana" size="2"></br>
					                      <b> Username:</b>
					                    </font>
					                    <input type="text" name="username" value="<?php echo $Fuser; ?>"></br>
					                      

					                    <font face="verdana" size="2"></br>
					                      <b> Password:</b>
					                    </font>
					                    <input type="text" name="password" value="<?php echo $Fpass; ?>"></br>
					                    
					                      <div align="center"><br>

					                      </div>
					                 </font>
					                </td>
					              </tr> 
					            </table> 
					          </center> <br>
					          <input type="submit" value="Υποβολή" align = "center"><br>
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