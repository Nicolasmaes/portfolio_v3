<?php
$servername = 'localhost';
$dbname = 'back_office';
$username = 'nicolasm';
$password = 'g0Wr1plazhzf1Q==';
try {
    $db = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* echo 'success'; */
} catch (PDOException $e) {
    echo 'Error connection : '.$e->getMessage();
}