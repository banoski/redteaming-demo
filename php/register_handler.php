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