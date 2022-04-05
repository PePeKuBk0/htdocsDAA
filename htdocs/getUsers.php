<?php
include('./connection.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users =[];
while($username = $result ->fetch_assoc()){
    array_push($users, $username);
    }
?>