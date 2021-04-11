<?php
include "../db/database_connect_data.php";
//sleep(1); //waiting time

//database connect
$conn = new mysqli($server, $user, $password, $database);

//check connection
if ($conn->connect_error) {
  return "DATABASE ERROR: ".$conn->connect_error;
  die();
}

if(!empty($_POST["username"])) { //if POST is not void
  $username = $_POST["username"];
  $sql = "SELECT * FROM users WHERE username='$username'"; //query

  //run the query
  $result = $conn->query($sql);

  if ($result->num_rows == 0) { //if no results user is available
    echo "available";
  }else{ //else, user is not available
    echo "not available";
  }
}

//close connection
$conn->close();
?>
