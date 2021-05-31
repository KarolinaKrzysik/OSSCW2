<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

?>
   <form name = "frmAddNewRecord" action= "addedRecord.php" method = "POST">

   <label for="studentid">Student SId</label>
   <input type="text" id="studentid" name="studentid" placeholder="11111111" required><br>
   <label for="password1">Password:</label>
   <input type="password" id="password1" name="password1" placeholder="12345678" required><br>
   <label for="dob">Date Of Birth:</label>
   <input type="text" id="dob" name="dob" placeholder="1999-10-10" required><br>
   <label for="firstname">First name:</label>
   <input type="text" id="firstname" name="firstname" placeholder="John" required><br>
   <label for="lastname">Last name:</label>
   <input type="text" id="lastname" name="lastname" placeholder="Doye" required><br>
   <label for="house">House:</label>
   <input type="text" id="house" name="house" placeholder="23 Victoria Road" required><br>
   <label for="town">Town:</label>
   <input type="text" id="town" name="town" placeholder="High Wycombe" required><br>
   <label for="county">County:</label>
   <input type="text" id="county" name="county" placeholder="Bucks" required><br>
   <label for="country">Country:</label>
   <input type="text" id="country" name="country" placeholder="UK" required><br>
   <label for="postcode">Postcode:</label>
   <input type="text" id="postcode" name="postcode" placeholder="HP 11SX" required><br>
   <label for="image">Picture:</label>
   <input type="file" name="image" accept = "image/jpeg" required><br>
   <input type="submit" value="Add Student" name="btnAddNewRecord">
   </form>

<?php

   echo template("templates/partials/footer.php");
?>
