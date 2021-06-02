<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");
// check logged in
if (isset($_SESSION['id'])) {
   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");
   // if the form has been submitted

   //Sanitize input fields
   $safefirstname = mysqli_real_escape_string($conn, $_POST['txtfirstname']);
   $safelastname = mysqli_real_escape_string($conn, $_POST['txtlastname']);
   $safehouse = mysqli_real_escape_string($conn, $_POST['txthouse']);
   $safetown = mysqli_real_escape_string($conn, $_POST['txttown']);
   $safecounty = mysqli_real_escape_string($conn, $_POST['txtcounty']);
   $safecountry = mysqli_real_escape_string($conn, $_POST['txtcountry']);
   $safepostcode = mysqli_real_escape_string($conn, $_POST['txtpostcode']);
   if (isset($_POST['submit'])) {
      // build an sql statment to update the student details
      $sql = "update student set firstname ='$safefirstname',";
      $sql .= "lastname ='$safelastname',";
      $sql .= "house ='$safehouse',";
      $sql .= "town ='$safetown',";
      $sql .= "county ='$safecounty',";
      $sql .= "country ='$safecountry',";
      $sql .= "postcode ='$safepostcode' ";
      $sql .= "where studentid = '" . $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);
      $data['content'] = "<div class='alert alert-success' role='alert'>
      <p>Your details have been successfuly updated!</p>
      </div>";
   }
   else {
      // Build a SQL statment to return the student record with the id that
      // matches that of the session variable.
      $sql = "select * from student where studentid='". $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      // using <<<EOD notation to allow building of a multi-line string
      // see http://stackoverflow.com/questions/6924193/what-is-the-use-of-eod-in-php for info
      // also http://stackoverflow.com/questions/8280360/formatting-an-array-value-inside-a-heredoc
      $data['content'] = <<<EOD
   <h2 class="display-5">My Details</h2>
   <form name="frmdetails" action="" method="post">
   <p class="form-label" style="font-weight:bold">First Name</p>
   <input name="txtfirstname" type="text" value="{$row['firstname']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">Surname</p>
   <input name="txtlastname" type="text"  value="{$row['lastname']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">Number and Street</p>
   <input name="txthouse" type="text"  value="{$row['house']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">Town</p>
   <input name="txttown" type="text"  value="{$row['town']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">County</p>
   <input name="txtcounty" type="text"  value="{$row['county']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">Country</p>
   <input name="txtcountry" type="text"  value="{$row['country']}" class="form-control"/><br/>
   <p class="form-label" style="font-weight:bold">Postcode</p>
   <input name="txtpostcode" type="text"  value="{$row['postcode']}" class="form-control"/><br/>
   <input type="submit" value="Save" name="submit" class="btn btn-primary btn-lg "/>
   </form>
EOD;
   }
   // render the template
   echo template("templates/default.php", $data);
} else {
   header("Location: index.php");
}
echo template("templates/partials/footer.php");
?>
