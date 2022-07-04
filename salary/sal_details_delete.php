<?php
include('../includes/connect.php');
$emid=$_REQUEST["eid"];
$sql="delete from salary_details where eid='$emid'";
mysqli_query($conn,$sql);
?>

<script>
alert("salary details deleted successfully");
document.location="salary.php";
</script>
