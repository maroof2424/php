<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- save this as insert.php -->
<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
include("db.php"); // Your database connection file

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

</body>
</html>