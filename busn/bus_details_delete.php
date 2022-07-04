<?php
include('../includes/connect.php');
$bid=$_REQUEST["id"];
$sql="delete from bus_details where id='$bid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Bus details deleted successfully");
document.location="bus.php";
</script>
