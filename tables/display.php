<html>
    <head>
    <title>bus details </title>
    <style>
        body{
            background-color: #ffff;
        }
        table{
            background-color: #ffff;
        }
        .update , .delete{
            background-color: green;
            color: white;
            border:0;
            outline:none;
            border-radius: 4px;
            height: 20px;
            width: 80px;
            font-weight:bold;
            cursor: pointer;
        }
        .delete{
            background-color: red;
        }
    </style>
    </head>
</html>

<?php
include('../includes/connect.php');
// error_reporting(0);
$query = "SELECT * FROM bus_details";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

// echo $total;

if($total != 0)
{   
    ?>
    <h2 align="center">Bus Details</h2>
    <center>
    <table border="1" cellspacing="5" width="80%">
        <tr>
        <th width="10%">Bus No</th>
        <th width="15%">Vehicle No</th>
        <th width="15%">Driver Name</th>
        <th width="15%">Cleaner Name</th>
        <th width="25%">Operations</th>
        </tr>
    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['vehicleno']."</td>
                <td>".$result['driver']."</td>
                <td>".$result['cleaner']."</td>
                
                <td><a href='../bus/update_bus.php?id=$result[id]';><input type='submit' value='Update' class='update'></a>

                <a href='../tables/delete.php?id=$result[id]';><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()' ></a></td>
              </tr>
              ";
    }
   
 }
else{
    echo"No rechord found";
}
?>
</table>
</center>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record?');
    }
</script>

<!-- 
echo $result['id']." ".$result['vehicleno']." ".$result['driver']." ".$result['cleaner']."<br>"; 

&vehicleno=$result[vehicleno]&driver=$result[driver]&cleaner=$result[cleaner]-->