<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $counter = 1;
   echo template("templates/partials/header.php");
?>

<?php
   $sql = "SELECT studentid, dob, firstname, lastname, house, town, county, country, postcode, image FROM student";
   $result = mysqli_query($conn, $sql);
// Confirm that the records are wished to be deleted when the form is submitted

  ?>
   <form name = 'frmCheckboxes' action = 'deleteRecords.php' method = 'POST' 
   onsubmit="return confirm(' Are you sure you want to delete these records?');">
      <!-- back btn -->
      <a href="http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/index.php" class="btn btn-primary btn-lg" style="width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
      </svg>  Back</a>
      <?php

      //Display info about the records which were deleted
      if($_POST['messageAfterDelete']){
         echo $_POST['messageAfterDelete'];
      }
     //Make structure of the table, prepare headers
      echo 
      $data['content'] .= "<table border='1' class='table table-striped table-light table-hover align-middle'>";
      $data['content'] .= "<p class='display-5'>Students Records</p>";
      $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>Firstname</th><th>Lastname</th><th>House</th>
      <th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Image</th></th><th>Delete</th>
      </tr>";
      // Display the students in student table

      while($row = mysqli_fetch_array($result)) {
        $data['content'] .= "<td class='fw-bolder'>$row[studentid]</td><td> $row[dob] </td><td> $row[firstname] </td>";
        $data['content'] .= "<td> $row[lastname] </td><td> $row[house] </td><td> $row[town] </td>";
        $data['content'] .= "<td> $row[county] </td><td> $row[country] </td><td> $row[postcode]</td>
        <td><img src='getjpg.php?studentid=$row[studentid]' height = '100' width = '100' class='rounded'/></td>
        <td><input type='checkbox' id='$row[studentid]' name = 'deleteStudent[]' value='$row[studentid]' class='form-check-input'  style='width:40px; height:40px'>
        <label for='student$counter'></label><br></td>
        </tr>";  
        $counter++; 
        //<img src='getjpg.php?id=$row[id]' height = '100' width = '100'/>
      }
      $data['content'] .= "</table>";
      echo template("templates/default.php", $data);
      echo "<input onclick='confirmAction()' type='submit' value='Delete Records' name = 'btnDelete' class='btn btn-primary btn-lg'>";
      echo "</form>";
   
   echo template("templates/partials/footer.php");

   ?>