<?php
include 'config.php';

$id = $_GET['id'];

// Fetch employee data
$sql = "SELECT * FROM employees WHERE id = $id";
$result = $conn->query($sql);
$employee = $result->fetch_assoc();

?>

<?php include 'header.php'; ?>

<main>
    <h2>Edit Employee</h2>
    <form action="update_employee.php" method="post">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $employee['name']; ?>" required>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?php echo $employee['position']; ?>" required>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" step="0.01" value="<?php echo $employee['salary']; ?>" required>

        <label for="date_of_hire">Date of Hire:</label>
        <input type="date" id="date_of_hire" name="date_of_hire" value="<?php echo $employee['date_of_hire']; ?>" required>

        <input type="submit" value="Update Employee">
    </form>
</main>

<?php include 'footer.php'; ?>
