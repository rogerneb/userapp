<?php
if ($_POST == null) { //if values have never been sent from the form
  header("Location: ..");
  die();
}else{
  $response = login($_POST["username"], $_POST["password"]);

  /*
  RESPONSES CODES:
  -1: user or password not ok
   0: user dissabled
   1: user and password ok
  */

  if ($response == -1) {
    echo "User or pass not correct.";
  }else  if ($response == 0) {
    echo "dissabled user";
  }else if($response == 1){
    echo "ok";
    create_session();
  }else {
    echo "Unknown error...";
  }
}

function login($user_login, $password_login) {
  //include database connection vars
  include "../db/database_connect_data.php";

  //get and sanitize the post data
  $user_login = filter_var($user_login, FILTER_SANITIZE_STRING);
  $password_login = filter_var($password_login, FILTER_SANITIZE_STRING);

  //encrypt password
  $password_login = hash("sha256", $password_login);

  //SQL query
  $sql = "SELECT * FROM users WHERE username = '$user_login' and password = '$password_login'";

  //connect to database
  $conn = new mysqli($server, $user, $password, $database);

  //check connection
  if ($conn->connect_error) {
    return "DATABASE ERROR: ".$conn->connect_error;
    die();
  }

  //run the query
  $result = $conn->query($sql);

  //check results
  if ($result->num_rows == 0) { //num rows = 0 means thant this user doesnt exist
    $return = -1;
  }else { //exists, but let's check the user status
    while($row = $result->fetch_assoc()) {
      if ($row["status"] == 0) {
        $return = 0; //disabled
      }else if ($row["status"] == 1) {
        $return = 1; //its ok
      }
    }
  }

  //close connection
  $conn->close();
  return $return;
}

function create_session(){
  //here we will create the sessions
}

?>
