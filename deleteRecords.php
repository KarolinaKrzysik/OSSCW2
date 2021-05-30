<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
   echo template("templates/partials/header.php");
   
   if($_POST["deleteStudent"]){

      echo "Student records: ";
      foreach ($_POST['deleteStudent'] as $value){
         
         $sql2 = "DELETE FROM student WHERE studentid = $value";
         $result = mysqli_query($conn, $sql2);
         
         echo "$value ";
       }
       echo 'have been successfuly deleted.';
   }else{
      echo '0 records have been deleted.';
   }
   echo template('templates/partials/footer.php');

?>