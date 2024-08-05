<?php
include 'config.php';

$id = $_GET['id'];

// Delete data from database
$sql = "DELETE FROM employees WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: view_employees.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
