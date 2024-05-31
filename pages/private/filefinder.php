<!-- diese Datei macht Path-Traveral möglich, also Files außerhalb htdocs zu finden)-->
<!DOCTYPE html>
<html>
<head>
    <title>File Finder</title>
    <link rel="stylesheet" type="text/css" href="/ba/css/base.css?<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="/ba/css/forms.css?<?php echo time()?>">
</head>
<body>
    <nav>
        <section>
            <a href="/ba/pages/index" class="link-button">Home</a>
        </section>
    </nav>
    <main>
        <section>
            <h1>File Finder</h1>
            <form action="/ba/pages/private/filefinder.php" method="GET">
                <input type="text" id="file" name="file" placeholder="File Path" required>
                <button type="submit">Find File</button>
            </form>
        </section>
        <section>
            <?php
            if (isset($_GET['file'])) {
                $file = $_GET['file'];
                $filePath = realpath(__DIR__ . '/' . $file);
                if (file_exists($filePath)) {
                    echo nl2br(file_get_contents($filePath));
                } else {
                    echo "Datei nicht gefunden.";
                }
            } else {
                echo "Keine Datei angegeben.";
            }
            ?>
        </section>
    </main>
</body>
</html>