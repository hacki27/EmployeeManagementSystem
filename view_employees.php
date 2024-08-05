<?php include 'header.php'; ?>

<main>
    <h2>Employee List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Date of Hire</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["name"]. "</td>
                    <td>" . $row["position"]. "</td>
                    <td>" . $row["salary"]. "</td>
                    <td>" . $row["date_of_hire"]. "</td>
                    <td>
                        <a href='edit_employee.php?id=" . $row["id"] . "'>Edit</a> |
                        <a href='delete_employee.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this employee?')\">Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No employees found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</main>

<?php include 'footer.php'; ?>
