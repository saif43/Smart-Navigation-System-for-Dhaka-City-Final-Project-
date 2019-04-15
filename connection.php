<?php
  // 1. Create a database connection
   $dbhost = "127.0.0.1";
    $dbuser = "pointerr_gps";
    $dbpass = "zunaied658519?";
    $dbname = "pointerr_final_project";
 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
    }
    
?>