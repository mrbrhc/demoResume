<?php
    

    $dbhost = "localhost";
    $dbuser = "ec2-user";
    $dbpass = "mason";
    $dbname = "CS2830";

    // Create connection
    $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }
    

?>