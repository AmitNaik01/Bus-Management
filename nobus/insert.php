<?php 
	include('../includes/connect.php');
	$vehicle=$_POST['vehicleno'];
	$driver=$_POST['driver'];
	$cleaner=$_POST['cleaner'];
	$sql= "insert into bus_details values(null,'$vehicle','$driver','$cleaner')";
	mysqli_query($conn,$sql);
	?>
<script>
alert("inserted");
document.location(addbus.php);
</script>