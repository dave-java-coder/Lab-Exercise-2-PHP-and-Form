<?php

$servername = "localhost";
$username = "root";
$pw = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $pw, $dbname);


function test_input($data){
    $data = trim($data);
    $data = stripslashes ($data);
    $data = htmlspecialchars ($data);
    return $data;
    
    }

if ($_SERVER ["REQUEST_METHOD"] =="POST") {
$name = test_input($_POST["name"]);
$password = test_input($_POST["password"]);
$role = test_input($_POST["role"]);
}


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $sql = "INSERT INTO classt (name, password, role)
VALUES ('$name', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


}</php>