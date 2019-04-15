<?php

$dbhost = "127.0.0.1";
    $dbuser = "pointerr_gps";
    $dbpass = "zunaied658519?";
    $dbname = "pointerr_final_project";
 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>