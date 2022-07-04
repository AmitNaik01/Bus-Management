<?php
include("../includes/connect.php");

$id =  $_GET['rid'];

$query = "DELETE FROM rto_details WHERE rid = '$id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    // echo "<script>alert('Rechord Deleted')</script>";
    ?>

        <meta http-equiv = "refresh" Content ="0; url = ../bus/bus.php"  />

    <?php
}
else{
    echo "<script>alert('Faild to Delete')</script>";
}
?>