<?php
session_start(); // start the session

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: /ba/pages/dashboard'); // redirect to dashboard
    exit;
}

// Zeigt Erfolgreich Registriert-Meldung an
if (isset($_SESSION['message'])) {
    echo '<script>alert("' . $_SESSION['message'] . '");</script>';
    unset($_SESSION['message']); // remove the message from the session
}

if (isset($_SESSION['error'])) {
    echo '<script>alert("' . $_SESSION['error'] . '");</script>';
    unset($_SESSION['error']); // remove the message from the session
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/ba/css/base.css?<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="/ba/css/forms.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/pages/index" class="link-button">Home</a>
            <a href="/ba/pages/register" class="link-button">Register</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>Login</h1>
            <form action="/ba/pages/login_handler.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
</body>
</html>