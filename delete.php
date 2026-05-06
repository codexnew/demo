<?php
include 'config.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $conn->query("DELETE FROM students WHERE id = $id");
}
header("Location: view_student.php");
exit();
?>
