<?php
include('../includes/connect.php');
$fno=$_POST['fno'];
$vehicleno=$_POST['vehicalno'];
$date=$_POST['date'];
$rkm=$_POST['rkm'];
$lkm=$_POST['lkm'];
$qty=$_POST['qty'];
$ino=$_POST['ino'];
$total=$rkm-$lkm;
$milage=$total/$qty;
// echo $rtno;
// echo $route;
// echo $vehicleno;
$sql="update fuel_details set vehicalno='$vehicleno',date='$date',ino='$ino',rkm='$rkm',lkm='$lkm',tkm='$total',qty='$qty',milege='$milage' where fno='$fno'";
mysqli_query($conn,$sql);
?>

<script>
alert("Fuel details updated successfully");
document.location="fuel.php";
</script>1