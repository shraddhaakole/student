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
                   <form class="well form-horizontal" action="updatestu.php" method="POST" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         
						 <div class="form-group">
                            <label class="col-md-4 control-label">Standard</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="std" placeholder="Std" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>
                         
						 
                        </fieldset>
						<input name="submit" placeholder="Submit" value="search" type="submit">
                   </form>
                </td>
               
             </tr>
          </tbody>
       </table>
    </div>
	
	<div>
	<table class="table table-striped" align="center" width="80%" border="1" style="maegin-top:10px;" >
    <tr>
	<th>No</th>
	
	<th>Image</th>
	<th>Roll no</th>
	<th>Name</th>
	<th>Edit</th>
    </tr>
		<?php
	    if(isset($_POST['submit']))
		{
			include('../dbcon.php');
			
			$std = $_POST['std'];
			$name = $_POST['fullName'];
			
			$uqry ="SELECT * FROM `student` WHERE `std`='$std' AND `sname` LIKE '%$name%'";
			
			$run=mysqli_query($con,$uqry);
			
			if(mysqli_num_rows($run)<1)
			{
			   echo "<tr><td colspan='5'>No record found</td></tr>";
			}
			else{
     $count=0;	
	while($data=mysqli_fetch_assoc($run))
		
			   {
				   $count++;
				   
				   ?>
		   <tr>
	<td><?php echo $count; ?></td>
	<td><img src="../dataimages/<?php echo $data['simages'];?>"style="max-width:100px;"/></td>
	<td><?php echo $data['rollno'];?></td>
	<td><?php echo $data['sname'];?></td>
	<td><a href="updateform.php?sid=<?php echo $data['sid']?>">Edit</a></td>
    </tr>
		   <?php 
				   
			   }
			 
			}
		}
	?>
	</table>
	</div>
	

	
	