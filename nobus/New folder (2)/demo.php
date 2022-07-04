<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["vehicleno"]; ?></td>
        <td><?php echo $row["driver"]; ?></td>
        <td><?php echo $row["cleaner"]; ?></td>
        <td>
          <a href="update_bus.php?id=<?php echo $row['id']; ?>  ">Edit</a>
         
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
</body>
</html>