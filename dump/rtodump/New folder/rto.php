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
                <form name="form1" method="post" action="insert.php" autocomplete="off">
                <p>
                <label>vehicle no 
                    </label>
                    <input name="vehicleno" type="text" id="vehicleno" required>
                 </p>
                <p>
                 <label>Insurence
                     </label>
                     <input name="insurence" type="date" id="insurence" required>
                </p>
                <p>
                 <label>Tax
                     </label>
                     <input name="tax" type="date" id="tax" required>
                </p><p>
                 <label>Fitness
                     </label>
                     <input name="fitness" type="date" id="fitness" required>
                </p>
  <p>
    <label>Permit
        </label>
        <input name="permit" type="date" id="permit" required>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Submit2" value="Reset">
    </label>
  </p>
</form>
                    <!-- <form action="">
                    <div class="form" name="form1" method="post" action="insert.php">
                        
                        <div class="input_field">
                            <label for="">Vehicle No</label>
                            <input type="text" class="input" id="vehicleno">
                        </div>
                        <div class="input_field">
                            <label for="">Driver Name</label>
                            <input type="text" class="input"  id="driver">
                        </div>
                        <div class="input_field">
                            <label for="">Cleaner Name</label>
                            <input type="text" class="input" id="cleaner">
                        </div>
                        <div class="input_field">          
                          <input type="submit" name="Submit"  value="Submit">
                          <input type="reset" name="Submit2"   value="Reset">
                        </div>
                    </div>
                    </form> -->
            </div>
        </div>
    </div>

 <div class="main-content">
        <main>
        <h2>Bus Details </h2>

        <a href="#" id ="add" class="add">Add details </a>
        <table border = 1>
      <tr>
        <!-- <td>#</td> -->
        <td width="5%">Slno</td>
        <td width="7%">Vehicle No</td>
        <td width="7%">Insurence</td>
        <td width="7%">Tax</td>
        <td width="7%">Fitness</td>
        <td width="7%">Permit</td>
        <td width="7%">Actions</td>
      </tr>
      <?php
      require '../includes/connect.php';
      $rows = mysqli_query($conn, "SELECT * FROM rto_details");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["rid"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["vehicleno"]; ?></td>
        <td><?php echo $row["insurence"]; ?></td>
        <td><?php echo $row["tax"]; ?></td>
        <td><?php echo $row["fitness"]; ?></td>
        <td><?php echo $row["permit"]; ?></td>
        <td>
          <a href="update_bus.php?id=<?php echo $row['rid']; ?>  ">Edit</a>
         
          <button type="button" onclick = "submitData(<?php echo $row['rid']; ?>);">Delete</button>
          
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
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
                        <a href="../html/salary.php" ><img src="../img/salary.png" alt=""><span>Salary</span></a>
                    </li>
                    <li>
                        <a href="../bus/bus.php" ><img src="../img/bus1.png" alt=""><span>Bus</span></a>
                    </li>
                    <li>
                        <a href="../html/route.php"><img src="../img/distance.png" alt=""><span>Route</span></a>
                    </li>
                    <li>
                        <a href="../html/fuel.php"><img src="../img/gas-station.png" alt=""><span>Fuel</span></a>
                    </li>
                    <li>
                        <a href="#" class="active"><img src="../img/file.png" alt=""><span>RTO</span></a>
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