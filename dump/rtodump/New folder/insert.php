<?php 
	include('../includes/connect.php');
	$vehicle=$_POST['vehicleno'];
	$insurence=$_POST['insurence'];
	$tax=$_POST['tax'];
	$fitness=$_POST['fitness'];
	$permit=$_POST['permit'];
	$sql= "insert into rto_details values('$vehicle','$insurence','$tax','$fitness','$permit',null)";
	$data=mysqli_query($conn,$sql);

	if($data)
	{
		echo "<script>alert('Record Added')</script>";
		?>
	
			<meta http-equiv = "refresh" Content ="0; url = ../rto/rto.php"  />
	
		<?php
	}
	else{
		echo "<script>alert('Faild to Add')</script>";
	}
	?>
	
