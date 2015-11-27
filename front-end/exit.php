<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=windows- 1253">
  <title>Αποσύνδεση!</title>
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
            <p align="center" class="style3" id="maintext">


              </br></br></br></br></br></br></br></br>

              <form action="index.html" method="POST" "validate();">
              <center>
            
                      Είστε σίγουρος ότι θέλετε να αποσυνδεθείτε κ. 

                      <?php
                      session_start();
                      include("connection.php"); 

                      $query  = "SELECT doctorName, doctorLastName  FROM doctor WHERE username='$_SESSION[username]'";
                      $res=mysql_db_query('health_database', $query);
                      
                      while($newarray=mysql_fetch_array($res))
                        {
                          $Fname=$newarray['doctorName']; 
                          $Lname=$newarray['doctorLastName'];
                          echo $Fname;
                          echo " ";
                          echo $Lname;
                          echo ";";
                        }

                      ?>
                      <br> <br> 
                      <div align="center">
                       <input type="submit" value="Αποσύνδεση" align = "center"><br>
                      </div>
                 
             </center> 
            </form>

          

          </div>
        </div>
      </td>
    </tr>




</body>
</html>