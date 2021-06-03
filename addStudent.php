<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
?>
<html>
   <head>
      <title>BNU Student Web Application</title>
      <!-- Bootstrap CSS  -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="css/myStyles.css" type = "text/css">
      <script src="js/myScript.js"></script>
   </head>
   <body>
<a href="http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/index.php" class="btn btn-primary btn-lg" style="width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>  Back</a>

<?php
//check if studentid is unique
$sql = "SELECT studentid FROM student";
$result = mysqli_query($conn, $sql);

$storeStudentsIds = array();
$iterate = 0;
//store studentids in an array
while($row = mysqli_fetch_array($result)){
   $storeStudentsIds[$iterate] = $row['studentid'];
   $iterate++;
   $data['content'] .="$row[studentid],"; 
}
?>
<!-- Display studentids array within invisible button  -->
<button type="button" style="color:white; background:white; border:0px;" id= "btnStoreId"><?php echo template('templates/default.php', $data)?></button>

<div><h2 class="display-5">Add a new Student Record</h2></div>
<form enctype = "multipart/form-data" name = "frmAddNewRecord" action= "addedRecord.php" method = "POST" onsubmit = "return validate(this)">
   <label for="studentid" class="form-label" style="font-weight:bold">Student ID</label>
   <input type="text" id="studentid" maxlength = "8" name="studentid" placeholder="11111111"  class="form-control"><br>
   <label for="password1" class="form-label" style="font-weight:bold">Password</label>
   <input type="password" id="password1" maxlength = "100" name="password1" placeholder="12345678"  class="form-control"><br>
   <label for="dob" class="form-label" style="font-weight:bold">Date Of Birth</label>
   <input type="text" id="dob" name="dob" placeholder="1999-10-10"  class="form-control"><br>
   <label for="firstname" class="form-label" style="font-weight:bold">First name</label>
   <input type="text" id="firstname" maxlength = "20" name="firstname" placeholder="John"  class="form-control"><br>
   <label for="lastname" class="form-label" style="font-weight:bold">Last name</label>
   <input type="text" id="lastname" maxlength = "20" name="lastname" placeholder="Doye"  class="form-control"><br>
   <label for="house" class="form-label" style="font-weight:bold">House</label>
   <input type="text" id="house"  maxlength = "30" name="house" placeholder="23 Victoria Road"  class="form-control"><br>
   <label for="town" class="form-label" style="font-weight:bold">Town</label>
   <input type="text" id="town" maxlength = "30" name="town" placeholder="High Wycombe"  class="form-control"><br>
   <label for="county" class="form-label" style="font-weight:bold">County</label>
   <input type="text" id="county" maxlength = "30" name="county" placeholder="Bucks"  class="form-control"><br>
   <label for="country" class="form-label" style="font-weight:bold">Country</label>
   <input type="text" id="country" maxlength = "30" name="country" placeholder="UK"  class="form-control"><br>
   <label for="postcode" class="form-label" style="font-weight:bold">Postcode</label>
   <input type="text" id="postcode" maxlength = "10" name="postcode" placeholder="HP 11SX"  class="form-control"><br>
   <label for="image" class="form-label" style="font-weight:bold">Picture</label>
   <input type="file" name="image" accept="image/jpeg" class="form-control" ><br>
   <input type="submit" value="Add Student" name="btnAddNewRecord" class="btn btn-primary btn-lg">
   </form>
   
   
<?php
   echo template("templates/partials/footer.php");
?>
