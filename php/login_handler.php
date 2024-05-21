<?php
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__)); //dirname = parent folder of (__DIR__) = current folder
$dotenv->load();

// Start the session if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
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
    header('Location: /ba/pages/dashboard'); //redirect to dashboard, bei erfolgreichem login
    exit;
} else {
    $_SESSION['error'] = "Invalid username or password.";
    header('Location: /ba/pages/login'); //redirect back to login, bei falschem login
    exit;
}

$stmt->close();
$conn->close();
?>