<?php

session_start();

$servername = "localhost";
$username = "root";
$pa = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $pa, $dbname);

function test_input($data){
    $data = trim($data);
    $data = stripslashes ($data);
    $data = htmlspecialchars ($data);
    return $data;
    
    }

if ($_SERVER ["REQUEST_METHOD"] =="POST") {
$name = test_input($_POST["name"]);
$password = test_input($_POST["password"]);
$rememeberme=($_POST["rememberme"]);
}

if($rememeberme == "yes"){
    //set cookie
     
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM classt where name = '$name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows>0) {
    $_SESSION["user"] = $name;
    //header('Location: user.php');

  } else {
  echo "0 results";
}
$conn->close();
?>
