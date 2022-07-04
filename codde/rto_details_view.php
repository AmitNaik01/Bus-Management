<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="#">
  <table width="536" height="200" border="8" align="center">
    <tr>
      <th width="52"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="62"><div align="center"><em> Vehicle No </em></div></th>
      <th width="72"><div align="center"> Insurence<strong></strong></div></th>
      <th width="48"><div align="center"><strong> Tax </strong></div></th>
      <th width="51"><div align="center"><strong><em>Fitness</em></strong></div></th>
      <th width="37"><div align="center"><strong><em>Permit</em></strong></div></th>
      <th colspan="2"><div align="center"><em><strong>Action</strong></em><strong><em></em></strong></div>        </th>
    </tr>
	<?php
	include('../includes/connect.php');
	$sl=1;
	
	
	$sql="select * from rto_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	 ?>
    <tr>
	<tr id = <?php echo $row["rid"]; ?>>
      <td height="102">&nbsp;<?php echo $sl++;?> </td>
      <td>&nbsp;<?php echo $row['vehicleno'];?></td>
      <td>&nbsp;<?php echo $row['insurence'];?></td>
      <td>&nbsp;<?php echo $row['tax'];?></td>
      <td>&nbsp;<?php echo $row['fitness'];?></td>
      <td>&nbsp;<?php echo $row['permit'];?></td>
      <td width="78"><a href="rto_details_edit.php?rid=<?php echo $row['rid'];?>">edit</a></td>
      <td width="70"><a href="rto_details_delete.php?rid=<?php echo $row['rid'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
  </table>
</form>
</body>
</html>
