<?php
$servername = "localhost";
$username = "root";
$password = "";
$databace = "underground_fitness";

$conn = mysqli_connect($servername, $username, $password, $databace);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
