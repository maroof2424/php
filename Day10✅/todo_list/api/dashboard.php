<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
require 'config.php';

// Add Task
if (isset($_POST['add_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO tasks (user_id, title, description, due_date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $title, $description, $due_date]);
}

// Update Task Status
if (isset($_GET['complete'])) {
    $task_id = $_GET['complete'];
    $stmt = $pdo->prepare("UPDATE tasks SET status = 'Completed' WHERE id = ? AND user_id = ?");
    $stmt->execute([$task_id, $_SESSION['user_id']]);
    header("Location: dashboard.php");
    exit;
}

// Delete Task
if (isset($_GET['delete'])) {
    $task_id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = ? AND user_id = ?");
    $stmt->execute([$task_id, $_SESSION['user_id']]);
    header("Location: dashboard.php");
    exit;
}

// Fetch Tasks
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE user_id = ? ORDER BY due_date");
$stmt->execute([$_SESSION['user_id']]);
$tasks = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <div class="theme-toggle">
        <button id="theme-btn" onclick="toggleTheme()">🌙 Dark Mode</button>
    </div>
    <div class="dashboard-container">
        <h2>Welcome, User!</h2>
        <a href="logout.php" class="logout">Logout</a>
        <h3>Add Task</h3>
        <form method="POST">
            <div class="input-group">
                <input type="text" name="title" placeholder="Task Title" required>
            </div>
            <div class="input-group">
                <textarea name="description" placeholder="Task Description"></textarea>
            </div>
            <div class="input-group">
                <input type="date" name="due_date" required>
            </div>
            <button type="submit" name="add_task">Add Task</button>
        </form>
        <h3>Your Tasks</h3>
        <table id="tasks-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($task['title']); ?></td>
                        <td><?php echo htmlspecialchars($task['description']); ?></td>
                        <td><?php echo $task['due_date']; ?></td>
                        <td><span class="status <?php echo strtolower($task['status']); ?>"><?php echo $task['status']; ?></span></td>
                        <td class="actions">
                            <?php if ($task['status'] == 'Pending'): ?>
                                <a href="dashboard.php?complete=<?php echo $task['id']; ?>" class="action-complete">Complete</a>
                            <?php endif; ?>
                            <a href="dashboard.php?delete=<?php echo $task['id']; ?>" class="action-delete" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="../public/theme.js"></script>
</body>
</html>