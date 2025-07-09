<?php
session_start();

// DB connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "spotify";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get inputs
$email = $_POST['email'];
$password = $_POST['password'];

// Query user
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Check password
    if ($password === $row['password']) {
        $_SESSION['user'] = $row['fullname'];
        header("Location: index.html");
        exit();
    } else {
    
        echo "<script>
                alert(' Incorrect password!');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
} else {
    //  Email not found – redirect to signup with alert
    echo "<script>
            alert(' Email not found. Please register first.');
            window.location.href = 'signup.html';
          </script>";
    exit();
}

$conn->close();
?>
