<?php
$servername = "localhost";
$dbname = "redteam";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//name char limit, if any (30 per default)
$query = "SELECT CHARACTER_MAXIMUM_LENGTH FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'feedback_data' AND COLUMN_NAME = 'name'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$name_maxlength = $row['CHARACTER_MAXIMUM_LENGTH'];
echo "<script>console.log(`charlimit name: $name_maxlength`)</script>";

//comment char limit, if any
$query = "SELECT CHARACTER_MAXIMUM_LENGTH FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'feedback_data' AND COLUMN_NAME = 'comment'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$comment_maxlength = $row['CHARACTER_MAXIMUM_LENGTH'];
echo "<script>console.log(`charlimit comment: $comment_maxlength`)</script>";

//$name = $_POST['name']; //not sanitized
$name = $conn->real_escape_string($_POST['name']); //sanitized
$comment = $_POST['comment'];

if (strlen($name) > $name_maxlength) {
    $name = substr($name, 0, $name_maxlength);
}
if (strlen($comment) > $comment_maxlength) {
    $comment = substr($comment, 0, $comment_maxlength);
}

$sql = "INSERT INTO feedback_data (name, comment) VALUES ('$name', '$comment')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<script>console.log(`$sql`)</script>";
header('Refresh: 0.5; URL=/ba/pages/feedback');
//header('Location: /ba/pages/feedback');
exit;
?>