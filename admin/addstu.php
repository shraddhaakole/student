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


<?php include('titlehed.php');?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="addstu.php" method="POST" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Roll No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="rollno" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Parents Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Standard</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="std" placeholder="Std" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="img" placeholder="State/Province/Region" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>
						 
                        </fieldset>
						<input name="submit" placeholder="Submit" value="submit" type="submit">
                   </form>
                </td>
               
             </tr>
          </tbody>
       </table>
    </div>
	
	<?php
	 
	 if(isset($_POST['submit']))
		 
		 {
			 include('../dbcon.php');
			 $fname = $_POST['fullName'];
			 $rollno = $_POST['rollno'];
			 $pno =$_POST['phoneNumber'];
			 $city =$_POST['city'];
			 $std = $_POST['std'];
			 $img = $_FILES['img'] ['name'];  //store name in database
			 
			 $tempname = $_FILES['img'] ['tmp_name']; // for temp name
			 //var_dump($tempname);
			 move_uploaded_file($tempname,"../dataimages/$img"); //img function to store in folder
			 $qry = "INSERT INTO `student`(`sid`, `rollno`, `sname`, `scity`, `pcontact`, `std`,`simages`) VALUES (NULL,'$rollno','$fname','$city','$pno','$std','$img')";
			 //echo $qry;
			 $run =mysqli_query($con,$qry);
			 
			 if($run == true)
			 {
				 ?>
				 <script>
				   alert('data inserted succesfully');
				 </script>
			<?php }
		 } ?>