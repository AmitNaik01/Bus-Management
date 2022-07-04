
<?php
include('../includes/connect.php');
$rid=$_POST['rid'];
$vehicleno=$_POST['vehicleno'];
$insurence=$_POST['insurence'];
$tax=$_POST['tax'];
$fitness=$_POST['fitness'];
$permit=$_POST['permit'];

$sql="update rto_details set vehicleno='$vehicleno',insurence='$insurence',tax='$tax',fitness='$fitness',permit='$permit' where rid='$rid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Rto details updated successfully");
document.location="rto.php";
</script>