<?php
/*
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__DIR__)));
$dotenv->load();

// Start the session if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = getenv('DB_HOST');
$db = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$conn = new mysqli($host, $user, $pass, $db);*/

session_start(); // wird gebraucht für seiten nach login
$host = "localhost";
$db = "redteam";
$user = "root";
$pass = ""; // update with your password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT password FROM user WHERE username = ?;";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['loggedin'] = true; //set logged-in session
    $_SESSION['username'] = $username;
    header('Location: /ba/pages/dashboard'); //redirect to dashboard
    exit;
} else {
    $_SESSION['error'] = "Invalid username or password.";
    header('Location: /ba/pages/login'); //redirect back to login
    exit;
}

$stmt->close();
$conn->close();
?>