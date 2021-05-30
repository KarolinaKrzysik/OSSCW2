
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
