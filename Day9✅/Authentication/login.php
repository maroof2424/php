<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
    $authenticated = false;

    foreach ($lines as $line) {
        list($savedEmail, $savedPassword, $savedName) = explode("|", $line);

        if ($email == $savedEmail && $password == $savedPassword) {
            $_SESSION['user'] = $savedName;
            $_SESSION['email'] = $savedEmail;
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "❌ Invalid email or password";
    }
}
?>

<h2>Login</h2>
<form method="post">
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
<p>Don't have an account? <a href="signup.php">Signup here</a></p>
