<?php
    $dsn = 'mysql:host=localhost;dbname=students';
    $username = 'root';
    //$password = '';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>