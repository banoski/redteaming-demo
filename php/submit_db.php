<?php
$servername = "localhost";
$dbname = "redteam";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']); //sanitized
$comment = $_POST['comment'];

if (strlen($name) > $name_maxlength) {
    $name = substr($name, 0, $name_maxlength);
}
if (strlen($comment) > $comment_maxlength) {
    $comment = substr($comment, 0, $comment_maxlength);
}

$sql = "INSERT INTO feedback_data (name, comment) VALUES ('$name', '$comment')";

$error_message = "";
if ($conn->multi_query($sql) !== TRUE) {
    $error_message = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: /ba/pages/feedback');
exit;

if ($error_message !== "") {
    echo $error_message;
}
?>