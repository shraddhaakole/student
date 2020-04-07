<?php
session_start();
//var_dump ($_SESSION['uid']);
 
 if(isset($_SESSION['uid']))
 {
	 echo "";
 }
 else {
   header('location: ../login.php');
 }

?>
<?php  include('header.php');?>



<h1 align="center">Welcome to Admin dashboard</h1>

<h3 align="right"><a href="">logout</a></h3>

<table >
 
 <tr>
   <td>1.</td><td><a href="addstu.php">Insert Student Detalis</a></td>
 </tr>
  <tr>
   <td>2.</td><td><a href="updatestu.php">Update Student Detalis</a></td>
 </tr>
  <tr>
   <td>3.</td><td><a href="deletestu.php">Delete Student Detalis</a></td>
 </tr>
 
 
</table>

</body>
</html>