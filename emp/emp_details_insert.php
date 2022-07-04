<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$ename=$_POST['ename'];
$role=$_POST['role'];
$phno=$_POST['phno'];


$sql="insert into emp_details values(null,'$vehicleno','$ename','$role','$phno')";
mysqli_query($conn,$sql);
?>

<script>
alert("emp details inserted successfully");
document.location="emp.php";
</script>