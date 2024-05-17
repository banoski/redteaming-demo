<?php
$host = "localhost";
$db = "redteam";
$user = "root";
$pass = ""; // replace with .env
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];

$sql = "INSERT INTO user (username, password, email) VALUES (?, ?, ?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password, $email);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    // Start the session if it's not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Store a success message in a session variable
    $_SESSION['message'] = 'Registration successful! You can now log in.';

    // Redirect to the login page
    header('Location: /ba/pages/login');
    exit;
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>