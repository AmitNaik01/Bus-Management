<?php
	$k = $_POST['id'];
	$k= trim($k);
	$conn = mysqli_connect("localhost", "root", "", "bus_management"); 
	$sql ="SELECT * FROM route_details where vehicleno='{$k}'";
	// $sql ="SELECT Distinct vehicleno FROM bus_details";
	$res = mysqli_query($conn , $sql);
	$sl=1;


	while($rows=mysqli_fetch_array($res))
	{
		?>
		<tr>
			<td height="30">&nbsp;<?php echo $sl++;?></td>
			<td>&nbsp;<?php echo $rows['vehicleno'];?></td>
	  		<td>&nbsp;<?php echo $rows['route'];?></td>
	  		<td align="center" width="15%"><a href="route_details_edit.php?rtno=<?php echo $rows['rtno']; ?>"><input type='button' value='Update' class='update'></a>
            <a href="route_details_delete.php?rtno=<?php echo $rows['rtno']; ?>"><input type='button' value='Delete' class='delete' onclick='return checkdelete()'></a>
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