
<?php echo $message; ?>

<form name="frmLogin" action="authenticate.php" method="post">
   Student ID:
   <input name="txtid" type="text" />
   <br/>
   Password:
   <input name="txtpwd" type="password" />
   <br/>
   <input type="submit" value="Login" name="btnlogin" />
</form>

<form name = "frmStudentsRecords" action = "students.php" method = "POST">

   See all students:
   <input type="submit" value="Students Records" name="btnStudentsRecords" />

</form>

<form name = "frmAddNewStudent" action = " addStudent.php" method = "POST">

   Add new students:
   <input type="submit" value="Add New Student" name="btnAddNewStudent" />

</form>
