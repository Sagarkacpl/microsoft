<?php
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'microsoft_db');
// define('DB_USER', 'root');
// define('DB_PASS', '');

// try {
//     $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
//     $db = new PDO($dsn, DB_USER, DB_PASS);
// } catch (PDOException $e) {
//     die('Database connection failed.'. $e->getMessage());
// }


$db = mysqli_connect('localhost','root','','microsoft_db');

