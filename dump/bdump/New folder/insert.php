<?php 
	include('../includes/connect.php');
	$vehicle=$_POST['vehicleno'];
	$driver=$_POST['driver'];
	$cleaner=$_POST['cleaner'];
	$sql= "insert into bus_details values(null,'$vehicle','$driver','$cleaner')";
	$data=mysqli_query($conn,$sql);

	if($data)
{
    echo "<script>alert('Rechord Added')</script>";
    ?>

        <meta http-equiv = "refresh" Content ="0; url = ../bus/bus.php"  />

    <?php
}
else{
    echo "<script>alert('Faild to Add')</script>";
}
	?>




   