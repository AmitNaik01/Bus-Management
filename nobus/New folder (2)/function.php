<?php
require 'config.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}



function delete(){
  global $conn;

  $id = $_POST["action"];

  $query = "DELETE FROM bus_details WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
