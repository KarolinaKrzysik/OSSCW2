<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

?>

   <form name = 'frmCheckboxes' action= '' method = 'POST'>
   <label for="studentid">StudentId</label>
   <input type="text" id="studentid" name="studentid" placeholder="11111111"><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" placeholder="12345678"><br>
   <label for="dob">Date Of Birth:</label>
   <input type="text" id="dob" name="dob" placeholder="1999-10-10"><br>
   <label for="firstname">First name:</label>
   <input type="text" id="firstname" name="firstname" placeholder="John"><br>
   <label for="lastname">Last name:</label>
   <input type="text" id="lastname" name="lastname" placeholder="Doye"><br>
   <label for="house">House:</label>
   <input type="text" id="house" name="house" placeholder="23 Victoria Road"><br>
   <label for="town">Town:</label>
   <input type="text" id="town" name="town" placeholder="High Wycombe"><br>
   <label for="county">County:</label>
   <input type="text" id="county" name="county" placeholder="Bucks"><br>
   <label for="country">Country:</label>
   <input type="text" id="country" name="country" placeholder="UK"><br>
   <label for="postcode">Postcode:</label>
   <input type="text" id="postcode" name="postcode" placeholder="HP 11SX"><br>
   <input type="submit" placeholder="Submit">
   
   </form>

<?php

   echo template("templates/partials/footer.php");
?>
