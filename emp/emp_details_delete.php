<?php
include('../includes/connect.php');
$eid=$_REQUEST["empid"];
$sql="delete from emp_details where empid='$eid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Employee details deleted successfully");
document.location="emp.php";
</script>
