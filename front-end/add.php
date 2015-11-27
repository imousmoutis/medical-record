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
            <h3>Βήμα 1: Εισάγετε τα προσωπικά στοιχεία του Ασθενή<h3><br>

            <div align = "center">

              <form action="addpatientPersonal.php" method="POST" "validate();">
                <table width="300" cellspacing="1" border="2" bordercolor="orange" align="center">
                  <tr>
                    <td>
                      <div align = "center">


                              <font face="verdana" size="2"></br>
                                <b> ID:</b>
                              </font>
                              <input type="text" name="patientId"></br>

                              <font face="verdana" size="2"></br>
                                <b> Όνομα:</b>
                              </font>
                              <input type="text" name="patientName" ></br>
                                

                              <font face="verdana" size="2"></br>
                                <b> Επώνυμο:</b>
                              </font>
                              <input type="text" name="patientLastName" ></br>

                              <font face="verdana" size="2"></br>
                                <b> Όνομα Πατρός:</b>
                              </font>
                              <input type="text" name="patientFather" ></br>                              
                          
                              <font face="verdana" size="2"></br>
                                <b> Διεύθυνση:</b>
                              </font>
                              <input type="text" name="patientAdress" ></br>
                                
                              <font face="verdana" size="2"></br>
                                <b> Τηλέφωνο:</b>
                              </font>
                              <input type="text" name="patientPhone" ></br>
                              
                               <font face="verdana" size="2"></br>
                                <b> Φύλο:</b>
                              </font>
                              <input type="text" name="patientSex" ></br>

                              <font face="verdana" size="2"></br>
                                <b> ΑΜΚΑ:</b>
                              </font>
                              <input type="text" name="patientAmka" ></br>

                                </div>
                           </font>
                          </td>
                        </tr> 
                      </table> 
                    </center> <br>
                <input type="submit" value="Συνέχεια" align = "center"><br>



        </div>
      </td>
    </tr>
  </table>


  
</body>
</html>