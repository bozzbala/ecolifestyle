<?php
session_start();
if(!isset($_SESSION['id'])){
    header ("Location: /");
}
include 'connection.php';
$id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

$row = mysqli_fetch_assoc($result);
$new_str = $row['events'] . " " . $_POST['id'];
$update = mysqli_query($conn, "UPDATE users SET events='$new_str' WHERE id='$id'");


mysqli_close($conn);
header("Location: /profile/profile.php");
exti();