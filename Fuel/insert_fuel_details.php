
<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$date=$_POST['date'];
$rkm=$_POST['rkm'];
$lkm=$_POST['lkm'];
$qty=$_POST['qty'];
$ino=$_POST['ino'];
$total=$rkm-$lkm;
$milage=$total/$qty;


$sql="insert into fuel_details values(null,'$vehicleno','$date','$ino','$rkm','$lkm','$total','$qty','$milage')";
mysqli_query($conn,$sql);
?>




<script>
alert("Fuel details inserted successfully");
document.location="fuel.php";
</script>
