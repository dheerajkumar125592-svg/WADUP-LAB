<!-- 3.5 Write a PHP script to create a session  -->

<?php
session_start();

$_SESSION["username"] = "Dheeraj";
$_SESSION["email"] = "Dheeraj@gmail.com";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"];
?>