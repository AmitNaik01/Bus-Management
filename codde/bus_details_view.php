<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="#">
  <table width="436" height="200" border="8" align="center">
    <tr>
      <th width="52"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="62"><div align="center"><em><strong>Vehicleno</strong></em></div></th>
      <th width="72"><div align="center"><strong><em>Driver Name </em></strong></div></th>
      <th width="48"><div align="center"><strong><em>cleaner</em></strong></div></th>
      <th><div align="center"><em><strong>Actions</strong></em><strong><em></em></strong></div>        </th>
    </tr>
	<?php
	include('../includes/connect.php');
	$sl=1;
	
	
	$sql="select * from bus_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	 ?>
    <tr>

      <td height="102">&nbsp;<?php echo $sl
	  ++;?> </td>
      <td>&nbsp;<?php echo $row['vehicleno'];?></td>
      <td>&nbsp;<?php echo $row['driver'];?></td>
      <td>&nbsp;<?php echo $row['cleaner'];?></td>
      <td><a href="bus_details_edit.php?id=<?php echo $row['id'];?>">edit</a><a href="bus_details_delete.php?id=<?php echo $row['id'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
  </table>
</form>
</body>
</html>
