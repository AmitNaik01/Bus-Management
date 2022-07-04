<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$route=$_POST['route'];


$sql="insert into route_details values('$vehicleno','$route')";
mysqli_query($conn,$sql);
?>

<script>
alert("artist details inserted successfully");
document.location="artist_details_form.php";
</script>