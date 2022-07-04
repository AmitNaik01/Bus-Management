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
$bid=$_REQUEST['id'];
$sql="select * from bus_details where id='$bid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="bus_details_update.php" autocomplete="off">
<input type="hidden" value="<?php echo $row['id'];?>" name="id">
<table width="453" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center">Artist Details </div></td>
    </tr>
    <tr>
      <td width="175">Vehicle no </td>
      <td width="262"><input name="vehicleno" type="text" id="vehicleno" value="<?php echo $row['vehicleno'];?>"></td>
    </tr>
    <tr>
      <td>Driver Name</td>
      <td><input name="driver" type="text" id="driver" value="<?php echo $row['driver'];?>"></td>
    </tr>
    <tr>
      <td>Cleaner Name </td>
      <td><input name="cleaner" type="text" id="cleaner" value="<?php echo $row['cleaner'];?>"></td>
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
