<?php
session_start();

$username = $_SESSION['username'];
$password  = $_SESSION['password'];
echo $username."<br>";
echo $password."<br>";

echo "<a href='logout.php'>  logout</a>";
?>