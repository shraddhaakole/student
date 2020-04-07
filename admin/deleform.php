
<?php
//echo('hello');exit;
include('../dbcon.php');

          $id=$_REQUEST['sid'];
			 $qry = "DELETE FROM `student` WHERE`sid`='$id'";
			 //echo $qry; exit;
			$run = mysqli_query($con,$qry);
			 
			 if($run == true)
			 {
				 
				 ?>
				 <script>
				   alert('data Delete succesfully');
				  window.open('deletestu.php','_self');
				 </script>
			<?php }


?>

