<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "spotify";

$conn = new mysqli($host, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($fullname != "" && $email != "" && $password != "") {

  $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

  if (mysqli_query($conn,$sql) === TRUE) {
    echo "Registration successful! <a href='login.html'>Login here</a>";
  } else {
    echo "Error: " . $conn->error;
  }
} else {
  echo "Please fill all fields.";
}

$conn->close();
?>
