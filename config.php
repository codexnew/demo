<?php
// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student_management_db');

[span_4](start_span)// Establishing connection[span_4](end_span)
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Connection check
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
