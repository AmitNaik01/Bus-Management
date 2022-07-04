<?php
include('../includes/connect.php');
$fno=$_REQUEST["fno"];
$sql="delete from fuel_details where fno='$fno'";
mysqli_query($conn,$sql);
?>

<script>
alert("Fuel details deleted successfully");
document.location="fuel.php";
</script>
