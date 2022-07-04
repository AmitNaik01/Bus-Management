<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="#">
  <table width="344" height="200" border="8" align="center">
    <tr>
      <th width="54"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="109">Route Details        <div align="center"></div></th>
      <th colspan="2"><div align="center"><em><strong>Action</strong></em></div>        </th>
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
      <td height="102">&nbsp;<?php echo $sl++;?> </td>
      <td>&nbsp;<?php echo $row['route'];?></td>
      <td width="54"><a href="../../code/artist_details_edit.php?aid=<?php echo $row['aid'];?>">edit</a></td>
      <td width="85"><a href="../../code/artist_details_delete.php?aid=<?php echo $row['aid'];?>">delete</a></td>
    </tr>
	<?php
	}
	?>
  </table>
</form>
</body>
</html>
