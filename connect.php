<?php

require('./config.php');

try {
    //code...
    $dsn = "mysql:host=localhost;dbname=blog";
    $conn = new PDO($dsn, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Start Session
    session_start();

    // Setting the user details in the session
    $_SESSION['user_details'] = [
        'user_ip' => $_SERVER['REMOTE_ADDR'],
        'user_browser' => get_browser($_SERVER['HTTP_USER_AGENT'], true)
    ];

} catch (PDOException $e) {
    die($e->getMessage());
}
