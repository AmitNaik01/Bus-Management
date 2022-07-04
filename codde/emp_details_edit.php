<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {font-size: 24px}
-->
</style>
</head>

<body>
<?php
include('../includes/connect.php');
$aid=$_REQUEST['empid'];
$sql="select * from emp_details where empid='$aid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="emp_details_update.php">
<input type="hidden" value="<?php echo $row['empid'];?>" name="empid">
<table width="491" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center">Artist Details </div></td>
    </tr>
    <tr>
      <td width="149"> Vehicle No </td>
      <td width="326"><input name="vehicleno" type="text" id="vehicleno" value="<?php echo $row['vehicleno'];?>"></td>
    </tr>
    <tr>
      <td> Emp Name</td>
      <td><input name="ename" type="text" id="ename" value="<?php echo $row['ename'];?>"></td>
    </tr>
    <tr>
      <td> Emp Role </td>
      <td><input name="role" type="radio" value="driver" 
	  <?php 
	  if($row['role']=='driver'){
	  echo "checked";
	  }
	  ?>
	  >
        <span class="style3">Driver
        <input name="role" type="radio" value="cleaner"
		<?php 
	  if($row['role']=='cleaner'){
	  echo "checked";
	  }
	  ?>>
Cleaner</span></td>
    </tr>
    <tr>
      <td> Emp Phno </td>
      <td><input name="phno" type="text" id="contno2" value="<?php echo $row['phno'];?>"></td>
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
