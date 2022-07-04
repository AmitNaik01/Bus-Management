<?php
	$k = $_POST['id'];
	$k= trim($k);
	$conn = mysqli_connect("localhost", "root", "", "bus_management"); 
	$sql ="SELECT * FROM fuel_details where vehicalno='{$k}'";
	// $sql ="SELECT Distinct vehicleno FROM bus_details";
	$res = mysqli_query($conn , $sql);
	$sl=1;


	while($rows=mysqli_fetch_array($res))
	{
		?>
		<tr>
			<td height="30">&nbsp;<?php echo $sl++;?></td>
			<td>&nbsp;<?php echo $rows['vehicalno']; ?></td>
            <td>&nbsp;<?php echo $rows['date']; ?></td>
            <td>&nbsp;<?php echo $rows['ino']; ?></td>
            <td>&nbsp;<?php echo $rows['rkm']; ?></td>
            <td>&nbsp;<?php echo $rows['lkm']; ?></td>
            <td>&nbsp;<?php echo $rows['tkm']; ?></td>
            <td>&nbsp;<?php echo $rows['qty']; ?></td>
            <td>&nbsp;<?php echo $rows['milege']; ?></td>
	  		<td align="center" width="15%"><a href="fuel_details_edit.php?fno=<?php echo $rows['fno']; ?>"><input type='button' value='Update' class='update'></a>
            <a href="fuel_details_delete.php?fno=<?php echo $rows['fno']; ?>"><input type='button' value='Delete' class='delete' onclick='return checkdelete()'></a>
                            </td>
		</tr>
		<?php
	}
	echo $sql;
?>
<script>
            function checkdelete() {
                return confirm('Are you sure you want to delete this record?');
            }
        </script>