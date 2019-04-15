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

$sql = "SELECT * FROM bus_stop order by name ASC";

$result = mysqli_query($conn,$sql);
$x = '<option>Select BusStop</option>';

while($row = mysqli_fetch_assoc($result))
{   

	$x .= '<option value="'.$row['l_lat'].' ,'.$row['l_lng'].' ">'.$row['name'].'</option>';
}

echo $x;

?>