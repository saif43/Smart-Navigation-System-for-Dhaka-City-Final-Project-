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

$latitude = $_POST["latitude"];
$id = $_POST["freightid"];
$longitude = $_POST["longitude"];

$sqladc = "INSERT INTO loc (id,lat,lng) VALUES ( $id,$latitude,$longitude)";
$res  = $conn->query($sqladc);
echo "ok";


?>