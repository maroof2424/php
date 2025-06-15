<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<h2>Student List</h2>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: {$row['name']} - Age: {$row['age']} - Email: {$row['email']}<br>";
}
?>
