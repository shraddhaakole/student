<?php
 session_start();
 if(isset($_SESSION['uid']))
 {
   header('location:admin/admindash.php');
 }
 
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>SMS</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
include('dbcon.php');

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

  $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
  //var_dump($qry);
  $result = mysqli_query($con,$qry);
  //var_dump($result);
  $row = mysqli_num_rows($result);
  if($row <1 )
  {
	  ?>
	  <script>alert('Username or password wrong');
	   window.open('login.php','_self');
	  </script>

<?php   }
else {
	 $data=mysqli_fetch_assoc($result);
   
     $id =$data['id'];
	 
	 //echo "id =" .$id;
	 
	
	 $_SESSION['uid']=$id;
	 header('location:admin/admindash.php');
	 
}  
  
}

?>