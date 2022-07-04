<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form autocomplete="off" action="" method="post">
      <?php
      require 'connect.php';
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM bus_details WHERE id = $vehicleno"));
      ?>
      <label for="">Vehicle No</label>
      <input type="text" id="vehicleno" value="<?php echo $rows['vehicleno']; ?>"> <br>
      <label for="">Driver</label>
      <input type="text" id="driver" value="<?php echo $rows['driver']; ?>"> <br>
      <label for="">Cleaner</label>
      <input type="text" id="cleaner" value="<?php echo $rows['cleaner']; ?>"> <br>
      <!-- <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br> -->
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="bus.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>
