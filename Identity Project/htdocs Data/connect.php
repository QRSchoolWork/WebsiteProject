<?php
$user = 'root';
$pass = '';
$db = 'webproject';

$conn = new mysqli("localhost", $user, $pass, $db) or die("Connection failed");
echo "Database Connection Sucessful";
?>
