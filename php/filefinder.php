<!-- diese Datei macht Path-Traveral möglich, also Files außerhalb htdocs zu finden)
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
