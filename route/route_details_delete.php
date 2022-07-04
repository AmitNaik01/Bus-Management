<?php
include('../includes/connect.php');
$bid=$_REQUEST["rtno"];
$sql="delete from route_details where rtno='$bid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Route details deleted successfully");
document.location="route.php";
</script>
