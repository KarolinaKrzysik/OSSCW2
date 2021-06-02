<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $messageAfterDalate = "";
   
   echo template("templates/partials/header.php");
?>
   <a href="http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/students.php" class="btn btn-primary btn-lg" style="width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
   </svg>  Back</a>
<?php   
   if($_POST["deleteStudent"]){

      $messageAfterDalate = "Student records: ";
      foreach ($_POST['deleteStudent'] as $value){
         
         $sql2 = "DELETE FROM student WHERE studentid = $value";
         $result = mysqli_query($conn, $sql2);
         
         $messageAfterDalate .= "$value ";
       }
       $messageAfterDalate .= "have been successfuly deleted";
       echo "<div class='alert alert-success' role='alert'>
      <p>$messageAfterDalate!</p>
      </div>";
   }else{
      $messageAfterDalate = "0 records have been deleted.";
      echo $messageAfterDalate;
      $_POST['messageAfterDelete'] = $messageAfterDalate;
      header('Location: http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/students.php');
      exit;
      
   }
   echo template('templates/partials/footer.php');

?>