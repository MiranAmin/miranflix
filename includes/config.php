<?php
/* Turns on output buffer. Means page waits until all of the php
    is finished running before running anything else */    
    ob_start();
    session_start();
    date_default_timezone_set("Europe/London"); 

    try {
        $con = new PDO("mysql:dbname=miranflix;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }
?>