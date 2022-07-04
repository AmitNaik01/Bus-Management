<?php $conn = mysqli_connect("localhost", "root", "", "bus_management"); 

if($conn)
{
    // echo"connection is ok";
}
else
{
    echo"connection faild".mysqli_connect_error();
}
?>