<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db8');

try {
    $conn = new PDO('mysql:host=localhost;dbname=db8;', 'root', '');

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

} catch (Exception $ex) {
    die("Error: " . $ex->getMessage());
}
?>

