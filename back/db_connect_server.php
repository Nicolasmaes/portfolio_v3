<?php
$servername = 'localhost';
$dbname = 'back_office';
$username = 'root';
$password = 'PMMdfMXQxeZldZe';
try {
    $db = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* echo 'success'; */
} catch (PDOException $e) {
    echo 'Error connection : '.$e->getMessage();
}