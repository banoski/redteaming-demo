<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

var_dump($dotenv->load());
echo '<br>' . 'variables_order: ' . ini_get('variables_order') . '<br>';
?>