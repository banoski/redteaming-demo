<?php
session_start(); // start the session

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: /ba/src/html/dashboard.php'); // redirect to dashboard
    exit;
}

// Zeigt Erfolgreich Registriert-Meldung an
if (isset($_SESSION['message'])) {
    echo '<script>alert("' . $_SESSION['message'] . '");</script>';
    unset($_SESSION['message']); // remove the message from the session
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/ba/src/css/base.css?<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="/ba/src/css/forms.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/src/html/index.html" class="link-button">Home</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>Login</h1>
            <form action="/ba/src/php/login_handler.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
</body>
</html>