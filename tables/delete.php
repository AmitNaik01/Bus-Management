<?php
include("../includes/connect.php");

$id =  $_GET['id'];

$query = "DELETE FROM bus_details WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Rechord Deleted')</script>";
    ?>

        <meta http-equiv = "refresh" content ="0; url = http://localhost/demo/tables/display.php "  />

    <?php
}
else{
    echo "<script>alert('Faild to Delete')</script>";
}
?>