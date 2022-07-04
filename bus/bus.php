<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
        <!-- sidebar -->
    
    <div class="bg-modal">
        <div class="modal-content">
            <div class="container">
            <!-- <img src="../img/close.png" alt="" class="close" id="close"> -->
            <div class="close">+</div>
                <div class="title">
                Add Bus Details
                
                </div>
                <form name="form1" method="post" action="insert_bus_details.php" >
                <p>
                <label>vehicle no 
                    </label>
                    <input name="vehicleno" type="text" id="vehicleno" required>
                 </p>
                <p>
                 <label>driver 
                     </label>
                     <input name="driver" type="text" id="driver" required>
                </p>
  <p>
    <label>cleaner 
        </label>
        <input name="cleaner" type="text" id="cleaner" required>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Submit2" value="Reset">
    </label>
  </p>

            </div>
        </div>
    </div>

 <div class="main-content">
        <main>
        <div class="mnav"><h3 align="center">Bus Details</h2></div>
        <!-- <h2>Bus Details </h2> -->

        <a href="#" class="add" id="add"><input type='submit' value='Add New' class='addb'></a>
        
        <center>
        <form name="form1" method="post" action="#">
  <table  border="8"  cellspacing="5" width="90%" align="center">
    <tr >
      <th width="5%"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="15%"><div align="center"><em><strong>Vehicleno</strong></em></div></th>
      <th width="15%"><div align="center"><strong><em>Driver Name </em></strong></div></th>
      <th width="15%"><div align="center"><strong><em>cleaner</em></strong></div></th>
      <th width="15%"><div align="center"><em><strong>Operations</strong></em><strong><em></em></strong></div>        </th>
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

      <td height="30">&nbsp;<?php echo $sl
	  ++;?> </td>
      <td>&nbsp;<?php echo $row['vehicleno'];?></td>
      <td>&nbsp;<?php echo $row['driver'];?></td>
      <td>&nbsp;<?php echo $row['cleaner'];?></td>
      <td align="center" width="15%"><a href="../bus/bus_details_edit.php?id=<?php echo $row['id'];?>"><input type='button' value='Update' class='update'></a>
      <a href="bus_details_delete.php?id=<?php echo $row['id'];?>"><input type='button' value='Delete' class='delete' onclick = 'return checkdelete()' ></a></td>
      
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
                        <a href="../emp/emp.php"><img src="../img/businessman.png" alt=""><span>Employee</span></a>
                    </li>
                    <li>
                        <a href="../salary/salary.php" ><img src="../img/salary.png" alt=""><span>Salary</span></a>
                    </li>
                    <li>
                        <a href="#" class="active"><img src="../img/bus1.png" alt=""><span>Bus</span></a>
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