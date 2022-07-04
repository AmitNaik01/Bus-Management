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
<form name="form1" method="post" action="emp_details_insert.php" autocomplete="off">
<table width="588" height="301" border="1" align="center">
    <tr>
      <td colspan="2"> <div align="center">Add Employee  Details </div></td>
    </tr>
    <tr>
      <td width="180"> Vehicle No </td>
      <td width="392"><input name="vehicleno" type="text" id="vehicleno"></td>
    </tr>
    <tr>
      <td> Emp Name </td>
      <td><input name="ename" type="text" id="ename"></td>
    </tr>
    <tr>
      <td> Emp Role </td>
      <td><input name="role" type="radio" value="driver" checked>
        <span class="style3">Driver 
        <input name="role" type="radio" value="cleaner">
Cleaner</span></td>
    </tr>
    <tr>
      <td>Emp Phno </td>
      <td><input name="phno" type="number" id="phno"></td>
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
