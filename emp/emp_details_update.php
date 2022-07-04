<?php
include('../includes/connect.php');
$eid=$_POST['empid'];
$vehicleno=$_POST['vehicleno'];
$ename=$_POST['ename'];
$role=$_POST['role'];
$phno=$_POST['phno'];


$sql="update emp_details set vehicleno='$vehicleno',ename='$ename',role='$role',phno='$phno' where empid='$eid'";
mysqli_query($conn,$sql);
?>

<script>
alert("emp details updated successfully");
document.location="emp.php";
</script>