<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
<!-- sidebar -->

<?php $conn = mysqli_connect("localhost", "root", "", "bus_management"); 
	// $sql ="SELECT Distinct vehicleno FROM route_details";
	$sql ="SELECT Distinct vehicleno FROM bus_details";
	// $sql ="SELECT Distinct vehicleno FROM bus_details";
	$res = mysqli_query($conn , $sql);
?>
<div class="bg-modal">
    <div class="modal-content">
        <div class="container">
            <!-- <img src="../img/close.png" alt="" class="close" id="close"> -->
            <div class="close">+</div>
            <div class="title">
                Add Fuel Details

            </div>
            <form name="form1" method="post" action="insert_fuel_details.php" autocomplete="off">
                <!-- <p>
                    <label>vehicle no
                    </label>
                    <input name="vehicleno" type="text" id="vehicleno" required>
                </p> -->
                <p>
                <label>select Bus : </label>
                    <select name="vehicleno" id="vehicleno" required>
                        <?php while ($rows = mysqli_fetch_array($res)) {
                        ?>
                        <!-- <option value="none" selected disabled hidden>Select Bus</option> -->
                            <option  value="<?php echo $rows['vehicleno']; ?>"><?php echo $rows['vehicleno']; ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <label>Date
                    </label>
                    <input name="date" type="date" id="date" required>
                </p>
                <p>
                    <label>Indent No
                    </label>
                    <input name="ino" type="number" id="ino" required>
                </p>
                <p>
                    <label>Resent Km
                    </label>
                    <input name="rkm" type="number" id="rkm" required>
                </p>
                <p>
                    <label>Last Km
                    </label>
                    <input name="lkm" type="number" id="lkm" required>
                </p>
                <p>
                    <label>Fuel Qty
                    </label>
                    <input name="qty" type="text" id="qty" required>
                </p>
                <!-- <p>
    <label>cleaner 
        </label>
        <input name="cleaner" type="text" id="cleaner" required>
  </p> -->
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

        <?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct vehicalno FROM fuel_details";
        // $sql ="SELECT Distinct vehicleno FROM bus_details";
        $res = mysqli_query($conn, $sql);
        ?>

        <div class="mnav">
            <h3 align="center">Route Details</h2>
        </div>
        <!-- <h2>Bus Details </h2> -->

        <a href="#" class="add" id="add"><input type='submit' value='Add New' class='addb'></a>
        <Label>Select Bus : </Label>
        <select id="busNo" onchange="selectBrand()">
            <?php while ($rows = mysqli_fetch_array($res)) {
            ?>
                <option value="<?php echo $rows['vehicalno']; ?>"><?php echo $rows['vehicalno']; ?></option>

            <?php
            }
            ?>
        </select>

        <center>
            <form name="form1" method="post" action="#">
                <table border="8" cellspacing="5" width="90%" align="center">
                    <thead>
                        <tr>
                            <th width="4%">
                                <div align="center"><strong><em>SNo</em></strong></div>
                            </th>
                            <th width="10%">
                              <div align="center"><em><strong>Vehicleno</strong></em></div></th>
                            <th width="10%">
                              <div align="center"><em>Date</em></div></th>
                            <th width="12%">
                              <div align="center"><em>Indent<strong> No </strong></em></div></th>
                            <th width="10%">
                              <div align="center"><em>Resent Km <strong></strong></em></div></th>
                            <th width="8%">
                              <div align="center"><em>Last  Km <strong></strong></em></div></th>
                            <th width="8%">
                              <div align="center"><em>Total Km <strong></strong></em></div></th>
                            <th width="7%">
                              <div align="center"><em>Qty/ltr<strong></strong></em></div></th>
                            <th width="7%">
                                <div align="center"><strong><em>Milage</em></strong></div>
                            </th>
                            <!-- <th width="15%"><div align="center"><strong><em>cleaner</em></strong></div></th> -->
                            <th width="24%">
                                <div align="center"><em><strong>Operations</strong></em><strong><em></em></strong></div>
                            </th>
                        </tr>
                    </thead>

                    <tbody id="ans">
                        <?php

                        $conn = mysqli_connect("localhost", "root", "", "bus_management");
                        
                        $sql = "SELECT * FROM fuel_details ";
                        $res = mysqli_query($conn, $sql);
                        $sl = 1;
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <tr >

                                <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                <td>&nbsp;<?php echo $row['vehicalno']; ?></td>
                                <td>&nbsp;<?php echo $row['date']; ?></td>
                                <td>&nbsp;<?php echo $row['ino']; ?></td>
                                <td>&nbsp;<?php echo $row['rkm']; ?></td>
                                <td>&nbsp;<?php echo $row['lkm']; ?></td>
                                <td>&nbsp;<?php echo $row['tkm']; ?></td>
                                <td>&nbsp;<?php echo $row['qty']; ?></td>
                                <td>&nbsp;<?php echo $row['milege']; ?></td>
                                <td align="center" width="24%"><a href="fuel_details_edit.php?fno=<?php echo $row['fno']; ?>"><input type='button' value='Update' class='update'></a>
                                    <a href="fuel_details_delete.php?fno=<?php echo $row['fno']; ?>"><input type='button' value='Delete' class='delete' onclick='return checkdelete()'></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
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
                <a href="../html/index.php"><img src="../img/home.png" alt=""><span>Dashboard</span></a>
            </li>
            <li>
                <a href="../emp/emp.php"><img src="../img/businessman.png" alt=""><span>Employee</span></a>
            </li>
            <li>
                <a href="../salary/salary.php"><img src="../img/salary.png" alt=""><span>Salary</span></a>
            </li>
            <li>
                <a href="../bus/bus.php"><img src="../img/bus1.png" alt=""><span>Bus</span></a>
            </li>
            <li>
                <a href="../route/route.php" ><img src="../img/distance.png" alt=""><span>Route</span></a>
            </li>
            <li>
                <a href="#" class="active"><img src="../img/gas-station.png" alt=""><span>Fuel</span></a>
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
<script type="text/javascript" src="../js/fetchnDisp.js"></script>

<!-- </div> -->
<?php include_once '../includes/footer.php' ?>