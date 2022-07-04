<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="#" autocomplete="off">
  <table width="1100" height="200" border="8" align="center">
    <tr>
    <td><strong><em>SNo</em></strong></td>
    <td><strong><em><strong>Employee name </strong></em></strong></td>
    <td><strong><em>Basic</em></strong></td>
    <td><strong><em>D A 10% </em></strong></td>
    <td><strong><em>Basic+</em></strong><strong><em>DA </em></strong><em><strong>Total</strong></em></td>
    <td><strong><em>Allow</em></strong></td>
    <td><strong><em>SPL</em></strong><em><strong> Allowance</strong></em></td>
    <td><strong><em>Gross</em></strong></td>
    <td><strong><em>P F @12% </em></strong></td>
    <td><strong><em>Total</em></strong></td>
    <td><strong><em>P F @24% </em></strong></td>
    <td><strong><em>ESI 3.25% </em></strong></td>
    <td><strong><em>ESI 0.75% </em></strong></td>
    <td><strong><em>Total Ded </em></strong></td>
    <td><strong><em>Net Salary</em></strong></td>
    <td colspan="2"><strong><em>Action</em></strong></td>
  </tr>
	<?php
	include('../includes/connect.php');
	$sl=1;
	
	
	$sql="select * from salary_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	 ?>
   <tr>
  <tr eid = <?php echo $row["eid"]; ?>>
    <td><?php echo $sl++;?> </td>
    <td>&nbsp;<?php echo $row['ename'];?></td>
    <td>&nbsp;<?php echo $row['basic'];?></td>
    <td>&nbsp;<?php echo $row['da_20'];?></td>
    <td>&nbsp;<?php echo $row['basic_da_total'];?></td>
    <td>&nbsp;<?php echo $row['allow'];?></td>
    <td>&nbsp;<?php echo $row['spl_allow'];?></td>
    <td>&nbsp;<?php echo $row['gross'];?></td>
    <td>&nbsp;<?php echo $row['pf_12'];?></td>
    <td>&nbsp;<?php echo $row['total'];?></td>
    <td>&nbsp;<?php echo $row['pf_24'];?></td>
    <td>&nbsp;<?php echo $row['esi_3'];?></td>
    <td>&nbsp;<?php echo $row['esi_75'];?></td>
    <td>&nbsp;<?php echo $row['total_ded'];?></td>
    <td>&nbsp;<?php echo $row['net_sal'];?></td>
    <td><a href="sal_details_edit.php?eid=<?php echo $row['eid'];?>">edit</a></td>
    <td><a href="sal_details_delete.php?eid=<?php echo $row['eid'];?>">delete</a></td>
  </tr>
	<?php
	}
	?>
  </table>
</form>
</body>
</html>
