<?php
session_start();

$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = "Name required";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $passwordErr = "Password required";
    } elseif (strlen($_POST['password']) < 6) {
        $passwordErr = "Password must be 6+ characters";
    } else {
        $password = htmlspecialchars($_POST['password']);
    }

    if (!$nameErr && !$emailErr && !$passwordErr) {
        $userData = "{$email}|{$password}|{$name}\n";
        file_put_contents("users.txt", $userData, FILE_APPEND);
        $successMsg = "✅ Signup successful! You can now <a href='login.php'>Login</a>";
    }
}
?>

<h2>Signup</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $name ?>"> <span style="color:red;"><?= $nameErr ?></span><br><br>
    Email: <input type="text" name="email" value="<?= $email ?>"> <span style="color:red;"><?= $emailErr ?></span><br><br>
    Password: <input type="password" name="password"> <span style="color:red;"><?= $passwordErr ?></span><br><br>
    <input type="submit" value="Signup">
</form>

<?php if ($successMsg) echo "<p style='color:green;'>$successMsg</p>"; ?>
