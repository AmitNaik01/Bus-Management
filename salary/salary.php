<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
        <!-- sidebar -->
    
    <div class="bg-modal">
        <div class="modal-content">
            <div class="container">
            <!-- <img src="../img/close.png" alt="" class="close" id="close"> -->
            <div class="close">+</div>
                <div class="title">
                Add Salary Details
                </div>
                <form name="form1" method="post" action="sal_details_insert.php" autocomplete="off">

<table width="450" height="246" border="1" align="center">
    <tr>
      <td height="52">Employee Name </td>
      <td><input name="ename" type="text" id="ename" required></td>
    </tr>
    <tr>
      <td width="222" height="46">Basic Salary </td>
      <td width="180"><input name="basic" type="number" id="basic" required></td>
    </tr>
    <tr>
      <td height="45">Allowence </td>
      <td><input name="allow" type="text" id="allow" required></td>
    </tr>
    <tr>
      <td height="58">Special Allowence </td>
      <td><input name="spl_allow" type="number" id="spl_allow" required></td>
    </tr>
    <tr>
      <td height="28" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
</div></td>
    </tr>
</table>
</form>
                    
            </div>
        </div>
    </div>

 <div class="main-content">
        <main>
        <div class="mnav"><h3 align="center">Salary Details</h2></div>

        <a href="#" class="add" id="add"><input type='submit' value='Add New' class='addb'></a>
        <center>
        <form name="form1" method="post" action="#" autocomplete="off">
  <table border="8" align="center"  cellspacing="1" width="90%">
    <tr >
    <td height="72" ><strong><em>SNo</em></strong></td>
    <td width="15%"><strong><em><strong>Employee name </strong></em></strong></td>
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
    <td colspan="2"><div align="center"><strong><em>Operation</em></strong></div></td>
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
    <td height="30"><?php echo $sl++;?> </td>
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
    <td align="center" width="10%"><a href="sal_details_edit.php?eid=<?php echo $row['eid'];?>"><input type='button' value='Update' class='update'></a></td>
    <td><a href="sal_details_delete.php?eid=<?php echo $row['eid'];?>"><input type='button' value='Delete' class='delete' onclick = 'return checkdelete()' ></a></td>
  </tr>
	<?php
	}
	?>
  </table>
</form>
</center>
<script>
                function checkdelete() {
                    return confirm('Are you sure you want to delete this record?');
                }
            </script>
    
        </main>
        </div>

        <div class="sidebar">
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="../html/index.php" ><img src="../img/home.png" alt=""><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="../emp/emp.php" ><img src="../img/businessman.png" alt=""><span>Employee</span></a>
                    </li>
                    <li>
                        <a href="#" class="active"><img src="../img/salary.png" alt=""><span>Salary</span></a>
                    </li>
                    <li>
                        <a href="../bus/bus.php" ><img src="../img/bus1.png" alt=""><span>Bus</span></a>
                    </li>
                    <li>
                        <a href="../route/route.php"><img src="../img/distance.png" alt=""><span>Route</span></a>
                    </li>
                    <li>
                        <a href="../Fuel/fuel.php"><img src="../img/gas-station.png" alt=""><span>Fuel</span></a>
                    </li>
                    <li>
                        <a href="../rto/rto.php"><img src="../img/file.png" alt=""><span>RTO</span></a>
                    </li>
                    <li>
                        <a href="../html/service.php"><img src="../img/maintenance.png" alt=""><span>Service</span></a>
                    </li>
                    <li>
                        <a href="../html/change.php"><img src="../img/lock.png" alt=""><span>change Password</span></a>
                    </li>
                </ul>
            </div>
        </div>
  </div>
  <?php require 'script.php'; ?>
  <script src="../js/main.js" type="text/javascript"></script>
    
<!-- </div> -->
<?php include_once '../includes/footer.php' ?>