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

<?php include('../dbcon.php'); 
$sid=$_GET['sid'];

$qry ="SELECT * FROM `student` WHERE `sid`= '$sid'";
//var_dump($qry);
$run =mysqli_query($con,$qry);

$data=mysqli_fetch_assoc($run);

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="updatedata.php" method="POST" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"  class="form-control" required="true" value=<?php echo $data['sname'];?> type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Roll No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="rollno"  class="form-control" required="true" value=<?php echo $data['rollno'];?> type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber"  class="form-control" required="true" value=<?php echo $data['pcontact'];?> type="text"></div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" class="form-control" required="true" value=<?php echo $data['scity'];?> type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Standard</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="std" class="form-control" required="true" value=<?php echo $data['std'];?> type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="img" placeholder="State/Province/Region" class="form-control" type="file"></div>
                            </div>
                         </div>
						 
                        </fieldset>
						<input type="hidden" name="sid" value="<?php echo $data['sid'];?>"/>
						<input name="submit" placeholder="Submit" value="submit" type="submit">
                   </form>
                </td>
               
             </tr>
          </tbody>
       </table>
    </div>