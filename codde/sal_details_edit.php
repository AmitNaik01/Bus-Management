<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include('../includes/connect.php');
$emid=$_REQUEST['eid'];
$sql="SELECT * FROM `salary_details` WHERE eid='$emid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="sal_details_update.php" autocomplete="off">
<input type="hidden" value="<?php echo $row['eid'];?>" name="eid">
<table width="495" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center">Edit sal  Details </div></td>
    </tr>
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
</body>
</html>
