<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $date_of_hire = $_POST['date_of_hire'];

    $sql = "INSERT INTO employees (name, position, salary, date_of_hire)
            VALUES ('$name', '$position', '$salary', '$date_of_hire')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<form method="post" action="">
    Name: <input type="text" name="name" required><br>
    Position: <input type="text" name="position" required><br>
    Salary: <input type="number" name="salary" step="0.01" required><br>
    Date of Hire: <input type="date" name="date_of_hire" required><br>
    <input type="submit" value="Add Employee">
</form>
