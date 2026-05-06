<?php
$host = 'localhost';
$db   = 'student_db';
$user = 'root';
$pass = '';   // XAMPP এ খালি রাখুন

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
