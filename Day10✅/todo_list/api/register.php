<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        $error = "Username already exists!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <div class="theme-toggle">
        <button id="theme-btn" onclick="toggleTheme()">🌙 Dark Mode</button>
    </div>
    <div class="form-container">
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
        <h2>Register</h2>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Register</button>
            <p class="link">Already have an account? <a href="index.php">Login</a></p>
        </form>
    </div>
    <script src="../public/theme.js"></script>
</body>
</html>