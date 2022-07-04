<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Bus Details </h2>

<a href="addbus.php">Add Bus</a>
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
require 'connect.php';
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

<?php require 'script.php'; ?>
</main>
</div>

</body>
</html>