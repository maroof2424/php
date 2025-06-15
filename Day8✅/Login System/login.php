<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login for demo
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
