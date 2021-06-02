<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

?>

<a href="http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/index.php" class="btn btn-primary btn-lg" style="width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>  Back</a>

   <div><h2 class="display-5">Add a new Student Record</h2></div>
   <form enctype = "multipart/form-data" name = "frmAddNewRecord" action= "addedRecord.php" method = "POST">

   <label for="studentid" class="form-label" style="font-weight:bold">Student ID</label>
   <input type="text" id="studentid" name="studentid" placeholder="11111111" required class="form-control"><br>
   <label for="password1" class="form-label" style="font-weight:bold">Password</label>
   <input type="password" id="password1" name="password1" placeholder="12345678" required class="form-control"><br>
   <label for="dob" class="form-label" style="font-weight:bold">Date Of Birth</label>
   <input type="text" id="dob" name="dob" placeholder="1999-10-10" required class="form-control"><br>
   <label for="firstname" class="form-label" style="font-weight:bold">First name</label>
   <input type="text" id="firstname" name="firstname" placeholder="John" required class="form-control"><br>
   <label for="lastname" class="form-label" style="font-weight:bold">Last name</label>
   <input type="text" id="lastname" name="lastname" placeholder="Doye" required class="form-control"><br>
   <label for="house" class="form-label" style="font-weight:bold">House</label>
   <input type="text" id="house" name="house" placeholder="23 Victoria Road" required class="form-control"><br>
   <label for="town" class="form-label" style="font-weight:bold">Town</label>
   <input type="text" id="town" name="town" placeholder="High Wycombe" required class="form-control"><br>
   <label for="county" class="form-label" style="font-weight:bold">County</label>
   <input type="text" id="county" name="county" placeholder="Bucks" required class="form-control"><br>
   <label for="country" class="form-label" style="font-weight:bold">Country</label>
   <input type="text" id="country" name="country" placeholder="UK" required class="form-control"><br>
   <label for="postcode" class="form-label" style="font-weight:bold">Postcode</label>
   <input type="text" id="postcode" name="postcode" placeholder="HP 11SX" required class="form-control"><br>
   <label for="image" class="form-label" style="font-weight:bold">Picture</label>

   <input type="file" name="image" accept="image/jpeg" class="form-control" required><br>

   <input type="submit" value="Add Student" name="btnAddNewRecord" class="btn btn-primary btn-lg">
   </form>

<?php

   echo template("templates/partials/footer.php");
?>
