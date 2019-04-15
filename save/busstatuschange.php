<?php
$server = "localhost";
$user = "pointerr_location";
$password = "zunaied658519?";
$db = "pointerr_location";
// Create connection
$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$index = $_POST["index"];

$sqlstatus = "UPDATE bus SET status=1 where id=$index";
$res  = $conn->query($sqlstatus);
echo "Status Change to: 1";


?>