<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   $hashed_password = "TRYME";

   echo template("templates/partials/header.php");
   //Obtain file sent to the server within the response
   $image = $_FILES['image']['tmp_name'];

   //Get the file binary data
   $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    //Hash password to store it securely in the database
   $hashed_password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

    //insert data into the database
    $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house,
      town, county, country, postcode, image)
      VALUES ($_POST[studentid],'$hashed_password','$_POST[dob]','$_POST[firstname]',
      '$_POST[lastname]','$_POST[house]','$_POST[town]','$_POST[county]',
      '$_POST[country]','$_POST[postcode]', '$imagedata');";
           
    $result = mysqli_query($conn, $sql);
    
    echo "Student Record $_POST[studentid] has been inserted.";
     
    echo template("templates/partials/footer.php");
?>