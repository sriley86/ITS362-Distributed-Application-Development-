<?php
    $dsn = 'mysql:host=localhost;dbname=studentList';
    $username = 'root';
    //$password = '';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

    function display_db_error($error_message) {
        include '../errors/error.php';
        exit;
    }
?>