<?php

include_once('connection.php');

session_start();
$userid = $_SESSION['id'];

$user  = $_POST['user'];
$conn->query("INSERT INTO friends (from_id, to_id, status) VALUES ('$userid', '$user', '0')");

$output = '';


$output.='<tr>
<th>Name</th>
<th>Request</th>
</tr> ';

$result = $conn->query("SELECT * FROM user WHERE user.id NOT IN (SELECT t1.id FROM (SELECT to_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid') UNION SELECT from_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid')) AS t1) AND user.id!='$userid'");   


while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $output.= '<tr>
                <td>'.$row["name"].'</td>
                <td><a onclick="addfriend('.$id.')" class="btn btn-success">Add Friend</a></td>
            </tr>';

}


while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $output.= '<tr>
                <td>'.$row["name"].'</td>
                <td><a onclick="addfriend('.$id.')" class="btn btn-success">Add Friend</a></td>
            </tr>';

}


echo $output;