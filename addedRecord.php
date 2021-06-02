<?php
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $hashed_password = "TRYME";
   echo template("templates/partials/header.php");
?>
<!--back btn-->
<a href="http://intweb.bucks.ac.uk/~21904889/CO551OpenSourceSystems/bnu-php-example/addStudent.php" class="btn btn-primary btn-lg" style="width:120px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>  Back</a>

<?php
   //Obtain file sent to the server within the response
   $image = $_FILES['image']['tmp_name'];

   //Get the file binary data
   $imagedata = addslashes(fread(fopen($_FILES['image']['tmp_name'], "r"), filesize($image)));
    //Hash password to store it securely in the database
   $hashed_password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

   //Ensure input is secure
   $safestudentidr = mysqli_real_escape_string($conn, $_POST['studentid']);
   $safepasswordr = mysqli_real_escape_string($conn, $hashed_password);
   $safedobr = mysqli_real_escape_string($conn, $_POST['dob']);
   $safefirstnamer = mysqli_real_escape_string($conn, $_POST['firstname']);
   $safelastnamer = mysqli_real_escape_string($conn, $_POST['lastname']);
   $safehouser = mysqli_real_escape_string($conn, $_POST['house']);
   $safetownr = mysqli_real_escape_string($conn, $_POST['town']);
   $safecountyr = mysqli_real_escape_string($conn, $_POST['county']);
   $safecountryr = mysqli_real_escape_string($conn, $_POST['country']);
   $safepostcoder = mysqli_real_escape_string($conn, $_POST['postcode']);

    //insert data into the database
    $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house,
      town, county, country, postcode, image)
      VALUES ($safestudentidr,'$safepasswordr','$safedobr','$safefirstnamer',
      '$safelastnamer','$safehouser','$safetownr','$safecountyr',
      '$safecountryr','$safepostcoder', '$imagedata');";       
    $result = mysqli_query($conn, $sql);
    //Display alert
    echo "<div class='alert alert-success' role='alert'>
    <p>Student Record $_POST[studentid] has been inserted!</p>
    </div>"; 
    echo template("templates/partials/footer.php");
?>