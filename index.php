<?php include 'db.php'; ?>
<h1>Student List</h1>
<ul>
<?php
$result = $conn->query("SELECT name FROM students");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . "</li>";
    }
} else {
    echo "No students found.";
}
?>
</ul>