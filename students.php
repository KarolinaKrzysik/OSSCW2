<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

   $sql = "SELECT studentid, dob, firstname, lastname, house, town, county, country, postcode FROM student";
   $result = mysqli_query($conn, $sql);

   $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='50' align='center'>Students Records</th></tr>";
      $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>Firstname</th><th>Lastname</th><th>House</th>
      <th>Town</th><th>County</th><th>Country</th><th>Postcode</th>
      </tr>";
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
        
         $data['content'] .= "<tr><td> $row[studentid]  </td><td> $row[dob] </td><td> $row[firstname] </td>";
         $data['content'] .= "<td> $row[lastname] </td><td> $row[house] </td><td> $row[town] </td>";
         $data['content'] .= "<td> $row[county] </td><td> $row[country] </td><td> $row[postcode] </td>
         </tr>";
      }
      $data['content'] .= "</table>";

      // render the template
      echo template("templates/default.php", $data);

   echo template("templates/partials/footer.php");

?>