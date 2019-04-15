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

$latlng = array();

$sqladc = "SELECT * FROM bus_stop ";
$res  = $conn->query($sqladc);

while($data = mysqli_fetch_array($res))
{   
	$value = new stdclass;
	$value->id=$data['bus_stop_id'];
	$value->busstopname=$data['name'];
	$value->lat=$data['l_lat'];
	$value->lng=$data['l_lng'];
	$latlng[]=$value;
}
echo json_encode($latlng, JSON_FORCE_OBJECT);

?>