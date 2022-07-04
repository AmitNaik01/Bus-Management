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
$rid=$_REQUEST['rid'];
$sql="select * from rto_details where rid='$rid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="rto_details_update.php" autocomplete="off">
<input type="hidden" value="<?php echo $row['rid'];?>" name="rid">
<table width="509" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center"> Update Rto Details </div></td>
    </tr>
    <tr>
      <td width="202">Vehicle No </td>
      <td width="275"><input name="vehicleno" type="text" id="vehicleno" value="<?php echo $row['vehicleno'];?>"></td>
    </tr>
    <tr>
      <td>Insurence</td>
      <td><input name="insurence" type="date" id="insurence" value="<?php echo $row['insurence'];?>"></td>
    </tr>
    <tr>
      <td>Tax</td>
      <td><input name="tax" type="date" id="tax" value="<?php echo $row['tax'];?>"></td>
    </tr>
    <tr>
      <td>Fitness</td>
      <td><input name="fitness" type="date" id="fitness" value="<?php echo $row['fitness'];?>"></td>
    </tr>
    <tr>
      <td>Permit</td>
      <td><input name="permit" type="date" id="permit" value="<?php echo $row['permit'];?>"></td>
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

