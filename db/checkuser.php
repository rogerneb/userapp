<?php
include "../db/database_connect_data.php";
//sleep(1); //temps d’espera. Es pot comentar si vols que sigui 0

//connexió a la base de dades
$conn = new mysqli($server, $user, $password, $database);

//comprovem connexió
if ($conn->connect_error) {
  return "DATABASE ERROR: ".$conn->connect_error;
  die();
}

if(!empty($_POST["username"])) { //si s’han enviat dades pel post
  $username = $_POST["username"];
  $sql = "SELECT * FROM users WHERE username='$username'"; //construïm consulta

  //llancem la consulta
  $result = $conn->query($sql);

  if ($result->num_rows == 0) { //si no hi ha resultats, el nom d’usuari està disponible
    echo "available";
  }else{ //si no, es que ja està utilitzat.
    echo "not available";
  }
}

//close connection
$conn->close();
?>
