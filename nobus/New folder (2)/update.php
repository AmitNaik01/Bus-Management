<?php 
	include('connect.php');
	$vehicle=$_POST['vehicleno'];
	$driver=$_POST['driver'];
	$cleaner=$_POST['cleaner'];
	$sql= "UPDATE bus_details SET  vehicleno = '$vehicle', driver = '$driver', cleaner ='$cleaner' WHERE id = $id";
	mysqli_query($conn,$sql);
	?>
<script>
alert("updated successfully");
document.location(addbus.php);
</script>