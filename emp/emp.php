<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
        <!-- sidebar -->
    
    <div class="bg-modal">
        <div class="modal-content">
            <div class="container">
            <!-- <img src="../img/close.png" alt="" class="close" id="close"> -->
            <div class="close">+</div>
                <div class="title">
                Add Employee Details
                
                </div>
                <form name="form1" method="post" action="emp_details_insert.php" autocomplete="off">
                <p>
                <label>vehicle no 
                    </label>
                    <input name="vehicleno" type="text" id="vehicleno" required>
                 </p>
                <p>
                 <label>Employee Name 
                     </label>
                     <input name="ename" type="text" id="ename" required>
                </p>
                <!-- <p>
                <label>Employee Role
                     </label>
                     <input name="role" type="text" id="role" required>
                </p> -->
                <p>
                <label>Employee Role
                     </label>
                <input name="role" type="radio" value="driver" checked>
        <span class="style3">Driver 
        <input name="role" type="radio" value="cleaner">
Cleaner</span>
                </p>

  <p>
    <label>Phone No
        </label>
        <input name="phno" type="number" id="phno" required>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Submit2" value="Reset">
    </label>
  </p>
</form>
                    
            </div>
        </div>
    </div>

 <div class="main-content">
        <main>
        <div class="mnav"><h3 align="center">Employee Details</h2></div>

        <a href="#" class="add" id="add"><input type='submit' value='Add New' class='addb'></a>
        <center>
        <form name="form1" method="post" action="#" autocomplete="off">
  <table  border="8" align="center"  cellspacing="1" width="90%">
    <tr>
      <th width="5%"><div align="center"><strong><em>SNo</em></strong></div></th>
      <th width="15%"><div align="center"><em><strong>Vehicleno</strong></em></div></th>
      <th width="15%"><div align="center"><strong><em>Employee Name </em></strong></div></th>
      <th width="15%"><div align="center"><strong><em>Employee Role</em></strong></div></th>
      <th width="15%"><div align="center"><strong><em>Phone Number </em></strong></div></th>
      <th colspan="15%"><div align="center"><em><strong>Actions</strong></em><strong><em></em></strong></div>        </th>
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
      <td height="30">&nbsp;<?php echo $sl++;?> </td>
      <td>&nbsp;<?php echo $row['vehicleno'];?></td>
      <td>&nbsp;<?php echo $row['ename'];?></td>
      <td>&nbsp;<?php echo $row['role'];?></td>
      <td>&nbsp;<?php echo $row['phno'];?></td>
      <td align="center" width="15%"><a href="emp_details_edit.php?empid=<?php echo $row['empid'];?>"><input type='button' value='Update' class='update'></a><a href="emp_details_delete.php?empid=<?php echo $row['empid'];?>"><input type='button' value='Delete' class='delete' onclick = 'return checkdelete()' ></a></td>
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
                        <a href="#" class="active"><img src="../img/businessman.png" alt=""><span>Employee</span></a>
                    </li>
                    <li>
                        <a href="../salary/salary.php" ><img src="../img/salary.png" alt=""><span>Salary</span></a>
                    </li>
                    <li>
                        <a href="../bus/bus.php" ><img src="../img/bus1.png" alt=""><span>Bus</span></a>
                    </li>
                    <li>
                        <a href="../route/route.php"><img src="../img/distance.png" alt=""><span>Route</span></a>
                    </li>
                    <li>
                        <a href="../Fuel/Fuel.php"><img src="../img/gas-station.png" alt=""><span>Fuel</span></a>
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