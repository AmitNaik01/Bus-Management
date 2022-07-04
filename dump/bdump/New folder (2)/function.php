<?php
require '../includes/connect.php';

if(isset($_POST["action"])){
  // if($_POST["action"] == "insert"){
  //   insert();
  // }
  // else if($_POST["action"] == "edit"){
  //   edit();
  // }
  // else{
  //   delete();
  // }
  delete();

}
else
{
  echo"faild";
}

// function insert(){
//   global $conn;

//   $busno = $_POST["busno"];
//   $vehicleno = $_POST["vehicleno"];
//   $driver = $_POST["driver"];
//   $cleaner = $_POST["cleaner"];

//   $query = "INSERT INTO bus VALUES('$busno', '$vehicleno', '$driver', '$cleaner')";
//   mysqli_query($conn, $query);
//   echo "Inserted Successfully";
// }

// function edit(){
//   global $conn;

//   $busno = $_POST["busno"];
//   $vehicleno = $_POST["vehicleno"];
//   $driver = $_POST["driver"];
//   $cleaner = $_POST["cleaner"];

//   $query = "UPDATE bus SET busno = '$busno', vehicleno = '$vehicleno', driver = '$driver', cleaner ='$cleaner' WHERE id = $vehicleno";
//   mysqli_query($conn, $query);
//   echo "Updated Successfully";
// }

function delete(){
  global $conn;

  $id = $_POST["action"];

  $query = "DELETE FROM bus_details WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
