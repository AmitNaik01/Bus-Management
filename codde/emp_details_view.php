<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="#" autocomplete="off">
  <table width="493" height="200" border="8" align="center">
    <tr>
      <th width="52"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="62"><div align="center"><em><strong>Vehicleno</strong></em></div></th>
      <th width="72"><div align="center"><strong><em>Employee Name </em></strong></div></th>
      <th width="48"><div align="center"><strong><em>Employee Role</em></strong></div></th>
      <th width="51"><div align="center"><strong><em>Phone Number </em></strong></div></th>
      <th colspan="2"><div align="center"><em><strong>Actions</strong></em><strong><em></em></strong></div>        </th>
    </tr>
	<?php
	include('../includes/connect.php');
	$sl=1;
	
	
	$sql="select * from emp_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	 ?>
    <tr>
	<tr id = <?php echo $row["empid"]; ?>>
      <td height="102">&nbsp;<?php echo $sl++;?> </td>
      <td>&nbsp;<?php echo $row['vehicleno'];?></td>
      <td>&nbsp;<?php echo $row['ename'];?></td>
      <td>&nbsp;<?php echo $row['role'];?></td>
      <td>&nbsp;<?php echo $row['phno'];?></td>
      <td width="78"><a href="emp_details_edit.php?empid=<?php echo $row['empid'];?>">edit</a></td>
      <td width="70"><a href="emp_details_delete.php?empid=<?php echo $row['empid'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
  </table>
</form>
</body>
</html>
