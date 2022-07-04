<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$driver=$_POST['driver'];
$cleaner=$_POST['cleaner'];


$sql="insert into bus_details values(null,'$vehicleno','$driver','$cleaner')";
mysqli_query($conn,$sql);
?>

<script>
alert("bus details inserted successfully");
document.location="bus.php";
</script>