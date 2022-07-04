<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$route=$_POST['route'];



$sql="insert into route_details values(null,'$vehicleno','$route')";
mysqli_query($conn,$sql);
?>

<script>
alert("route details inserted successfully");
document.location="route.php";
</script>