<?php

$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=localhost;dbname=netmatters_posted",$username, $password);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}