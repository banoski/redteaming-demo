<?php 
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /ba/pages/login");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Protected Area</title>
    <link rel="stylesheet" type="text/css" href="/ba/css/base.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/pages/index" class="link-button">Home</a>
            <a href="/ba/php/logout_handler.php" class="link-button">Logout</a>
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