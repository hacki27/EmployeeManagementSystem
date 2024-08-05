<?php
include 'config.php';

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$salary = $_POST['salary'];
$date_of_hire = $_POST['date_of_hire'];

// Update data in database
$sql = "UPDATE employees SET name='$name', position='$position', salary='$salary', date_of_hire='$date_of_hire' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location: view_employees.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
