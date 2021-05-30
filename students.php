<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $counter = 1;
   $studentsDelete = array();

   echo template("templates/partials/header.php");

   $sql = "SELECT studentid, dob, firstname, lastname, house, town, county, country, postcode FROM student";
   $result = mysqli_query($conn, $sql);

   //form with a checkbox column
   echo "<form name = 'frmCheckboxes' action= 'deleteRecords.php' method = 'POST'>";

      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='50' align='center'>Students Records</th></tr>";
      $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>Firstname</th><th>Lastname</th><th>House</th>
      <th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Choose</th>
      </tr>";
      // Display the modules within the html table

      
      while($row = mysqli_fetch_array($result)) {
        $data['content'] .= "<td>$row[studentid]</td><td> $row[dob] </td><td> $row[firstname] </td>";
        $data['content'] .= "<td> $row[lastname] </td><td> $row[house] </td><td> $row[town] </td>";
        $data['content'] .= "<td> $row[county] </td><td> $row[country] </td><td> $row[postcode]</td>
        <td><input type='checkbox' id='$row[studentid]' name'deleteStudent[]' value='$row[studentid]'>
        <label for='student$counter'></label><br></td>
        </tr>";   
      }
      $data['content'] .= "</table>";
      
      echo template("templates/default.php", $data);
      echo "<input type='submit' value='Delete Records' name = 'btnDelete'>";
      echo "<input type = 'hidden' name = 'hiddenRecords' value = deleteStudent>";
      echo "</form>";

   echo template("templates/partials/footer.php");

?>