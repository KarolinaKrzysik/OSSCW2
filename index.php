<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

   if (isset($_GET['return'])) {
      $msg = "";
      if ($_GET['return'] == "fail") {$msg = "Login Failed! Please try again.";}
      $data['message'] = "<div class='alert alert-danger' role='alert'>
      <p>$msg</p>
    </div>";
   }
//<p>$msg</p>
   if (isset($_SESSION['id'])) {
      $data['content'] = "<div class='alert alert-success' role='alert'>
      <p>Login was successful!</p>
      </div>
      <p class='display-3'>Welcome to your dashboard.";
      echo template("templates/partials/nav.php");
      echo template("templates/default.php", $data);
   } else {
      echo template("templates/login.php", $data);
   }

   echo template("templates/partials/footer.php");

   // another test edit

?>
