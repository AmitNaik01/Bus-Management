<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
        <!-- sidebar -->
        <div class="main-content">
        <main>
        <h2>Bus Details </h2>

        <a href="./nobus/addbus.php">Add Bus</a>
    <table border = 1>
      <tr>
        <!-- <td>#</td> -->
        <td>Bus No</td>
        <td>Vehicle No</td>
        <td>Driver</td>
        <td>Cleaner</td>
        <td>Actions</td>
      </tr>
      <?php
      require '../includes/connect.php';
      $rows = mysqli_query($conn, "SELECT * FROM bus_details");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["vehicleno"]; ?></td>
        <td><?php echo $row["driver"]; ?></td>
        <td><?php echo $row["cleaner"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
         
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    
    <?php require '../nobus/script.php'; ?>
        </main>
    </div>
        
        <div class="sidebar">
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="../html/index.php" ><img src="../img/home.png" alt=""><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="../html/emp.php"><img src="../img/businessman.png" alt=""><span>Employee</span></a>
                    </li>
                    <li>
                        <a href="../html/salary.php" ><img src="../img/salary.png" alt=""><span>Salary</span></a>
                    </li>
                    <li>
                        <a href="#" class="active"><img src="../img/bus1.png" alt=""><span>Bus</span></a>
                    </li>
                    <li>
                        <a href="../html/route.php"><img src="../img/distance.png" alt=""><span>Route</span></a>
                    </li>
                    <li>
                        <a href="../html/fuel.php"><img src="../img/gas-station.png" alt=""><span>Fuel</span></a>
                    </li>
                    <li>
                        <a href="../html/rto.php"><img src="../img/file.png" alt=""><span>RTO</span></a>
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
<?php include_once '../includes/footer.php' ?>