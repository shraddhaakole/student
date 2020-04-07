<!DOCTYPE html>
<html>
<head>
<title>SMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>
<h3 align="right"style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>

<h1 align="center">Welcome to student magment system</h1>
<form method="POST" action="index.php">
<table style="width:30%;border:3px solid black;padding:15px;">
   <tr> 
       <td colspan="2" style="text-align: center;">Student Information</td>
   </tr>
   <tr>
       <td>choose Std</td>
	   
	   <td>
	     <select name="std" required>
		   <option value="1">1st</option>
		   <option value="2">2nd</option>
		   <option value="3">3rd</option>
		   <option value="4">4th</option>
		   <option value="5">5th</option>
		   <option value="6">6th</option>
	   </td>
   </tr>
   <tr>
       <td>Enter Rollno</td>
	   <td> <input type="text" name="rollno" required></td>
   </tr>
   <tr>
     <td colspan="2"><input type="submit"name="submit"value="submit"</td>
   </tr>
</table>
</form>
</body>
</html>


<?php 

if(isset($_POST['submit']))
{
	$std =$_POST['std'];
	$rollno =$_POST['rollno'];
	
	include('dbcon.php');
	include('function.php');
	
	showdetails($std,$rollno);
}


