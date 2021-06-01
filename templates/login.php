
<?php 
   echo template("templates/partials/header.php");
   echo $message;

?>

<div class="container" style="align">
      <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-app" viewBox="0 0 16 16" class = "d-inline-flex" style = "vertical-align:sub">
         <path d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
      </svg>
      <h1 style="height:150;" class = "d-inline-flex" >BNU Student Web App</h1>
</div>


<div class="container">
   <div class="row" class="text-center" class="border border-1">
      <div class="col-md-4">
         <h1 class="display-3" style="height:150;">See all students</h1>
         <form name = "frmStudentsRecords" action = "students.php" method = "POST">

            
            <input type="submit" value="Students Records" name="btnStudentsRecords" class="btn btn-primary btn-lg mx-auto"/>

         </form>
      </div>
      <div class="col-md-4">
         <h1 class="display-2" style="height:150;">Login</h1>
         <form name="frmLogin" action="authenticate.php" method="post">
            <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label" style="font-weight:bold" >Student ID</label>
               <input name="txtid" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your ID">
            </div>
            <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label" style="font-weight:bold" >Password</label>
               <input name="txtpwd" type="password"  class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
            </div>
            
            <input type="submit" value="Login" name="btnlogin" class="btn btn-primary btn-lg" />
         </form>
      </div>
      <div class="col-md-4">
         <h1 class="display-3" style="height:150;">Add new students</h1>
         <form name = "frmAddNewStudent" action = " addStudent.php" method = "POST">

            
            <input type="submit" value="Add New Student" name="btnAddNewStudent" class="btn btn-primary btn-lg "/>

         </form>
      </div>
   </div>

</div>







<?php
   echo template("templates/partials/footer.php");

?>