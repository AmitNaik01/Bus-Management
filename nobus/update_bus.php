<?php
include("../includes/connect.php");

$id =  $_GET['id'];

$query = "SELECT * FROM bus_details where id = '$id' ";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<?php include_once '../includes/header.php' ?>
<?php include_once '../includes/navbar.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/update.css">
    <style>
        .close {
            position: relative;
            top: 154px;
            left: 367px;
            cursor: pointer;
            font-size: 32px;
            transform: rotate(45deg);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="close"><a href="../bus/bus.php">+</a></div>
        <div class="title">
            Update Bus Details
        </div>
        <form action="#" method="POST">
            <div class="form">
                <div class="input_field">
                    <label for="">Vehicle No</label>
                    <input type="text" value="<?php echo $result['vehicleno']; ?>" class="input" id="vehicleno" name="vehicleno">
                </div>
                <div class="input_field">
                    <label for="">Driver Name</label>
                    <input type="text" value="<?php echo $result['driver']; ?>" class="input" id="driver" name="driver">
                </div>
                <div class="input_field">
                    <label for="">Cleaner Name</label>
                    <input type="text" value="<?php echo $result['cleaner']; ?>" class="input" id="cleaner" name="cleaner">
                </div>
                <div class="input_field">
                    <input type="submit" name="update" value="Update">
                    <!-- <input type="reset" name="Submit2" value="Reset"> -->
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<script src="../js/main.js" type="text/javascript"></script>

<!-- </div> -->
<?php include_once '../includes/footer.php' ?>

<?php

if ($_POST['update']) {
    $idu = $_POST['id'];
    $vehicleno = $_POST['vehicleno'];
    $driver = $_POST['driver'];
    $cleaner = $_POST['cleaner'];

    $query = "UPDATE bus_details SET vehicleno='$vehicleno',driver='$driver',cleaner='$cleaner' WHERE id=$id";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Rechord Updated')</script>";
?>

        <meta http-equiv="refresh" content="0; url = http://localhost/demo/nobus/bus.php " />


<?php
    } else {
        echo "Faild";
    }
}
?>