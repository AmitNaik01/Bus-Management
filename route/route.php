<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
<!-- sidebar -->

<?php $conn = mysqli_connect("localhost", "root", "", "bus_management"); 
	// $sql ="SELECT Distinct vehicleno FROM route_details";
	$sql ="SELECT Distinct vehicleno FROM bus_details";
	// $sql ="SELECT Distinct vehicleno FROM bus_details";
	$res = mysqli_query($conn , $sql);
?>
<div class="bg-modal">+
    <div class="modal-content">
        <div class="container">
            <!-- <img src="../img/close.png" alt="" class="close" id="close"> -->
            <div class="close">+</div>
            <div class="title">
                Add Route Details

            </div>
            <form name="form1" method="post" action="insert_route_details.php" autocomplete="off">
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
                    <label>Route
                    </label>
                    <input name="route" type="text" id="route" required>
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
        $sql = "SELECT Distinct vehicleno FROM route_details";
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
                <option value="<?php echo $rows['vehicleno']; ?>"><?php echo $rows['vehicleno']; ?></option>

            <?php
            }
            ?>
        </select>

        <center>
            <form name="form1" method="post" action="#">
                <table border="8" cellspacing="5" width="90%" align="center">
                    <thead>
                        <tr>
                            <th width="5%">
                                <div align="center"><strong><em>SNo</em></strong></div>
                            </th>
                            <th width="15%">
                                <div align="center"><em><strong>Vehicleno</strong></em></div>
                            </th>
                            <th width="15%">
                                <div align="center"><strong><em>Route Name </em></strong></div>
                            </th>
                            <!-- <th width="15%"><div align="center"><strong><em>cleaner</em></strong></div></th> -->
                            <th width="15%">
                                <div align="center"><em><strong>Operations</strong></em><strong><em></em></strong></div>
                            </th>
                        </tr>
                    </thead>

                    <tbody id="ans">
                        <?php

                        $conn = mysqli_connect("localhost", "root", "", "bus_management");
                        // $sql="select * from route_details";
                        $sql = "SELECT * FROM route_details WHERE vehicleno = 'ka35AB1001'";
                        $res = mysqli_query($conn, $sql);
                        $sl = 1;
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <tr >

                                <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                <td>&nbsp;<?php echo $row['route']; ?></td>
                                <td align="center" width="15%"><a href="../route/route_details_edit.php?rtno=<?php echo $row['rtno']; ?>"><input type='button' value='Update' class='update'></a>
                                    <a href="route_details_delete.php?rtno=<?php echo $row['rtno']; ?>"><input type='button' value='Delete' class='delete' onclick='return checkdelete()'></a>
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
                <a href="#" class="active"><img src="../img/distance.png" alt=""><span>Route</span></a>
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
<script type="text/javascript" src="../js/fetchnDisp.js"></script>

<!-- </div> -->
<?php include_once '../includes/footer.php' ?>