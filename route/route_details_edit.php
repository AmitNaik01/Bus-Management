
<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/update.css">
    <style>
        .close{
    position: relative;
    top: 154px;
    left: 367px;
    cursor: pointer;
    font-size: 32px;
    transform: rotate(45deg);
        }
    </style>
</head>
<body>
<?php
include('../includes/connect.php');
$rtno=$_REQUEST['rtno'];
$sql="select * from route_details where rtno='$rtno'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
    <div class="container">
    <div class="close"><a href="route.php">+</a></div>
        <div class="title">
           Update route Details
        </div>
        
        <form name="form1" method="post" action="route_details_update.php" autocomplete="off">
<input type="hidden" value="<?php echo $row['rtno'];?>" name="rtno">
<table width="450" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center"> Update Rto Details </div></td>
    </tr>
    <tr>
      <td width="202">Vehicle No </td>
      <td width="275"><input name="vehicleno" type="text" id="vehicleno" value="<?php echo $row['vehicleno'];?>"></td>
    </tr>
    <tr>
      <td>Route Name </td>
      <td><input name="route" type="text" id="route" value="<?php echo $row['route'];?>"></td>
    </tr>
    <tr>
      <td height="28" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
</div></td>
    </tr>
</table>
</form>
    </div>
</body>
</html>
<script src="../js/main.js" type="text/javascript"></script>
    
<!-- </div> -->
<?php include_once '../includes/footer.php' ?>

<?php
    
    if($_POST['update'])
    {
        $idu = $_POST['empid'];
        $vehicleno = $_POST['vehicleno'];
        $ename = $_POST['ename'];
        $role = $_POST['role'];
        $phno = $_POST['phno'];

        $query = "UPDATE emp_details SET vehicleno='$vehicleno',ename='$ename',role='$role',phno='$phno' WHERE empid=$idu";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Rechord Updated')</script>";
            ?>

        <meta http-equiv = "refresh" content ="0; url = http://localhost/demo/emp/emp.php"  />


            <?php
        }
        else
        {
            echo "Faild";
        }

    }
?>


