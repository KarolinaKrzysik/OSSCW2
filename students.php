<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $counter = 1;
   echo template("templates/partials/header.php");
?>

<?php
   $sql = "SELECT studentid, dob, firstname, lastname, house, town, county, country, postcode FROM student";
   $result = mysqli_query($conn, $sql);
// Confirm that the records are wished to be deleted when the form is submitted

  ?>
   <form name = 'frmCheckboxes' action= 'deleteRecords.php' method = 'POST' 
   onsubmit="return confirm(' Are you sure you want to delete these records?');">
   <?php
     //Make structure of the table, prepare headers
      echo 
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='50' align='center'>Students Records</th></tr>";
      $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>Firstname</th><th>Lastname</th><th>House</th>
      <th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Choose</th>
      </tr>";
      // Display the students in student table

      while($row = mysqli_fetch_array($result)) {
        $data['content'] .= "<td>$row[studentid]</td><td> $row[dob] </td><td> $row[firstname] </td>";
        $data['content'] .= "<td> $row[lastname] </td><td> $row[house] </td><td> $row[town] </td>";
        $data['content'] .= "<td> $row[county] </td><td> $row[country] </td><td> $row[postcode]</td>
        <td><input type='checkbox' id='$row[studentid]' name = 'deleteStudent[]' value='$row[studentid]'>
        <label for='student$counter'></label><br></td>
        </tr>";  
        $counter++; 
      }
      $data['content'] .= "</table>";
      echo template("templates/default.php", $data);
      echo "<input onclick='confirmAction()' type='submit' value='Delete Records' name = 'btnDelete'>";
      echo "</form>";
   
   
   echo template("templates/partials/footer.php");

   ?>