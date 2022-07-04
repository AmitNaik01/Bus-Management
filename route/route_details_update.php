<?php
include('../includes/connect.php');
$rtno=$_POST['rtno'];
$route=$_POST['route'];
$vehicleno=$_POST['vehicleno'];

// echo $rtno;
// echo $route;
// echo $vehicleno;
$sql="update route_details set vehicleno='$vehicleno',route='$route'where rtno='$rtno'";
mysqli_query($conn,$sql);
?>

<script>
alert("Route details updated successfully");
document.location="route.php";
</script>