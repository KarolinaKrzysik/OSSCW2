<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // If a module has been selected
   if (isset($_POST['selmodule'])) {
      $sql = "insert into studentmodules values ('" .  $_SESSION['id'] . "','" . $_POST['selmodule'] . "');";
      $result = mysqli_query($conn, $sql);
      $data['content'] .= "<div class='alert alert-success' role='alert'>
      <p>The module  {$_POST['selmodule']} has been assigned to you</p>
      </div>";
   }
   else  // If a module has not been selected
   {

     // Build sql statment that selects all the modules
     $sql = "select * from module";
     $result = mysqli_query($conn, $sql);

     $data['content'] .= "<form name='frmassignmodule' action='' method='post' >";
     $data['content'] .= "<p class='display-5'>Select a module to assign</p>";
     $data['content'] .= "<select name='selmodule' class='form-select form-select-lg mb-3' >";
     // Display the module name sin a drop down selection box
     while($row = mysqli_fetch_array($result)) {
        $data['content'] .= "<option class='dropdown-item' value='$row[modulecode]'>$row[name]</option>";
     }
     $data['content'] .= "</select><br/>";
     $data['content'] .= "<div><input type='submit' name='confirm' value='Save' class='btn btn-primary btn-lg fixed-bottom'/></div>";
     $data['content'] .= "</form>";
   }
   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

?>
