<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Red Teaming - Exclusive Content</title>
    <link rel="stylesheet" type="text/css" href="/ba/css/base.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/pages/index" class="link-button">Home</a>
            <a href="/ba/pages/dashboard" class="link-button">Dashboard</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>Welcome, <?php echo $_SESSION['username']; ?> - Exclusive Content: Red Teaming</h1>
            <p>This page should only be accessible to logged-in users.</p>
            <img src="/ba/assets/redteaming.jpg" alt="Red Teaming">
            <h2>What is Red Teaming?</h2>
            <p>Red Teaming is a full-scope, multi-layered attack simulation designed to measure how well a company's people, networks, applications, and physical security controls can withstand an attack from a real-life adversary.</p>
            <h2>Why is Red Teaming Important?</h2>
            <p>In the modern world, cyber threats are constantly evolving. Red Teaming allows companies to stay one step ahead of these threats by identifying and fixing vulnerabilities before they can be exploited by malicious actors.</p>
            <h2>How Does Red Teaming Work?</h2>
            <p>A Red Team operation typically involves a group of security professionals, known as the Red Team, who simulate attacks on a company's security infrastructure. The goal of these simulated attacks is to identify vulnerabilities and test the company's defenses.</p>
            <p>If you can see this without logging in, it means there is a Broken Access Control issue.</p>
        </section>
    </main>
</body>
</html>