<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "spotify";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form values
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($fullname) && !empty($email) && !empty($password)) {
  $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";


  if (mysqli_query($conn, $sql)) {
    echo "✅ Registration successful! <a href='login.html'>Login here</a>";
  } else {
    echo " Error: " . mysqli_error($conn);
  }
} else {
  echo " Please fill all fields.";
}

// Close connection
$conn->close();
?>
