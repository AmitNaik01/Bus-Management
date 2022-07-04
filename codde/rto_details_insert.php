<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$insurence=$_POST['insurence'];
$tax=$_POST['tax'];
$fitness=$_POST['fitness'];
$permit=$_POST['permit'];

$sql="insert into rto_details values(null,'$vehicleno','$insurence','$tax','$fitness','$permit')";
mysqli_query($conn,$sql);
?>

<script>
alert("rto details inserted successfully");
document.location="add_rto_details.php";
</script>
