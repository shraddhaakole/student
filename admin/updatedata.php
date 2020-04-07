<?php
//echo('hello');exit;
include('../dbcon.php');

             $id=$_POST['sid'];
			 //var_dump($_POST);
			 $fname = $_POST['fullName'];
			 $rollno = $_POST['rollno'];
			 $pno =$_POST['phoneNumber'];
			 $city =$_POST['city'];
			 $std = $_POST['std'];
			 $img = $_FILES['img'] ['name'];  //store name in database
			 
			 $tempname = $_FILES['img'] ['tmp_name']; // for temp name
			 //var_dump($tempname);
			 move_uploaded_file($tempname,"../dataimages/$img"); //img function to store in folder
			 $qry = "UPDATE `student` SET `rollno` = '$rollno', `sname` = '$fname', `scity` = '$city', `pcontact` = '$pno', `std` = '$std', `simages` = '$img' WHERE `student`.`sid` = $id;";
			 //echo $qry;
			$run = mysqli_query($con,$qry);
			 
			 if($run == true)
			 {
				 
				 ?>
				 <script>
				   alert('data inserted succesfully');
				  window.open('updateform.php?sid=<?php echo $id; ?>','_self');
				 </script>
			<?php }


?>