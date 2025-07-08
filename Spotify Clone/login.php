<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "spotify";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {  
  $row = mysqli_fetch_assoc($result);

 
   if ($password == $row['password']) {

    $_SESSION['user'] = $row['fullname'];
    header("Location: index.html");
    exit();
  } else {
    echo "❌ Invalid password. <a href='login.html'>Try again</a>";
  }
} else {
  echo "❌ Email not found. <a href='signup.html'>Register here</a>";
}

$conn->close();
?>

