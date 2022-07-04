<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
  </head>
  <body>
    <h2>Add Bus</h2>
    <form  action="" method="post">
      <label for="">Bus No</label>
      <input type="number" id="busno" value=""> <br>
      <label for="">Vehicle No</label>
      <input type="text" id="vehicleno" value=""> <br>
      <!-- <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br> -->
      <label for="">Driver Name</label>
      <input type="text" id="driver" value=""> <br>
      <label for="">Cleaner Name</label>
      <input type="text" id="cleaner" value=""> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="bus.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>
<!-- autocomplete="off" -->
