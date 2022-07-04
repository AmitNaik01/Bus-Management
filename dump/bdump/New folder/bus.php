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
                <div class="input_field">
                    <label>vehicle no
                    </label>
                    <input name="vehicleno" type="text" id="vehicleno">
                </div>
                <div class="input_field">
                    <label>driver
                    </label>
                    <input name="driver" type="text" id="driver">
                </div>
                <div class="input_field">
                    <label>cleaner
                    </label>
                    <input name="cleaner" type="text" id="cleaner">
                </div>
                    <label>
                        <input type="submit" name="Submit" value="Submit" >
                        <!-- <input type="reset" name="Submit2" value="Reset"> -->
                    </label>
                
            </form>
        </div>
    </div>
</div>

<div class="main-content">
    <main>
    <div class="mnav"><h3 align="center">Bus Details</h2></div>
        <!-- <h2>Bus Details </h2> -->
        <a href="#" class="add" id="add"><input type='submit' value='Add Bus' class='addb'></a>
        <?php
        include('../includes/connect.php');
        // error_reporting(0);
        $query = "SELECT * FROM bus_details";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        // echo $total;
        

        if ($total != 0) {
        ?>
            
            <!-- <h2 align="center">Bus Details</h2> -->
       
            <center>
                <table border="1" cellspacing="5" width="90%">
                    <tr>
                        <th width="10%">Bus No</th>
                        <th width="15%">Vehicle No</th>
                        <th width="15%">Driver Name</th>
                        <th width="15%">Cleaner Name</th>
                        <th width="10%">Operations</th>
                    </tr>


                <?php
                
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                <td>" . $result['id'] . "</td>
                <td>" . $result['vehicleno'] . "</td>
                <td>" . $result['driver'] . "</td>
                <td>" . $result['cleaner'] . "</td>
                
                <td><a href='../bus/update_bus.php?id=$result[id]';><input type='submit' value='Update' class='update'></a>

                <a href='../bus/delete.php?id=$result[id]';><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()' ></a></td>
              </tr>
              ";
                }
            } else {
                echo "No rechord found";
            }
                ?>
                </table>
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
                <a href="../html/index.php"><img src="../img/home.png" alt=""><span>Dashboard</span></a>
            </li>
            <li>
                <a href="../emp/emp.php"><img src="../img/businessman.png" alt=""><span>Employee</span></a>
            </li>
            <li>
                <a href="../html/salary.php"><img src="../img/salary.png" alt=""><span>Salary</span></a>
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
<?php require 'script.php'; ?>
<script src="../js/main.js" type="text/javascript"></script>

<!-- </div> -->
<?php include_once '../includes/footer.php' ?>