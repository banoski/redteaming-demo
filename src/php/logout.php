<?php
session_start();
session_unset();
session_destroy();
header("Location: /ba/src/html/index.html");
exit();
?>