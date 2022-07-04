
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
$emid=$_REQUEST['eid'];
$sql="SELECT * FROM `salary_details` WHERE eid='$emid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
    <div class="container">
    <div class="close"><a href="salary.php">+</a></div>
        <div class="title">
           Update Employee Details
        </div>
        <form name="form1" method="post" action="sal_details_update.php" autocomplete="off">
<input type="hidden" value="<?php echo $row['eid'];?>" name="eid">
<table width="450" height="301" border="1" align="center">
    <!-- <tr>
      <td colspan="2"> <div align="center">Edit sal  Details </div></td>
    </tr> -->
    <tr>
      <td width="187">Employee Name </td>
      <td width="292"><input name="ename" type="text" id="ename" value="<?php echo $row['ename'];?>"></td>
    </tr>
    <tr>
      <td>Basic Salary </td>
      <td><input name="basic" type="number" id="basic" value="<?php echo $row['basic'];?>"></td>
    </tr>
    <tr>
      <td>Allowence </td>
      <td><input name="allow" type="number" id="allow" value="<?php echo $row['allow'];?>"></td>
    </tr>
    <tr>
      <td>Special Allowence </td>
      <td><input name="spl_allow" type="number" id="spl_allow" value="<?php echo $row['spl_allow'];?>"></td>
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


