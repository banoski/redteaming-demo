<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /ba/src/html/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Protected Area</title>
    <link rel="stylesheet" type="text/css" href="/ba/src/css/base.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/src/html/index.html" class="link-button">Home</a>
            <a href="/ba/src/php/logout.php" class="link-button">Logout</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
            <p>This is a protected area.</p>
        </section>
    </main>
</body>
</html>