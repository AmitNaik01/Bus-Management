<?php
include('../includes/connect.php');
$rid=$_REQUEST["rid"];
$sql="delete from rto_details where rid='$rid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Rto details deleted successfully");
document.location="rto.php";
</script>
