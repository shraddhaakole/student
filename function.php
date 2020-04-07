<?php

function showdetails($std,$rollno)
{
	
	include('dbcon.php');
	
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `std`='$std'";
   // var_dump($sql);
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows ($run)>0)
	{
	     $data=mysqli_fetch_assoc($run);
		 
	?>
	
	 <table border="1"style="width:80%; margin-top:20px; ">
	   <tr>
	      <th colspan="3">Student Details</th>
	   
	   </tr>
	
	      <td rowspan="6"><img src="dataimages/<?php echo $data['simages'];?>" style="max-width:120px; max-height:120px;padding-left:30px; "></td>
		  
		  <tr>
		  <th>Roll NO</th>
		  <td><?php echo $data['rollno']; ?></td>
		  </tr>
		  
		  <tr>
		  <th>Full Nmae</th>
		  <td><?php echo $data['sname']; ?></td>
		  </tr>
		  
		  <tr>
		   <th>Std</th>
		  <td><?php echo $data['std']; ?></td>
		  </tr>
		  
		  <tr>
		  <th>City</th>
		  <td><?php echo $data['scity']; ?></td>
		  </tr>

		  <tr>
		 <th>Contact</th>
		  <td><?php echo $data['pcontact']; ?></td>
		  </tr>
	  
	 
	 </table>
	
	<?php }
	
	
	else
	{ 
	    echo"<script>alert('hi');</script>";
	 }
	

}
?>