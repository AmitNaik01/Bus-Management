<?php 
	include('../includes/connect.php');
	$vehicle=$_POST['vehicleno'];
	$ename=$_POST['ename'];
	$role=$_POST['role'];
	$phno=$_POST['phno'];
	$sql= "insert into emp_details values(null,'$vehicle','$ename','$role','$phno')";
	$data=mysqli_query($conn,$sql);

	if($data)
	{
		echo "<script>alert('Record Added')</script>";
		?>
	
			<meta http-equiv = "refresh" Content ="0; url = ../emp/emp.php"  />
	
		<?php
	}
	else{
		echo "<script>alert('Faild to Add')</script>";
	}
	?>
