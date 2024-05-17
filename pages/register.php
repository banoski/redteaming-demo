<?php
session_start(); // start the session

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: /ba/pages/dashboard'); // redirect to dashboard
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/ba/css/base.css?<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="/ba/css/forms.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/pages/index" class="link-button">Home</a>
            <a href="/ba/pages/login" class="link-button">Login</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>Register</h1>
            <form action="/ba/php/register_handler" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <button type="submit">Register</button>
            </form>
        </section>
    </main>
</body>
</html>